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
            <br>
            <a href="votar.php?id=<?php echo $filmes['id']; ?>&voto=1"><img src="star.png" height="20"></a>
            <a href="votar.php?id=<?php echo $filmes['id']; ?>&voto=2"><img src="star.png" height="20"></a>
            <a href="votar.php?id=<?php echo $filmes['id']; ?>&voto=3"><img src="star.png" height="20"></a>
            <a href="votar.php?id=<?php echo $filmes['id']; ?>&voto=4"><img src="star.png" height="20"></a>
            <a href="votar.php?id=<?php echo $filmes['id']; ?>&voto=5"><img src="star.png" height="20"></a>



            (<?php echo $filmes['media']; ?>)

        </fieldset>
    <?php
        endforeach;
    }else{
        echo "Não há filmes cadastrados!";
    }
    ?>
</body>
</html>