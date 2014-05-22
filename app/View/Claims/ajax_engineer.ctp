<?php
	$unmarked = '[&nbsp;&nbsp;]';
	$marked = '[<b>X</b>]';
	$json = json_decode($claim['Claim']['json'],true);
?>
<style type="text/css" media="screen">
<!--
	body {
		font-size: 12px;
		font-family: arial;
	}
	h3 {
		margin: 0;
		font-size: 12px;
	}
	
	table {
		width: 100%;
		font-size: 12px;
	}
	
	table.page {
		width: 100%;
	}
	
	td.centered {
		text-align: center;
	}
-->
</style>
<page backtop="14mm">
	<table class="page">
		<tr>
			<td class="centered" style="width: 100%">
				<?php echo $this->Html->image(Common::currentUrl().'img/logo.png') ?>
			</td>
		</tr>
		<tr>
			<td class="centered">
				<h3>Engineer Request</h3>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					<b>DATE:</b> <?php echo date('m/d/Y') ?>
				</p>
				<p>
					<b>FROM:</b> <?php echo $claim['User']['first_name'].' '.$claim['Claim']['last_name'] ?>
				</p>
				<p>
					<b>RE:  INSURED’S NAME:</b> <?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?><br />
					<b>INSURED’S PHONE:</b> <?php echo $claim['Claim']['phone'] ?>
				</p>
				<p>
					<b>LOSS LOCATION ADDRESS:</b> <?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>, <?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
				</p>
				<p>
					<b>CARRIER:</b> <?php echo 'variable' ?><br />
					<b>POLICY NUMBER:</b> <?php echo $claim['Claim']['policy_number'] ?><br />
					<b>DATE OF LOSS:</b> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_loss_assigned'])) ?>
				</p>
				<p>
					<b><u>REMARKS:</u></b><br />
					Please inspect the property with regards to possible damage as a result of the flood that occurred at the insured premises on <b><?php echo date('m/d/Y',strtotime($claim['Claim']['date_loss_assigned'])) ?></b>.  Please determine if the flood occurrence on <b><?php echo date('m/d/Y',strtotime($claim['Claim']['date_loss_assigned'])) ?></b> damaged the structure at the loss location listed above.  Please include the following in your report:
				</p>
				<ol>
					<li>Did the loss occur due to flooding?  If yes, answer A, B & C.
						<ol style="list-style-type: lower-alpha;">
							<li>Was the loss caused by velocity flow of water against the risk?</li>
							<li>Was there any damage to the structure that was caused by hydrostatic pressure?</li>
							<li>Was the loss caused by land subsidence?</li>
						</ol>
					</li>
					<li>What portion of the loss may have been pre-existing?
						<ol style="list-style-type: lower-alpha;">
							<li>To what extent did it affect the loss?  Include percentage of damage to flood related damage.</li>
						</ol>
					</li>
					<li>What portion of the loss may have been caused by other perils such as wind?</li>
					<li>What portion of the loss may be due to things like defective: materials, construction design, installation and/or maintenance?</li>
					<li>What are all the alternative methods of repairing the flood related damage?</li>
				</ol>
				<p>
					<i>Adjuster Description of the specific area(s) in question and the reason for requesting the assistance of an engineer:</i>
				</p>
				<p>
					<b><?php echo $claim['Claim']['engineer_request'] ?></b>
				</p>
				<p>
					Please contact the insured to set up an appointment and notify adjuster of the appointment time.  Please include all insured information on all correspondence and reports.  
				</p>
				<p>	
					Thank You,<br /><br />
				</p>
				<p>
					<?php echo $claim['User']['first_name'].' '.$claim['Claim']['last_name'] ?><br />
					<?php echo $claim['User']['email'] ?><br />
				</p>
			</td>
		</tr>
		<tr>
			<td class="centered">
				203 W 8th Ave – LB14045 – Amarillo, TX, 79101 – Phone (806) 350-3377 – Fax (806) 350-3399
			</td>
		</tr>
<?php
	//PICTURES
	$pics = array(
		'pic_front_right' => 'Left Front',
		'pic_front_left' => 'Right Front',
		'pic_rear_left' => 'Left Rear',
		'pic_rear_right' => 'Right Rear',
		'pic_roof_front' => 'Roof Front',
		'pic_roof_rear' => 'Roof Rear',
		'pic_optional1' => '',
		'pic_optional2' => '',
		'pic_optional3' => '',
		'pic_optional4' => '',
		'pic_optional5' => '',
		'pic_optional6' => '',
		'pic_optional7' => '',
		'pic_optional8' => '',
		'pic_optional9' => '',
		'pic_optional10' => '',
		'pic_optional11' => '',
		'pic_optional12' => ''
	);
	$intCount = 0;
	foreach($pics as $pic => $label):
		if(!empty($claim['Claim'][$pic])):
			if(file_exists('/var/www/advadj/app/webroot/uploads/'.$claim['Claim'][$pic])):
				if(($intCount % 2)==0):
			?>
	</table>
</page>		
<page backtop="14mm">
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td>
				<table class="page">
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Reference #:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['claimFileID'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Policy #:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Requested Date:
						</td>
						<td style="width: 24%; border-bottom: solid 1px black;">
							<?php echo date('m/d/Y',strtotime($json['claimDateEntered'])) ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Carrier Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claimsRep['companyName'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Insured:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Contact:
						</td>
						<td style="width: 24%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['phone'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $json['CLAIM_CONTACTS']['Contact'][1]['contactLName'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Physical Adress:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Mailing Address:
						</td>
						<td style="width: 24%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Phone:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $json['CLAIM_CONTACTS']['Contact'][1]['contactPhone1'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							&nbsp;
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							&nbsp;
						</td>
						<td style="width: 24%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Inspected By:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['User']['first_name'].' '.$claim['User']['last_name'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Contact Phone:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['phone'] ?>
						</td>
						<td style="width: 10%; font-weight: bold;">
							Year Constructed:
						</td>
						<td style="width: 24%; border-bottom: solid 1px black;">
							Unknown
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Survey Date:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?>
						</td>
						<td colspan="4" style="width: 64%; font-weight: bold;">
							&nbsp;
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="page">
			<?php
			endif; //header
			$intCount++;
	//IMAGE
	$imageSize = getimagesize('/var/www/advadj/app/webroot/uploads/'.$claim['Claim'][$pic]);
	if($imageSize[0] > $imageSize[1]) {
		$imageStyle = 'width: 100%;';
	} else {
		$imageStyle = 'height: 100%;';
	}
	?>
		<tr>
			<td style="width: 60%; height: 370px;">
				<img style="<?php echo $imageStyle ?>" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim'][$pic] ?>">
			</td>
			<td style="width: 40%;">
				<table style="width: 100%">
					<tr>
						<td style="width: 30%;">Photo #:</td>
						<td style="width: 70%;"><?php echo $intCount ?></td>
					</tr>
					<tr>
						<td style="width: 30%;">Date</td>
						<td style="width: 70%;"><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td style="width: 30%;">Taken By:</td>
						<td style="width: 70%;">Adjuster</td>
					</tr>
					<tr>
						<td style="width: 30%;">Comment:</td>
						<td style="width: 70%;">
							<?php
								echo !($label == '')?$label:$claim['Claim'][$pic.'_notes']
							?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	<?php
			endif;
		endif;
	endforeach;
?>
	</table>
</page>