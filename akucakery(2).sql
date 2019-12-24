-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akucakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id_user` int(11) NOT NULL,
  `nm_buyer` varchar(40) DEFAULT NULL,
  `almt` text DEFAULT NULL,
  `nohp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id_user`, `nm_buyer`, `almt`, `nohp`) VALUES
(8, 'Florenthio Frenandementz S', 'Jalan-jalan di sekitar kota', '088990088990'),
(6, 'Dhanang Mughsena D P', 'Jalan kemana aja boleh', '089878767343'),
(4, 'Hannan Asrawi', 'Jalani saja dulu', '087654321234'),
(2, 'Syifa Sri Wahyuni', 'Jalan sukasuka', '087876765654'),
(10, 'Muh Mathlail Fajri', 'Jln 10 kurang 1', '083234222831');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('seller','buyer','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `email`, `password`, `level`) VALUES
(1, 'elsa@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'syifa@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'buyer'),
(3, 'ninda@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'seller'),
(4, 'hannan@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'buyer'),
(5, 'maie@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'seller'),
(6, 'danang@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'buyer'),
(7, 'rani@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'seller'),
(8, 'thio@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'buyer'),
(9, 'ali@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'seller'),
(10, 'fajri@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nm_produk` varchar(40) NOT NULL,
  `foto` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jns_produk` varchar(30) DEFAULT NULL,
  `variasi` varchar(30) DEFAULT NULL,
  `hrg_satuan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `nm_produk`, `foto`, `deskripsi`, `jns_produk`, `variasi`, `hrg_satuan`) VALUES
('BC0001', 9, 'Bosque Birthday Cake', 'birthday-cake3.jpg', 'Kue ultah yang semacho namanya, bernuansa princess yang membuat hati berbunga-bunga', 'Kue Ulang Tahun', NULL, 64000),
('BC0002', 3, 'Kue Ultah Blackforest', 'birthday-cake1.jpg', 'Buat yang lagi ultah minta temenmu beliin ini', 'Kue Ulang Tahun', NULL, 57000),
('BC0003', 7, 'Birthday Cake Vanilla', 'birthday-cake2.jpg', 'Ultah? Beli ni kue. beli gak? harus beli loh', 'Kue Lapis', NULL, 45000),
('CC0001', 5, 'Cupcake Choco Topping Berry', 'Berry-Cupcake.jpg', 'Cupcake imoet buatan Maie-chan seimoet yang makan', 'Cupcake', NULL, 4000),
('CC0002', 3, 'Butter Cupcake', 'Butter-Cupcake.jpg', 'Cupcake butter rasa kacang biar nggak dikatjangin', 'Cupcake', NULL, 5500);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` varchar(12) NOT NULL,
  `jml` int(11) NOT NULL,
  `hrg_satuan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_user` int(11) NOT NULL,
  `nm_toko` varchar(30) DEFAULT NULL,
  `nm_seller` varchar(40) DEFAULT NULL,
  `almt` text DEFAULT NULL,
  `nohp` varchar(13) DEFAULT NULL,
  `surjin_ush` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_user`, `nm_toko`, `nm_seller`, `almt`, `nohp`, `surjin_ush`) VALUES
(5, 'Maie-chan', 'Maie Istighosah', 'Jalanan sekitar sini', '087675354827', NULL),
(3, 'Nanana Cake', 'Ninda Putri H', 'Jajalala en', '085374826832', NULL),
(7, 'Que Varavara', 'Miladdiena Rani', 'Jalan ini hanya mitos', '087654321123', NULL),
(9, 'Bosque Bakery', 'Dzulfikar Ali M', 'Jalan-jalan teroos turing teroos', '087863746273', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `hrg_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
