<?php
 include_once('config.php');
 include_once('constant.php');

$email=$_POST['useremail'];
$password=$_POST['userpwd1'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$jobseekerName = $_POST['jobseekerName'];
$employerName  = $_POST['employerName'];
$consultatName = $_POST['consultantName'];

$secQuestion = $_POST['secQuestion'];
$secAnswer = $_POST['secAnswer'];
$secAnswerHash = password_hash($secAnswer, PASSWORD_DEFAULT);

if(!empty($jobseekerName)) {
	$name=$_POST['jobseekerName'];
	$type = $JOBSEEKERTYPE;
}elseif (!empty($employerName)){
	$name=$_POST['employerName'];
	$type = $EMPLOYERTYPE;
}else{
	$name=$_POST['consultantName'];
	$type = $CONSULTANTTYPE;
}

$mobile=$_POST['usermobile'];
/*$experience=$_POST['experience'];
$skills=$_POST['skills'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];
$location="";*/


//mysqli_select_db($db2,"location");
//$query1=mysqli_query($db2,"select name from countries WHERE id = '$countryid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query1);
//$country= $row['name'];

//$query2=mysqli_query($db2,"select name from states WHERE id = '$stateid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query2);
//$state= $row['name'];


//$query3=mysqli_query($db2,"select name from cities WHERE id = '$cityid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query3);
//$city= $row['name'];

//$location=$country.",".$state.",".$city;

//mysqli_close($db2);

//mysqli_select_db($db1);

$query1 = "select max($LOGINUSER_USERID) from $LOGINUSER_TABLE";

$result = mysqli_query($db1, $query1);
$maxID =  mysqli_fetch_array($result, MYSQLI_NUM)[0] + 1;

$query2 = "INSERT INTO $LOGINUSER_TABLE ($LOGINUSER_USERID,$LOGINUSER_LOGINNAME,$LOGINUSER_EMAIL,$LOGINUSER_PASSWORD,$LOGINUSER_TYPE,$LOGINUSER_STATUS, $LOGINUSER_SECQUESTION, $LOGINUSER_SECANSWER) VALUES ('$maxID','$name', '$email','$hash','$type',$LOGINSTATUSACTIVE,'$secQuestion','$secAnswerHash')";
   
$result1 = mysqli_query($db1,$query2) or die("Cant Register , The user email may be already existing");

if($type==$JOBSEEKERTYPE){
	// insert jobseeker
	$query3 = "INSERT INTO $JOBSEEKER_TABLE ($JOBSEEKER_JOBSKID,$JOBSEEKER_PHONE) VALUES ('$maxID','$mobile')";
	$result2 = mysqli_query($db1,$query3) or die("Cant Insert");
}else if ($type==$EMPLOYERTYPE){
	// insert employer
	$query3 = "INSERT INTO $EMPLOYER_TABLE ($EMPLOYER_EMPLOYERID,$EMPLOYER_PHONE1) VALUES ('$maxID','$mobile')";
	$result2 = mysqli_query($db1,$query3) or die("Cant Insert");
}else{
	// insert consultant
	$query3 = "INSERT INTO $CONSULTANT_TABLE ($CONSULTANT_CONSULTANTID,$CONSULTANT_PHONE1) VALUES('$maxID','$mobile')";
	$result2 = mysqli_query($db1,$query3) or die("Cant Insert");
}


if (!$result1 || !$result2)
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:login.php?msg=registered');
}

?>