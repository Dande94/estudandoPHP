<?php
session_start();
require_once 'config/conexaoBanco.php';
if(empty($_SESSION['loginUSer'])){
    header('Location: login&logout/login.php');
    die;
}
$id_user = $_SESSION['loginUSer'];
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
    <form action="tarefas/tarefa_submit.php" method="post">
        <input type="hidden" name="id_user" value="<?=$_SESSION['loginUSer']?>">
        <input type="text" name="nome_tarefa" id="">
        <input type="submit" value="Anotar">
    </form>
    <br>
    <br>
    <a href="login&logout/logout.php">Sair</a>
</body>
</html>