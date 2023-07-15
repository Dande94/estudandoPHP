<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$lista = [
    'nome1',
    'nome2',
    'nome3',
    'nome4',
    'nome5'
];
echo "TOTAL: ".count($lista);
echo "<br>";
$provistas = [
    'Anderson',
    'Andrey',
    'Gisele',
    'Isabel',
    'Mabel',
    'Edson',
    'Teresinha'
];
$aprovados = [
    'Anderson',
    'Gisele',
    'Isabel',
    'Mabel'
];
print_r($provistas);
echo "<br>";
print_r($aprovados);
echo "<br>";
//metodo que captura diferença entre arrays, 2 parametros, 1º array completo, 2º array de comparação;
$sobra = array_diff($provistas,$aprovados);
print_r($sobra);
echo "<br>";
echo "<br>";
//metodo de filtrar algo no array. tem 2 parametros, 1º o array a ser filtrado, 2º um callback(uma função de retorno);
$numeros = [10,20,24,91,18];

$filtrados = array_filter($numeros, function($item){//só serão permaneceram os numeros que receberem true
    if($item < 30){
        return true;
    }else{
        return false;
    }
});
print_r($filtrados);

echo "<br>";
echo "<br>";
$dobrados = array_map(function($item){//esse metodo aqui aplica uma função em cada item do array, 2 parametros, 1º a função, 2º o array;
    return $item * 2;
}, $numeros);

print_r($dobrados);









?>