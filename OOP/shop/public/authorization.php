<?php
use Shop\DB\MySql;
use Shop\DB\UserRepository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require_once __DIR__.'/../vendor/autoload.php';

$startTimer = microtime(true);

$repository = new UserRepository(MySQL::getInstance());

$user = $repository->getUserByEmail($_POST['email']);

if ($user) {
    if ($_POST['email'] == $user['email']) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        header('Location: /catalog.php');
    }
}


$time = microtime(true) - $startTimer;
$log = new Logger('log');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/test.log', Logger::WARNING));
$log->warning('index openet',['execution time'=>$time]);
