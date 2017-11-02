<?php

include_once('checkJobSeekerSession.php');
include_once('config.php');
include_once('constant.php');
$resumeJobskid = $_SESSION[$sessionJobSeekerId];

$resumeQuery=mysqli_query($db1,"select * from $RESUME_TABLE where $RESUME_JOBSKID='$resumeJobskid'");
$resumeResult=mysqli_fetch_array($resumeQuery, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="JobWell India">
   	<meta name="description" content="">

    <title>JobWell India | JobWell India Portal </title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css"> 
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
		
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="welcomejobseeker.php">Home</a></li>
							<li><a href="job-list.php">Job list</a></li>
							<li><a href="details.php">Job Details</a></li>
							<li><a href="resume.php">Resume</a></li>
							<li><a href="profile.php" class="active">My Profile</a></li>
						</ul>
					</div>
				</div><!-- navbar-left -->
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="login.php">Sign Out</a></li>
					</ul><!-- sign-in -->
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- delete-page -->
	<section class="clearfix job-bg delete-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="welcomejobseeker.php">Home</a></li>
					<li>Close account</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Close Account</h2>
			</div><!-- banner -->

			<div class="job-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<?php
							if(!empty($resumeResult[$RESUME_PHOTOFORRESUME]))
								echo '<img src="data:image;base64,'.$resumeResult[$RESUME_PHOTOFORRESUME].'" style="width:73px;height:73px;" alt="User Images" class="img-responsive">';
							else
								echo '<img src="images/user.jpg" alt="User Images" class="img-responsive">';
						?>
					</div>
					<div class="user">
						<h2>Hello, <a href="#">Jhon Doe</a></h2>
						<h5>You last logged in at: 10-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
					</div>

					<div class="favorites-user">
						<div class="my-ads">
							<a href="applied-job.php">29<small>Apply Job</small></a>
						</div>
						<div class="favorites">
							<a href="bookmark.php">18<small>Favorites</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li><a href="profile.php">Profile Details</a></li>
					<li><a href="profile-details.php">Edit Profile Details</a></li>
					<li><a href="resume.php">View Resume</a></li>
					<li><a href="edit-resume.php">Edit Resume</a></li>
					<li><a href="applied-job.php">Applied Jobs</a></li>
					<li><a href="bookmark.php">Bookmark</a></li>
					<li><a href="profile.php">Account Info </a></li>
					<li class="active"><a href="delete-account.php">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->		
			
			<div class="close-account text-center">
				<div class="delete-account section">
					<h2>Delete Your Account</h2>
					<h4>Are you sure, you want to delete your account?</h4>
					<a href="#" class="btn">Delete Account</a>
					<a href="#" class="btn cancle">Cancle</a>
				</div>			
			</div>
		</div><!-- container -->
	</section><!-- delete-page -->
	
	<?php	
		include("footer.php");
	?>
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
  </body>
</html>