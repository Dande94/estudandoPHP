<?php
session_start();

if(isset($_POST['resposta']) && !empty(($_POST['resposta']))){
    $n1 = $_SESSION['n1'];
    $n2 = $_SESSION['n2'];
    $op = $_SESSION['op'];
    $resposta = intval($_POST['resposta']);
    if($op == '+'){
        $calculo = $n1 + $n2;
    }else if($op == '*'){
        $calculo = $n1 * $n2;
    };
        
    if($resposta == $calculo){
        echo  "<h1>É HUMANO!</h1>";
    }else{
        echo  "<h1>NÃO É HUMANO!</h1>";
    }
}else{
    header("Location: index.php");
}
