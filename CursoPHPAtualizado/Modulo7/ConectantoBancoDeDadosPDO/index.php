<?php 
$dsn = "mysql:dbname=test;host=localhost";
$user = "root";
$password = "";
$pdo = new PDO($dsn,$user,$password);

$sql = $pdo->query("SELECT * from usuarios");
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);// PDO::FETCH_ASSOC remove duplicidade e estabele associação entos dados retornados;

echo "total: ".$sql->rowCount();

echo "<pre>";
print_r(($dados));
echo "</pre>";
?>
<!-- 
SEM -> PDO::FETCH_ASSOC
Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [nome] => Anderson
            [1] => Anderson
            [email] => exemplo_1@exemplo.com
            [2] => exemplo_1@exemplo.com
        )

    [1] => Array
        (
            [id] => 2
            [0] => 2
            [nome] => Gisele
            [1] => Gisele
            [email] => exemplo_2@exemplo.com
            [2] => exemplo_2@exemplo.com
        )

)

COM -> PDO::FETCH_ASSOC
    Array
(
    [0] => Array
        (
            [id] => 1
            [nome] => Anderson
            [email] => exemplo_1@exemplo.com
        )

    [1] => Array
        (
            [id] => 2
            [nome] => Gisele
            [email] => exemplo_2@exemplo.com
        )

)
 -->