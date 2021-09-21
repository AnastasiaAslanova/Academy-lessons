<?php
$fileName = 'Users.json';
if (!file_exists($fileName)){
    die("Файл $fileName не существует");
}
$fileResource = fopen($fileName, 'r');
if(!$fileResource) {
    die("Ошибка при открытии файла $fileName");
}
$fileContent = fread($fileResource, filesize($fileName));
fclose($fileResource);

$usersAsArray = json_decode($fileContent, true);
//include_once "filterByPasswordLength.php";

