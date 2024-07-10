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
                        <th>ID Pelajaran</th>
                        <th>Nama Pelajaran</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM mata_pelajaran";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
        
                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i = $i + 1;
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $data['mata_pelajaran_id']; ?></td>
                                <td><?php echo $data['nama_pelajaran']; ?></td>
                                <td><?php echo $data['deskripsi']; ?></td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-warning" href="#"> <i class="bi bi-gear"></i> </a>
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