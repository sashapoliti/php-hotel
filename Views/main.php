<main class="container">
    <ul>
        <?php
        foreach ($db as $hotel) {
            echo "<li> $hotel[name] | $hotel[description] | $hotel[parking] | $hotel[vote] | $hotel[distance_to_center] </li>";
        }
        ?>
    </ul>
</main>