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
  		<script type="text/javascript" src="js/district.js"></script>

	</head>
	<body>
		<div class="container">			
			<?php require'UI/titlebarhome.php'; ?>
				<?php require'UI/afternavigation.php';?>
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-title">
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<h5 class="title">Cadastral Servey(CS) Porcha Info:</h5>
						</div>
					</div>
				</div>
				<!-- Page header end -->

				<form action="php_code/csinfo_check.php" method="post">
					<?php require'ui/porcha_input.php'; ?>
				</form>
			</div>
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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>
</html>