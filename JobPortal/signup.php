
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="JobWell India">
   	<meta name="description" content="">

    <title>Jobs</title>

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
	<script type="text/javascript">
		function checkForm() {
			var usernameError = document.getElementById("usernameError").innerHTML;
			var useremailError = document.getElementById("useremailError").innerHTML;
			var passwordError = document.getElementById("passwordError").innerHTML;
			var passwordError2 = document.getElementById("passwordError2").innerHTML;
			var mobileError = document.getElementById("mobileError").innerHTML;

			var p1 = document.getElementById("userpwd1").value;
			var p2 = document.getElementById("userpwdconf").value;
			if (p1 != p2) {
				document.getElementById("passwordError2").innerHTML="Password Donot Match" ;
			}else{
				document.getElementById("passwordError2").innerHTML="" ;
			}
			if(usernameError == '' && useremailError == '' && passwordError == '' && passwordError2 == "" && mobileError == '') {
				document.getElementById("reguser").submit();
				return true;
			}
			//else {
			//alert("Fill in with correct information");
			//                   return false;
			//}
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
							<li><a href="index.php">Home</a></li>
						</ul>
					</div>
				</div><!-- navbar-left -->
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="login.php">Sign In</a></li>
					</ul><!-- sign-in -->					
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account job-user-account">
						<h2>Create An Account</h2>
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#jobseekerAcnt" aria-controls="jobseekerAcnt" role="tab" data-toggle="tab">Jobseeker</a></li>
								<li role="presentation"><a href="#employerAcnt" aria-controls="employerAcnt" role="tab" data-toggle="tab">Employer</a></li>
								<li role="presentation"><a href="#consultantAcnt" aria-controls="consultantAcnt" role="tab" data-toggle="tab">Consultant</a></li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane" id="jobseekerAcnt">
									<form id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Jobseeker Name" name="jobseekerName" required onblur="validate(this.type,'usernameError',this.value)">
											<label class="pull-left error" id="usernameError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Id" name="useremail" required onblur="validate(this.type,'useremailError',this.value)">
											<label class="pull-left error" id="useremailError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" name="userpwd1" required onblur="validate(this.type,'passwordError',this.value)">
											<label class="pull-left error" id="passwordError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password" name="userpwdconf" required onblur="validate(this.type,'passwordError2',this.value)">
											<label class="pull-left error" id="passwordError2" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Contact Number" name="usermobile" required onblur="validate(this.type,'mobileError',this.value)">
											<label class="pull-left error" id="mobileError" style="display:none"></label>
										</div>
										<div class="form-group">
											<select class="form-control" name="secQuestion" required>
												<option value="">Select Security Question for Resetting Your Password</option>
												<?php
													include_once('config.php');
													include_once('constant.php');
													$secQuestQuery = mysqli_query($db1, "select * from $SECURITYQUEST_TABLE");
													while($secQuestResult = mysqli_fetch_array($secQuestQuery, MYSQLI_ASSOC)){
														echo '<option value='.$secQuestResult[$SECURITYQUEST_SECQUESTID].'>'.$secQuestResult[$SECURITYQUEST_SECQUESTDESCRIPTION].'</option>';
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Security Answer" name="secAnswer" required>
										</div>
										<div class="checkbox">
											<label class="pull-left checked" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
										</div><!-- checkbox -->	
										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>

								<div role="tabpanel" class="tab-pane active" id="employerAcnt">
									<form  id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Employer Name" name="employerName" required onblur="validate(this.type,'usernameError',this.value)">
											<label class="pull-left error" id="usernameError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Id" name="useremail" required onblur="validate(this.type,'useremailError',this.value)">
											<label class="pull-left error" id="useremailError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" name="userpwd1" required onblur="validate(this.type,'passwordError',this.value)">
											<label class="pull-left error" id="passwordError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password" name="userpwdconf" required onblur="validate(this.type,'passwordError2',this.value)">
											<label class="pull-left error" id="passwordError2" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Mobile Number" name="usermobile" required onblur="validate(this.type,'mobileError',this.value)">
											<label class="pull-left error" id="mobileError" style="display:none"></label>
										</div>
										<!-- select -->
										<div class="form-group">
											<select class="form-control">
												<option value="#">Select City</option>
												<option value="#">London UK</option>
												<option value="#">Newyork, USA</option>
												<option value="#">Seoul, Korea</option>
												<option value="#">Beijing, China</option>
											</select><!-- select -->
										</div>

										<div class="form-group">
											<select class="form-control" name="secQuestion" required>
												<option value="">Select Security Question for Resetting Your Password</option>
												<?php
													include_once('config.php');
													include_once('constant.php');
													$secQuestQuery = mysqli_query($db1, "select * from $SECURITYQUEST_TABLE");
													while($secQuestResult = mysqli_fetch_array($secQuestQuery, MYSQLI_ASSOC)){
														echo '<option value='.$secQuestResult[$SECURITYQUEST_SECQUESTID].'>'.$secQuestResult[$SECURITYQUEST_SECQUESTDESCRIPTION].'</option>';
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Security Answer" name="secAnswer" required>
										</div>
		
										<div class="checkbox">
											<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
										</div><!-- checkbox -->	
										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
								<!-- Consultant Tab Add on 25-10-17 -->
								<div role="tabpanel" class="tab-pane" id="consultantAcnt">
									<form id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Consultant Name" name="consultantName" required onblur="validate(this.type,'usernameError',this.value)">
											<label class="pull-left error" id="usernameError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Id" name="useremail" required onblur="validate(this.type,'useremailError',this.value)">
											<label class="pull-left error" id="useremailError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" name="userpwd1" required onblur="validate(this.type,'passwordError',this.value)">
											<label class="pull-left error" id="passwordError" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password" name="userpwdconf" required onblur="validate(this.type,'passwordError2',this.value)">
											<label class="pull-left error" id="passwordError2" style="display:none"></label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Contact Number" name="usermobile" required onblur="validate(this.type,'mobileError',this.value)">
											<label class="pull-left error" id="mobileError" style="display:none"></label>
										</div>
										<div class="form-group">
											<select class="form-control" name="secQuestion" required>
												<option value="">Select Security Question for Resetting Your Password</option>
												<?php
													include_once('config.php');
													include_once('constant.php');
													$secQuestQuery = mysqli_query($db1, "select * from $SECURITYQUEST_TABLE");
													while($secQuestResult = mysqli_fetch_array($secQuestQuery, MYSQLI_ASSOC)){
														echo '<option value='.$secQuestResult[$SECURITYQUEST_SECQUESTID].'>'.$secQuestResult[$SECURITYQUEST_SECQUESTDESCRIPTION].'</option>';
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Security Answer" name="secAnswer" required>
										</div>
										<div class="checkbox">
											<label class="pull-left checked" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
										</div><!-- checkbox -->	
										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
							</div>				
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

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