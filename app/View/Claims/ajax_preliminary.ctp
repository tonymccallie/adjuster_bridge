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
			<td style="width: 15%;">&nbsp;</td>
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
			<td colspan="3" class="centered">
				<h2>Preliminary Report</h2>
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
				<?php echo $claim['Claim']['last_name'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Property Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Date of Loss:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Mailing Address:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Catastrophe No.:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 15%; font-weight: bold;">
				Insured Phone No.:
			</td>
			<td style="width: 40%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'].', '.$claim['Claim']['first_name'] ?>
			</td>
			<td style="width: 15%; font-weight: bold;">
				Adj. File No.:
			</td>
			<td style="width: 30%; border-bottom: solid 1px black;">
				<?php echo $claim['Claim']['last_name'] ?>
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
				<?php echo $claim['Claim']['last_name'] ?>
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
				<b>Date Loss Assigned:</b> date
			</td>
			<td style="width: 33%">
				<b>Date Insured Contacted</b> date
			</td>
			<td style="width: 33%">
				<b>Date Loss Inspected:</b> date
			</td>
		</tr>
	</table>
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td style="width: 2%" class="centered">E<br>N<br>C</td>
			<td style="width: 96%; padding-left: 2%;">
				<table>
					<tr>
						<td style="width: 25%;">[&nbsp;&nbsp;] Building Worksheets ()</td>
						<td style="width: 25%;">[X] Photographs ()</td>
						<td style="width: 25%;">[&nbsp;&nbsp;] Proof of Loss ()</td>
						<td style="width: 25%;">[&nbsp;&nbsp;] Other_______________</td>
					</tr>
					<tr>
						<td style="width: 25%;">[&nbsp;&nbsp;] Contents Worksheets ()</td>
						<td style="width: 25%;">[&nbsp;&nbsp;] Narratives ()</td>
						<td style="width: 25%;">[&nbsp;&nbsp;] R/C Proof ()</td>
						<td style="width: 25%;">[&nbsp;&nbsp;] Other_______________</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">I<br>N<br>S<br>U<br>R<br>A<br>N<br>C<br>E</td>
			<td style="width: 96%; padding-left: 2%;">
				<table>
					<tr>
						<td style="width: 60%;">
							<table>
								<tr>
									<td>Coverage verified from:</td>
									<td>[&nbsp;&nbsp;] NFIP</td>
									<td>[&nbsp;&nbsp;] Agent's Daily</td>
									<td>[&nbsp;&nbsp;] Insured's Policy</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5">
										Term: _______ to _______
									</td>
								</tr>
							</table>
						</td>
						<td style="width: 40%;">
							<table>
								<tr>
									<td>Program:</td>
									<td>[&nbsp;&nbsp;] Emergency</td>
									<td colspan="2">[&nbsp;&nbsp;] Regular</td>
								</tr>
								<tr>
									<td>Form:</td>
									<td>[&nbsp;&nbsp;] Dwelling</td>
									<td>[&nbsp;&nbsp;] Gen Property</td>
									<td>[&nbsp;&nbsp;] RCBAP</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td rowspan="3" style="width: 5%;">&nbsp;</td>
						<td rowspan="3" style="width: 15%;"><div style="border: solid 1px black; padding: 5px; width: 70px;">Reserves:</div></td>
						<td style="width: 15%">&nbsp;</td>
						<td style="width: 20%">Coverage</td>
						<td style="width: 20%">Deductible</td>
						<td style="width: 20%">Reserve</td>
					</tr>
					<tr>
						<td>Building</td>
						<td style="border-bottom: solid 1px black;"></td>
						<td style="border-bottom: solid 1px black;"></td>
						<td style="border-bottom: solid 1px black;"></td>
					</tr>
					<tr>
						<td>Contents</td>
						<td style="border-bottom: solid 1px black;"></td>
						<td style="border-bottom: solid 1px black;"></td>
						<td style="border-bottom: solid 1px black;"></td>
					</tr>
				</table>
				<table>
					<tr>
						<td style="width: 40%;">
							<table>
								<tr>
									<td>Advanced Payment Requested?</td>
									<td>[&nbsp;&nbsp;] No</td>
									<td>[&nbsp;&nbsp;] Yes</td>
								</tr>
							</table>
						</td>
						<td style="width: 60%; text-align: left;">
							<table>
								<tr>
									<td style="width: 25%; text-align: right;">Building:</td>
									<td style="width: 25%; border-bottom: solid 1px black;"></td>
									<td style="width: 25%; text-align: right;">Contents:</td>
									<td style="width: 25%; border-bottom: solid 1px black;"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">R<br>I<br>S<br>K</td>
			<td style="width: 96%; padding-left: 2%;">
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td style="width: 10%;" rowspan="2">Type of Building:</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] Single Family</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] 2-4 Family</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] Condo Assn.</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] Condo Unit</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] Other Residential</td>
						<td style="width: 15%;">[&nbsp;&nbsp;] Non-residential</td>
					</tr>
					<tr>
						<td style="width: 15%;">[&nbsp;&nbsp;] Mobile Home:</td>
						<td style="width: 75%;" colspan="5">
							<table>
								<tr>
									<td style="width: 10%; text-align: right;">Make: </td>
									<td style="width: 20%; border-bottom: solid 1px black;"></td>
									<td style="width: 10%; text-align: right;">Model: </td>
									<td style="width: 20%; border-bottom: solid 1px black;"></td>
									<td style="width: 10%; text-align: right;">Serial No: </td>
									<td style="width: 30%; border-bottom: solid 1px black;"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Occupancy</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Floors</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Risk</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Foundation</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Exterior</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Contents</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Nearest</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 2%" class="centered">O<br>R<br>I<br>G<br>I<br>N</td>
			<td style="width: 96%; padding-left: 2%;">
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Flooding</td>
					</tr>
				</table>
				<table style="border-bottom: solid 1px black;">
					<tr>
						<td>Date/time</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="page">
		<tr>
			<td style="width: 10%;"></td>
			<td style="width: 10%; border-bottom: solid 1px black; text-align: center;">DATE</td>
			<td style="width: 10%;"></td>
			<td style="width: 40%; border-bottom: solid 1px black; text-align: center;">SIGNATURE</td>
			<td style="width: 10%;"></td>
			<td style="width: 10%; border-bottom: solid 1px black; text-align: center;">DATE</td>
			<td style="width: 10%;"></td>
		</tr>
		<tr>
			<td style="width: 10%;"></td>
			<td style="width: 10%; text-align: center;">Date of Report</td>
			<td style="width: 10%;"></td>
			<td style="width: 40%; text-align: center;">Adjuster's Signature</td>
			<td style="width: 10%;"></td>
			<td style="width: 10%; text-align: center;">Adjuster's CFN</td>
			<td style="width: 10%;"></td>
		</tr>
	</table>
</page>
<page backtop="14mm">
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td>Header information</td>
		</tr>
	</table>
	Pictures
</page>
<page backtop="14mm">
	<table border="1" cellspacing="0" class="page" style="width: 100%">
		<tr>
			<td>Header information</td>
		</tr>
	</table>
	Pictures
</page>