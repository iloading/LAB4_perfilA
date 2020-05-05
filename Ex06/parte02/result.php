<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 02</title>
    
</head>

<body>
<?php
    if(isset($_POST['valor']) && isset($_GET['number']) ){
        
        $valor  = $_POST['valor'];
        $number = $_GET['number'];

        echo "<h1>" . $valor. " < " .$number ."</h1>";

        if ($valor < $number) {
            echo "<p>Muito bem!</p>";
        }else {
           echo "<p>Não está bem. Tenta novamente.</p>";
        }
    }else {
        echo "<h1>Algo não correu bem</h1>";
    }
?>


</body>

</html>