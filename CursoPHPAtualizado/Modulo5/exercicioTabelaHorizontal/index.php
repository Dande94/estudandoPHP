<?php
$array = [
    'nome' => 'Anderson',
    'idade' => 29,
    'Empresa' => 'GrandNunes',
    'Cidade' => 'Joinville',
    'cor' => 'Verde',
    'Profissão' => 'Programador PHP'
];

print_r($array);
echo "<br>";
$chaves = array_keys($array);//pega as chaves
print_r($chaves);
echo "<br>";
$valores = array_values($array);//pega os valores;
print_r($valores);
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
            <thead>
                <?php foreach($chaves as $chave):?>
                <th><?=$chave?></th>
                <?php endforeach;?>
            </thead>
            <tr>
                <?php foreach($valores as $valor):?>
                <td><?=$valor?></td>
                <?php endforeach;?>
            </tr>
    </table>
</body>
</html>

