<?php session_start() ;



?>


<!DOCTYPE html>
<html lang="pt">

<head>

    <!-- Meta -->
    <?php include_once "helpers/help_meta.php"; ?>

    <title>AVILA Crew</title>

    <!-- CSS -->
    <?php include_once "helpers/help_css.php"; ?>

</head>

<body>
<!-- Navigation -->
<?php include_once "components/cp_navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <!-- guestbook details -->
    <?php include_once "components/cp_guestbook_view_db.php"; ?>
    
    <?php 

        if (isset($_SESSION['username'])) {

            include_once "components/cp_guestbook_add.php";

        }
        
        
    ?>
    

    <!-- Footer -->
    <?php include_once "components/cp_footer.php"; ?>

</div>
<!-- /.container -->

<!-- JS -->
<?php include_once "helpers/help_js.php"; ?>

</body>

</html>
