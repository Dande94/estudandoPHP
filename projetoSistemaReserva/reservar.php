<?php
require_once 'conexao.php';
require_once 'Classes/carros.class.php';
require_once 'Classes/reservas.class.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);
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
    <form action="" method="post">
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