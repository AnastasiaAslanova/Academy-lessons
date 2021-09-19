<?php
$password = 1234125555678;
settype($password, "string");
if (strlen($password) < 7 || strlen($password) > 12){
    echo 'Пароль корректный';
} else{
    echo 'Придумайте пароль от 7 до 12 символов';
}

