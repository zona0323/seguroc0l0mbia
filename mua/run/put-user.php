<?php
session_start();
$usr = $_POST['usr'];

$_SESSION['user_name'] = $usr;
setcookie('usr',$usr,time()+60*9);
?>