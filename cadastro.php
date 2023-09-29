<?php
    //conexão com o mysql
    include("conexao.php");

    //criando uma variavel com o valor cadastrado
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];

    //colocando o valor da variavel no banco de dados
    $sql="INSERT INTO usuarios (email, nome, senha)
        VALUES ('$email', '$nome', '$senha')";
    //se der certo mostrar cadastrado feito com sucesso
    if(mysqli_query($conexao, $sql)){
        echo "<h1>cadastrado feito com sucesso</h1>";
    }
    //se der errado mostrar o erro
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>