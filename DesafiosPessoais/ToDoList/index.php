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
// print_r($tarefa);
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
            <?php
            if(empty($tarefa)){
                echo "<tr><td>Não há tarefas</td></tr>";
            }else{
             foreach($tarefa as $item):?>
                <tr>
                    <td>
                    <?=$item['tarefa']?>
                    </td>
                    <td>
                        <a href="tarefas/excluir_tarefa.php?id=<?php echo $item['id'];?>">Feito</a>
                    </td>
                </tr>
            <?php endforeach;}?>
        </tbody>
    </table>
    <br>
    <a href="login&logout/logout.php">Sair</a>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/notify.min.js"></script>
</body>
</html>
<?php
if(isset($_GET['retorno']) == true && $_GET['retorno'] == 3){
    echo "<script> $.notify('Tarefa Adicionada a lista!', 'success'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 4){
    echo "<script> $.notify('Houve um problema ao tentar registrar uma tarefa!', 'warn'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 5){
    echo "<script> $.notify('Tarefa Concluída!', 'success'); </script>";
}elseif(isset($_GET['retorno']) == true && $_GET['retorno'] == 6){
    echo "<script> $.notify('Houve um problema ao descartar esse tarefa da lista!', 'warn'); </script>";
}
?>