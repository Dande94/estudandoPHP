<?php
session_start();
session_unset($_SESSION['name']);
// session_destroy();//->eviat usar;

setcookie('name','',time() - 3600);

header('Location: login.php');
die;
?>