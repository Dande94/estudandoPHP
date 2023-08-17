<?php
//key_exist || array_key_exist -> mesma função, de verificação de chave em um array nomeado;
$array = [
    'nome' => 'Anderson',
    'idade' => 29,
    'Empresa' => 'GrandNunes',
    'cor' => 'Verde',
    'Profissão' => 'Programador'
];
// $array = [
//     'nome' => 'Anderson',
//     'age' => 29,
//     'Empresa' => 'GrandNunes',
//     'cor' => 'Verde',
//     'Profissão' => 'Programador'
// ];

if(key_exists('idade', $array)){
    $idade = $array['idade'];
    echo "{$idade} anos";
}else{
    echo "Dados incompátiveis";
};