<?php

    require_once "./connections/connection.php";
    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);


    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
    } else {
        $sort = "ASC";
    };
    
    $query = "SELECT id_mentors, name, title, description_short, image FROM avila_mentors ORDER BY name $sort";

    if ($sort == 'ASC') { //troca o valor para quando se clicar outra vez no botão Estar o valor contrário
        $sort = 'DESC';
    } else {
        $sort = 'ASC';
    }; 

    if (mysqli_stmt_prepare($stmt, $query)) {


        if(mysqli_stmt_execute($stmt)){
               
            mysqli_stmt_bind_result($stmt, $id_mentors, $name, $title, $description_short, $image);

           
?>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">AVILA CREW</h2>
                  <h3 class="section-subheading text-muted">A nossa equipa<br><br><a href="?sort=<?=$sort?>"><i class="fa fa-sort-alpha-down" aria-hidden="true"></i></a></h3>

              </div>
          </div>
          <div class="row">

<?php
                while (mysqli_stmt_fetch($stmt)) {
                    echo
                        '<div class="col-sm-4">
                        <div class="team-member">
                        <a href="./member_info.php?id=' . $id_mentors .'">
                            <img class="mx-auto rounded-circle" src="./images/team/' . $image . '">
                        </a>
                        <h4>' . $name . '</h4>
                        <p class="text-muted">' . $title . '</p>
                        <p class="text-muted">' . $description_short . '</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>';
                }
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }
    mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($link);
    }
    mysqli_close($link);
                
?>


          </div>
  </section>