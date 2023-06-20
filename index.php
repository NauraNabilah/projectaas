<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="images/wikrama-logo.png" alt="Beranda" width="80px" height="auto" /></a>
                    <a class="navbar-brand" href="#"><b>SMK WIKRAMA <br>BOGOR</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Wikrama</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#carawakaf">Cara Wakaf</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#datawakaf">Data Wakaf</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://smkwikrama.sch.id/">Web Wikrama</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container my-5 shadow-sm">
            <div class="p-5 rounded">
                <div class="row">
                    <div class="col-sm-8 py-5 mx-auto" style="padding-right: 50px;">
                        <h5 style="color: gray;">Masjid Besar SMK Wikrama Bogor</h5>
                        <h1 class="display-5 fw-normal">Mari <span style="color:darkblue;">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
                        <br><br>
                        <a href="#formdonatur" class="btn btn-lg" style="background-color: #1F3984; color:white;" data-bs-toggle="modal" data-bs-target="#formdonatur">Beri Bantuan Shodaqoh</a>
                        <div class="modal fade" id="formdonatur" tabindex="-1" aria-labelledby="formdonaturlabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="formdonaturlabel">Form Donatur</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        include "formDonatur.php";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <img src="images/logo.jpg" alt="" width="60px" style="position: absolute; border-radius: 50px; margin-left: 20%; margin-top: -30px;">
                        <img src="images/masjid-1.png" class="img-fluid" alt="Masjid" width="400px" height="auto" />
                    </div>
                    <div class="bg-light rounded" style="position: absolute; margin-left: 48%; margin-top: 3%; padding:10px; width: 200px; height: 80px;">
                        <div class="row">
                            <div class="col">
                                <img src="images/daun.png" alt="" width="55px" height="auto">
                            </div>
                            <div class="col" style="margin-left: -50px;"><b>Lingkungan Terjaga</b></div>
                        </div>
                    </div>
                    <div class="bg-light rounded" style="position: absolute; margin-left: 48%; margin-top: 10%; padding:10px; width: 200px; height: 80px;">
                        <div class="row">
                            <div class="col">

                                <img src="images/kapasitas.png" alt="" width="55px" height="auto">

                            </div>
                            <div class="col" style="margin-left: -50px;"><b>Kapasitas Besar</b></div>
                        </div>
                    </div>
                    <div class="bg-light rounded" style="position: absolute; margin-left: 48%; margin-top: 17%; padding:10px; width: 200px; height: 80px;">
                        <div class="row">
                            <div class="col">
                                <img src="images/quran.png" alt="" width="50px" height="auto">
                            </div>
                            <div class="col" style="margin-left: -50px;"><b>Al-Qur'an Gratis</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-body-light p-5 rounded-top border border-light shadow">
                <div class="row">
                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Target Dana</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $target = $donatur->target();
                                                        echo "Rp." .  number_format($target); ?></h1>
                    </div>
                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Dana Terkumpul</h5>
                        <h1 class="display-5 fw-bold"> <?php
                                                        $tNom = $donatur->totalNominal();
                                                        echo "Rp." . number_format($tNom['nominal']); ?> </h1>
                    </div>
                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Donatur</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $tDon = $donatur->totalDonatur();
                                                        echo number_format($tDon); ?> Orang</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px">
                            <div class="progress-bar" style="width: <?php echo $donatur->persentase(); ?>%; background-color: #1F3984;"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <b><span style="font-size: x-large; color:darkblue;">
                                <?php echo number_format($donatur->persentase()); ?>% </span> <span style="font-size: larger; color:darkblue;">Terpenuhi</span></b>
                    </div>
                </div>
            </div>
            <div class="p-2 rounded-bottom border shadow" style="background-color: #1F3984;">
                <marquee behavior="" direction="left">
                    <b>
                        <?php
                        $listDonatur = $donatur->tampilData();

                        if (!empty($listDonatur))
                            foreach ($listDonatur as $row) {
                                echo '<span style="font-size: x-large; color:white;">' . ($row['nama_donatur']) . " - </span>";
                                echo '<span style="font-size: x-large; color:#FFF500;">' . ($row['kategori']) . " : ";
                                echo "RP." . number_format(($row['nominal_barang'])) . "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
                            }
                        ?>
                    </b>
                </marquee>
            </div>
            <div class="p-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/masjid-3.jpeg" class="d-block w-100" alt="..." style="height: 400px; object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/masjid-2.jpeg" class="d-block w-100" alt="..." style="height: 400px; object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/masjid-4.jpeg" class="d-block w-100" alt="..." style="height: 400px; object-fit: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="p-5">
                <h1><span style="color: #1F3984;">Manfaat</span> Wakaf, infaq <br>Shodaqoh </h1>
                <p style="color: #919191;">Berikut Adalah Beberapa Keutamaan Wakaf, Infaq, <br>Shodaqoh Yang Akan Anda Dapatkan.</p>
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="max-width: 16rem; min-height: 280px; margin: 20px; background-image: url(images/hati.png); background-size: 40%; background-repeat:no-repeat; background-position: right 0px bottom;">
                                    <div class="header d-flex align-items-center justify-content-center" style="margin-top: 20px; margin-left: 20px; background: rgba(31, 57, 132, 0.15); border-radius: 100px; height: 50px; width: 50px; ">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #1F3984;" width="30" height="30" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 25px;">Menjadikan Hati<br>Lebih Tenang</h5>
                                        <p class="card-text" style="color: #B2B2B2;">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="max-width: 16rem; min-height: 280px; margin: 20px; background-image: url(images/cek.png); background-size: 40%; background-repeat:no-repeat; background-position: right 0px bottom;">
                                    <div class="header" style="margin-top: 20px; margin-left: 20px">
                                        <i class="bi bi-patch-check d-flex align-items-center justify-content-center" style="font-size: 35px; color: #1F3984; background: rgba(31, 57, 132, 0.15); border-radius: 100px; height: 50px; width: 50px;"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 25px;">Terbukanya<br>Pintu Rezeki</h5>
                                        <p class="card-text" style="color: #B2B2B2;">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="max-width: 16rem; min-height: 280px; margin: 20px; background-image: url(images/aman.png); background-size: 40%; background-repeat:no-repeat; background-position: right 0px bottom;">
                                    <div class="header" style="margin-top: 20px; margin-left: 20px">
                                        <i class="bi bi-shield-fill-check d-flex align-items-center justify-content-center" style="font-size: 35px; color: #1F3984; background: rgba(31, 57, 132, 0.15); border-radius: 100px; height: 50px; width: 50px;"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 25px;">Menjauhkan Dari<br>Bahaya</h5>
                                        <p class="card-text" style="color: #B2B2B2;">Rasulullah SAW pernah bersabda:"Bsersegeralah untuk bersabda,karena musibah dan bencana tidak bisa mendahului sedekah."</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="max-width: 16rem; min-height: 280px; margin: 20px; background-image: url(images/bintang.png); background-size: 40%; background-repeat:no-repeat; background-position: right 0px bottom;">
                                    <div class="header" style="margin-top: 20px; margin-left: 20px">
                                        <i class="bi bi-stars d-flex align-items-center justify-content-center" style="font-size: 35px; color: #1F3984; background: rgba(31, 57, 132, 0.15); border-radius: 100px; height: 50px; width: 50px;"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 25px;">Pahala Yang Tak<br>Terputus</h5>
                                        <p class="card-text" style="color: #B2B2B2;">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkan dari api neraka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/cut.jpeg" alt="salam" style="margin: 20px; height: 600px; width: auto;" class="rounded">
                    </div>
                </div>
            </div>
            <div class="p-5" id="carawakaf">
                <h1><span style="color: #1F3984;">Cara Melakukan</span> Wakaf, Infaq <br> Shodaqoh.</h1>
                <p style="color: #919191;">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh untuk <br>Membantu Pembangunan Masjid Besar SMK Bogor</p>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="card shadow" style="margin: 20px; min-height: 150px;">
                            <div class="card-body">
                                <h5><span style="color: #1F3984;">01</span></h5>
                                <h5 class="card-title">Isi Form Data Diri</h5>
                                <p class="card-text" style="color: #919191;">Isikan form pengisian yang disediakan di form <br> data diri, isikan dengan data diri anda dengan <br> teliti.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card shadow" style="margin: 20px; min-height: 150px;">
                            <div class="card-body">
                                <h5><span style="color: #1F3984;">02</span></h5>
                                <h5 class="card-title">Isikan Nominal Shodaqoh</h5>
                                <p class="card-text" style="color: #919191;">Isikan nominal yang akan anda shodaqohkan, <br>pastikan isi nominal dengan seikhlasnya tanpa ada <br>paksaan apapun.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card shadow" style="margin: 20px; min-height: 150px;">
                            <div class="card-body">
                                <h5><span style="color: #1F3984;">03</span></h5>
                                <h5 class="card-title">Upload Bukti Pembayaran</h5>
                                <p class="card-text" style="color: #919191;">Pilih metode pembayaran dan upload bukti <br>pembayaranya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card shadow" style="margin: 20px; min-height: 150px;">
                            <div class="card-body">
                                <h5><span style="color: #1F3984;">04</span></h5>
                                <h5 class="card-title">Verifikasi Pembayaran</h5>
                                <p class="card-text" style="color: #919191;">Pembayaran anda akan di verifikasi oleh admin <br>dan jika terverifikasi nama anda akan tampil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5" id="datawakaf">
                <h1><span style="color: #1F3984;">Data Donatur</span> Wakaf, Infaq <br>Shodaqoh.</h1>
                <p style="color: #919191;">Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk <br>Masjid Besar SMK Wikrama Bogor</p>
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Nama Donatur</th>
                            <th scope="col">Donatur ID</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nominal/Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $listDonatur = $donatur->tampilData();

                        if (!empty($listDonatur))
                            foreach ($listDonatur as $row) {
                                echo "<tr>";
                                echo "<td>" . ($row['nama_donatur']) . "</td>";
                                echo "<td>" . ($row['donatur_id']) . "</td>";
                                echo "<td>" . ($row['paket']) . "</td>";
                                echo "<td>" . ($row['kategori']) . "</td>";
                                echo "<td>" . number_format(($row['nominal_barang'])) . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="p-5" id="gallery">
                <h1><span style="color: #1F3984;">Gallery</span> Masjid Besar SMK <br>Wikrama Bogor</h1>
                <p style="color: #919191;">Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
                <div class="row g-0">
                    <div class="col-md-4 rounded" style="padding: 20px; max-height: 600px;">
                        <img src="images/masjid-0.jpeg" class="img-fluid rounded" alt="..." style="width: 350px; height: 500px; object-fit: cover;">
                    </div>
                    <div class="col-md-4 rounded" style="padding: 20px; max-height: 600px;">
                        <img src="images/masjid-2.jpeg" class="img-fluid rounded" alt="..." style="width: 350px; height: 500px; object-fit: cover;">
                    </div>
                    <div class="col-md-4 rounded" style="padding: 20px; max-height: 600px;">
                        <img src="images/masjid-3.jpeg" class="img-fluid rounded" alt="..." style="width: 350px; height: 500px; object-fit: cover;">
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 rounded" style="padding: 20px; max-height: 600px;">
                        <img src="images/masjid-4.jpeg" class="img-fluid rounded" alt="..." style="width: 350px; height: 500px; object-fit: cover;">
                    </div>
                    <div class="col-md-4 rounded" style="padding: 20px; max-height: 600px;">
                        <img src="images/masjid-5.jpeg" class="img-fluid rounded" alt="..." style="width: 350px; height: 500px; object-fit: cover;">
                    </div>
                    <div class="col-md-4 rounded align-middle" style="padding: 20px; max-height: 600px;">
                        <div class="img-fluid rounded text-light text-center" style="background-color: darkblue; width: 350px; height: 500px; padding-top: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                            <a href="gallery.php" style="color: #FFF;">
                                <h4>Buka Gallery</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container">
            <div class="p-5" style="background-color: #1F3984;">
                <div class="row" style="color: white;">
                    <div class="col-md-3">
                        <a class="navbar-brand" href="#"><img src="images/wikrama-logo.png" alt="Beranda" width="80px" height="auto" /></a>
                        <a class="navbar-brand" href="#"><b>SMK WIKRAMA BOGOR</b></a>
                        <p>
                            <br>
                            <b>Alamat</b><br>
                            JL. Raya Wangun<br> Kelurahan Sindangsari <br> Bogor Timur 16720
                        </p>
                        <hr>
                        <p>
                            <b>Telepon</b><br>
                            0251-842411 /
                            <br>
                            082221718035 (Whatsapp)
                        </p>
                        <hr>
                        <img src="images/fb.png" alt="fbfb"> <img src="images/twt.png" alt="twt"> <img src="images/ig.png" alt="ig"> <img src="images/yt.png" alt="yt">
                    </div>
                    <div class="col-md-6" style="padding-left: 10%;">
                        <p><b>Tentang Wikrama</b></p>
                        <br>
                        <ul style="line-height: 200%;">
                            <li>Sejarah</li>
                            <li>Peraturan Sekolah</li>
                            <li>Rencana Strategi & Prestasi</li>
                            <li>Yayasan</li>
                            <li>Struktur Organisasi</li>
                            <li>Cabang</li>
                            <li>Penghargaan</li>
                            <li>Kerjasama</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Kirim Pesan</h5>
                        <form action="mailto:naurasitinabilah@smkwikrama.sch.id" method="post" enctype="text/plain">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required><br>
                            <input type="text" class="form-control" name="email" placeholder="Email" required><br>
                            <textarea class="form-control" name="pesan" placeholder="Pesan" cols="5" rows="3" required></textarea><br>
                            <input type="submit" value="Submit" class="btn" style="float: right; background-color:#FFF500;">
                        </form>

                    </div>

                </div>
            </div>
            <div class="p-3 text-center">
                <p>Copyright © 2023 - SMK Wikrama Bogor. Allright Reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>