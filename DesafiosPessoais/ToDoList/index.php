<?php
session_start();
require_once 'classes/tarefa.class.php';
$tarefas = new Tarefa();
if(empty($_SESSION['loginUSer'])){
    header('Location: login&logout/login.php');
    die;
}
$id_user = $_SESSION['loginUSer'];
$tarefa = $tarefas->listarTarefas($id_user);
print_r($tarefa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="Author" content="Anderson Nunes">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas/tarefa_submit.php" method="post">
        <input type="hidden" name="id_user" value="<?=$_SESSION['loginUSer']?>">
        <input type="text" name="nome_tarefa" id="">
        <input type="submit" value="Anotar">
    </form>
    <br>
    <table width="50%">
        <thead>
            <th align="left">
                Tarefa
            </th>
            <th align="left">
                Ações
            </th>
        </thead>
        <tbody>
            <?php foreach($tarefa as $item):?>
                <tr>
                    <td>
                    <?=$item['tarefa']?>
                    </td>
                    <td>
                        <a href="tarefas/excluir_tarefa.php">Feito</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <br>
    <a href="login&logout/logout.php">Sair</a>
</body>
</html>