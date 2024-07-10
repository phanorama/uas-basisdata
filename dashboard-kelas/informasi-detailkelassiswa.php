<?php
include "../frontend/header-bootstrap.php";

$sql = "SELECT * FROM siswa INNER JOIN kelas ON siswa.kelas_id = kelas.kelas_id WHERE siswa.kelas_id = '$_GET[key]'";
$sql2 = "SELECT * FROM kelas WHERE kelas_id = '$_GET[key]'";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);
$result = mysqli_query($conn, $sql);
?>

<section id="app" class="section">
    <div class="card bg-transparent">
        <div class="card-header bg-transparent flex">
            <a href="informasi-kelassiswa.php" class="btn p-0 icon icon-left"> <i class="bi bi-arrow-return-left"></i>
                Kembali</a>
            <h4 class="card-title container">Informasi kelas <?php echo $data2['nama_kelas'] ?></h4>
        </div>
    </div>
    <div class="card-body container">
        <div class="table-responsive">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Siswa ID</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['siswa_id']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
</section>

<?php
$target = 2;
include "../frontend/footer-bootstrap.php";
?>