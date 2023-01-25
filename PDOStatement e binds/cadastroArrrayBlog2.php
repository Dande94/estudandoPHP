<?php
//conexão
$dsn = "mysql:dbname=blog3;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

$nomes = array("Khahoikou Teug","Fingair Bokucu", "Vyurond Malndîr", "Isororic Yashdeump", "Batna Duluxazu","Kahad Malvuerond", "Bigoka Loykyul", "Adanveziu Kiodo", "Azfuba Ushvaroe");

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    // $nome = "Beltrano de Tal";
    $email = "jayway@burakarda.xyz";
    $senha = md5("123456");


   foreach($nomes as $nome){
        $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql -> bindValue(':nome', $nome);
        $sql -> bindValue(':email', $email);
        $sql -> bindValue(':senha', $senha);
        $sql->execute();
   }

    echo "Usuário Inserido ".$pdo->lastInsertId();

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>