  <?php include_once "./data/data_team_members.php"; ?>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">AVILA CREW</h2>
                  <h3 class="section-subheading text-muted">A nossa equipa</h3>
                
              </div>
          </div>
          <div class="row">
              <div class="col-sm-4">
                  <div class="team-member">
                      <a href="./member_info.php?id=<?=$mentor1_id?>">
                          <img class="mx-auto rounded-circle" src="./images/team/<?=$mentor1_image ?>">
                      </a>
                      <h4><?= $mentor1_name ?></h4>
                      <p class="text-muted"><?= $mentor1_title ?></p>
                      <p class="text-muted"><?= $mentor1_description_short ?></p>
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
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                      <a href="./member_info.php?id=<?=$mentor2_id?>">
                          <img class="mx-auto rounded-circle" src="./images/team/<?=$mentor2_image ?>" alt="">
                      </a>
                      <h4><?php echo $mentor2_name ?></h4>
                      <p class="text-muted"><?= $mentor2_title ?></p>
                      <p class="text-muted"><?= $mentor2_description_short ?></p>
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
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                      <a href="./member_info.php?id=<?=$mentor3_id?>">
                          <img class="mx-auto rounded-circle" src="./images/team/<?=$mentor3_image ?>" alt="">
                      </a>
                      <h4><?= $mentor3_name ?></h4>
                      <p class="text-muted"><?= $mentor3_title ?></p>
                      <p class="text-muted"><?= $mentor3_description_short ?></p>
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
              </div>
          </div>
          <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                      laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
              </div>
          </div>
      </div>
  </section>