<?php

include_once('checkJobSeekerSession.php');
include_once('config.php');
include_once('constant.php');
if(isset($_GET['searchID'])){
$searchID=$_GET['searchID'];
	$selectQuery = "select * from $JOBS_TABLE where $JOBS_JOBID='$searchID'";
}else{
	$selectQuery = "select * from $JOBS_TABLE ";
}

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
	<script>
	
	window.onload = window_onload;
	function window_onload()
	{ 
		alert(document.URL.indexOf("?"));
	}
	</script>

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
							<li><a href="job-list.php" class="active">Job list</a></li>
							<li><a href="details.php">Job Details</a></li>
							<li><a href="resume.php">Resume</a></li>
							<li><a href="profile.php">My Profile</a></li>
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

	<section class="job-bg page job-list-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="welcomejobseeker.php">Home</a></li>
					<li>Engineer/Architects</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Software Engineer</h2>
			</div>

			<div class="banner-form banner-form-full job-list-form">
				<form action="#">
					<!-- category-change -->
					<div class="dropdown category-dropdown">						
						<a data-toggle="dropdown" href="#"><span class="change-text">Job Category</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu category-change">
							<li><a href="#">Customer Service</a></li>
							<li><a href="#">Software Engineer</a></li>
							<li><a href="#">Program Development</a></li>
							<li><a href="#">Project Manager</a></li>
							<li><a href="#">Graphics Designer</a></li>
						</ul>								
					</div><!-- category-change -->
					
					<!-- language-dropdown -->
					<div class="dropdown category-dropdown language-dropdown">
						<a data-toggle="dropdown" href="#"><span class="change-text">Job Location</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu category-change language-change">
							<li><a href="#">Location 1</a></li>
							<li><a href="#">Location 2</a></li>
							<li><a href="#">Location 3</a></li>
						</ul>								
					</div><!-- language-dropdown -->
				
					<input type="text" class="form-control" placeholder="Type your key word">
					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->
	
			<div class="category-info">	
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div  class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
												<h4>Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<h5><a href="categories-main.php"><i class="fa fa-caret-down"></i> All Categories</a></h5>
											<a href="#"><i class="icofont icofont-man-in-glasses"></i>Engineer/Architects</a>
											<ul>
												<li><a href="#">Software <span>(129)</span></a></li>
												<li><a href="#">Architecture <span>(8342)</span></a></li>
												<li><a href="#">UI & UX Designer <span>(782)</span></a></li>
												<li><a href="#">Telecommunication <span>(5247)</span></a></li>
												<li><a href="#">Civil Engineer <span>(634)</span></a></li>
												<li><a href="#">Chemical Engineer <span>(453)</span></a></li>
												<li><a href="#">Program Development <span>(7986)</span></a></li>
												<li><a href="#">Mechanical Engineer <span>(742)</span></a></li>
												<li><a href="#">Industrial Engineer <span>(149)</span></a></li>
											</ul>
											<div class="see-more">
												<button type="button" class="show-more one"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
												<ul class="more-category one">
													<li><a href="#">Fron end developer<span>(289)</span></a></li>
													<li><a href="#">Back end developer<span>(5402)</span></a></li>
													<li><a href="#">IT Department Manager<span>(3829)</span></a></li>
													<li><a href="#">QA Department Manager<span>(352)</span></a></li>
												</ul>
											</div>

										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div  class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
												<h4>Date Posted <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-two" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="today"><input type="checkbox" name="today" id="today"> Today</label>
											<label for="7-days"><input type="checkbox" name="7-days" id="7-days"> 7 days</label>
											<label for="30-days"><input type="checkbox" name="30-days" id="30-days"> 30 days</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-three">
												<h4>
												Salary Range
												<span class="pull-right"><i class="fa fa-plus"></i></span>
												</h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-three" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<div class="price-range"><!--price-range-->
												<div class="price">
													<span>$100 - <strong>$700</strong></span>
													<div class="dropdown category-dropdown pull-right">	
														<a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
														<ul class="dropdown-menu category-change">
															<li><a href="#">USD</a></li>
															<li><a href="#">AUD</a></li>
															<li><a href="#">EUR</a></li>
															<li><a href="#">GBP</a></li>
															<li><a href="#">JPY</a></li>
														</ul>								
													</div><!-- category-change -->													
													 <input type="text" value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
												</div>
											</div><!--/price-range-->
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-four">
												<h4>Employment Type<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-four" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="full-time"><input type="checkbox" name="full-time" id="full-time"> Full Time</label>
											<label for="part-time"><input type="checkbox" name="part-time" id="part-time"> Part Time</label>
											<label for="contractor"><input type="checkbox" name="contractor" id="contractor"> Contractor</label>
											<label for="intern"><input type="checkbox" name="intern" id="intern"> Intern</label>
											<label for="seasonal"><input type="checkbox" name="seasonal" id="seasonal"> Seasonal / Temp</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-five">
												<h4>Experience Level<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-five" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="training"><input type="checkbox" name="training" id="training"> Training</label>
											<label for="entry-level"><input type="checkbox" name="entry-level" id="entry-level"> Entry Level</label>
											<label for="mid-senior"><input type="checkbox" name="mid-senior" id="mid-senior"> Mid-Senior Level</label>
											<label for="top-level"><input type="checkbox" name="top-level" id="top-level"> Top Level</label>
										</div><!-- panel-body -->
									</div>
								</div> <!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title"></div>
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-six">
											<h4>Company<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-six" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<input type="text" placeholder="Search Company" class="form-control">
											<label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
											<label for="dropbox"><input type="checkbox" name="dropbox" id="dropbox"> Dropbox</label>
											<label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
											<label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
											<label for="microsoft"><input type="checkbox" name="microsoft" id="microsoft"> Microsoft</label>
											<label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
											<div class="see-more">
												<button type="button" class="show-more two"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
												<div class="more-category two">
													<label for="blackBerry"><input type="checkbox" name="blackBerry" id="blackBerry">BlackBerry</label>
													<label for="motorola"><input type="checkbox" name="motorola" id="motorola">Motorola</label>
													<label for="lenovo"><input type="checkbox" name="lenovo" id="lenovo">Lenovo</label>
												</div>
											</div>											
										</div><!-- panel-body -->
									</div>
								</div> <!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-seven">
												<h4>Location<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-seven" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<input type="text" placeholder="Search Location" class="form-control">
											<label for="angeles"><input type="checkbox" name="angeles" id="angeles"> Los Angeles, CA</label>
											<label for="kingdom"><input type="checkbox" name="kingdom" id="kingdom"> United Kingdom</label>
											<label for="states"><input type="checkbox" name="states" id="states"> United States</label>
											<label for="columbia"><input type="checkbox" name="columbia" id="columbia"> British Columbia</label>
											<label for="australia"><input type="checkbox" name="australia" id="australia"> Australia</label>
											<label for="germany"><input type="checkbox" name="germany" id="germany"> Germany</label>
											<div class="see-more">
												<button type="button" class="show-more three"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
												<div class="more-category three">
													<label for="belgium"><input type="checkbox" name="belgium" id="belgium">Belgium</label>
													<label for="brazil"><input type="checkbox" name="brazil" id="brazil">Brazil</label>
													<label for="denmark"><input type="checkbox" name="denmark" id="denmark">Denmark</label>
													<label for="indonesia"><input type="checkbox" name="indonesia" id="indonesia">Indonesia</label>
												</div>
											</div>											
										</div><!-- panel-body -->
									</div>
								</div> <!-- panel -->

							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

					<!-- recommended-ads -->
					<div class="col-sm-8 col-md-7">				
						<div class="section job-list-item">
							<div class="featured-top">
								<h4>Showing 1-25 of 65,712 ads</h4>
								<div class="dropdown pull-right">
									<div class="dropdown category-dropdown">
										<h5>Sort by:</h5>						
										<a data-toggle="dropdown" href="#"><span class="change-text">Most Relevant</span><i class="fa fa-caret-square-o-down"></i></a>
										<ul class="dropdown-menu category-change">
											<li><a href="#">Most Relevant</a></li>
											<li><a href="#">Most Popular</a></li>
										</ul>								
									</div><!-- category-change -->		
								</div>							
							</div><!-- featured-top -->	


						<?php
							$query = mysqli_query($db1, $selectQuery);
							while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
						?>
							<div class="job-ad-item">
								<div class="item-info">
									<div class="item-image-box">
										<div class="item-image">
											<a href="job-details.php"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
										</div><!-- item-image -->
									</div>

									<div class="ad-info">
									<?php
										echo '<span><a class="title">' .$result[$JOBS_JOBTITLE]. '</a> @ <a>'.$result[$JOBS_JOBTITLE].'</a></span>';
									?>
										<div class="ad-meta">
											<ul>
												<?php
												echo '<li><a><i class="fa fa-map-marker" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
												echo '<li><a><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
												echo '<li><a><i class="fa fa-money" aria-hidden="true"></i>'.$result[$JOBS_JOBTITLE].'</a></li>';
												?>

											</ul>
										</div><!-- ad-meta -->									
									</div><!-- ad-info -->
								</div><!-- item-info -->
							</div><!-- job-ad-item -->

					<?php
						}
					?>


							

													
	
							
							<!-- pagination  -->
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a>...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
								</ul>
							</div><!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

					<div class="col-md-2 hidden-xs hidden-sm">
						<div class="advertisement text-center">
							<a href="#"><img src="images/ads/1.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Add your resume and let your next job find you.</h2>
					<h4>Post your Resume for free on <a href="#">Jobs.com</a></h4>
					<a href="post-resume.php" class="btn btn-primary">Add Your Resume</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- something-sell -->

	<?php	
		include("footer.php");
	?>
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<script src="js/validate.js"></script>
  </body>
</html>