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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Usado para ajudar com o css -->
    <meta charset="UTF-8" /> <!-- Ajusta o site para não quebrar texto com acentuação -->
    <link rel="stylesheet" href="styles/cardapio.css" /> <!-- Linkando com o css -->
    <link rel="icon" href="imgs/pizza.png" type="image/x-icon"> <!-- Ícone da Página -->
    <title>Pizzaria Bonna Dica</title> <!-- Título da Página -->
  </head>

  <body>
    <header class="top">
      <div class="logo">
        <a href="index.php"><img src="imgs/logo_transparente.png" alt="logo"></a>
      </div>
      <div class="theme-switcher">
        <div class="ball">
          <img src="imgs/moon.png" width="30px">
          <img src="imgs/sun.png" width="25px">
        </div>
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
      <?php
      }else{
      ?>
        <h1>Cardápio</h1>
        <?php
        foreach ($result as $pizza) {
        ?>
          <div class="pizza">
            <span>sabor: <?php echo $pizza["nome"]?></span>
            <br>
            <span>ingredientes: <?php echo $pizza["ingredientes"]?></span>
            <br>
            <span>valor: <?php echo $pizza ["preço"]?></span>
          </div>
      <?php
        }
      }
      ?>
    </div>
  <script src="scripts/cardapio.js"></script>
  </body>
</html>
