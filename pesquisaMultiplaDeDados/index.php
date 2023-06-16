<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Multipla por Dados</title>
</head>
<body>
    <h1>Informe o CPF ou Email do Usuário</h1>
    <form action="" method="get">
        <input type="text" name="campo" placeholder="Email ou CPF" id="">
        <input type="submit" value="Pesquisar">
    </form>
    <hr>
</body>
</html>
<?php
if(!empty($_GET['campo'])){
    $campo = $_GET['campo'];

    try{
        $dsn = "mysql:dbname=pesquisa_multipla;host=127.0.0.1";
        $dbuser = "root";
        $dbpass="";
        $pdo = new PDO($dsn,$dbuser,$dbpass);
    }catch(PDOException $e){
        die($e->getMessage());
        exit;
    }

    $sql = "SELECT * FROM usuarios WHERE (email = :email) OR (cpf = :cpf)";//caso queira adicionar mais formas de buscar adicionar mais um 'OR' e a condição;
    $sql = $pdo->prepare($sql);// a variavél recebe o mesmo nome nas duas porque, funciona como uma economia de armazanagem, onde antes guarda apenas a query SQL agora passa tambem a armazenar a query e ainda se torna uma  classe do metodo PDO;
    $sql->bindValue(':email',$campo); // como $sql é estancia a Classe PDO, pode se chamar funções internas como bindValue usando a sintax ' -> ';
    $sql->bindValue(':cpf',$campo);
    $sql->execute();

    if($sql->rowCount() > 0 ){
        $sql = $sql->fetch();
        echo "Nome: ".$sql['nome'];
    }else{
        echo "Não encontrado";
    }
}
?>