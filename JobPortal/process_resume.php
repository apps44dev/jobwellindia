<?php

include_once('checkJobSeekerSession.php');
include_once('config.php');
include_once('constant.php');

$resumeJobskid = $_SESSION[$sessionJobSeekerId];

$resumeQuery=mysqli_query($db1,"select * from $RESUME_TABLE where $RESUME_JOBSKID='$resumeJobskid'");
$resumeResult=mysqli_fetch_array($resumeQuery, MYSQLI_ASSOC);


$fullname = $_POST['fullname'];

$additionalInfo = $_POST['additionalInfo'];
$careerObjective = $_POST['careerObjective'];
$currentCompany = $_POST['currentCompany'];
$currentDesignation = $_POST['currentDesignation'];
$currentJoinDt = $_POST['currentJoinDt'];
$currentResignDt = $_POST['currentResignDt'];
$currenJobDesc = $_POST['currenJobDesc'];
$prevCompanyName = $_POST['prevCompanyName'];
$prevDesignation = $_POST['prevDesignation'];
$prevJoinDt = $_POST['prevJoinDt'];
$prevResignDt = $_POST['prevResignDt'];
$prevJobDesc = $_POST['prevJobDesc'];
$masterDegree = $_POST['masterDegree'];
$masterDegreePercent = $_POST['masterDegreePercent'];
$bachelorDegree = $_POST['bachelorDegree'];
$bachelorDegreePercent = $_POST['bachelorDegreePercent'];
$hscPercent = $_POST['hscPercent'];
$sscPercent = $_POST['sscPercent'];
$keySkills = $_POST['keySkills'];
$primaryLang = $_POST['primaryLang'];
$secondaryLang = $_POST['secondaryLang'];
$tertiaryLang = $_POST['tertiaryLang'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$dob = $_POST['dob'];

if(isset($_FILES['image']['error'])) {
	if ($_FILES['image']['error'] == 4) {
		;
	}
	else{
		if(getimagesize($_FILES['image']['tmp_name'])==TRUE){
			$image = addslashes($_FILES['image']['tmp_name']);
			//$imageName = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
		}
	}
}

if($resumeResult < 1){
$query2 = "INSERT INTO $RESUME_TABLE (
$RESUME_JOBSKID,
$RESUME_FULLNAME,
$RESUME_FATHERNAME,
$RESUME_MOTHERNAME,
$RESUME_DOB,
$RESUME_PHOTOFORRESUME,
$RESUME_ADDITLINFO,
$RESUME_CAREEROBJECTIVE,
$RESUME_CURRENTCOMPANYNAME,
$RESUME_CURRENTDESIGNATION,
$RESUME_CURRENTJOININGDATE,
$RESUME_CURRENTRESIGNDATE,
$RESUME_CURRENTCOMPANYDESC,
$RESUME_PREVIOUSCOMPANYNAME,
$RESUME_PREVIOUSDESIGNATION,
$RESUME_PREVIOUSJOININGDATE,
$RESUME_PREVIOUSRESIGNDATE,
$RESUME_PREVIOUSCOMPANYDESC,
$RESUME_SSCPERCENT,
$RESUME_HSCPERCENT,
$RESUME_BACHELORDEGPERCENT,
$RESUME_BACHELORCOURSEID,
$RESUME_MASTERCOURSEID,
$RESUME_MASTERDEGPERCENT,
$RESUME_KEYSKILLS,
$RESUME_PRIMARYLANGUAGE,
$RESUME_SECONDARYLANGUAGE,
$RESUME_TERTIARYLANGUAGE) 

VALUES 

('$resumeJobskid',
'$fullname',
'$fathername',
'$mothername',
'$dob',
'$image',
'$additionalInfo',
'$careerObjective',
'$currentCompany',
'$currentDesignation',
'$currentJoinDt',
'$currentResignDt',
'$currenJobDesc',
'$prevCompanyName',
'$prevDesignation',
'$prevJoinDt',
'$prevResignDt',
'$prevJobDesc',
'$sscPercent',
'$hscPercent',
'$bachelorDegreePercent',
'$bachelorDegree',
'$masterDegree',
'$masterDegreePercent',
'$keySkills',
'$primaryLang',
'$secondaryLang',
'$tertiaryLang')";
}
else{
	$query2 = "UPDATE $RESUME_TABLE	SET 
	$RESUME_FULLNAME = '$fullname',
	$RESUME_FATHERNAME = '$fathername',
	$RESUME_MOTHERNAME = '$mothername',
	$RESUME_DOB = '$dob',
	$RESUME_PHOTOFORRESUME = '$image',
	$RESUME_ADDITLINFO = '$additionalInfo',
	$RESUME_CAREEROBJECTIVE = '$careerObjective',
	$RESUME_CURRENTCOMPANYNAME = '$currentCompany',
	$RESUME_CURRENTDESIGNATION = '$currentDesignation',
	$RESUME_CURRENTJOININGDATE = '$currentJoinDt',
	$RESUME_CURRENTRESIGNDATE = '$currentResignDt',
	$RESUME_CURRENTCOMPANYDESC = '$currenJobDesc',
	$RESUME_PREVIOUSCOMPANYNAME = '$prevCompanyName',
	$RESUME_PREVIOUSDESIGNATION = '$prevDesignation',
	$RESUME_PREVIOUSJOININGDATE = '$prevJoinDt',
	$RESUME_PREVIOUSRESIGNDATE = '$prevResignDt',
	$RESUME_PREVIOUSCOMPANYDESC = '$prevJobDesc',
	$RESUME_SSCPERCENT = '$sscPercent',
	$RESUME_HSCPERCENT = '$hscPercent',
	$RESUME_BACHELORDEGPERCENT = '$bachelorDegreePercent',
	$RESUME_BACHELORCOURSEID = '$bachelorDegree',
	$RESUME_MASTERCOURSEID = '$masterDegree',
	$RESUME_MASTERDEGPERCENT = '$masterDegreePercent',
	$RESUME_KEYSKILLS = '$keySkills',
	$RESUME_PRIMARYLANGUAGE = '$primaryLang',
	$RESUME_SECONDARYLANGUAGE = '$secondaryLang',
	$RESUME_TERTIARYLANGUAGE = '$tertiaryLang'
	
	WHERE $RESUME_JOBSKID='$resumeJobskid'";

}

$res = mysqli_query($db1,$query2);


if($res){
	header('location:resume.php');
}
else
{
	header('location:edit-resume.php');
}
?>