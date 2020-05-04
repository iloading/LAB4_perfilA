<?php include_once "data/data_sessions.php"; ?>

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>

        <h3>

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
        for ($i=0; $i < sizeof($sessoes); $i++) {
                echo '<a href="session_info.php?id='. $i .'">
                            <p>'. $sessoes["S".$i]["Name"]. ' | 
                                <small>'. $sessoes["S".$i]["Date"] .'</small>
                            </p>
                         </a>';
        }

        ?>

        </h3>
</section>