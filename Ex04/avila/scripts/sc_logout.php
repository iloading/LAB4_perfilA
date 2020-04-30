<?php 
session_start();
session_destroy();


session_start();
$_SESSION['logout'] = 1;

header("Location: ../4_login.php");


?>

