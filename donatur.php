<?php

class Donatur
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    Public $targetDana = 40000000;

    public function target()
    {
        return $this->targetDana;
    }

    public function tambahData($namaDonatur, $donaturId, $paket, $kategori, $nominalBarang, $bukti)
    {
        $sql = "INSERT INTO donatur(nama_donatur, donatur_id, paket, kategori, nominal_barang, bukti, verifikasi) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(array($namaDonatur, $donaturId, $paket, $kategori, $nominalBarang, $bukti, 0));
    }

    public function tampilData()
    {
        $sql = $this->conn->prepare("SELECT * FROM donatur");
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    public function verifikasi($id, $verifikasi) {
        $sql = "UPDATE donatur SET verifikasi = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(array($verifikasi, $id));
    }

    public function totalNominal()
    {
        $sql = "SELECT SUM(nominal_barang) AS nominal FROM donatur";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function totalDonatur()
    {
        $sql = $this->conn->prepare("SELECT * FROM donatur");
        $sql->execute();
        $result = $sql->rowCount();
        return $result;
    }

    public function persentase()
    {
        $tnom = $this->totalNominal();
        $persen = ($tnom ['nominal'] / $this->targetDana) * 100;
        return $persen;
    }

}