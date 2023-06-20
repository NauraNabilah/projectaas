<?php
require_once "koneksi.php";
include "login.php";

$conn = new Koneksi;
$user = new Login($conn->DBConnect());

$user->logout();

header('location: tampilLogin.php');
?>