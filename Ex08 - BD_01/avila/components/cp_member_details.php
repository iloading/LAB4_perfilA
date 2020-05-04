<?php 
    if (isset($_GET['id'])) { // verificação se existe o método GET, se não existir vai também para a página de erro 404
        $id                 = $_GET['id'];
        $mentor_image       = $_GET['image'];
        $mentor_name        = $_GET['name'];
        $mentor_title       = $_GET['title'];
        $mentor_description = $_GET['description_short'];
        include_once "cp_member_details_html.php";
           

    }else {
        include_once "cp_404.php";

    }
?>


