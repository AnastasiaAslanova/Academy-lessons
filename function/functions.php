<?php
$options=getopt('l:p:');
/**
 * @throws Exception
 */
function getUsersFromFile(string $fileName): array
{
    if (!file_exists($fileName)) {
        die("Файл $fileName не существует");
    }
    $fileResource = fopen($fileName, 'r');
    if (!$fileResource) {
        die("Ошибка при открытии файла $fileName");
    }
    $fileContent = fread($fileResource, filesize($fileName));
    fclose($fileResource);
    try {
        return json_decode($fileContent, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        throw new Exception('Error by decode users info');
    }
}
function findUserData (string $login, string $password, array $users){
    $filteredUsers = array_filter($users, function($user) use ($login, $password) {
        return $login == $user['login'] && $password == $user["password"];
    });
    if (count($filteredUsers)!=0){
        echo $login. PHP_EOL;
        echo $password.PHP_EOL;
    }else{
        echo 'Пользователь не найден'.PHP_EOL;
    }
}

try {
   $users = getUsersFromFile('Users.json');
   findUserData($options['l'], $options['p'], $users);
} catch (Exception $e) {
    echo $e->getMessage();
}
