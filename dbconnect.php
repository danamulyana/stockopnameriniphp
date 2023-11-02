<?php
// Koneksi ke basis data MySQL
$host = "localhost";
$username = "root";
$password = "root";
$database = "rini_opname_stock"; // Ganti dengan nama database yang benar

// Open a new connection to the MySQL server
$conn = mysqli_connect($host, $username, $password, $database); 

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}