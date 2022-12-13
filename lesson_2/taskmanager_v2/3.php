<?php
$name = readline("Укажите Ваше имя: ");
$counter = readline("Сколько задач стоит перед вами сегодня? ");
$str = '';
$allTime = 0;

for($i=0;$i<$counter;$i++){
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = readline("Сколько примерно времени эта задача займет? ");
    $str = $str .  "- $task ({$time}ч)\n";
    $allTime += $time;
}
echo "$name, сегодня у вас запланировано $counter  задачи на день:\n 
$str
Примерное время выполнения плана = {$allTime}ч";