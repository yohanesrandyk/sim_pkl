-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 05:40 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `id_questioner` int(11) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_perusahaan`
--

CREATE TABLE `bidang_perusahaan` (
  `id_bidang` int(3) NOT NULL,
  `bidangperusahaan` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_perusahaan`
--

INSERT INTO `bidang_perusahaan` (`id_bidang`, `bidangperusahaan`, `created_at`, `updated_at`) VALUES
(1, 'Manufacture', '2017-12-20 06:13:46', '0000-00-00 00:00:00'),
(2, 'Agriculture', '2018-01-02 03:58:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `mulai` time DEFAULT NULL,
  `selesai` time DEFAULT NULL,
  `bentuk_kegiatan` text NOT NULL,
  `hasil_pencapaian` text,
  `ket` text,
  `paraf` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id`, `divisi`, `mulai`, `selesai`, `bentuk_kegiatan`, `hasil_pencapaian`, `ket`, `paraf`, `created_at`) VALUES
(1, 2, 'Front End', '11:11:00', '14:11:00', 'Tidak Ada', NULL, NULL, 0, '2018-01-12 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(1) NOT NULL,
  `jurusan` varchar(35) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `datang` time DEFAULT NULL,
  `pulang` time DEFAULT NULL,
  `ket` text,
  `paraf` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id`, `divisi`, `datang`, `pulang`, `ket`, `paraf`, `created_at`) VALUES
(1, 2, 'Back End', '00:00:00', '14:03:00', NULL, 0, '2018-01-11 10:14:49'),
(2, 2, 'Back End', '12:00:00', '00:12:00', NULL, 0, '2018-01-12 08:44:23'),
(3, 2, 'Front End', '00:12:00', '12:12:00', 'Membuat Sekolah Online', 0, '2018-01-14 02:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaan_perusahaan`
--

CREATE TABLE `ketersediaan_perusahaan` (
  `id_ketersediaan` int(11) NOT NULL,
  `id_perusahaan` int(4) DEFAULT NULL,
  `id_jurusan` int(1) DEFAULT NULL,
  `jumlah_siswa` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2018_01_11_040044_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nis` int(8) DEFAULT NULL,
  `id_perusahaan` int(4) NOT NULL,
  `kota_pengajuan` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `nis` int(8) DEFAULT NULL,
  `bantara` int(1) DEFAULT NULL,
  `nilai` int(1) DEFAULT NULL,
  `keuangan` int(1) DEFAULT NULL,
  `kesiswaan` int(1) DEFAULT NULL,
  `cbt_prod` int(1) DEFAULT NULL,
  `kehadiran_pengayaan_pkl` int(1) DEFAULT NULL,
  `lulus_ujikelayakan` int(1) DEFAULT NULL,
  `perpustakaan` int(1) DEFAULT NULL,
  `surat_persyaratan` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(4) NOT NULL,
  `id_bidang` int(3) DEFAULT NULL,
  `id_area` int(11) NOT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text,
  `kode_pos` int(5) DEFAULT NULL,
  `telp` varchar(14) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_bidang`, `id_area`, `perusahaan`, `kota`, `alamat`, `kode_pos`, `telp`, `website`, `email`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 2, 'Auditsi', 'Jakarta', 'Grogol, Slipi, Jakarta Barat', 17890, '021590981', 'auditsi.com', 'auditsi@outlock.com', 1, '2017-12-29 20:26:38', '2018-01-16 04:08:24'),
(6, 2, 1, 'IPB', 'Bogor', 'Jln. Raden Saleh', 16123, '083819700038', 'ipb.ac.id', 'ipbbogor@gmail.com', 1, '2018-01-01 21:00:38', '2018-01-16 04:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `questioner`
--

CREATE TABLE `questioner` (
  `id_questioner` int(11) NOT NULL,
  `id_perusahaan` int(4) NOT NULL,
  `type_question` int(1) NOT NULL,
  `question` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `rayon` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `created_at`, `updated_at`) VALUES
(1, 'bkk', '2017-12-19 04:54:08', '0000-00-00 00:00:00'),
(2, 'kaprog', '2017-12-19 04:54:08', '0000-00-00 00:00:00'),
(3, 'siswa', '2017-12-19 04:54:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(3) NOT NULL,
  `rombel` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_session` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `nama_sesi` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id_session`, `id`, `nama_sesi`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'absen', '1', 0, '2018-01-15 18:24:55', '2018-01-15 18:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(8) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `id_area` int(11) DEFAULT '0',
  `id_rayon` int(2) DEFAULT NULL,
  `id_jurusan` int(1) DEFAULT NULL,
  `id_rombel` int(3) DEFAULT NULL,
  `agama` varchar(9) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `id_perusahaan` int(4) DEFAULT NULL,
  `status_perusahaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `id`, `id_area`, `id_rayon`, `id_jurusan`, `id_rombel`, `agama`, `jk`, `id_perusahaan`, `status_perusahaan`) VALUES
(11504840, 15, 1, NULL, NULL, NULL, 'Islam', 'L', NULL, NULL),
(11505277, 2, 1, NULL, NULL, NULL, 'Christian', 'L', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_typesurat` int(1) DEFAULT NULL,
  `id_perusahaan` int(4) DEFAULT NULL,
  `nomersurat` varchar(20) DEFAULT NULL,
  `isi` text,
  `tgl_keluar` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_surat`
--

CREATE TABLE `type_surat` (
  `id_typesurat` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_role` int(2) DEFAULT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(14) DEFAULT NULL,
  `bop` varchar(25) DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `alamat` text,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `username`, `nama`, `password`, `email`, `remember_token`, `telp`, `bop`, `bod`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'Yohanes', 'Yohanes Randy K', '$2y$10$UOMcgsK3is/gBb65tN5hY.kuEskW0PbWuxEOClOMNADbo7FA.tGPm', 'randykurniayanto@gmail.com', 'NNDYoR8jMvcIzNaMOgFTb5gUuS33cfnzubYeh0t927UKNYzVjWdli1oJLI8R', '083811201424', NULL, '2016-07-06', 'Cipaku, Bogor Selatan', 2, '2017-12-18 06:51:41', '2018-01-16 04:30:31'),
(9, 1, 'Silvi', 'Silvi', '$2y$10$1NlN50ZYrY7zaAjtpMu3FuHdqxUy0WktntoV6M01Jms/Qx.l8NNMK', 'silvi@gmail.com', 'RZm40uoyDfXRDoNvcuiaUI1yDjyPjUGqdofBWmH67zrXHkwV1OD5hZZS6mjn', '08000000', 'Indonesia', '0001-01-01', 'Indonesia', 0, '2017-12-29 22:01:11', '2018-01-16 04:38:15'),
(15, 3, 'dick', 'Dicki Fadilah Fajar', '$2y$10$ipFJ9XBRNRixRt4o6kMRquIMLWK.lZRHV3OIclQ6XLUc8viMe2gpW', 'dicki@gmail.com', NULL, '083811201424', 'Bogor', '2000-11-02', 'Bogor', 2, '2018-01-15 21:38:12', '2018-01-15 21:38:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_questioner` (`id_questioner`);

--
-- Indexes for table `bidang_perusahaan`
--
ALTER TABLE `bidang_perusahaan`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ketersediaan_perusahaan`
--
ALTER TABLE `ketersediaan_perusahaan`
  ADD PRIMARY KEY (`id_ketersediaan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- Indexes for table `questioner`
--
ALTER TABLE `questioner`
  ADD PRIMARY KEY (`id_questioner`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `nama_sesi` (`nama_sesi`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_rayon` (`id_rayon`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_rombel` (`id_rombel`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_typesurat` (`id_typesurat`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `type_surat`
--
ALTER TABLE `type_surat`
  ADD PRIMARY KEY (`id_typesurat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bidang_perusahaan`
--
ALTER TABLE `bidang_perusahaan`
  MODIFY `id_bidang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ketersediaan_perusahaan`
--
ALTER TABLE `ketersediaan_perusahaan`
  MODIFY `id_ketersediaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questioner`
--
ALTER TABLE `questioner`
  MODIFY `id_questioner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_surat`
--
ALTER TABLE `type_surat`
  MODIFY `id_typesurat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`id_questioner`) REFERENCES `questioner` (`id_questioner`) ON DELETE CASCADE;

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ketersediaan_perusahaan`
--
ALTER TABLE `ketersediaan_perusahaan`
  ADD CONSTRAINT `relasiJurusan3` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `relasiPerusahaan3` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `relasiPerusahaan2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE,
  ADD CONSTRAINT `relasiSiswa2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD CONSTRAINT `relasiSiswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `relasiBidang` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_perusahaan` (`id_bidang`) ON DELETE SET NULL;

--
-- Constraints for table `questioner`
--
ALTER TABLE `questioner`
  ADD CONSTRAINT `questioner_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `relasiJurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE SET NULL,
  ADD CONSTRAINT `relasiRombel` FOREIGN KEY (`id_rombel`) REFERENCES `rombel` (`id_rombel`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_rayon`) REFERENCES `rayon` (`id_rayon`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `relasiPerusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `relasiSurat` FOREIGN KEY (`id_typesurat`) REFERENCES `type_surat` (`id_typesurat`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `relasiRole` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
