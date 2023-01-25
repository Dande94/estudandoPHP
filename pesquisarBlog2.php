<?php
$dsn = "mysql:dbname=blog2;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $id = 5;
    
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':id', $id);
    $sql -> execute();
  
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $resultado) {
            echo "Nome: ".$resultado["nome"]." - ".$resultado["email"]."<br>";
        }
    }else{//caso a pesquisa retorne 0 linhas;
        echo "Não há cadastros!";//expressãodo erro;
    };

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>