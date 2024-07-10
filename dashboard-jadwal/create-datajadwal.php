<?php
include "../frontend/header-bootstrap.php";
?>

<section id="app" class="section">
    <?php
    include "../frontend/sidebar.php";
    ?>
    <div class="card bg-transparent" id="main">
        <div class="card-header bg-transparent">
            <h4 class="card-title">Tambahkan Jadwal</h4>
        </div>

        <form class="card-body" method="POST" action="../backend/jadwal/proses-create.php">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pilih Kelas</h4>
                    </div>
                    <div class="card-body">
                        <select name="kelas" class="form-select" aria-label="Default select example" required>
                            <option selected value="">Pilih Kelas</option>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Materi yang diajarkan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Mata Pelajaran</p>
                                <select name="matapelajaran" class="form-select" aria-label="Default select example"
                                    id="matapelajaran" required>
                                    <option selected value="">Pilih Mata Pelajaran</option>
                                </select>
                            </div>
                            <div class="col">
                                <p>Guru</p>
                                <select name="guru" class="form-select" aria-label="Default select example" id="guru"
                                    disabled>
                                    <option selected value="">Pilih mata pelajaran terlebih dahulu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Jadwal Mengajar</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Hari</p>
                                <select name="hari" class="form-select" aria-label="Default select example" required>
                                    <option selected value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                </select>
                            </div>
                            <div class="col-md-auto">
                                <p>Waktu Mulai</p>
                                <input name="waktumulai" type="time" class="form-control flatpickr-time-picker-24h"
                                    placeholder="Select time.." required />
                            </div>
                            <div class="col-md-auto">
                                <p>Waktu Berakhir</p>
                                <input name="waktuselesai" type="time" class="form-control flatpickr-time-picker-24h"
                                    placeholder="Select time.." required />
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
        fetch('responbility/get_mapel.php')
            .then(response => response.json())
            .then(data => {
                let selection1 = document.getElementById("matapelajaran");
                data.forEach(category => {
                    let option = document.createElement("option");
                    option.value = category.mata_pelajaran_id;
                    option.text = category.nama_pelajaran;
                    selection1.add(option);
                });
            });

        document.getElementById("matapelajaran").addEventListener("change", function () {
            let categoryId = this.value;
            fetch(`responbility/get_guru.php?mata_pelajaran_id=${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    let selection2 = document.getElementById("guru");
                    selection2.innerHTML = "";
                    data.forEach(subcategory => {
                        if (subcategory.guru_id !== null) {
                            let option = document.createElement("option");
                            option.value = subcategory.guru_id;
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