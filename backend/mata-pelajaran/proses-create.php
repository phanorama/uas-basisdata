<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $nama_pelajaran = $_POST['matapelajaran'];
    $deskripsi = $_POST['deskripsi'];
    $query = "INSERT INTO mata_pelajaran (nama_pelajaran, deskripsi) VALUES ('$nama_pelajaran', '$deskripsi')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>window.location.href='../../dashboard-matapelajaran/index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='create-datamatapelajaran.php'</script>";
    }
}
?>