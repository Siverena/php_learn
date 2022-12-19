<?php
include_once 'user.php';
include_once 'task.php';
include_once 'comment.php';
class TaskService{

   public static function addComment(User $user,Task $task, $text){
       $task->setComment(new Comment($user, $task, $text));
   }


}