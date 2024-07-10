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
                        <th>Tanggal lahir</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM siswa";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['siswa_id']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tanggal_lahir']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo '0' . $data['nomor_telepon']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-warning" href="update-siswa.php?id=<?php echo $data['siswa_id']; ?>"> <i class="bi bi-gear"></i> </a>
                                    <a class="btn btn-danger" href="../backend/siswa/proses-delete.php?id=<?php echo $data['siswa_id']; ?>"> <i class="bi bi-trash"></i> </a>
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
$target = 6;
include "../frontend/footer-bootstrap.php";
?>