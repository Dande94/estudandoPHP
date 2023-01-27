<?php
//conexão
// $dsn = "mysql:dbname=ordenador;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

$nomes = array("Khahoikou Teug","Fingair Bokucu", "Vyurond Malndîr", "Isororic Yashdeump", "Batna Duluxazu","Kahad Malvuerond", "Bigoka Loykyul", "Adanveziu Kiodo", "Azfuba Ushvaroe");
$idade = array (18,99,34,45,21,53,88,61,28);
$q=0;
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

      foreach($nomes as $nome){
        $sql = "INSERT INTO usuarios SET nome = :nome, idade = :idade";
        $sql = $pdo->prepare($sql);
        $sql -> bindValue(':nome', $nome);
        $sql -> bindValue(':idade', $idade[$q]);
        $sql->execute();
        $q++;
   }

    echo "Usuário Inserido ".$pdo->lastInsertId();

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>