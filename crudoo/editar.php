<?php
include 'contato.class.php';$contato = new Contato();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $contato->getInfo($id);
    
    if(empty($info['email'])){//verificação de segurança
        header("Location: index.php");
        exit;
    }

}else{
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="container py-3">
    <h5 class="card-title">Edição</h5>
    <div class="card mb-3" style="max-width: 90%;">
        <div class="row align-items-center g-0">
            <div class="col-md-4 my-3">
                <img src="../5570173.jpg" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-8">
                 <div class="card-body">
                    <form method="POST" action="editar_submit.php">
                        <input type="hidden" name="id" value="<?php echo $info['id'];?>">
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" readonly value="<?php echo $info['email']?>" name="email" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" class="form-control" value="<?php echo $info['nome']?>" name="nome" id="">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>