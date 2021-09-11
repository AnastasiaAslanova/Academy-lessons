<?php
$users["7"] = ["name" => "Anna", "email" => "anna@test.com","lang" => "ru"];
$users["2"] = ["name" => "Anton", "email" => "anton@gmail.com","lang" => "en"];
$users["9"] = ["name" => "Roman", "email" => "roman@test.com","lang" => "ua"];
$users["4"] = ["name" => "Viktor", "email" => "viktor@gmail.com","lang" => "fr"];
$users["8"] = ["name" => "Nastya", "email" => "nastya@gmail.com","lang" => "de"];

$languages=["ru" =>"Привет","en"=>"Hello","ua"=> "Добрий день","fr"=>"Hey","de"=>"Hallo"];
$firstUser= current($users);
$lastUser= end($users);


if ( $firstUser["lang"] === $lastUser["lang"] ){
    echo $languages[$firstUser['lang']].PHP_EOL;
} else {
   echo $languages[$firstUser["lang"]].PHP_EOL;
   echo $languages[$lastUser["lang"]].PHP_EOL;
}
