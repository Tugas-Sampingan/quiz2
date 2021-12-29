-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 10.51
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
-- Struktur dari tabel `databarang`
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
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`kode_barang`, `nama_barang`, `harga`, `deskripsi`, `detail`, `gambar`) VALUES
('AGNES', 'AGNES B', 110000, 'Sophisticated stylish keceeee bangett! slim dan kokoh nyaman banget dipakai seharian 🤓❤️ RECOMMENDED MUST HAVE✨', '5,3; 15,3; 13,8; 12,1; 4,8; plastik mix besi,Penyangga hidung bisa diatur', 'katalog1.png'),
('CHARIZ', 'CHARIZ BLACK', 109000, 'Si bulat kokoh dan stylish bikin penampilanmu jadi makin kecee😎 Unisex cewe cowo bisa pakai👌. Ringan slim tipis nyaman dipakai so comfy! ', '4,9; 14,9; 14,5; 14,5; 4,7l; plastik mix besi, Penyangga hidung tidak bisa diatur', 'katalog2.png'),
('ELENZE', 'ELENZE IN SQUARE', 250000, 'Super stylish😎 cocok untuk nemenin liburan kamu jadi makin hype! Unisex cewe cowo bisa pakai 😍. Kacamata sudah dilengkapi lensa anti UV!', '6,4; 15,8; 14,1; 15,4; 5,4; plastik mix besi,Penyangga hidung tidak bisa diatur', 'katalog3.png'),
('KALA', 'KALA WHITE LEOPARD', 100000, 'Modelnya kotak simple yang kokoh. Pokoknya Recommended banget dan pastinya bikin penampilan kamu makin kece🤓.', '5,1; 12,0; 2,0; 12,2; 4,5; Model kaya leopard dan menarik untuk dipakai', 'katalog4.png\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `email`, `alamat`, `kode_barang`, `harga`, `jumlah`, `pembayaran`) VALUES
(1, 'Brilian', 'brilian@gmail.com', 'asds', 'ELENZE', 250000, 1, 'Bank Transfer'),
(2, 'Bintang', 'bintang@gmail.com', 'Bandung', 'ELENZE', 250000, 3, 'Bank Transfer'),
(3, 'Galang', 'galang@gmail.com', 'Jakarta', 'KALA', 100000, 100, 'Bank Transfer'),
(4, 'Galang', 'galang@gmail.com', 'Jakarta', 'CHARIZ', 109000, 5, 'Bank Transfer'),
(5, 'Dhan Maul', 'dhan@gmail.com', 'Sulawesi', 'AGNES', 110000, 1, 'Bank Transfer'),
(6, 'Firenze', 'firenze@gmail.com', 'Tegal', 'AGNES', 110000, 10, 'Bank Transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola`
--

CREATE TABLE `pengelola` (
  `id` int(20) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengelola`
--

INSERT INTO `pengelola` (`id`, `nama_admin`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `email`, `password`) VALUES
(1, 'Firenze', 'firenze@gmail.com', '123'),
(2, 'Brilian', 'brilian@gmail.com', '123'),
(3, 'Bintang', 'bintang@gmail.com', '123'),
(4, 'Dhan Maul', 'dhan@gmail.com', '123'),
(5, 'Galang', 'galang@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
