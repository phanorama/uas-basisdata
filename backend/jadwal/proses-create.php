<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $kelas_id = $_POST['kelas'];
    $mata_pelajaran_id = $_POST['matapelajaran'];
    $hari = $_POST['hari'];
    $waktu_mulai = $_POST['waktumulai'];
    $waktu_selesai = $_POST['waktuselesai'];
    $guru_id = $_POST['guru'];

    $query = "INSERT INTO jadwal (hari, waktu_mulai, waktu_selesai, kelas_id, mata_pelajaran_id, guru_id) VALUES ('$hari', '$waktu_mulai', '$waktu_selesai', '$kelas_id', '$mata_pelajaran_id', '$guru_id')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-jadwal");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>