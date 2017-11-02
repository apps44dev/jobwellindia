<?php

include_once('checkJobSeekerSession.php');
include_once('config.php');
include_once('constant.php');
$resumeJobskid = $_SESSION[$sessionJobSeekerId];

$resumeQuery=mysqli_query($db1,"select * from $RESUME_TABLE where $RESUME_JOBSKID='$resumeJobskid'");
$resumeResult=mysqli_fetch_array($resumeQuery, MYSQLI_ASSOC);
if($resumeResult < 1)
	 header('location:edit-resume.php');
$jobseekerQuery=mysqli_query($db1,"select * from $JOBSEEKER_TABLE where $JOBSEEKER_JOBSKID='$resumeJobskid'");
$jobseekerResult=mysqli_fetch_array($jobseekerQuery, MYSQLI_ASSOC);
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
					<li>View Resume</li>
				</ol>						
				<h2 class="title">Jhon Doe Resume</h2>
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
					<li><a href="profile.php">Profile Details</a></li>
					<li><a href="profile-details.php">Edit Profile Details</a></li>
					<li class="active"><a href="resume.php">View Resume</a></li>
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
					<?php
					   echo '<h1>'.$resumeResult[$RESUME_FULLNAME].'</h1>';
					 ?>
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
			        	<?php
							echo '<p>'.$resumeResult[$RESUME_CAREEROBJECTIVE].'</p>';
						?>
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
							<?php
									echo '<h4>';
									if(!empty($resumeResult[$RESUME_CURRENTDESIGNATION]) && !empty($resumeResult[$RESUME_CURRENTCOMPANYNAME]))
										echo $resumeResult[$RESUME_CURRENTDESIGNATION].' @ '.$resumeResult[$RESUME_CURRENTCOMPANYNAME];
									if(!empty($resumeResult[$RESUME_CURRENTJOININGDATE]) && !empty($resumeResult[$RESUME_CURRENTRESIGNDATE]))
										echo '<span>'.$resumeResult[$RESUME_CURRENTJOININGDATE].' - '.$resumeResult[$RESUME_CURRENTRESIGNDATE].'</span>';
									echo '</h4>';
									if(!empty($resumeResult[$RESUME_CURRENTCOMPANYDESC]))
										echo '<p>'.$resumeResult[$RESUME_CURRENTCOMPANYDESC].'</p>';
								?>
			        		</li>
			        		<li>
				        		<?php
									echo '<h4>';
									if(!empty($resumeResult[$RESUME_PREVIOUSDESIGNATION]) && !empty($resumeResult[$RESUME_PREVIOUSCOMPANYNAME]))
										echo $resumeResult[$RESUME_PREVIOUSDESIGNATION].' @ '.$resumeResult[$RESUME_PREVIOUSCOMPANYNAME];
									if(!empty($resumeResult[$RESUME_PREVIOUSJOININGDATE]) && !empty($resumeResult[$RESUME_PREVIOUSRESIGNDATE]))
										echo '<span>'.$resumeResult[$RESUME_PREVIOUSJOININGDATE].' - '.$resumeResult[$RESUME_PREVIOUSRESIGNDATE].'</span>';
									echo '</h4>';
									if(!empty($resumeResult[$RESUME_PREVIOUSCOMPANYDESC]))
										echo '<p>'.$resumeResult[$RESUME_PREVIOUSCOMPANYDESC].'</p>';
								?>
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
				            <?php
								echo '<li><h5>'.$resumeResult[$RESUME_PRIMARYLANGUAGE].'</h5></li>';
								echo '<li><h5>'.$resumeResult[$RESUME_SECONDARYLANGUAGE].'</h5></li>';
								echo '<li><h5>'.$resumeResult[$RESUME_TERTIARYLANGUAGE].'</h5></li>';
							?>
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
				<div class="download-button">
					<a href="#" class="btn">Upload Resume as doc</a>
				</div>
			</div><!-- resume-content -->						
		</div><!-- container -->
	</section><!-- ad-profile-page -->

	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
  </body>
</html>