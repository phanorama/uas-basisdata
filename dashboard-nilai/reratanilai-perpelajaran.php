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
            <h4>Data Rata Rata Nilai Tiap Mata Pelajaran</h4>
        </div>
        <div class="page-content">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelajaran</th>
                        <th>Rata - Rata</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT AVG(nilai) AS rerata_nilai, nilai.mata_pelajaran_id, mata_pelajaran.nama_pelajaran 
                        FROM nilai
                        INNER JOIN mata_pelajaran ON nilai.mata_pelajaran_id = mata_pelajaran.mata_pelajaran_id 
                        GROUP BY nilai.mata_pelajaran_id;";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i = $i + 1;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
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
    </div>
</div>

<?php
$target = 2;
include "../frontend/footer-bootstrap.php";
?>