<?php
session_start();
require_once 'config/conexaoBanco.php';
if(empty($_SESSION['loginUSer'])){
    header('Location: login&logout/login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="Author" content="Anderson Nunes">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome_tarefa" id="">
        <input type="submit" value="Anotar">
    </form>
    <br>
    <br>
    <a href="login&logout/logout.php">Sair</a>
</body>
</html>