<?php
	require 'connection.php';
	session_start();
	if (isset($_POST['send'])) {

		$from = $_SESSION['useridusr'];
		$to = $_SESSION['toname'];
		$date = date('d/m/y');
		$status = 1;
		$comment = $_POST['comment'];
		$khatiyan_no = $_SESSION['khatiyan_no'];
		$address = $_SESSION['address'];

		echo "$from<br>";
		echo "$to<br>";
		echo "$date<br>";
		echo "$status<br>";
		echo "$comment<br>";
		echo "$khatiyan_no<br>";
		echo "$address<br>";
		
		/*$query = "INSERT INTO notification(ffrom, to, ddate, status, comment, khatiyan_no, land_address) values ('$from', '$to', '$date', '$status', '$comment', '$khatiyan_no', '$address');";*/
		$query = "INSERT INTO notification(ffrom, tto, ddate, status, comment, khatiyan_no, land_address) VALUES ('$from', '$to', '$date', '$status', '$comment', '$khatiyan_no','$address')";
		$sql = mysqli_query($con, $query);
		if ($sql) {
			echo "Insertion Success";
		}else echo "Failed";/**/
		
		/*$query1 = "SELECT * from user_information where user_id ='$to';";
    $result1 = mysqli_query($con,$query1);
		  if (mysqli_num_rows($result1)>0) {
		  // output data of each row
		  while($row1 = mysqli_fetch_assoc($result1)) {
		  		echo $row1['user_id']."<br>";
		  		echo $row1['name']."<br>";
		  }
		}else echo "<br>No Result<br>";*/
		/*echo '<script language="javascript">';
		echo 'alert("Request successfully sent")';
		echo '</script>';*/
		header("location: \\land-registration/request_succes.php");
	}
?>