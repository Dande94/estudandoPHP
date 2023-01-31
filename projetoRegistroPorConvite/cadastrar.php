<?php
session_start();
require_once "conexaoBanco.php";

if(!empty($_GET['codigo'])){
    $codigo = addslashes($_GET['codigo']);
    $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo'";
    $sql =$pdo->query($sql);

    if($sql->rowcount()==0){
        header("Location: login.php");
        exit;
    }

}else{
    header("Location: login.php");
    exit;
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo -> prepare($sql);
    $sql -> bindValue(':email',$email);
    $sql -> execute();

    if($sql->rowCount() <= 0){

        $codigo = sha1(rand(0,999).rand(0,999));
        $sql = "INSERT INTO usuarios SET email = :email, senha = :senha, codigo = :codigo";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue(':email',$email);
        $sql -> bindValue(':senha',$senha);
        $sql -> bindValue(':codigo',$codigo);
        $sql -> execute();

        unset($_SESSION['logado']);
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

        <input type="submit" value="Finalizar">

    </form>
</body>
</html>