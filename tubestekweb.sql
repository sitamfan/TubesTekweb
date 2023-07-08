-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 15.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubestekweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` varchar(50) NOT NULL,
  `Toko` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `Toko`, `Nama`, `Warna`, `Jumlah`) VALUES
('1', 'H&M', 'Plaid Shirt', 'Hitam', 2),
('10', 'H&M', 'Shirt 3', 'biru', 1),
('11', 'H&M', 'Shirt 3', 'biru', 1),
('12', 'H&M', 'Shirt 3', 'biru', 1),
('13', 'H&M', 'Shirt 3', 'biru', 1),
('15', 'H&M', 'Nyoba lagi ke 11 kali', 'salem', 1),
('3', 'H&M', 'jacket', 'merah', 1),
('5', 'H&M', 'Shirt 2', 'biru', 1),
('6', 'H&M', 'Shirt 2', 'biru', 1),
('8', 'H&M', 'Shirt 3', 'biru', 1),
('9', 'H&M', 'Shirt 3', 'biru', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` varchar(100) NOT NULL,
  `Toko` varchar(100) NOT NULL,
  `Jenis` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `Toko`, `Jenis`, `Nama`, `Jumlah`) VALUES
('1', 'Melvin', 'Ket Hak', 'Melvincindo', 200),
('2', 'H&M', 'Ket', 'Full White', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tas`
--

CREATE TABLE `tas` (
  `id` varchar(100) NOT NULL,
  `Toko` varchar(100) NOT NULL,
  `Jenis` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tas`
--

INSERT INTO `tas` (`id`, `Toko`, `Jenis`, `Nama`, `Jumlah`) VALUES
('1', 'Eiger', 'Koper', 'travel bag', 2),
('2', 'bagshop', 'sling bag', 'summer series', 1),
('3', 'H&M', 'Sling Bag', 'Sling Bag', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `Nama`, `url`) VALUES
('ayunuro', '1234', 'Ayu', ''),
('fdlh77', 'admin', 'Diky', ''),
('AYU', '1234', 'Ayu', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tas`
--
ALTER TABLE `tas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
