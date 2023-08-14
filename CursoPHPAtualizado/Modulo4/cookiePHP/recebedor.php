<?php
session_start();
$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET,'idade', FILTER_VALIDATE_INT);


if($nome && $email && $idade){
    echo "Nome: {$nome}";
    echo "<br>";
    echo "Email: {$email}";
    echo "<br>";
    echo "Idade: {$idade}";
}else{
    $_SESSION['aviso'] = "Preencha os dados corretamente";;
    header('Location: index.php');
    die;
}



?>