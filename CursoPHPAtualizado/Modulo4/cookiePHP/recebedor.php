<?php
session_start();
$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET,'idade', FILTER_VALIDATE_INT);


if($nome && $email && $idade){
    $temporizacao = (time() + 86400);//agora + 86400 segundo (1 mês mais ou menos);
    setcookie('nome',$nome,$temporizacao);//setar cookie, 3 parametros, 1º nome do cookie,2º $valor, 3º quanto ele expiração;
    //lembrar de sempre setar um cookie antes de qualquer exibição de conteúdo;
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