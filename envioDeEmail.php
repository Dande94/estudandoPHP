<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes(($_POST['nome']));
    $email = addslashes(($_POST['email']));
    $msg = addslashes(($_POST['msg']));

    $para = "anderson94.nunes@gmail.com";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome: ".$nome."- E-mail: ".$email."- Mensagem: ".$msg;

    //puladores de linha \r\n;
    $cabecalho = "From: dande.nunes.94@gmail.com"."\r\n".
                "Reply-To:".$email."\r\n". 
                "X-Mailer:PHP/".phpversion();

    mail($para, $assunto,$corpo,$cabecalho);
    echo "<h2>Email enviado com sucesso</h2>";
    exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Envio de Email</title>
</head>
<body class="container-sm">
<form class="col-4" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mensagem</label>
    <textarea type="text-area" class="form-control" name="msg" id="exampleInputPassword1"></textarea>
  </div>
  <button type="submit" class="btn btn-primary px-5">Enviar</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>