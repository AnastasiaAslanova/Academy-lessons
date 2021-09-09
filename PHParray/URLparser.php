<?php

$res = parse_url($argv[1]);


foreach ($res as $key=>$value){
    echo $key.': '.$value. PHP_EOL;
}
