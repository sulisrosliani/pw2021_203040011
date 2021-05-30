-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 08:04 PM
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
-- Database: `db_tokorandom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(1, 16, 'Bunga Anggrek', 25000, '<p><strong>Mawar</strong>, menurut bukti fosil, berumur 35 juta tahun. ... Budidaya taman&nbsp;<strong>mawar</strong>&nbsp;dimulai sekitar 5.000 tahun yang lalu di China. Selama periode Romawi,&nbsp;<strong>mawar</strong>&nbsp;tumbuh luas di Timur Tengah.</p>\r\n', 'anggrek.jpg', 1, '2021-05-18 03:47:33'),
(2, 16, 'Bunga Aster', 50000, '<p>Cocok untuk hiasan di rumah dengan warnanya yang berbeda-beda dan cantik</p>\r\n', 'aster.jpg', 1, '2021-05-18 03:48:44'),
(4, 16, 'Bunga mawar', 55000, '<p><strong>Mawar</strong>, menurut bukti fosil, berumur 35 juta tahun. ... Budidaya taman&nbsp;<strong>mawar</strong>&nbsp;dimulai sekitar 5.000 tahun yang lalu di China. Selama periode Romawi,&nbsp;<strong>mawar</strong>&nbsp;tumbuh luas di Timur Tengah.</p>\r\n', 'mawar.jpg', 1, '2021-05-18 03:50:37'),
(6, 15, 'sepatu converse', 260000, '<p>Bisa digunakan untuk bermain dan sekolah</p>\r\n', 'sepatu4.jpg', 1, '2021-05-18 03:54:02'),
(7, 15, 'Sepatu', 300000, '<p>Ringan saat dipakai</p>\r\n', 'sepatu1.jpg', 1, '2021-05-18 03:55:19'),
(8, 15, 'Sepatu', 250000, '<p>Sepatu yang lucu untuk hangout</p>\r\n', 'sepatu5.jpg', 1, '2021-05-18 03:56:17'),
(9, 14, 'buket', 60000, '<p>Bisa dijadikan hadiah untuk orang terdekat</p>\r\n', 'buket8.jpg', 1, '2021-05-18 03:57:28'),
(10, 14, 'buket', 50000, '<p>Bisa dijadikan untuk hadiah kepada orang terdekat</p>\r\n', 'buket5.jpg', 1, '2021-05-18 03:58:19'),
(11, 14, 'buket', 75000, '<p>Bisa dijadikan hadiah istimewa untuk orang terdekat</p>\r\n', 'buket7.jpg', 1, '2021-05-18 03:59:42'),
(12, 13, 'Baju wanita', 125000, '<p>Bisa dipakai ke kantor</p>\r\n', 'baju1.jpg', 1, '2021-05-18 04:00:50'),
(13, 13, 'Baju wanita', 100000, '<p>Bisa dipakai untuk acara apapun</p>\r\n', 'baju3.jpg', 1, '2021-05-18 04:01:58'),
(14, 13, 'Baju wanita', 75000, '<p>Baju untuk bersantai</p>\r\n', 'baju6.jpg', 1, '2021-05-18 04:02:42'),
(15, 12, 'Rendang', 50000, '<p>Rendang atau randang adalah masakan daging asli Indonesia yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan.</p>\r\n', 'rendang.jpg', 1, '2021-05-18 04:04:05'),
(16, 12, 'Moci', 28000, '<p>Mochi (<strong>Jepang</strong>: é¤…; Hanzi: (éº»ç³¬)) adalah kue&nbsp;<strong>Jepang</strong>&nbsp;yang terbuat dari beras ketan, ditumbuk sehingga lembut dan lengket, kemudian dibentuk menjadi bulat. Di&nbsp;<strong>Jepang</strong>, kue ini sering dibuat dan dimakan pada saat perayaan tradisional mochitsuki atau perayaan tahun baru&nbsp;<strong>Jepang</strong>.</p>\r\n', 'moci.jpg', 1, '2021-05-18 04:05:17'),
(17, 12, 'Mie Aceh', 25000, '<p>Dalam buku-buku&nbsp;<strong>sejarah Aceh</strong>&nbsp;pun tidak ada yang menemukan ihwal mula dari&nbsp;<strong>mie aceh</strong>. Walaupun begitu, ada yang bilang&nbsp;<strong>mie aceh</strong>&nbsp;merupakan kombinasi dari&nbsp;<strong>Aceh</strong>, India, dan China dimana&nbsp;<strong>mie</strong>&nbsp;berasal dari China, India sebagai pencetus kari yang kental dan&nbsp;<strong>Aceh</strong>&nbsp;dengan bahan-bahan yang kaya akan bumbu sehingga terciptalah&nbsp;<strong>mie Aceh</strong></p>\r\n', 'mie.jpg', 1, '2021-05-18 04:06:32'),
(18, 10, 'Sawi', 10000, '<p>Daerah&nbsp;<strong>asal</strong>&nbsp;tanaman&nbsp;<strong>sawi</strong>&nbsp;diduga dari Tiongkok dan Asia Timur, konon di daerah Tiongkok, tanaman ini telah dibudidayakan sejak 2.500 tahun yang lalu, kemudian menyebar luas ke Filipina dan Taiwan.</p>\r\n', 'sawi.jpg', 1, '2021-05-18 04:08:01'),
(19, 10, 'Pare', 5000, '<p>Peria atau&nbsp;<strong>pare</strong>&nbsp;adalah tumbuhan merambat yang berasal dari wilayah Asia Tropis, terutama daerah India bagian barat, yaitu Assam dan Burma.</p>\r\n', 'pare.jpg', 1, '2021-05-18 04:08:39'),
(20, 10, 'Paprika', 12000, '<p><strong>Paprika</strong>&nbsp;merupakan tanaman asli dari Amerika Tengah dan Amerika Selatan. Selain digunakan sebagai bahan pelengkap masakan,&nbsp;<strong>paprika</strong>&nbsp;sering dijadikan bahan alami pewarna dan kosmetik.&nbsp;<strong>Paprika</strong>&nbsp;adalah&nbsp;<strong>buah</strong>&nbsp;yang banyak mengandung vitamin C</p>\r\n', 'paprika.jpg', 1, '2021-05-18 04:09:37'),
(21, 9, 'Apel', 15000, '<p><strong>Apel</strong>&nbsp;yang dibudidayakan memiliki nama ilmiah Malus domestica yang menurut sejarahnya merupakan keturunan dari Malus sieversii dengan sebagian genom dari Malus sylvestris (<strong>apel</strong>&nbsp;hutan/<strong>apel</strong>&nbsp;liar) yang ditemui hidup secara liar di pegunungan Asia Tengah, di Kazakhstan, Kirgiztan, Tajikistan, dan Xinjiang, dan Cina.</p>\r\n', 'apel.jpg', 1, '2021-05-18 04:10:22'),
(22, 9, 'Kiwi', 20000, '<p>Selama ini&nbsp;<strong>kiwi</strong>&nbsp;dikenal sebagai&nbsp;<strong>buah</strong>&nbsp;khas Selandia Baru.</p>\r\n\r\n<p>Tapi siapa sangka bahwa&nbsp;<strong>kiwi</strong>&nbsp;ternyata mulanya bukan berasal dari Selandia Baru, melainkan dari negeri tirai bambu, Cina yang dinamai gooseberry.</p>\r\n', 'kiwi.jpg', 1, '2021-05-18 04:11:20'),
(23, 9, 'Delima', 25000, '<p><strong>DELIMA</strong>&nbsp;atau Punica Granatum merupakan tanaman&nbsp;<strong>buah</strong>-buahan yang dapat tumbuh setinggi 5 hingga 8 meter. Tanaman ini diperkirakan berasal dari Iran, tapi sudah lama dikembangbiakkan di daerah Mediterania.</p>\r\n', 'delima.jpg', 1, '2021-05-18 04:12:08'),
(24, 11, 'Asus', 65000000, '<p>Spek bagus dan Laptop yang memiliki body bagus</p>\r\n', 'laptop2.jpg', 1, '2021-05-18 04:13:45'),
(25, 11, 'Macbook', 7000000, '<p>Kekuatan baterai hingga 10 jam</p>\r\n', 'laptop6.jpg', 1, '2021-05-18 04:15:05'),
(26, 11, 'Samsung', 4500000, '<p>memiliki komponen&nbsp;yang berkualitas tinggi.</p>\r\n', 'laptop3.jpg', 1, '2021-05-18 04:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
