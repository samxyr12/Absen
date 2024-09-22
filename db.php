

<?php
$servername = "sql205.infinityfree.com";
$username = "if0_37349200";
$password = "gpQp5a7ayQQdv";
$dbname = "if0_37349200__data_absensi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>