<?php
  session_start();
    if($_POST){

    require_once "conexao.php";
    //criando uma variavel com o valor cmysql -u rooadastrado
      $ingredientes=$_POST['ingredientes'];
      $nome=$_POST['nome'];
      $preço=$_POST['preço'];

    //verificando o ingredientes
    $select = mysqli_query($conexao, $sql);
    $result = mysqli_fetch_array($select);

      $sql="INSERT INTO pizza (ingredientes, nome, preço) VALUES ('$ingredientes', '$nome', '$preço')";

      //se der certo mostrar cadastrado feito com sucesso
       if(mysqli_query($conexao, $sql)){
        echo"<script language='javascript' type='text/javascript'>
        alert('pizza cadastrada com sucesso');window.location
        .href='cardapio.php';</script>";

      }
      //se der errado mostrar o erro
      else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
      }
      mysqli_close($conexao);

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Document</title>
</head>
<body>
<div class="top">
  <div class="logo">
    <a href="index.php">
      <img src="imgs/logo_transparente.png" alt="logo">
    </a>
  </div>
  <div class="paginas">
    <a href="cardapio.php">Cardapio</a>
    <a href="contato.php">Contato</a>
    <a href="sobre.php">Sobre</a>
    <div class="login">
      <a href="login.php">Login</a>
    </div>
    <a href="cadastro.php">Criar Conta</a>
  </div>
</div>
<hr>
<div class="box">
  <h1>criar pizzas</h1>
  <label>Nome</label>
  <form action="criar-pizza.php" method="post">
    <input type="text" name="nome" required placeholder="">
    <label>ingredientes</label>
    <input type="text" name="ingredientes" required  placeholder="">
    <label>preço</label>
    <input type="number" step="0.01" name="preço"  required  placeholder="">
    <div class="submit">
      <input type="submit">
    </div>
  </form>
</div>
</body>
</html>
