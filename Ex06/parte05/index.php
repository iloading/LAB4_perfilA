<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 05</title>
</head>

<body>
    <h1>Quizz</h1>
    <?php
    /*Provavelmente dá para resolver com foreach e fica mais fácil de perceber xD mas shotless */
    require_once "perguntas.php"; 
    $i = 0;
    for ($i = 0; $i < $perguntas[$i]; $i++) {
        echo "<div>";
        echo  "<h3>".$perguntas[$i]['pergunta'] ."</h3>";
        
         for ($a=0; $a < count($perguntas[$i]['respostas']) ; $a++) {
            echo "<p>";
            echo '<input type="radio"name="pergunta' . $i . '">';
            echo  $perguntas[$i]['respostas'][$a];
            echo "</p>";
         }
        echo "</div>";
    }
    ?>





</body>

</html>