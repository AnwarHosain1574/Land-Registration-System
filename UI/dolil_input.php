
<div class="row gutters">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<div class="card-body">
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Dolil Number</label>
						<input type="text" class="form-control" name="dolilno" placeholder="Dolil Number">
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Khatiyan No</label>
						<select class="form-control selectpicker" name="khatiyanno">
							<option>Select One</option>
						<?php
							//require 'php_check/connection.php';
							$query = "SELECT * from sa";
                            $res = mysqli_query($con,$query);
                            while ($row = mysqli_fetch_assoc($res)) {
                              $buyeruserid = $row['khatiyan_no'];
                              echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Sell Date</label>
						<input type="date" class="form-control" name="selldate" >
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Buyer User Name</label>
						<select class="form-control selectpicker" name="buyeruserid">
							<option>Select One</option>
						<?php                            
                            $query = "SELECT * from user_information";
                                $res = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                  $buyeruserid = $row['user_id'];
                                  echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Seller User Name</label>
						<select class="form-control selectpicker" name="selleruserid">
							<option>Select One</option>
						<?php                            
                            $query = "SELECT * from user_information";
                                $res = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                  $buyeruserid = $row['user_id'];
                                  echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">First Witness User Name</label>
						<select class="form-control selectpicker" name="firstwitness">
							<option>Select One</option>
						<?php                            
                            $query = "SELECT * from user_information";
                                $res = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                  $buyeruserid = $row['user_id'];
                                  echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Second Witness User Name</label>
						<select class="form-control selectpicker" name="secondwitness">
							<option>Select One</option>
						<?php                            
                            $query = "SELECT * from user_information";
                                $res = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                  $buyeruserid = $row['user_id'];
                                  echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label for="inputName">Third Witness User Name</label>
						<select class="form-control selectpicker" name="thirdwitness">
							<option>Select One</option>
						<?php                            
                            $query = "SELECT * from user_information";
                                $res = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                  $buyeruserid = $row['user_id'];
                                  echo "<option value = '$buyeruserid'>$buyeruserid</option>";
                            }
                      ?>
					</select>
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label >Land Quantity</label>
						<input type="text" class="form-control" name="landquantity" placeholder="Khatiyan No">
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label >Land Address</label>
						<input type="text" class="form-control" name="landaddress" placeholder="Land Address">
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<label >Comment</label>
						<input type="text" class="form-control" name="comment" placeholder="Write Something">
					</div>
				</div>
				<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
					<div class="form-group">
						<input type="submit" class="btn btn-info" name="submit" value="Save">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>