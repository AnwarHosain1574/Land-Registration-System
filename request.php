<?php
	require 'database/connection.php';
	//session_start();
	//$useridusr = $_SESSION['useridusr'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Land Registration System and Management System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" type="text/css" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />


	</head>
	<body>
		<div class="container">
			<header class="header">
				<?php require'ui/titlebarhome.php'; ?>
			</header>
			
				<?php require'ui/afternavigation.php';?>
				<div class="main-container">					
				
						
					<div class="main-container">


					<!-- Page header start -->
					<div class="content-wrapper">
					<h5 class="title">Request Letter</h5>
					<?php require'ui/letter.php';?><br><br>
					<form action="php_code/letter_send.php" method="post">
						More:<input type="text" class="form-control" name="comment" placeholder="More..."><br>
						<input class="btn btn-info" type="submit" name="send" value="Send">
					</form>
			
			</div>

	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/nav.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="vendor/daterange/daterange.js"></script>

	<!-- Apex Charts -->
	<script src="vendor/apex/apexcharts.min.js"></script>
	<script src="vendor/apex/custom/apexLineChartGradient.js"></script>
	<script src="vendor/apex/custom/apexColumnBasic.js"></script>
	<script src="vendor/apex/custom/apexAllCustomGraphs.js"></script>

	<script src="vendor/daterange/daterange.js"></script>


	</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:29:10 GMT -->
</html>