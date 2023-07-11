<?php
require_once 'conexao.php';
require_once 'Classes/carros.class.php';
require_once 'Classes/reservas.class.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);

if(!empty($_POST['carro'])){
    $carro = addslashes($_POST['carro']);
    $data_inicio = explode('/',addslashes($_POST['data_inicio']));
    $data_fim = explode('/',addslashes($_POST['data_fim']));
    //datas trasformadas em arrays, para adaptar o formato padrão do DB;
    $nome_pessoa = addslashes($_POST['nome_pessoa']);

    //ajuste de datas:
    $data_inicio = $data_inicio[2].'-'.$data_inicio[1].'-'.$data_inicio[0];
    $data_fim = $data_fim[2].'-'.$data_fim[1].'-'.$data_fim[0];
    //fim ajuste de datas;

    //verificar a possibilidade de reservar:
    if($reservas->veirficarDisponibilidade($carro, $data_inicio, $data_fim)){//se verdadeiro pode reservar;
        $reservas->reservar($carro, $data_inicio, $data_fim,$nome_pessoa);
        header("Location: index.php");
        exit;
    }else{//senão envia o aviso;
        echo "Este carro já está reservado neste período.";
        //após o fim do projeto testar aqui funcionalidades do notify.js;
    }


    
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Sistema de Reservas</title>
</head>
<body>
    <h1>Adicionar Reserva</h1>
    <form method="post">
        <label for="">Carro:</label>
        <select name="carro" id="">
        <?php
            $lista = $carros->getCarros();
            foreach($lista as $carro):
        ?>
            <option value="<?php echo $carro['id']?>"><?php echo $carro['nome']?></option>
        <?php
            endforeach;
        ?>
        </select>
        <br>
        <br>
        <label for="">Data de Inicio</label><br>
        <input type="text" name="data_inicio" id="">
        <br><br>
        <label for="">Data de Fim</label><br>
        <input type="text" name="data_fim" id="">
        <br><br>
        <label for="">Nome da Pessoa:</label><br>
        <input type="text" name="nome_pessoa" id="">
        <br><br>
        <input type="submit" value="Reservar">
    </form>
</body>
</html>