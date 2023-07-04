<?php 
/*
sisteminha de lixeira ou limbo:
status:
0 - inativo;
1 - ativo;
*/
require_once 'conexao.php';

?>
<h2>Lista de Usuários</h2>
<table width="50%">
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php 
        $sql = "SELECT * FROM usuarios WHERE status ='1'";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario):
           ?>
           <tr>
            <td align="center" > <?php echo $usuario['nome'] ?> </td>
            <td align="center" > <?php echo $usuario['email'] ?> </td>
            <td align="center">
                <a href="excluir.php?id=<?php echo $usuario['id']; ?>">Excluir</a>
            </td>
           </tr>
       <?php 
       endforeach;
    }
        ?>
    </tbody>
</table>