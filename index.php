<?php
	session_start();
	define("referbApp", 1);
	include 'app/referb.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Referb!</title>
</head>
<body>

<?php
	$referral = new referer;

	echo $referral->url();

	//echo $referral->$refurb_URL;
?>

</body>
</html>