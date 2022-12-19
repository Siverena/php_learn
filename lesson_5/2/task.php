<?php

require_once 'User.php';
require_once 'comment.php';
class Task{
    private $description;
    private $dateCreated;
    private $dateUpdated;
    private $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private array $comments = [];

    public function __construct($description, int $priority, User $user)
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->user = $user;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
        $this->isDone = false;
    }


    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();

    }

    public function markAsDone(){
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

    public function setComment(Comment $comment){
        $this->comments[] = $comment;

    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }
    public function getCommentsList(): array
    {
        $list = [];
        foreach ($this->comments as $comment) {
            $list[] = [
                "author" => $comment->getAuthor()->getUsername(),
                "text" => $comment->getText()
                ];
        }
        return $list;
    }

}