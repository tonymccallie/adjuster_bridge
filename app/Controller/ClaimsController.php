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
					'Claim.user_id' => $this->request->data['User']['id']
				),
				'contain' => array()
			));	
			$message = array(
				'status' => 'SUCCESS',
				'data' => $claims
			);
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

		$data = array(
			'Claim' => $json['data']
		);
		$pics = array(
			'pic_front_left','pic_front_right','pic_rear_left','pic_rear_right','pic_water_inside',
			'pic_water_outside','pic_optional1','pic_optional2','pic_optional3','pic_optional4'
		);
		
		foreach($pics as $pic) {
			if(!empty($data['Claim'][$pic])) {
				$filename = $data['Claim']['id'].$pic.'.jpg';
				file_put_contents(APP . 'webroot/uploads/'.$filename, base64_decode(str_replace('data:image/jpeg;base64,', '', $data['Claim'][$pic])));
				$data['Claim'][$pic] = $filename;
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
			}
		}
		
		$this->Claim->create();
		
		if(!empty($data['upload_preliminary'])) {
			$data['Claim']['preliminary_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if(!empty($data['upload_advanced'])) {
			$data['Claim']['advanced_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if(!empty($data['upload_engineer'])) {
			$data['Claim']['engineer_uploaded'] = date('Y-m-d H:i:s');
		}
		
		if($this->Claim->save($data)) {
			$message = array(
				'status' => 'SUCCESS',
				'data' => $data
			);
		} else {
			$message['message'] = 'There was an error saving the data';
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

	function ajax_cron() {
		$newClaims = 0;
		Configure::write('debug', 2);
		$this->layout = "ajax";
		App::uses('HttpSocket', 'Network/Http');
		$HttpSocket = new HttpSocket();
		$data = array(
			'ACID' => '33152',
			'companyKey' => 'ORI',
			'LoginCode' => 'FRARECRAC7AF8E76AVAC',
			'startDate' => date('Y-m-d\TH:i:s',strtotime('-2 hour')),
			'endDate' => date('Y-m-d\TH:i:s'),
			'searchFilter' => ''
		);
		$claimsfile = $HttpSocket->post('https://filetrac.onlinereportinginc.com/FileTracAPI/FileTracAPI.asmx/FileTracAPI_GetClaims', $data);
		if($claimsfile->isOk()) {
			$response = Xml::toArray(Xml::build($claimsfile->body()));
			$claimsInfo = Xml::toArray(Xml::build($response['string']));
			foreach($claimsInfo['CLAIMS_PACKET']['claim'] as $claim) {
				$user = $this->Claim->User->lookup(array(
					'userID' => $claim['USER_PACKET'][0]['PrimaryAdjuster']['userID']
				));
				if(empty($claim['USER_PACKET'][0]['PrimaryAdjuster']['adjusterFName'])) {
					$claim['USER_PACKET'][0]['PrimaryAdjuster']['adjusterFName'] = "UNASSIGNED";
					$claim['USER_PACKET'][0]['PrimaryAdjuster']['userEMail'] = "unassigned@advancedadjusting.com";
					$claim['USER_PACKET'][0]['PrimaryAdjuster']['userLogin'] = "UNASSIGNED";
				}
				
				$claim_id = $this->Claim->find('first',array(
					'conditions' => array(
						'Claim.claimID' => $claim['claimID']
					),
					'contain' => array()
				));
				
				if(!$claim_id) {
					$data = array(
						'Claim' => array(
							'claimID' => $claim['claimID'],
							'claimFileID' => $claim['claimFileID'],
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
							'json' => json_encode($claim)
						),
						'User' => array(
							'id' => $user,
							'role_id' => 2,
							'first_name' => $claim['USER_PACKET'][0]['PrimaryAdjuster']['adjusterFName'],
							'last_name' => $claim['USER_PACKET'][0]['PrimaryAdjuster']['adjusterLName'],
							'email' => $claim['USER_PACKET'][0]['PrimaryAdjuster']['userEMail'],
							'username' => $claim['USER_PACKET'][0]['PrimaryAdjuster']['userLogin'],
						)
					);
					$newClaims++;
					$this->Claim->create();
					if(!$this->Claim->saveAll($data)) {
						debug($data);
					}
				}
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
		$claims = $this->paginate();
		$this->set(compact('claims'));
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
	
	public function admin_pdf($claim_id = null) {
		$this->set(compact('claim_id'));
	}

	public function ajax_builder($report = '', $id = null) {
		$url = Common::currentUrl().'ajax/claims/'.$report.'/'.$id;
		App::import('Vendor','HTML2PDF',array('file'=>'html2pdf/html2pdf.class.php'));
		$html2pdf = new HTML2PDF('P','LETTER','en');
		$content = file_get_contents($url);
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->writeHTML($content);
		$html2pdf->Output('preliminary.pdf');
	}

	public function ajax_preliminary($claim_id = null) {
		Configure::write('debug', 2);
		$this->layout = "print";
		$claim = $this->Claim->findByid($claim_id);
		$this->set(compact('claim'));
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