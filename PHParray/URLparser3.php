<?php
$options=getopt('u:');

$res = parse_url($options['u']);

foreach ($res as $key=>$value) {

    if ($key== 'query'){
        parse_str($value, $output);
        $parts=[];
        foreach ($output as $okey=>$ovalue){
            $parts[]= "'$okey' => '$ovalue'";
        }
        $value = '['.implode(', ',$parts). ']';
    }
    echo $key . ': ' . $value . PHP_EOL;
}
