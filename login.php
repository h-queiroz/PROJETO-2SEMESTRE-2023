<?php
session_start();
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
    //print_r($_SESSION);
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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/login.css" />
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Pizzaria Bonna Dica</title>
</head>
  
<body>
<header class="top">
  <div class="logo">
    <a href="index.php">
      <img src="imgs/logo_transparente.png" alt="logo">
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
        <a href="perfil.php"> <?php echo"$usuario";?> </a>
        <a href="deslogar.php">sair</a>
      </div>
    <?php }else{  ?>
      <div class="login">
        <a href="login.php">Entrar</a>
        <a href="cadastro.php">Criar Conta</a>
      </div>
    <?php } ?>

  </div>
</header>      
<hr>
<div class="box">
  <form action="login.php" method="post">
  <h1>Login</h1>
  <h2>E-mail</h2>
  <input type="email" name="email" placeholder="Digite seu E-mail">
  <h2>Senha</h2>
  <input type="password" name="senha" placeholder="Digite sua Senha">
  <input type="submit" name="submit">
    </div>
</main>
</body>
</html>
