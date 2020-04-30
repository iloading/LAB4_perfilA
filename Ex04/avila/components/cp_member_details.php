<?php require_once "./data/data_team_members.php"?>
<?php 
    if (isset($_GET['id'])) { // verificação se existe o método GET, se não existir vai também para a página de erro 404
        $id= $_GET['id'];
        switch ($id) {
        case '5':
            $mentor_image       = &$mentor1_image;
            $mentor_name        = &$mentor1_name;
            $mentor_title       = &$mentor1_title;
            $mentor_description = &$mentor1_description;
            include_once "cp_member_details_html.php";
            break;

        case '6':
            $mentor_image       = &$mentor2_image;
            $mentor_name        = &$mentor2_name;
            $mentor_title       = &$mentor2_title;
            $mentor_description = &$mentor2_description;
            include_once "cp_member_details_html.php";

            break;

        case '7':
            $mentor_image       = &$mentor3_image;
            $mentor_name        = &$mentor3_name;
            $mentor_title       = &$mentor3_title;
            $mentor_description = &$mentor3_description;
            include_once "cp_member_details_html.php";

            break;

        default:
            include_once "cp_404.php";
            break;
    }
    }else {
        include_once "cp_404.php";

    }
?>


