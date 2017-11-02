<?php

include_once('config.php');

if(isset($_GET['query']) && !empty($_GET['query'])) {
	echo json_encode(array("status" => 1));
}
else
	echo json_encode(array("status" => 2));
//$result = array("status" => $_POST['query']);

?>