<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION[''] = '';
$_SESSION[''] = '';

header('Location: /');
