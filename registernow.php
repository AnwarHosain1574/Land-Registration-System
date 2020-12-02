<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />
		<title>Land Registration System and Management System</title>
				<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" type="text/css" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">
		<!-- Datepickers css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

	</head>
	<body>

		<div class="container">			
			<?php require'UI/titlebar.php'; ?>
				<?php require'UI/beforenavigation.php';?>
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-title">
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<h5 class="title">Register An Account By Filling In The Required Informations Below</h5>
						</div>
					</div>
				</div>
				<!-- Page header end -->

				<form action="php_code/register_check.php" method="post">
					<?php require'ui/register_input.php';?>
				</form>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="vendor/daterange/daterange.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>