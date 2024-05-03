<?php
session_start();
if (isset($_SESSION["userId"])) {
    $name = $_SESSION['name'];
    session_destroy();
} else {
    header("Location: index.php");
}

include __DIR__ . "/Views/topCode.php";
include __DIR__ . "/Views/header.php";
?>

<main class="container">
    <div class="d-flex justify-content-center align-items-center">
        <h2>Arrivederci, <?= $name ?></h2>
    </div>
</main>

<?php
include __DIR__ . "/Views/bottomCode.php";
?>