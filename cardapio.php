<?php
  session_start();
  include "conexao.php";
  $query = "SELECT id, nome, ingredientes, preço from pizza";
  $result = $conexao->query($query);

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
    </div>

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
</header>      
<hr>
<div class="texto">
  <h1>Cardápio</h1>
  
      <?php
      foreach ($result as $pizza) {?>

      <div class="pizza">

        <span>sabor: <?php echo $pizza["nome"]?></span>
        <br>
        <span>ingredientes: <?php echo $pizza["ingredientes"]?></span>
        <br>
        <span>valor: <?php echo $pizza ["preço"]?></span>

      </div>
    <?php } ?>

    <?php if(isset($_SESSION['id'])) { ?>
      <a href="criar-pizza.php"> criar mais pizzas </a>
      <a href="deletar-pizza.php">deletar pizza</a>
    <?php } ?>
    
</div>
</body>
</html>
