<?php
require_once "conexaoBanco.php";
$fator = "ASC";
if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
    $ordem = addslashes($_GET['ordem']);
    $fator = addslashes($_GET['fator']);
    $sql = "SELECT * FROM usuarios ORDER BY ".$ordem." ".$fator;
    // $sql = $pdo->prepare($sql);
    // $sql -> bindValue(':ordem', $ordem);
    // $sql->execute();  
}else{
    $ordem = "";
    $sql = "SELECT * FROM usuarios";
    // $sql = $pdo->prepare($sql);
    // $sql->execute();  
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
        <select name="ordem" id="" onchange="this.form.submit()">
            <option ></option>
            <option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':'';?>>Pelo Nome</option>
            <option value="idade"<?php echo ($ordem=="idade")?'selected="selected"':'';?>>Pela Idade</option>
        </select><br><br>
        <input type="radio" name="fator" value="ASC" id="" onchange="this.form.submit()" <?php echo ($fator=="ASC")?'checked="checked"':'';?>>Crescente
        <input type="radio" name="fator" value="DESC" id="" onchange="this.form.submit()"<?php echo ($fator=="DESC")?'checked="checked"':'';?>>Decrescente
        
    </form> <br><br>
    <table>
        <thead>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <?php
          
            $sql = $pdo->query($sql);
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