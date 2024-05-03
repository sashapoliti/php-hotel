<?php
session_start();
if (!isset($_SESSION["userId"])) {
    session_destroy();
    header("Location: login.php");
    die();
}

include __DIR__ . "/Models/hotels.php";
include __DIR__ . "/Controllers/functions.php";

include __DIR__ . "/Views/topCode.php";
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Views/main.php";
/* include __DIR__ . "/Views/footer.php"; */
include __DIR__ . "/Views/bottomCode.php";