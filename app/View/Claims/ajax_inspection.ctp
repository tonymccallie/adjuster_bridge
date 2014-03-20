<?php
	$unmarked = '[&nbsp;&nbsp;]';
	$marked = '[<b>X</b>]';
	$json = json_decode($claim['Claim']['json'],true);
	//debug($json);
?>
<style type="text/css" media="screen">
<!--
	body {
		font-size: 10px;
		font-family: arial;
	}
	h5 {
		margin: 0;
		font-size: 12px;
	}
	
	table {
		width: 100%;
		font-size: 10px;
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
			<td style="width: 40%" rowspan="2">
				<?php echo $this->Html->image(Common::currentUrl().'img/logo.png') ?>
			</td>
			<td style="width: 60%;"  colspan="2">
				<h2>Inspection for Residential</h2>
			</td>
		</tr>
		<tr>
			<td style="width: 30%;">
				<table>
					<tr>
						<td style="width: 30%;">
							Reference #:
						</td>
						<td style="width: 70%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['claimFileID'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 30%;">
							Requested By:
						</td>
						<td style="width: 70%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
						</td>
					</tr>
				</table>
			</td>
			<td style="width: 30%;">
				<table>
					<tr>
						<td style="width: 30%;">
							Policy #:
						</td>
						<td style="width: 70%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 30%;">
							Adj. Email:
						</td>
						<td style="width: 70%; border-bottom: solid 1px black;">
							<?php echo $claim['User']['email'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 30%;">
							Requested Date:
						</td>
						<td style="width: 70%; border-bottom: solid 1px black;">
							<?php echo date('m/d/Y',strtotime($json['claimDateEntered'])) ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 10%; font-weight: bold;">
				Carrier Name:
			</td>
			<td style="width: 23%; border-bottom: solid 1px black;">
				<?php echo 'NEED THIS INFO' ?>
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
				<?php echo $claim['Claim']['policy_number'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 10%; font-weight: bold;">
				Agent Name:
			</td>
			<td style="width: 23%; border-bottom: solid 1px black;">
				<?php echo 'NEED THIS INFO' ?>
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
				<?php echo 'NEED THIS INFO' ?>
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
				Advanced Adjusting
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
				<?php echo 'NEED THIS INFO' ?>
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
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td style="width: 100%;">
				<table style="width: 100%;">
					<tr>
						<td style="width: 20%;">
							Interview:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['interview'] ?>
						</td>
						<td style="width: 20%;">
							Percentage Hipp:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['hipp_percentage'] ?>
						</td>
						<td style="width: 20%;">
							Pool Fenced and Warnings:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['pool_fenced'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Property Inspected:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['property_inspected'] ?>
						</td>
						<td style="width: 20%;">
							Color of Building:
						</td>
						<td style="width: 13%;">
							<?php echo ($claim['Claim']['color_of_building'] != 'Other')?$claim['Claim']['color_of_building']:$claim['Claim']['color_of_building_other'] ?>
						</td>
						<td style="width: 20%;">
							Hot Tub:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['hot_tub'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Occupant:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['occupant'] ?>
						</td>
						<td style="width: 20%;">
							Outbuildings:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['outbuildings'] ?>
						</td>
						<td style="width: 20%;">
							Security:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['security'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Summary of Condition:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['summary_of_condition'] ?>
						</td>
						<td style="width: 20%;">
							Unattached Structure:
						</td>
						<td style="width: 13%;">
							<?php
								$structures = array();
								if($claim['Claim']['unattached_shed']) {
									array_push($structures, 'Shed');
								}
								if($claim['Claim']['unattached_poolhouse']) {
									array_push($structures, 'Poolhouse');
								}
								if($claim['Claim']['unattached_gazebo']) {
									array_push($structures, 'Gazebo');
								}
								if($claim['Claim']['unattached_garage']) {
									array_push($structures, 'Garage');
								}
								echo implode(', ', $structures);
							?>
						</td>
						<td style="width: 20%;">
							Dogs:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['dogs'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Units:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['units'] ?>
						</td>
						<td style="width: 20%;">
							Home Comparison:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['home_comparison'] ?>
						</td>
						<td style="width: 20%;">
							Other Animals:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['animals'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Location:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['location'] ?>
						</td>
						<td style="width: 20%;">
							Type of Neighborhood:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['neighborhood'] ?>
						</td>
						<td style="width: 20%;" rowspan="2">
							Abandoned Vehicles, Debris, Hazards:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['abandoned_vehilcles'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Exterior Damages:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['ext_damages'] ?>
						</td>
						<td style="width: 20%;">
							Fenced Area:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['fenced'] ?>
						</td>
						<td style="width: 14%;">
							&nbsp;
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Firewall:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['firewall'] ?>
						</td>
						<td style="width: 20%;">
							Fencing Type:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['fencing_type'] ?>
						</td>
						<td style="width: 20%;">
							Exposure Left:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['exposure_left'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Construction Type:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['construction_type'] ?>
						</td>
						<td style="width: 20%;">
							Fence Height:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['fencing_height'] ?>
						</td>
						<td style="width: 20%;">
							Exposure Rear:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['exposure_rear'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Stories:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['stories'] ?>
						</td>
						<td style="width: 20%;">
							Fireplace:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['fireplace'] ?>
						</td>
						<td style="width: 20%;">
							Exposure Right:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['exposure_right'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Foundation:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['foundation'] ?>
						</td>
						<td style="width: 20%;">
							Air Conditioning:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['ac'] ?>
						</td>
						<td style="width: 20%;">
							Close to Water:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['close_to_water'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Condition:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['condition'] ?>
						</td>
						<td style="width: 20%;">
							Patio:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['patio'] ?>
						</td>
						<td style="width: 20%;">
							Fire Department:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['fire_department'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Age:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['age'] ?>
						</td>
						<td style="width: 20%;">
							Porch:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['porch'] ?>
						</td>
						<td style="width: 20%;">
							Hydrant Access:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['hydrant_access'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Roof Type:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['roof_type'] ?>
						</td>
						<td style="width: 20%;">
							Porch Enclosure:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['porch_enclosure'] ?>
						</td>
						<td style="width: 20%;">
							Hydrant Access Distance:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['hydrant_proximity'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Roof Condition:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['roof_condition'] ?>
						</td>
						<td style="width: 20%;">
							Deck/Balcony:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['deck'] ?>
						</td>
						<td style="width: 20%;">
							Subdivision Security:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['subdivision_security'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 20%;">
							Hipp Roof:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['hipp'] ?>
						</td>
						<td style="width: 20%;">
							Pool Type:
						</td>
						<td style="width: 13%;">
							<?php echo $claim['Claim']['pool_type'] ?>
						</td>
						<td style="width: 20%;">
							Within City Limits:
						</td>
						<td style="width: 14%;">
							<?php echo $claim['Claim']['city_limits'] ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td class="width: 100%">
				<h4>Recommendations:</h4>
				<table border="1" cellspacing="0" class="page" style="width: 100%">
					<tr>
						<td style="width: 100%;">
							<?php echo $claim['Claim']['observations'] ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 10%;"></td>
			<td style="width: 10%; border-bottom: solid 1px black; text-align: center;"><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
			<td style="width: 10%;"></td>
			<td style="width: 40%; border-bottom: solid 1px black; text-align: center;"><?php echo $claim['User']['first_name'].' '.$claim['User']['last_name'] ?></td>
			<td style="width: 10%;"></td>
			<td style="width: 10%; border-bottom: solid 1px black; text-align: center;"><?php echo $claim['User']['fc_num'] ?></td>
			<td style="width: 10%;"></td>
		</tr>
		<tr>
			<td style="width: 10%;"></td>
			<td style="width: 10%; text-align: center;">Date of Report</td>
			<td style="width: 10%;"></td>
			<td style="width: 40%; text-align: center;">Adjuster's Signature</td>
			<td style="width: 10%;"></td>
			<td style="width: 10%; text-align: center;">Adjuster's FCN</td>
			<td style="width: 10%;"></td>
		</tr>
	</table>
</page>
<?php if((!empty($claim['Claim']['pic_front_left']))||(!empty($claim['Claim']['pic_front_right']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_front_left'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_front_left'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Left Front</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_front_right'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_front_right'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Right Front</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_rear_left']))||(!empty($claim['Claim']['pic_rear_right']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_rear_left'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_rear_left'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Left Rear</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_rear_right'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_rear_right'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>4</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Right Rear</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_water_inside']))||(!empty($claim['Claim']['pic_water_outside']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_water_inside'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_water_inside'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>5</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Water Line Inside</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_water_outside'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_water_outside'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>6</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Water Line Outside</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_roof_front']))||(!empty($claim['Claim']['pic_roof_rear']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_roof_front'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_roof_front'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Front Roof</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_roof_rear'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_roof_rear'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>8</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td>Rear Roof</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_optional1']))||(!empty($claim['Claim']['pic_optional2']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_optional1'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional1'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>9</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional1_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_optional2'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional2'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional2_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_optional3']))||(!empty($claim['Claim']['pic_optional4']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_optional3'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional3'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>11</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional3_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_optional4'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional4'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>12</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional4_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>
<?php if((!empty($claim['Claim']['pic_optional5']))||(!empty($claim['Claim']['pic_optional6']))): ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 10%; font-weight: bold;">
							Agent Name:
						</td>
						<td style="width: 23%; border-bottom: solid 1px black;">
							<?php echo 'NEED THIS INFO' ?>
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
							<?php echo 'NEED THIS INFO' ?>
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
							Advanced Adjusting
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
							<?php echo 'NEED THIS INFO' ?>
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
		<?php if(!empty($claim['Claim']['pic_optional4'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional5'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>13</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional5_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
		<?php if(!empty($claim['Claim']['pic_optional6'])): ?>
		<tr>
			<td>
				<img style="height: 370px;" src="http://advadj.greyback.net/uploads/<?php echo $claim['Claim']['pic_optional6'] ?>">
			</td>
			<td>
				<table>
					<tr>
						<td>Photo #:</td>
						<td>14</td>
					</tr>
					<tr>
						<td>Date</td>
						<td><?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?></td>
					</tr>
					<tr>
						<td>Taken By:</td>
						<td>Adjuster</td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo $claim['Claim']['pic_optional6_notes'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php endif ?>
	</table>
</page>
<?php endif ?>