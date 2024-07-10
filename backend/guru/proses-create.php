<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggallahir = $_POST['tanggallahir'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $matapelajaranjoin = $_POST['matapelajaranjoin'];
    $query = "INSERT INTO guru (nama, tanggal_lahir, alamat, nomor_telepon, email, mata_pelajaran_id) VALUES ('$nama', '$tanggallahir', '$alamat', '$nomortelepon', '$email', '$matapelajaranjoin')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-guru");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}
?>