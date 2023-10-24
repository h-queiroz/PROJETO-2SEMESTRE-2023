<?php
session_start();
include "conexao.php";
if($_POST){
  
  //criando uma variavel com o valor cadastrado
  $nome=$_POST['nome'];
  $id=$_POST['id'];
  
  //pegando os valores do banco de dados
  $sql="DELETE FROM pizza where id = '$id'";
  
  //verificndo se a 
  $result = $conexao->query($sql);
  
  //verificando o id e nome
  if($result){
    echo"<script language='javascript' type='text/javascript'>
      alert('pizza deletada com sucesso');window.location.href='cardapio.php';</script>";
  }else{
    echo"<script language='javascript'>
    alert('pizza não encontrada');</script>";
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
  <form action="deletar-pizza.php" method="post">
  <h1>deletar</h1>
  <label>nome</label>
  <input type="nome" name="nome" placeholder="">
  <label>id</label>
  <input type="text" name="id" placeholder="">
  <div class="submit">
    <input type="submit" name="Deletar" value="Deletar" placeholder="">
  </div>
    </div>
  </main>
</body>
</html>