<?php require "conexao.php";
if(!empty($_POST['email'])){
    $email = $_POST['email'];

    $sql= "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    if($sql->rowCount() > 0 ){
        $sql = $sql->fetch();
        $id = $sql['id'];
        $token = md5(time().rand(0,99999).rand(0,99999));//gerador de token com valor aleatório;
        $sql = "INSERT INTO usuarios_token SET id_user = :id_user, hash = :hash, expired_in = :experid_in";//armazena  o id do usuario para relacionar com a tabela usuario e aplica um tempo de expiração;
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_user', $id);
        $sql->bindValue(':hash', $token);
        $sql->bindValue(':experid_in', date('Y-m-d H:i', strtotime('+2 hours')));//gerador da data de expiração;
        $sql->execute();

        $link="http://localhost/b7web/EstudandoPHP/esqueciSenha/redefinir.php?token=".$token;//site de trocar senha com o token de validação;

        $msg ="Acess o seu email e clique no link pra redefinir a sua senha:<br>".$link;//link orientativo

        //estrutura de envio de email;
        $assunto = "Redefinição de senha";
        $headers =  'From: seuemail@seusite.com.br'."\r\n".
                    "X-Mailer:PHP/".phpversion();

        // mail($email,$assunto,$msg,$headers);
        echo $msg;
        exit;


    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a senha</title>
</head>
<body>
    <form action="" method="post">
        <label>Qual o seu E-mail?</label><br>
        <input type="email" name="email" id=""><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>