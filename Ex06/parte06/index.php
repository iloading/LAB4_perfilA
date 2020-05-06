<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 06</title>
</head>

<body>

    <h1>Escolha uma cidade</h1>
    <?php
    require_once "data.php";
    ?>
    <form method="post" action="city.php">
        <select name="id">
            <?php
            foreach ($cities as $key => $value) {
                echo "<option value='" . $key . "'>" . $value['name'] . "</option>";
            }
            ?>

        </select>
        <input type="submit" value="mostrar dados">
    </form>
    </form>
</body>

</html>