<?php
require_once 'model/UserProvider.php';

session_start();
$pdo = require 'db.php'; // Подключим PDO
$error = null;
$userProvider = new UserProvider($pdo);
//действие разлогиниться
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header("Location: index.php");
    die();
}
if(isset($_SESSION['user'])) {
    header("Location: /");
    die();
}
if (isset($_GET['action']) && $_GET['action'] === 'login') {
    if (isset($_POST['username'], $_POST['password'])) {
        ['username' => $username, 'password' => $password] = $_POST;

        $user = $userProvider->getByUsernameAndPassword($username, $password);


        if ($user === null) {
            $error = 'Пользователь с указанными учетными данными не найден';
        } else {
            $_SESSION['user'] = $user;
            header("Location: /");
            die();
        }
    }
    include "view/signin.php";
}

if (isset($_GET['action']) && $_GET['action'] === 'registration') {
    if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
        ['username' => $username, 'password' => $password, 'name' => $name] = $_POST;
        $user = new User($username, $name);
        $userProvider->registerUser($user, $password);
        $_SESSION['user'] = $user;
        header("Location: /");
        die();
    }
    include "view/signup.php";
}
