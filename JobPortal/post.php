<?php

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
	<link rel="Shortcut Icon" href="images/ico/favicon.ico" type="image/x-icon">	
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
									<li><a href="profile.php">profile</a></li>
									<li><a href="post-resume.php">Post Resume</a></li>
									<li class="active"><a href="post.php">Job Post</a></li>
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
						<li><a href="login.php">Sign In</a></li>
						<li><a href="signup.php">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="post.php" class="btn">Post Your Job</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<section class=" job-bg ad-details-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Job Post </li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Post Your Job</h2>
			</div><!-- banner -->

			<div class="job-postdetails">
				<div class="row">	
					<div class="col-md-8">
						<form action="process_postjob.php" method="post">
							<fieldset>
								<div class="section postdetails">
									<h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Job Category</label>
										<div class="col-sm-9">
												<select class="form-control" name="jobcategory" required>
												
												<option value=""><a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Select a category</span> <i class="fa fa-angle-down pull-right"></i></a></option>
												<?php
													include_once('config.php');
													include_once('constant.php');
													$secQuestQuery = mysqli_query($db1, "select * from $JOBS_JOBCATEGORY");
													while($secQuestResult = mysqli_fetch_array($secQuestQuery, MYSQLI_ASSOC)){
														echo '<option value='.$secQuestResult[$JOBCATEGORY_CATEGORYID].'>'.$secQuestResult[$JOBCATEGORY_CATEGORYDESCRIPTION].'</option>';
													}
												?>
											</select>
											
										</div>
									</div>			
									<div class="row form-group">
										<label class="col-sm-3">Job Type<span class="required">*</span></label>
										<div class="col-sm-9 user-type">
											<input type="radio" name="sellType" value="Full Time" id="full-time"> <label for="full-time">Full Time</label>
											<input type="radio" name="sellType" value="Part Time" id="part-time"> <label for="part-time">Part Time</label>
											<input type="radio" name="sellType" value="Freelance" id="freelance"> <label for="freelance">Freelance</label>	
											<input type="radio" name="sellType" value="Contract" id="contract"> <label for="contract">Contract</label>	
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Title for your job<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="jobtitle" class="form-control"  placeholder="ex, Human Resource Manager">
										</div>
									</div>					
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="jobdescription" id="textarea" placeholder="Write few lines about your jobs" rows="8"></textarea>		
										</div>
									</div>
									<div class="row characters">
										<div class="col-sm-9 col-sm-offset-3">
											<p>5000 characters left</p>
										</div>
									</div>	
									<div class="row form-group add-title location">
										<label class="col-sm-3 label-title">Location<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown pull-left">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Country</span> <i class="fa fa-angle-down pull-right"></i></a>
												<ul class="dropdown-menu category-change">
													<li><a href="#">Argentina</a></li>
													<li><a href="#">Australia</a></li>
													<li><a href="#">Belgium</a></li>
													<li><a href="#">Brazil</a></li>
													<li><a href="#">Cambodia</a></li>
												</ul>								
											</div>
											<div class="dropdown category-dropdown pull-right">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">State</span> <i class="fa fa-angle-down pull-right"></i></a>
												<ul class="dropdown-menu category-change">
													<li><a href="#">State 1</a></li>
													<li><a href="#">State 2</a></li>
													<li><a href="#">State 3</a></li>
												</ul>								
											</div>
										</div>
									</div>
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
										<div class="col-sm-9">
											<label>$USD</label>
											<input type="text" class="form-control" name="salary" value="<?php echo $secQuestResult[$JOBS_SALARY];?>" placeholder="Min">
											<span>-</span>
											<input type="text" class="form-control" placeholder="Max">
											<input type="radio" name="price" value="negotiable" id="negotiable">
											<label for="negotiable">Negotiable </label>
										</div>
									</div>	
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Salary Type<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Per Hour</span> <i class="fa fa-angle-down pull-right"></i></a>
												<ul class="dropdown-menu category-change">
													<li><a href="#">Per Hour</a></li>
													<li><a href="#">Daily</a></li>
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
												</ul>								
											</div>
										</div>
									</div>	
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Mid Level</span> <i class="fa fa-angle-down pull-right"></i></a>
												<ul class="dropdown-menu category-change">
													<li><a href="#">Entry Level</a></li>
													<li><a href="#">Mid Level</a></li>
													<li><a href="#">Mid-Senior Level</a></li>
													<li><a href="#">Top Level</a></li>
												</ul>								
											</div>
										</div>
									</div>	
									<div class="row form-group brand-name" style="display:none;">
										<label class="col-sm-3 label-title">Job Function<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="human, reosurce, job, hrm">
										</div>
									</div>											
								</div><!-- postdetails -->
								
								<div class="section company-information" style="display:none;">
									<h4>Company Information</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Industry<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Marketing and Advertising">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Company Name<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="ex, Jhon Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Email ID</label>
										<div class="col-sm-9">
											<input type="email" name="email" class="form-control" placeholder="ex, jhondoe@mail.com">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Mobile Number<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="mobileNumber" class="form-control" placeholder="ex, +912457895">
										</div>
									</div>
									<div class="row form-group address">
										<label class="col-sm-3 label-title">Address<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="address" class="form-control" placeholder="ex, alekdera House, coprotec, usa">
										</div>
									</div>
								</div><!-- section -->
								
								<div class="section" style="display:none;">
									<h4>Make Your Post Premium</h4>
									<p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want.<a href="#">Learn more</a></p>
									<ul class="premium-options">
										<li class="premium">
											<input type="radio" name="premiumOption" value="day-one" id="day-one">
											<label for="day-one">Regular Post</label>
											<span>$20.00</span>
										</li>
										<li class="premium">
											<input type="radio" name="premiumOption" value="day-two" id="day-two">
											<label for="day-two">Regular Post</label>
											<span>$30.00</span>
										</li>
										<li class="premium">
											<input type="radio" name="premiumOption" value="day-three" id="day-three">
											<label for="day-three">Top Post for 7 days</label>
											<span>$50.00</span>
										</li>
										<li class="premium">
											<input type="radio" name="premiumOption" value="day-four" id="day-four">
											<label for="day-four">Daily Bump Up for 7 days</label>
											<span>$100.00</span>
										</li>								
									</ul>
								</div><!-- section -->
								
								<div class="checkbox section agreement">
									<label for="send">
										<input type="checkbox" name="send" id="send">
										You agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Jobs to find a genuine buyer.
									</label>
									<button type="submit" class="btn btn-primary">Post Your Job</button>
								</div><!-- section -->
								
							</fieldset>
						</form><!-- form -->	
					</div>
				

					<!-- quick-rules -->	
					<div class="col-md-4">
						<div class="section quick-rules">
							<h4>Quick rules</h4>
							<p class="lead">Posting an ad on <a href="#">jobs.com</a> is free! However, all ads must follow our rules:</p>

							<ul>
								<li>Make sure you post in the correct category.</li>
								<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
								<li>Do not upload pictures with watermarks.</li>
								<li>Do not post ads containing multiple items unless it's a package deal.</li>
								<li>Do not put your email or phone numbers in the title or description.</li>
								<li>Make sure you post in the correct category.</li>
								<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
								<li>Do not upload pictures with watermarks.</li>
								<li>Do not post ads containing multiple items unless it's a package deal.</li>
							</ul>
						</div>
					</div><!-- quick-rules -->	
				</div><!-- photos-ad -->				
			</div>	
		</div><!-- container -->
	</section><!-- main -->
	
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