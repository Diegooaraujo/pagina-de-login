<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }


?>

seja bem vindo !
<a href="Sair.php">Sair</a>