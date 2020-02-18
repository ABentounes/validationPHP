<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
$_SESSION[''] = '';

if ($_SESSION['name'] == 'Jon' && $_SESSION['password'] == '1234') {
    header('Location: /');
}else {
    header('Location:../login.php');
    session_destroy();
}


