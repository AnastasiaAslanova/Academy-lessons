<?php
return [
    'db' => [
        'dsn' => 'mysql:host=mysql_beetroot;port=3306;dbname=beetroot;charset=utf8',
        'user' => 'beetroot',
        'password' => 'beetroot',
        'options' =>  [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ],

    ]
];
