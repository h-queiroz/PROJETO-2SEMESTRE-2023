<?php
	include("conexao.php");

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, email, senha FROM usuarios WHERE email = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $email, $senha);
    $stmt->fetch();
    $stmt->close();

    if ($email === $email && password_verify($senha, $email)) {

        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        header("painel.html"); 
        exit();
    } else {
         echo "Nome de usuário ou senha incorretos.";
    }
}
?>