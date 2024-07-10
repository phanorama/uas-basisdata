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

        <form class="card-body" method="POST" action="../backend/absensi/proses-create.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Tanggal</label>
                        <input type="date" class="form-control" id="basicInput" name="tanggal" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nama siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Kelas</p>
                                <select class="form-select" aria-label="Default select example" id="kelas"
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
                        <h4 class="card-title">Status Kehadiran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Keterangan</p>
                                <select name="status" class="form-select" aria-label="Default select example" required>
                                    <option selected value="">Pilih status</option>
                                    <option value="hadir">Hadir</option>
                                    <option value="tidak hadir">Tidak Hadir</option>
                                    <option value="izin">Izin</option>
                                    <option value="sakit">Sakit</option>
                                </select>
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