-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 06.22
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

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
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `email`, `no_telp`, `alamat`, `kode_barang`, `harga`, `jumlah`, `pembayaran`) VALUES
(1, 'Brilian', 'brilian@gmail.com', '080000000002', 'Bekasi', 'ELENZE', 250000, 1, 'Bank Transfer'),
(2, 'Bintang', 'bintang@gmail.com', '080000000003', 'Bandung', 'ELENZE', 250000, 3, 'Bank Transfer'),
(3, 'Galang', 'galang@gmail.com', '080000000005', 'Jakarta', 'KALA', 100000, 19, 'Credit Card'),
(4, 'Galang', 'galang@gmail.com', '080000000005', 'Jakarta', 'CHARIZ', 109000, 5, 'Credit Card'),
(5, 'Dhan Maul', 'dhan@gmail.com', '080000000004', 'Sulawesi', 'AGNES', 110000, 1, 'Bank Transfer'),
(6, 'Firenze', 'firenze@gmail.com', '080000000001', 'Tegal', 'AGNES', 110000, 10, 'Bank Transfer'),
(7, 'Ariel', 'ariel@gmail.com', '080000000006', 'Depok', 'AGNES', 110000, 5, 'Credit Card'),
(8, 'Firenze', 'firenze@gmail.com', '080000000001', 'Tegal', 'ELENZE', 250000, 2, 'Credit Card');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `databarang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
