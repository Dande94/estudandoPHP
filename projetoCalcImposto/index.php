<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Calculadora de Imposto</h4>
    <form action="processo.php" method="post">
        <label>Valor do Produto</label>
        <input type="number" name="valor" id="">
        <span>||</span>
        <label>Taxa de Imposto (%)</label>
        <input type="number" name="taxa" id="">
        <span>||</span>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>