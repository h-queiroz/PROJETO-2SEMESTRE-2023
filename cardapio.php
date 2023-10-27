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
  <h1>Cardápio</h1>

      <?php
      foreach ($result as $pizza) {?>

      <div class="pizza">

        <span>sabor: <?php echo $pizza["nome"]?></span>
        <br>
        <span>ingredientes: <?php echo $pizza["ingredientes"]?></span>
        <br>
        <span>valor: <?php echo $pizza ["preço"]?></span>
        <?php if(isset($_SESSION['id'])) { ?>
        <form action="deletar-pizza.php" method="post">
          <input type="text" name="id" value="<?php echo $pizza["id"] ?>">
          <button type="submit">Deletar</button>
        </form>
      <?php } ?>

      </div>
    <?php } ?>

    <?php if(isset($_SESSION['id'])) { ?>
      <div class="pizza adicionar">
        <span>+</span>
      </div>
    <?php } ?>

</div>
<div class="box"> <!-- Box que vai sobrepor as outras que vai conter o formulário -->
  <span>X</span> <!-- X improvisado para fechar a box -->
  <!-- Abaixo o formulário comum enviando uma requisição POST para a página criar-pizza.php -->
  <form action="criar-pizza.php" method="post">
    <input type="text" name="nome" required placeholder="Nome da Pizza">
    <input type="text" name="ingredientes" required  placeholder="Ingredientes">
    <input type="number" step="0.01" name="preço"  required  placeholder="Preço">
    <button type="submit">Adicionar</button>
  </form>
</div>
<script src="scripts/cardapio.js"></script> <!-- Pegando Script -->
</body>
</html>
