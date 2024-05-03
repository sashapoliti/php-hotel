<?php
session_start();
if (isset($_SESSION['userId'])) {
    header('Location: index.php');
    die();
}

include __DIR__ . "/../Models/user.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $authenticated = array_filter($users, function ($user) {
        return $user['email'] === $_POST['email'] && $user['password'] === $_POST['password'];
    });

    if (count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
    } else {
        header('Location: login.php?error=1');
    }
}