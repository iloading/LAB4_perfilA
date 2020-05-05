<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 06</title>
</head>

<body>
    <?php
    require_once "data.php";
    $escolha = $_POST['id'];
    foreach ($cities as $key => $value) {
        if ($escolha == $key) {
            echo "<h1>". $value['name']." (". intval($key).")</h1>";
            echo "<p>". $value['info']."</p>";
            echo "<hr>";
            echo '<a href="index.php">voltar</a>';
        }
    }
    ?>
    
    

</body>

</html>