<!DOCTYPE>
<html lang="en">
<head>
    <title>lesson 11</title>
</head>
<body>
<div id="app"><?php

    if (count($_POST) != 0) {
        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        if (empty($login) || empty($password)) {
            echo 'Введите логин и пароль';
        }
        $handle = fopen("loginsPasswords.txt", "r");
        if ($handle) {
            while (($buffer = fgets($handle)) !== false) {
                $user = explode(' ', trim($buffer));
                if ($login != $user[0]) {
                    continue;
                }
                if ($password != $user[1]) {
                    continue;
                }
                $time = date('Y-m-d H:i:s') . PHP_EOL;
                file_put_contents("VisitsUsers.txt", "Пользователь $login успешно залогинился в $time", FILE_APPEND);
                echo $login;
            }
        }
    }


?>
    <form method="post" action="">
        <label for="name">Name</label>
        <input type="text" id="name" value="" name="login">
        <br/>
        <br/>
        <label for="password">Password</label>
        <input type="text" id="password" value="" name="password">
        <br/>
        <input type="submit" value="Логин">
    </form>
</div>
</body>
</html>

