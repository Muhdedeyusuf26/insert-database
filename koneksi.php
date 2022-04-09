<?php
$namaServer = "localhost";
$userName = "root";
$password = "root";
$namaDatabase = "aplikasi-sederhana";

//membuat koneksi
$conn = mysqli_connect($namaServer,$userName,$password,$namaDatabase);

//cek koneksi
if (!$conn) {
    die("koneksi gagal: ".mysqli_connect_error());
}
?>