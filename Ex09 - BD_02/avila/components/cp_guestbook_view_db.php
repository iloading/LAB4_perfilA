<?php


require_once "./data/data_comments.php";
include_once "./connections/connection.php";
$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT id_avila_comments , comment, date, name 
FROM avila_comments
INNER JOIN  avila_mentors
ON avila_comments.avila_mentors_id_mentors = avila_mentors.id_mentors ";

if (mysqli_stmt_prepare($stmt, $query)) {
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $comment, $date, $name); ?>

<div class="row mt-5 pt-5">
    <div class="col-lg-12">
        <h2 class="page-header">GuestBook</h2>
    </div>
    <div class="col-lg-12 col-sm-12 text-center">
       

        <?php

        //+++++++++++++++++++++++++++++         PARTE 3         +++++++++++++++++++++++++++++
        echo "<br><h1>Parte 3</h1>";
        if (isset($_SESSION['erro'])) {
            echo
                '<div class="alert alert-danger">
                    <strong>Erro!</strong> Necessita de estar autenticado para realizar a operação!
                </div>';
            unset($_SESSION['erro']);
        }
        
        
        while (mysqli_stmt_fetch($stmt)) {
            echo "<h3>".$comment."
                    <small>".$date." ".$name."</small>
                    <small><a href='scripts/sc_guestbook_delete.php?id=".$id."'>x</a></small>
                </h3>";
        }
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
} else {
            echo ("Error description: " . mysqli_error($link));
        }

        mysqli_close($link);
        ?>


    </div>

    <div style="text-align: center;">
        <a href="scripts/sc_guestbook_delete_all.php">
            <button type="button" class="btn btn-primary">Apagar Lista</button>
        </a>
    </div>
</div>