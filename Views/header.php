<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img class="rounded-circle me-3 " src="./imgs/logo.png" alt="Logo">
            <h1>BnBoolean</h1>
        </div>
        <div class="d-flex align-items-center">
            <?php if (isset($_SESSION['userId'])) : ?>
            <h5 class="me-3 mb-0">Ciao, <?= $_SESSION['name'] ?></h5>
            <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
            <?php endif; ?>
        </div>
    </div>
</header>