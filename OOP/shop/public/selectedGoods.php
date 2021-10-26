<?php
use Shop\DB\MySql;
use Shop\DB\CartRepository;
require_once __DIR__.'/../vendor/autoload.php';
$repository = new CartRepository(MySQL::getInstance());
session_start();
//var_dump($_SESSION);
//die();

if(!$repository->saveGoods($_SESSION['user_id'],$_POST['order'])){

    echo 'Ошибка сохранения товаров';
};

