<?php
	require('database/connection.php');

	$userid = $_SESSION['useridusr'];
?>
<table id="basicExample" class="table m-0">
<?php
	$sql = "SELECT * FROM sa where user_id = '$userid'";

	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		?>
		<thead>
			<tr>
			<th >District</th>
			<th >Subdistrict</th>
			<th >Mouja</th>
			<th >J L No</th>
			<th >Khatiyan No</th>
			<th >Land's Owner</th>
			<th >Land Quantity (Sotangsho)</th>
			<th >Land Address</th>
			<th >Comment</th>
		</tr>
		</thead>
	<?php
	// output data of each row
	while($row = $result->fetch_assoc()) {
	?>
		<tbody>
			<tr>
			<td><?php echo $row['district']; ?></td>
			<td><?php echo $row['subdistrict']; ?></td>
			<td><?php echo $row['mouja']; ?></td>
			<td><?php echo $row['ze_el_no']; ?></td>
			<td><?php echo $row['khatiyan_no']; ?></td>
			<td><?php echo $row['land_owner']; ?></td>
			<td><?php echo $row['land_quantity']; ?></td>
			<td><?php echo $row['land_address']; ?></td>
			<td><?php echo $row['comment']; ?></td>
		</tr>
		</tbody>
		<?php } 
		} else echo"<p>No Result found.</p>"?>
</table>