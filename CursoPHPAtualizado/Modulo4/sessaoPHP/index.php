<?php 
session_start();
require_once 'header.php'
;
if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>
<form action="recebedor.php" method="get">
    <label for="">Nome:
        <br>
        <input type="text" name="nome" id="">
    </label>
    <br>
    <br>
    <label for="">Email:
        <br>
        <input type="text" name="email" id="">
    </label>
    <br>
    <br>
    <label for="">Idade:
        <br>
        <input type="text" name="idade" id="">
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar">

</form>
<?php require_once 'footer.php';?>