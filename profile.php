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
				<?php require'UI/titlebarhome.php'; ?>
			</header>
			
				<?php require'UI/afternavigation.php';?>
			<div class="main-container">					
				<form action="php_code/cjinfo_check.php" method="post">
						
					<div class="main-container">


					<!-- Page header start -->
					<div class="content-wrapper">
					<h5 class="title">You Added These Information</h5>
					<?php require'ui/profile_table.php';?>
					<h5 class="title">You Added These Request</h5>
					<?php require'ui/notification.php';?>
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
</html>