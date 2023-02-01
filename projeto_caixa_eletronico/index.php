<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
    $id = $_SESSION['banco'];
    $sql = "SELECT * FROM contas WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $info = $sql->fetch();
    }else{
        header("Location: login.php");
        exit;
    }

}else{
    header("Location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
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
     tr:nth-child(even){
        background-color:#ddd;
    }

</style>
<body>
    <h1>Banco dos Dev's</h1>
    <h2>Tiular: <?php echo $info['titular']?> </h2>
    <h3>Agência: <?php echo $info['agencia']?> </h3>
    <h3>Conta: <?php echo $info['conta']?> </h3>
    <h4>Saldo: <?php echo $info['saldo']?> </h4>

    <a href="sair.php">Sair</a>
    <hr>
    <a href="add_transacao.php">Adicionar Transação</a>
    <h3>Movimentações / Extrato</h3>
    <table>
    <thead>
        <th>Data</th>
        <th>Valor</th>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM histórico WHERE id_conta = :id_conta";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':id_conta', $id);
            $sql -> execute();
            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $item){
                    ?>
                    <tr>
                        <td><?php echo date('d/m/Y H:i', strtotime($item['data_operacao']));?></td>
                        <td>
                            <?php if($item['tipo'] == '0'):?>
                                <span color="green">R$ <?php echo $item['valor'];?></span>
                            <?php else:?>    
                                <span color="tomato">R$ <?php echo $item['valor'];?></span>
                            <?php endif;?>    
                            
                        </td>
                    </tr>'
                    <?php
                }
            }
        ?>
    </tbody>
</table>

</body>
</html>