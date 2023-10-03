<?php
    //conexão com o mysql
    include("conexao.php");
    //criando uma variavel com o valor cadastrado
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    //pegando os valores do banco de dados
    $sql="SELECT * FROM usuarios where email = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    //echo "<pre>";
    //print_r($result);
    //echo"</pre>";

    //verificando o email e senha
    if($email == $result["email"] && password_verify($senha, $result['senha'])){
        echo"<script language='javascript' type='text/javascript'>
    alert('Login feito com sucesso');window.location
    .href='index.html';</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('email e/ou senha incorretos');window.location
        .href='login.html';</script>";
    }
?>