<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 01</title>
</head>
<body>
    <?php
    if(!isset($_POST['nomes'])){
    ?>

        <form method="post">
        <select name="nomes">
            <option value="manel">zé manel</option>
            <option value="maria">zé maria</option>
            <option value="quim">joaquim zé</option>
            <option value="quina">joaquina zé</option>
        </select>
        <button type="submit">carregar</button>
        
    </form>
    
    <?php
    }else {
        echo "<h1> olá ".$_POST['nomes']." </h1>";
    }
    ?>
    

    

</body>
</html>