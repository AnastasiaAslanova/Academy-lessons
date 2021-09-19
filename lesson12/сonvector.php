<?php
$fileName = 'oscar_age_female.json';
if (!file_exists($fileName)){
    die("Файл $fileName не существует");
}
$fileResource= fopen($fileName,'rb');
if (!$fileResource){
    die("Ошыбка при открытии файла $fileName");
}
$fileContent =fread($fileResource, filesize($fileName));
fclose($fileResource);

$dataAsArray = json_decode($fileContent, true);

$headersCsvKey = reset($dataAsArray);
$csvFileName = 'oscar.csv';
$csvFileResource = fopen($csvFileName,'w');

fputcsv($csvFileResource, $headersCsvKey);
foreach ($dataAsArray as $item){
    fputcsv($csvFileResource, $item);
}
