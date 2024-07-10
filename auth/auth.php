<?php
session_start();
require '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['identifier'];
    $password = $_POST['password']; // Gunakan md5 untuk hash password

    // Periksa apakah identifier adalah email atau username
    if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM users WHERE email = '$identifier'";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$identifier'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../dashboard-siswa");
    } else {
        echo "Invalid username/email or password";
        // header("Location: ../index.php");
    }

}

?>