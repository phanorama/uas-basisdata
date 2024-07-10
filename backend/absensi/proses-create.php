<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $siswa_id = $_POST['siswa_id'];
    $status = $_POST['status'];
    
    $query = "INSERT INTO absensi (tanggal, siswa_id, status_kehadiran) VALUES ('$tanggal', '$siswa_id', '$status')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-absensi");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}
?>