<?php
$texto = "Anderson Nunes";
file_put_contents('nome.txt', $texto);
echo "Arquivo criado com sucesso";
$textolorem = file_get_contents('../lendoArquivos/texto.txt');
$textolorem .= "\n - {$texto}";
file_put_contents('textoLorem.txt', $textolorem);


?>