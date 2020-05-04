<?php 

    require_once "./connections/connection.php";
    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id_mentors, name, title, description, image FROM avila_mentors";

    if (mysqli_stmt_prepare($stmt, $query)) {


        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id_mentors, $name, $title, $description, $image);

           

            if (isset($_GET['id'])) { // verificação se existe o método GET, se não existir vai também para a página de erro 404
            while (mysqli_stmt_fetch($stmt)) {
                if ($_GET['id'] == $id_mentors) {
                    $id                 = $id_mentors;
                    $mentor_image       = $image;
                    $mentor_name        = $name;
                    $mentor_title       = $title;
                    $mentor_description = $description;
                    include_once "cp_member_details_html.php";
                }
                
            }
                
            } else {
                include_once "cp_404.php";
            }
        }
    }
?>
