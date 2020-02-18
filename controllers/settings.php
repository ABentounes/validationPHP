<?php

session_start();

$_SESSION['serieCheck'] = $_POST['serieCheck'];
$_SESSION['gameCheck'] = $_POST['gameCheck'];

header('Location: ../wall.php');