<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $namakelas = $_POST['namakelas'];
    $tingkat = $_POST['tingkat'];
    $walikelas = $_POST['walikelas'];
    $query = "INSERT INTO kelas (nama_kelas, tingkat, wali_kelas_id) VALUES ('$namakelas', '$tingkat', '$walikelas')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-kelas");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}
?>