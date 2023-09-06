<?php 
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';
$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST,'id_exemplo',FILTER_SANITIZE_NUMBER_INT);
$name_exemplo = filter_input(INPUT_POST,'name_exemplo',FILTER_SANITIZE_SPECIAL_CHARS);
$email_exemplo = filter_input(INPUT_POST,'email_exemplo', FILTER_VALIDATE_EMAIL);

if($id && $name_exemplo && $email_exemplo){
    $usuario = new Usuario;
    $usuario->setId($id);
    $usuario->setNome($name_exemplo);
    $usuario->setEmail($email_exemplo);
    $usuarioDao->update($usuario);

   header('Location: index.php');
}else{
    header('Location: editar.php?id='.$id);
    exit;
}


?>