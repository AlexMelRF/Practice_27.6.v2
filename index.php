<?php

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/router/routes.php";

$token = $_COOKIE['remember'] ?? NULL;
$id = $_COOKIE['id'] ?? NULL;
if ($token && $id) {
    require_once "app/db_connect.php";
    $check_user = mysqli_query($db_connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    $user = mysqli_fetch_assoc($check_user);
    if ($token == $user['token']) {
        header('Location: index.php?url=signin');
        //Finish it!
    }
}