<?php
// Tempo de espera em segundos
// $tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
// header("refresh: $tempoEspera");

/*
após termino do projeto ver como faz para adicionar o require de classes dentro do conexao.php;
*/
require_once 'conexao.php';
// require_once 'Classes/carros.class.php';
require_once 'Classes/reservas.class.php';

$reservas = new Reservas($pdo);
// $carros = new Carros($pdo);
/*
-quando se passa conexão do banco de dados via parametro para a classe, e na classe recebe via __construct(), se chama injeção de depedência;
- nesse caso estamos instaciando a classe inserindo a conexão dentro dela;
*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Sistema de Reservas</title>
</head>
<body>
    <h1>Reservas</h1>
    <a href="reservar.php">Reservar Carro</a>
    <br>
    <br>
    <form method="get">
        <select name="ano" id="">
            <?php for($q = date('Y'); $q >= 2000 ; $q-- ): ?>
                <option> <?php echo $q;?> </option>
            <?php endfor;?>
        </select>
        <select name="mes" id="">
            <?php for($m = 12; $m >= 1 ; $m-- ): ?>
                <option> <?php echo $m;?> </option>
            <?php endfor;?>
        </select>
        <input type="submit" value="Consultar">
    </form>
    <br>
    <?php

    if(empty($_GET['ano'])){
        exit;   //se estiver o input ano, irá para a execução do código;
    }

    $data = $_GET['ano'].'-'.$_GET['mes'];

    $dia1 = date('w', strtotime($data.'-01'));

    $dias = date('t', strtotime($data));

    $linhas = ceil(($dia1+$dias) / 7);

    $dia1 = -$dia1;

    $data_inicio =  date('Y-m-d', strtotime($dia1.'days', strtotime($data)));
    $data_fim =  date('Y-m-d', strtotime(($dia1 + ($linhas*7) - 1).'days', strtotime($data)));


    $lista = $reservas->getReservas($data_inicio , $data_fim);//enviado parametros para usar como filtragem;
    /** listagem das reservas:
     * 
     foreach($lista as $item){
         $data1 = date('d/m/Y', strtotime($item['data_inicio']));
         $data2 = date('d/m/Y', strtotime($item['data_fim']));
         //ao trazer as datas do DB vieram como string, e com 'strtotime()', foi convertido pra 'time' e depois reestruturado o formato da data com 'date('d/m/Y)';
         echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data1.' e '.$data2.'</br>';
        }
    */
    ?>  
    <hr>
    <?php
    require_once 'calendario.php';
    ?>
</body>
</html>