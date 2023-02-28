<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome=addslashes($_POST['nome']);
    $email=addslashes($_POST['email']);
    require_once "conexao.php";
    $pdo->query("INSERT INTO usuarios SET nome='$nome', email='$email'");
    $id = $pdo->lastInsertId();//A função lastInsertId() retorna o ID do último registro inserido em uma tabela do banco de dados usando a conexão PDO (PHP Data Object) em PHP. Essa função é geralmente usada após a execução de uma instrução INSERT em uma tabela que possui uma coluna de autoincremento

    //criar um hash para servir como código de liberação;nese caso irá se basear n id do usuário;
    $md5=md5($id);
    $link= 'http://www.b7web.com.br/cadastroconfirma/confirma.php?h='.$md5;

    //normalmente se criar uma variavel para armazenar o email de envio, porém como o mesmo que é recebido será o que será enviado; então será reutilizado a variavel de recebimento;
    //estrutura que irá compor o a função mail() do php;
    $assunto="Confirme seu Cadastro";
    $msg="Clique no link abaixo para confirmar seu cadastro:\n\n".$link;
    $headers="From: anderson.nunes@exemplo.com"."\r\n"."X-Mailer: PHP/".phpversion();

    //função mail();
    mail($email, $assunto, $msg, $headers);//A função mail() do PHP é usada para enviar e-mails. Ela aceita vários parâmetros,1ºparam o endereço de e-mail do destinatário,2ºparam o assunto do e-mail,3ºparam o corpo da mensagem e 4ºparam cabeçalhos opcionais.

    echo "<h2>OK! Confirme seu Cadastro agora</h2>";//mensagem de orientação;
    exit;//para parar o programa e não mostrar o formulário novamente;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" id=""><br><br>
        <label>Email</label><br>
        <input type="text" name="email" id=""><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>