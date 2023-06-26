<?php
// Tempo de espera em segundos
$tempoEspera = 3;
// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

if(isset($_POST['nome']) && !empty($_POST['nome'])){//verificação se a varavel foi setada e nãoo está vazia;    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    require_once 'conexao.php';
    $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
    $id = $pdo->lastInsertId();

    $md5= md5($id);

    $link = 'http://www.b7web.com.r/cadasroconfirma/confirma.php?h='.$md5;

    $assunto = "Confirme seu cadastro";
    $msg = "Clique no link abaixo para confirmar seu cadastro:\r\n" .$link;
    $headers= "From: suporte@b7web.com.br"."\r\n"."X-Mailer: PHP/".phpversion();

    mail($email, $assunto, $msg, $headers);

    echo "<h2> OK! Confime seu cadastro agora. </h2>";
    exit;
}

?>
<form action="" method="post">
    <label for="">Nome</label>
    <br>
    <input type="text" name="nome" id="">
    <br>
    <br>
    <label for="">Email</label>
    <br>
    <input type="email" name="email" id="">
    <br>
    <br>
    <input type="submit" value="Enviar">


</form>