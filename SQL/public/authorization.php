<?php

$dsn = "mysql:host=mysql_beetroot;port=3306;dbname=beetroot;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, 'beetroot', 'beetroot', $options);
$stmt = $pdo->prepare("SELECT * FROM beetroot.users WHERE email = :email");
$stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch();
if ($result) {
    if (password_verify($_POST['password'],$result['password'])){
        echo "Hello, {$result['name']}";
        die;
    }
}
echo 'User not found';
