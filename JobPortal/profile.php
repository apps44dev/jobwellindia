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
							<li class="active"><a href="profile.php">My Profile</a></li>
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

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="welcomejobseeker.php">Home</a></li>
					<li>Profile Details</li>
				</ol>						
				<h2 class="title">My Profile</h2>
			</div><!-- breadcrumb-section -->
			
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
					<li class="active"><a href="profile.php">Profile Details</a></li>
					<li><a href="profile-details.php">Edit Profile Details</a></li>
					<li><a href="resume.php">View Resume</a></li>
					<li><a href="edit-resume.php">Edit Resume</a></li>
					<li><a href="applied-job.php">Applied Jobs</a></li>
					<li><a href="bookmark.php">Bookmark</a></li>
					<li><a href="profile.php">Account Info </a></li>
					<li><a href="delete-account.php">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->

			<div class="resume-content">
				<div class="profile section clearfix">
					<div class="profile-logo">
					    <img class="img-responsive" src="images/job/resume.jpg" alt="Image">
					</div>
					<div class="profile-info">
					    <h1>Jhon Doe</h1>
					    <address>
					        <p>Address: 123 West 12th Street, Suite 456 New York, NY 123456 <br> Phone: +012 345 678 910 <br> Email:<a href="#"> itsme@surzilegeek.com</a></p>
					    </address>
					</div>					
				</div><!-- profile -->

				<div class="career-objective section">
			        <div class="icons">
			            <i class="fa fa-black-tie" aria-hidden="true"></i>
			        </div>   
			        <div class="career-info">
			        	<h3>Career Objective</h3>
			        	<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
			        </div>                                 
				</div><!-- career-objective -->

				<div class="work-history section">
			        <div class="icons">
			            <i class="fa fa-briefcase" aria-hidden="true"></i>
			        </div>   
			        <div class="work-info">
			        	<h3>Work History</h3>
			        	<ul>
			        		<li>
				        		<h4>Senior Graphic Designer @ Buildomo <span>2012 - Present</span></h4>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			        		</li>
			        		<li>
				        		<h4>Former Graphic Designer @ Ideame <span>2011 - 2012</span></h4>
				        		<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			        		</li>
			        		<li>
				        		<h4>Head of Design @ Titan Compnay <span>2005 - 2011</span></h4>
				        		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
			        		</li>
			        		<li>
				        		<h4>Graphic Designer @ Precision <span>2004 - 2005</span></h4>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			        		</li>
			        		<li>
				        		<h4>Graphic Designer (Intern) @ Costa Rica Fruit Compnay <span>2002 - 2004</span></h4>
				        		<p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			        		</li>
			        	</ul>
			        </div>                                 
				</div><!-- work-history -->

				<div class="educational-background section">
					<div class="icons">
					    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>	
					<div class="educational-info">
						<h3>Education Background</h3>
						<ul>
							<li>
								<h4>Masters of Arts @ Montana Satet University</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</li>
							<li>
								<h4>Bachalor of Arts @ Universty of Bristol</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</li>
							<li>
								<h4>Diploma in Graphics Design @ Cincinnati Christian University</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
							</li>
						</ul>
					</div>				
				</div><!-- educational-background -->

				<div class="special-qualification: section">
					<div class="icons">
					    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>	
					<div class="qualification">
						<h3>Special Qualification:</h3>
						<ul>
							<li><span>1.</span> 5 years+ experience designing and building products In the Design & IT industry.</li>
							<li><span>2.</span> Passion for people-centered design, solid intuition.</li>
							<li><span>3.</span> Skilled at any Kind Design Tools. </li>
							<li><span>4.</span> Hard Worker & Quick Lerner.</li>
						</ul>
					</div>				
				</div><!-- educational-background -->

				<div class="language-proficiency section">
			        <div class="icons">
			            <i class="fa fa-language" aria-hidden="true"></i>
			        </div>
				    <div class="proficiency">
				    	<h3>Language Proficiency</h3>
				        <ul class="list-inline">
				            <li>
				                <h5>English</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>German</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>Spanish</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>Latin</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				        </ul>
				    </div>
				</div><!-- language-proficiency -->		

				<div class="personal-deatils section">
				    <div class="icons">
				        <i class="fa fa-user-secret" aria-hidden="true"></i>
				    </div>  
				    <div class="personal-info">
				    	<h3>Personal Deatils</h3>
				        <ul class="address">
				            <li><h5>Full Name </h5> <span>:</span>Jhon Doe</li>
				            <li><h5>Father's Name </h5> <span>:</span>Robert Doe</li>
				            <li><h5>Mother's Name </h5> <span>:</span>Ismatic Roderos Doe</li>
				            <li><h5>Date of Birth </h5> <span>:</span>26/01/1982</li>
				            <li><h5>Birth Place </h5> <span>:</span>United State of America</li>
				            <li><h5>Nationality </h5> <span>:</span>Canadian</li>
				            <li><h5>Sex </h5> <span>:</span>Male</li>
				            <li><h5>Address </h5> <span>:</span>121 King Street, Melbourne Victoria, 1200 USA</li>
				        </ul>    	
				    </div>                               
				</div><!-- personal-deatils -->	

				<div class="declaration section">
			        <div class="icons">
			            <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
			        </div>   
			        <div class="declaration-info">
			        	<h3>Declaration</h3>
			        	<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni। dolores eos qui ratione voluptatem sequi nesciunt.</p>
			        </div>                                 
				</div><!-- career-objective -->									
				<div class="buttons">
					<a href="#" class="btn">Update Profile</a>
					<a href="#" class="btn cancle">Cancle</a>
				</div>
				<div class="download-button resume">
					<a href="#" class="btn">Download Resume as doc</a>
				</div>
			</div><!-- resume-content -->						
		</div><!-- container -->
	</section><!-- ad-profile-page -->

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