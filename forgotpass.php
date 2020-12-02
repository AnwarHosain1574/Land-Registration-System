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

		<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form1) { 
                password1 = form1.password1.value; 
                password2 = form1.password2.value; 
                oldpass = form1.oldpass.value;
                var spass = <?php echo $_SESSION['password'];?>;
  				
                // If password not entered 
                if (oldpass == '') 
                    alert ("Please enter Password"); 
                if (spass!= oldpass) {
                	alert ("Password Did not Match."); 
                	return false;
                } else if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nConfirm Password did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Successfully Change your Password");
                    return true; 
                } 
            } 
        </script> 
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
				<div class="container">
			
			<form action="php_code/password_change.php" name="form1" method="post" onSubmit = "return checkPassword(this)">
				<div class="row justify-content-md-center">
					<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="index.php" class="login-logo">
									<span class="text-danger">Land</span><span class="text-warning">R</span><span class="text-success">e</span><span class="text-info">g</span><span class="text-royal-orange">i</span><span class="text-jungle-green">s</span><span class="text-warning">t</span><span class="text-success">r</span><span class="text-info">a</span><span class="text-royal-orange">t</span><span class="text-jungle-green">i</span>on
								</a>
								<h5 class="mr-5">Type your Old password and Re-type your new passwo</h5>
								<div class="form-group">
									<input type="password" class="form-control" name="oldpass" id="oldpass"  placeholder="Old Password" required />
									<input type="password" class="form-control" name="newpass" id="password1" placeholder="New Password" required />
									<input type="password" class="form-control" name="connewpass" id="password2" placeholder="Confirm New Password" required />
								</div>
								<div class="actions">
									<input type="submit" name="submit" class="btn btn-danger btn-lg"></input>
								</div>
							</div>
						</div>
					</div>
				</div>
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

	<script src="vendor/daterange/daterange.js"></script>


	</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:29:10 GMT -->
</html>