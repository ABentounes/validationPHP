<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];

if ($_SESSION['name'] == 'Jon' && $_SESSION['password'] == '1234') {
    $_SESSION['serieCheck'] = 'serieOn';
    $_SESSION['gameCheck'] = 'gameOn';
    header('Location: /');
}else {
    header('Location:../login.php');
    session_destroy();
}


