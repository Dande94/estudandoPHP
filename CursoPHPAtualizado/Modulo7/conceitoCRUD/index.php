<?php 
require_once 'config.php';
$lista =[];
$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}else{
    
}

?>
<a href="adicionar.php">Adicionar Usuário</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['email'] ?></td>
            <td>
                <a href="editar.php?id=<?= $item['id'] ?>">[Editar]</a>
                <a href="excluir.php?id=<?= $item['id'] ?>">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>