<?php
session_start();
?>
<!DOCTYPE html>

<html>
	<title>MOBILE health</title>
	<head>

		<!-- <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" /> -->

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script>

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header' style="text-align: right;">
				<!-- <img src="images/logo.jpg" style="width: 30%;"> -->
			</div>
			<br/>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<div id='ctnLogon'>
					<div id="lblLogon" >
						<span style="margin-left:40px"></span>
					</div>

					<!-- LOGIN FORM -->
					<form id="frmLogon" action="php/validate.php" method="POST">
						<table>
							<tr>
								<td><label for='txtPhonenum' style="font-size: 15px; font-weight: bold;font-size: smaller;">Phone number</label>
								<input type="text" name="phone" size='50px' id="txtPhonenum" style="z-index: 9999"/>
								</td>
								<td><label for='txtPin' style="font-size: 15px;font-weight: bold;font-size: smaller;">PIN</label>
								<input name="pin" id="txtPin" type="password" value="" data-clear-btn="true">
								</td>
							</tr>
							<tr>
								<td colspan="2"><!-- <div id="requests" class="btnLogon"> -->
								<input type="submit" name="btnLogon" value="Logon" id="btnLogon" data-theme="a" />
								<!-- </div><!--  -->
								<p>
									It is your responsibility to ensure the secrecy of your PIN number.
								</p></td>
							</tr>
						</table>
					</form>
					<!-- END OF LOGIN FORM -->
				</div>
				<!-- IMAGE SLIDER -->
				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider" style="height: auto;">
							<img src="images/slid.png" data-thumb="images/ad4.jpg" alt="" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/2nd.png" data-thumb="images/ad5.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
						</div>
					</div>
				</div>
				<!-- END OF IMAGE SLIDER -->
				<!-- OPTION BUTTONS -->
				<div id="calculator" class="btnHeads">
					<img src="images/calculator.png" alt="Calculator" style="width: 15px; height: 20px" /> &nbsp;
					REGISTER
				</div>
				<div id="dropCalc" style="display: none; padding: 5px; border: 1px solid rgb(197,199,199);margin: 5px; margin-top: 0px;border-radius: 3px;">
					<form action="php/register.php" method="post" id="frmregister">
						<label for="name">Full Name</label>
						<input type="text" name='name' />
						<label for="loc">Location</label>
						<input type="text" name='loc' />
						<label for="phone">Phone Number</label>
						<input type="text" name='phone' />
						<label for="age">Age</label>
						<input type="number" name='age' />
						<p>
							<input type="submit" value="Register" data-theme="a" />
						</p>
					</form>
					
				</div>

				<p>
					<div style="background: url('images/atl2.png');height: 100px;background-size: 100%;background-repeat:no-repeat; width:200px; "></div>
					<div  style='text-align:left; font-family: Arial, Helvetica, sans-serif;font-size: 10px; '>

						&copy; 2013 Instannia Health Solution. Copyright 2013 Instannia Health Solution.
						<br />
						Instannia Health Solution All rights reserved
						Instannia Health Solution authorized financial services and registered credit provider.

					</div>
				</p>
				<br/>
				<br/>
			</div>
			<div id="lower">
				<p id="exTerm" style="border: 2px solid silver; opacity: .95; padding: 15px;background: url('images/back1.PNG');
				background-repeat: no-repeat; font-size: 10px;
				background-size: 300%; color: white; display: none;">
					As the Corporate Social Responsibility arm of the instannia health solution, Instannia Health Solution is committed to the
					socio-economic betterment of the communities in which the health operates,
					focusing on development in the areas of Environment, Education, Economic Empowerment and Special Projects.
				</p>
				<p id="exAbout" style="border: 2px solid silver; opacity: .95; padding: 15px;background: url('images/back1.PNG');
				background-repeat: no-repeat;font-family: Arial, Helvetica, sans-serif;font-size: 10px;
				background-size: 300%; color: white; display: none;">
					The Instannia Health Solution mobile health application is meant to provide clients of Instannia Health Solutionwith most of the basic services offered by the health
					through hand held devices. This service is provided by Instannia Health Solutionand powered by NALO SOLUTIONS.
				</p>
				<div id='footer' data-role='footer'>
					<div style="margin: 0px auto; padding-top:10px; font-size: small; ">
						<span  id='terms' style="width: 50%; height: 100%;margin-right: 5px;padding: 13px;cursor: pointer; font-size: 5px;" ><img src="images/terms.png" alt="Terms" style="width: 20px; height: 15px" /> </span><span id='about' style="margin-left:5px; width: 50%; height: 100%;padding:13px; cursor: pointer;" ><img src="images/about.png" alt="About" style="width: 20px; height: 15px" /></span>
					</div>

				</div>
			</div>

		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {

		$('#slider').nivoSlider();

		// BRANCH LOCATOR
		$('#btnBranchLoc').click(function() {
			$('#dropBranchLoc').slideToggle();
		})
		// calculator
		$('#calculator').click(function() {
			$('#dropCalc').slideToggle();
		})
		// terms and conditions
		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});
		// about application
		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});

		/* // LOGON ATTEMP VALIDATION
		 $('.btnLogon').click(function() {
		 window.location = 'php/homepage.php';
		 // $.post("php/validate.php", {
		 // phone : $("#txtPhonenum").val(),
		 // pin : $("#txtPin").val()
		 // }, function(data) {
		 // alert(phone);
		 // });
		 });*/

	}); 
</script>
