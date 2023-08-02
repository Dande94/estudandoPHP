<?php
require_once 'config/conexaoBanco.php';
if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    die;
}
require_once 'classes/anuncios.class.php';
$a = new Anuncios();
if(isset($_GET['id']) && !empty($_GET['id'])){
   $id_anuncio = $a->excluirFoto($_GET['id']);
}

if(isset($id_anuncio)){
    header("Location: editarAnuncio.php?id=".$id_anuncio);
}else{
    header("Location: meusAnuncios.php");
}

?>