<?php
include '../config/call.php';
//dd($_SESSION['f_name']//);
//dd($_SESSION['email'])//;
if(!checkAdminLogin())
	redirect('login.php');
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from 198.74.61.72/themes/preview/ace/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 28 Feb 2014 17:44:06 GMT -->
<head>
		<meta charset="utf-8" />
		<title>Dashboard-SODEC NEPAL</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			#navbar{
				background:#f75279;
			}

		#dropdown-menu{
			background:#db093b;
		}
		}
		</style>
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="dashboard.php" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							Sodec Nepal
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle" id="dropdown-menu">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Admin's Photo" />
								<span class="user-info">
									<small>Welcome</small>

									
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="manageusers.php">
										<i class="icon-user"></i>
										 <?php  echo ucfirst($_SESSION['f_name']); ?>

									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>