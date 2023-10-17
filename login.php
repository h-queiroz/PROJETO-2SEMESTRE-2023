<?php

if(isset($_POST['email'])||isset($_POST['senha'])){
  
    //conexão com o mysql
    include "conexao.php";
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
      $_SESSION ['id'] = $result ['id'];
      $_SESSION ['nome'] = $result ['nome'];
      $_SESSION ['email'] = $result ['email'];
      header('location:index.php');
    
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('email e/ou senha incorretos');</script>";
  }
}

  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body>
<div class="top">
    <div class="logo">
      <a href="index.php">
        <img src="imgs/pizza.png" alt="">
      </a>
    </div>
    <div class="paginas">
      <a href="cardapio.php">Cardapio</a>
      <a href="contato.php">Contato</a>
      <a href="sobre.php">Sobre</a>
      <?php if(isset($_SESSION['id'])){
        $usuario = $_SESSION['nome'];
        ?>
        <div class="login">
          <a href="perfil.php"><?php echo"$usuario" ?></a>
        </div>
        <div class="cadastro">
          <a href="deslogar.php">sair</a>
          
          <?php
         }else{ ?>
          <div class="login">
          <a href="login.php">Entrar</a>
        </div>
        <div class="cadastro">
          <a href="cadastro.php">Criar Conta</a>
        <?php } ?>
      </div>
      </div>
          </div>
        </div>
      <hr>
    <div class="box">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <h2>E-mail</h2>
        <input type="email" name="email" placeholder="Digite seu E-mail">
        <h2>Senha</h2>
        <input type="password" name="senha" placeholder="Digite sua Senha">
        <input type="submit" name="submit">
      </form>
      
    </div>
</body>
</html>
