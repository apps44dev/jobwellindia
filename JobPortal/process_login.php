<?php

include_once('config.php');
include_once('constant.php');

$email=$_POST['loginemail'];
$passd=$_POST['loginpassword'];


$query=mysqli_query($db1,"select * from $LOGINUSER_TABLE where $LOGINUSER_EMAIL='$email'");
$result=mysqli_fetch_array($query, MYSQLI_ASSOC);

if(($result>0) && ( password_verify( $passd, $result[$LOGINUSER_PASSWORD] ) ) ){
    if($result[$LOGINUSER_TYPE]==$JOBSEEKERTYPE)
    {
        session_start();
        $_SESSION[$sessionJobSeekerId] = $result[$LOGINUSER_USERID];
        $_SESSION[$sessionUserType] = $result[$LOGINUSER_TYPE];
        header('location:welcomejobseeker.php');
    }
 else if($result[$LOGINUSER_TYPE]==$EMPLOYERTYPE)
 {
     session_start();
     $_SESSION[$sessionEmployerId] = $result[$LOGINUSER_USERID];
     $_SESSION[$sessionUserType] = $result[$LOGINUSER_TYPE];
     //$_SESSION["status"]=$result['status'];
     header('location:welcomeemployer.php');
 }
 else if($result[$LOGINUSER_TYPE]==$CONSULTANTTYPE)
	{
	 session_start();
     $_SESSION[$sessionConsultantId] = $result[$LOGINUSER_USERID];
     $_SESSION[$sessionUserType] = $result[$LOGINUSER_TYPE];
     //$_SESSION["status"]=$result['status'];
     header('location:welcomeconsultant.php');
	}
}
else
{
header('location:login.php?msg=failed');
}
?>