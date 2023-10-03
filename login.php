<?php
    include"conexao.php";

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="SELECT * FROM usuarios where email = '$email' and senha = '$senha'";

    echo"$email<br>";
    echo"$senha";

    $verificar = mysqli_query($conexao, $sql);
    echo"<pre>";
    print_r($conexao);
    print_r($verificar);
    echo"</pre>";

   if (mysqli_num_rows($verificar)>0) {
    echo "login com sucesso";
}
    else{
        echo"deu erro";
    }
?>
