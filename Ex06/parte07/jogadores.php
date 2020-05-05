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

        for ($i = 0; $i < count($clubes); $i++) { //entrar mo array clubes
            foreach ($clubes[$i] as $key => $value) { //para cada array dentro do arrau clubes

                if ($key == "clube" && $value ==  $varGET) { //se estivermos a ver o clube e se este for igual àquele que selecionarmos, então a variável passa a 1
                    $clubeCorreto = 1;
                    //echo $value;
                }elseif ($key == "clube" && $value !=  $varGET) {//se estivermos a ver o clube e se este NÃO for igual àquele que selecionarmos, então a variável passa a 0
                    $clubeCorreto = 0;
                }

                if ($key == "jogadores" && $clubeCorreto == 1) {// Se estivermos a ver os jogadores e se for no array do clube que selecionámos (através da variavel $clubeCorreto ) então vamos escrever os jogadores desse clube
                    for ($a=0; $a < count($value) ; $a++) { //entrar no array jogadores e escrever o número de nomes que lá estiverem com count($value)
                        echo "<li>" . $value[$a]."</li>";
                    }
                    
                }

            }
        }
        echo "</ul>";
    }
    ?>

    
    <!-- <ul>
        <li>Rui Patrício</li>
        <li>William</li>
        <li>CR7</li>
        <li>Gelson</li>
        <li>Bas Dost</li>
    </ul> -->
    <p><a href='index.php'>Escolher outro clube</a></p>

</body>

</html>