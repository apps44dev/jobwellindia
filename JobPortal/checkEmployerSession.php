<?php
	include_once('constant.php');
	session_start();
    if(!isset($_SESSION[$sessionEmployerId]))
    {
		header("location:index.php");
    }
?>