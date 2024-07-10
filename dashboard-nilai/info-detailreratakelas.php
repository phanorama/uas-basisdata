<?php
include "../frontend/header-bootstrap.php";

$sql = "SELECT AVG(nilai) AS rerata_nilai, nilai.mata_pelajaran_id, mata_pelajaran.nama_pelajaran
    FROM nilai
    INNER JOIN mata_pelajaran ON nilai.mata_pelajaran_id = mata_pelajaran.mata_pelajaran_id 
    INNER JOIN siswa ON nilai.siswa_id = siswa.siswa_id
    INNER JOIN kelas ON siswa.kelas_id = kelas.kelas_id
    WHERE kelas.kelas_id = '$_GET[key]'
    GROUP BY nilai.mata_pelajaran_id";

$sql2 = "SELECT * FROM kelas WHERE kelas_id = '$_GET[key]'";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);
$result = mysqli_query($conn, $sql);
?>

<section id="app" class="section">
    <div class="card bg-transparent">
        <div class="card-header bg-transparent flex">
            <a href="reratanilai-perkelas.php" class="btn p-0 icon icon-left"> <i class="bi bi-arrow-return-left"></i>
                Kembali</a>
            <h4 class="card-title container">Informasi Rata Rata kelas <?php echo $data2['nama_kelas'] ?></h4>
        </div>
    </div>
    <div class="card-body container">
        <div class="table-responsive">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelajaran</th>
                        <th>Rata-Rata</th>
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
                                <td><?php echo number_format($data['rerata_nilai'], 2); ?></td>
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