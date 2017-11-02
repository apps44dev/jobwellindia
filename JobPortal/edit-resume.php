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

	<section class=" job-bg ad-details-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="welcomejobseeker.php">Home</a></li>
					<li>Edit Resume</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Edit Resume</h2>
			</div><!-- banner -->

			<div class="job-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<?php
							if(!empty($resumeResult[$RESUME_PHOTOFORRESUME]))
								echo '<img src="data:image;base64,'.$resumeResult[$RESUME_PHOTOFORRESUME].'" style="width:73px;height:73px;" alt="User Images" class="img-responsive">';
							else

								/*echo '	<div id="wrapper">';
								echo '		<input id="fileUpload" type="file" />';
								echo '		<br />';
								echo '		<div id="image-holder"></div>';
								echo '	</div> ';*/
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
					<li class="active"><a href="edit-resume.php">Edit Resume</a></li>
					<li><a href="applied-job.php">Applied Jobs</a></li>
					<li><a href="bookmark.php">Bookmark</a></li>
					<li><a href="profile.php">Account Info </a></li>
					<li><a href="delete-account.php">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->

			<div class="adpost-details post-resume">
				<div class="row">	
					<div class="col-md-8 clearfix">
						<form METHOD="post" ACTION="process_resume.php" enctype="multipart/form-data">
							<fieldset>
								<div class="section express-yourself">
									<h4>Express Yourself</h4>
									<div class="row form-group">
										<label class="col-sm-4 label-title">Full Name</label>
										<div class="col-sm-8">
											<input type="text" name="fullname" class="form-control" value="<?php echo $resumeResult[$RESUME_FULLNAME];?>" placeholder="ex Jhon Doe">
										</div>
									</div>
									<div class="row form-group additional-information">
										<label class="col-sm-4 label-title">Additional Information</label>
										<div class="col-sm-8">
											<textarea class="form-control" name="additionalInfo" placeholder="Address: 123 West 12th Street, Suite 456 New York, NY 123456\n Phone: +012 345 678 910 \n Email: itsme@surzilegeek.com*"><?php echo $resumeResult[$RESUME_ADDITLINFO];?></textarea>
										</div>
									</div>
									<div class="row form-group photos-resume">
										<label class="col-sm-4 label-title">Photos for your Resume</label>
										<div class="col-sm-8 ">
											<input type="file" name="image">Type: JPG, PNG  Size: 3.5 x 4.5 cm</input>
										</div>
									</div>
								</div><!-- postdetails -->
								
								<div class="section career-objective">
									<h4>Career Objective</h4>
									<div class="form-group">
										<textarea class="form-control" name="careerObjective" placeholder="Write few lines about your career objective" rows="6" onkeydown="limitText(this.form.careerObjective,'this.form.countdown',5000);" onkeyup="limitText(this.form.careerObjective,this.form.countdown,5000);" onclick="limitText(this.form.careerObjective,this.form.countdown,5000);"><?php echo $resumeResult[$RESUME_CAREEROBJECTIVE];?></textarea>		
									</div>
									<input readonly type="text" name="countdown" size="1" value="5000"> characters left</input>
								</div><!-- career-objective -->
								
								<div class="section">
									<h4>Work History</h4>
									<!-- Work History 1 Start-->
									<div class="row form-group">
										<label class="col-sm-3 label-title">Current Company Name</label>
										<div class="col-sm-9">
											<input type="text" name="currentCompany" value="<?php echo $resumeResult[$RESUME_CURRENTCOMPANYNAME];?>" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Current Designation</label>
										<div class="col-sm-9">
											<input type="text" name="currentDesignation" value="<?php echo $resumeResult[$RESUME_CURRENTDESIGNATION];?>" class="form-control" placeholder="Human Resource Manager">
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="text" name="currentJoinDt" value="<?php echo $resumeResult[$RESUME_CURRENTJOININGDATE];?>" class="form-control" placeholder="dd/mm/yy"><span>-</span>
											<input type="text" name="currentResignDt" value="<?php echo $resumeResult[$RESUME_CURRENTRESIGNDATE];?>" class="form-control pull-right" placeholder="dd/mm/yy">
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Current Job Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="currenJobDesc" placeholder="" rows="6"><?php echo $resumeResult[$RESUME_CURRENTCOMPANYDESC];?></textarea>		
										</div>
									</div>
									<!-- Work History 1 End-->
									<div style="padding-top:35px;"></div>

									<!-- Work History 2 Start-->
									<div class="row form-group">
										<label class="col-sm-3 label-title">Previous Company Name</label>
										<div class="col-sm-9">
											<input type="text" name="prevCompanyName" value="<?php echo $resumeResult[$RESUME_PREVIOUSCOMPANYNAME];?>" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Previous Designation</label>
										<div class="col-sm-9">
											<input type="text" name="prevDesignation" value="<?php echo $resumeResult[$RESUME_PREVIOUSDESIGNATION];?>" class="form-control" placeholder="Asst. Human Resource Manager">
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="text" name="prevJoinDt" value="<?php echo $resumeResult[$RESUME_PREVIOUSJOININGDATE];?>" class="form-control" placeholder="dd/mm/yy"><span>-</span>
											<input type="text" name="prevResignDt" value="<?php echo $resumeResult[$RESUME_PREVIOUSRESIGNDATE];?>" class="form-control pull-right" placeholder="dd/mm/yy">
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Previous Job Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="prevJobDesc" placeholder="" rows="6"><?php echo $resumeResult[$RESUME_PREVIOUSCOMPANYDESC];?></textarea>		
										</div>
									</div>
									<!-- Work History 2 End-->


									<div style="display:none;" class="buttons pull-right">
										<a href="#" class="btn">Add New Exprience</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- work-history -->
								
								<div class="section education-background">
									<h4>Education Background</h4>
									
									<div class="row form-group">
										<label class="col-sm-3 label-title">Master Degree</label>
										<div class="col-sm-9">
											<select class="form-control col-sm-6" name="masterDegree">
													<option value="">Select Master Degree</option>
													<?php
														include_once('config.php');
														include_once('constant.php');
														$courseQuery = mysqli_query($db1, "select * from $COURSE_TABLE where $COURSE_COURSETYPE=$COURSETYPE_MASTER");
														while($courseResult = mysqli_fetch_array($courseQuery, MYSQLI_ASSOC)){
															if($resumeResult[$RESUME_MASTERDEGPERCENT] == $courseResult[$COURSE_COURSEID])
																echo '<option selected value='.$courseResult[$COURSE_COURSEID].'>'.$courseResult[$COURSE_COURSENAME].'</option>';
															else
																echo '<option value='.$courseResult[$COURSE_COURSEID].'>'.$courseResult[$COURSE_COURSENAME].'</option>';
														}
													?>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Master Degree %</label>
										<div class="col-sm-3">
											<input type="text" name="masterDegreePercent" value="<?php echo $resumeResult[$RESUME_MASTERDEGPERCENT];?>" class="form-control" placeholder="80%">
										</div>
									</div>
									
									<div class="row form-group">
										<label class="col-sm-3 label-title">Bachelor Degree</label>
										<div class="col-sm-9">
											<select class="form-control col-sm-6" name="bachelorDegree" required>
													<option value="">Select Master Degree</option>
													<?php
														include_once('config.php');
														include_once('constant.php');
														$courseQuery = mysqli_query($db1, "select * from $COURSE_TABLE where $COURSE_COURSETYPE=$COURSETYPE_BACHELOR");
														while($courseResult = mysqli_fetch_array($courseQuery, MYSQLI_ASSOC)){
															if($resumeResult[$RESUME_BACHELORCOURSEID] == $courseResult[$COURSE_COURSEID])
																echo '<option selected value='.$courseResult[$COURSE_COURSEID].'>'.$courseResult[$COURSE_COURSENAME].'</option>';
															else
																echo '<option value='.$courseResult[$COURSE_COURSEID].'>'.$courseResult[$COURSE_COURSENAME].'</option>';
														}
													?>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Bachelor Degree %</label>
										<div class="col-sm-3">
											<input type="text" name="bachelorDegreePercent" value="<?php echo $resumeResult[$RESUME_BACHELORDEGPERCENT];?>" class="form-control" placeholder="80%">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Diploma / HSC %</label>
										<div class="col-sm-3">
											<input type="text" name="hscPercent" value="<?php echo $resumeResult[$RESUME_HSCPERCENT];?>" class="form-control" placeholder="90%">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">SSC %</label>
										<div class="col-sm-3">
											<input type="text" name="sscPercent" value="<?php echo $resumeResult[$RESUME_SSCPERCENT];?>" class="form-control" placeholder="85%">
										</div>
									</div>
									<!-- Education Background 2 End -->
									<div style="display:none;" class="buttons pull-right">
										<a href="#" class="btn">Add New Education</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div>

								<div class="section special-qualification">
									<h4>Key Skills</h4>
										<div class="col-sm-9">
											<input type="text" name="keySkills" value="<?php echo $resumeResult[$RESUME_KEYSKILLS];?>" class="form-control" placeholder="Key Skills">
										</div>								
								</div><!-- special-qualification -->								
								
								<div class="section language-proficiency">
									<h4>Language Proficiency:</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Primary Language</label>
										<div class="col-sm-9">
											<input type="text" name="primaryLang" value="<?php echo $resumeResult[$RESUME_PRIMARYLANGUAGE];?>" class="form-control" placeholder="English">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Secondary Language</label>
										<div class="col-sm-9">
											<input type="text" name="secondaryLang" value="<?php echo $resumeResult[$RESUME_SECONDARYLANGUAGE];?>" class="form-control" placeholder="Marathi">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Tertiary Language</label>
										<div class="col-sm-9">
											<input type="text" name="tertiaryLang" value="<?php echo $resumeResult[$RESUME_TERTIARYLANGUAGE];?>" class="form-control" placeholder="Hindi">
										</div>
									</div>
									<div style="display:none;" class="row form-group rating">
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
									<div style="display:none;" class="buttons pull-right addNewLanguageDiv">
										<a href="#" class="btn addNewLanguage">Add New Language</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- language-proficiency -->

								<div class="section company-information">
									<h4>Personal Deatils</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Father's Name</label>
										<div class="col-sm-9">
											<input type="text" name="fathername" value="<?php echo $resumeResult[$RESUME_FATHERNAME];?>" class="form-control" placeholder="Robert Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Mother's Name</label>
										<div class="col-sm-9">
											<input type="text" name="mothername" value="<?php echo $resumeResult[$RESUME_MOTHERNAME];?>" class="form-control" placeholder="Ismatic Roderos Doe">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Date of Birth</label>
										<div class="col-sm-9">
											<input type="text" name="dob" value="<?php echo $resumeResult[$RESUME_DOB];?>" class="form-control" placeholder="26/01/1982">
										</div>
									</div>
									<div style="display:none;" class="buttons pull-right addNewFieldDiv">
										<a href="#" class="btn addNewFieldButton">Add New Feild</a>
									</div>
								</div><!-- section -->
	
							</fieldset>
							<button type="submit" class="btn">Update Profile</button>	
						</form><!-- form -->							
					</div>
				
					<!-- quick-rules -->	
					<div style="display:none;" class="col-md-4">
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

	<script>
		function limitText(limitField, limitCount, limitNum) {
          if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
          } else {
            limitCount.value = limitNum - limitField.value.length;
          }
        }

	</script>
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<!--<script src="js/imageuploader.js"></script>
	<script src="js/addruntime.js"></script>-->
  </body>
</html>