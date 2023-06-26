<?php
// Tempo de espera em segundos
$tempoEspera = 3;
// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

try{
    //conexão com o banco
    $dsn="mysql:dbname=blog;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    //caso de erro com a coneçãoo expressar mensagem
    die($e->getMessage());
}

//contador de registros:
// $total=0;//desabilitado, por que julguei inútil:
$sql = "SELECT COUNT(*) as c FROM posts";//o nome da contagem será 'c';
$sql = $pdo->query($sql);///executa a query;
$sql = $sql->fetch();//gera uma array com o valor retornado;
$total=$sql['c'];
// echo $total;
// exit;
$paginas = $total / 10;// irá gerar a quantidad de páginas que irá comportar a páginação;

// $p =0;//desabilitado, por que julguei inútil:
$pg =1;//valor padrão para referenciar a paginação;
if(isset($_GET['p']) && !empty($_GET['p'])){//identifica a paginação caso tenha sido alterada, pegando o valor pelo link da página;
    $pg = addslashes($_GET['p']);
}

$p = ($pg - 1)  * 10;//o valor gerado aqui irá como limite minimo para consulta na query;

//$sql = "SELECT * FROM posts";//trará todos os registro do banco de dados;
$sql = "SELECT * FROM posts LIMIT $p, 10";
$sql = $pdo->query($sql);//executa o comando acima, foi usado query pois se trata de uma consulta simples, sem variavéis para dinamizar a consulta, tornando a mesma mais performática;

if($sql->rowCount() > 0){//contagem de informações por linha que foram trazidas;
    foreach($sql->fetchAll() as $item){
        echo $item['id'].'-'.$item['titulo'].'</br>';
    }
}

echo "<hr>";
for($q=0; $q<$paginas; $q++){
    echo'<a href="./?p='.($q+1).'">['.($q+1).']</a>';//expressar na tela a paginação 
}
// echo "Total de páginas: ".$paginas;

?>
