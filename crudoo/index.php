<?php
include 'contato.class.php';

$contato = new Contato();//estabelecendo conexão com banco;

//adicionar
// $contato->adicionar('exemplo1@exemplo.com','Anderson Nunes');

//adicionar e atulizar (testeando o paraetro vazio);
// $contato->adicionar('exemplo2@exemplo.com');
// $contato->editar('Fulano de Tal','exemplo2@exemplo.com');

//busca do nome pelo email
// $nome = $contato->getNome('exemplo1@exemplo.com');
// echo "Nome: ".$nome;

//buscar todos os registros;
// $lista = $contato->getAll();
// print_r($lista);

//deletar 
// $contato->excluir('exemplo2@exemplo.com');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2>Contatos</h2>

    <a href="adicionar.php">[ ADICIONAR ]</a>
  <table class="table container">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $lista = $contato->getAll();
    foreach($lista as $item):
    ?>
        <tr>
            <th scope="row"><?php echo $item['id']; ?></th>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $item['id']; ?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?php echo $item['id']; ?>">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>