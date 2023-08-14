<?php
$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET,'idade', FILTER_VALIDATE_INT);
//filter_input(); verifica se o input foi preenchido e retorna o próprio input, caso não esteja preenchido ele retorna a vaiável como false;

// FILTER_VALIDATE_ ; são validadores de modelo, por exemplo ->FILTER_VALIDATE_INT, será valido apenas numeros inteiros e nada a a mais;
// FILTER_SANITIZE_ ; são limpadores de input, pois removem tudo que não condiz com o input desejado, por exemplo FILTER_SANITIZE_NUMBER_INT, que irá remover qualquer coisa que não for numero inteiro, se no input for setado '29 anos' ele irá retornar apenas o '29'.

// olhar todos os modelos e adequar conforme a necessidade, pois há para todos os tipos primitivos;

if($nome && $email && $idade){
    echo "Nome: {$nome}";
    echo "<br>";
    echo "Email: {$email}";
    echo "<br>";
    echo "Idade: {$idade}";
}else{
    header('Location: index.php');
    die;
}



?>