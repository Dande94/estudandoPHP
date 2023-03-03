<?php
    $dsn = "mysql:dbname=multi_linguagem;host=127.0.0.1";
    $dbuser="root";
    $dbpass="";
    try{
        global $pdo;
        $pdo = new PDO($dsn,$dbuser,$dbpass);
    }catch(PDOException $e){
        die($e->getMessage());
    }
        //A declaração global $PDO torna a variável $PDO globalmente acessível em todo o escopo da função em que é declarada. Isso significa que a variável $PDO poderá ser utilizada dentro da função, mesmo que ela tenha sido definida fora dela.
        // No contexto de bancos de dados, $PDO é frequentemente utilizado como uma instância da classe PDO, que é a classe padrão do PHP para conexão e manipulação de bancos de dados. Ao tornar a variável $PDO global, é possível acessá-la em outras funções do script, facilitando a reutilização de conexões de banco de dados em diferentes partes do código.
?>