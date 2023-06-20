<?php
require_once "koneksi.php";
include "donatur.php";

$conn = new Koneksi;
$donatur = new Donatur($conn->DBConnect());

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $donaturid = $_POST['donaturid'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];
    $bukti = $_POST['bukti'];

    $donatur->tambahData($nama, $donaturid, $paket, $kategori, $nominal, $bukti);
    echo '<script>alert("Tambah Data Berhasil");"</script>';
}
?>

<div class="container">
    <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingNama" name="nama" placeholder="Nama" required>
                    <label for="floatingNama">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingDonaturId" name="donaturid" placeholder="Donatur ID" required>
                    <label for="floatingDonaturId">Donatur ID</label>
                </div>
                <div class="form-floating input-group mb-3">
                    <select class="form-select" id="inputGroupSelectPaket" name="paket" aria-placeholder="Pilih Paket">
                        <option value="1" selected>Paket 1</option>
                        <option value="2">Paket 2</option>
                    </select>
                </div>
                <div class="form-floating input-group mb-3">
                    <select class="form-select" id="inputGroupSelectKategori" name="kategori" aria-placeholder="Pilih Kategori">
                        <option value="Barang">Barang</option>
                        <option value="Uang" selected>Uang</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingNominal" name="nominal" placeholder="Jumlah Nominal" required>
                    <label for="floatingNominal">Jumlah Nominal</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingBukti" name="bukti" placeholder="Bukti" required>
                    <label for="floatingBukti">Upload Bukti</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="kirim">Donasikan</button>
                </div>
            </form>
        </div>
    </div>
</div>