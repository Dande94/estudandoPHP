<?php
$array = array();
for ($i = 0; $i < 20; $i++) {
    $array[] = rand(1, 10000);
}
print_r($array);
$maior = max($array);
echo "<br>";
echo "O maior numero e: ".$maior;