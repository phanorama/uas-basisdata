<?php
include "../frontend/header-bootstrap.php";

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE siswa_id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<section id="app" class="section">
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Masukan Identitas Siswa</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/siswa/proses-update.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Siswa ID</label>
                        <input type="text" class="form-control" id="basicInput" name="id"
                            placeholder="1111" value="<?php echo $data['siswa_id'] ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Nama</label>
                        <input type="text" class="form-control" id="basicInput" name="nama"
                            placeholder="RIANDIKA FATHUR ROCHIM" value="<?php echo $data['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="helpInputTop" name="tanggallahir" value="<?php echo $data['tanggal_lahir'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Alamat</label>
                        <textarea type="text" class="form-control" id="helpInputTop" name="alamat" required><?php echo $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Nomor Telepon</label>
                        <input type="text" class="form-control" id="helpInputTop" name="nomortelepon" value="<?php echo $data['nomor_telepon'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Email</label>
                        <input type="email" class="form-control" id="helpInputTop" name="email" value="<?php echo $data['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Kelas</label>
                        <select name="kelasjoin" id="" class="form-select">
                            <?php
                            $sql1 = "SELECT * FROM kelas";
                            $result1 = mysqli_query($conn, $sql1);

                            if (mysqli_num_rows($result1)) {
                                while ($data1 = mysqli_fetch_assoc($result1)) {
                                    $selected = ($data['kelas_id'] == $data1['kelas_id']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $data1['kelas_id']; ?>" <?php echo $selected; ?>>
                                        <?php echo $data1['nama_kelas']; ?>
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