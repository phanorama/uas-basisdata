<?php
include "../frontend/header-bootstrap.php";
?>

<section id="app" class="section">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Masukan Nama Pelajaran</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/mata-pelajaran/proses-create.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="basicInput" name="matapelajaran"
                            placeholder="Contoh : matematika" required>
                    </div>

                    <div class="form-group">
                        <label for="helpInputTop">Deskripsi</label>
                        <textarea type="text" class="form-control" id="helpInputTop" name="deskripsi" required></textarea>
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