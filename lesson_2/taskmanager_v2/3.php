<?php
$name = readline("Укажите Ваше имя: ");

do {
    $counter = (int)readline("Сколько задач стоит перед вами сегодня? ");
}while($counter <= 0);

$str = '';
$allTime = 0;

for($i=0;$i<$counter;$i++){
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = (int)readline("Сколько примерно времени эта задача займет? ");
    $str = $str .  "- $task ({$time}ч)\n";
    $allTime += $time;
}
echo "$name, сегодня у вас запланировано $counter  задачи на день:\n 
$str
Примерное время выполнения плана = {$allTime}ч";