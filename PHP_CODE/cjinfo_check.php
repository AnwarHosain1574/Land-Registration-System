<?php
	require('connection.php');
	session_start();
	if (isset($_POST['submit'])) {
		$district = $_POST['district'];
		$subdistrict = $_POST['subdistrict'];
		$mouja = $_POST['mouja'];
		$jlno = $_POST['jlno'];
		$khatiyanno = $_POST['khatiyanno'];
		$landowner = $_POST['landowner'];
		$landquantity = $_POST['landquantity'];
		$landaddress = $_POST['landaddress'];
    	$comment = $_POST['comment'];
    //$status = ;
	    $type = $_POST['type'];
	    if ($type == "Katha") {
	     $landquantity = $landquantity * 1.5;
	    } elseif ($type == "Bigha") {
	      $landquantity = $landquantity * 1.5 * 20;
	    } elseif ($type == "Sotangsho") {
	      $landquantity = $landquantity;
	    }
	    $status = 0;
			$userid = $_SESSION['useridusr'];

			$sql = mysqli_query($con,"INSERT INTO cj(user_id, district, subdistrict, mouja, ze_el_no, khatiyan_no, land_owner, land_quantity, land_address, status, comment) VALUES ('$userid', '$district', '$subdistrict', '$mouja', '$jlno', '$khatiyanno', '$landowner', '$landquantity', '$landaddress', '$status', '$comment')" ) ;
			echo "Insertion Success";
		header("location: \\land-registration/insertion_success.php");
	}
	//header("location: home.php");
?>