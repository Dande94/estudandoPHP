<?php
$texto = file_get_contents('texto.txt');
echo $texto;
echo '<br>';
$texto = explode("\n" ,$texto);
$cont = count($texto);
echo "Linahs: {$cont}";
echo '<br>';
print_r(($texto));

?>
