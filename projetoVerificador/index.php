<?php
session_start();

$n1 = rand(0,10);
$n2 = rand(0,10);
$operacao = array("+","*");
$selecionaOperaco = array_rand($operacao);
$op = $operacao[$selecionaOperaco];

$_SESSION['n1'] = $n1;
$_SESSION['n2'] = $n2;
$_SESSION['op'] = $op;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de Humano</h1>
    <form action="verificador.php" method="POST">
        <span><?php echo $n1;?></span>
        <span><?php echo $op; ?></span>
        <span><?php echo $n2;?></span>
        <span> = </span>
        <input type="number" name="resposta" id="">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
