<?php
  session_start();
  include "conexao.php";
  $pizza = "SELECT id, nome, ingredientes, preço from pizza";
  $result = $conexao->query($pizza);
  
  $conexao->close();
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/cardapio.css" />
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
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
<div class="texto">
  <?php if(!isset($_SESSION['id'])) { ?>
    <h1>faça o cadastro ou login para ver o cadarpio</h1> 
  <?php } else{ ?>
    <h1>Cardápio</h1>
    <p>
      <?php 
      foreach ($result as $result) {?>
      <div class="pizza">
        <?php echo "id da pizza:" . $result['id'] . "</br>Nome da pizza:" . $result['nome'] . "</br>ingredientes:" . $result['ingredientes'] . "</br>preço:" . $result['preço']; } ?>
        </div>
    </p>


  <?php } ?>
</div>
</body>
</html>
