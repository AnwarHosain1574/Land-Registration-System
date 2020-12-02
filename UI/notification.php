<?php
	require('database/connection.php');
	$userid = $_SESSION['useridusr'];
?>
<table id="basicExample" class="table m-0">
<?php
	$status = 1;
	$sql = "SELECT * FROM notification where tto = '$userid' and status = '$status'";

	$result = mysqli_query($con, $sql);
	/*if ($result) {
		echo "Select Success<br>";
	} else "fuck you Madharchod<br>";*/
	if (mysqli_num_rows($result)>0) {
		?>
		<thead>
			<tr>
				<th >From</th>
				<th >To</th>
				<th >Khatiyan No</th>
				<th >Comment</th>
				<th >Land Address</th>
				<th>Action</th>
			</tr>
		</thead>
	<?php
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	?>
		<tbody>
			<tr>
			<td><?php echo $row['ffrom']; ?></td>
			<td><?php echo $row['tto']; ?></td>
			<td><?php echo $row['khatiyan_no']; ?></td>
			<td><?php if ($row['comment']=="") {
				echo "No Comment Found";
			} else	echo $row['comment']; 
			?></td>
			<td><?php echo $row['land_address']; ?>
			<td><a href="php_code/notification_add.php?id=<?php echo $row['id']?>" class="btn btn-primary mb-2">Yes</a><strong>/</strong> <a href="php_code/notification_delete.php?id=<?php echo $row['id']?>" class="btn btn-primary mb-2" >No</a>
			</td>
		</tr>
		</tbody>
		<?php } 
		} else echo"<p>No Request found.</p>"?>
</table>