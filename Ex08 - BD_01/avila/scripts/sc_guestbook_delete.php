<?php
session_start();



if ($_SESSION['username']) {
   $array_position = $_GET['id'];

unset($_SESSION['guestbook'][$array_position]); // remove o item do array 

$arr2 = array_values($_SESSION['guestbook']); //reorganiza o array novamente

$_SESSION['guestbook'] = $arr2; //retorna o array organizado novamente à variavel

/*para perceber o pq das duas últimas linhas testem comenta-las e ver a diferença quando eliminam o primeiro ou o segundo comentário.*/
/*estes passos são necessários pq ,por exemplo, se eliminássemos primeiro o segundo comentário, tanto o segundo comentário como o terceiro iriam desaparecer. Isto pq o uncut remove apenas o conteúdo do item, mas não o item em si. Explicação aqui: https://www.geeksforgeeks.org/removing-array-element-and-re-indexing-in-php/*/

}else { /*erro quando se tenta eliminar um comentário sem sessão iniciada - ver linha 54 do cp_guestbook_view*/ 
    $_SESSION['erro']=1;

}


header("Location: ../guestbook.php");
