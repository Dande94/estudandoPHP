<?php
include 'contato.class.php';$contato = new Contato();

if(!empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato->adicionar($email, $nome);

    header("Location: index.php");
}



//cuidado ao deixa linha sobrando após o fechameno do php, pois o navegador tentará renderizar;
?>