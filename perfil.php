<?php
  session_start();
  include "conexao.php";

  if(!isset($_SESSION['id'])){
    header("location:index.php");
  }

  $usuario = $_SESSION['nome'];
  $email = $_SESSION['email'];
  $id = $_SESSION['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/perfil.css" />
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
  <title>Bonna Dica</title>
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
<div class="texto">
  <h1>Nome do usuario:<?php echo "$usuario" ?> </h1>
  <h1>id do usuario:<?php echo "$id"?> </h1>
  <h1>email do usuario:<?php echo "$email"?> </h1>
</div>
</body>
</html>