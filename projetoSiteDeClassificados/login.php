<?php require_once 'pages/header.php'; ?>
<main class="container">
    <h2>Login</h2>
    <?php require_once 'classes/usuario.class.php';
    $u = new Usuario();
    if (isset($_POST['emailUser']) && !empty($_POST['emailUser'])) {
        $emailUser = $_POST['emailUser'];
        $senhaUser = $_POST['senhaUser'];

        if($u->loginUser($emailUser, $senhaUser)){
            ?>
                <script type="text/javascript">window.location.href="./"</script>
            <?php
        }else{
            ?>
                <div class="alert alert-danger" role="alert">Email ou Senha incompatíveis!</div>
            <?php
        }
    }
    ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" name="emailUser" class="form-control" id="emailUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" name="senhaUser" class="form-control" id="senhaUser">
        </div>
        <button type="submit" class="btn btn-outline-success">Logar</button>
    </form>
</main>
<?php require_once 'pages/footer.php'; ?>