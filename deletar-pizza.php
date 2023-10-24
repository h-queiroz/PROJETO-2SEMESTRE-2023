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

}else{
  header("Location: cardapio.php");
}
  ?>
