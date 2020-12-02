<?php
	session_start();
	require 'connection.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE from notification where id = '$id'";
		$res = mysqli_query($con,$sql);
		header("location: \\land-registration/profile.php");
	}
?>