<?php
$options=getopt('u:');

$res = parse_url($options['u']);

foreach ($res as $key=>$value){
    echo $key.': '.$value. PHP_EOL;
}
