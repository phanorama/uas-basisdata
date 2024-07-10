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
                        <th>Siswa ID</th>
                        <th>Nama Siswa</th>
                        <th>Kelas Siswa</th>
                        <th>Nilai Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM siswa INNER JOIN kelas ON siswa.kelas_id = kelas.kelas_id;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i = $i + 1;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data['siswa_id']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-info" href="info-detailnilaisiswa.php?key=<?php echo $data['siswa_id'];?>"> <i class="bi bi-info-circle"></i> </a>
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
$target = 3;
include "../frontend/footer-bootstrap.php";
?>