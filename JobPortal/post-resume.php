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
									<li><a href="profile.php">profile</a></li>
									<li class="active"><a href="post-resume.php">Post Resume</a></li>
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
					<li>Post Resume</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Post My Resume</h2>
			</div><!-- banner -->

			<div class="job-postdetails post-resume">
				<div class="row">	
					<div class="col-md-8 clearfix">
						<form action="#">
							<fieldset>
								<div class="section express-yourself">
									<h4>Express Yourself</h4>
									<div class="row form-group">
										<label class="col-sm-4 label-title">Full Name</label>
										<div class="col-sm-8">
											<input type="text" name="name" class="form-control" placeholder="ex Jhon Doe">
										</div>
									</div>
									<div class="row form-group additional-information">
										<label class="col-sm-4 label-title">Additional Information</label>
										<div class="col-sm-8">
											<textarea class="form-control" placeholder="Address: 123 West 12th Street, Suite 456 New York, NY 123456\n Phone: +012 345 678 910 \n Email: itsme@surzilegeek.com*"></textarea>
										</div>
									</div>
									<div class="row form-group photos-resume">
										<label class="col-sm-4 label-title">Photos for your Resume</label>
										<div class="col-sm-8 ">
											<label class="upload-image left" for="upload-image-one">
												<input type="file" id="upload-image-one">
												Type: JPG, PNG  Size: 3.5 x 4.5 cm
											</label>
											<label class="upload-image" for="upload-image-two">
												<input type="file" id="upload-image-two">
												Upload Photo
											</label>
										</div>
									</div>
								</div><!-- postdetails -->
								
								<div class="section career-objective">
									<h4>Career Objective</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="Write few lines about your career objective" rows="8"></textarea>		
									</div>
									<span>5000 characters left</span>
								</div><!-- career-objective -->
								
								<div class="section">
									<h4>Work History</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Compnay Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Designation</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Human Resource Manager">
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="dd/mm/yy"><span>-</span>
											<input type="text" name="name" class="form-control pull-right" placeholder="dd/mm/yy">
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Job Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" placeholder="" rows="8"></textarea>		
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn">Add New Exprience</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- work-history -->
								
								<div class="section education-background">
									<h4>Education Background</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Institute Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="ropbox">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Degree</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Human Resource Manager">
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="dd/mm/yy"><span>-</span>
											<input type="text" name="name" class="form-control pull-right" placeholder="dd/mm/yy">
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" placeholder="" rows="8"></textarea>		
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn">Add New Education</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- work-history -->

								<div class="section special-qualification">
									<h4>Special Qualification</h4>
									<div class="form-group item-description">
										<textarea class="form-control" placeholder="Write few lines about your special qualification" rows="8"></textarea>
									</div>								
								</div><!-- special-qualification -->								
								
								<div class="section language-proficiency">
									<h4>Language Proficiency:</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Language Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="English">
										</div>
									</div>
									<div class="row form-group rating">
										<label class="col-sm-3 label-title">Rating</label>
										<div class="col-sm-9">
											<div class="rating-star">
											    <div class="rating">
											        <input type="radio" id="star1" name="rating"><label class="full" for="star1"></label>

											        <input type="radio" id="star2" name="rating"><label class="half" for="star2"></label>

											        <input type="radio" id="star3" name="rating"><label class="full" for="star3"></label>

											        <input type="radio" id="star4" name="rating"><label class="half" for="star4"></label>

											        <input type="radio" id="star5" name="rating"><label class="full" for="star5"></label>

											        <input type="radio" id="star6" name="rating"><label class="half" for="star6"></label>

											        <input type="radio" id="star7" name="rating"><label class="full" for="star7"></label>

											        <input type="radio" id="star8" name="rating"><label class="half" for="star8"></label>

											        <input type="radio" id="star9" name="rating"><label class="full" for="star9"></label>

											        <input type="radio" id="star10" name="rating"><label class="half" for="star10"></label>
											    </div>
											</div><!-- rating-star -->
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn">Add New Language</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- language-proficiency -->

								<div class="section company-information">
									<h4>Personal Deatils</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Full Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Jhon Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Father's Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Robert Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Mother's Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Ismatic Roderos Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Date of Birth</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="26/01/1982">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Birth Place</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="United State of America">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Nationality</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Canadian">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Sex</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Male">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Address</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="121 King Street, Melbourne Victoria, 1200 USA">
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn">Add New Feild</a>
									</div>
								</div><!-- section -->

								<div class="section special-qualification">
									<h4>Declaration</h4>
									<div class="form-group item-description">
										<textarea class="form-control" placeholder="" rows="8"></textarea>
									</div>								
								</div><!-- special-qualification -->	
							</fieldset>
						</form><!-- form -->
						<div class="buttons">
							<a href="#" class="btn">Update Profile</a>
							<a href="#" class="btn cancle">Cancle</a>
						</div>							
					</div>
				
					<!-- quick-rules -->	
					<div class="col-md-4">
						<div class="section quick-rules">
							<h4>Quick rules</h4>
							<p class="lead">Posting an ad on <a href="#">Jobs.com</a> is free! However, all ads must follow our rules:</p>

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