<?php
include 'db.php';

$pin = $_POST['pin'];

$sql = "SELECT * FROM users WHERE pin='$pin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['pin'] = $pin;
    header("Location: absen.html");
} else {
    echo "PIN salah";
}

$conn->close();
?>