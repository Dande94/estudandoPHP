<?php require_once 'conexao.php';
if(!empty($_POST['email'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id = $sql['id'];

        $token = md5(time().rand(0,99999).rand(0,9999));

        $sql = "INSERT INTO usuarios_token (id_user, hash, expired_in) VALUES(:id_user, :hash, :expired_in)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_user', $id);
        $sql->bindValue(':hash', $token);
        $sql->bindValue('expired_in', date('Y-m-d', strtotime('+2 minutes')));
        $sql->execute();

        
        $link="http://localhost/b7web/EstudandoPHP/esqueciSenha/esqueciSenha(revisao)/redefinir.php?token=".$token;//site de trocar senha com o token de validação;

        echo '<script>alert("Clique no link para redefinir sua senha:"'.$link.')</script>';

        $mensagem = "Clique no link para redefinir sua senha:".$link;
        $assunto = "Redifinação de senha";
        $headers = 'From: seuemail@exemplo.com'."\r\n".'X-MAiler: PHP/'.phpversion();
        mail($email, $assunto, $mensagem, $headers);

    }
}
?>
<form action="" method="post">
    <label for="">Qual seu email?</label><br>
    <input type="email" name="email" id="">
    <br><br>
    <input type="submit" value="Enviar Solicitação">
</form>