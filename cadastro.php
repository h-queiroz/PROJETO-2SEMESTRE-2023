<?php
    //conexão com o mysql
    include("conexao.php");

    //criando uma variavel com o valor cadastrado
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    //verificando o email
    $sql = "SELECT * from usuarios where email = '$email'";
    $select = mysqli_query($conexao, $sql);
    $result = mysqli_fetch_array($select);

    //se existir outro email igual nao roda
    if($result['email'] == $email){
        echo"email ja existe ou esta vazio";
        echo $email;
    }
    //se não roda o codigo
    else {
        //criptografando a senha
        $senha=password_hash($senha, PASSWORD_DEFAULT);
        //criando o valor no banco de dados
        $sql="INSERT INTO usuarios (email, nome, senha) VALUES ('$email', '$nome', '$senha')";
        
        
        //se der certo mostrar cadastrado feito com sucesso
         if(mysqli_query($conexao, $sql)){
            echo "<h1>cadastrado feito com sucesso</h1>";
        }
        //se der errado mostrar o erro
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }
    mysqli_close($conexao);
}
?>
