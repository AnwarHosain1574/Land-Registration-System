<?php
	//echo $_POST['Submit'];
	ini_set ("display_errors", "1");
	error_reporting(E_ALL);
	ob_start();

	session_start();
	require('connection.php');
	if (isset($_POST['submit'])) {
		// Defining your login details into variables
		$email=$_POST['email'];
		$mypassword=$_POST['password'];
		//
    		$sql = "SELECT * FROM user_information WHERE email='$email' and password='$mypassword'";
		$result=mysqli_query($con, $sql);

		// Checking table row
		$count=mysqli_num_rows($result);
		// If username and password is a match, the count will be 1

		if($count==1){
			// If everything checks out, you will now be forwarded to voter.php
			$user = mysqli_fetch_assoc($result);

			$_SESSION['useridusr'] = $user['user_id'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['name'] = $user['name'];
			//echo "string";
			header("location: \\land-registration/home.php");
		}
		//If the username or password is wrong, you will receive this message below.
		else {
			header("location: \\land-registration/login.php");
		}
	}

	ob_end_flush();

?> 