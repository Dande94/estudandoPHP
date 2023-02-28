<?php
require_once "conexao.php";
$h = $_GET['h'];//irá pegar o id criptografado vindo pela url;
if(!empty($h)){//caso não venha vazio;
    $pdo->query("UPDATE usuarios SET status = '1' WHERE MD5(id) = '$h'");//nesse caso como o $h vem com o id criptografado em md5 na query será comparado o $h com o id do banco de dados convertido em md5, pois md5 não pode ser restaurado;
    
    echo "<h2>Cadastro confirmado com Sucesso!!</h2>";
}