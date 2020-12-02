<?php
	session_start();
	require 'connection.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$userid = "";
		$sqlforname = "select * from notification where id = '$id'";
		$resultforname = mysqli_query($con,$sqlforname);
		if (mysqli_num_rows($resultforname)>0) {
			while ($rows = mysqli_fetch_assoc($resultforname)) {
				$userid = $rows['ffrom'];
				$khatiyan = $rows['khatiyan_no'];
			}
		}
		$name = "";
		$sqlforname1 = "SELECT * from user_information where user_id = '$userid'";
		$result4 = mysqli_query($con,$sqlforname1);
		if (mysqli_num_rows($result4)>0) {
			while ($rows1 = mysqli_fetch_assoc($result4)) {
				$name = $rows1['name'];
			}
		}

		$sql1 = "UPDATE cs set user_id = '$userid' where khatiyan_no = '$khatiyan' and land_owner = '$name'";
		$result1 = mysqli_query($con,$sql1);
		$sql2 = "UPDATE rs set user_id = '$userid' where khatiyan_no = '$khatiyan' and land_owner = '$name";
		$result2 = mysqli_query($con,$sql2);
		$sql3 = "UPDATE sa set user_id = '$userid' where khatiyan_no = '$khatiyan' and land_owner = '$name";
		$result3 = mysqli_query($con,$sql3);
		$sql4 = "DELETE from notification where id = '$id'";
		$res = mysqli_query($con,$sql4);
		header("location: \\land-registration/profile.php");
	}
?>