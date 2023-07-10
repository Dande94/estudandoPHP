<?php
/*
após termino do projeto ver como faz para adicionar o require de classes dentro do conexao.php;
*/
require_once 'conexao.php';
// require_once 'Classes/carros.class.php';
require_once 'Classes/reservas.class.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);
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
    <?php
    $lista = $reservas->getReservas();

    foreach($lista as $item){
            $data1 = date('d/m/Y', strtotime($item['data_inicio']));
            $data2 = date('d/m/Y', strtotime($item['data_fim']));
            //ao trazer as datas do DB vieram como string, e com 'strtotime()', foi convertido pra 'time' e depois reestruturado o formato da data com 'date('d/m/Y)';
            echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data1.' e '.$data2.'</br>';
        }
    ?>  
</body>
</html>