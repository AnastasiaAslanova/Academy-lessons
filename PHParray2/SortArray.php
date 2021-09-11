<?php
    $users["7"] = ["name" => "Anna", "email" => "anna@test.com"];
    $users["2"] = ["name" => "Anton", "email" => "anton@gmail.com"];
    $users["9"] = ["name" => "Roman", "email" => "roman@test.com"];
    $users["4"] = ["name" => "Viktor", "email" => "viktor@gmail.com"];
    $users["8"] = ["name" => "Nastya", "email" => "nastya@gmail.com"];

$sort=count($users);
echo "Количество пользователей: $sort";
echo PHP_EOL;

krsort($users);
var_export($users);

$maxUser= current($users);
$almostMax= next($users);
var_dump($maxUser);

$minUser= end($users);
$almostMin= prev($users);
var_dump($minUser);

array_pop($users);
var_dump($users);






