<?php
session_start();
require_once "../data/data_comments.php";
$_SESSION['guestbook'] = $comments_parte3;

header("Location: ../guestbook.php");
