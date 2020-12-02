<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
								<div class="card-body">
									
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">District</label>
										<div class="col-sm-10">
											<!-- <input type="text" class="form-control" name="district" placeholder="Name"> -->
											<select required name="district" required onchange="populate(this.id,'subdist')" id="dist" class="form-control">
										        <option>Select District</option>
										        <option value="Dhaka">Dhaka</option>
										        <option value="Patuakhali">Patuakhali</option>
										        <option value="Narayongong">Narayongong</option>
										    </select>
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Subdistrict/Thana</label>
										<div class="col-sm-10">
											<!-- <input type="text" class="form-control" name="username" placeholder="Username"> -->
											<select required name="subdistrict" required id="subdist" onchange="populate1(this.id,'mouja')" class="form-control"></select>
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Mouja</label>
										<div class="col-sm-10">
											<!-- <input type="text" class="form-control" name="fathersname" placeholder="Father's Name"> -->
											<select required name="mouja" required id="mouja" class="form-control"></select>
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">J L No</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="jlno" placeholder="Ze El No">
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Khatiyan No</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="khatiyanno" placeholder="Khatiyan No">
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Lands Owner Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="landowner" placeholder="Present Address">
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Land Quantity Type</label>
										<div class="col-sm-10">
											<!-- <input type="text" class="form-control" name="permanentadd" placeholder="Permanent Address"> -->
											<select class="form-control" required name="type">
												<option >Select One</option>
												<option value="Katha">Katha</option>
												<option value="Sotangsho">Shotangsho</option>
												<option value="Bigha">Bigha</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Land Quantity</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="landquantity" placeholder="Land Quantity">
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Land Address</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="landaddress" placeholder="Land Address">
										</div>
									</div>
									<div class="form-group row">
										<label  class="col-sm-2 col-form-label">Comment</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="nationalid" placeholder="Comment">
										</div>
									</div>
									<div class="form-inline">
										<button type="submit" class="btn btn-primary mb-2" name="submit">Save</button>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>