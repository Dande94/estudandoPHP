<?php
require_once 'conexao.php';


$sql = "SELECT * FROM  filmes";
$sql = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $filmes):
    ?>
        <fieldset>
            <strong>
            <?php
            echo $filmes['titulo'];
            ?>
            </strong>
        </fieldset>
    <?php
        endforeach;
    }else{
        echo "Não há filmes cadastrados!";
    }
    ?>
</body>
</html>