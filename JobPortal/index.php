<?php

include_once('config.php');
include_once('constant.php');
include_once('removeSession.php');
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
	<link rel="Shortcut Icon" href="images/ico/favicon.ico" type="image/x-icon">	
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css"> 
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
	<link href="css/sliderResponsive.css" rel="stylesheet" type="text/css">
		
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	
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
					<a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/logo.png" alt="JoBWellIndia Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
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
				</div>
				<!-- nav-right -->

			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="banner-job">
		<div class="banner-overlay"></div>
		<div class="container text-center">
			<h1 class="title">Register With Us to Register Yourself in World</h1>
			<h3>We offer 12000+ jobs vacancies right now</h3>
			<ul class="banner-social list-inline">
				<li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://www.youtube.com/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
			</ul><!-- banner-social -->
		</div><!-- container -->
	</div><!-- banner-section -->

	<div class="slider" id="slider1">
		<!-- Slides -->
		<div style="background-image:url(https://unsplash.it/1920/1200?image=839)"></div>
		<div style="background-image:url(https://unsplash.it/1920/1200?image=838)"></div>
		<div style="background-image:url(https://unsplash.it/1920/1200?image=836)"></div>
		<div style="background-image:url(https://unsplash.it/1920/1200?image=826)"></div>
		<div style="background-image:url(https://unsplash.it/1920/1200?image=822)"></div>
		<!-- The Arrows -->
		<i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
		<i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
	</div>
	<div class="page">
		<div class="container">
			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">	

				<?php
					$query = mysqli_query($db1,"select * from $JOBCATEGORY_TABLE");
					while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
				?>
					<li class="category-item">
						<a href="login.php">
							<div class="category-icon"><img src="images/icon/1.png" alt="images" class="img-responsive"></div>
							<?php
								echo '<span class="category-title">'.$result[$JOBCATEGORY_CATEGORYDESCRIPTION].'</span>';
								$query1 = mysqli_query($db1,"select count(1) from $JOBS_TABLE where $JOBS_JOBCATEGORY=$result[$JOBCATEGORY_CATEGORYID]");
								$categoryCount = mysqli_fetch_array($query1, MYSQLI_NUM)[0];
								echo '<span class="category-quantity">('.$categoryCount.')</span>';
							?>
						</a>
					</li>
				<?php
					}
				?>
	
				</ul>				
			</div><!-- category ad -->			

			<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>
						<li role="presentation" class="active"><a href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
						<li role="presentation"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
					<?php
						$query = mysqli_query($db1,"select * from $JOBS_TABLE where $JOBS_JOBTYPE=1 LIMIT 4");
						while($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
					?>
						<div class="job-ad-item">
							<div class="item-info">
								<div class="ad-info">
								<?php
									echo '<span><a class="title">' .$result[$JOBS_JOBTITLE]. '</a> @ <a>'.$result[$JOBS_JOBTITLE].'</a></span>';
								?>
									<div class="ad-meta">
										<ul>
										<?php
											echo '<li><a><i class="fa fa-map-marker" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											echo '<li><a><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											if(!empty($result[$JOBS_SALARY]))
												echo '<li><a><i class="fa fa-money" aria-hidden="true"></i>'.$result[$JOBS_SALARY].'</a></li>';
											echo '<li><a><i class="fa fa-tags" aria-hidden="true"></i>'.$result[$JOBS_DESIGNATION].'</a></li>';
										?>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="login.php" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					<?php
						}
					?>
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
					<?php
					$query = mysqli_query($db1,"select * from $JOBS_TABLE order by $JOBS_CREATEDON desc LIMIT 4");
					while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
					?>
						<div class="job-ad-item"><!-- ad-item -->
							<div class="item-info"><!-- item-info -->
								<div class="ad-info"><!-- ad-info -->
								<?php
									echo '<span><a class="title">' .$result[$JOBS_JOBTITLE]. '</a> @ <a>'.$result[$JOBS_JOBTITLE].'</a></span>';
								?>
									<div class="ad-meta">
										<ul>
										<?php
											echo '<li><a><i class="fa fa-map-marker" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											echo '<li><a><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											if(!empty($result[$JOBS_SALARY]))
												echo '<li><a><i class="fa fa-money" aria-hidden="true"></i>'.$result[$JOBS_SALARY].'</a></li>';
											echo '<li><a><i class="fa fa-tags" aria-hidden="true"></i>'.$result[$JOBS_DESIGNATION].'</a></li>';
										?>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="login.php" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					<?php
						}
					?>
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
					<?php
						$query = mysqli_query($db1,"select * from $JOBS_TABLE where $JOBS_JOBTYPE=2 LIMIT 4");
						while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
					?>
						<div class="job-ad-item">
							<div class="item-info">
								<div class="ad-info">
								<?php
									echo '<span><a class="title">' .$result[$JOBS_JOBTITLE]. '</a> @ <a>'.$result[$JOBS_JOBTITLE].'</a></span>';
								?>
									<div class="ad-meta">
										<ul>
										<?php
											echo '<li><a><i class="fa fa-map-marker" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											echo '<li><a><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
											if(!empty($result[$JOBS_SALARY]))
												echo '<li><a><i class="fa fa-money" aria-hidden="true"></i>'.$result[$JOBS_SALARY].'</a></li>';
											echo '<li><a><i class="fa fa-tags" aria-hidden="true"></i>'.$result[$JOBS_DESIGNATION].'</a></li>';
										?>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="login.php" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					<?php
						}
					?>
					</div><!-- tab-pane -->

				</div><!-- tab-content -->
			</div><!-- trending ads -->		

			<div class="ad-section text-center">
				<a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-responsive"></a>
			</div><!-- ad-section -->

			<div class="section workshop-traning">
				<div class="section-title">
					<h4>Workshop Traning</h4>
					<a href="workshop.php" class="btn btn-primary">See all</a>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="workshop">
							<img src="images/job/5.png" alt="Image" class="img-responsive">
							<h3><a href="#">Business Process Management Training</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="workshop">
							<img src="images/job/6.png" alt="Image" class="img-responsive">
							<h3><a href="#">Employee Motivation and Engagement</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- workshop-traning -->

			<div class="section cta cta-two text-center">
				<div class="row">
					<div class="col-sm-4">
					<?php
						$jobsQry = mysqli_query($db1,"select count(1) from $JOBS_TABLE");
						$jobsCnt = mysqli_fetch_array($jobsQry, MYSQLI_NUM)[0];
					?>
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="images/icon/31.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<?php
								echo "<h3>".$jobsCnt."</h3>";
							?>
							<h4>Live Jobs</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
					<?php
						$employerQry = mysqli_query($db1,"select count(1) from $EMPLOYER_TABLE");
						$employerCnt = mysqli_fetch_array($employerQry, MYSQLI_NUM)[0];
					?>
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="images/icon/32.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<?php
								echo "<h3>".$employerCnt."</h3>";
							?>
							<h4>Total Company</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
					<?php
						$jobseekerQry = mysqli_query($db1,"select count(1) from $JOBSEEKER_TABLE");
						$jobseekerCnt = mysqli_fetch_array($jobseekerQry, MYSQLI_NUM)[0];
					?>
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="images/icon/33.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<?php
								echo "<h3>".$jobseekerCnt."</h3>";
							?>
							<h4>Total Candidate</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<?php
		//include("appdownload.php");
		include("footer.php");
	?>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<script src="js/sliderResponsive.js"></script>
	<script>
$(document).ready(function() {
  
  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
  
  
}); 
</script>
  </body>
</html>