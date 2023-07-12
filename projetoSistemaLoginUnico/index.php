<?php
session_start();
require_once 'conexao.php';

if(empty($_SESSION['lg'])){
    header('Location: login.php');
    exit;
}else{
    //veirficação do ip
    $id = $_SESSION['lg']; 
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = 'SELECT * FROM usuarios WHERE id = :id AND ip = :ip';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":ip", $ip);
    $sql->execute();

    if($sql->rowCount() == 0){//diferente de outro 'rowCount()' que verificase se é maior que '0' aqui procura a não existe pra ser true e executar o script abaixo;
        header('Location: login.php');
        exit;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Confidencial</h1>
</body>
</html>