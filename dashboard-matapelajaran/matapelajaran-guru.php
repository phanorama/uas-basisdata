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
                        <th>Mata Pelajaran</th>
                        <th>Daftar Guru</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM mata_pelajaran";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($data = mysqli_fetch_assoc($result)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['nama_pelajaran']; ?></td>
                            <td>
                                <ul class="list-group">
                                    <?php
                                    $sql2 = "SELECT * FROM guru WHERE mata_pelajaran_id = " . $data['mata_pelajaran_id'];
                                    $result2 = mysqli_query($conn, $sql2);
                                    while ($data2 = mysqli_fetch_assoc($result2)) {
                                        ?>
                                        <li><?php echo $data2['nama']; ?></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </td>
                            <td class="d-flex gap-2">
                                <a class="btn btn-warning" href="#"> <i class="bi bi-gear"></i> </a>
                                <a class="btn btn-danger" href="#"> <i class="bi bi-trash"></i> </a>
                                <a class="btn btn-info" href="#"><i class="bi bi-info-circle"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$target = 3;
include "../frontend/footer-bootstrap.php";
?>