<!-- documentação parra formatação de data tempo -->
<!-- https://www.php.net/manual/pt_BR/function.date -->
<!-- tempo UNIX -->
<!-- https://www.php.net/manual/pt_BR/function.time -->
<!-- criar hora -->
<!-- https://www.php.net/manual/pt_BR/function.mktime -->
<!-- String to time -->
<!-- https://www.php.net/manual/pt_BR/function.strtotime -->

<?php
// formato de data
$dataAtual = date("d/m/Y  \á\s H:i:s");//há dferença entre letra maiúsculas e minusculas;
echo $dataAtual;

echo "<br>";

$x = time();//trás o tempo em numeros extensos baseados no marco 0;
echo $x;
echo "<br>";

//strtotime() - tras um intervalode tempo;
echo strtotime ("+2 days", 0);// mais 2 dias depois do marco 0; também em nmero extenso;
echo "<br>";

$dataProxima = date('d/m/Y',strtotime("+10 days"));// date() trás uma data, 1º parametro é o formato, no 2º parametro é onde se baseia a data, o strtotima disse que é a data atua + 10 dias;
// $dataProxima = date('d/m/Y',strtotime("+10 days" , 0));//já nesse exemplo segue o mesmo contexto porém no strtotime se baseia no tempo 0, sendo o tempo 0 =  01/01/1970 e + 10 dias dias 11/01/1970;
echo $dataProxima;
echo "<br>";


?>