<?php
require_once "conexaoBanco.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:40%;
        border: 2px solid #999;
    }
    th{
        text-align:left;
        border-bottom:2px solid #999;
    }
    tbody>tr:nth-child(odd){
        background-color:#ddd;
    }

</style>
<body>
    <form action="" method="get">
        <select name="ordem" id="">
            <option ></option>
            <option value="nome">Pelo Nome</option>
            <option value="idade">Pela Idade</option>
        </select>
    </form> <br><br>
    <table>
        <thead>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            if($sql->rowCount() > 0){
             foreach($sql->fetchAll() as $usuario):
                ?>
                <tr>
                    <td><?=$usuario['nome']?> </td>
                    <td><?=$usuario['idade']?> </td>
                </tr>
                <?php
             endforeach;
            }
            ?>
        </tbody>
    </table>
</body>
</html>