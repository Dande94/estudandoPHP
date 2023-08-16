<?php 
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

function listagemDeNomes(){
    $pegarNomes = file_get_contents('nome.txt');
    $listarNomes = explode("\n", $pegarNomes);
    return $listarNomes;
}
function verificarRepeticao($nome){
    $lista = listagemDeNomes();
    foreach($lista as $item){
        // if($item == $nome){
        //     return false;
        // }
        if(strcasecmp(trim($item), trim($nome)) === 0){
            return false;
        }
    }
    return true;
}

if($nome && !empty($_POST["nome"]) ){
    if(file_exists('nome.txt')){
        $validation = verificarRepeticao($nome);
        if($validation){
            $listaDeNome = file_get_contents('nome.txt');
            $listaDeNome .= "{$nome} \n";
            file_put_contents('nome.txt',$listaDeNome);
        }
    }else{
        file_put_contents('nome.txt',$nome."\n");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Novo nomes:
            <br>
            <input type="text" name="nome" id="">
            <input type="submit" value="Adicionar">
        </label>
    </form>
<hr>
<h3>Lista dos Nome</h3>
    <ul>
<?php 
    if(file_exists('nome.txt')){
        $nomes = listagemDeNomes();
        foreach($nomes as $nome){
            if(!empty($nome)){
                echo "<li>{$nome}</li>";
            }
        }
    }
?>
    </ul>
</body>
</html>