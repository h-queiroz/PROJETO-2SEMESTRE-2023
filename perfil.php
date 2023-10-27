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
  if($_POST){

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $usuario=$_POST['nome'];
    //$senha=password_hash($senha, PASSWORD_DEFAULT);

    
    $sql="UPDATE usuarios SET email = '$email', nome = '$usuario', senha = '$senha' where (id = '$id') ";
    
    $stmt=mysqli_query($conexao, $sql);
    
  if($stmt){
    echo "atualizado com sucesso";
  } else {
    echo "Erro ao atualizar o registro: " . $conexao->error;
  }
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
</head>
<body>
<header class="top">
  <div class="logo">
    <a href="index.php">
      <img src="imgs/logo_transparente.png" alt="logo">
    </a>
  </div><!--logo-->

  <div class="paginas">
    <a href="cardapio.php">Cardapio</a>
    <a href="contato.php">Contato</a>
    <a href="sobre.php">Sobre</a> 
  </div> <!-- paginas -->

  <?php if(isset($_SESSION['id'])){
    $usuario = $_SESSION['nome'];
  ?>
    <div class="login">
      <a href="perfil.php"> <?php echo"$usuario";?> </a>
      <a href="deslogar.php">sair</a>
    </div> <!-- login -->
  <?php }else{  ?>
    <div class="login">
      <a href="login.php">Entrar</a>
      <a href="cadastro.php">Criar Conta</a>
    </div> <!-- login -->
  <?php } ?>

</header><!-- top -->

<hr>
<form action="perfil.php" method="POST">
  <div class="box">
    <h1>Usuario</h1>
    <label>Nome do usuario:</label>
    <input type="text" name="nome" require id="nome" value="<?php echo $usuario;?>"><br>
    <label>senha do usuario:</label>
    <input type="text" name="senha" require id="senha" value="<?php echo $senha?>"><br>
    <label>email do usuario:</label>
    <input type="email" name="email" require id="email" value="<?php echo $email ?>"><br>
    <button>confirmar</button>
  </div>  <!-- box -->
</form>
</body>
</html>