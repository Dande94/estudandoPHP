<?php
//conexão
$dsn = "mysql:dbname=blog2;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Beltrano de Tal";
    $email = "jayway@burakarda.xyz";
    $senha = sha1("123456");


    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";//usa a mesma lógica do temaplte string
    $sql = $pdo->prepare($sql);//prepara a query pra receber o bind;
    $sql -> bindValue(':nome', $nome);//bind -> está aplicando o que está guardado nas variaveis dentro das bind setadas na query;
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':senha', $senha);
    $sql->execute();//executa a query no lugar do '$pdo->query($sql)';

    echo "Usuário Inserido ".$pdo->lastInsertId();

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>