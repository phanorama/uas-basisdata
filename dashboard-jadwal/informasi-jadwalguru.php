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
            <h4>Jadwal Kegiatan Mengajar Tiap Guru</h4>
        </div>
        <div class="page-content">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Jadwal Mengajar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM guru";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="informasi-detailjadwalguru.php?key=<?php echo $data['guru_id']?>">Detail</a>
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
$target = 2;
include "../frontend/footer-bootstrap.php";
?>