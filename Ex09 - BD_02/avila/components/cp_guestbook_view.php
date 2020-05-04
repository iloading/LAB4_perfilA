<?php


require_once "./data/data_comments.php";

?>
<div class="row mt-5 pt-5">
    <div class="col-lg-12">
        <h2 class="page-header">GuestBook</h2>
    </div>
    <div class="col-lg-12 col-sm-12 text-center">
       

        <?php
/*
        //+++++++++++++++++++++++++++++         PARTE 1         +++++++++++++++++++++++++++++
        echo "<br><h1>Parte 1</h1>";
        //se os 3 arrays tiverem o mesmo tamanho
        if (count($comments_parte1_autor) == count($comments_parte1_texto) && count($comments_parte1_texto) == count($comments_parte1_data)) {
            
            for ($i=0; $i < count($comments_parte1_autor); $i++) { 

                echo "<h3>".$comments_parte1_texto[$i]."
                    <small>(".$comments_parte1_data[$i]." autor: ".$comments_parte1_autor[$i].")</small>
                    <small><a href='scripts/sc_guestbook_delete.php?id=".$i."'>x</a></small>
                </h3>";
        }
        }
        
        ?>

        <?php

        //+++++++++++++++++++++++++++++         PARTE 2         +++++++++++++++++++++++++++++
        echo "<br><h1>Parte 2</h1>";
        //se os 3 arrays tiverem o mesmo tamanho
        if (count($comments_parte2[0]) == count($comments_parte2[1]) && count($comments_parte2[1]) == count($comments_parte2[2])) {
            
            for ($i=0; $i < count($comments_parte2); $i++) { 

                echo "<h3>".$comments_parte2[$i][1]."
                    <small>(".$comments_parte2[$i][2]." autor: ".$comments_parte2[$i][0].")</small>
                    <small><a href='scripts/sc_guestbook_delete.php?id=".$i."'>x</a></small>
                </h3>";
        }
        }
        */
        ?>

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

        
         if (!isset($_SESSION['guestbook'])) {
            $_SESSION['guestbook'] = $comments_parte3;
            $comments_parte3_display = $comments_parte3;
         }else {
             $comments_parte3_display = $_SESSION['guestbook'];
         }
            
            for ($i=0; $i < count($comments_parte3_display); $i++) {
                    echo "<h3>".$comments_parte3_display[$i]["texto"]."
                    <small>".$comments_parte3_display[$i]["data"].$comments_parte3_display[$i]["autor"]."</small>
                    <small><a href='scripts/sc_guestbook_delete.php?id=".$i."'>x</a></small>
                </h3>";

                }
            
        
        ?>

        <?php


        //+++++++++++++++++++++++++++++ EXTRA +++++++++++++++++++++++++++++
        //echo "<br><br><h1>EXTRA</h1>";
        ?>
        <!--<h3>{comentário}
            <small>({data} autor: {nome do autor})</small>
            <small><a href='scripts/sc_guestbook_delete.php?id={id do comentário}'>x</a></small>
        </h3>
        -->

    </div>

    <div style="text-align: center;">
        <a href="scripts/sc_guestbook_delete_all.php">
            <button type="button" class="btn btn-primary">Apagar Lista</button>
        </a>
    </div>
</div>