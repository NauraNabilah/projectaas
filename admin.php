<?php
require_once "koneksi.php";
include "login.php";

$conn = new Koneksi();
$user = new Login($conn->DBConnect());

if (!$user->isLoggedIn()) {
    header("location: tampilLogin.php");
}

$currentuser = $user->getUser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Masjid Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Masjid Wikrama</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Wikrama</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php?halaman=donatur">Donatur</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Setting
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">User</a></li>
                                    <li><a class="dropdown-item" href="#">Ubah Password</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3 mt-lg-0" role="search">
                            <a href="logout.php" class="btn btn-outline-success"><span class="fa fa-sign-out"></span> Logout</a>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <?php
                    if (isset($_GET['halaman']) == 'donatur') {
                        include "verifikasiDonatur.php";
                    } else {    
                        echo '<h1 class="display-5 fw-normal">Selamat Datang ' . $currentuser['username'] . '</h1>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>