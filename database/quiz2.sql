-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 07:35 AM
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
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`kode_barang`, `nama_barang`, `harga`, `deskripsi`, `detail`) VALUES
('AGNES', 'AGNES B', 110000, 'Kode: AGNES. Harga: Rp110.000. Sophisticated stylish keceeee bangett! slim dan kokoh nyaman banget dipakai seharian 🤓❤️ RECOMMENDED MUST HAVE✨', '5,3; 5,3; 13,8; 12,1; 4,8; plastik mix besi,Penyangga hidung bisa diatur'),
('CHARIZ', 'CHARIZ BLACK', 109000, 'Kode: CHARIZ, Harga: Rp109.000. Si bulat kokoh dan stylish bikin penampilanmu jadi makin kecee😎 Unisex cewe cowo bisa pakai👌. Ringan slim tipis nyaman dipakai so comfy! Recommended', '4,9; 4,9; 14,5; 14,5; 4,7l; plastik mix besi, frame lentur (+) per (-) Penyangga hidung tidak bisa diatur'),
('ELENZE', 'ELENZE IN SQUARE', 250000, 'Super stylish😎 cocok untuk nemenin liburan kamu jadi makin hype! Unisex cewe cowo bisa pakai 😍. Kacamata sudah dilengkapi lensa anti UV!', '6,4; 15,8; 14,1; 5,4; plastik mix besi,Penyangga hidung tidak bisa diatur'),
('KALA', 'KALA WHITE LEOPARD', 1000000, 'Kode: KALA. Harga: Rp100.000. Modelnya kotak simple yang kokoh dan pastinya bikin penampilan kamu makin kece🤓.', '5,1; 2,0; 2,0; 12,2; 4,5; Model kaya leopard dan menarik untuk dipakai'),
('RB', 'RONA BLACK', 100000, 'Kode: RB. Harga: Rp100.000. Bentuk semi Cat eyes mungil ini bikin penampilan kamu semakin elegant dan kece bgt😍. Bisa Request lensa minus/plus/silinder', '5,4; 2; 14,2; 12,8; 12,8; plastik mix besi,Penyangga hidung bisa diatur');

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
