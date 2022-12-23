<?php
require_once 'model/TaskProvider.php';

$taskList = [];
$taskProvider = new TaskProvider();

if (!isset($_SESSION['user'])){
    header('Location: /');
    die();
}

if (isset($_POST['description'])) {
    $task = $taskProvider->addTask($_POST['description']);
    $_SESSION['tasks'][] = $task;
}

if (isset($_GET['action']) && $_GET['action'] === 'markasdone' && isset($_GET['key']) && key_exists((int)$_GET['key'],$_SESSION['tasks'])) {
    $key = (int)$_GET['key'];
    $_SESSION['tasks'][$key]->markAsDone();
}

if(isset($_SESSION['tasks'])){
    $tasks = $_SESSION['tasks'];
    $taskList = $taskProvider->getUndoneList($tasks);
}

require_once 'view/tasks.php';