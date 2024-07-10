<?php
include "../frontend/header-bootstrap.php";
?>

<section id="app" class="section">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Masukan Kelas</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/kelas/proses-create.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Nama Kelas</label>
                        <input type="text" class="form-control" id="basicInput" name="namakelas">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Tingkat</label>
                        <input type="text" class="form-control" id="basicInput" name="tingkat">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Wali Kelas</label>
                        <select name="walikelas" id="" class="form-select">
                            <?php
                            $sql = "SELECT * FROM guru";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $data['guru_id']; ?>">
                                        <?php echo $data['nama']; ?>
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