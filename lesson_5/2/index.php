<?php
//2-----------------
//Реализуйте два класса: Comment и TaskService.
//Comment должен содержать свойства author (User), task (Task) и text (string).
//TaskService должен реализовывать статичный метод addComment(User, Task, text),
//добавляющий к задаче комментарий пользователя.
//Отношение между классами задачи и комментария должны быть построены по типу ассоциация,
//поэтому необходимо добавить соответствующее свойство и методы классу Task.
require_once 'Task.php';
require_once 'TaskService.php';

$user1 = new User('jane', 'rt@rt.ru');
$task1 = new Task('Покормить кота', 1, $user1);

TaskService::addComment($user1, $task1, 'и еще собаку');
TaskService::addComment($user1, $task1, 'и попугая');
TaskService::addComment($user1, $task1, 'и змею');

print_r($task1->getCommentsList());