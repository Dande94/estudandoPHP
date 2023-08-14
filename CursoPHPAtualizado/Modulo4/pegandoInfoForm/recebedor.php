<?php
$nome = filter_input(INPUT_GET,'nome');
$idade = filter_input(INPUT_GET,'idade');
//filter_input(); verifica se o input foi preenchido e retorna o próprio input, caso não esteja preenchido ele retorna a vaiável como false;

if($nome){
    echo "Nome: {$nome}";
    echo "<br>";
    echo "Idade: {$idade}";
}else{
    header('Location: index.php');
    die;
}



?>