<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 04</title>
</head>

<body>
    <h1>Quizz</h1>
    <?php
    require_once "perguntas.php";

    $a = 0; //precisam de ser variáveis globais para serem usadas desta maneira
    $i = 0;
    for ($i = 0; $i < count($perguntas); $i++) {
        echo "<div>";
        echo "<h3>" . $perguntas[$i] . "</h3>";
        for ($b = 0; $b < 5; $b++) {
            echo "<p>";
            echo '<input type="radio"name="pergunta' . $i . '">';
            echo  $respostas[$a];
            echo "</p>";
            
            ++$a;
        }
        echo "</div>";
    }
    ?>





</body>

</html>