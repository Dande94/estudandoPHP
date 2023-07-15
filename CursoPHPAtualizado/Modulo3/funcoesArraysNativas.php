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
echo "<hr>";
echo "<br>";
array_pop($numeros);//metodo que apaga o ultimo item do array, o parametro é próprio array, e é alterado, não precisando ser alocado em outro array;
print_r($numeros);
echo "<br>";
array_shift($numeros);//metodo que apaga o primeiro item do array, o parametro é próprio array, e é alterado, não precisando ser alocado em outro array;
print_r($numeros);
echo "<br>";
echo "<br>";
$numeros = [10,20,24,91,18];
//metodo que procura ao no array, e retorna true or false, com 2 parametros, 1º o que procura, 2º onde procurar;
if(in_array(90, $numeros)){
    echo "Existe";
}else{
    echo "Não Existe";
}
echo "<br>";
if(in_array(91, $numeros)){
    echo "Existe";
}else{
    echo "Não Existe";
}

echo "<br>";
echo "<br>";
//metodo que procura ao no array, e diz a posição, com 2 parametros, 1º o que procura, 2º onde procurar;
$pos =  array_search(91, $numeros);
echo "<br>";
echo $pos;
$pos2 =  array_search(15, $numeros);
echo "<br>";
echo $pos2;
echo "<br>";
echo "<br>";
sort($numeros);//metodo que ordena(crescente) os valores de um array;
print_r($numeros);
echo "<br>";
rsort($numeros);//metodo que ordena(decrescente) os valores de um array;
print_r($numeros);
echo "<br>";
$numeros = [10,20,24,91,18];
asort($numeros);//metodo que ordena(crescente) os valores de um array, sem alterar a chave;
print_r($numeros);
echo "<br>";
arsort($numeros);//metodo que ordena(decrescente) os valores de um array, sem alterar a chave;
print_r($numeros);
echo "<br>";
echo "<br>";
//transforma array em string;
$nomes = implode('| ', $provistas);//2 parametros, 1º o que irá juntar esse itens do array, 2º o array;(é o contrário do 'explode()');
echo $nomes;





?>