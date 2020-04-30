<?php 
    require_once "./data/data_sessions.php";
 
/* PARTE 1
     if (isset($_GET)) { //verificar se existe algo no método
        if ($_GET['id']) { // verificar se o id não está vazio ex.(----.php?id=)
            
            $session_title = $nome_sessoes[$id];
            $session_date = $data_sessoes[$id];

        } else {
            include "components/cp_404.php";
        }
 } else {
     include "components/cp_404.php";
 }

    
?>


<div class="row pt-5 mt-5">
    <div class="col-sm-12 text-center">
        <img class="img-circle img-responsive img-center" src="img/sessions/<?= $session_image; ?>" alt="">
        <h3><?= $session_title; ?>
            <small>(<?= $session_date; ?>)</small>
        </h3>
        <p><?= $session_description; ?></p>
    </div>
</div>
*/
/*Parte 3
if (isset($_GET)) { //verificar se existe algo no método
if ($_GET['id'] != null && $_GET['id'] < 5) { // verificar se o id não está vazio (nulo) ex.(----.php?id=)
    $id=$_GET['id']; } else { include "components/cp_404.php" ; } }else { include "components/cp_404.php" ; } ?>

    <div class="row pt-5 mt-5">
        <div class="col-sm-12 text-center">
            <img class="img-circle img-responsive img-center" src="images/sessions/<?= $sessoes[$id][2]; ?>" alt="">
            <h3><?= $sessoes[$id][0]; ?>
                <small>(<?= $sessoes[$id][1] ?>)</small>
            </h3>
            <p><?= $sessoes[$id][3]; ?></p>
        </div>
    </div>

    */

    //PARTE 4 + PARTE 5
    if (isset($_GET)) { //verificar se existe algo no método
    if ($_GET['id'] != null && $_GET['id'] < 5) { /* verificar se o id não está vazio (nulo) ex.(----.php?id=) e só vai
        até ao valor 4 (só existem 4 sessões)*/
         $id=$_GET['id']; } 
         else { include_once "components/cp_404.php" ; } 
    } else {
        include_once "components/cp_404.php" ; } ?>


        <div class="row pt-5 mt-5">
            <div class="col-sm-12 text-center">
                <img class="img-circle img-responsive img-center" src="images/sessions/<?= $sessoes["S".$id]["Img"]; ?>"
                    alt="">
                <h3><?= $sessoes["S".$id]["Name"]; ?>
                    <small>(<?= $sessoes["S".$id]["Date"] ?>)</small>
                </h3>
                <p><?= $sessoes["S".$id]["Dsc"]; ?></p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#session_participants">
                    Participantes
                </button>

                <!-- Modal -->
                <div class="modal fade" id="session_participants" tabindex="-1" role="dialog"
                    aria-labelledby="session_participants" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Participantes na
                                    sessão <?php echo $sessoes["S".$id]["Name"]?> <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h3>
                            </div>
                            <div class="modal-body">
                                <?php 
                                    for ($a=0; $a < count($sessoes["S".$id]["Participants"]); $a++) { 
                                        echo "<h6>".$sessoes["S".$id]["Participants"][$a]."</h6>";
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>