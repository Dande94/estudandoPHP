<?php
require "index.php";
$frase = $_POST['frase'];
$proc = $_POST['proc'];
$troc = $_POST['troc'];
echo '<h3> Frase antga: "'.$frase.'"</h3>';
$novaFrase = str_replace($proc, $troc,$frase);
echo '<h3> Nova frase: "'.$novaFrase.'"</h3>';
?>