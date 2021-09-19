<?php
$date = '31-12-2020';
$array = explode("-",$date);
$newArray = array_reverse($array);
$newDate = implode(".",$newArray);
echo $newDate;
