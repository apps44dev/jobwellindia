<?php
	include_once('constant.php');
	session_start();
    if(!isset($_SESSION[$sessionConsultantId]))
    {
		header("location:index.php");
    }
?>