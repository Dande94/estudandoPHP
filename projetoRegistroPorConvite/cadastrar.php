<?php
session_start();
require_once "conexaoBanco.php";

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo -> prepare($sql);
    $sql -> bindValue(':email',$email);
    $sql -> execute();

    if($sql->rowCount() <= 0){

        $sql = "INSERT INTO usuarios SET email = :email, senha = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue(':email',$email);
        $sql -> bindValue(':senha',$senha);
        $sql -> execute();

        unset($_SESSION['logado']);
        header("Location: index.php");

    }


}


?>