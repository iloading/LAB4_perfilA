<?php
include_once "data/data_sessions.php";
include_once "./connections/connection.php";
$link = new_db_connection();


$stmt = mysqli_stmt_init($link);

$query = "SELECT id_sessions, title, date FROM avila_sessions";

if (mysqli_stmt_prepare($stmt, $query)) {
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $title, $date);
        ; ?>
<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">As nossas sessões</h2>
            </div>
        </div>

        <h3 class="text-center">

            <?php
            /* PARTE 1
                for ($i=0; $i < sizeof($nome_sessoes); $i++) {
                   echo '<a href="session_info.php?id='. $i .'">
                            <p>'. $nome_sessoes[$i]. ' |
                                <small>'. $data_sessoes[$i] .'</small>
                            </p>
                         </a>';
                }
        */
            /*
            for ($i = 0; $i < sizeof($sessoes); $i++) {
                echo '<a href="session_info.php?id=' . $i . '">
                            <p>' . $sessoes["S" . $i]["Name"] . ' |
                                <small>' . $sessoes["S" . $i]["Date"] . '</small>
                            </p>
                         </a>';
            }
        */
            while (mysqli_stmt_fetch($stmt)) {
                $id = $id - 1; //o id na bd começa em 0 e no array que já estava feito, em 1 por isso subtraimos 1 para corresponder à página correta quando se clica no link
                echo '<a href="session_info.php?id=' . $id . '">
                            <p>' . $title . ' | 
                                <small>' . $date . '</small>
                            </p>
                         </a>';
            }
    }else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
} else {
    echo "Error: " . mysqli_error($link);
}
            ?>

        </h3>
</section>

<?php
mysqli_close($link);
?>