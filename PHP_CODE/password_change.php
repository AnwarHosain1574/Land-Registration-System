<?php  
	session_start();
	require 'connection.php';
	if (isset($_POST['submit'])) {
		$userid = $_SESSION['useridusr'];
		$oldpass = $_POST['oldpass'];
		$newpass = $_POST['newpass'];
		$cnewpass = $_POST['connewpass'];
		$query2 = "UPDATE user_information set password = '$cnewpass' where user_id = '$userid'";
		$sql = mysqli_query($con,$query2);
		//echo "Success";
		header("location: \\land-registration/profile.php");
	}
?>