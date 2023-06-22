<?php

//valor absotulo, ou basicamente positivo;
echo abs(-4);
echo "<br>";
echo abs(-2.1);
echo "<br>";
//round, arredondamento;
echo round(2.5);
echo "<br>";
//ceil, arredonda pra cima;
echo ceil(2.4);
echo "<br>";
//round, arredonda pra baixo
echo floor(2.8);
echo "<br>";
//rand, retorna um numero aleatório entre os parametros;
echo rand(1,1000);
echo "<br>";

//exemplo com rand e array
$lista =array("Anderson", "Gisele", "Isabel", "Andrey");
$x = rand(0,3);
echo "E o sorteado é: ".$lista[$x];
echo "<br>";





?>