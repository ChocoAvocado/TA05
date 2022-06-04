-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 09:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjamanalat`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Barang_id` int(100) NOT NULL,
  `Barang_lab_id` int(11) NOT NULL,
  `Barang_nama` varchar(100) NOT NULL,
  `Barang_Loker` varchar(255) NOT NULL,
  `Barang_jumlah` int(11) NOT NULL,
  `Barang_merk` varchar(100) NOT NULL,
  `Barang_foto` varchar(100) NOT NULL,
  `Barang_qrcode` varchar(100) NOT NULL,
  `Barang_gudang_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Barang_id`, `Barang_lab_id`, `Barang_nama`, `Barang_Loker`, `Barang_jumlah`, `Barang_merk`, `Barang_foto`, `Barang_qrcode`, `Barang_gudang_id`) VALUES
(1, 1, 'cake', '123', 10, 'toyota', '', '123123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `gudang_id` int(100) NOT NULL,
  `gudang_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`gudang_id`, `gudang_nama`) VALUES
(1, 'Meja'),
(2, 'Kursi'),
(3, 'Monitor'),
(4, 'Keyboard\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `instrukturlab`
--

CREATE TABLE `instrukturlab` (
  `Instruktur_id` int(11) NOT NULL,
  `Instruktur_nama` varchar(100) NOT NULL,
  `Instruktur_email` varchar(100) NOT NULL,
  `Instruktur_NIK` varchar(100) NOT NULL,
  `Instruktur_tag` varchar(100) NOT NULL,
  `Instruktur_pin` varchar(100) NOT NULL,
  `Instruktur_koin` int(11) NOT NULL,
  `Instruktur_foto` longblob NOT NULL,
  `Instruktur_nokoin` varchar(100) NOT NULL,
  `Instruktur_lab_id` int(11) NOT NULL,
  `Instruktur_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `Lab_id` int(11) NOT NULL,
  `Lab_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`Lab_id`, `Lab_nama`) VALUES
(1, 'Lab pemongraman '),
(2, 'Lab Comuter Device');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `Level_id` int(11) NOT NULL,
  `Level_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`Level_id`, `Level_nama`) VALUES
(1, 'Admin'),
(2, 'Dosen'),
(3, 'Mahasiswa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `Pinjam_id` int(100) NOT NULL,
  `Pinjam_user_tag` varchar(100) NOT NULL,
  `Pinjam_barang_id` int(100) NOT NULL,
  `Pinjam_jumlah` int(11) NOT NULL,
  `Pinjam_tgl` date NOT NULL DEFAULT current_timestamp(),
  `Pinjam_tgl_kembaliplan1` date DEFAULT NULL,
  `Pinjam_tgl_kembaliplan2` date DEFAULT NULL,
  `Pinjam_tgl_kembaliplan3` date DEFAULT NULL,
  `Pinjam_tgl_kembalireal` date DEFAULT NULL,
  `Pinjam_foto` blob NOT NULL,
  `Pinjam_foto_kembali` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`Pinjam_id`, `Pinjam_user_tag`, `Pinjam_barang_id`, `Pinjam_jumlah`, `Pinjam_tgl`, `Pinjam_tgl_kembaliplan1`, `Pinjam_tgl_kembaliplan2`, `Pinjam_tgl_kembaliplan3`, `Pinjam_tgl_kembalireal`, `Pinjam_foto`, `Pinjam_foto_kembali`) VALUES
(1, '0002985005', 123123, 3, '2022-06-04', '2022-06-04', NULL, NULL, '2022-06-04', '', ''),
(4, '0002985005', 123123, 12, '2022-06-04', '2022-06-04', NULL, NULL, NULL, '', ''),
(8, '<br />\r\n<b>Warning</b>:  Undefined variable $valuecariuser in <b>C:xampphtdocswebsitePeminjamanappvi', 0, 12, '2022-06-04', '2022-06-04', NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(100) NOT NULL,
  `User_nama` varchar(100) NOT NULL,
  `User_prodi` text NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `User_pin` varchar(10) NOT NULL,
  `User_tag` varchar(20) NOT NULL,
  `User_koin` int(10) NOT NULL,
  `User_foto` varchar(100) NOT NULL,
  `User_nokoin` varchar(100) NOT NULL,
  `User_level_id` int(11) NOT NULL,
  `User_lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_nama`, `User_prodi`, `User_email`, `User_pin`, `User_tag`, `User_koin`, `User_foto`, `User_nokoin`, `User_level_id`, `User_lab_id`) VALUES
(123123, 'achan', 'Mekatronika', '123@asd', '123', '14', 10, 'WhatsApp Image 2022-05-14 at 8.34.49 AM.jpeg', 'y-0000', 2, 0),
(123456, 'Yustina', '', '', '', '12', 10, '', '', 2, 2),
(654321, 'Maria', '', '', '', '13', 10, '', '', 2, 1),
(20192001, 'Albertus Christian Prabaswara', 'Mekatronika', 'albertus.20192001@student.atmi.ac.id', '140801', '0002985005', 10, '20192001_ALBERTUS CHRISTIAN PRABASWARA.png', 'y-0109', 1, 0),
(20192022, 'Doddy Alviyan', 'Mekatronika', 'doddy.20192022@student.atmi.ac.id', '220300', '0002975655', 10, '20192022_DODDY ALVIYAN.png', 'y-0130', 1, 0),
(20192038, 'Juliana Devi Hapsari', 'Mekatronika', 'juliana.20192038@student.atmi.ac.id', '010101', '0009376159', 10, 'depi.png', 'y-0146', 1, 0),
(20192041, 'Laurentius Alpha Marcello', 'Mekatronika', 'laurentius.20192041@student.atmi.ac.id', '180800', '0002985004', 10, '', 'y-0149', 3, 0),
(20192055, 'Rafael Rivaldo Motto', 'Teknik Mesin', 'rafael.20192055@student.atmi.ac.id', '123456', '0006725457', 10, '20192055_RAFAEL RIVALDO MOTTO.jpg', 'y-0163', 1, 0),
(20192070, 'Yusuf Kukuh Adi Wicaksono', 'Mekatronika', 'yusuf.20192070@student.atmi.ac.id', '010501', '0002985003', 10, '', 'y-0178', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Barang_id`),
  ADD UNIQUE KEY `Barang_gudangid` (`Barang_gudang_id`),
  ADD KEY `ID_Lab` (`Barang_lab_id`) USING BTREE;

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`gudang_id`);

--
-- Indexes for table `instrukturlab`
--
ALTER TABLE `instrukturlab`
  ADD PRIMARY KEY (`Instruktur_id`),
  ADD KEY `id_lab` (`Instruktur_lab_id`),
  ADD KEY `id_level` (`Instruktur_level_id`) USING BTREE;

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`Level_id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`Pinjam_id`),
  ADD KEY `IDbarang` (`Pinjam_barang_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `level_id` (`User_level_id`),
  ADD KEY `User_tag` (`User_tag`),
  ADD KEY `User_tag_2` (`User_tag`),
  ADD KEY `User_lab_id` (`User_lab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `Barang_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291783788;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `gudang_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `Pinjam_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20192071;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Barang_gudang_id`) REFERENCES `gudang` (`gudang_id`);

--
-- Constraints for table `instrukturlab`
--
ALTER TABLE `instrukturlab`
  ADD CONSTRAINT `instrukturlab_ibfk_1` FOREIGN KEY (`Instruktur_lab_id`) REFERENCES `lab` (`Lab_id`),
  ADD CONSTRAINT `instrukturlab_ibfk_2` FOREIGN KEY (`Instruktur_level_id`) REFERENCES `level` (`Level_id`),
  ADD CONSTRAINT `instrukturlab_ibfk_3` FOREIGN KEY (`Instruktur_level_id`) REFERENCES `level` (`Level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
