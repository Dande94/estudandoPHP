<?php
session_start();
require_once "conexaoBanco.php";

if(!empty($_POST['email'])){

    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);
    
    $sql = "SELECT id FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':senha', $senha);
    $sql->execute();
    
        if($sql -> rowCount() > 0 ){
            $dado = $sql->fetch();
            // print_r($dado);
            $_SESSION['logado'] = $dado['id'];
            header("Location: index.php");
            exit;
        }
    

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
        E-mail: <br>
        <input type="email" name="email" id=""><br><br>
        Senha: <br>
        <input type="password" name="senha" id=""> <br><br>

        <input type="submit" value="Entra"><span><a href="">Cadastrar</a></span> 

    </form>
</body>
</html>