<?php
session_start();

// Destrua a sessão e redirecione para a página de inicial.
session_destroy();
header("Location: index.php");
exit();
?>