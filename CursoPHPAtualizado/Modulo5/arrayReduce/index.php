<?php 
$numeros = range(1,5);
function somar($subtotal, $item){//o argumento '$sobtotal' se refere ao valor que irá retorna e o que receberá alteração, e não o que está sendo passado no metodo reduce;
    $subtotal += $item;
    return $subtotal;
}
$total = array_reduce($numeros, 'somar');//função que reduz o array ao valor só;2 parametros, 1º o array, 2º a função a ser aplicada;3º parametro opcional onde seta um valor que será usado como valor incial valor padrão é '0'(zero); 
echo $total;// (1+2+3+4+5) = 15 ;
//age como um loop vendo cada valor do array e aplicando a uma formúla e reduzindo os valores;
echo "<br>";
echo "<br>";
echo "<br>";
$pessoas = [
    ['nome'=> 'Anderson', 'sexo' => 'M', 'nota'=>9],
    ['nome'=> 'Andrey', 'sexo' => 'M', 'nota'=>7],
    ['nome'=> 'Gisele', 'sexo' => 'F', 'nota'=>10],
    ['nome'=> 'Edson', 'sexo' => 'M', 'nota'=>8],
    ['nome'=> 'Isabel', 'sexo' => 'F', 'nota'=>9],
    ['nome'=> 'Mabel', 'sexo' => 'F', 'nota'=>9]
];
function contar_m($subtotal, $item){
    if($item['sexo'] === 'M'){
        $subtotal++;
    }
    return $subtotal;
}
$contar_m = array_reduce($pessoas, 'contar_m');
// $contar_m = array_reduce($pessoas, 'contar_m',2);//aqui aplicando 3º parampetro;
echo "Total de homens é: {$contar_m}";
echo "<br>";
function contar_n($subtotal, $item){
    if($item['sexo'] === 'M'){
        $subtotal += $item['nota'];
    }
    return $subtotal;
}
$contar_n = array_reduce($pessoas, 'contar_n');
echo "Total das notas dos homens é: {$contar_n}";
echo "<br>";
$media_m = $contar_n / $contar_m;
echo "A média das notas dos homens é: {$media_m}";


?>