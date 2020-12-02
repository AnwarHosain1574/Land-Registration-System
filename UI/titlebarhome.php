<div class="row gutters">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
						<a href="home.php" class="logo" style="color: blue;">Land Registration System</a>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6">
						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name" style="color: blue;">
										<?php
											session_start();
											$name = $_SESSION['name'];
											echo "$name";
										?>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<!-- <img src="img/anwar.jpg" alt="Anwar Hosain" /> -->
											</div>
											<h5><?php
												$name = $_SESSION['name'];
												echo "$name";
												?>
											
										</h5>
											<!-- <p>Balance - $35,000</p> -->
										</div>
										<a href="profile.php"><i class="icon-user1"></i> My Profile</a>
										<a href="forgotpass.php"><i class="icon-settings1"></i>Forgot Password</a>
										<a href="http://localhost/land-registration/logout_success.php">									
												<i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</div>