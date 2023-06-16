<?php
require 'index.php';
// print_r($valores);
if(isset($_POST['valores']) && !empty($_POST['valores'])){
    $valores = $_POST['valores'];
    $novoArray = explode(" ",$valores);
    echo "<pre>";
        print_r($novoArray);
        echo "</pre>";
        sort($novoArray);
        echo "<pre>";
        print_r($novoArray);
        echo "</pre>";
}
?>
