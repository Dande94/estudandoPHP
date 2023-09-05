<?php 
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';
$usuarioDao = new UsuarioDaoMysql($pdo);


$name_exemplo = filter_input(INPUT_POST,'name_exemplo',FILTER_SANITIZE_SPECIAL_CHARS);
$email_exemplo = filter_input(INPUT_POST,'email_exemplo', FILTER_VALIDATE_EMAIL);

if($name_exemplo && $email_exemplo){

     if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name_exemplo);
        $novoUsuario->setEmail($email_exemplo);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit;
     }else{
        header("Location: adicionar.php");
        exit;
     }
}else{
    header("Location: adicionar.php");
    exit;
}

?>