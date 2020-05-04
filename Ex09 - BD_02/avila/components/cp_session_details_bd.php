<?php

require_once "./connections/connection.php";
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id_sessions = $_GET['id'] + 1;
    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id_sessions, title, date, image, description FROM avila_sessions WHERE id_sessions = ?";

    // verificação se existe o método GET, se não existir vai também para a página de erro 404
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $id_sessions);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id_sessions, $title, $date, $image, $description);

            mysqli_stmt_fetch($stmt);


            echo '
                    <div class="row pt-5 mt-5">
                        <div class="col-sm-12 text-center">
                            <img class="img-circle img-responsive img-center" src="images/sessions/' . $image . '" alt="">
                            <h3>' . $title . '
                                <small>(' . $date . ')</small>
                            </h3>
                            <p>' . $description . '</p>

                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#session_participants">
                                Participantes
                            </button>
                        </div>
                    </div>';
        } else {
            echo "error: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "error: " . mysqli_stmt_error($stmt);
    } ?>


<!-- Modal -->
<div class="modal fade" id="session_participants" tabindex="-1" role="dialog" aria-labelledby="session_participants" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Participantes na
                    sessão <?php echo $title ?> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>
            </div>
            <div class="modal-body">


                <?php
                $stmt2 = mysqli_stmt_init($link);
    $id_sessions -= 1;
    $query2 = "SELECT name_participant  
                           FROM avila_participants 
                           INNER JOIN avila_sessions_participants
                           ON avila_participants.id_participants=avila_sessions_participants.ref_id_participants
                           WHERE ref_id_sessions = ?";

    if (mysqli_stmt_prepare($stmt2, $query2)) {
        mysqli_stmt_bind_param($stmt2, "i", $id_sessions);
        mysqli_stmt_bind_result($stmt2, $name_participant);
        mysqli_stmt_execute($stmt2);

                    

        while (mysqli_stmt_fetch($stmt2)) {
            echo '<p class="text-center">' . $name_participant . '</p>';
        };


        mysqli_stmt_close($stmt2);
    } else {
        echo("error :" . mysqli_stmt_error($link));
    } ?>
            </div>
        </div>
    </div>
</div>

<?php
}else {
    header("Location: ./2_sessions.php");
}