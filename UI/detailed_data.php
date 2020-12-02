</table>
<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
								<div class="card-body">
									<?php
									require('database/connection.php');
								?>
								<h1>All Porcha Information</h1>
								<table id="basicExample" class="table m-0">
								<?php
									if (isset($_GET['id'])) {
									 $id=$_GET['id'];

										?>

										<thead>
											<tr>
											<th >Period</th>
											<th >District</th>
											<th >Subdistrict</th>
											<th >Mouja</th>
											<th >J L No</th>
											<th >Khatiyan No</th>
											<th >Land's Owner</th>
											<th >Land Quantity<br>(Shotangsho)</th>
											<th >Land Address</th>
										</tr>
										</thead>
									<?php

									$sql = "SELECT * from sa where id = '$id'";

									$result = mysqli_query($con,$sql);
									if (mysqli_num_rows($result)>0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										$khatiyanno = $row['khatiyan_no'];
										$_SESSION['useridfst'] = $row['user_id'];
									?>
										<tbody>
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
										</tbody>
										<?php }
									}

										$sql = "SELECT * from rs where khatiyan_no = '$khatiyanno'";

										$result = mysqli_query($con,$sql);
										if (mysqli_num_rows($result)>0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											//$khatiyanno = $row['khatiyan_no'];
										?>
											<tbody>
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
											</tbody>
											<?php }
										}

										$sql = "SELECT * from cs where khatiyan_no = '$khatiyanno'";

										$result = mysqli_query($con,$sql);
										if (mysqli_num_rows($result)>0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											//$khatiyanno = $row['khatiyan_no'];
										?>
											<tbody>
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
											</tbody>
											<?php }
										}
									}
									//echo $khatiyanno;
									?>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>