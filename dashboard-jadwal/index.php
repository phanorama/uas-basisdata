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
                        <th>No</th>
                        <th>Hari</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Guru</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * 
                        FROM jadwal
                        INNER JOIN kelas ON jadwal.kelas_id = kelas.kelas_id
                        INNER JOIN mata_pelajaran ON jadwal.mata_pelajaran_id = mata_pelajaran.mata_pelajaran_id
                        INNER JOIN guru ON jadwal.guru_id = guru.guru_id";
                    $result = mysqli_query($conn, $sql);
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
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td><?php echo $data['nama_pelajaran']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="#">Detail</a>
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
$target = 7;
include "../frontend/footer-bootstrap.php";
?>