<?php
require_once 'Task.php';

class TaskProvider{
    public function getUndoneList($tasks):array{
        $taskList = [];
        foreach ($tasks as $key => $task){
            if (!$task->getIsDone()){
                $taskList[$key] = $task;
             }
        }
        return $taskList;
    }
    public function addTask(string $description): ?Task {
        return new Task($description);
    }

}
