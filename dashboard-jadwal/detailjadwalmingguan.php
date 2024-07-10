<?php
include "../frontend/header-bootstrap.php";

$sql = "SELECT * 
        FROM jadwal
        INNER JOIN kelas ON jadwal.kelas_id = kelas.kelas_id
        INNER JOIN mata_pelajaran ON jadwal.mata_pelajaran_id = mata_pelajaran.mata_pelajaran_id
        INNER JOIN guru ON jadwal.guru_id = guru.guru_id
        WHERE kelas.kelas_id = '$_GET[key]'";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT nama_kelas FROM kelas WHERE kelas_id = '$_GET[key]'";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);
?>

<section id="app" class="section">
    <div class="card bg-transparent">
        <div class="card-header bg-transparent flex">
            <a href="jadwalpelajaranmingguan.php" class="btn p-0 icon icon-left"> <i class="bi bi-arrow-return-left"></i>
                Kembali</a>
            <h4 class="card-title container">Informasi kelas <?php echo $data2['nama_kelas']; ?></h4>
        </div>
    </div>
    <div class="card-body container">
        <div class="table-responsive">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Mata Pelajaran</th>
                        <th>Pengampu Materi</th>
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
                                <td><?php echo $data['hari']; ?></td>
                                <td><?php echo $data['waktu_mulai']; ?></td>
                                <td><?php echo $data['waktu_selesai']; ?></td>
                                <td><?php echo $data['nama_pelajaran']; ?></td>
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
$target = 5;
include "../frontend/footer-bootstrap.php";
?>