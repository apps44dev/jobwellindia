<?php
	include_once('constant.php');
	session_start();
    if(!isset($_SESSION[$sessionJobSeekerId]))
    {
		header("location:index.php");
    }
?>