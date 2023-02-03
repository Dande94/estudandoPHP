<?php
require "index.php";
$frase = $_POST['frase'];
$frase_invertida = strrev($frase);//função inversora de string;
echo "<br>";
echo $frase_invertida;
?>