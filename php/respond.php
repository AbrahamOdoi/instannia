<!DOCTYPE html>

<html>
	<title>MOBILE BANKER</title>
	<head>

		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/jquery.mobile-1.2.0.min.css" />
		<script src="../js/jquery-1.8.2.min.js"></script>
		<script src="../js/jquery.mobile-1.2.0.min.js"></script>

		<link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="../jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="../scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="../jquery.nivo.slider.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header'>
				<!-- <img src="../images/atlan_logo.PNG" height="90%"> -->
			</div>
			<br/>
			<br/>
			<br/>

			<div id='content' data-role='content'>
				<?php
				session_start();
				include 'connection.php';
				$destination=$_SESSION['phone'];
				$first=$destination[0];
				if($first==0) {
				$new=preg_replace("/[0]/","233",$first);
				$var1=substr($destination,1);
				$destination1=$new.$var1;
				}
				// $destination= '233249430715';
				$senderID='IHS';
				// $query="select * from register where phoneNumber='$destination'";
				$message='Your appointment will be on the 20th of December at exactly 2pm';
				$url="http://121.241.242.114:8080/bulksms/bulksms?username=na1-debbie&password=nalosol&type=0&dlr=1";
				$myvars='destination='.$destination1.'&source='.$senderID.'&message='.$message;
				$ch=curl_init($url);
				curl_setopt($ch,CURLOPT_POST,1);
				curl_setopt($ch,CURLOPT_POSTFIELDS,$myvars);
				curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
				curl_setopt($ch,CURLOPT_HEADER,0);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				$response=curl_exec($ch);
				echo "<p>You will be receiving details of your appointment through an sms</p>
				<a href='homepage.php' rel='external' data-transition='slide'>
				<input  data-icon='back' data-rel='back' type='button' value='RETURN' data-theme='d'>
				</a>";
				?>
			</div>
			
		</div>

	</body>
</html>
