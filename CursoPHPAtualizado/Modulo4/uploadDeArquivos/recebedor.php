<?php
echo "<pre>";
print_r($_FILES);
$nome = $_FILES['arquivo']['name'];//ao usar o mesmo nome para anexar outros arquivos, o mesmo não será somando, será substituido;

move_uploaded_file($_FILES['arquivo']['tmp_name'],"arquivos/{$nome}");//mover arquivos do local temporário para dentro do sistema,2 parametros,1º onde  arquivo está, 2º onde deseja colocalo/nomeDoArquivo;

//como o arquivo é recebido
/*
Array
(
    [arquivo] => Array  : o nome do array é 'arquivo' pois é o name do input usado pa anexar o arquivo;
        (
            [name] => redirecionamento-php.webp ->nome do arquivo;
            [full_path] => redirecionamento-php.webp
            [type] => image/webp ->minetipy: como identificar a tipagem do arquivo, aqui se verifica oqual o tipo pois é confiavél ;
            [tmp_name] => C:\xampp\tmp\php1850.tmp -> onde ele está;
            [error] => 0 -> se há algum erro, como, arquivo corrompido(se 0 não há, caso 1 existe erro);
            [size] => 13854 -> tamanho do arquivo;
        )
)



 caso não mova o arquivo pra algum lugar, o mesmo será deletado após o fim da requisição;

*/