-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 14.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_alat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `Barang_id` int(100) NOT NULL,
  `Barang_nama` varchar(100) NOT NULL,
  `Barang_lab_id` int(11) NOT NULL,
  `Barang_Loker` varchar(255) NOT NULL,
  `Barang_jumlah_sisa` int(11) NOT NULL,
  `Barang_jumlah` int(11) NOT NULL,
  `Barang_merk` varchar(100) NOT NULL,
  `Barang_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Barang_id`, `Barang_nama`, `Barang_lab_id`, `Barang_Loker`, `Barang_jumlah_sisa`, `Barang_jumlah`, `Barang_merk`, `Barang_foto`) VALUES
(291783736, 'PC', 1, '', 0, 93, 'LG', ''),
(291783737, 'PC', 1, '', 0, 3, 'Asroock', ''),
(291783740, 'Button', 0, '', 0, 4, 'LG', ''),
(291783741, 'Monitor', 0, '', 0, 10, 'LG', ''),
(291783742, 'jely', 0, '', 0, 4, 'Logitech', ''),
(291783743, 'Monitor ', 0, '', 0, 0, 'LOGITECH', ''),
(291783744, 'keyboard', 0, '', 0, 155, 'LOGITECH', ''),
(291783745, 'MAKANAN ', 0, '', 0, 10, 'SAMSUNG ', ''),
(291783821, 'Monitor', 0, '', 0, 6, 'LG ', ''),
(291783822, 'PC', 0, '', 0, 9, 'Asroo', ''),
(291783823, 'Meja komputer', 0, '', 0, 6, 'ATMI', 'meja-komputer-aditech-k-120-belakang.jpg'),
(291783827, 'Meja kerja instruktur 2 laci', 0, '', 0, 1, 'ATMI', ''),
(291783829, 'UPS 500 VA', 0, '', 0, 1, 'APC', ''),
(291783830, 'Lmeari ', 0, '', 0, 1, 'ATMI', ''),
(291783831, 'Lemari kaca', 0, '', 0, 1, 'ATMI', ''),
(291783832, 'White board', 0, '', 0, 1, 'ATMI', '1280px-Whiteboard_with_markers.jpg'),
(291783833, 'Kursi instruktur beroda', 0, '', 0, 1, 'ATMI', '3371fb9e-c809-4311-bace-ec6defd815f9.jpg'),
(291783834, 'PC bekas', 0, '', 0, 3, 'SIM-X', ''),
(291783835, 'Keyboard mouse wireless', 0, '', 0, 6, 'MB Tech', 'download (14).jpg'),
(291783836, 'Mainboard bekas', 0, '', 0, 4, 'Logitech', '51Szg8og97L.jpg'),
(291783837, 'Keyboard', 0, '', 0, 9, 'Logitech', 'download (4).jpg'),
(291783838, 'Mouse', 0, '', 0, 9, 'Logitech', 'logitech-wired-mouse-b100-black-5.jpg'),
(291783839, 'Dongle wireless', 0, '', 0, 6, 'Tplink', '53734080_4553e03b-eb02-4573-9b7d-3e26f71e2ea2_700_700.jpg'),
(291783840, 'Dongle wireless', 0, '', 0, 3, 'Dlink', '53734080_4553e03b-eb02-4573-9b7d-3e26f71e2ea2_700_700.jpg'),
(291783841, 'AC', 0, '', 0, 1, 'Daikin', ''),
(291783842, 'Toolkit', 0, '', 0, 1, 'RANFIX', ''),
(291783843, 'Switch port 8 ', 0, '', 0, 1, 'Dlink', 'DGS108B1Image-LFront-510x287.png'),
(291783844, 'RASPBERRY PI 3', 0, '', 0, 3, 'UK', ''),
(291783845, 'RASPBERRY PI 4', 0, '', 0, 6, 'UK', 'download (6).jpg'),
(291783846, 'Craming cable', 0, '', 0, 2, '', 'download (7).jpg'),
(291783847, 'Network Kabel tester', 0, '', 0, 1, '', 'download (9).jpg'),
(291783848, 'UTP Cable', 0, '', 0, 7, 'Beiden', '2461990_288e4f38-9955-42de-b3dc-7fba91af12bc_700_700.jpg'),
(291783849, 'Charger battery AAA & AA', 0, '', 0, 1, 'SONY ', 'doublepow-charger-baterai-4-slot-for-aa-or-aaa-with-4pcs-aaa-battery-1250mah-db-b02-white-270.jpg'),
(291783850, 'Connector HDMI to VGA', 0, '', 0, 9, '', '2461990_288e4f38-9955-42de-b3dc-7fba91af12bc_700_700.jpg'),
(291783851, 'Connector SATA HD', 0, '', 0, 6, '', 'download (10).jpg'),
(291783852, 'Connector RJ45', 0, '', 0, 100, '', 'aea27a420da1b03f3afff7b83cc82b0d.jpg'),
(291783853, 'toolbox pralktek (orange)', 0, '', 0, 6, '', ''),
(291783854, 'toolbox pralktek (orange)', 0, '', 0, 6, '', ''),
(291783855, 'Toolbox prqktek (biru)', 0, '', 0, 6, '', '75cfcd94d833240a9fc802b046804639.jpg'),
(291783856, 'Tolboox praltek ( hitam)', 0, '', 0, 2, '', '1142697_95dbfb58-19ae-47cd-8410-cc5241962838_1500_1500.jpg'),
(291783857, 'Cadangan adaptor raspi ', 0, '', 0, 3, '', '16120920_9c706223-f2a6-4e44-9977-3e71cc4b4c61_400_400.jpg'),
(291783858, 'Kabel jumper', 0, '', 0, 10, '', ''),
(291783859, 'Roll cable 10m', 0, '', 0, 3, '', '2b4f3178-71d6-4728-99b8-cc6470ae3f65.jpg'),
(291783860, 'Extend cable 5 colokan ', 0, '', 0, 4, '', 'b77aad7dad132fcc8443da040015dbcb.jpg'),
(291783861, 'DVD /RW Room SATA ', 0, '', 0, 2, '', '45928975_a3a00f88-add2-44c7-9092-4cc56e373701_460_460.jpg'),
(291783862, 'DVD/RW Room IDE', 0, '', 0, 4, '', '3175960a-73b0-4a6e-9820-4045ccd57f2e.png'),
(291783863, 'Power supply bekas', 0, '', 0, 9, '', 'download (12).jpg'),
(291783878, 'Power Supply 300 VDC', 0, '', 0, 2, 'Delta Elektronika', 'download (16).jpg'),
(291783879, 'Multimeter', 0, '', 0, 7, 'Fluke', 'aa4bd46d4b0917fa109ad55591e9408a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `gudang_id` int(100) NOT NULL,
  `gudang_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`gudang_id`, `gudang_nama`) VALUES
(1, 'Meja'),
(2, 'Kursi'),
(3, 'Monitor'),
(4, 'Keyboard\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instrukturlab`
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

--
-- Dumping data untuk tabel `instrukturlab`
--

INSERT INTO `instrukturlab` (`Instruktur_id`, `Instruktur_nama`, `Instruktur_email`, `Instruktur_NIK`, `Instruktur_tag`, `Instruktur_pin`, `Instruktur_koin`, `Instruktur_foto`, `Instruktur_nokoin`, `Instruktur_lab_id`, `Instruktur_level_id`) VALUES
(1, 'Yustina Tritularsih', 'Yustina@gmail.com', '20192032', '123456', '123456', 10, '', '', 1, 2),
(2, 'Maria Marcelinna', 'Maria@gmail.com', '20192033', '654321', '123456', 10, '', '', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `Lab_id` int(11) NOT NULL,
  `Lab_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`Lab_id`, `Lab_nama`) VALUES
(1, 'Lab pemongraman '),
(2, 'Lab Comuter Device');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `Level_id` int(11) NOT NULL,
  `Level_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`Level_id`, `Level_nama`) VALUES
(1, 'Admin'),
(2, 'Dosen'),
(3, 'Mahasiswa\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
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
  `Pinjam_status` int(11) NOT NULL,
  `Pinjam_durasi_terlambat` int(11) NOT NULL,
  `Pinjam_foto` blob NOT NULL,
  `Pinjam_foto_kembali` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_userlab`
--

CREATE TABLE `tr_userlab` (
  `Userlab_id` int(11) NOT NULL,
  `User_tag` int(11) NOT NULL,
  `Lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tr_userlab`
--

INSERT INTO `tr_userlab` (`Userlab_id`, `User_tag`, `Lab_id`) VALUES
(1, 5, 1),
(3, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`User_id`, `User_nama`, `User_prodi`, `User_email`, `User_pin`, `User_tag`, `User_koin`, `User_foto`, `User_nokoin`, `User_level_id`, `User_lab_id`) VALUES
(20192001, 'Albertus Christian Prabas', 'Mekatronika', 'albertus.20192001@student.atmi.ac.id', '140801', '1', 10, '20192001_ALBERTUS CHRISTIAN PRABASWARA.png', 'y-0109', 1, 0),
(20192022, 'Doddy Alviyan', 'Mekatronika', 'doddy.20192022@student.atmi.ac.id', '220300', '2', 10, '20192022_DODDY ALVIYAN.png', 'y-0130', 3, 0),
(20192038, 'Juliana Devi Hapsari', 'Mekatronika', 'juliana.20192038@student.atmi.ac.id', '010101', '3', 10, 'depi.png', 'y-0146', 3, 0),
(20192054, 'Yustina Tritularsih', '', '', '654321', '4', 0, '', '', 2, 2),
(20192060, 'Maria Marcelinna', '', '', '123456', '5', 0, '', '', 2, 1),
(20192070, 'Yusuf Kukuh Adi Wicaksono', 'Mekatronika', 'yusuf.20192070@student.atmi.ac.id', '010501', '6', 10, '', 'y-0178', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Barang_id`),
  ADD KEY `ID_Lab` (`Barang_lab_id`) USING BTREE;

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`gudang_id`);

--
-- Indeks untuk tabel `instrukturlab`
--
ALTER TABLE `instrukturlab`
  ADD PRIMARY KEY (`Instruktur_id`),
  ADD KEY `id_lab` (`Instruktur_lab_id`),
  ADD KEY `id_level` (`Instruktur_level_id`) USING BTREE;

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`Level_id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`Pinjam_id`),
  ADD KEY `IDbarang` (`Pinjam_barang_id`);

--
-- Indeks untuk tabel `tr_userlab`
--
ALTER TABLE `tr_userlab`
  ADD PRIMARY KEY (`Userlab_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `level_id` (`User_level_id`),
  ADD KEY `User_tag` (`User_tag`),
  ADD KEY `User_tag_2` (`User_tag`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `Barang_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291783880;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `gudang_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `Pinjam_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tr_userlab`
--
ALTER TABLE `tr_userlab`
  MODIFY `Userlab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20192071;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `instrukturlab`
--
ALTER TABLE `instrukturlab`
  ADD CONSTRAINT `instrukturlab_ibfk_1` FOREIGN KEY (`Instruktur_lab_id`) REFERENCES `lab` (`Lab_id`),
  ADD CONSTRAINT `instrukturlab_ibfk_2` FOREIGN KEY (`Instruktur_level_id`) REFERENCES `level` (`Level_id`),
  ADD CONSTRAINT `instrukturlab_ibfk_3` FOREIGN KEY (`Instruktur_level_id`) REFERENCES `level` (`Level_id`);

--
-- Ketidakleluasaan untuk tabel `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `level_ibfk_1` FOREIGN KEY (`Level_id`) REFERENCES `user` (`User_level_id`);

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`Pinjam_barang_id`) REFERENCES `barang` (`Barang_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
