<!DOCTYPE html> <!-- identifica que a pagina é em html  -->
<html lang="en">
  <head> <!-- esta fazendo a base da pagina  -->
    <link rel="icon" href="imgs/pizza.png" type="image/x-icon">
    <meta charset="UTF-8" /> <!-- responsavel para fazer caracterires não quebrarem  -->
    <title>Cardápio Bonnadica</title> <!-- title serve para colocar o nome da pagina-->
    <link rel="stylesheet" href="styles/contato.css" /> <!-- faz com que o css se junte ao html-->
  </head>

  <body> <!--responsavel pela estrutura da pagina, parte visual -->
    <div class="topo">
      <a href="index.php"> <img src="imgs/pizza.png" alt="logo" class="logo"> </a> </a> <!--tag a feito para fazer links, img para colocar imagem  -->

      <div class="links-lado-direito"> <!-- tag div pode ser o que você quiser  -->
        <a href="cardapio.php">Cardapio</a>
        <a href="contato.php" class="verde">Contato</a>
        <a href="sobre.php">Sobre-Nós</a>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a>
        <a class= " link-carrinho"href="carrinho.php"> <img src="imgs/carro.png" width="80px"> </a>
      </div>
    </div>
    <hr>
    <img src="imgs/motoca-estiloso.jpg" class="motoca">
    <div class="links-lado-esquerdo">
      <a target="_blank" href="https://www.instagram.com/bonnadica/"><img src="imgs/img-insta.png" alt="">instagram</a>
      <a target="_blank" href="https://www.facebook.com/pizzariabonnadica/"><img src="imgs/img-face.png" alt="">facebook </a>
      <a href="tel:+5511986024599"><img src="imgs/img-fone.png" >Clique aqui para ligar para (11) 99999-9999</a>
    </div>
  </body>
</html>
