<?php
session_start();
require_once 'conexaoBanco.php';
if(empty($_SESSION['mmnlogin'])){
    header("Location: login.php");
    die;
}

?>