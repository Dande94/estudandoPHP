<?php
session_start();
require_once "conexao.php";
require_once "classes/usuarios.class.php";

$usuarios = new Usuario($pdo);
$usuarios->setUsuario($_SESSION['logado']);

if(!isset($_SESSION['logado'])){
    header("Location: login.php");
    exit;
}


if($usuarios->temPermissao('SECRET') == false){//verifica se o usuario tem a permissão para a página secreta;
    header("Location: index.php");
    exit;
}

?>
<h1>Página Secreta</h1>