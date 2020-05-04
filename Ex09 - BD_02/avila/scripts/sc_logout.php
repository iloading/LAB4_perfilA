<?php 


if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["username"])) {
    $_SESSION["logout"] = 1;
    unset($_SESSION["username"]);
    
}

header("Location: ../4_login.php");


?>

