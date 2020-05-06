<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 07</title>
</head>

<body>
    <?php
    require_once "data.php";

    if (isset($_GET['clube'])) {
        $varGET = $_GET['clube']; //clube que escolhemos

        echo "<h1>Lista de jogadores do ". $varGET."</h1>";
        echo "<ul>";

        foreach ($clubes as $key => $clube_array) {
            if ($clube_array['clube'] == $varGET) {
                foreach ($clube_array['jogadores'] as $jogador) {
                   echo "<li>" . $jogador."</li>";
                }
            }
        }
        echo "</ul>";
    }
    ?>

    <p><a href='index.php'>Escolher outro clube</a></p>

</body>

</html>