<?php
session_start();

$name = filter_input(INPUT_POST, 'nome');
if($name){
    $expiracao = time() + 3600;
    $_SESSION['name'] = $name;
    setcookie('name', $name, $expiracao);
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Qual eu nome?
            <br>
            <input type="text" name="nome" id="">
        </label>
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>