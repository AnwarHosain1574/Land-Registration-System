<?php
	require('connection.php');
	session_start();

	if (isset($_POST['submit'])) {
		$dolilno = $_POST['dolilno'];
		$selldate = $_POST['selldate'];
		$buyeruserid = $_POST['buyeruserid'];
	    $buyername = "";
	    $buyernid = "";
	    $query = "SELECT * from user_information where user_id = '$buyeruserid'";
	    $result = mysqli_query($con,$query);
	    while($row = mysqli_fetch_assoc($result)) {
	      $buyeruserid = $row['user_id'];
	      $buyername = $row['name'];
	      $buyernid = $row['nationalID'];
	    }

	    $selleruserid = $_POST['selleruserid'];
	    $sellername = "";
	    $sellernid = "";
	    $query = "SELECT * from user_information where user_id = '$selleruserid'";
	    $result = mysqli_query($con,$query);
	    while($row = mysqli_fetch_assoc($result)) {
	      $selleruserid = $row['user_id'];
	      $sellername = $row['name'];
	      $sellernid = $row['nationalID'];
	    }
	    
	    $firstwitness = $_POST['firstwitness'];
	    $secondwitness = $_POST['secondwitness'];
	    $thirdwitness = $_POST['thirdwitness'];
		$landquantity = $_POST['landquantity'];
		$landaddress = $_POST['landaddress'];
	    $comment = $_POST['comment'];
	    $khatiyanno = $_POST['khatiyanno'];

	    $userid = $_SESSION['useridusr'];

	    $sql = mysqli_query($con,"INSERT INTO record (dolil_no,khatiyan_no, sell_date, buyer_user_id, buyer_name, buyer_nid, seller_user_id, seller_name, seller_nid, witness_1, witness_2, witness_3, land_quantity, land_address, comment) VALUES ('$dolilno','$khatiyanno', '$selldate', '$buyeruserid', '$buyername', '$buyernid', '$selleruserid', '$sellername', '$sellernid', '$firstwitness', '$secondwitness', '$thirdwitness', '$landquantity', '$landaddress', '$comment')" ) ;
	   	echo "Insertion success";
		header("location: \\land-registration/home.php");

	}
	//header("location: home.php");
?>