<?php
session_start();
if (!isset($_SESSION["userId"])) {
    session_destroy();
    header("Location: login.php");
    die();
}

include __DIR__ . "/Models/hotels.php";
include __DIR__ . "/Controllers/functions.php";
$hotel = getHotelByID($db);

include __DIR__ . "/Views/topCode.php";
include __DIR__ . "/Views/header.php";
?>

<main class="container text-center ">
    <h1 class="mt-5"><?= $hotel['name'] ?></h1>
    <p>Voto: <?= printStars($hotel['vote']) ?></p>
    <img class="w-100" src="<?= $hotel['image'] ?>" alt="Immagine <?= $hotel['name'] ?>">
    <p><?= $hotel['description'] ?></p>
    <p>Parcheggio: <?= $hotel['parking'] ? 'Sì' : 'No' ?></p>    
    <a href="index.php"><button class="btn btn-primary">Torna indietro</button></a>
</main>

<?php
include __DIR__ . "/Views/bottomCode.php";
?>