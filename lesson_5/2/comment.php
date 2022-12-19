<?php
require_once 'user.php';
require_once 'task.php';

class Comment{
    private User $author;
    private Task $task;
    private string $text;

    /**
     * @param User $author
     * @param Task $task
     * @param string $text
     */
    public function __construct(User $author, Task $task, string $text){
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string{
        return $this->text;
    }

    /**
     * @return User
     */
    public function getAuthor(): User{
        return $this->author;
    }


}
