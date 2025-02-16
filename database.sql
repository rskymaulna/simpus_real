-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 07:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(10) NOT NULL,
  `nama_bidang` varchar(15) DEFAULT NULL,
  `kode_bidang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`, `kode_bidang`) VALUES
(1, 'Poli Umum', 'PU'),
(2, 'Poli Gigi', 'PG'),
(3, 'Poli KIA', 'PK'),
(4, 'Laboratorium', 'LB'),
(5, 'Apotek', 'AP'),
(6, 'Administrasi', 'AD'),
(7, 'Kasir', 'KS'),
(8, 'Kebersihan', 'KB');

-- --------------------------------------------------------

--
-- Table structure for table `data_klinis`
--

CREATE TABLE `data_klinis` (
  `id_klinis` int(10) NOT NULL,
  `id_pasien` int(10) DEFAULT NULL,
  `gol_darah` char(5) DEFAULT NULL,
  `Alergi` varchar(200) DEFAULT NULL,
  `riwayat_penyakit` varchar(200) DEFAULT NULL,
  `riwayat_pengobatan` varchar(200) DEFAULT NULL,
  `riwayat_operasi` varchar(200) DEFAULT NULL,
  `tinggi_badan` decimal(5,2) DEFAULT NULL,
  `berat_badan` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_klinis`
--

INSERT INTO `data_klinis` (`id_klinis`, `id_pasien`, `gol_darah`, `Alergi`, `riwayat_penyakit`, `riwayat_pengobatan`, `riwayat_operasi`, `tinggi_badan`, `berat_badan`) VALUES
(2, 20, 'Golon', '', '', '', '', 0.00, 0.00),
(3, 21, 'Golon', '', '', '', '', 0.00, 0.00),
(4, 22, 'Golon', '', '', '', '', 0.00, 0.00),
(5, 23, 'Golon', '', '', '', '', 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(10) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `no_induk_dokter` varchar(50) NOT NULL,
  `kode_dokter` varchar(6) NOT NULL,
  `nama_dokter` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `spesialisasi` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_bidang`, `no_induk_dokter`, `kode_dokter`, `nama_dokter`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `spesialisasi`, `no_telp`, `alamat`, `foto`) VALUES
(1, 1, '09234802580', 'PUD-1', 'Daeng Rizki Maulana Rumles', 'Kaimana', '2025-02-07', 'Laki-Laki', 'Dokter Cinta <3', '082198191273', 'Pasir Panjang', '678d13f138661.png'),
(3, 1, '23234567', 'PUD-2', 'Mafazah Aisyah', 'Kaimana', '2025-01-25', 'Perempuan', 'dokter kandungan', '08080808080', 'Pasir Putih', '678879830114b.png');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_lab`
--

CREATE TABLE `hasil_lab` (
  `id_lab` int(11) NOT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_tindakan_lab` int(11) NOT NULL,
  `hasil_tindakan_lab` text NOT NULL,
  `foto_lab` varchar(150) NOT NULL,
  `tgl_waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_lab`
--

INSERT INTO `hasil_lab` (`id_lab`, `id_kunjungan`, `id_tindakan_lab`, `hasil_tindakan_lab`, `foto_lab`, `tgl_waktu`) VALUES
(1, 10, 1, 'naskc', ' ', '2025-01-20 20:28:47'),
(2, 10, 1, 'dsakld', ' ', '2025-01-20 20:51:46'),
(3, 11, 1, 'satu', '678eeec68ab11.png', '2025-01-21 09:48:06'),
(4, 11, 1, 'sasa', '1', '2025-01-21 10:17:35'),
(5, 14, 1, 'mantap', '678f79b7ceecd.png', '2025-01-21 19:40:55'),
(6, 17, 1, 'bagus', '679069f6832b8.png', '2025-01-22 12:43:27'),
(7, 25, 2, 'mendapatkan tindakan', '1', '2025-02-03 14:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL DEFAULT 'Senin-Jumat',
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `id_dokter`, `id_bidang`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, 1, 'Senin-Jumat', '08:00:00', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `waktu_kunjungan` datetime NOT NULL DEFAULT current_timestamp(),
  `status_antrian` enum('Belum Selesai','Selesai','Lab') NOT NULL DEFAULT 'Belum Selesai',
  `status_lab` enum('Belum Selesai','Selesai') NOT NULL DEFAULT 'Belum Selesai',
  `status_transaksi` enum('Belum Selesai','Selesai') NOT NULL DEFAULT 'Belum Selesai',
  `status_kunjungan` enum('Belum Selesai','Selesai') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_pasien`, `id_bidang`, `waktu_kunjungan`, `status_antrian`, `status_lab`, `status_transaksi`, `status_kunjungan`) VALUES
(1, 27, 1, '2025-01-17 02:31:21', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(2, 23, 1, '2025-01-17 03:09:00', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(3, 18, 1, '2025-01-18 14:26:50', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(4, 22, 1, '2025-01-18 15:26:03', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(5, 15, 1, '2025-01-18 15:42:31', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(6, 22, 1, '2025-01-18 16:25:52', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(7, 22, 1, '2025-01-20 12:42:32', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai'),
(8, 21, 1, '2025-01-20 14:40:32', 'Selesai', 'Belum Selesai', 'Selesai', 'Belum Selesai'),
(9, 27, 1, '2025-01-20 15:17:19', 'Selesai', 'Belum Selesai', 'Selesai', 'Belum Selesai'),
(10, 16, 1, '2025-01-20 19:03:45', 'Belum Selesai', 'Selesai', 'Belum Selesai', 'Belum Selesai'),
(11, 14, 1, '2025-01-21 08:06:25', 'Selesai', 'Selesai', 'Selesai', 'Selesai'),
(12, 14, 1, '2025-01-21 08:06:55', 'Lab', 'Belum Selesai', 'Belum Selesai', 'Selesai'),
(13, 27, 1, '2025-01-21 14:10:31', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(14, 27, 1, '2025-01-21 19:37:26', 'Belum Selesai', 'Selesai', 'Belum Selesai', 'Belum Selesai'),
(15, 27, 1, '2025-01-21 19:38:42', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(16, 22, 1, '2025-01-22 11:45:53', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(17, 27, 1, '2025-01-22 12:25:35', 'Selesai', 'Selesai', 'Selesai', 'Belum Selesai'),
(18, 23, 1, '2025-01-22 13:30:00', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(23, 38, 1, '2025-02-03 01:14:45', 'Selesai', 'Belum Selesai', 'Selesai', 'Belum Selesai'),
(24, 39, 1, '2025-02-03 01:46:31', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(25, 22, 1, '2025-02-03 01:46:40', 'Selesai', 'Selesai', 'Selesai', 'Belum Selesai'),
(26, 23, 1, '2025-02-03 01:46:54', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Selesai'),
(54, 14, 1, '2025-02-03 01:50:20', '', '', '', ''),
(55, 39, 1, '2025-02-03 01:53:13', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(56, 22, 1, '2025-02-03 14:48:29', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(57, 39, 1, '2025-02-03 16:06:57', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai', 'Belum Selesai'),
(58, 41, 1, '2025-02-04 04:51:43', 'Selesai', 'Belum Selesai', 'Belum Selesai', 'Selesai'),
(59, 35, 1, '2025-02-04 08:52:08', 'Selesai', 'Belum Selesai', 'Selesai', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `tarif` decimal(10,0) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis`, `tarif`, `stok`) VALUES
(1, 'Paracetamol', 'Tablet', 2000, 8),
(2, 'Amoxicillin', 'Tablet', 5000, 15),
(3, 'Bimaflox', 'Kapsul', 10000, 25),
(4, 'Lactulax', 'Tablet', 5000, 8),
(5, 'Dextral', 'Kapsul', 10000, 20),
(6, 'Bionemi', 'Serbuk', 5000, 20),
(7, 'Focisol', 'Kapsul', 5000, 20),
(8, 'Erlamol', 'Tablet', 50000, 10),
(10, 'Novadex', 'Kapsul', 100000, 15),
(11, 'Dexacap 25', 'Kapsul', 5000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `obat_apotek`
--

CREATE TABLE `obat_apotek` (
  `id_pemberian_obat` int(11) NOT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat_apotek`
--

INSERT INTO `obat_apotek` (`id_pemberian_obat`, `id_kunjungan`, `id_obat`, `jumlah`, `tgl_waktu`) VALUES
(3, 1, 3, 3, '2025-01-17 05:12:48'),
(5, 1, 10, 10, '2025-01-17 17:07:31'),
(6, 2, 1, 1, '2025-01-17 17:47:44'),
(7, 2, 1, 10, '2025-01-17 17:49:42'),
(8, 3, 1, 1, '2025-01-18 14:29:26'),
(11, 3, 7, 7, '2025-01-18 15:04:11'),
(13, 4, 1, 6, '2025-01-18 15:34:35'),
(15, 5, 1, 2, '2025-01-18 15:45:15'),
(16, 7, 2, 2, '2025-01-20 14:31:42'),
(17, 7, 3, 12, '2025-01-20 14:33:19'),
(18, 8, 4, 2, '2025-01-20 14:50:13'),
(19, 9, 1, 2, '2025-01-20 15:40:01'),
(20, 11, 3, 4, '2025-01-21 10:49:12'),
(21, 16, 1, 2, '2025-01-22 11:51:47'),
(22, 17, 1, 2, '2025-01-22 12:52:50'),
(23, 23, 5, 3, '2025-02-03 14:31:57'),
(24, 23, 11, 2, '2025-02-03 14:31:57'),
(25, 23, 5, 2, '2025-02-03 14:32:27'),
(26, 23, 11, 2, '2025-02-03 14:32:27'),
(27, 25, 5, 2, '2025-02-03 14:51:35'),
(28, 25, 6, 2, '2025-02-03 14:51:35'),
(30, 59, 2, 2, '2025-02-04 08:53:27'),
(31, 59, 3, 2, '2025-02-04 08:53:27'),
(32, 59, 4, 2, '2025-02-04 08:53:27'),
(33, 59, 5, 2, '2025-02-04 08:53:27'),
(34, 59, 6, 2, '2025-02-04 08:53:27'),
(35, 59, 7, 2, '2025-02-04 08:53:27'),
(36, 59, 8, 2, '2025-02-04 08:53:27'),
(37, 59, 10, 3, '2025-02-04 08:53:27'),
(38, 59, 11, 2, '2025-02-04 08:53:27'),
(39, 59, 1, 6, '2025-02-04 09:07:49'),
(40, 59, 2, 13, '2025-02-04 09:07:49'),
(41, 59, 3, 23, '2025-02-04 09:07:49'),
(42, 59, 4, 6, '2025-02-04 09:07:49'),
(43, 59, 5, 18, '2025-02-04 09:07:49'),
(44, 59, 6, 18, '2025-02-04 09:07:49'),
(45, 59, 7, 18, '2025-02-04 09:07:49'),
(46, 59, 8, 8, '2025-02-04 09:07:49'),
(47, 59, 10, 13, '2025-02-04 09:07:49'),
(48, 59, 11, 18, '2025-02-04 09:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `id_unik` varchar(10) NOT NULL,
  `nama_pasien` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status_pernikahan` varchar(20) DEFAULT NULL,
  `no_telp_kerabat` varchar(20) DEFAULT NULL,
  `status_asuransi` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT current_timestamp(),
  `no_asuransi` int(20) DEFAULT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id_unik`, `nama_pasien`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `status_pernikahan`, `no_telp_kerabat`, `status_asuransi`, `nik`, `tempat_lahir`, `tgl_daftar`, `no_asuransi`, `foto`) VALUES
(10, '', 'Ikbal Awal', '2004-03-23', 'Laki-Laki', '082198191273', 'Jln. Piahar Wagom Pantai', 'Belum Menikah', '082198191273', 'BPJS', '1234567890', 'Banda', '2024-12-01 00:00:00', NULL, ''),
(11, '', 'Maria Meirita Nasa', '2005-02-05', 'Perempuan', '082367542378', 'Jln. Nuri dalam, Wagom Gunung', 'Belum Menikah', '082199059119', 'BPJS', '1234145241641', 'Fakfak', '2024-12-01 00:00:00', NULL, ''),
(12, '', 'Rismawati', '2005-02-27', 'Perempuan', '082198191273', 'Kampung Kayu Merah, Sebrang ', 'Belum Menikah', '082198191273', 'Non-BPJS', '1290371297432', 'Fakfak', '2024-12-01 00:00:00', NULL, ''),
(13, '', 'Rismawati', '2006-02-05', 'Perempuan', '082198191273', 'Kampung Kayu Merah, Sebrang ', 'Belum Menikah', '082198191273', 'Non-BPJS', '1290371297432', 'Fakfak', '2024-12-01 00:00:00', NULL, ''),
(14, '', 'Jaeya Anggara', '2005-03-15', 'Laki-Laki', '082199059119', 'Kampung Sekban ', 'Sudah Menikah', '082198191273', 'Non-BPJS', '1928372469021', 'Ambon', '2024-12-01 00:00:00', NULL, ''),
(15, '', 'Rosita', '2005-06-23', 'Perempuan', '082198191273', 'Kampung Kayu Merah, Sebrang ', 'Belum Menikah', '082198191273', 'BPJS', '21973187483794', 'Ambon', '2024-12-01 00:00:00', NULL, ''),
(16, '', 'Muhammad Fahmi La suharto ', '2003-01-23', 'Laki-Laki', '082198191273', 'Kampung Kayu Merah, Sebrang ', 'Sudah Menikah', '082198191273', 'BPJS', '21043892473938719', 'Fakfak', '2024-12-01 00:00:00', 0, ''),
(17, '', 'Puput Juniar Hindom', '2005-05-26', 'Perempuan', '082198191273', 'Kampung Kayu Merah, Sebrang ', 'Sudah Menikah', '082198191273', 'BPJS', '1092749123743799', 'Fakfak', '2024-12-01 00:00:00', NULL, ''),
(18, '', 'Rusdiyono Basso', '2005-12-30', 'Laki-Laki', '082198191273', 'Wagom Gunung ', 'Belum Menikah', '082198191273', 'BPJS', '0137129791237', 'Kilfura', '2024-12-01 00:00:00', 30, ''),
(20, '', 'Ruslan', '1988-12-12', 'Laki-Laki', '0879745180890', 'Jln. Nuri dalam, Wagom Gunung', 'Sudah Menikah', '', 'Non-BPJS', '781792960287', 'Jayapura', '2024-12-04 00:00:00', NULL, ''),
(21, '', 'Fitriani La  Sitambah', '1978-02-17', 'Perempuan', '082178614509', 'Torea', 'Status', '', 'BPJS', '8947261758398', 'Buton', '2024-12-04 00:00:00', NULL, ''),
(22, '', 'Sintia Pratama', '1991-04-06', 'Perempuan', '089188726759', 'Danaweria', 'Status', '', 'Non-BPJS', '898746726976', 'Jawa Barat', '2024-12-04 00:00:00', NULL, ''),
(23, '', 'Ani Astuti', '1987-02-12', 'Perempuan', '089988678851', 'Air Merah', 'Status', '', 'BPJS', '850920985903', 'Ambon', '2024-12-04 00:00:00', NULL, ''),
(27, '', 'Mafazah Aisya', '2025-01-11', 'Perempuan', '082198191273', 'Krooy', 'Belum Menikah', '0812336589', 'BPJS', '09281936483', 'Kaimana', '2024-12-30 23:38:04', 20840095, '677d4d7a51559.jpg'),
(31, '', 'Daeng Rizki Maulana Rumles', '2025-01-28', 'Laki-Laki', '0812336589', 'Sekban', 'Belum Menikah', '082198191273', 'BPJS', '082198191273', 'Kaimana', '2025-02-02 23:05:17', 20840094, ''),
(32, '', 'Daeng Rizki Maulana Rumles', '2025-03-06', 'Laki-Laki', '0812336589', 'Sekban', 'Belum Menikah', '082198191273', 'Non-BPJS', '082198191273', 'Kaimana', '2025-02-02 23:07:12', 20840094, ''),
(33, '', 'Daeng Rizki Maulana Rumles', '2025-02-15', 'Laki-Laki', '0812336589', 'arbes', 'Sudah Menikah', '0821990591119', 'BPJS', '082198191273', 'Kaimana', '2025-02-02 23:40:02', 20840094, ''),
(34, '', 'Daeng Rizki Maulana Rumles', '2025-02-19', 'Laki-Laki', '0812336589', 'Sekban', 'Sudah Menikah', '082198191273', 'Non-BPJS', '082198191273', 'Kaimana', '2025-02-02 23:45:07', 20840094, ''),
(35, '', 'Daeng Rizki Maulana Rumles', '2025-02-13', 'Laki-Laki', '0812336589', 'Sekban', 'Sudah Menikah', '082198191273', 'Non-BPJS', '082198191273', 'Kaimana', '2025-02-03 01:00:54', 20840094, ''),
(36, '', 'Daeng Rizki Maulana Rumles', '2025-02-21', 'Laki-Laki', '0812336589', 'Sekban', 'Sudah Menikah', '082198191273', 'BPJS', '082198191273', 'Kaimana', '2025-02-03 01:05:51', 20840094, ''),
(37, '', 'Daeng Rizki Maulana Rumles', '2025-02-16', 'Laki-Laki', '0812336589', 'tra atu', 'Sudah Menikah', '082198191273', 'BPJS', '082198191273', 'Kaimana', '2025-02-03 01:11:49', 20840094, ''),
(38, '', 'Daeng Rizki Maulana Rumles', '2025-02-11', 'Laki-Laki', '0812336589', 'Sekban', 'Sudah Menikah', '082198191273', 'BPJS', '082198191273', 'Kaimana', '2025-02-03 01:12:54', 20840094, ''),
(39, '', 'sontong', '2025-02-07', 'Laki-Laki', '0812336589', 'Kampung Sekru', 'Sudah Menikah', '0812336589', 'BPJS', '082198191273', 'Kaimana', '2025-02-03 01:42:44', 20840094, ''),
(40, '', 'Daeng Rizki Maulana Rumles', '2025-02-13', 'Laki-Laki', '082198191273', 'Sekban', 'Sudah Menikah', '082198191273', 'BPJS', '082198191273', 'Banda', '2025-02-03 15:18:25', 20840094, ''),
(41, 'PS-4103', 'xsaid', '2025-02-18', 'Laki-Laki', '0812336589', 'Kampung Sekru', 'Belum Menikah', '0821990591119', 'BPJS', '082198191273', 'Banda', '2025-02-03 15:22:04', 20840094, '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `bidang`, `nama_pegawai`, `npwp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `jabatan`, `alamat`, `foto`) VALUES
(1, 'Administrasi', 'Indah Lady Mutmainnah', '012803482080', 'Perempuan', 'Fakfak', '2005-04-06', 'Kepala Administrasi', 'Kampung Sekru', '67794e08a02b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_pasien` varchar(150) NOT NULL,
  `antrian` tinyint(1) NOT NULL,
  `tgl_waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_pasien`, `antrian`, `tgl_waktu`) VALUES
(1, '38', 0, '2025-02-03 01:12:54'),
(2, '23', 0, '2025-02-03 01:22:23'),
(3, '27', 0, '2025-02-03 01:25:08'),
(4, '32', 0, '2025-02-03 01:25:19'),
(5, '27', 0, '2025-02-03 01:26:59'),
(6, '23', 0, '2025-02-03 01:28:08'),
(7, '22', 0, '2025-02-03 01:32:31'),
(8, '39', 0, '2025-02-03 01:42:44'),
(9, '39', 0, '2025-02-03 01:53:07'),
(10, '22', 0, '2025-02-03 14:48:24'),
(11, '41', 0, '2025-02-03 15:22:04'),
(12, '41', 0, '2025-02-03 15:23:16'),
(13, '39', 0, '2025-02-03 16:06:52'),
(17, '41', 0, '2025-02-04 04:50:28'),
(18, '35', 0, '2025-02-04 08:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` int(10) NOT NULL,
  `id_kunjungan` int(10) DEFAULT NULL,
  `jumlah` decimal(10,0) DEFAULT NULL,
  `bayar` decimal(10,2) NOT NULL,
  `kembalian` decimal(10,2) NOT NULL,
  `tgl_waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id_pendapatan`, `id_kunjungan`, `jumlah`, `bayar`, `kembalian`, `tgl_waktu`) VALUES
(1, 3, 37000, 0.00, 0.00, '2025-01-18 15:12:39'),
(2, 4, 12000, 0.00, 0.00, '2025-01-18 15:35:14'),
(3, 5, 4000, 0.00, 0.00, '2025-01-18 15:45:27'),
(4, 8, 10000, 0.00, 0.00, '2025-01-20 14:50:25'),
(5, 9, 4000, 0.00, 0.00, '2025-01-20 15:40:14'),
(6, 9, 0, 0.00, 0.00, '2025-01-20 15:47:45'),
(13, 9, 4000, 12000.00, 8000.00, '2025-01-20 17:13:01'),
(39, 11, 40000, 20000.00, 0.00, '2025-01-21 11:54:14'),
(40, 11, 0, 0.00, 0.00, '2025-01-21 11:54:22'),
(41, 11, 40000, 50000.00, 10000.00, '2025-01-21 11:54:22'),
(42, 11, 0, 0.00, 0.00, '2025-01-21 11:54:43'),
(43, 11, 40000, 50000.00, 10000.00, '2025-01-21 11:54:43'),
(44, 11, 40000, 50000.00, 10000.00, '2025-01-21 11:55:37'),
(45, 11, 0, 0.00, 0.00, '2025-01-21 11:55:37'),
(47, 11, 40000, 50000.00, 10000.00, '2025-01-21 12:04:28'),
(48, 11, 0, 0.00, 0.00, '2025-01-21 12:05:38'),
(49, 11, 40000, 50000.00, 10000.00, '2025-01-21 12:05:38'),
(50, 11, 0, 0.00, 0.00, '2025-01-21 12:07:24'),
(51, 11, 40000, 50000.00, 10000.00, '2025-01-21 12:07:24'),
(52, 11, 0, 0.00, 0.00, '2025-01-21 12:11:06'),
(53, 11, 40000, 50000.00, 10000.00, '2025-01-21 12:13:37'),
(54, 17, 4000, 0.00, 0.00, '2025-01-22 12:53:02'),
(55, 23, 100000, 0.00, 0.00, '2025-02-03 14:43:30'),
(56, 23, 100000, 0.00, 0.00, '2025-02-03 14:43:55'),
(57, 23, 100000, 0.00, 0.00, '2025-02-03 14:44:06'),
(58, 25, 75000, 100000.00, 25000.00, '2025-02-03 14:53:24'),
(59, 59, 2987000, 3000000.00, 13000.00, '2025-02-04 09:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `rekmed`
--

CREATE TABLE `rekmed` (
  `id_rekmed` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `riwayat_penyakit_sekarang` text NOT NULL,
  `riwayat_penyakit_dahulu` text NOT NULL,
  `diagnosis` text NOT NULL,
  `resep` text NOT NULL,
  `catatan` text NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tgl_waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `hasil_tindakan` text NOT NULL,
  `tindakan_lanjutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekmed`
--

INSERT INTO `rekmed` (`id_rekmed`, `id_pasien`, `id_bidang`, `id_kunjungan`, `id_tindakan`, `keluhan`, `riwayat_penyakit_sekarang`, `riwayat_penyakit_dahulu`, `diagnosis`, `resep`, `catatan`, `id_dokter`, `tgl_waktu`, `hasil_tindakan`, `tindakan_lanjutan`) VALUES
(1, 16, 1, 9, 3, 'sdljofaad', 'as,ndfk', 'sdljofaad', 'sdljofaad', 'sdljofaad', 'masuk angin', 1, '2025-01-11 01:37:43', 'sdljofaad', ''),
(2, 20, 1, 12, 3, 'batuk darah ', 'batuk darah 2 hari', 'tidak ada', 'banyak main epep', '2 gram bodrex', 'jang begitu yah lain kali, madafaka men', 1, '2025-01-13 23:39:18', 'pasien melarikan diri setelah disuntik', ''),
(3, 20, 1, 13, 3, ' nyeri otot', 'nyeri otot', 'nyeri otot', 'nyeri otot', 'bodrex', 'nyerii otot', 1, '2025-01-14 17:48:55', 'tak tahulah', ''),
(4, 27, 1, 14, 3, 'Batuk Berdahak', 'Batuk berdahak', 'tidak ada', 'batuk batuk ', 'Paracetamol 500mg dan ', 'jangan minum es', 0, '2025-01-14 21:57:36', '3', ''),
(5, 30, 1, 15, 3, 'sakit hati ', 'sakit hati', 'sakit hati', 'sakit hati', 'Paracetamol 500 mg', 'sal', 1, '2025-01-16 12:41:22', 'kejang kejang', ''),
(6, 21, 1, 18, 3, 'caslfd', 'aslkndfk', 'saya', 'tidak boat', 'botak', 'siap', 0, '2025-01-16 22:32:36', '3', ''),
(7, 23, 1, 20, 3, 'cas,dnf', 'casdc', 'asdf', 'asdf', 'sdawq', 'asda', 0, '2025-01-16 22:33:41', '3', ''),
(8, 23, 1, 2, 3, 'sakit perut', 'sakit perut', 'sakit perut', 'sakit perut', '1 g paracetamol', 'apa yah', 0, '2025-01-17 03:14:47', '3', ''),
(9, 27, 1, 1, 3, 'alskjlcvsd', 'asnckasn', 'asmnck', 'vasdlvns', 'v dskvn', 'yng hao', 1, '2025-01-17 03:25:33', '3', ''),
(10, 23, 1, 2, 3, 'sakit kepala ', 'sakit kepala ', 'sakit kepala ', 'sakit kepala ', '500 mg paracetamol', 'surah', 1, '2025-01-17 17:45:02', 'sakit kepala ', ''),
(11, 18, 1, 3, 3, 'sakiit kepala', 'sakiit kepala', 'sakiit kepala', 'sakiit kepala', '500 mg paracetamol', 'jangan begitu yah lain kali', 1, '2025-01-18 14:28:08', 'kejang kejang', ''),
(12, 22, 1, 4, 3, 'apalah', 'apalah', 'apalah', 'apalah', '3000 mg paracetamol', 'askdjal', 3, '2025-01-18 15:33:30', 'apalah', ''),
(13, 15, 1, 5, 3, 'assdksa', 'csalasc', 'csac', 'csdc', 'csdaaca', 'csdacA', 3, '2025-01-18 15:43:34', 'casdcas', ''),
(14, 22, 1, 6, 3, ';zmlqW', 'DWEFA', 'ADFCSD', 'CSD', 'XQWX', 'QXWX', 3, '2025-01-18 16:26:59', 'WQX', 'DWAWX'),
(15, 22, 1, 7, 0, 'csamofj', 'c ascn', 'c ascn', 'c ascn', 'c ascn', 'c ascn', 1, '2025-01-20 12:43:10', 'c ascn', 'c ascn'),
(16, 21, 1, 8, 0, 'djccsadkc', 'djccsadkc', 'djccsadkc', 'djccsadkc', 'djccsadkc', 'djccsadkc', 1, '2025-01-20 14:41:11', 'djccsadkc', 'djccsadkc'),
(17, 27, 1, 9, 0, 'xaslcksa', 'scvd', 'xc ', 'cvz', ' xcz', ' zx', 1, '2025-01-20 15:35:18', 'xc ', 'xcv'),
(20, 16, 1, 10, 0, 'camlCMs', 'csAD', 'cxkl', 'zxcv', 'zxvz', ' zx z', 3, '2025-01-20 22:30:35', '', ''),
(21, 14, 1, 11, 1, 'nskda', 'vsadva', 'sadvsadv', 'csadc', 'nbjhg', 'nkjh', 1, '2025-01-21 09:33:44', 'bjbbjbj', 'bjgh'),
(22, 27, 1, 13, 13, 'satu ', 'dua', 'tiga', 'empat', 'czx', 'czxocsd', 1, '2025-01-21 15:40:28', 'sdzc', 'we'),
(23, 22, 1, 16, 4, 'sakit', 'sakit', 'sakit', 'sakit', 'paracetamol', 'sakit', 1, '2025-01-22 11:49:33', 'sakit', 'sakit'),
(24, 27, 1, 17, 12, 'SATU', 'SATU', 'SATU', 'SATU', 'SATU', 'SATU', 3, '2025-01-22 12:51:15', 'SATU', 'SATU'),
(25, 23, 1, 18, 11, 'CUCI', 'CUCI', 'CUCI', 'CUCI', 'CUCI', 'CUCI', 1, '2025-01-22 13:30:34', 'CUCI', 'CUCI'),
(26, 38, 1, 23, 10, 'fsgsd', 'ds', 's', 'jkhjk', 'nkj', 'sadas', 3, '2025-02-03 11:57:15', 'nk', ''),
(27, 22, 1, 25, 12, 'sakit', 'sakit', 'sakit', 'sakit', 'bionemi 2, dextral 2', 'sakit', 3, '2025-02-03 14:50:36', 'sakit', ''),
(28, 39, 1, 24, 12, 'sakit', 'sakit', 'sakit', 'sakit', 'sakit', 'sakit', 1, '2025-02-03 16:07:38', 'sakit', ''),
(29, 23, 1, 26, 5, 'daslkd', 'daslkd', 'v', 'daslkd', 'daslkd', 'daslkd', 3, '2025-02-03 16:10:52', 'daslkd', ''),
(30, 41, 1, 58, 4, 'sakit perut', 'sakir perut', 'sakit perut ', 'sakit perut', 'paracetamol 2, amoxcilin 2', 'sakit perut \r\n', 3, '2025-02-04 08:47:06', 'sakit perut ', ''),
(31, 35, 1, 59, 4, 'sakit perut', 'sakit perut', 'sakit perut', 'sakit perut', 'sakit perut', 'sakit perut', 1, '2025-02-04 08:52:51', 'sakit perut', '');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(10) NOT NULL,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `tarif` decimal(10,0) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `tarif`, `deskripsi`) VALUES
(4, 'Pemeriksaan Umum', 10000, 'Pemeriksaan kondisi kesehatan secara umum oleh dokter atau tenaga medis untuk mendiagnosis penyakit ringan atau gangguan kesehatan umum lainnya.'),
(5, 'Pemberian Resep Obat', 5000, 'Penulisan resep obat berdasarkan diagnosa dokter untuk pengobatan penyakit yang diderita pasien.'),
(6, 'Pemasangan Infus', 20000, 'Prosedur medis memasukkan cairan infus ke dalam pembuluh darah pasien untuk hidrasi atau pengobatan.'),
(7, 'Penjahitan Luka	', 50000, 'Tindakan menutup luka terbuka dengan menggunakan benang jahit untuk menghentikan pendarahan dan mempercepat proses penyembuhan.'),
(8, 'Pemberian Imunisasi', 15000, 'Vaksinasi untuk mencegah penyakit tertentu pada bayi, balita, atau orang dewasa sesuai jadwal imunisasi.'),
(9, 'Penambalan Gigi', 40000, 'Prosedur untuk menutup lubang pada gigi yang berlubang menggunakan bahan tambalan seperti amalgam atau komposit.'),
(10, 'Pencabutan Gigi', 30000, 'Tindakan mencabut gigi yang rusak atau tidak dapat dipertahankan lagi untuk mencegah infeksi atau masalah kesehatan lain.'),
(11, 'Konsultasi Kesehatan', 10000, 'Diskusi dan pengarahan oleh tenaga medis mengenai kondisi kesehatan pasien dan langkah pengobatan atau pencegahan yang dapat diambil.'),
(12, 'Pemeriksaan Kehamilan', 25000, 'Pemeriksaan kesehatan ibu hamil untuk memantau perkembangan janin dan kesehatan ibu selama masa kehamilan.'),
(13, 'Pemberian Nebulizer', 15000, 'Tindakan pemberian uap obat menggunakan nebulizer untuk membantu pasien dengan gangguan pernapasan seperti asma atau bronkitis.');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_lab`
--

CREATE TABLE `tindakan_lab` (
  `id_tindakan_lab` int(11) NOT NULL,
  `nama_tindakan_lab` varchar(150) NOT NULL,
  `tarif_lab` decimal(10,2) NOT NULL,
  `deskripsi_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tindakan_lab`
--

INSERT INTO `tindakan_lab` (`id_tindakan_lab`, `nama_tindakan_lab`, `tarif_lab`, `deskripsi_lab`) VALUES
(1, 'Pemeriksaan Hemoglobin', 15000.00, 'Pemeriksaan untuk mengetahui kadar hemoglobin dalam darah guna mendeteksi anemia atau gangguan darah lainnya.'),
(2, 'Pemeriksaan Gula Darah', 20000.00, 'Pemeriksaan kadar glukosa dalam darah untuk mendiagnosis diabetes atau gangguan metabolisme lainnya.'),
(3, 'Pemeriksaan Kolesterol', 25000.00, 'Mengukur kadar kolesterol total dalam darah untuk memantau risiko penyakit jantung dan pembuluh darah.'),
(4, 'Pemeriksaan Asam Urat', 25000.00, 'Pemeriksaan kadar asam urat dalam darah untuk mendeteksi risiko penyakit asam urat atau gout.'),
(5, 'Pemeriksaan Urin Lengkap', 30000.00, 'Analisis komprehensif urin untuk memeriksa infeksi saluran kemih, gangguan ginjal, dan kondisi lainnya.'),
(6, 'Pemeriksaan Trombosit', 20000.00, 'Pemeriksaan jumlah trombosit dalam darah untuk memantau kondisi seperti demam berdarah atau gangguan pembekuan darah.'),
(7, 'Pemeriksaan SGOT/SGPT', 35000.00, 'Pengukuran enzim hati (SGOT/SGPT) untuk mengevaluasi fungsi hati dan mendeteksi kerusakan atau penyakit hati.'),
(8, 'Pemeriksaan Sputum TB', 40000.00, 'Analisis dahak untuk mendeteksi infeksi tuberkulosis (TB) dengan menggunakan metode mikroskopik.'),
(9, 'Pemeriksaan Malaria', 30000.00, 'Pemeriksaan darah untuk mendeteksi adanya parasit malaria dalam darah pasien.');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_lanjut`
--

CREATE TABLE `tindakan_lanjut` (
  `id_tindakan_lanjut` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_rekmed` int(11) NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tindakan_lanjut`
--

INSERT INTO `tindakan_lanjut` (`id_tindakan_lanjut`, `id_tindakan`, `id_kunjungan`, `id_rekmed`, `hasil`) VALUES
(1, 1, 0, 0, 'gaga'),
(2, 1, 10, 20, 'gaga'),
(3, 1, 12, 2, 'gga'),
(4, 1, 12, 2, 'dada'),
(5, 1, 11, 21, 'gaga'),
(6, 1, 11, 21, 'nana'),
(7, 5, 16, 23, 'sakit'),
(8, 5, 18, 25, 'BOTAK');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_kunjungan`, `id_obat`) VALUES
(1, 23, 5),
(2, 23, 11),
(3, 25, 5),
(4, 25, 6),
(5, 24, 8),
(6, 26, 3),
(7, 26, 11),
(8, 58, 1),
(9, 58, 2),
(10, 59, 1),
(11, 59, 2),
(12, 59, 3),
(13, 59, 4),
(14, 59, 5),
(15, 59, 6),
(16, 59, 7),
(17, 59, 8),
(18, 59, 10),
(19, 59, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `peran` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass`, `peran`, `nama_lengkap`, `foto`) VALUES
(1, 'rsky_maulna', '$2y$10$A3ai.FeiQE5zMTFTt.Wz.OyKh5XZwkj9YI6uflOI6HbGlrPhf76m2', 'Admin Utama', 'Daeng Rizki Maulana Rumles', ''),
(2, 'admin_pk', '$2y$10$2TpQhmMVd4EcznXuAN1aNOWL0FlILPpJklmgWFCsBYp3.jMsqjBOm', 'Admin Poli KIA', 'APA', ''),
(3, 'admin_pu', '$2y$10$Q3tDMm.zrF5AhB8o1/yz3u/DCGjbaxECI5bQhh30MmYpVBoHoEBXS', 'Admin Poli Umum', 'saya', ''),
(4, 'admin_pg', '$2y$10$23ydPEDUm77JIcbdfuwp/.J29Aj1BpzIJsqzYO4XDT5W6EvaIIj6C', 'Admin Poli Gigi', 'apa', ''),
(5, 'admin_ap', '$2y$10$JiRxa3FHt39XARX9ux8ijOPs76Cp/dnRiv/2lr7v2Y/BZyhbpIfOu', 'Admin Apotek', 'Mafazah Aisyah', ''),
(6, 'admin_ks', '$2y$10$1HYa3eE4xu2UZsCiWcM6vuZM/TjyHFLULoAJgDwThK.xdo8n.UTzK', 'Admin Kasir', 'admin_ks', ''),
(7, 'admin_lb', '$2y$10$3O8TOcfj7rDd6egT4Cld3e8Woen5NgXNR4pk6CIh1PLHHQvsv5me.', 'Admin Laboratorium', 'apalah', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `data_klinis`
--
ALTER TABLE `data_klinis`
  ADD PRIMARY KEY (`id_klinis`),
  ADD KEY `fk_idPasien_dk` (`id_pasien`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `hasil_lab`
--
ALTER TABLE `hasil_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `idpask` (`id_pasien`),
  ADD KEY `idbidk` (`id_bidang`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_apotek`
--
ALTER TABLE `obat_apotek`
  ADD PRIMARY KEY (`id_pemberian_obat`),
  ADD KEY `idkunoa` (`id_kunjungan`),
  ADD KEY `idobatoa` (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`),
  ADD KEY `idkunpn` (`id_kunjungan`);

--
-- Indexes for table `rekmed`
--
ALTER TABLE `rekmed`
  ADD PRIMARY KEY (`id_rekmed`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `tindakan_lab`
--
ALTER TABLE `tindakan_lab`
  ADD PRIMARY KEY (`id_tindakan_lab`);

--
-- Indexes for table `tindakan_lanjut`
--
ALTER TABLE `tindakan_lanjut`
  ADD PRIMARY KEY (`id_tindakan_lanjut`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_klinis`
--
ALTER TABLE `data_klinis`
  MODIFY `id_klinis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hasil_lab`
--
ALTER TABLE `hasil_lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obat_apotek`
--
ALTER TABLE `obat_apotek`
  MODIFY `id_pemberian_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id_pendapatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `rekmed`
--
ALTER TABLE `rekmed`
  MODIFY `id_rekmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tindakan_lab`
--
ALTER TABLE `tindakan_lab`
  MODIFY `id_tindakan_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tindakan_lanjut`
--
ALTER TABLE `tindakan_lanjut`
  MODIFY `id_tindakan_lanjut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_klinis`
--
ALTER TABLE `data_klinis`
  ADD CONSTRAINT `fk_idPasien_dk` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `idbidk` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idpask` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat_apotek`
--
ALTER TABLE `obat_apotek`
  ADD CONSTRAINT `idkunoa` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idobatoa` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD CONSTRAINT `idkunpn` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
