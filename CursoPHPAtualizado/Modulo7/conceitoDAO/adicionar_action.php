<?php 
require_once 'config.php';

$name_exemplo = filter_input(INPUT_POST,'name_exemplo',FILTER_SANITIZE_SPECIAL_CHARS);
$email_exemplo = filter_input(INPUT_POST,'email_exemplo', FILTER_VALIDATE_EMAIL);

if($name_exemplo && $email_exemplo){

     
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email_exemplo);
    $sql->execute();

    if($sql->rowCount() == 0){
            $sql = "INSERT INTO usuarios (nome,email) VALUES (:nome,:email)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nome", $name_exemplo);
            $sql->bindValue(":email", $email_exemplo);
            $sql->execute();
        
            header("Location: index.php");
    }else{
        header("Location: adicionar.php");
        exit;
    }

}else{
    header("Location: adicionar.php");
    exit;
}

?>