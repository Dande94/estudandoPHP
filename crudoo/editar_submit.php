<?php
include 'contato.class.php';$contato = new Contato();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    // echo $nome;
    // echo $email;
    // echo $id;
    if(!empty($email)){
        $contato->editarTotal($email, $nome, $id);
    }
    // header("Location: index.php");
}





?>