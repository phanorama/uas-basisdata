<?php
include "../frontend/header-bootstrap.php";
?>

<script src="../assets/static/js/initTheme.js"></script>
<div id="app">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div id="main">
        <div class="page-heading">
            <h4>Data Kelas</h4>
        </div>
        <div class="page-content">

            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Kelas ID</th> <!-- Kolom untuk nomor urutan -->
                        <th>Nama Kelas</th>
                        <th>Tingkat</th>
                        <th>Wali Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT kelas.*, guru.nama, COUNT(siswa.siswa_id) AS jumlah_siswa 
                        FROM kelas 
                        INNER JOIN guru ON kelas.wali_kelas_id = guru.guru_id 
                        LEFT JOIN siswa ON kelas.kelas_id = siswa.kelas_id 
                        GROUP BY kelas.kelas_id 
                        ORDER BY kelas.wali_kelas_id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['kelas_id']; ?></td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td><?php echo $data['tingkat']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jumlah_siswa']; ?></td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-warning" href="#"> <i class="bi bi-gear"></i> </a>
                                    <a class="btn btn-danger" href="#"> <i class="bi bi-trash"></i> </a>
                                    <a class="btn btn-info" href="#"><i class="bi bi-info-circle"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$target = 4;
include "../frontend/footer-bootstrap.php";
?>