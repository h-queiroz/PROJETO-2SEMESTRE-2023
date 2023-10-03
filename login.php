<?php
include("conexao.php");

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL corrigida com a conexão
    $sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'") or die("Erro ao selecionar");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $hashedSenha = $row['senha'];

        // Verifique a senha usando password_verify
        if (password_verify($senha, $hashedSenha)) {
            // Redirecione para a página 'painel.html'
            header("Location: painel.html");
            exit();
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        echo "Nome de usuário não encontrado.";
    }
}
?>
