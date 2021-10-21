<?php
require_once 'DB/mysql.php';
require_once 'DB/UserRepository.php';
$repository = new UserRepository(MySQL::getInstance());

$user = $repository->getUserByEmail($_POST['email']);

if ($user) {
    if ($_POST['email'] == $user['email']) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        header('Location: /catalog.php');
    }
}


