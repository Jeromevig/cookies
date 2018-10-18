<?php
session_start();

if (!empty($_SESSION['name'])) {
    session_destroy();
    header('Location: login.php');
}
if (empty($_SESSION['name'])) {
    $_SESSION['name'] = $_POST['name'];
    header('Location: index.php');
}