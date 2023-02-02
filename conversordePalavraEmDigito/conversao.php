<?php
require "index.php";
if(isset($_POST["palavras"]) && !empty($_POST["palavras"])){
    $palavras = $_POST["palavras"];
    $arrayPalavras =explode(",",$palavras);
    $textos = array();
    $converter = function($num) {
    switch ($num) {
        case "um":
        return "1";
        case "dois":
        return "2";
        case "tres":
        return "3";
        case "quatro":
        return "4";
        case "cinco":
        return "5";
        break;
        case "seis":
        return "6";
        break;
        case "sete":
        return "7";
        break;
        case "oito":
        return "8";
        break;
        case "nove":
        return "9";
        break;
        default:
        return "não reconhecido";
        break;
    }
    };
    // print_r($textos);
    $textos = array_map($converter, $arrayPalavras);
    $convertido = implode(",",$textos);
    echo  $convertido;
}

?>