<?php
include 'db.php';
session_start();

if (!isset($_SESSION['pin'])) {
    header("Location: index.html");
    exit();
}

$kode = $_POST['kode'];
$tipe = $_POST['absen'];
$pin = $_SESSION['pin'];

$user_id_query = "SELECT id FROM users WHERE pin='$pin'";
$user_result = $conn->query($user_id_query);
$user = $user_result->fetch_assoc();

$sql = "INSERT INTO absensi (user_id, kode, tipe) VALUES ('".$user['id']."', '$kode', '$tipe')";

if ($conn->query($sql) === TRUE) {
    echo "Absensi berhasil";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>