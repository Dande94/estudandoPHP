<?php
//basicamente o PDOStatement e binds tratam os dados para evitar SQL Injections;
//conexão
$dsn = "mysql:dbname=blog2;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $id = 10;
    
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':id', $id);
    $sql -> execute();
  

    echo "Usuário Deletado com Sucesso!!";

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>