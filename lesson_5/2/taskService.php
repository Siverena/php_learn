<?php
require_once 'user.php';
require_once 'task.php';
require_once 'comment.php';
class TaskService{

   public static function addComment(User $user,Task $task, $text){
       $task->setComment(new Comment($user, $task, $text));
   }


}