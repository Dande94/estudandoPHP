<?php
session_start();

require_once "conexaoBanco.php";

if(isset($_POST['email']) && empty($_POST['email']) == false){

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $sql = $pdo ->prepare($sql);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':senha', $senha);
    $sql->execute();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Email: <br>
        <input type="email" name="email" id=""> <br><br>
        Senha:<br>
        <input type="password" name="senha" id=""><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>