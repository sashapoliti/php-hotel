<?php
include __DIR__ . "/Controllers/auth.php";
include __DIR__ . "/Models/hotels.php";
include __DIR__ . "/Controllers/functions.php";

include __DIR__ . "/Views/topCode.php";
?>

    <div class="d-flex justify-content-center align-items-center">
        <form id="loginform" action="login.php" method="POST">
            <img class="mb-4" src="./images/mobile-logo.png" alt="logo" width="100">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

        </form>
    </div>

<?php
include __DIR__ . "/Views/bottomCode.php";
?>