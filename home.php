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
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<h5>Land Registration</h5>
										<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleFade" data-slide-to="1"></li>
												<li data-target="#carouselExampleFade" data-slide-to="2"></li>
												<li data-target="#carouselExampleFade" data-slide-to="3"></li>
												<li data-target="#carouselExampleFade" data-slide-to="4"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img src="img/image (4).jpg" class="rounded d-block w-100" alt="Carousel">
												</div>
												<div class="carousel-item">
													<img src="img/image (2).jpg" class="rounded d-block w-100" alt="Carousel">
												</div>
												<div class="carousel-item">
													<img src="img/image (7).jpg" class="rounded d-block w-100" alt="Carousel">
												</div>
												<div class="carousel-item">
													<img src="img/image (5).jpg" class="rounded d-block w-100" alt="Carousel">
												</div>
												<div class="carousel-item">
													<img src="img/image (6).jpg" class="rounded d-block w-100" alt="Carousel">
												</div>
											</div>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>	
										  <div class="col-sm-6">
										    <div class="card">
										      <div class="card-body">
										        <section class="welcome-block post-bottom-5em"><div class="inside"><div class="post-col-12"><h2>Start a good life</h2> <label>Our Services go beyond just providing safe, secured <strong>blockchain</strong> based Land Registration System. As service, we also provide buying and selling a land with blockchain maintain. You can see your land in google map in future. We are developing our site.</label> <a href="#" class="view-property">Join our Community</a></div></div></section>
										      </div>
										    </div>
										  </div>
										</div>
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

		<!-- Vector Maps -->
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEZWpVOMiyNtEGRBHN48w_fMZ5Pw2jF8U&amp;callback=initMap">
		</script>

		<script>
			// Map #One
			function initMap() {
				var uluru = {lat: 23.397, lng: 80.000};
				var map = new google.maps.Map(document.getElementById('google-map'), {
					zoom: 3,
					
					center: uluru
				});
				var marker = new google.maps.Marker({
					position: uluru,
					map: map
				});
			}
		</script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:29:10 GMT -->
</html>