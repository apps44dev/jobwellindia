<?php

include_once('config.php');
include_once('constant.php');

$email=$_POST['loginemail'];
$secQues=$_POST['secQuestion'];
$secAns=$_POST['secAnswer'];

$query=mysqli_query($db1,"select * from $LOGINUSER_TABLE where $LOGINUSER_EMAIL='$email'");
$result=mysqli_fetch_array($query, MYSQLI_ASSOC);

if(($result>0) && $result[$LOGINUSER_SECQUESTION]==$secQues && ( password_verify( $secAns, $result[$LOGINUSER_SECANSWER] ) ) ){
    
        session_start();
        $_SESSION[$sessionForgotPwd] = $result[$LOGINUSER_USERID];
        $_SESSION[$sessUserEmailAtProcessForgotPwd] = $email;
        header('location:newpassword.php');
}
else
{
header('location:forgotpwd.php?msg=Please enter correct info.');
}
?>