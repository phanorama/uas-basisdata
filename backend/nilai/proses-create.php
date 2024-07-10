<?php
include "../../config/config.php";

if (isset($_POST["submit"])) {
    $siswa_id = $_POST['siswa_id'];
    $mata_pelajaran_id = $_POST['mata_pelajaran_id'];
    $nilai = $_POST['nilai'];
    $semester = $_POST['semester'];
    $query = "INSERT INTO nilai (siswa_id, mata_pelajaran_id, nilai, semester) VALUES ('$siswa_id', '$mata_pelajaran_id', '$nilai', '$semester')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../../dashboard-nilai");
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');window.location.href='../../create-dataguru.php'</script>";
    }
}

?>