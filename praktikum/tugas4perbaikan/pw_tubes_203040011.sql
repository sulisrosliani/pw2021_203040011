-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 04:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040011`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `daftar brand` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `harga`, `daftar brand`, `gambar`) VALUES
(1, 'Atlas walisongo', 'Agus sunyoto', 'Rp. 140.000', 'Atlas', 'atlas.jpg'),
(2, 'Bajak laut', 'Brenda raiph', 'Rp. 35.000', 'Gramedia', 'bajak.jpg'),
(3, 'Jalan bareng', 'Ayu', 'Rp. 75.000', 'Erlangga', 'jalan.jpg'),
(4, 'Perang terlama belanda', 'Nino oktorino', 'Rp. 43.000', 'Gramedia', 'perang.jpg'),
(5, 'Sejarah sains', 'Jung hae-yung', 'Rp. 180.000', 'Gramedia', 'sains.jpg'),
(6, 'Sejarah indonesia', 'Ratna s', 'Rp. 95.000', 'Gramedia', 'sejarah.jpg'),
(7, 'Tahta di Timur jawa', 'Zainollah ahmad', 'Rp. 100.000', 'Gramedia', 'tahta.jpg'),
(8, 'Tes psikologi', 'Laura ', 'Rp. 138.000', 'Gramedia', 'tes.jpg'),
(9, 'Tol udara nusantara', 'Chappy hakim', 'Rp. 99.000', 'Erlangga', 'tol.jpg'),
(10, 'Trump revealed', 'Michael kranish', 'Rp. 149.000', 'Gramedia', 'trump.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
