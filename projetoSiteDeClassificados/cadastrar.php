<?php require_once 'pages/header.php'; ?>
<main class="container">
    <h2>Cadastrar</h2>
    <?php require_once 'classes/usuario.class.php';
    $u = new Usuario();
    if (isset($_POST['nomeUser']) && !empty($_POST['nomeUser'])) {
        $nomeUser = $_POST['nomeUser'];
        $telUser = $_POST['telUser'];
        $emailUser = $_POST['emailUser'];
        $senhaUser = $_POST['senhaUser'];

        if (!empty($nomeUser) && !empty($emailUser) && !empty($senhaUser)) {
            if($u->cadastar($nomeUser, $telUser, $emailUser, $senhaUser)){
                ?>
                    <div class="alert alert-success" role="alert"><strong>Cadastrado</strong> com sucesso. <a href="login.php">Faça o Login</a></div>
                <?php
            }else{
                ?>
                    <div class="alert alert-warning" role="alert"><strong>Usuário</strong> já cadastrado. <a href="login.php">Faça o Login</a></div>
                <?php
            }
        } else {
            ?>
                <div class="alert alert-warning" role="alert">Preencha todos os campos!</div>
            <?php
        }
    }
    ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" name="nomeUser" class="form-control" id="nomeUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefone:</label>
            <input type="text" name="telUser" class="form-control" id="telUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" name="emailUser" class="form-control" id="emailUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" name="senhaUser" class="form-control" id="senhaUser">
        </div>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </form>
</main>
<?php require_once 'pages/footer.php'; ?>