<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];

if ($_SESSION['name'] == 'Jon' && $_SESSION['password'] == '1234') {
    $_SESSION['imgCheck'] = 'imgOn';
    $_SESSION['descCheck'] = 'descOn';
    header('Location: /');
}else {
    header('Location:../login.php');
    session_destroy();
}


