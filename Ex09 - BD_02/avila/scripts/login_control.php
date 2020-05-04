<?php
        session_start();

        include_once "../data/team_members_data.php";

        $loggedIn = false;
        if (isset($_POST['username']) && isset($_POST['pass'])) {
            $name = $_POST['username'];
            $pass = $_POST['pass'];

            
            if ($name === $mentor1_user && $pass === $mentor1_pass) {
                $loggedIn = true;
                
            }elseif ($name === $mentor2_user && $pass === $mentor2_pass){
                $loggedIn = true;

            }elseif ($name === $mentor3_user && $pass === $mentor3_pass){
                $loggedIn = true;

            }else {
                $loggedIn = false;
                $_SESSION["msg"] = 1;
            }

            if ($loggedIn == true) {

                $_SESSION['username'] = $name;
                

                header("Location: ../0_index.php");

            }else{
                header("Location: ../4_login.php");
            }

        }
