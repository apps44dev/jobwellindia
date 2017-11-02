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
							<li><a href="index.php">Home</a></li>
							<li><a href="job-list.php">Job list</a></li>
							<li><a href="details.php">Job Details</a></li>
							<li><a href="resume.php">Resume</a></li> 
							<li class="dropdown active"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="profile.php">Profile</a></li>
									<li><a href="post-resume.php">Post Resume</a></li>
									<li><a href="post.php">Job Post</a></li>
									<li><a href="edit-resume.php">Edit Resume</a></li>
									<li><a href="profile-details.php">profile Details</a></li>
									<li><a href="bookmark.php">Bookmark</a></li>
									<li><a href="applied-job.php">Applied Job</a></li>
									<li><a href="delete-account.php">Close Account</a></li>
									
									<li class="active"><a href="login.php">Job Signin</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- navbar-left -->
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="login.php">Sign In</a></li>
						<li><a href="signup.php">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="post.php" class="btn">Post Your Job</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- signin-page -->
	<section class="clearfix job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
						<!-- form -->
						<form action="#">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" >
							</div>
							<button type="submit" href="#" class="btn">Login</button>
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="#">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
					<a href="#" class="btn-primary">Create a New Account</a>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signin-page -->

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