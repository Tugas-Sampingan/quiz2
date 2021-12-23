-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 06:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`kode_barang`, `nama_barang`, `harga`, `deskripsi`, `detail`, `gambar`) VALUES
('AGNES', 'AGNES B', 110000, 'Sophisticated stylish keceeee bangett! slim dan kokoh nyaman banget dipakai seharian 🤓❤️ RECOMMENDED MUST HAVE✨', '5,3; 5,3; 13,8; 12,1; 4,8; plastik mix besi,Penyangga hidung bisa diatur', 'katalog1.png'),
('CHARIZ', 'CHARIZ BLACK', 109000, 'Si bulat kokoh dan stylish bikin penampilanmu jadi makin kecee😎 Unisex cewe cowo bisa pakai👌. Ringan slim tipis nyaman dipakai so comfy! Recommended', '4,9; 4,9; 14,5; 14,5; 4,7l; plastik mix besi, Penyangga hidung tidak bisa diatur', 'katalog2.png'),
('ELENZE', 'ELENZE IN SQUARE', 250000, 'Super stylish😎 cocok untuk nemenin liburan kamu jadi makin hype! Unisex cewe cowo bisa pakai 😍. Kacamata sudah dilengkapi lensa anti UV!', '6,4; 15,8; 14,1; 15,4; 5,4; plastik mix besi,Penyangga hidung tidak bisa diatur', 'katalog3.png'),
('KALA', 'KALA WHITE LEOPARD', 1000000, 'Modelnya kotak simple yang kokoh dan pastinya bikin penampilan kamu makin kece🤓.', '5,1; 2,0; 2,0; 12,2; 4,5; Model kaya leopard dan menarik untuk dipakai', 'katalog4.png\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_user`, `email`, `password`) VALUES
(2, 'Akbar', 'a@gmail.com', '123'),
(3, 'Akbar', 'a@gmail.com', '123'),
(4, '', '', ''),
(5, 'asd', 'asd@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
