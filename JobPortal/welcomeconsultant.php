<?php

include_once('checkConsultantSession.php');
include_once('config.php');
include_once('constant.php');

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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="job-list.php">Job list</a></li>
							<li><a href="details.php">Job Details</a></li>
							<li><a href="resume.php">Resume</a></li> 
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="profile.php">Profile</a></li>
									<li><a href="post-resume.php">Post Resume</a></li>
									<li><a href="post.php">Job Post</a></li>
									<li><a href="edit-resume.php">Edit Resume</a></li>
									<li><a href="profile-details.php">profile Details</a></li>
									<li><a href="bookmark.php">Bookmark</a></li>
									<li><a href="applied-job.php">Applied Job</a></li>
									<li><a href="delete-account.php">Close Account</a></li>
									
									
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- navbar-left -->
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="index.php">Sign out</a></li>
					</ul><!-- sign-in -->					

					<a href="post.php" class="btn">Post Your Job</a>
				</div>
				<!-- nav-right -->
				
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="banner-job">
		<div class="banner-overlay"></div>
		<div class="container text-center">
			<h1 class="title">The Easiest Way to Get Your New Job</h1>
			<h3>We offer 12000 jobs vacation right now</h3>
			<div class="banner-form">
				<form action="#">
					<input type="text" class="form-control" placeholder="Type your key word">
					<div class="dropdown category-dropdown">						
						<a data-toggle="dropdown" href="#"><span class="change-text">Job Location</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu category-change">
							<li><a href="#">Location 1</a></li>
							<li><a href="#">Location 2</a></li>
							<li><a href="#">Location 3</a></li>
						</ul>								
					</div><!-- category-change -->
					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->
			
			<ul class="banner-social list-inline">
				<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
			</ul><!-- banner-social -->
		</div><!-- container -->
	</div><!-- banner-section -->

	<div class="page">
		<div class="container">
			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">	
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/1.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Accounting/Finance</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/2.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Education/Training</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/3.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Engineer/Architects</span>
							<span class="category-quantity">(212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/4.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Garments/Textile</span>
							<span class="category-quantity">(972)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/5.png" alt="images" class="img-responsive"></div>
							<span class="category-title">HR/Org. Development</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/6.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Design/Creative</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/7.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Research/Consultancy</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/8.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Medical/Pharma</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/9.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Music & Arts</span>
							<span class="category-quantity">(212)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/10.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Marketing/Sales</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/11.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Production/Operation</span>
							<span class="category-quantity">(124)</span>
						</a>
					</li><!-- category-item -->
					
					<li class="category-item">
						<a href="job-list.php">
							<div class="category-icon"><img src="images/icon/12.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Miscellaneous</span>
							<span class="category-quantity">(972)</span>
						</a>
					</li><!-- category-item -->					
				</ul>				
			</div><!-- category ad -->			

			<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>
						<li role="presentation"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
						<li role="presentation" class="active"><a href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class=title>CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class=title>Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class=title>Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->						
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.php"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->
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
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="images/icon/31.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>3,412</h3>
							<h4>Live Jobs</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="images/icon/32.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>12,043</h3>
							<h4>Total Company</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="images/icon/33.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>5,798,298</h3>
							<h4>Total Candidate</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Download on App Store</h2>
				</div>
			</div><!-- row -->

			<!-- row -->
			<div class="row">
				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/16.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/17.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/18.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
	
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