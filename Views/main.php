<?php
$template = "";
foreach ($db as $hotel) {
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
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
                    <option value="yes">Sì</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="stars">Voto minimo:</label>
                <select class="form-control" id="stars" name="stars">
                    <option value="">Tutti</option>
                    <option value="1">1 stella</option>
                    <option value="2">2 stelle</option>
                    <option value="3">3 stelle</option>
                    <option value="4">4 stelle</option>
                    <option value="5">5 stelle</option>
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