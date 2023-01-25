<?php
//basicamente o PDOStatement e binds tratam os dados para evitar SQL Injections;
//conexão
$dsn = "mysql:dbname=blog2;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Ciclano de Tal";
    $id = 10;
    
    $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':nome', $nome);
    $sql -> bindValue(':id', $id);
    $sql -> execute();
  

    echo "Usuário Alterado com Sucesso!!";

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>