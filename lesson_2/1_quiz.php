<?php
$answer = null;

while ($answer !== 988 && $answer !== 810 && $answer !== 740){
    $answer = (int)readline("В каком году произошло крещение Руси? Варианты ответов: 810, 988 или 740 год ");
    if($answer === 988){
        echo "Поздравляем, ответ верный!";
    }
    if( $answer === 810 || $answer === 740){
        echo "Ответ неверный";
    }
}
