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
    $query = "UPDATE siswa SET nama = '$nama', tanggal_lahir = '$tanggallahir', alamat = '$alamat', nomor_telepon = '$nomortelepon', email = '$email', kelas_id = '$kelasjoin' WHERE siswa_id = '$siswa_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-siswa");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}
?>