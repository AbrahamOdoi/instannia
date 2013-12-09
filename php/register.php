<!DOCTYPE html>
<html>
	<title>MOBILE BANKER</title>
	<head>
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='heade'>
				<!-- data-role='header' -->
			</div>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<?php
				session_start();
				include 'connection.php';
				$phone=$_POST['phone'];
				$loc=$_POST['loc'];
				$name=$_POST['name'];
				$age=$_POST['age'];
				$query="insert into register values('$phone','1111','$name','$loc','$age')";
				$exec=mysql_query($query);
				if($exec) {
				echo "<P>ACTION SUCCESSFUL</P><br /><a href='../mainpage.php' rel='external'>
				<input  data-icon='back' data-rel='back' title='Go back'  type='button' value='PROCEED TO LOGIN' data-theme='b'>
				</a>";
				// header('location:success.php');
				} else {
				echo "<P>ACTION UNSUCCESSFUL</P><br /><a href='../mainpage.php' rel='external'><p>".mysql_error()."</p>
				<input  data-icon='back' data-rel='back' title='Go back'  type='button' value='RETRY' data-theme='b'>
				</a>";
				}
				?>
			</div>
		</div>

	</body>

</html>
<!-- if(isset($_SESSION['views'])) -->