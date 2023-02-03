<h1>Ordenador de Valores</h1>
<form action="" method="post">
    Digite os valores(separados por espaço): 
    <input type="text" name="valores" id="">
    <input type="submit" value="Enviar">
</form>
<?php
$valores = $_POST['valores'];
print_r($valores);
echo "<br><br>";
$novoArray = explode(" ",$valores);
print_r($novoArray);
echo "<br><br>";
sort($novoArray);
print_r($novoArray);
?>