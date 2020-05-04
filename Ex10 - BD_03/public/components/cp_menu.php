<?php

?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Public area</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['username'])) { 
                    
                    if(isset($_SESSION['role']) && $_SESSION['role'] ==1){?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../admin/">Admin</a></li>
                    <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?= $_SESSION['username']?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="scripts/sc_logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php
                } else { ?>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#login">Login</a></li>

                <?php  } ?>


                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>