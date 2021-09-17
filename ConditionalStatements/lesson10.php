<?php
$users[] = ["name" => "Vika", "email" => "vika@test.com","lang" => "ru"];
$users[] = ["name" => "Anton", "email" => "anton@gmail.com","lang" => "en"];
$users[] = ["name" => "Roman", "email" => "roman@test.com","lang" => "ua"];
$users[] = ["name" => "Viktor", "email" => "viktor@gmail.com","lang" => "fr"];
$users[] = ["name" => "Nastya", "email" => "nastya@gmail.com","lang" => "de"];
$users[] = ["name" => "Anna", "email" => "anna@test.com","lang" => "ru"];
$users[] = ["name" => "Igor", "email" => "igor@gmail.com","lang" => "en"];
$users[] = ["name" => "Anna", "email" => "anna@test.com","lang" => "ua"];
$users[] = ["name" => "Stus", "email" => "stus@gmail.com","lang" => "fr"];
$users[] = ["name" => "Nastya", "email" => "nastya@gmail.com","lang" => "de"];
$users[] = ["name" => "Anna", "email" => "anna@test.com","lang" => "ru"];
$users[] = ["name" => "Vika", "email" => "vika@gmail.com","lang" => "en"];
$users[] = ["name" => "Anna", "email" => "anna@test.com","lang" => "ua"];
$users[] = ["name" => "Ignat", "email" => "ignat@gmail.com","lang" => "fr"];
$users[] = ["name" => "Nastya", "email" => "nastya@gmail.com","lang" => "de"];

//$count=[];
//
//foreach ($users as $user){
//    if (!isset($count[$user["name"]])) {
//        $count[$user["name"]]=0;
//    }
//    $count[$user["name"]]++;
//}
//foreach ($count as $key => $value){
//    if ($value > 1) {
//        echo 'Имя ' . $key . ' встречается ' . $value . ' раза ' . PHP_EOL;
//    }
//}
//
//$lang=[];
//foreach ($users as $user) {
//
//    if (!isset($lang[$user["lang"]])) {
//        $lang[$user["lang"]]=[];
//    }
//    $lang[$user["lang"]][] = $user;
//}
//
//var_dump($lang);

//$lastUserIndex=count($users)-1;
$revertUsers=[];
//while($lastUserIndex >=0 ){
//    $revertUsers[]=$users[$lastUserIndex];
//    $lastUserIndex--;
//}


for ($lastUserIndex=count($users)-1;$lastUserIndex>=0;$lastUserIndex--) {
    $revertUsers[]=$users[$lastUserIndex];
}
var_dump($revertUsers);
