<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_POST['agencia']) && !empty($_POST['agencia'])){

    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = sha1(addslashes($_POST['senha']));

}else{

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <Strong>Agência:</Strong> <br>
        <input type="text" name="agencia" id=""><br><br>
        <Strong>Conta:</Strong> <br>
        <input type="text" name="conta" id=""><br><br>
        <Strong>Senha:</Strong> <br>
        <input type="password" name="senha" id=""><br><br>

        <input type="submit" value="Entrar">

    </form>
</body>
</html>