<?php
session_start();
// Destruir todas as variáveis de sessão
unset($_SESSION['loginUSer']);
// Destruir a sessão
session_destroy();
// Redirecionar para a página de login
header("Location: login.php");
die();
?>
