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
            <h4>Data Siswa</h4>
        </div>
        <div class="page-content">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th> <!-- Kolom untuk nomor urutan -->
                        <th>Nama Siswa</th>
                        <th>Hadir</th>
                        <th>Tidak Hadir</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT absensi.siswa_id,
                        siswa.nama, 
                        COUNT(CASE WHEN status_kehadiran = 'hadir' THEN 1 END) AS jumlah_hadir,
                        COUNT(CASE WHEN status_kehadiran = 'tidak hadir' THEN 1 END) AS jumlah_tidak_hadir,
                        COUNT(CASE WHEN status_kehadiran = 'sakit' THEN 1 END) AS jumlah_sakit,
                        COUNT(CASE WHEN status_kehadiran = 'izin' THEN 1 END) AS jumlah_izin
                        FROM absensi
                        INNER JOIN siswa ON siswa.siswa_id = absensi.siswa_id
                        GROUP BY siswa_id";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jumlah_hadir']; ?></td>
                                <td><?php echo $data['jumlah_tidak_hadir']; ?></td>
                                <td><?php echo $data['jumlah_izin']; ?></td>
                                <td><?php echo $data['jumlah_sakit']; ?></td>
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
$target = 5;
include "../frontend/footer-bootstrap.php";
?>