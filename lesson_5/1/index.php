<?php
//1----------------
//Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка.
//Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority (int),
//isDone (bool) и обязательное user (User).
//В качества класса пользователя воспользуйтесь разработанным на уроке.
//Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).
//При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone,
//помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.
require_once 'Task.php';

$user1 = new User('jane', 'rt@rt.ru');
$task1 = new Task('Покормить кота', 1, $user1);
echo($task1->getDescription());

$task1->setDescription('Покормить всех животных');
echo($task1->getDescription());
print_r($task1);

$task1->markAsDone();
print_r($task1);

