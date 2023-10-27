<?php
  session_start();
  // Apaguei os seus comentários só para não confundir com os meus.
  // E imagino que você já saiba de cabeça tudo que está acontendo abaixo.
  // Removi toda a parte de HTML, pois se vamos usar a página de cardápio para o formulário,
  // só iremos precisar dessa para o backend.
  require_once "conexao.php";

  if($_POST){

  $ingredientes=$_POST['ingredientes'];
  $nome=$_POST['nome'];
  $preço=$_POST['preço'];

  $sql="INSERT INTO pizza (ingredientes, nome, preço) VALUES ('$ingredientes', '$nome', '$preço')";

  if(mysqli_query($conexao, $sql)){
    echo"<script language='javascript' type='text/javascript'>
    alert('pizza cadastrada com sucesso');window.location
    .href='cardapio';</script>";
  }
  else{
    echo "Error: ".$sql."<br>".mysqli_error($conexao);
  }
  mysqli_close($conexao);
  }
?>
