<?php
session_start();

require_once 'conexao.php';

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
        <input type="email" name="" id="">
        <br>
        <br>
        <label for="">Senha:</label><br>
        <input type="password" name="" id="">
        <br>
        <br>
        <input type="submit" value="Entrar">

    </form>
</body>
</html>