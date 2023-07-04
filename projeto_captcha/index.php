<?php
session_start();
if(!isset($_SESSION['captcha'])){
    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;
}
// echo $n;

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $codigo = $_POST['codigo'];

    if($codigo == ($_SESSION['captcha'])){
        echo "logado com sucesso";
    }else{
         echo "Digite o código novamente";
    }
    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;
}

/*
if(!empty($_POST['codigo'])){
    $c = $_POST['codigo'];
    
    if($c == $_SESSION['captcha']){
        echo "Acertou!! <br>";
    }else{
        echo "Errou!! <br>";
        
    }
    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;
}
*/
?>
<br>
<br>
<form method="post">
    <label>E-mail</label><br>
    <input type="email" name="email" id="">
    <br>
    <label>Senha</label><br>
    <input type="password" name="senha" id="">
    <br>
    <br>
    <!-- endereçar a tag img para um aruivo php onde o mesmo irá gerar uma imagem usando a lib PHP GD -->
    <img src="imagem.php" width="100" height="50" alt=""><br>
    <input type="text" name="codigo"><br><br>
    <input type="submit" value="entrar">
</form>