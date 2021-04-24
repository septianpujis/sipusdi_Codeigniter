-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2021 at 03:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipusdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `id_buku` int(8) NOT NULL,
  `sampul` varchar(30) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `penulis` varchar(60) NOT NULL,
  `penerbit` varchar(70) NOT NULL,
  `tahun` int(4) NOT NULL,
  `halaman` int(5) NOT NULL,
  `genre` varchar(35) NOT NULL,
  `sinopsis` varchar(500) DEFAULT NULL,
  `sedia` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id_buku`, `sampul`, `judul`, `penulis`, `penerbit`, `tahun`, `halaman`, `genre`, `sinopsis`, `sedia`) VALUES
(1, '', 'Mudah Membuat Website menggunakan CodeIgniter', 'Tengku Azirudin', 'Penerbit Andi', 2020, 300, 'Pendidikan', 'Bikin Website pake platform CodeIgniter 3', 1),
(2, '', 'Skripsi', 'Septian', 'Uin Jakarta', 2020, 198, 'Horor', 'Skripsi Dibuat sebagai syarat Kelulusan dan menerima Gelar Sarjana Komputer', 0),
(3, '', 'Mengembangkan Framework Aplikasi Database dengan C', 'Betha Sidik', 'Penerbit Informatika', 2019, 480, 'Pendidikan', 'Mengembangkan Framework Aplikasi Database dengan Codeigniter 3', 1),
(5, '', 'Matematika Dasar', 'Alidah', 'Khairunnisa', 2013, 120, 'Pendidikan', 'Buku Matematika Dasar untuk Perkuliahan', 1),
(7, '', 'ADULT COLORING BOOK: COLOR HARMONY', 'HUTA PARHAPURAN', 'PT. CGI NTX', 2018, 100, 'Seni', NULL, 1),
(8, '', 'SEBUAH SENI UNTUK BERSIKAP BODO AMAT', 'Mark Manson', 'GRAMEDIA WIDIASARANA INDONESIA', 2018, 100, 'SELF IMPROVEMENT', NULL, 1),
(9, '', 'SEBUAH SENI UNTUK BERSIKAP BODO AMAT', 'Mark Manson', 'GRAMEDIA WIDIASARANA INDONESIA', 2018, 100, 'SELF IMPROVEMENT', NULL, 1),
(10, '', 'SEBUAH SENI UNTUK BERSIKAP BODO AMAT', 'Mark Manson', 'GRAMEDIA WIDIASARANA INDONESIA', 2018, 100, 'SELF IMPROVEMENT', NULL, 1),
(11, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(12, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(13, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(14, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(15, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(16, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(17, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(18, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(19, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(20, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(21, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(22, '', 'BICARA ITU ADA SENINYA', 'OH SU HYANG', 'BHUANA ILMU POPULER', 2014, 120, 'SELF IMPROVEMENT', NULL, 1),
(23, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(24, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(25, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(26, '', 'SD/MI DETIK-DETIK USBN TAHUN 2018/2019', 'ANTON SUPARYANTA', 'INTAN PARIWARA', 2018, 120, 'SCHOOLBOOKS', NULL, 1),
(27, '', 'AL QUR`AN CORDOBA PERKATA A5 AL-IHSAN', 'CORDOBA INT INDONESIA', 'GRAMEDIA WIDIASARANA INDONESIA', 2014, 620, 'RELIGION & SPIRITUALITY', NULL, 1),
(28, '', 'AL QUR`AN CORDOBA PERKATA A5 AL-IHSAN', 'CORDOBA INT INDONESIA', 'GRAMEDIA WIDIASARANA INDONESIA', 2014, 620, 'RELIGION & SPIRITUALITY', NULL, 1),
(29, '', 'KOMET MINOR', 'TERE LIYE', 'GRAMEDIA PUSTAKA UTAMA', 2015, 230, 'NOVEL', NULL, 1),
(30, '', 'KOMET MINOR', 'TERE LIYE', 'GRAMEDIA PUSTAKA UTAMA', 2015, 230, 'NOVEL', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kode_kelas`
--

CREATE TABLE `tb_kode_kelas` (
  `id_kelas` int(2) NOT NULL,
  `nama_kelas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kode_kelas`
--

INSERT INTO `tb_kode_kelas` (`id_kelas`, `nama_kelas`) VALUES
(0, 'Pegawai'),
(1, '10-1'),
(2, '10-2'),
(3, '10-3'),
(4, '10-4'),
(5, '10-5'),
(6, '11-1'),
(7, '11-2'),
(8, '11-3'),
(9, '11-4'),
(10, '11-5'),
(11, '12-1'),
(12, '12-2'),
(13, '12-3'),
(14, '12-4'),
(15, '12-5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_transaksi`
--

CREATE TABLE `tb_status_transaksi` (
  `id_status` int(2) NOT NULL,
  `nama_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status_transaksi`
--

INSERT INTO `tb_status_transaksi` (`id_status`, `nama_status`) VALUES
(1, 'Belum Dikembalikan'),
(2, 'Sudah Dikembalikan'),
(3, 'Belum Dikembalikan, Terlambat'),
(4, 'Sudah Dikembalikan, Terlambat'),
(5, 'Belum Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(8) NOT NULL,
  `nomor_induk` varchar(12) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `level` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nomor_induk`, `nama`, `level`, `email`, `password`, `id_kelas`, `no_telp`, `foto`) VALUES
(1, '2020', 'septi', 1, 'septi@septi', 'septi', 0, '081513671960', NULL),
(2, '2021', 'dzaki', 2, 'dzaki@email', '123', 1, '0808', NULL),
(5, '2022', 'puji', 1, '1@aa', 'a', 0, NULL, NULL),
(7, '2024', 'siti', 2, '3@aa', 'a', 15, '231', NULL),
(8, '2025', 'Ruth', 2, 'ruth@gm', 'ruth', 1, '08081', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tr_transaksi`
--

CREATE TABLE `tr_transaksi` (
  `id_trans` int(11) NOT NULL,
  `waktu_pinjam` date NOT NULL,
  `waktu_ambil` date DEFAULT NULL,
  `waktu_kembali` date DEFAULT NULL,
  `id_user` int(8) NOT NULL,
  `id_buku` int(8) NOT NULL,
  `id_status` int(2) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_transaksi`
--

INSERT INTO `tr_transaksi` (`id_trans`, `waktu_pinjam`, `waktu_ambil`, `waktu_kembali`, `id_user`, `id_buku`, `id_status`) VALUES
(1, '2021-02-19', '2021-02-19', '0000-00-00', 1, 2, 1),
(2, '2021-02-14', '0000-00-00', '2021-02-16', 2, 1, 1),
(3, '2021-02-19', NULL, NULL, 2, 1, 5),
(4, '2021-02-02', '0000-00-00', '2021-02-07', 1, 2, 2),
(2012021005, '2021-02-22', NULL, NULL, 8, 1, 5),
(2012021006, '2021-02-22', '0000-00-00', '0000-00-00', 8, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kode_kelas`
--
ALTER TABLE `tb_kode_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_status_transaksi`
--
ALTER TABLE `tb_status_transaksi`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tr_transaksi`
--
ALTER TABLE `tr_transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id_buku` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tr_transaksi`
--
ALTER TABLE `tr_transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012021007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kode_kelas` (`id_kelas`);

--
-- Constraints for table `tr_transaksi`
--
ALTER TABLE `tr_transaksi`
  ADD CONSTRAINT `tr_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tr_transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_book` (`id_buku`),
  ADD CONSTRAINT `tr_transaksi_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tb_status_transaksi` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
