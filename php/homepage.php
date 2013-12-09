<?php
session_start();
echo $_SESSION['phone'];
?>
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

				<!-- IMAGE SLIDER -->
				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider" style="height: auto;">
							<img src="../images/slid.png" data-thumb="../images/ad4.jpg" alt="" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/2nd.png" data-thumb="../images/ad5.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
						</div>
					</div>
				</div>
				<!-- END OF IMAGE SLIDER -->

				<!-- OPTION BUTTONS -->
				<a href="respond.php" rel="external">
				<div class="btnHeads" id="btnBalance">
					<img src="../images/accountbalance.png" alt="Account Balance" style="width: 20px; height: 20px" /> &nbsp;
					Book Appointment
				</div> </a>
				<a href="../mainpage.php" rel="external">
				<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="LOG OUT" data-theme="d">
				</a>
			</div>
			<!-- END OF OPTION BUTTONS -->
			<p>
				<div style="background: url('../images/atl2.png');height: 100px;background-size: 100%;background-repeat:no-repeat; width:200px; "></div>
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
			<p id="exTerm" style="border: 2px solid silver; opacity: .95; padding: 15px;background: url('../images/back1.PNG');
			background-repeat: no-repeat; font-family: Arial, Helvetica, sans-serif;font-size: 10px;
			background-size: 300%; color: white; display: none;">
				As the Corporate Social Responsibility arm of the instannia health solution, Instannia Health Solution is committed to the
				socio-economic betterment of the communities in which the health operates,
				focusing on development in the areas of Environment, Education, Economic Empowerment and Special Projects.
			</p>
			<p id="exAbout" style="border: 2px solid silver; opacity: .95; padding: 15px;background: url('../images/back1.PNG');
			background-repeat: no-repeat;font-family: Arial, Helvetica, sans-serif;font-size: 10px;
			background-size: 300%; color: white; display: none;">
				The Instannia Health Solution mobile health application is meant to provide clients of Instannia Health Solutionwith most of the basic services offered by the health
				through hand held devices. This service is provided by Instannia Health Solutionand powered by NALO SOLUTIONS.
			</p>
			<div id='footer' data-role='footer'>
				<div style="margin: 0px auto; padding-top:10px; font-size: small; ">
					<span  id='terms' style="width: 50%; height: 100%;margin-right: 5px;padding: 13px;cursor: pointer; font-size: 5px;" ><img src="../images/terms.png" alt="Terms" style="width: 20px; height: 15px" /> </span><span id='about' style="margin-left:5px; width: 50%; height: 100%;padding:13px; cursor: pointer;" ><img src="../images/about.png" alt="About" style="width: 20px; height: 15px" /></span>
				</div>

			</div>
		</div>

		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {
		// IMAGE SLIDER
		$('#slider').nivoSlider();

		// TRANSACTION OPTION
		$('#transaction').click(function() {
			$('#dropTrans').slideToggle();
		})
		// CARRYOUT TRANSACTION
		$('#btntrans').click(function() {
			window.location = "transfer.php";
		})
		// CHECK USERS BALANCE
		$('#btnBalance').click(function() {
			// window.location = "balance.php"
			$('#dropBal').slideToggle();
			//$('#dropBal').html('You available balance is GHc.....p <br/>Your current balance is GHc.....p <br/>');
			/*$.get("php/balance.php", function(data) {
			 if (data == '1') {
			 $('#dropBal').slideToggle();
			 $('#dropBal').html(data);
			 } else {
			 $('#dropBal').slideToggle();
			 $('#dropBal').html('PLEASE LOG IN TO VIEW BALANCE DETAILS');
			 }
			 });*/

		})
		// REQUEST FOR ITEMS
		$('#req').click(function() {
			$('#dropReq').slideToggle();
		})
		//CHECK BOOK OPTION
		$('#btnCheckbook').click(function() {
			$('#drpChkBk').slideToggle();
			$('#drpACard').slideUp();
		})
		//NEW CHECK BOOK OPTION
		$('#btnNewCheckbook').click(function() {
			$('#drpChkBk').slideUp();
			$('#dropReq').slideUp();
			$('#ctnNewChkBk').slideDown();
		})
		//CLOSE NEW CHECK BOOK OPTION
		$('#btnCloseNewChkbk').click(function() {
			$('#ctnNewChkBk').slideUp();
			$('#dropReq').slideDown();
		})
		//Block CHECK BOOK OPTION
		$('#btnBlockCheckbook').click(function() {
			$('#drpChkBk').slideUp();
			$('#dropReq').slideUp();
			$('#ctnBlockChkBk').slideDown();
		})
		//CLOSE BLOCK CHECK BOOK OPTION
		$('#btnCloseBlockChkbk').click(function() {
			$('#ctnBlockChkBk').slideUp();
			$('#dropReq').slideDown();
		})
		//CLOSE CHECK BOOK
		$('#btnCloseCheckbook').click(function() {
			$('#drpChkBk').slideToggle();
			$('#drpACard').slideUp();
		})
		// ......................................................................................................................................
		//ATM CARD OPTION
		$('#btnACard').click(function() {
			$('#drpACard').slideToggle();
			$('#drpChkBk').slideUp();
		})
		//CLOSE ATM CARD
		$('#btnCloseACard').click(function() {
			$('#drpACard').slideToggle();
			$('#drpACard').slideUp();
		})
		//NEW ATM OPTION
		$('#btnNewACard').click(function() {
			$('#drpACard').slideUp();
			$('#dropReq').slideUp();
			$('#ctnNewATM').slideDown();
		})
		//CLOSE NEW ATM OPTION
		$('#btnCloseNewATM').click(function() {
			$('#ctnNewATM').slideUp();
			$('#dropReq').slideDown();
		})
		//Block ATM OPTION
		$('#btnBlockACard').click(function() {
			$('#drpACard').slideUp();
			$('#dropReq').slideUp();
			$('#ctnBlockATM').slideDown();
		})
		//CLOSE BLOCK ATM OPTION
		$('#btnCloseBlockATM').click(function() {
			$('#ctnBlockATM').slideUp();
			$('#dropReq').slideDown();
		})
		// utility
		$('#btnUtil').click(function() {
			$('#dropUtil').slideToggle();
		})
		//TERMS AND CONDITION
		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});
		// ABOUT APPLICATION
		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});
		// UTILITY PURCHASE
		// $('#btnpurchase').click(function() {
		// $.post("php/utilities.php", {
		// utility : $("#checkboxReq").val(),
		// amount : $("#txtUtilAmt").val()
		// }, function(data) {
		// alert(phone);
		// });
		// });
	}); 
</script>
