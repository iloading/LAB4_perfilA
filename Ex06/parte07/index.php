<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 07</title>
</head>

<body>
    <h1>Escolha um clube</h1>
    <?php
    require_once "data.php";
    echo "<ul>";

    foreach ($clubes as $key => $value) {
        $Nomeclube = $value['clube'];
        echo "<li><a href='jogadores.php?clube=" . $Nomeclube . "'>" . $Nomeclube . "</a></li>";
    }

    echo "</ul>";
    ?>

    

</body>

</html>