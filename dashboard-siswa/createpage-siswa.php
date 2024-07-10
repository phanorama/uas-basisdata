<?php
include "../frontend/header-bootstrap.php";
?>

<section id="app" class="section">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Masukan Identitas Siswa</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/siswa/proses-create.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Siswa ID</label>
                        <input type="text" class="form-control" id="basicInput" name="id"
                            placeholder="1111" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Nama</label>
                        <input type="text" class="form-control" id="basicInput" name="nama"
                            placeholder="RIANDIKA FATHUR ROCHIM" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="helpInputTop" name="tanggallahir" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Alamat</label>
                        <textarea type="text" class="form-control" id="helpInputTop" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Nomor Telepon</label>
                        <input type="text" class="form-control" id="helpInputTop" name="nomortelepon" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Email</label>
                        <input type="email" class="form-control" id="helpInputTop" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Kelas</label>
                        <select name="kelasjoin" id="" class="form-select">
                            <?php
                            $sql = "SELECT * FROM kelas";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $data['kelas_id']; ?>">
                                        <?php echo $data['nama_kelas']; ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</section>

<?php
include "../frontend/footer-bootstrap.php";
?>