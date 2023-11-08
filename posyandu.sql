-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2023 at 08:07 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'mifdal', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `NIK` varchar(30) DEFAULT NULL,
  `namaanak` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(30) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `berat_badan` decimal(10,2) DEFAULT NULL,
  `tinggi_badan` decimal(10,2) DEFAULT NULL,
  `id_ortu` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `NIK`, `namaanak`, `tempatlahir`, `tanggallahir`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `id_ortu`, `anak_ke`) VALUES
(1, '67093744006', 'Agyva', 'Banjarmasin', '2012-02-22', 'Laki-Laki', 10.00, 30.00, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(11) NOT NULL,
  `nama_bidan` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(30) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(30) DEFAULT NULL,
  `notelp` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidan`
--

INSERT INTO `bidan` (`id_bidan`, `nama_bidan`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `notelp`, `alamat`) VALUES
(1, 'Laras', 'banjarmasin', '1998-02-26', 'perempuan', '086567715722', 'Jl. Jenderal Ahmad Yani');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `id_bidan` int(11) NOT NULL,
  `tanggal_imunisasi` date DEFAULT NULL,
  `id_jenisimunisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `id_anak`, `id_bidan`, `tanggal_imunisasi`, `id_jenisimunisasi`) VALUES
(1, 1, 1, '2013-03-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_imunisasi`
--

CREATE TABLE `jenis_imunisasi` (
  `id_jenisimunisasi` int(11) NOT NULL,
  `keterangan` varchar(125) DEFAULT NULL,
  `jenis_vaksin` varchar(20) DEFAULT NULL,
  `tanggalimunisasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_imunisasi`
--

INSERT INTO `jenis_imunisasi` (`id_jenisimunisasi`, `keterangan`, `jenis_vaksin`, `tanggalimunisasi`) VALUES
(1, 'Setelah menerima satu dosis, 85% anak usia sembilan bulan dan 95% anak usia di atas dua belas bulan akan menjadi imun.', 'campak', '2013-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_ortu` int(11) NOT NULL,
  `NIK` varchar(30) DEFAULT NULL,
  `namaayah` varchar(30) DEFAULT NULL,
  `namaibu` varchar(30) DEFAULT NULL,
  `notelp` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_ortu`, `NIK`, `namaayah`, `namaibu`, `notelp`, `alamat`) VALUES
(1, '670937440055', 'Agus', 'Vita', '086755466778', 'Jl. Veteran');

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `lingkar_kepala` decimal(10,2) DEFAULT NULL,
  `berat_timbangan` decimal(10,2) DEFAULT NULL,
  `tinggi_pengukuran` decimal(10,2) DEFAULT NULL,
  `id_bidan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `id_anak`, `lingkar_kepala`, `berat_timbangan`, `tinggi_pengukuran`, `id_bidan`) VALUES
(1, 1, 20.00, 16.00, 32.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_ortu` (`id_ortu`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`),
  ADD KEY `id_anak` (`id_anak`,`id_bidan`,`id_jenisimunisasi`),
  ADD KEY `id_bidan` (`id_bidan`),
  ADD KEY `id_jenisimunisasi` (`id_jenisimunisasi`);

--
-- Indexes for table `jenis_imunisasi`
--
ALTER TABLE `jenis_imunisasi`
  ADD PRIMARY KEY (`id_jenisimunisasi`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `id_anak` (`id_anak`,`id_bidan`),
  ADD KEY `id_bidan` (`id_bidan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_imunisasi`
--
ALTER TABLE `jenis_imunisasi`
  MODIFY `id_jenisimunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_ortu`) REFERENCES `orang_tua` (`id_ortu`);

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `imunisasi_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`),
  ADD CONSTRAINT `imunisasi_ibfk_2` FOREIGN KEY (`id_bidan`) REFERENCES `bidan` (`id_bidan`),
  ADD CONSTRAINT `imunisasi_ibfk_3` FOREIGN KEY (`id_jenisimunisasi`) REFERENCES `jenis_imunisasi` (`id_jenisimunisasi`);

--
-- Constraints for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `penimbangan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`),
  ADD CONSTRAINT `penimbangan_ibfk_2` FOREIGN KEY (`id_bidan`) REFERENCES `bidan` (`id_bidan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
