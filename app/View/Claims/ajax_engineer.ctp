<?php
	$unmarked = '[&nbsp;&nbsp;]';
	$marked = '[<b>X</b>]';
	$json = json_decode($claim['Claim']['json'],true);
?>
<style type="text/css" media="screen">
<!--
	body {
		font-size: 14px;
		font-family: arial;
	}
	h5 {
		margin: 0;
		font-size: 12px;
	}
	
	table {
		width: 100%;
		font-size: 14px;
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
				<h2>Engineer Request</h2>
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
					<?php echo $claim['User']['email'] ?><br /><br />
				</p>
			</td>
		</tr>
		<tr>
			<td class="centered">
				203 W 8th Ave – LB14045 – Amarillo, TX, 79101 – Phone (806) 350-3377 – Fax (806) 350-3399
			</td>
		</tr>
	</table>
</page>