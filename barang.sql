-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 08.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(5) NOT NULL,
  `Kode` varchar(10) NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `Kode`, `Nama_Barang`, `Harga`, `Foto`) VALUES
(5, 'B003', 'Pensil', 2000, '1714440205_61185a5cfe240c0c4065.png'),
(8, 'B002', 'Penghapus', 3000, '1714458545_c524fc5b74178a9e7be8.jpg'),
(10, 'B006', 'Tip X', 5000, '1714546337_6bfc32b4448dd249dfaf.jpg'),
(12, 'B005', 'Pulpen Snowman', 3500, '1716305130_e26f39b89fffec7e0558.jpeg'),
(15, 'B001', 'Gitar Elektrik', 1000000, '1716442732_11e7db31811c3f5dfaf8.jpg'),
(18, 'B007', 'Jam Tangan', 100000, '1716529603_0fa9aa1dc307040b4634.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'jekk', 'jekk@gmail.com', '$2y$10$K4.LHaRB4LefrnicP2NBDOU397DQVr0K11ZDZUWkJ1UrWVya8hj4e'),
(2, 'fahrizal', 'admin@gmail.com', '$2y$10$dsRg3F2qp7gmTdBeZbbrHuGpVEmUYEiS5DJAq5knJYu.edQIQUSFW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
