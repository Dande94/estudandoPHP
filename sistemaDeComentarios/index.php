<?php
require_once "conexaoBanco.php";





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            Nome: <br>
            <input type="text" name="nome" id=""><br><br>

            Mensagem:<br>
            <textarea name="mensagem"  id="" cols="50" rows="5" placeholder="Escreva seu comentário aqui...">

            </textarea><br><br>

            <input type="submit" value="Enviar Mensagem">

        </form>
    </fieldset>
</body>
</html>
<?php

$sql = "SELECT * FROM comentario ORDER BY data_msg DESC";
$sql = $pdo -> prepare($sql);
$sql -> execute();
if($sql->rowCount() > 01){
    foreach($sql->fetchAll() as $mensagem){
        
    }
}

?>