<?php
$pageHeader = 'Добро пожаловать';
$username = null;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $username = $user->getUsername();
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $_SESSION['user'] = $username;
}

require_once 'view/index.php';