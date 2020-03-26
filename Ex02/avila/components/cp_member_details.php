<?php require_once "./data/data_team_members.php"?>
<?php 
    $id= $_GET['id'];
    switch ($id) {
        case '5':
            $mentor_image       = &$mentor1_image;
            $mentor_name        = &$mentor1_name;
            $mentor_title       = &$mentor1_title;
            $mentor_description = &$mentor1_description;
            break;

        case '6':
            $mentor_image       = &$mentor2_image;
            $mentor_name        = &$mentor2_name;
            $mentor_title       = &$mentor2_title;
            $mentor_description = &$mentor2_description;
            break;

        case '7':
            $mentor_image       = &$mentor3_image;
            $mentor_name        = &$mentor3_name;
            $mentor_title       = &$mentor3_title;
            $mentor_description = &$mentor3_description;
            break;

        default:
            include_once "cp_404.php";
            break;
    }
    
    
?>


<section class="bg-light" id="member_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-6 text-center"> <img class="img-circle img-responsive img-center"
                    src="images/team/<?= $mentor_image; ?>" alt="<?= $mentor_name; ?>">
                <h2 class="section-heading text-uppercase"><?= $mentor_name; ?></h2>
                <h3 class="section-subheading text-muted mb-2"><?= $mentor_title; ?></h3>
                <p><?= $mentor_description; ?></p>
            </div>
        </div>
    </div>
</section>