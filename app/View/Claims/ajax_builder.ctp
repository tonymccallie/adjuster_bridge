<?php
	$claim_data = json_decode($claim['Claim']['json'],true);
	//debug(array($claim,$claim_data));
?>
<UploadReport xmlns="http://filetrac.onlinereportinginc.com/ftservices/">
	<oReport>
		<Login>threeleaf</Login>
		<Password>Bob13013!</Password>
		<CompanyKey>ORI</CompanyKey>
		<ReportFile><?php echo $file ?></ReportFile>
		<UserID><?php echo $claim['User']['userID'] ?></UserID>
		<ClaimID><?php echo $claim['Claim']['claimID'] ?></ClaimID>
		<ClaimFileID><?php echo $claim['Claim']['claimFileID'] ?></ClaimFileID>
		<ReportFileName><?php echo $filename ?></ReportFileName>
		<ReportTitle><?php echo $title ?></ReportTitle>
		<ReportDescription><?php echo $title ?> uploaded from the AdvAdj App.</ReportDescription>
		<PrintedFlag>1</PrintedFlag>
	</oReport>
</UploadReport>