<?php
//array_keys || array_values -> gerar um array com chave || com o valor;
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

