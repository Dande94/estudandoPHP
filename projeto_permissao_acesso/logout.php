<?php
// Inicialize ou restaure a sessão
session_start();

// Destrua todas as variáveis de sessão
session_unset();

// Destrua a sessão
session_destroy();

// Redirecione para a página de login ou para qualquer outra página
header("Location: login.php");
// exit();
die;
?>