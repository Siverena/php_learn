<?php
require_once 'model/Task.php';

class TaskProvider
{
    //хранилище задач
    private array $tasks;
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * Метод возвращающий массив не выполненных задач из объекта
     * @return array
     */
    public function getUndoneList(): array
    {
        $statement = $this->pdo->prepare('SELECT description, id, isDone FROM tasks WHERE isDone = :isDone');
        $statement->execute([
            'isDone' => 0
        ]);
        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);
    }

    public function addTask(Task $task): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
        );
        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => 0
        ]);
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
     public function markAsDone($id): bool
     {
         $statement = $this->pdo->prepare(
             'UPDATE tasks SET isDone = :isDone WHERE id = :id'
         );
         return $statement->execute([
             'isDone' => 1,
             'id' => $id
         ]);
     }


}