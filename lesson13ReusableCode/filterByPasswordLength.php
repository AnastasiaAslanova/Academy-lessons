<?php
$filterPassword = array_filter($usersAsArray, function($user) {
    return strlen($user["password"]) >= 8;
});

