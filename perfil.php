<?php
  if(isset($_SESSION)){
    session_start();
    include "conexao.php";
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/perfil.css">
    <title>perfil</title>
</head>
<body>
<div class="top">
    <div class="logo">
      <a href="index.php">
        <img src="imgs/pizza.png" alt="logo">
      </a>
    </div>
    <div class="paginas">
      <a href="cardapio.php">Cardapio</a>
      <a href="contato.php">Contato</a>
      <a href="sobre.php">sobre</a>
      <?php if(isset($_SESSION['id'])){
        $usuario = $result['nome'];
        ?>
          <div class="cadastro">
          <a href="perfil.php"><?php echo"$usuario" ?></a>
        </div>
          <a href="deslogar.php">sair</a>
          
          <?php
         }else{ ?>
          <div class="cadastro">
          <a href="login.php">login</a>
        </div>
          <a href="cadastro.php">Criar Conta</a>
        <?php } ?>
      </div>
    </div>
  </div>
  <hr>
  </div>

  <p>nome</p>
</body>
</html>