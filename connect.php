<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "member"); // Koneksi ke MySQL
if ($connect) {
    echo "berhasil";
}
?>