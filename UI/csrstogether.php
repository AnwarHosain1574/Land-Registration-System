<?php
	//require('connection.php');
?>
<h1>All Porcha Information</h1>
<table style="width:70%; text-align: center;" border="1px">
<?php
	if (isset($_GET['id'])) {
	 $id=$_GET['id'];

		?>

		<tr>
			<th width="40%">Period</th>
			<th width="40%">District</th>
			<th width="30%">Subdistrict</th>
			<th width="40%">Mouja</th>
			<th width="30%">J L No</th>
			<th width="40%">Khatiyan No</th>
			<th width="30%">Land's Owner</th>
			<th width="40%">Land Quantity</th>
			<th width="30%">Land Address</th>
		</tr>
	<?php

	$sql = "SELECT * from sa where id = '$id'";

	$result = mysqli_query($con,$sql);
	if (mysqli_num_rows($result)>0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		$khatiyanno = $row['khatiyan_no'];
		$_SESSION['useridfst'] = $row['user_id'];
	?>
		<tr>
			<th>SA Porcha</th>
			<td><?php echo $row['district']; ?></td>
			<td><?php echo $row['subdistrict']; ?></td>
			<td><?php echo $row['mouja']; ?></td>
			<td><?php echo $row['ze_el_no']; ?></td>
			<td><?php echo $row['khatiyan_no']; ?></td>
			<td><?php echo $row['land_owner']; ?></td>
			<td><?php echo $row['land_quantity']; ?></td>
			<td><?php echo $row['land_address']; ?></td>
		</tr>
		<?php }
	}

		$sql = "SELECT * from rs where khatiyan_no = '$khatiyanno'";

		$result = mysqli_query($con,$sql);
		if (mysqli_num_rows($result)>0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//$khatiyanno = $row['khatiyan_no'];
		?>
			<tr>
				<th>RS Porcha</th>
				<td><?php echo $row['district']; ?></td>
				<td><?php echo $row['subdistrict']; ?></td>
				<td><?php echo $row['mouja']; ?></td>
				<td><?php echo $row['ze_el_no']; ?></td>
				<td><?php echo $row['khatiyan_no']; ?></td>
				<td><?php echo $row['land_owner']; ?></td>
				<td><?php echo $row['land_quantity']; ?></td>
				<td><?php echo $row['land_address']; ?></td>
			</tr>
			<?php }
		}

		$sql = "SELECT * from cs where khatiyan_no = '$khatiyanno'";

		$result = mysqli_query($con,$sql);
		if (mysqli_num_rows($result)>0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//$khatiyanno = $row['khatiyan_no'];
		?>
			<tr>
				<th>CS Porcha</th>
				<td><?php echo $row['district']; ?></td>
				<td><?php echo $row['subdistrict']; ?></td>
				<td><?php echo $row['mouja']; ?></td>
				<td><?php echo $row['ze_el_no']; ?></td>
				<td><?php echo $row['khatiyan_no']; ?></td>
				<td><?php echo $row['land_owner']; ?></td>
				<td><?php echo $row['land_quantity']; ?></td>
				<td><?php echo $row['land_address']; ?></td>
			</tr>
			<?php }
		}
	}
	//echo $khatiyanno;
	?>

</table>