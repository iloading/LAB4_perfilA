<?php
session_start();



if (isset($_SESSION['username']) && isset($_POST)) {

    $nome = $_SESSION['username'];
    $texto = $_POST['texto'];
    $data = $_POST['data'];

    /*
    $novo_comentario = array();
    $novo_comentario['autor']= $nome;
    $novo_comentario['texto']= $texto;
    $novo_comentario['data']= $data;
    */
    
    $novo_comentario = array(
        "autor" => $nome,
        "texto" =>$texto,
        "data" => $data,

    );
    $_SESSION['guestbook'][] = $novo_comentario;
}




header("Location: ../guestbook.php");
