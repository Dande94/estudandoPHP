<?php
require_once 'conexao.php';
$sexos = array(
    0 => 'Masculino',
    1 => 'Feminino'
);

if(isset($_POST['sexo']) && $_POST['sexo'] !== ''){
    $sexo = $_POST['sexo'];
    $sql = "SELECT * FROM usuarios WHERE genero = :sexo";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":sexo", $sexo);
    $sql->execute();
}else{
    $sexo = '';
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
}

?>
<form  method="post">
    <select name="sexo" id="">
        <option></option>
        
        <option value="0" <?php echo ($sexo == 0) ? 'selected="selected"':'';?> >Masculino</option>
        <option value="1" <?php echo ($sexo == 1) ? 'selected="selected"': ''; ?> >Feminino</option>
    </select>
    <input type="submit" value="Filtrar">
</form>
<table border="1" width="100%" >
    <thead>
        <th>id</th>
        <th>Nome</th>
        <th>Genero</th>
        <th>Idade</th>
        </thead>
        <tbody>
        <?php
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario):
                ?>
                <tr>
                    <td><?php echo $usuario['id']?></td>
                    <td><?php echo $usuario['nome']?></td>
                    <td><?php echo $sexos[$usuario['genero']]?></td>
                    <td><?php echo $usuario['idade']?></td>
                </tr>
                <?php
            endforeach;
        }
        ?>
        </tbody>
</table>