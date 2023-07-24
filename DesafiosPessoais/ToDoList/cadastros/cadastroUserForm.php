<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="Author" content="Anderson Nunes">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cadastroUser_submit.php" method="POST">
        <label for="">Nome:</label><br>
        <input type="text" name="nomeUser" id=""><br>
        <label for="">Email:</label><br>
        <input type="email" name="emailUser" id=""><br>
        <label for="">Senha:</label><br>
        <input type="password" name="passUser" id=""><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/notify.min.js"></script>
</body>
</html>
<?php
if(isset($_GET['retorno']) == true && $_GET['retorno'] == 8){
    echo "<script> $.notify('Usuário já cadastrado!', 'warn'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 9){
    echo "<script> $.notify('Houve um problema ao cadastrar um novo usuário!', 'warn'); </script>";
}
?>