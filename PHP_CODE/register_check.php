<?php
//done
require('connection.php');
if (isset($_POST['submit'])) { 
  
  $fullName =  $_POST['name'];
  $userid =  $_POST['username'];
  $fatherName =  $_POST['fathersname'];
  $motherName =  $_POST['mothersname'];
  $presentaddress =  $_POST['presentadd'];
  $permanentaddress =  $_POST['permanentadd'];
  $dateofbirth =  $_POST['dob'];
  $mobileNumber =  $_POST['mobilenumber'];
  $NID =  $_POST['nationalid'];
  $email =  $_POST['email'];
  $myPassword = $_POST['password'];
  echo "$email<br>";

  $sql = mysqli_query($con,"INSERT INTO user_information(user_id, name, fathersname, mothersname, presentAddress, permanentAddress, dateofbirth, mobileNumber, nationalID, email, password) VALUES ('$userid', '$fullName', '$fatherName', '$motherName', '$presentaddress', '$permanentaddress', '$dateofbirth', '$mobileNumber', '$NID', '$email', '$myPassword')" ) ;
  if ($sql) {
  	echo "Insertion Success.";
  	header("location: \\land-registration/registration_success.php");
  }
 	
  }
?>