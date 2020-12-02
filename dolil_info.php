<?php
    require('connection.php');
    $user_id= "";
	$sql = "SELECT * FROM record";

$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = mysqli_fetch_assoc($result)) {

?>
<div id="container" class="dolil">
	<h3><b>Dolil No:</b></h3><p><?php echo $row['dolil_no']; ?></p>
	<h3><b>Land Quantity: </b></h3><p><?php echo $row['land_quantity']; ?></p>
	<p><h3><b>1st Party: </b></h3></p> 
	<p>Mr. <?php echo $row['buyer_name']; ?>, Father: <?php echo $row['buyer_name']; ?>, Mother: <?php echo $row['buyer_name']; ?>, National ID: <?php echo $row['buyer_nid']; ?>, 
		Address: <?php echo $row['land_address']; ?>, 
		<b>Land Buyer</b>
	</p>
	<p><h3><b>2nd Party: </b></h3></p> 
	<p>Mr. <?php echo $row['seller_name']; ?>, Father: <?php echo $row['seller_name']; ?>, Mother: <?php echo $row['seller_name']; ?>, National ID: <?php echo $row['seller_nid']; ?>, 
		Address: <?php echo $row['land_address']; ?>, 
		<b>Land Seller</b>
	</p>
	<br>
	<h3>Witness:</h3>
	<p>
		1. <?php echo $row['witness_1']; ?>.<br>
		2. <?php 
			if ($row['witness_2']==NULL) {
				echo "2nd Witness not Available";
			} else{
				echo $row['witness_2'];
			}
		; ?>.<br>
		3. <?php 
		if ($row['witness_3']==NULL) {
				echo "3rd Witness not Available";
			} else{
				echo $row['witness_2'];
			} ?>.<br>
	</p>
<?php 	} 
     }?>
</div>