<?php
//var_dump($usersAsArray);

$filterPassword = array_filter($usersAsArray, function($user) {
    return $user;
});

