<?php
require_once '../config/conexaoBanco.php';
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
    <form action="login_submit.php" method="post">
        <label for="">Email:</label><br>
        <input type="email" name="emailUser" id=""><br>
        <label for="">Senha:</label><br>
        <input type="password" name="passUser" id=""><br><br>
        <input type="submit" value="Entrar">
    </form>
<p>Ainda não tem cadastro?! <a href="../cadastroUserForm.php"><Strong>Cadastre-se</Strong></a></p>
</body>
</html>