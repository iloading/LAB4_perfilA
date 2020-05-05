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
    $number = rand(1, 10);
    ?>
    <h1>Introduz um número menor do que <?= $number ?></h1>
    <form action="result.php?number=<?=$number?>" method="post">
        <input type="text" name="valor">
        <input type="submit" value="Verificar">
    </form>

</body>

</html>