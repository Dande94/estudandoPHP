<?php
session_start();
require_once 'conexao.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql= 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", MD5($senha));
    $sql->execute();
    
    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id =  $sql['id'];

        $ip = $_SERVER['REMOTE_ADDR'];

        $_SESSION['lg'] = $id;    

        $sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":ip", $ip);
        $sql->bindValue(":id", $id);
        $sql->execute();
    
        header('Location: index.php');
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
    <h1>login</h1>
    <form action="" method="post">
        <label for="">Email:</label><br>
        <input type="email" name="email" id="">
        <br>
        <br>
        <label for="">Senha:</label><br>
        <input type="password" name="senha" id="">
        <br>
        <br>
        <input type="submit" value="Entrar">

    </form>
</body>
</html>
