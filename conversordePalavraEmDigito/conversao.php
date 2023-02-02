<?php
if(isset($_POST["palavras"]) && !empty($_POST["palavras"])){
    $palavras = $_POST["palavras"];
    $arrayPalavras =explode(",",$palavras);
    print_r($arrayPalavras);
    
    $substitutas = array ("1","2","3","4","5","6","7","8","9");
    
    for($arrayPalavras as $palavra){
      
   
    }
    
}

?>