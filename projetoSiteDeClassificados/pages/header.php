<?php require_once 'config/conexaoBanco.php'; require_once 'classes/usuario.class.php' ;$u = new Usuario(); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classificados</title>
    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- styles -->
</head>

<body>
    <nav class="navbar bg-dark navbar-expand-lg rounded-bottom">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">Classificados</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav text-light">
                    <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Olá, 
                                <?php $u->getNomeUser($_SESSION['cLogin']);  ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="meusAnuncios.php">Meus Anúncios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="sair.php">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="cadastrar.php">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>