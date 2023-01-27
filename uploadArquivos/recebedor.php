<?php
$arquivo = $_FILES['arquivo'];
// print_r($arquivo);
// Array ( [name] => 4038512.jpg [full_path] => 4038512.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpA0E8.tmp [error] => 0 [size] => 423812 )
if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){

    //caso envie um arquivo com mesmo nome de um já existente? ele será subtituido;

    //criado de nome aleatório
    $nomedoarquivo = md5(time().rand(0,99)).'.png';

    move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$nomedoarquivo);//recebe 2 parametros,1º o arquivo temporario e 2º onde será armazenado o mesmo;
    echo "arquivo enviado com sucesso";
}


?>