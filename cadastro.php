<?php
  session_start();
    if(isset($_SESSION)){

      include "conexao.php";
      //criando uma variavel com o valor cadastrado
      $email=$_POST['email'];
      $nome=$_POST['nome'];
      $senha=$_POST['senha'];
    //verificando o email
    $sql = "SELECT * from usuarios where email = '$email'";
    $select = mysqli_query($conexao, $sql);
    $result = mysqli_fetch_array($select);
    
    //se existir outro email igual nao roda.
    if($result['email'] == $email){
      echo "nome ja existe";
    }
    //se não, roda o codigo.
    else {
        //criptografando a senha
        $senha=password_hash($senha, PASSWORD_DEFAULT);
        //criando o valor no banco de dados
        $sql="INSERT INTO usuarios (email, nome, senha) VALUES ('$email', '$nome', '$senha')";
        
        
        //se der certo mostrar cadastrado feito com sucesso
         if(mysqli_query($conexao, $sql)){
           $_SESSION ["id"] = $result ["id"];
           $_SESSION ["nome"] = $result ["nome"];
           $_SESSION ["email"] = $result ["email"];
          echo"<script language='javascript' type='text/javascript'>
          alert('cadastro feito com sucesso');window.location
          .href='index.php';</script>";

        }
        //se der errado mostrar o erro
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }
        mysqli_close($conexao);
      }
    }
      ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Document</title>
</head>
<body>
<div class="top">
  <div class="logo">
    <a href="index.php">
        <img src="imgs/logo_transparente.png">
      </a>
    </div>
    <div class="paginas">
      <a href="cardapio.php">Cardapio</a>
      <a href="contato.php">Contato</a>
      <a href="sobre.php">Sobre</a>
      <div class="login">
        <a href="login.php">Login</a>
      </div>
      <div class="cadastro">
        <a href="cadastro.php">Criar Conta</a>
      </div>
        </div>
      </div>
      <hr>
    <div class="box">
        <h1>Cadastro</h1>
        <h2>Nome</h2>
        <form action="cadastro.php" method="post">
          <input type="text" name="nome" placeholder="Digite seu Nome">
          <h2>E-mail</h2>
          <input type="email" name="email"  placeholder="Digite seu E-mail">
          <h2>Senha</h2>
          <input type="password" name="senha"  placeholder="Digite sua Senha">
          <input type="submit">
        </form>
  </html>