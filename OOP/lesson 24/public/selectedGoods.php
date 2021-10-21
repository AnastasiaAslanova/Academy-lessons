<?php
require_once 'DB/mysql.php';
require_once 'DB/CartRepository.php';
$repository = new CartRepository(MySQL::getInstance());
session_start();
//var_dump($_SESSION);
//die();

if(!$repository->saveGoods($_SESSION['user_id'],$_POST['order'])){

    echo 'Ошибка сохранения товаров';
};

