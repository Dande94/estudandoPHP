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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Caixa Eletrônico</title>
</head>
<style>
    body{
        background: linear-gradient(30deg, rgba(162,219,111,1) 12%, rgba(86,163,134,1) 38%, rgba(35,52,37,1) 90%);
        width:100vw;
        height:100vh;
    }
    table{
        width:40%;
    }
    th{
        text-align:left;
        border-bottom:2px solid #999;
        color:#eee;
    }
    tbody>tr:nth-child(even){
        background-color:#ccc;
    }
    tbody>tr:nth-child(odd){
        background-color:#eee;
    }
    .deposito{
        color:#22B305;
    }
    .retirada{
        color:#FF3E37;
    }

</style>
<body class="container-md  my-3">
        <div class="d-flex align-items-start justify-content-between">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="vertical-aerial-shot-of-sea-waves-hitting-the-cliff.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Banco dos Dev's</h5>
                            <h6>Tiular: <?php echo $info['titular']?> </h6>
                            <h6>Agência: <?php echo $info['agencia']?> </h6>
                            <h6>Conta: <?php echo $info['conta']?> </h6>
                            <h6>Saldo: <?php echo $info['saldo']?> </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end"" >
                <a class="btn btn-outline-danger px-4 " href="sair.php">Sair</a>
             </div>
        </div>

    <!-- <hr> -->
    <div class="d-flex justify-content-between py-2">
        <h3>Movimentações / Extrato</h3>
        <a class="btn btn-outline-warning" href="add_transacao.php">Adicionar Transação</a>
    </div>
    <table class="table table-striped">
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
                            <?php if($item['tipo'] == '0') :?>
                                <span class="deposito"> R$ <?php echo $item['valor']; ?> </span>
                            <?php else: ?>    
                                <span class="retirada"> -R$ <?php echo $item['valor']; ?> </span>
                            <?php endif;?>    
                            
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>