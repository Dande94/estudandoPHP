<?php
require_once '../config/conexaoBanco.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="Author" content="Anderson Nunes">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_submit.php" method="post">
        <label for="">Email:</label><br>
        <input type="email" name="emailUser" id=""><br>
        <label for="">Senha:</label><br>
        <input type="password" name="passUser" id=""><br><br>
        <input type="submit" value="Entrar">
    </form>
<p>Ainda não tem cadastro?! <a href="../cadastros/cadastroUserForm.php"><Strong>Cadastre-se</Strong></a></p>
</body>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/notify.min.js"></script>

</html>
<?php
if(isset($_GET['retorno']) == true && $_GET['retorno'] == 2){
    echo "<script> $.notify('Login ou Senha Incorretos', 'warn'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 1){
    echo "<script> $.notify('Conta inexistente', 'error'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 7){
    echo "<script> $.notify('Cadastro Realizado com Sucesso!', 'success'); </script>";
}
?>