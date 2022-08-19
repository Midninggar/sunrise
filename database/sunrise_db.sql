-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2022 pada 17.42
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunrise_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `nama`, `email`, `phone`, `company`, `website`, `pesan`, `tanggal`) VALUES
(5, 'Mid', 'sdfhhgjgh@gmail.com', 2147483647, 'Midrobe', 'dfgdhdgfdgf.com', 'gdkdkcasad kahskakscsac', '2022-07-29 19:54:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ourclient`
--

CREATE TABLE `ourclient` (
  `id_logoclient` int(11) NOT NULL,
  `kode_logo` varchar(10) NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ourclient`
--

INSERT INTO `ourclient` (`id_logoclient`, `kode_logo`, `nama_client`, `gambar`, `tanggal`, `status`) VALUES
(15, 'L0015', 'Azarine', 'Azarine-01.png', '2022-08-01 08:41:55', 1),
(16, 'L0016', 'Asiaskinlab', 'Asiaskinlab-01.png', '2022-08-01 08:42:24', 1),
(17, 'L0017', 'Kana', 'Kana-01.png', '2022-08-01 08:42:41', 1),
(18, 'L0018', 'Riway', 'Riway-01.png', '2022-08-01 09:26:06', 1),
(19, 'L0019', 'swpi', 'Swpi-01.png', '2022-08-01 09:26:26', 1),
(20, 'L0020', 'Domino', 'Domino-01.png', '2022-08-01 09:26:42', 1),
(21, 'L0021', 'Agro', 'Agro-01.png', '2022-08-01 09:35:25', 1),
(22, 'L0022', 'Biogene', 'Biogene-01.png', '2022-08-01 09:39:31', 1),
(23, 'L0023', 'Hucha', 'Hucha-01.png', '2022-08-01 09:40:03', 1),
(24, 'L0024', 'Yonghong', 'Yonghong-01.png', '2022-08-01 09:40:25', 1),
(25, 'L0025', 'Patata', 'Patata-01.png', '2022-08-01 09:40:43', 1),
(26, 'L0026', 'Anita', 'Anita-01.png', '2022-08-01 09:41:03', 1),
(27, 'L0027', 'Morin', 'Morin-01.png', '2022-08-01 09:41:24', 1),
(28, 'L0028', 'Gado Arjuna', 'Gado Ar-01.png', '2022-08-01 09:41:41', 1),
(29, 'L0029', 'Cv Mulia', 'Mulia-01.png', '2022-08-01 09:41:56', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `kode_pengguna` char(9) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_telp` char(14) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `kode_pengguna`, `nama_pengguna`, `email`, `no_telp`, `username`, `password`, `status`) VALUES
(21, 'U020', 'hamid', 'hamrosjhonkren@gmail.com', '081259130203', 'hamid', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(25, 'U022', 'abdul', 'abdhamidninggar@gmail.com', '081259130203', 'abdul', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` char(10) NOT NULL,
  `judul_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'gambar_default.png',
  `tanggal` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `judul_produk`, `deskripsi`, `gambar`, `tanggal`, `status`, `id_pengguna`) VALUES
(124, 'A0124', 'Paperbag', 'dsakfhlfjsdf', 'Paperbag-01.png', '2022-08-02 10:40:07', 1, 0),
(125, 'A0125', 'Kemasan Produk', 'dfsghjdgfsg', 'Kemasan Produk-01.png', '2022-08-02 10:40:29', 1, 0),
(126, 'A0126', 'Amplop', 'dfsgdfshds', 'Amplop-01.png', '2022-08-02 10:40:50', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indeks untuk tabel `ourclient`
--
ALTER TABLE `ourclient`
  ADD PRIMARY KEY (`id_logoclient`),
  ADD KEY `id_logoclient` (`id_logoclient`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_artikel` (`id_produk`),
  ADD KEY `judul_artikel` (`judul_produk`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `ourclient`
--
ALTER TABLE `ourclient`
  MODIFY `id_logoclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
