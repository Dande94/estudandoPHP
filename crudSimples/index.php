<?php
require_once "conexaoBanco.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:70%;
        border: 2px solid #999;
    }
    th{
        text-align:left;
        border-bottom:2px solid #999;
    }
    span a{
        padding: 2px; 
        margim-left: 5px;
    }
    span a,
    a{
        text-decoration:none;
    }
    tr:nth-child(even){
        background-color:#ddd;
    }

</style>
<body>
    <a href="registro.php">Adicionar Novo Usuário ➕</a>
    <br>
    <br>
<table>
    <thead>
        <th>Usuário</th>
        <th>Email</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->prepare($sql);
            $sql -> execute();
            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $usuario){
                    echo '<tr>';
                    echo '<td>'.$usuario['nome'].'</td>';
                    echo '<td>'.$usuario['email'].'</td>';
                    echo '<td><span><a href="excluir.php?id='.$usuario['id'].'">Excluir</a></span><span><a href="editar.php?id='.$usuario['id'].'">Editar</a></span></td>';
                    echo '</tr>';
                }
            }
        ?>
    </tbody>
</table>
</body>
</html>