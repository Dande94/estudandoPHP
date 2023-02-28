<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome=addslashes($_POST['nome']);
    $email=addslashes($_POST['email']);
    require_once "conexao.php";
    
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
        <label>Nome</label><br>
        <input type="text" name="nome" id=""><br><br>
        <label>Email</label><br>
        <input type="text" name="email" id=""><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>