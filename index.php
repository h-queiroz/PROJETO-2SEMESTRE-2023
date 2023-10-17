<?php
  session_start();
  include "conexao.php";
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="styles/index.css" />
      <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>Pizzaria Bonna Dica</title>
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
          <a href="perfil.php"> <?php echo"$usuario";?> </a>
          <a href="deslogar.php">sair</a>
        </div>
          
          <?php
         }else{  ?>
          <a href="login.php">Entrar</a>
          <a href="cadastro.php">Criar Conta</a>
          </div>
        <?php } ?>
      </div>
    
      </div>
    </div>
    <hr>
    <div class="texto">
      <p>Desde 2008 oferecendo a melhor experiência em pizza!</p>
    </div>
      <?php print_r($_SESSION); ?>
    <div class="image">
    <img src="imgs/logo_transparente.png" alt="">
    </div>
    <div class="texto">
    </div>
  </body>
</html>