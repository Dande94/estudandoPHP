<?php
//pdo = conexão com banco de dados;
$dsn = "mysql:dbname=blog;host=127.0.0.1";//primeiro o tipo de banco de dados que deseja se conecta, depois o nome do banco especifico , e depois o ip do servidor '127.0.0.1' ou 'localhost';
$dbuser = "root";//usuario de acesso;(padrão do xampp)
$dbpass = "";//senha de acesso;(padrão do xampp), nesse caso senha e é vazia, mas em alguns casos pode ser 'root';

//-----------------------------------------------------------------------------------------------------------
//iniciar a lib PDO;
try{//usando o 'try' para iniciar uma aplicação que externa ao arquivo nesse caso o banco de dados;
    $pdo = new PDO($dsn, $dbuser, $dbpass);// inicia a classe(objeto) PDO que usa as variaveis de conexão como parametro;
    //echo "Conexão estabelecida com sucesso!";// mensagem de sucesso;

    $sql = "SELECT * FROM posts WHERE autor LIKE '%Nunes%'";//query de requisição para o banco de dados; com filtro de se tiver 'Nunes' é válido;
    $sql = $pdo->query($sql);//rescrevendo o comando do banco de dados com a conexão com o banco de dados;

    if($sql->rowCount() > 0){//se a pesquisa tiver mais de 0 linhas a condição foi satisfeita;
        foreach($sql->fetchAll() as $autor) {//fetchAll() irá pegar os resultados dentro de $sql e trasformrá em um array,o identifacador de desse array será '$autor';
            echo "Nome: ".$autor["autor"]." - ".$autor["titulo"]."<br>";//estrutura do resultados;
        }
    }else{//caso a pesquisa retorne 0 linhas;
        echo "Não autores Cadastrados!";//expressãodo erro;
    };


}catch(PDOException $e){//caso falhe, entrará em 'catch' que irá expressar o erro; a varivel '$e' terá nela a PDOException(ou seja qual o erro que ocorreu);
    echo "Falhou: ".$e->getMessage();//mensagem de falha;
}


?>