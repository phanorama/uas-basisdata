<div id="sidebar">
  <div class="sidebar-wrapper active text-sm">
    <div class="sidebar-header position-relative">
      <span class="h4">Halo, Admin</span>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-siswa/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-backpack2"></i>
            <span> Siswa</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-siswa/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-siswa/createpage-siswa.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-siswa/createpage-siswa.php" class="submenu-link">Tambahkan Siswa</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-siswa/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-siswa/" class="submenu-link">Daftar Lengkap Siswa</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-siswa/kelas-siswa.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-siswa/kelas-siswa.php" class="submenu-link">Siswa tiap kelas</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-siswa/usia-siswa.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-siswa/usia-siswa.php" class="submenu-link">Usia siswa</a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-matapelajaran/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-book"></i>
            <span>Mata Pelajaran</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-matapelajaran/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-matapelajaran/create-datamatapelajaran.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-matapelajaran/create-datamatapelajaran.php"
                class="submenu-link">Tambahkan Mata Pelajaran</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-matapelajaran/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-matapelajaran" class="submenu-link">Daftar Lengkap Mata Pelajaran</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-matapelajaran/guru-matapelajaran.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-matapelajaran/matapelajaran-guru.php" class="submenu-link">Mata pelajaran
                tiap guru</a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-guru/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-person-badge"></i>
            <span>Guru</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-guru/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-guru/create-dataguru.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-guru/create-dataguru.php" class="submenu-link">Tambahkan Data Guru</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-guru/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-guru" class="submenu-link">Daftar Identitas Guru</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-guru/guru-matapelajaran.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-guru/guru-matapelajaran.php" class="submenu-link">Guru tiap mata
                pelajaran</a>
            </li>
          </ul>
        </li>


        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-kelas/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-building-check"></i>
            <span>Kelas</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-kelas/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-kelas/create-datakelas.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-kelas/create-datakelas.php" class="submenu-link">Tambahkan Kelas</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-kelas/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-kelas" class="submenu-link">Informasi Kelas</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-kelas/informasi-kelassiswa.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-kelas/informasi-kelassiswa.php" class="submenu-link">Daftar Siswa Tiap
                Kelas
              </a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-jadwal/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-calendar2-event"></i>
            <span>Jadwal Kelas</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-jadwal/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-jadwal/create-datajadwal.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-jadwal/create-datajadwal.php" class="submenu-link">Tambahkan Jadwal</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-jadwal/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-jadwal" class="submenu-link">Informasi jadwal</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-jadwal/informasi-jadwalguru.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-jadwal/informasi-jadwalguru.php" class="submenu-link">Informasi Jadwal
                Guru
              </a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-jadwal/jadwalpelajaranmingguan.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-jadwal/jadwalpelajaranmingguan.php" class="submenu-link">Jadwal
                Mingguan Kelas
              </a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-nilai/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-vector-pen"></i>
            <span>Nilai</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-nilai/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-nilai/create-datanilai.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-nilai/create-datanilai.php" class="submenu-link">Tambahkan nilai</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-nilai/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-nilai" class="submenu-link">Informasi nilai siswa</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-nilai/reratanilai-perpelajaran.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-nilai/reratanilai-perpelajaran.php" class="submenu-link">Rata-Rata nilai
                per mata pelajaran
              </a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-nilai/reratanilai-perkelas.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-nilai/reratanilai-perkelas.php" class="submenu-link">Rata-Rata
                nilai per kelas
              </a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-nilai/annual-reportgrade.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-nilai/annual-reportgrade.php" class="submenu-link">Laporan
                perkembangan nilai siswa
              </a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item has-sub <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-absensi/') !== false) ? 'active' : ''; ?>">
          <a href="#" class="sidebar-link">
            <i class="bi bi-person-check"></i>
            <span>Absensi</span>
          </a>
          <ul
            class="submenu <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-absensi/') !== false) ? 'active' : ''; ?>">
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-absensi/create-dataabsensi.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-absensi/create-dataabsensi.php" class="submenu-link">Tambahkan Absensi</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-absensi/index.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-absensi" class="submenu-link">Informasi absensi siswa</a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-absensi/rekap-bulanan.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-absensi/rekap-bulanan.php" class="submenu-link">Rekapitulasi Absen bulanan
              </a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-absensi/absensi-per-kelas.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-absensi/absensi-per-kelas.php" class="submenu-link">Absensi Tiap Kelas
              </a>
            </li>
            <li
              class="submenu-item <?php echo ($_SERVER['PHP_SELF'] == '/sekolahdasar/dashboard-absensi/total_absen_siswa.php') ? 'active' : ''; ?>">
              <a href="/sekolahdasar/dashboard-absensi/total_absen_siswa.php" class="submenu-link">Total Absensi Siswa
              </a>
            </li>
          </ul>
        </li>

        <li
          class="sidebar-item <?php echo (strpos($_SERVER['PHP_SELF'], '/sekolahdasar/dashboard-admin/') !== false) ? 'active' : ''; ?>">
          <a href="/sekolahdasar/dashboard-admin" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Data Admin</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a href="../auth/logout.php" class="sidebar-link">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>