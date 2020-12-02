<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="author" content="Anwar hosain">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Land Registration System and Management System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" type="text/css" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />


	</head>
	<body>
		<div class="container">
			<header class="header">
				<?php require'UI/titlebarhome.php'; ?>
			</header>
			
				<?php require'UI/afternavigation.php';?>
	
	</div>


	<div class="container">
		<div class="main-container">
			<div class="content-wrapper">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">							
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<?php require'ui/land_search.php';?>
								</div>
							</div>
						</div>
					</div>
				</div>
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

	<script src="vendor/daterange/daterange.js"></script>
	<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>


		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:29:10 GMT -->
</html>