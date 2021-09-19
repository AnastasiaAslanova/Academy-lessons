<?php
$string ='1a2b3c4b5d6e7f8g9h0';
$exitStr = preg_replace("/\d/", "", $string);
echo $exitStr.PHP_EOL;
$exitStr1 = str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], [''], $string).PHP_EOL;
echo $exitStr1;
