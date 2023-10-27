<?php
  session_start();
  include "conexao.php";

  if(!isset($_SESSION['id'])){
    header("location:index.php");
  }

  $id = $_SESSION['id'];
  $usuario = $_SESSION['nome'];
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];
  //$senha = password_get_info($senha, $_POST['senha']);
  if($_POST){

    $email=$_POST['email'];
    $usuario=$_POST['nome'];
    $senha=password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];

    $sql="UPDATE usuarios SET email = '$email', nome = '$usuario', senha = '$senha' where (id = '$id') ";

    $stmt=mysqli_query($conexao, $sql);

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/perfil.css" />
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
  <title>Bonna Dica</title>
  <style> pre{
    color: white;
  } </style>
</head>
<body>
<header class="top">
  <div class="logo">
    <a href="./">
      <img src="imgs/logo_transparente.png" alt="logo">
    </a>
  </div><!--logo-->

  <div class="paginas">
    <a href="cardapio">Cardapio</a>
    <a href="contato">Contato</a>
    <a href="sobre">Sobre</a>
  </div> <!-- paginas -->

  <?php if(isset($_SESSION['id'])){
    $usuario = $_SESSION['nome'];
  ?>
    <div class="login">
      <a href="perfil"> <?php echo"$usuario";?> </a>
      <a href="deslogar">sair</a>
    </div> <!-- login -->
  <?php }else{  ?>
    <div class="login">
      <a href="login">Entrar</a>
      <a href="cadastro">Criar Conta</a>
    </div> <!-- login -->
  <?php } ?>

</header><!-- top -->

<hr>
<form action="perfil" method="POST">
  <div class="box">
    <h1>Usuario</h1>
    <label>Nome do usuario:</label>
    <input type="text" name="nome" require id="nome" value="<?php echo $usuario;?>"><br>
    <label>senha do usuario:</label>
    <input type="text" name="senha" require id="senha" ><br>
    <label>email do usuario:</label>
    <input type="email" name="email" require id="email" value="<?php echo $email ?>"><br>
    <button>confirmar</button>
  </div>  <!-- box -->
</form>
</body>
</html>
