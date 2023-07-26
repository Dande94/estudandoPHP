<?php
session_start();
// Destruir todas as variáveis de sessão
unset($_SESSION['cLogin']);
// Destruir a sessão
session_destroy();
// Redirecionar para a página de login
header("Location: login.php");
die();
?>