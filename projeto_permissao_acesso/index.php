<?php
session_start();

require_once "conexao.php";
require_once "classes/usuarios.class.php";

if(!isset($_SESSION['logado'])){//verifica se o usuario está logado para ter acesso a página index
    header("Location: login.php");//se não tiver envia ele pra página de login;
    exit;//pra encerrar a execução do restante do código;
}

$usuarios = new Usuario($pdo);
$usuarios->setUsuario($_SESSION['logado']);
?>
<h3>Sistema</h3>