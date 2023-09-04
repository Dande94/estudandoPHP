<?php 
require_once 'config.php';

$id = filter_input(INPUT_POST,'id_exemplo',FILTER_SANITIZE_NUMBER_INT);
$name_exemplo = filter_input(INPUT_POST,'name_exemplo',FILTER_SANITIZE_SPECIAL_CHARS);
$email_exemplo = filter_input(INPUT_POST,'email_exemplo', FILTER_VALIDATE_EMAIL);

if($id && $name_exemplo && $email_exemplo){
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id",$id);
    $sql->bindValue(":nome",$name_exemplo);
    $sql->bindValue(":email",$email_exemplo);
    $sql->execute();

    header('Location: index.php');
}else{
    header('Location: index.php');
    exit;
}


?>