<?php
include 'db.php';

$username = $_POST['username'];
$pin = $_POST['pin'];

$sql = "INSERT INTO users (username, pin) VALUES ('$username', '$pin')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>