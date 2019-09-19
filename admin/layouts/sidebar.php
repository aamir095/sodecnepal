<?php
$messages=seeMessage($conn);
foreach ($messages as $key => $message){
}

?>
<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					

					<ul class="nav nav-list">
						<li class="active">
							<a href="dashboard.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li>
							<a  class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Admin Users </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="adduser.php">
										<i class="icon-double-angle-right"></i>
										Add User
									</a>
								</li>

								<li>
									<a href="manageusers.php">
										<i class="icon-double-angle-right"></i>
										Manage Users
									</a>
								</li>

								
							</ul>
						</li>

						

					<ul class="nav nav-list">
						<li>
							<a class="dropdown-toggle">
								<i class="icon-book"></i>
								<span class="menu-text">News</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addnews.php">
										<i class="icon-double-angle-right"></i>
										Add News
									</a>
								</li>

								<li>
									<a href="managenews.php">
										<i class="icon-double-angle-right"></i>
										Manage News
									</a>
								</li>

								
							</ul>
						</li>


					<ul class="nav nav-list">
						<li>
							<a class="dropdown-toggle">
								<i class="icon-bell-alt"></i>
								<span class="menu-text">Notice</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addnotice.php">
										<i class="icon-double-angle-right"></i>
										Add Notice
									</a>
								</li>

								<li>
									<a href="managenotices.php">
										<i class="icon-double-angle-right"></i>
										Manage Notices
									</a>
								</li>

								
							</ul>
						</li>


					<ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-camera"></i>
								<span class="menu-text"> Image Slider </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addimageslider.php">
										<i class="icon-double-angle-right"></i>
										Add ImageSlider
									</a>
								</li>

								<li>
									<a href="manageimageslider.php">
										<i class="icon-double-angle-right"></i>
										Manage ImageSlider
									</a>
								</li>

								
							</ul>
						</li>
					<ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-exchange"></i>
								<span class="menu-text"> Our Partners </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addpartner.php">
										<i class="icon-double-angle-right"></i>
										Add Partner
									</a>
								</li>

								<li>
									<a href="managepartners.php">
										<i class="icon-double-angle-right"></i>
										Manage Partners									</a>
								</li>

								
							</ul>
						</li>


                    <ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-certificate"></i>
								<span class="menu-text">Achievement</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addachievement.php">
										<i class="icon-double-angle-right"></i>
										Add Achievement
									</a>
								</li>

								<li>
									<a href="manageachievements.php">
										<i class="icon-double-angle-right"></i>
										 Manage Achievement
									</a>
								</li>

								
							</ul>
						</li>

                      
                      <ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comment"></i>
								<?php 
							
								if($message){?>

								<span class="menu-text">Messages</span>
							<?php echo  "   (".$message.")";
							}
							else { ?> <span class="menu-text">Messages</span> <?php } ?>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									
									<a href="managemessage.php" onclick="myFunction($conn)">
										<i class="icon-double-angle-right"></i>
										View Message
									</a>
								
								</li>

								

								
							</ul>
						</li>


						
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}

						function myFunction($conn)
						{
							<?php
							$stmt=('UPDATE mmt_message SET view=0 WHERE view=1');
							$conn->query($stmt);

							?>
						}
					</script>

				</div>