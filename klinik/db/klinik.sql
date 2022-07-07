-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 06:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apoteker`
--

INSERT INTO `apoteker` (`id`, `id_user`, `nama`, `jabatan`, `alamat`, `no_hp`, `email`) VALUES
(12, 3, 'apt. Dina Aulia, S.Farm', 'Asisten Apoteker', 'Jl. Handayani III No 10', '082132858383', 'dinaaulia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `spesialis` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `id_user`, `nama`, `spesialis`, `alamat`, `no_hp`, `email`) VALUES
(2, 2, 'dr. Irdawati, S.Ked', 'Dokter Umum', 'Jl. Cendrawasih No 7', '082132858383', 'irdawati@gmail.com'),
(32, 5, 'dr. Riani Putri, Sp.A (K)', 'Dokter Anak', 'Jl. Cendrawasih No 7', '082132858383', 'riani@gmail.com'),
(42, 6, 'drg. Putri Ningsih', 'Dokter Gigi', 'Jl. Cendrawasih No 7', '082132858383', 'putri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1657035314),
('m130524_201442_init', 1657035315),
('m190124_110200_add_verification_token_column_to_user_table', 1657035315);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `jenis_obat` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jenis_obat`, `stock`, `harga`) VALUES
(1, 'Paracetamol', 'Tablet', '10', '7000'),
(2, 'Ibuprofen', 'Sirup', '2', '20000'),
(3, 'Ranitidine', 'Tablet', '5', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_user`, `nama`, `jabatan`, `alamat`, `no_hp`, `email`) VALUES
(22, 4, 'Marzella Aurelia Avila', 'Staff Administrasi', 'Jl. Serdang Baru 1 No 6', '082132858383', 'marzella@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL,
  `spesialis` int(11) NOT NULL,
  `poli` int(11) DEFAULT NULL,
  `nama_pasien` varchar(255) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `spesialis`, `poli`, `nama_pasien`, `tanggal_daftar`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, 2, 1, 'Abdillah Janaki Daosti', '2022-07-06', 'Laki-laki', 'Jl. Sungai Sirah No 20 A', '082268560437'),
(2, 42, 2, 'Aurelie ', '2022-07-06', 'Perempuan', 'Jl. Sungai Sirah No 20 A', '082268560437'),
(3, 32, 3, 'Marzella Aurelia', '2022-07-06', 'Perempuan', 'Jl. Sungai Sirah No 20 A', '082268560437');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`) VALUES
(1, 'Poli Umum'),
(2, 'Poli Gigi'),
(3, 'Poli Anak');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `nama_dokter` int(11) NOT NULL,
  `nama_obat` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `jenis_tindakan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `nama_pegawai` int(11) NOT NULL,
  `biaya_pendaftaran` varchar(255) DEFAULT NULL,
  `biaya_obat` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `role`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'admin', 'Admin', 'OrxL69XvwoxE1CcpCkALn4l6b-HDnv1a', '$2y$13$fPwiOSql1nLZotMYdOnXtuULf85kG8gx0YBZlQYo89Nk4ZXyVNmGi', NULL, 'admin@example.com', 10, 1657107756, 1657107756, '8rChS4ToQiQBt2XMM-t32vWNWPU4JPob_1657107756'),
(2, '002', 'dr. Irdawati, S.Ked', 'Dokter', 'XYJCmBWPAgspoeDaXTk7mGolfPn3r9Yc', '$2y$13$fIg5fjfIj/BNVxP40kh9iuxRltL2Tq0fZ1LHyTn4hNx.XKEjxflMa', NULL, 'irdawati@gmail.com', 10, 1657111963, 1657111963, 'YTSreg7APiPaQTgo93_fTLO1Sqvmg1lh_1657111963'),
(3, '012', 'apt. Dina Aulia, S.Farm', 'Apoteker', 'jlcaDgpR9VDdbg_3-iYkW41s-vxxfRlt', '$2y$13$Uu8kYaNZxXUU9Z1rS9A0G.P3HvEiOmsO.zRiQbJMqF9lSF4QgVer2', NULL, 'dinaaulia@gmail.com', 10, 1657112051, 1657112051, 'FQ6PYCCqQllcc050lQgH7dZLEEHx9dGM_1657112051'),
(4, '022', 'Marzella Aurelia Avila', 'Pegawai', '-iEPAgZRB9RShqSiFPptdRxst_KV8oT1', '$2y$13$0ri0DlGRIUU65egC4ASDi.8yGCy0q/48jsGGTo4kqwGQln4ZVjd5O', NULL, 'marzella@gmail.com', 10, 1657112150, 1657112150, 'OcRWjTeZhqs5WWe6lz4K-16w8tP1x4dN_1657112150'),
(5, '032', 'dr. Riani Putri, Sp.A (K)', 'Dokter', 'IKK47Wnzv4B8Ux26sLTqIapgyZe5P0Qg', '$2y$13$ic4EsK.eiNR4p.T1kJ/v7ewII6kL0s1AUjN7d8mB8iUiki4X/Q/Yy', NULL, 'riani@gmail.com', 10, 1657115952, 1657115952, 'OF7lsBspleNxBwycU3TGaxr044KJqGjz_1657115952'),
(6, '042', 'drg. Putri Ningsih', 'Dokter', 'Dps6kNPoPe-p5-QCb03-6NgFTid-jmaX', '$2y$13$Zeo6F90uTlIKJdSObdwVoeAEcoNJWyiXTV2YTlkspOF5domhKTnqi', NULL, 'putri@gmail.com', 10, 1657116122, 1657116122, 'tqvIlX-e98NT7-U88LyHTrC6iXtI5RSd_1657116122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD KEY `id_dokter` (`spesialis`),
  ADD KEY `poli` (`poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`nama_dokter`),
  ADD KEY `id_obat` (`nama_obat`),
  ADD KEY `id_daftar` (`nama_pasien`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`nama_pasien`),
  ADD KEY `nama_pasien` (`nama_pasien`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_daftar` (`nama_pasien`),
  ADD KEY `id_pegawai` (`nama_pegawai`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `nama_pegawai` (`nama_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apoteker`
--
ALTER TABLE `apoteker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD CONSTRAINT `apoteker_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`spesialis`) REFERENCES `dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`poli`) REFERENCES `poli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`nama_dokter`) REFERENCES `dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`nama_obat`) REFERENCES `obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_ibfk_3` FOREIGN KEY (`nama_pasien`) REFERENCES `pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD CONSTRAINT `tindakan_ibfk_1` FOREIGN KEY (`nama_pasien`) REFERENCES `pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`nama_pasien`) REFERENCES `pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`nama_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
