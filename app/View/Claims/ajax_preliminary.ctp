<?php
	$unmarked = '[&nbsp;&nbsp;]';
	$marked = '[<b>X</b>]';
	$json = json_decode($claim['Claim']['json'],true);
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
<page backtop="10mm">
	<table class="page">
		<tr>
			<td style="width: 15%;">&nbsp;&nbsp;&nbsp;</td>
			<td class="centered" style="width: 60%">
				<h5>Department of Homeland Security</h5>
				<h5>Federal Emergency Management Agency</h5>
				<h5>National Flood Insurance Program</h5>
				<i style="font-size: 12px;">The NFIP requires that a preliminary report be received within 15 days of assignment, and an interim or final report not later than every 30 days thereafter.</i>
			</td>
			<td class="centered" style="width: 15%; font-size: 12px;">
				<i>See Privacy Act Statement and Paperwork Burden Disclosure Notice</i>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align:center;" class="centered">
				<h2 style="margin:0; padding:0;">Preliminary Report</h2>
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
				Policy Number:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['policy_number'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Property Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>, <?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
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
				Mailing Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'' ?>, <?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Catastrophe No.:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['fico'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Insured Phone No.:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['phone'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Adj. File No.:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['claimFileID'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Adjusting Company:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				Advanced Adjusting, Ltd.
			</td>
			<td style="width: 15%; font-weight: bold;">
				Tax ID No.
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Adjuster Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				203 SW 8th Ave, LB 14045, Amarillo, TX 79101
			</td>
			<td style="width: 15%; font-weight: bold;">
				Adj. Phone No.
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				806-350-3377
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 33%">
				<b>Date Loss Assigned:</b> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_loss_assigned'])) ?>
			</td>
			<td style="width: 33%">
				<b>Date Insured Contacted</b> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_contacted'])) ?>
			</td>
			<td style="width: 33%">
				<b>Date Loss Inspected:</b> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_inspected'])) ?>
			</td>
		</tr>
	</table>
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td style="width: 2%" class="centered">E<br>N<br>C</td>
			<td style="width: 98%;">
				<table>
					<tr>
						<td style="width: 25%;"><?php echo $unmarked ?> Building Worksheets ()</td>
						<td style="width: 25%;"><?php echo $marked ?> Photographs ()</td>
						<td style="width: 25%;"><?php echo $unmarked ?> Proof of Loss ()</td>
						<td style="width: 25%;"><?php echo $unmarked ?> Other_______________</td>
					</tr>
					<tr>
						<td style="width: 25%;"><?php echo $unmarked ?> Contents Worksheets ()</td>
						<td style="width: 25%;"><?php echo $unmarked ?> Narratives ()</td>
						<td style="width: 25%;"><?php echo $unmarked ?> R/C Proof ()</td>
						<td style="width: 25%;"><?php echo $unmarked ?> Other_______________</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">I<br>N<br>S<br>U<br>R<br>A<br>N<br>C<br>E</td>
			<td style="width: 98%;">
				<table>
					<tr>
						<td style="width: 55%;">
							<table>
								<tr>
									<td>Coverage verified from:</td>
									<?php foreach(array("NFIP","Agent's Daily","Insured's Policy") as $option): ?>
										<td><?php echo ($claim['Claim']['verify_source'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5">
										Term: <span style="text-decoration: underline;"> <?php echo !empty($json['CLAIM_CONTACTS']['Contact'][0]['policyStart'])?date('m/d/Y',strtotime($json['CLAIM_CONTACTS']['Contact'][0]['policyStart'])):'Undefined' ?> </span> to <span style="text-decoration: underline;"> <?php echo !empty($json['CLAIM_CONTACTS']['Contact'][0]['policyEnd'])?date('m/d/Y',strtotime($json['CLAIM_CONTACTS']['Contact'][0]['policyEnd'])):'Undefined' ?> </span>
									</td>
								</tr>
							</table>
						</td>
						<td style="width: 45%;">
							<table>
								<tr>
									<td>Program:</td>
									<?php foreach(array("Emergency","Regular") as $option): ?>
										<td><?php echo ($claim['Claim']['policy_type'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Form:</td>
									<?php foreach(array("Dwelling","General Property","RCBAP") as $option): ?>
										<td><?php echo ($claim['Claim']['form'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td rowspan="3" style="width: 5%;">&nbsp;&nbsp;&nbsp;</td>
						<td rowspan="3" style="width: 15%;"><div style="border: solid 1px black; padding: 5px; width: 70px;">Reserves:</div></td>
						<td style="width: 15%">&nbsp;&nbsp;&nbsp;</td>
						<td style="width: 20%">Coverage</td>
						<td style="width: 20%">Deductible</td>
						<td style="width: 20%">Reserve</td>
					</tr>
					<tr>
						<td>Building</td>
						<td style="border-bottom: solid 1px black;">$<?php echo (!empty($json['claimCoverageA'])&&(is_numeric($json['claimCoverageA'])))?number_format($json['claimCoverageA'],2,'.',','):0 ?></td>
						<td style="border-bottom: solid 1px black;">$<?php echo (!empty($json['claimDeductable'])&&(is_numeric($json['claimDeductable'])))?number_format($json['claimDeductable'],2,'.',','):0 ?></td>
						<td style="border-bottom: solid 1px black;">$<?php echo number_format($claim['Claim']['building_reserve'],2,'.',',') ?></td>
					</tr>
					<tr>
						<td>Contents</td>
						<td style="border-bottom: solid 1px black;">$<?php echo (!empty($json['claimCoverageB'])&&(is_numeric($json['claimCoverageB'])))?number_format($json['claimCoverageB'],2,'.',','):0 ?></td>
						<td style="border-bottom: solid 1px black;"></td>
						<td style="border-bottom: solid 1px black;">$<?php echo number_format($claim['Claim']['content_reserve'],2,'.',',') ?></td>
					</tr>
				</table>
				<table>
					<tr>
						<td style="width: 40%;">
							<table>
								<tr>
									<td>Advanced Payment Requested?</td>
									<td><?php echo (!$claim['Claim']['adv_payment'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['adv_payment'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
								</tr>
							</table>
						</td>
						<td style="width: 60%; text-align: left;">
							<table>
								<tr>
									<td style="width: 25%; text-align: right;">Building:</td>
									<td style="width: 25%; border-bottom: solid 1px black;">$<?php echo number_format($claim['Claim']['building_advance'],2,'.',',') ?></td>
									<td style="width: 25%; text-align: right;">Contents:</td>
									<td style="width: 25%; border-bottom: solid 1px black;">$<?php echo number_format($claim['Claim']['content_advance'],2,'.',',') ?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">R<br>I<br>S<br>K</td>
			<td style="width: 98%;">
				<table cellspacing="0">
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table>
								<tr>
									<td style="width: 10%;" rowspan="2">Type of Building:</td>
									<?php foreach(array("Single Family","2-4 Family","Condo Association","Condo unit","Other Residentail","Non-Residential") as $option): ?>
										<td style="width: 15%;"><?php echo ($claim['Claim']['building_type'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
								<tr>
									<td style="width: 15%;"><?php echo ($claim['Claim']['building_type'] == 'Mobile Home/Travel Trailer')?$marked:$unmarked ?> Mobile Home:&nbsp;&nbsp;</td>
									<td style="width: 75%;" colspan="5">
										<table>
											<tr>
												<td style="width: 10%; text-align: right;">Make: </td>
												<td style="width: 20%; border-bottom: solid 1px black;"><?php echo $claim['Claim']['building_make'] ?></td>
												<td style="width: 10%; text-align: right;">Model: </td>
												<td style="width: 20%; border-bottom: solid 1px black;"><?php echo $claim['Claim']['building_model'] ?></td>
												<td style="width: 10%; text-align: right;">Serial No: </td>
												<td style="width: 30%; border-bottom: solid 1px black;"><?php echo $claim['Claim']['building_serial'] ?></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table>
								<tr>
									<td>Occupancy</td>
									<?php foreach(array("Owner","Tenant","State/Government Owned","Unoccupied") as $option): ?>
										<td><?php echo ($claim['Claim']['occupancy'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td>Residency</td>
									<?php foreach(array("Princpal","Seasonal") as $option): ?>
										<td><?php echo ($claim['Claim']['residency'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table>
								<tr>
									<td>Title verified?</td>
									<td><?php echo ($claim['Claim']['title_verified'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td><?php echo (!$claim['Claim']['title_verified'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
									<td>Source of verification:</td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['title_verify_source'] ?> </span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table>
								<tr>
									<td>Number of floors in building including basement:</td>
									<?php foreach(array("1","2","3 or more") as $option): ?>
										<td><?php echo ($claim['Claim']['number_of_floors'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td>Is building a split level?</td>
									<td><?php echo ($claim['Claim']['split_level'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td><?php echo (!$claim['Claim']['split_level'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
								</tr>
							</table>
							<table style="">
								<tr>
									<td>In case of multiple occupancy, indicate floor(s) occupied by insured:</td>
									<td><?php echo ($claim['Claim']['multiple_occupancy_basement'])?$marked:$unmarked ?> Basement&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['multiple_occupancy_first'])?$marked:$unmarked ?> First&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['multiple_occupancy_above'])?$marked:$unmarked ?> Second and/or above&nbsp;&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table>
								<tr>
									<td>Type of basement?</td>
									<?php foreach(array("None","Unfinished","Finished") as $option): ?>
										<td><?php echo ($claim['Claim']['type_of_basement'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td>Is the basement floodproofed?</td>
									<td><?php echo ($claim['Claim']['basement_floodproofed'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td><?php echo (!$claim['Claim']['basement_floodproofed'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
								</tr>
							</table>
							<table style="">
								<tr>
									<td>Building elevated?</td>
									<td><?php echo (!$claim['Claim']['building_elevated'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['building_elevated'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td>Foundation area enclosure?</td>
									<?php foreach(array("None","Breakaway Walls","Unfinished","Finished") as $option): ?>
										<td><?php echo ($claim['Claim']['foundation_area_enclosure'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width: 55%; border-bottom: solid 1px black;">
							<table style="">
								<tr>
									<td>Is risk under construction?</td>
									<?php foreach(array("No","New Building","Improvement in progress") as $option): ?>
										<td><?php echo ($claim['Claim']['risk_under_construction'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
						<td rowspan="2" style="width: 45%; border-bottom: solid 1px black; border-left: solid 1px black;">
							<table style="">
								<tr>
									<td colspan="5">Prior condition of:</td>
								</tr>
								<tr>
									<td>Building:</td>
									<?php foreach(array("Poor","Fair","Good","Very Good") as $option): ?>
										<td><?php echo ($claim['Claim']['prior_conditions'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
								<tr>
									<td>Contents:</td>
									<?php foreach(array("Poor","Fair","Good","Very Good") as $option): ?>
										<td><?php echo ($claim['Claim']['prior_content_conditions'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="border-bottom: solid 1px black;">
							<table style="">
								<tr>
									<td>FIRM Date</td>
									<td><?php echo date('m/d/Y',strtotime($claim['Claim']['firm_data'])) ?></td>
									<?php foreach(array("Pre FIRM","Post FIRM") as $option): ?>
										<td><?php echo ($claim['Claim']['pre_post_firm'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table style="">
								<tr>
									<td>Piles:</td>
									<?php foreach(array("Concrete","Wood","Steel","Wood Post","Concrete Slab","Other") as $option): ?>
										<?php if($option != 'Other'): ?>
											<td><?php echo ($claim['Claim']['piles'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
										<?php else: ?>
											<td><?php echo ($claim['Claim']['piles'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;<span style="border-bottom:solid 1px black;">&nbsp;&nbsp;<?php echo $claim['Claim']['piles_other'] ?>&nbsp;&nbsp;</span></td>
										<?php endif ?>
									<?php endforeach ?>
								</tr>
								<tr>
									<td>Piers:</td>
									<?php foreach(array("Reinf. concrete","Reinf. block","Unreinf. block","Brick","Other") as $option): ?>
										<?php if($option != 'Other'): ?>
											<td><?php echo ($claim['Claim']['piers'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
										<?php else: ?>
											<td colspan="2"><?php echo ($claim['Claim']['piers'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;<span style="border-bottom:solid 1px black;">&nbsp;&nbsp;<?php echo $claim['Claim']['piers_other'] ?>&nbsp;&nbsp;</span></td>
										<?php endif ?>
									<?php endforeach ?>
								</tr>
								<tr>
									<td>Walls:</td>
									<?php foreach(array("Reinf. concrete","Block","Reinf. concrete shear","Treated plywood","Brick","Other") as $option): ?>
										<?php if($option != 'Other'): ?>
											<td><?php echo ($claim['Claim']['walls'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
										<?php else: ?>
											<td><?php echo ($claim['Claim']['walls'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;<span style="border-bottom:solid 1px black;">&nbsp;&nbsp;<?php echo $claim['Claim']['walls_other'] ?>&nbsp;&nbsp;</span></td>
										<?php endif ?>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width: 55%; border-bottom: solid 1px black;">
							<table style="">
								<tr>
									<td>Exterior wall structure:</td>
									<?php foreach(array("Reinf. concrete","Concrete block","Wood Stud") as $option): ?>
										<td><?php echo ($claim['Claim']['exterior_wall_structure'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
								<tr>
									<?php foreach(array("Steel & glass","Brick or stone","Other") as $option): ?>
										<?php if($option != 'Other'): ?>
											<td><?php echo ($claim['Claim']['exterior_wall_structure'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
										<?php else: ?>
											<td colspan="2"><?php echo ($claim['Claim']['exterior_wall_structure'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;<span style="border-bottom:solid 1px black;">&nbsp;&nbsp;<?php echo $claim['Claim']['exterior_wall_other'] ?>&nbsp;&nbsp;</span></td>
										<?php endif ?>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
						<td style="width: 45%; border-bottom: solid 1px black; border-left: solid 1px black;">
							<table style="">
								<tr>
									<td>Exterior wall surface treatment:</td>
									<?php foreach(array("Unfinished","Stone/brick veneer") as $option): ?>
										<td><?php echo ($claim['Claim']['exterior_wall_treatment'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table style="">
								<tr>
									<?php foreach(array("Stucco","Wood siding","Metal sheathing/siding") as $option): ?>
										<td><?php echo ($claim['Claim']['exterior_wall_treatment'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table style="">
								<tr>
									<?php foreach(array("Vinyl sheathing/siding","Other") as $option): ?>
										<?php if($option != 'Other'): ?>
											<td><?php echo ($claim['Claim']['exterior_wall_treatment'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
										<?php else: ?>
											<td><?php echo ($claim['Claim']['exterior_wall_treatment'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;<span style="border-bottom:solid 1px black;">&nbsp;&nbsp;<?php echo $claim['Claim']['exterior_treatment_other'] ?>&nbsp;&nbsp;</span></td>
										<?php endif ?>
									<?php endforeach ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 100%; border-bottom: solid 1px black;">
							<table style="">
								<tr>
									<td>Contents are:</td>
									<?php foreach(array("Household","Other than household") as $option): ?>
										<td><?php echo ($claim['Claim']['contents'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td>Contents located in:</td>
									<td><?php echo ($claim['Claim']['contents_basement'])?$marked:$unmarked ?> Basement&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['contents_first'])?$marked:$unmarked ?> First Floor&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td colspan="4">&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['contents_first_plus'])?$marked:$unmarked ?> Basement and first floor&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['contents_second_plus'])?$marked:$unmarked ?> First floor and above&nbsp;&nbsp;</td>
									<td><?php echo ($claim['Claim']['contents_other_check'])?$marked:$unmarked ?> Second floor and above&nbsp;&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width: 55%;">
							<table style="">
								<tr>
									<td>Nearest body of water:</td>
									<td><?php echo $claim['Claim']['nearest_water'] ?></td>
								</tr>
							</table>
						</td>
						<td style="width: 45%; border-left: solid 1px black;">
							<table style="">
								<tr>
									<td>Distance from risk:</td>
									<td><?php echo $claim['Claim']['distance_from_risk'] ?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">O<br>R<br>I<br>G<br>I<br>N</td>
			<td style="width: 98%;">
				<table cellspacing="0">
					<tr>
						<td colspan="2" style="border-bottom: solid 1px black;">
							<table>
								<tr>
									<td>Was there a general and temporary condition of flooding:</td>
									<?php foreach(array("No: explain fully under remarks","Yes: Indicate cause of loss") as $option): ?>
										<td><?php echo ($claim['Claim']['temporary_condition'] == $option)?$marked:$unmarked ?> <?php echo $option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table>
								<tr>
									<td>Cause of Loss:</td>
									<?php foreach(array("Tidal water overflow","Stream, river, or lake overflow","Alluvial fan overflow","Accumulation of rainfall or snowmelt") as $k => $option): ?>
										<td><?php echo ($claim['Claim']['cause_of_loss'] == $option)?$marked:$unmarked ?> <?php echo ($k+1).'. '.$option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table>
								<tr>
									<td>Flood Characteristics:</td>
									<?php foreach(array("Velocity flow","Low velocity flow or ponding","Wave action","Mudflow","Erosion") as $k => $option): ?>
										<td><?php echo ($claim['Claim']['flood_characteristics'] == $option)?$marked:$unmarked ?> <?php echo ($k+1).'. '.$option ?>&nbsp;&nbsp;</td>
									<?php endforeach ?>
								</tr>
							</table>
							<table>
								<tr>
									<td>Was flood associated with failure of a dam, storm drain system, pump(s), other flood control measure, etc.?</td>
									<td><?php echo ($claim['Claim']['associated_with_failure'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td><?php echo (!$claim['Claim']['associated_with_failure'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
								</tr>
							</table>
							<table>
								<tr>
									<td>Did other than natural cause contribute to flooding?</td>
									<td><?php echo ($claim['Claim']['other_than_natural'])?$marked:$unmarked ?> Yes&nbsp;&nbsp;</td>
									<td><?php echo (!$claim['Claim']['other_than_natural'])?$marked:$unmarked ?> No&nbsp;&nbsp;</td>
									<td>If "yes" to either question, complete "Cause of Loss and Subrogation Report"</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="width: 55%;">
							<table>
								<tr>
									<td>Date/time water entered building</td>
									<td><span style="text-decoration: underline;"> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_water_entered'])).' '.$claim['Claim']['time_water_entered'] ?> </span></td>
								</tr>
								<tr>
									<td>Date/time water receded from building</td>
									<td><span style="text-decoration: underline;"> <?php echo date('m/d/Y',strtotime($claim['Claim']['date_water_receded'])).' '.$claim['Claim']['time_water_receded'] ?> </span></td>
								</tr>
								<tr>
									<td>Length of time water remained in building</td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['time_water'] ?> </span></td>
								</tr>
							</table>
						</td>
						<td style="width: 45%; border-left: solid 1px black;">
							<table>
								<tr>
									<td>Water Height or Wave Action:</td>
									<td>Exterior</td>
									<td>Interior</td>
								</tr>
								<tr>
									<td>Main Building/Condo Assn.:</td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['ext_water_ft'].'ft. '.$claim['Claim']['ext_water_in'].'in.' ?> </span></td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['water_feet'].'ft. '.$claim['Claim']['water_inches'].'in.' ?> </span></td>
								</tr>
								<tr>
									<td>Apt. Building/Condo Unit:</td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['ext_apt_water_ft'].'ft. '.$claim['Claim']['ext_apt_water_in'].'in.' ?> </span></td>
									<td><span style="text-decoration: underline;"> <?php echo $claim['Claim']['apt_water_feet'].'ft. '.$claim['Claim']['apt_water_inches'].'in.' ?> </span></td>
								</tr>
							</table>
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
			<td style="width: 40%; border-bottom: solid 1px black; text-align: center;">
				<?php if(!empty($claim['User']['signature'])):?>
					<img style="width: 150px;" src="<?php echo $claim['User']['signature'] ?>">
				<?php endif ?>
			</td>
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

<?php
	//PICTURES
	$pics = array(
		'pic_front_right' => 'Left Front',
		'pic_front_left' => 'Right Front',
		'pic_rear_left' => 'Left Rear',
		'pic_rear_right' => 'Right Rear',
		'pic_water_inside' => 'Water Line Inside',
		'pic_water_outside' => 'Water Line Outside',
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
				<table class="page" style="width: 100%">
					<tr>
						<td style="width: 15%; font-weight: bold;">
							Insured:
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
						</td>
						<td style="width: 15%; font-weight: bold;">
							Date of Report:
						</td>
						<td style="width: 30%; border-bottom: solid 1px black;">
							<?php echo date('m/d/Y',strtotime($claim['Claim']['report_date'])) ?>
						</td>
					</tr>
					<tr>
						<td style="width: 15%; font-weight: bold;">
							Location:
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['address1']?><?php echo !empty($claim['Claim']['address2'])?', '.$claim['Claim']['address2']:'Undefined' ?>
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
							&nbsp;
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['city'].', '.$claim['Claim']['state'].'  '.$claim['Claim']['zip'] ?>
						</td>
						<td style="width: 15%; font-weight: bold;">
							Policy Number:
						</td>
						<td style="width: 30%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 15%; font-weight: bold;">
							Company
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							Advanced Adjusting, Inc.
						</td>
						<td style="width: 15%; font-weight: bold;">
							Claim Number:
						</td>
						<td style="width: 30%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['policy_number'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 15%; font-weight: bold;">
							&nbsp;
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							203 SW 8th Ave, LB 14045
						</td>
						<td style="width: 15%; font-weight: bold;">
							Our File Number:
						</td>
						<td style="width: 30%; border-bottom: solid 1px black;">
							<?php echo $claim['Claim']['claimFileID'] ?>
						</td>
					</tr>
					<tr>
						<td style="width: 15%; font-weight: bold;">
							&nbsp;
						</td>
						<td style="width: 40%; border-bottom: solid 1px black;">
							Amarillo, TX 79101
						</td>
						<td style="width: 15%; font-weight: bold;">
							Adjuster Name:
						</td>
						<td style="width: 30%; border-bottom: solid 1px black;">
							<?php echo $claim['User']['first_name'].' '.$claim['User']['last_name'] ?>
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