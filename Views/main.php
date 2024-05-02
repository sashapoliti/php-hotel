<?php
$filteredHotels = $db;
if (isset($_GET['parking']) && $_GET['parking'] !== '') {
    $filteredHotels = array_filter($filteredHotels, function ($hotel) {
        return $hotel['parking'] == filter_var($_GET['parking'], FILTER_VALIDATE_BOOLEAN);
        ;
    });
}

if (isset($_GET['vote']) && $_GET['vote'] !== '') {
    $filteredHotels = array_filter($filteredHotels, function ($hotel) {
        return $hotel['vote'] >= $_GET['vote'];
    });
}

$template = "";
foreach ($filteredHotels as $hotel) {
    $parking = $hotel['parking'] ? 'Sì' : 'No';
    $stars = printStars($hotel['vote']);
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$parking}</td> <td>{$stars}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
}
?>

<main class="container mt-5">

    <!-- Form -->
    <section class="mb-5">
        <form method="GET">
            <div class="form-group">
                <label for="parking">Parcheggio:</label>
                <select class="form-control" id="parking" name="parking">
                    <option value="">Tutti</option>
                    <option value="true" <?= isset($_GET['parking']) && $_GET['parking'] === 'true' ? 'selected' : '' ?>>Sì
                    </option>
                    <option value="false" <?= isset($_GET['parking']) && $_GET['parking'] === 'false' ? 'selected' : '' ?>>
                        No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vote">Voto minimo:</label>
                <select class="form-control" id="vote" name="vote">
                    <option value="">Tutti</option>
                    <option value="1" <?= isset($_GET['vote']) && $_GET['vote'] === '1' ? 'selected' : '' ?>>1 stella
                    </option>
                    <option value="2" <?= isset($_GET['vote']) && $_GET['vote'] === '2' ? 'selected' : '' ?>>2 stelle
                    </option>
                    <option value="3" <?= isset($_GET['vote']) && $_GET['vote'] === '3' ? 'selected' : '' ?>>3 stelle
                    </option>
                    <option value="4" <?= isset($_GET['vote']) && $_GET['vote'] === '4' ? 'selected' : '' ?>>4 stelle
                    </option>
                    <option value="5" <?= isset($_GET['vote']) && $_GET['vote'] === '5' ? 'selected' : '' ?>>5 stelle
                    </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2 ">Filtra</button>
        </form>
    </section>

    <!-- Table -->
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?= $template ?>
            </tbody>
        </table>
    </section>
</main>