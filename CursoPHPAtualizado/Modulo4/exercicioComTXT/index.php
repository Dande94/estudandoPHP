<?php 
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
if(!empty($_POST["nome"]) && $nome){
    if(file_exists('nome.txt')){
        $listaDeNome = file_get_contents('nome.txt');
        $listaDeNome .= "{$nome} \n";
        file_put_contents('nome.txt',$listaDeNome);
    }else{
        file_put_contents('nome.txt',$nome."\n");    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Novo nome:
            <br>
            <input type="text" name="nome" id="">
            <input type="submit" value="Adicionar">
        </label>
    </form>
<hr>
    <ul>
<?php 
    if(file_exists('nome.txt')){
        $pegarNomes = file_get_contents('nome.txt');
        $listarNomes = explode("\n", $pegarNomes);
        foreach($listarNomes as $nome){
            if(!empty($nome)){
                echo "<li>{$nome}</li>";
            }
        }
    }
?>
    </ul>
</body>
</html>