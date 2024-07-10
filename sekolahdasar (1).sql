-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2024 at 05:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `absensi_id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `status_kehadiran` enum('hadir','tidak hadir','izin','sakit') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`absensi_id`, `siswa_id`, `tanggal`, `status_kehadiran`) VALUES
(1, 10288, '2024-07-03', 'hadir'),
(2, 10288, '2024-07-10', 'izin'),
(3, 2222, '2024-07-10', 'tidak hadir'),
(4, 10288, '2024-07-10', 'hadir'),
(5, 10288, '2024-10-04', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mata_pelajaran_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `nama`, `tanggal_lahir`, `alamat`, `nomor_telepon`, `email`, `mata_pelajaran_id`) VALUES
(2, 'WAWAN', '2006-10-30', 'Badung, Bali', '0887757052581', 'rexhanturu@gmail.com', 2),
(3, 'Ucup', '2004-01-01', 'Badung, Bali', '0887757052580', 'santiagoaldo173@gmail.com', 3),
(4, 'Rusdi', '2003-12-01', 'Badung, Bali', '0887757052580', 'kaikarojati@gmail.com', 1),
(5, 'Robert', '2024-01-01', 'Badung, Bali', '0887757052580', 'novaldoalief@gmail.com', 2),
(6, 'Robert Santano Navaldo S.MIPA MM.BA', '2022-01-01', 'Jembrana, Bali\r\nJln. Graha Anyar, Jimbaran', '0887757052580', 'novaldoalief@gmail.com', 6),
(8, 'Adinda Asfirayhani', '1999-01-01', 'Badung, Bali', '0887757052581', 'rexhanturu@gmail.com', 5),
(9, 'Fulan', '1995-02-10', 'Badung, Bali', '0887757052581', 'rexhanturu@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int NOT NULL,
  `hari` varchar(255) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `kelas_id` int NOT NULL,
  `mata_pelajaran_id` int NOT NULL,
  `guru_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `hari`, `waktu_mulai`, `waktu_selesai`, `kelas_id`, `mata_pelajaran_id`, `guru_id`) VALUES
(1, 'Senin', '08:00:00', '10:00:00', 1, 5, 8),
(2, 'Rabu', '11:00:00', '13:00:00', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `tingkat` int NOT NULL,
  `wali_kelas_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `nama_kelas`, `tingkat`, `wali_kelas_id`) VALUES
(1, 'X A', 10, 6),
(2, 'X B', 10, 6),
(4, 'X C', 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `mata_pelajaran_id` int NOT NULL,
  `nama_pelajaran` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`mata_pelajaran_id`, `nama_pelajaran`, `deskripsi`) VALUES
(1, 'Ilmu Pengetahuan Alam (IPA)', 'tes'),
(2, 'Matematika', 'tes'),
(3, 'Pendidikan Kebugaran Jasmani, Rohani, dan Kesehatan (Penjas)', 'tes'),
(4, 'Ilmu Pengetahuan Sosial (IPS)', 'tes'),
(5, 'Fisika', 'tes'),
(6, 'Seni Budaya', 'uji coba');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai_id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `mata_pelajaran_id` int NOT NULL,
  `nilai` decimal(10,0) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `siswa_id`, `mata_pelajaran_id`, `nilai`, `semester`) VALUES
(1, 10288, 1, 80, '1'),
(2, 10288, 2, 78, '2'),
(3, 10288, 3, 88, '2'),
(5, 2222, 2, 67, '1'),
(6, 10298, 2, 88, '1'),
(7, 23222, 1, 80, '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `alamat` varchar(28) DEFAULT NULL,
  `nomor_telepon` bigint DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kelas_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_admin` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_admin`, `username`, `password_user`, `email`) VALUES
(1, 'pengelolasistem', '12345678', 'yuru@yuru.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absensi_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`),
  ADD KEY `mata_pelajaran_id` (`mata_pelajaran_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `kelas_id` (`kelas_id`,`mata_pelajaran_id`,`guru_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`),
  ADD KEY `wali_kelas_id` (`wali_kelas_id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`mata_pelajaran_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_id`),
  ADD KEY `siswa_id` (`siswa_id`,`mata_pelajaran_id`),
  ADD KEY `mata_pelajaran_id` (`mata_pelajaran_id`) USING BTREE;

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `absensi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `mata_pelajaran_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `nilai_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`wali_kelas_id`) REFERENCES `guru` (`guru_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
