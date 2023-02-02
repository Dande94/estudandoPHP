<?php
if(isset($_POST['n1']) &&  !empty($_POST['n1']) && isset($_POST['n2']) &&  !empty($_POST['n2'])){
    $n1 = floatval(str_replace(",",".",$_POST['n1']));
    $n2 = floatval(str_replace(",",".",$_POST['n2']));
    $operacao = $_POST['operacao'];



    if($operacao == '+'){
        $calculo = $n1 + $n2;
    }else if($operacao == '-'){
        $calculo = $n1 - $n2;
    }else if($operacao == '*'){
        $calculo = $n1 * $n2;
    }else if($operacao == '/'){
        $calculo = $n1 / $n2;
    }
    echo $n1." ".$operacao." ".$n2." = ".$calculo;
}else{
    header("Location: index.php");
}

?>