<?php
session_start();
include"conexao.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="styles/sobre.css" />
  <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <title>Bonna Dica</title>
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
      <?php
      if(isset($_SESSION['id'])){
        $usuario = $_SESSION['nome'];
        echo'<div class="login">
          <a href="perfil.php">$usuario</a>
        </div>
        <div class="cadastro">;
          <a href="deslogar.php">sair</a>;
        ';
      }else{
          echo'<div class="login">
          <a href="login.php">Entrar</a>
        </div>
        <div class="cadastro">
          <a href="cadastro.php">Criar Conta</a>';
        }
        ?>
      </div>
    </div>
  </div>
  <hr>
  </div>
 <div class="texto">
      <h1 class="sobre">Nossa História</h1>
      <p class="sobre">Em julho de 2008 um sonho concretizado, nasceu no coração e tornou solidez com poucos ddrecursos, muito esforço, trabalho e dedecação, assim com poucos recursos, trabalho e dedicação, assim  foi construida a Pizzaria Bonna Dica.com o objetivo único de conquistar o paladar e a mesa das familias. A Bonna Dica vem se aprimorando e melhorando todos os dias, oferecendo aos seus clientes pizzas preparadas com amor e carinho em cada pedaço.</p>

      <h1 class="historia">História da Pizza</h1>

      <p class="historia">A verdadeira historia da pizza ainda é um misterio, acredita-se que foram os egipcios os primeiros a criarem uma massa similar. Mas foram os italianos que deram um toque final acescentando tomate e queijo á massa no século XIX.
      
      Com a chegada dos imigrantes italianos no Brasil em 1910 trouxeram a receita da pizza italiana. Inicialmente, os brasileiros não aderiram muito bem o novo prato porém, em 1950, a pizza se torna popular em todo paí

      Hoje, a pizza é tão parte da cultura brasileira quanto italiana. A cidade de São Paulo é a segunda cidade que mais consome pizza no mundo, perdendo apenas para a cidade de Nova Iorque
      
      Para comemorar esse amor pela pizza em 1985, o dia 10 de julho foi escolhido como o dia Mundial da Pizza.
      </p>
    </div>
  <div class="direitos-autorais">
    <p>Desde 2008 oferecendo a melhor experiência em pizza!</p>
  </div>
</body>
