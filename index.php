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
<header class="top">
  <div class="logo">
    <a href="./">
      <img src="imgs/logo_transparente.png" alt="logo">
    </a>
    </div>
    <div class="paginas">
      <a href="cardapio">Cardapio</a>
      <a href="contato">Contato</a>
      <a href="sobre">Sobre</a>
    </div>

    <?php if(isset($_SESSION['id'])){
      $usuario = $_SESSION['nome'];
      ?>
      <div class="login">
        <a href="perfil"> <?php echo"$usuario";?> </a>
        <a href="deslogar">sair</a>
      </div>
    <?php }else{  ?>
      <div class="login">
        <a href="login">Entrar</a>
        <a href="cadastro">Criar Conta</a>
      </div>
    <?php } ?>
</header>
<hr>

<div class="texto">
  <p>Desde 2008 oferecendo a melhor experiência em pizza!</p>
</div>
<div class="image">
  <img src="imgs/calabreza.jpg" alt="logo da bonnadica">
</div>
<div class="texto">

</div>
</body>
</html>
