<?php
    $configData = json_decode(file_get_contents('config.json'), true);

    $servidor= ($configData) ? $configData["host"] :"localhost";
    $usuario= ($configData) ? $configData["username"] :"root";
    $senha= ($configData) ? $configData["password"] :"1234";
    $db= ($configData) ? $configData["schema"] :"bonnadica";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>
