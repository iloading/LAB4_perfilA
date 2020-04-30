  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="./0_index.php">Start Bootstrap</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
              data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
              aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="./1_team.php">Equipa</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="./2_sessions.php">Sessões</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="./guestbook.php">Guestbook</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="./3_contacts.php">Contactos</a>
                  </li>

                  <li class="nav-item">
                  
                <?php 

                    if (!isset($_SESSION['username'])) {
                        echo '<a class="nav-link js-scroll-trigger" href="./4_login.php">Entrar</a>';
                    }else {
                        echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="scripts/sc_logout.php">Logout</a>
                        </div>';

                    }
                ?>
                      
                  </li>

              </ul>
          </div>
      </div>
  </nav>