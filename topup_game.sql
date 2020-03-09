-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 02:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `harga`, `gambar`, `deskripsi`) VALUES
(5, 'Dragon Quest : Builder 2', 660000, 'Dragon.jpg', 'Grand Theft Auto V adalah game aksi dan petualangan yang dikembangkan oleh Rockstar North dan di terbitkan oleh Rockstar Games. Game ini terbit pada tanggal 17 september 2013 untuk console Playstation 3 dan Xbox 360. Game ini adalah game kelima belas dari seluruh game GTA'),
(6, 'Final Fantasi : XV', 840000, 'Final.jpg', ''),
(7, 'Just Cause : 3', 230000, 'Just.jpg', ''),
(8, 'Deus Ex', 145000, 'Deus.jpg', ''),
(9, 'Life is Strange : 2', 215000, 'Life2.jpg', ''),
(10, 'Dragon Quest : Heroes 2', 340000, 'DragonHeroes.jpg', ''),
(11, 'Sleeping Dogs', 100000, 'Dogs.jpg', ''),
(12, 'Tomb Rider', 345000, 'Tomb.jpg', ''),
(13, 'Hitman', 50000, 'Hitman.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama`, `email`, `tgl_pembelian`) VALUES
(1, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(2, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(3, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(4, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(5, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(6, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(7, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(8, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(9, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(10, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(11, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(12, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(13, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(14, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(15, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(16, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(17, 'nanda', 'csnanda55@ymail.com', '2020-03-01'),
(18, 'nanda', 'csnanda55@ymail.com', '2020-03-02'),
(19, 'nanda', 'anandagin30@gmail.com', '2020-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_history`, `id_game`, `nama_game`, `harga`) VALUES
(4, 16, 8, 'Deus Ex', 145000),
(5, 18, 8, 'Deus Ex', 145000),
(6, 18, 7, 'Just Cause : 3', 230000),
(7, 18, 6, 'Final Fantasi : XV', 840000),
(8, 19, 12, 'Tomb Rider', 345000),
(9, 19, 7, 'Just Cause : 3', 230000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`, `status`) VALUES
(1, 'nanda', 'csnanda55@ymail.com', '123', 2, 'active'),
(4, 'admin', 'admin@gmail.com', 'admin', 1, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_history`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_game` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `id_history` FOREIGN KEY (`id_history`) REFERENCES `history` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
