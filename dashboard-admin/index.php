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
            <h4>Admin</h4>
        </div>
        <div class="page-content">
            <table id="daftarPesanan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Admin</th> <!-- Kolom untuk nomor urutan -->
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id_admin']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['password_user']; ?></td>
                                <td><?php echo $data['email']; ?></td>
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