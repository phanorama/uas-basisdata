<?php
include "../frontend/header-bootstrap.php";
?>

<section id="app" class="section">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Masukan Nilai</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/nilai/proses-create.php">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nama siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Kelas</p>
                                <select name="kelas" class="form-select" aria-label="Default select example" id="kelas"
                                    required>
                                    <option selected value="">Pilih Kelas</option>
                                </select>
                            </div>
                            <div class="col">
                                <p>Nama Siswa</p>
                                <select name="siswa_id" class="form-select" aria-label="Default select example"
                                    id="siswa" disabled>
                                    <option selected value="">Pilih kelas terlebih dahulu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Mata Pelajaran</p>
                                <select name="mata_pelajaran_id" id="" class="form-select" required>
                                    <option selected value="">Pilih Mata Pelajaran</option>
                                    <?php
                                    $sql = "SELECT * FROM mata_pelajaran";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result)) {
                                        while ($data = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $data['mata_pelajaran_id']; ?>">
                                                <?php echo $data['nama_pelajaran']; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col">
                                <p for="basicInput">Nilai</p>
                                <input type="number" max="100" min="0" class="form-control" id="basicInput" name="nilai"
                                    required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Semester</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p for="basicInput">Semester</p>
                                <input type="number" max="6" min="1" class="form-control" id="basicInput"
                                    name="semester" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch('responbility/get_kelas.php')
            .then(response => response.json())
            .then(data => {
                let selection1 = document.getElementById("kelas");
                data.forEach(category => {
                    let option = document.createElement("option");
                    option.value = category.kelas_id;
                    option.text = category.nama_kelas;
                    selection1.add(option);
                });
            });

        document.getElementById("kelas").addEventListener("change", function () {
            let categoryId = this.value;
            fetch(`responbility/get_siswa.php?kelas_id=${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    let selection2 = document.getElementById("siswa");
                    selection2.innerHTML = "";
                    data.forEach(subcategory => {
                        if (subcategory.siswa_id !== null) {
                            let option = document.createElement("option");
                            option.value = subcategory.siswa_id;
                            option.text = subcategory.nama;
                            selection2.add(option);
                            selection2.disabled = false;
                        }
                    });
                });
        });
    });
</script>
<?php
include "../frontend/footer-bootstrap.php";
?>