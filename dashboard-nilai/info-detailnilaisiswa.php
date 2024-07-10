<?php
include "../frontend/header-bootstrap.php";

$sql = "SELECT * FROM nilai INNER JOIN mata_pelajaran ON nilai.mata_pelajaran_id = mata_pelajaran.mata_pelajaran_id WHERE siswa_id = '$_GET[key]'";
$sql2 = "SELECT * FROM siswa WHERE siswa_id = '$_GET[key]'";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);
$result = mysqli_query($conn, $sql);
?>

<section id="app" class="section">
    <div class="card bg-transparent">
        <div class="card-header bg-transparent flex">
            <a href="index.php" class="btn p-0 icon icon-left"> <i class="bi bi-arrow-return-left"></i>
                Kembali</a>
            <h4 class="card-title container">Informasi Nilai <?php echo $data2['nama'] ?></h4>
        </div>
    </div>
    <div class="card-body container">
        <div class="table-responsive">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
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
                                <td><?php echo $data['nama_pelajaran']; ?></td>
                                <td><?php echo $data['semester']; ?></td>
                                <td><?php echo $data['nilai']; ?></td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-warning" href="#"> <i class="bi bi-gear"></i> </a>
                                    <a class="btn btn-danger" href="#"> <i class="bi bi-trash"></i> </a>
                                </td>
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
$target = 4;
include "../frontend/footer-bootstrap.php";
?>