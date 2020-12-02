Dear <?php
              $useridfst = $_SESSION['useridfst'];
              $query = "SELECT * from user_information where user_id ='$useridfst';";
                $result = mysqli_query($con,$query);
              if (mysqli_num_rows($result)>0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
              	$_SESSION['toname'] = $row['user_id'];
               echo $row['name']; }}?><!-- [Anwar hosain] -->,<br>
            <?php
              $query2 = "SELECT * from cs where user_id ='$useridfst';";
              $result2 = mysqli_query($con,$query2);
              if (mysqli_num_rows($result2)>0) {
              // output data of each row
              while($row1 = mysqli_fetch_assoc($result2)) {
            ?>
            I want to buy your land. Khatiyan No is <?php $_SESSION['khatiyan_no'] = $row1['khatiyan_no'];
            echo $row1['khatiyan_no']; ?><!-- [132] -->. Land Address is <?php $_SESSION['address'] = $row1['land_address'];
             echo $row1['land_address']; }}?><!-- [there] -->.
            <!-- I want to buy [2] --> <!--<strong id="prequantity"></strong> sotangsho. --> I am waiting to your Reply.<br>
                                            Sincerly,<br>
         <?php  
    	//}
    //}
    	$useridusr = $_SESSION['useridusr'];
      //echo "$useridusr<br>";
    	$query1 = "SELECT * from user_information where user_id ='$useridusr';";
    	$result1 = mysqli_query($con,$query1);
    	if (mysqli_num_rows($result1)>0) {
    	// output data of each row
    	while($row1 = mysqli_fetch_assoc($result1)) {
    		
                echo $row1['name']; //[Anwar hosain]
        
    		}
    	}
    ?>