<?php
	$unmarked = '[&nbsp;&nbsp;]';
	$marked = '[<b>X</b>]';
	$json = json_decode($claim['Claim']['json'],true);
	$total = $claim['Claim']['content_advance']+$claim['Claim']['building_advance'];
?>
<style type="text/css" media="screen">
<!--
	body {
		font-size: 12px;
		font-family: arial;
	}
	h5 {
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
			<td class="centered" >
				<h2>Flood Advance Payment Request</h2>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Insured:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Date of Loss:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo !is_array($json['lossDate'])?date('m/d/Y',strtotime($json['lossDate'])):'' ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Policy Number:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['policy_number'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Content Advance:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo !empty($claim['Claim']['content_advance'])?'$'.$claim['Claim']['content_advance']:'' ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Property Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Building Advance:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo !empty($claim['Claim']['building_advance'])?'$'.$claim['Claim']['building_advance']:'' ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				&nbsp;
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				&nbsp;
			</td>
			<td style="width: 30%;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Mailing Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Content Reserve:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo !empty($claim['Claim']['content_reserve'])?'$'.$claim['Claim']['content_reserve']:'' ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				&nbsp;
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Building Reserve:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo !empty($claim['Claim']['building_reserve'])?'$'.$claim['Claim']['building_reserve']:'' ?>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 100%">
				<p>This agreement acknowledges you have sustained a Flood loss on the above date at the above address.</p>
				<p>NFIP Direct Servicing Agent agrees to advance you <b><u>$<?php echo $total ?></u></b>  against the final payment of you loss.  It is understood by you, that the investigation of your loss is not completed at this time.  It may be established, after the investigation of your loss, that NFIP Direct Servicing Agent has no legal obligation for payment of your claim.  If it is determined your claim is not a valid claim under your insurance policy, you agree to reimburse NFIP Direct Servicing Agent the <b><u>$<?php echo $total ?></u></b> advanced to you.  Issuance of an advance payment by us is not an admission of liability on our part.  Acceptance by you does not represent a satisfaction or release of all claims.</p>
				<p>This is not a PROOF OF LOSS as required by the policy.  A PROOF OF LOSS must still be submitted to the company within sixty (60) days of the date of loss, as stated in your policy.</p>
				<p>This agreement or payment of this advance is not intended to change or modify any of the conditions, terms, provisions, or requirements contained in the policy.  Any obligations or legal rights which may now or hereafter be available to you or the company are reserved.</p>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Date Signed:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?>
			</td>
			<td style="width: 15%;">
				&nbsp;
			</td>
			<td style="width: 30%;">
				&nbsp;
			</td>	
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Insured:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php if(!empty($claim['Claim']['signature'])):?>
					<img style="width: 300px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['signature'] ?>">
				<?php endif ?>
			</td>
			<td style="width: 15%;">
				&nbsp;
			</td>
			<td style="width: 30%;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Witness:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php if(!empty($claim['Claim']['witness'])):?>
					<img style="width: 300px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['witness'] ?>">
				<?php endif ?>
			</td>
			<td style="width: 15%;">
				&nbsp;
			</td>
			<td style="width: 30%;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td style="width: 15%;">
				&nbsp;
			</td>
			<td style="width: 40%;">
				&nbsp;
			</td>
			<td style="width: 15%; font-weight: bold;">
				Adjuster:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['User']['first_name'].' '.$claim['Claim']['last_name'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%;">
				&nbsp;
			</td>
			<td style="width: 40%;">
				&nbsp;
			</td>
			<td style="width: 15%; font-weight: bold;">
				FCN #:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['User']['fc_num'] ?>
			</td>
		</tr>
		<tr>
			<td colspan="4" class="centered" style="width: 100%">
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
		'pic_optional12' => '',
		'pic_optional13' => '',
		'pic_optional14' => '',
		'pic_optional15' => '',
		'pic_optional16' => '',
		'pic_optional17' => '',
		'pic_optional18' => '',
		'pic_optional19' => '',
		'pic_optional20' => '',
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
							Survey Date:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?>
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