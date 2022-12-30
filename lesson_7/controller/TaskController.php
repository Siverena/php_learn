<?php
require_once "model/Task.php";
require_once "model/TaskProvider.php";
require_once "model/User.php";

session_start();
$pdo = require 'db.php';
$pageHeader = "Задачи";
$taskProvider = new TaskProvider($pdo);
//Получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    //Перенаправим на главную если пользователь не залогинен
    header("Location: /");
    die();
}

//Сделаем метод добавления новой задачи и сохранения ее в сессии
if (isset($_POST['description'])) {
    $taskText = strip_tags($_POST['description']);var_dump($_POST);
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'markasdone') {
    $key = $_GET['key'];
    $taskProvider->markAsDone($key);
    header("Location: /?controller=tasks");
    die();
}


$tasks = $taskProvider->getUndoneList();
include "view/tasks.php";