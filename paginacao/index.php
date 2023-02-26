<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Falhou na conexão: ".$e->$getMessage;
}


//loop para 1000 registros
// for($i= 0; $i<=1000;$i++){
//     $randomTimestamp = rand(1, time()); // Gera um timestamp aleatório entre 1 e o timestamp atual
//     $randomDate = new DateTime();
//     $randomDate->setTimestamp($randomTimestamp);
//     $data_criada =  $randomDate->format('Y-m-d H:i:s'); // Exibe a data aleatória no formato 'YYYY-MM-DD HH:MM:SS'
//     $lorem ='Ai você fala o seguinte: "- Mas vocês acabaram isso?" Vou te falar: -"Não, está em andamento!" Tem obras que "vai" durar pra depois de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14... Por que é que não?';
//     $titulo = 'Titulo de ref'.$i;
//     $autor='Autor de ref'.$i;

//     $sql = "INSERT INTO posts SET titulo =:titulo ,data_criada = :data_criada, corpo = :corpo, autor = :autor";
//     $sql= $pdo->prepare($sql);
//     $sql->bindValue(':titulo',$titulo);
//     $sql->bindValue(':data_criada',$data_criada);
//     $sql->bindValue(':corpo',$lorem);
//     $sql->bindValue(':autor',$autor);
//     $sql->execute();  
// }

$qt_por_pagina = 10;

//traz a quantidade de post do banco de dados
$total=0;
$sql="SELECT COUNT(*) as c FROM posts";
$sql= $pdo->query($sql);
$sql=$sql->fetch();
$total=$sql['c'];
$paginas = $total / $qt_por_pagina;
//echo $total;
//exit;//ao aplicar o exit no meio do código ele irá parar o código naquela linha;


//percorre o banco de dados
$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){//se o 'p' lá na url existir e estiver setado:
    $pg=addslashes($_GET['p']);//o '$pg' recebe o 'p';
}

$p=($pg-1) * $qt_por_pagina;//lógica para limite de item por página;

$sql = "SELECT * FROM posts LIMIT $p,$qt_por_pagina";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $item){
        echo $item['id'].' - '.$item['titulo'].'</br>';
    }
}

echo "<hr>";
for($q=0;$q<$paginas;$q++){//loop de paginação
    echo "<a href='./?p=".($q+1)."'>[".($q+1)."]</a>";//a syntax './?' volta para mesma página
}


?>