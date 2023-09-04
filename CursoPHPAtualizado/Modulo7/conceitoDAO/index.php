<?php 
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);//aqui envio o pdo para a construtora lá na classe;
$lista = $usuarioDao->findAll();//todos os itens do array vão ser objetos da classe Usuario;

?>
<a href="adicionar.php">Adicionar Usuário</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): //agora $item vai ser um objeto da classe Usuario ?> 
        <tr>
            <td><?= $usuario->getId();?></td>
            <td><?= $usuario->getNome();?></td>
            <td><?= $usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getId() ?>">[Editar]</a>
                <a href="excluir.php?id=<?= $usuario->getId() ?>" onclick="return confirm('Tem certeza que deseja excluir esse usuário?')">[Excluir]</a>
                <!--onclick="return confirm('Tem certeza que deseja excluir esse usuário?')" expressa um alert que espera uma confirmação para excluir  -->
            </td>
        </tr>
    <?php endforeach; ?>
</table>