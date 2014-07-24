<?php
App::uses('AppController', 'Controller');
class ClaimsController extends AppController {
	function app_list() {
		$message = array(
			'status' => 'ERROR',
			'data' => $this->request->data,
			'message' => 'No information passed'
		);

		if(!empty($this->request->data['User']['id'])) {
		
			$claims = $this->Claim->find('all',array(
				'conditions' => array(
					'Claim.user_id' => $this->request->data['User']['id'],
					'status NOT' => 'CLOSED'
				),
				'contain' => array()
			));	
			
			foreach($claims as $k => $claim) {
				unset($claims[$k]['Claim']['json']);
			}
			
			$message = array(
				'status' => 'SUCCESS',
				'data' => $claims
			);
		}
		
		if($claims) {
			$read = array();
			foreach($claims as $k => $claim) {
				array_push($read, array(
					'id' => $claim['Claim']['id'],
					'status' => 'READ'
				));
			}
			$this->Claim->saveMany($read);
		}

		$this->set(array(
			'message' => $message,
			'_serialize' => 'message'
		));
	}
	
	public function app_upload() {
		$message = array(
			'status' => 'ERROR',
			'data' => $this->request->data['json'],
			'post' => $_POST,
			'message' => 'init'
		);
		
		$json = json_decode($this->request->data['json'],true);
		
		//$this->log(array('app_upload',$message));

		$data = array(
			'Claim' => $json['data']
		);
		$pics = array(
			'pic_front_right','pic_front_left','pic_rear_left','pic_rear_right','pic_water_inside','pic_water_outside','pic_roof_front','pic_roof_rear','pic_optional1','pic_optional2','pic_optional3','pic_optional4','pic_optional5','pic_optional6','pic_optional7','pic_optional8','pic_optional9','pic_optional10','pic_optional11','pic_optional12'
		);
		
		foreach($pics as $pic) {
			unset($data['Claim'][$pic]);
		}
		
		for($intnotes = 1; $intnotes <= 6; $intnotes++) {
			if(!empty($json['images']['pic_optional'.$intnotes.'_notes'])) {
				$data['Claim']['pic_optional'.$intnotes.'_notes'] = $json['images']['pic_optional'.$intnotes.'_notes'];
			}
		}
		
		$signatures = array(
			'signature','witness'
		);
		
		foreach($signatures as $signature) {
			if(!empty($data['Claim'][$signature])) {
				$filename = $data['Claim']['id'].$signature.'.png';
				file_put_contents(APP . 'webroot/uploads/'.$filename, base64_decode(str_replace('data:image/png;base64,', '', $data['Claim'][$signature])));
				$data['Claim'][$signature] = $filename;
			} else {
				unset($data['Claim'][$signature]);
			}
		}
		
		$this->Claim->create();
		
		if(!empty($json['upload_preliminary'])) {
			$data['Claim']['preliminary_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if(!empty($json['upload_advanced'])) {
			$data['Claim']['advanced_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if(!empty($json['upload_engineer'])) {
			$data['Claim']['engineer_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if(!empty($json['upload_inspection'])) {
			$data['Claim']['inspection_uploaded'] = date('Y-m-d H:i:s');
		}
		
		unset($data['Claim']['claimFileID']);
		
		if($this->Claim->save($data)) {
			$this->log(array($data['Claim']['id'],$data['Claim']['water_feet']));
			$message = array(
				'status' => 'SUCCESS',
				'data' => $data
			);
		} else {
			$this->log(array($data,$this->Claim));
			$message['message'] = 'There was an error saving the data';
		}
		
		$this->set(array(
			'message' => $message,
			'_serialize' => 'message'
		));
	}
	
	function app_image_upload() {
		Configure::write('debug', 0);
		$this->layout = "ajax";
		$message = array(
			'status' => 'ERROR',
			'data' => $this->request->data,
			'message' => 'No information passed'
		);
		
		//$this->log(array('app_image_upload',$this->request->params['form']));
		
		$tempFile = $this->request->params['form']['image']['tmp_name'];
		move_uploaded_file($tempFile,APP . 'webroot/uploads/'.$this->request->params['form']['image']['name']);

		$data = array(
			'Claim' => array(
				'id' => $this->request->data['claim_id'],
				$this->request->data['field'] => $this->request->params['form']['image']['name']
			)
		);
		
		$this->Claim->create();
		if($this->Claim->save($data)) {
			$this->log($data);
			$message['status'] = 'SUCCESS';
		}
		
		$this->set(array(
			'message' => $message,
			'_serialize' => 'message'
		));
	}
	
	function app_close($id = null) {
		$message = array(
			'status' => 'ERROR',
			'data' => $this->request->data,
			'message' => 'No information passed'
		);

		if(!empty($this->request->data['Claim']['id'])) {
			if($this->Claim->save($this->request->data)) {
				$message = array(
					'status' => 'SUCCESS',
					'data' => $this->request->data
				);
			} else {
				$message['message'] = 'There was an error closing the Claim';
			}
		}

		$this->set(array(
			'message' => $message,
			'_serialize' => 'message'
		));
	}

	function index($user_id = null) {
		$claims = $this->paginate();
		
		$this->set(array(
			'claims' =>  $claims,
			'_serialize' => array('claims')
		));
	}
	
	function ajax_assign() {
		Configure::write('debug', 2);
		$this->layout = "ajax";
		$unassigned = $this->Claim->User->lookup(array('User.username'=>'UNASSIGNED'));
		$claims = $this->Claim->find('all',array(
			'conditions' => array(
				'Claim.user_id' => $unassigned
			)
		));

		$soap = new SoapClient("http://ftservices.onlinereportinginc.com/service.asmx?WSDL",array(
			'trace'=>1,'soap_version' => SOAP_1_2,
			'classmap'=> array(
				'GetClaimData' => 'GetClaimData'
			)
		));
		
		$xml = '<GetClaimData xmlns="http://filetrac.onlinereportinginc.com/ftservices/">'.
					'<oParms>'.
						'<Login>mikemorgan</Login>'.
						'<Password>Bob13013!</Password>'.
						'<CompanyKey>ORI</CompanyKey><UserID>205079</UserID>'.
						'<ClaimID>'.$claims[0]['Claim']['claimID'].'</ClaimID>'.
					'</oParms>'.
				'</GetClaimData>';
		$data = new SoapVar($xml,XSD_ANYXML);
		
		$result = $soap->GetClaimData($data);
		var_dump($result);
		var_dump($soap->__getLastRequest());
		
	}
	
	function ajax_update() {
		Configure::write('debug', 2);
		$this->layout = "ajax";
		$claims = $this->Claim->find('all', array(
			'conditions' => array(
				'Claim.claimFileID' => '0'
			)
		));
		
		foreach($claims as $claim) {
			$json = json_decode($claim['Claim']['json'],true);
			$claim['Claim']['claimFileID'] = $json['claimFileID'];
			$this->Claim->create();
			$this->Claim->save($claim);
		}
		
	}

	function ajax_cron() {
		$newClaims = 0;
		Configure::write('debug', 2);
		$this->layout = "ajax";
		App::uses('HttpSocket', 'Network/Http');
		$HttpSocket = new HttpSocket();
		
		//$startDate = '-2 hour';
		$startDate = '-2 days';
		
		$data = array(
			'ACID' => '33152',
			'companyKey' => 'ORI',
			'LoginCode' => 'FRARECRAC7AF8E76AVAC',
			'startDate' => date('Y-m-d\TH:i:s',strtotime($startDate)),
			'endDate' => date('Y-m-d\TH:i:s'),
			'searchFilter' => ''
		);
		$claimsfile = $HttpSocket->post('https://filetrac.onlinereportinginc.com/FileTracAPI/FileTracAPI.asmx/FileTracAPI_GetClaims', $data);
		if($claimsfile->isOk()) {
			$response = Xml::toArray(Xml::build($claimsfile->body()));
			$claimsXml = file_get_contents($response['string']);
			try {
				$claimsInfo = Xml::toArray(Xml::build($response['string']));
				if(!empty($claimsInfo['CLAIMS_PACKET']['claim']['claimID'])) {
					$claimsInfo['CLAIMS_PACKET']['claim'] = array(
						$claimsInfo['CLAIMS_PACKET']['claim']
					);
				}
				foreach($claimsInfo['CLAIMS_PACKET']['claim'] as $claim) {
					$primaryAdjuster = array();
					$assignedSupervisor = array();
					$claimsRep = array();
					
					foreach($claim['USER_PACKET'] as $userpacket) {
						foreach($userpacket as $userrole => $packetinfo) {
							switch($userrole) {
								case 'PrimaryAdjuster':
									$primaryAdjuster = $packetinfo;
									break;
								case 'PrimaryClaimsRep':
									$claimsRep = $packetinfo;
									break;
								case 'AssignedSupervisor':
									$assignedSupervisor = $packetinfo;
									break;
								
							}
						}
					}
					if(empty($assignedSupervisor)) {
						$assignedSupervisor['supervisorEMail'] = 'mikemorgan@advadj.com';
					}
					
					$user = $this->Claim->User->lookup(array(
						'username' => $primaryAdjuster['userLogin']
					));
					if(empty($primaryAdjuster['adjusterFName'])) {
						$primaryAdjuster['adjusterFName'] = "UNASSIGNED";
						$primaryAdjuster['userEMail'] = "unassigned@advancedadjusting.com";
						$primaryAdjuster['userLogin'] = "UNASSIGNED";
					}
					
					$claim_id = $this->Claim->find('first',array(
						'conditions' => array(
							'Claim.claimID' => $claim['claimID']
						),
						'contain' => array()
					));
					
					if(is_array($claim['claimDateDue'])) {
						$claim['claimDateDue'] = '';
					}
					
					if(!$claim_id) {
						$data = array(
							'Claim' => array(
								'claimID' => $claim['claimID'],
								'claimFileID' => $claim['claimFileID'],
								'lossDate' => $claim['lossDate'],
								'entered' => date('Y-m-d H:i:s',strtotime($claim['claimDateEntered'])),
								'due' => date('Y-m-d H:i:s',strtotime($claim['claimDateDue'])),
								'type' => $claim['lossType'],
								'unit' => $claim['lossUnit'],
								'address1' => $claim['lossAddr1'],
								'address2' => $claim['lossAddr2'],
								'city' => $claim['lossCity'],
								'state' => $claim['lossState'],
								'zip' => $claim['lossZIP'],
								'phone' => $claim['CLAIM_CONTACTS']['Contact'][0]['contactPhone3'],
								'policy_number' => $claim['CLAIM_CONTACTS']['Contact'][0]['policyNum'],
								'first_name' => $claim['CLAIM_CONTACTS']['Contact'][0]['contactFName'],
								'last_name' => $claim['CLAIM_CONTACTS']['Contact'][0]['contactLName'],
								'user_id' => $user,
								'json' => json_encode($claim),
								'status' => 'NEW',
								'email' => $assignedSupervisor['supervisorEMail']
							),
							'User' => array(
								'id' => $user,
								'role_id' => 2,
								'first_name' => $primaryAdjuster['adjusterFName'],
								'last_name' => $primaryAdjuster['adjusterLName'],
								'email' => $primaryAdjuster['userEMail'],
								'username' => $primaryAdjuster['userLogin'],
							)
						);
						$newClaims++;
						$this->Claim->create();
						if(!$this->Claim->saveAll($data)) {
							debug(array('ERROR-1',$this->Claim->validationErrors,$data));
						}
					} else {
						if($claim_id['Claim']['status'] == 'NEW') {
							$data = array(
								'Claim' => array(
									'id' => $claim_id['Claim']['id'],
									'user_id' => $user,
									'json' => json_encode($claim),
									'phone' => $claim['CLAIM_CONTACTS']['Contact'][0]['contactPhone3'],
									'email' => $assignedSupervisor['supervisorEMail']
								)
							);
							$this->Claim->create();
							if(!$this->Claim->save($data)) {
								debug(array('ERROR-2',$this->Claim->validationErrors,$data));
							}
						} else {
							//JSON CLEANUP
							/*
							$data = array(
								'Claim' => array(
									'id' => $claim_id['Claim']['id'],
									'json' => json_encode($claim),
								)
							);
							$this->Claim->create();
							if(!$this->Claim->save($data)) {
								debug(array('ERROR-2',$this->Claim->validationErrors,$data));
							}
							*/
							
						}
					}
				}
			} catch(XmlException $e) {
				
			}
		}
		$this->set(compact('newClaims'));
	}
	
	public function latest() {
		die(debug($this->request->params));
		$claims = $this->Claim->find('all', array(
			'conditions' => array(),
			
		));
		
		$this->set(array(
			'claims' =>  $claims,
			'_serialize' => array('claims')
		));
	}
	
	public function admin_index() {
		$paginate = array(
			'conditions' => array()
		);
		
		if(!empty($this->request->data['Claim']['search'])) {
			$paginate['conditions']['Claim.claimFileID'] = $this->request->data['Claim']['search'];
		}
		
		$this->paginate = $paginate;
		$claims = $this->paginate();
		$this->set(compact('claims'));
	}
	
	public function admin_test() {
		$soap = new SoapClient("http://ftservices.onlinereportinginc.com/service.asmx?WSDL",array(
			'trace'=>1,'soap_version' => SOAP_1_2,
			'classmap'=> array(
				'UploadReport' => 'UploadReport'
			)
		));
		
		$xml = file_get_contents(Common::currentUrl().'ajax/claims/builder/preliminary/110');
		$data = new SoapVar($xml,XSD_ANYXML);
		
		$result = $soap->UploadReport($data);
		debug($result);
		debug($soap->__getLastRequestHeaders());
		die($soap->__getLastRequest());
	}

	public function admin_edit($id = null) {
		if (!$this->Claim->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Claim->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Claim.' . $this->Claim->primaryKey => $id));
			$this->request->data = $this->Claim->find('first', $options);
		}
	}
	
	public function ajax_pdf($report = '', $id = null) {
		$this->layout = "ajax";
		$url = Common::currentUrl().'ajax/claims/'.$report.'/'.$id;
		App::import('Vendor','HTML2PDF',array('file'=>'html2pdf/html2pdf.class.php'));
		$html2pdf = new HTML2PDF('P','LETTER','en');
		$content = file_get_contents($url);
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->writeHTML($content);
		$claim = $this->Claim->findById($id);
		$filename = $claim['Claim']['claimFileID'].'_'.$report.'.pdf';
		//$file = $html2pdf->Output(APP . 'webroot/reports/'.$filename,'F'); //'F' to write file
		$file =$html2pdf->Output($filename); //stream file
	}

	public function ajax_builder($report = '', $id = null) {
		$this->layout = "ajax";
		$url = Common::currentUrl().'ajax/claims/'.$report.'/'.$id;
		App::import('Vendor','HTML2PDF',array('file'=>'html2pdf/html2pdf.class.php'));
		$html2pdf = new HTML2PDF('P','LETTER','en');
		$content = file_get_contents($url);
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->writeHTML($content);
		$filename = $id.'_'.$report.'.pdf';
		//$savefile = $html2pdf->Output(APP . 'webroot/reports/'.$filename,'F'); //'F' to write file
		//$file = 'CHECK DIRECTORY';
		$file = base64_encode($html2pdf->Output('','S')); //stream file
		$claim = $this->Claim->findById($id);
		$title = 'Unset Title';
		switch($report) {
			case 'preliminary':
				$title = 'Preliminary Report';
				break;
			case 'engineer':
				$title = 'Engineer Request';
				break;
			case 'advanced':
				$title = 'Flood Advanced Payment Request';
				break;
			case 'inspection':
				$title = 'Inspection for Residential';
				break;
			
		}
		$this->set(compact('filename','file','claim','title','report'));
	}

	public function ajax_preliminary($claim_id = null) {
		Configure::write('debug', 2);
		$this->layout = "print";
		$claim = $this->Claim->findByid($claim_id);
		$this->set(compact('claim'));
	}
	
	public function ajax_advanced($claim_id = null) {
		Configure::write('debug', 2);
		$this->layout = "print";
		$claim = $this->Claim->findByid($claim_id);
		$this->set(compact('claim'));
	}
	
	public function ajax_engineer($claim_id = null) {
		Configure::write('debug', 2);
		$this->layout = "print";
		$claim = $this->Claim->findByid($claim_id);
		$this->set(compact('claim'));
	}
	
	public function ajax_inspection($claim_id = null) {
		Configure::write('debug', 2);
		$this->layout = "print";
		$claim = $this->Claim->findByid($claim_id);
		$this->set(compact('claim'));
	}
	
	public function ajax_upload_latest() {
		$this->layout = "ajax";
		Configure::write('debug', 2);
	
		$soap = new SoapClient("http://ftservices.onlinereportinginc.com/service.asmx?WSDL",array(
			'trace'=>1,'soap_version' => SOAP_1_2,
			'classmap'=> array(
				'UploadReport' => 'UploadReport'
			)
		));
		
		foreach(array('preliminary','advanced','engineer','inspection') as $report) {
			$available = $this->Claim->find('all',array(
				'conditions' => array(
					'Claim.'.$report.'_uploaded NOT' => null
				)
			));
			
			foreach($available as $claim) {
				$xml = file_get_contents(Common::currentUrl().'ajax/claims/builder/'.$report.'/'.$claim['Claim']['id']);
				$data = new SoapVar($xml,XSD_ANYXML);
				$result = $soap->UploadReport($data);
				if(!empty($result->UploadReportResult)) {
					$filetrac = $result->UploadReportResult;
					if(!empty($claim['Claim']['email'])) {
						$email = $claim['Claim']['email'];
					} else {
						$email = 'mikemorgan@advadj.com';
					}
					Common::email(array(
						'to' => $email,
						'bcc' => 'tony@threeleaf.net',
						'cc' =>'mikemorgan@advadj.com',
						'subject' => 'New Report Uploaded',
						'template' => 'preliminary',
						'variables' => array(
							'url' => 'https://filetrac.onlinereportinginc.com/system/reportView.asp?reportID='.$filetrac,
							'claim' => $claim,
							'report' => $report
						)
					),'');
					$data = array(
						'Claim' => array(
							'id' => $claim['Claim']['id'],
							$report.'_uploaded' => null
						)
					);
					$this->Claim->create();
					$this->Claim->save($data);
				} else {
					$this->log(array($result,$claim));
					Common::email(array(
						'to' => 'tony@threeleaf.net',
						'subject' => 'WARNING: '.$report.' upload issue',
						'template' => 'error',
						'variables' => array(
							'error' => 'There was a problem uploading the report '.$claim['Claim']['claimFileID'].'<br/>'.Common::currentUrl().'ajax/claims/'.$report.'/'.$claim['Claim']['id']
						)
					),'');
				}
			}
			
			echo date('Y-m-d H:i:s')." - ".count($available)." ".$report." reports uploaded\n";
		}
		
	}

	public function admin_delete($id = null) {
		$this->Claim->id = $id;
		if (!$this->Claim->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->Claim->delete()) {
			$this->Session->setFlash('Claim deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Claim was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
	
}
?>
