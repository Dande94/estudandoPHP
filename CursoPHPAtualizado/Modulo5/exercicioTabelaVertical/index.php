<?php
$array = [
    'nome' => 'Anderson',
    'idade' => 29,
    'Empresa' => 'GrandNunes',
    'cor' => 'Verde',
    'Profissão' => 'Programador'
];

print_r($array);
echo "<br>";
$chaves = array_keys($array);//pega as chaves
print_r($chaves);
echo "<br>";
$valor = array_values($array);//pega os valores;
print_r($valor);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'> 
            <?php foreach($array as $key => $values):?>
            <tr>
                <th><?=$key?></th>
                <td><?=$values?></td>
            </tr>
            <?php endforeach;?>
    </table>
</body>
</html>

