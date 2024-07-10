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
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT siswa_id, nama, tanggal_lahir, CONCAT(TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()), ' tahun ', TIMESTAMPDIFF(MONTH, tanggal_lahir, CURDATE()) % 12, ' bulan') AS usia FROM siswa ORDER BY usia DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['siswa_id']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['usia']; ?></td>
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
$target = 3;
include "../frontend/footer-bootstrap.php";
?>