<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $siswa_id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggallahir = $_POST['tanggallahir'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $kelasjoin = $_POST['kelasjoin'];
    $query = "INSERT INTO siswa (siswa_id, nama, tanggal_lahir, alamat, nomor_telepon, email, kelas_id) VALUES ('$siswa_id', '$nama', '$tanggallahir', '$alamat', '$nomortelepon', '$email', '$kelasjoin')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-siswa");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}
?>