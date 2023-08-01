<?php
require_once 'config/conexaoBanco.php';
if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    die;
}
require_once 'classes/anuncios.class.php';
$a = new Anuncios();
if(isset($_GET['id']) && !empty($_GET['id'])){
    $a->excluirAnuncio($_GET['id']);
}
header("Location: meusAnuncios.php");
?>