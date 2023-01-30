<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false){
    
    require_once "conexaoBanco.php";
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);
    
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql -> bindValue(':email', $email);
        $sql -> bindValue(':senha', $senha);
        $sql->execute();
    
        if($sql -> rowCount() > 0 ){
            $dado = $sql->fetch();
            // print_r($dado);
            $_SESSION['logado'] = $dado['logado'];
            header("Location: index.php");
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
    <form action="login.php" method="post">
        Email: <br>
        <input type="email" name="email" id=""> <br><br>
        Senha:<br>
        <input type="password" name="senha" id=""><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>