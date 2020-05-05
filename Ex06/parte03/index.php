<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6 - Parte 03</title>
</head>

<body>
    
    <?php
    $cols = 5;
    $rows = 5;
    $xCol = rand(1, 5);
    $xRow = rand(1, 5);
    echo "<h1> X marks the spot: ". $xRow ."-". $xCol."</h1>";
    echo "<table>";
    for ($tr = 1; $tr <= $rows; $tr++) {

        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == $xRow && $td == $xCol) {
                echo "<td align='center'> X </td>";
            } else {
                echo "<td align='center'> 0 </td>";
            }
        }
        echo "</tr>";
    };

    echo "</table>";
?>
    
</body>

</html>