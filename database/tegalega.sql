-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 07.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tegalega`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_geografis`
--

CREATE TABLE `him_geografis` (
  `id_geografis` int(12) NOT NULL,
  `title_geografis` varchar(50) NOT NULL,
  `geografis` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_geografis`
--

INSERT INTO `him_geografis` (`id_geografis`, `title_geografis`, `geografis`, `created_at`, `updated_at`) VALUES
(1, 'Geografis Desa Tegalega', '<h2>A. Letak Wilayah</h2>', '2021-11-12 02:53:16', '2021-11-12 02:58:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_pemerintahan_desa`
--

CREATE TABLE `him_pemerintahan_desa` (
  `id_pemerintahan_desa` int(12) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_pemerintahan_desa`
--

INSERT INTO `him_pemerintahan_desa` (`id_pemerintahan_desa`, `nama_lengkap`, `jabatan`, `photo`) VALUES
(2, 'Irna Purnahasana', 'Kepala Desa', '25.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_penduduk`
--

CREATE TABLE `him_penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(5) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_penduduk`
--

INSERT INTO `him_penduduk` (`nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jk`, `rt`, `rw`, `dusun`, `agama`, `pekerjaan`, `pendidikan`, `created_at`, `updated_at`) VALUES
('1234567891234567', 'Budi Setiawan', 'Subang', '2021-12-31', 15, 'P', '015', '002', 'Kulon', 'Islam', 'Belum Bekerja', 'Tidak Tamat / Belum Sekolah', '2021-11-12 06:22:31', '2021-11-12 06:22:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_sejarah`
--

CREATE TABLE `him_sejarah` (
  `id_sejarah` int(12) NOT NULL,
  `title_sejarah` varchar(50) NOT NULL,
  `sejarah` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_sejarah`
--

INSERT INTO `him_sejarah` (`id_sejarah`, `title_sejarah`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah Desa Tegalega', '<b>Desa Tegalega</b>', '2021-11-11 18:01:20', '2021-11-12 02:49:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `him_geografis`
--
ALTER TABLE `him_geografis`
  ADD PRIMARY KEY (`id_geografis`);

--
-- Indeks untuk tabel `him_pemerintahan_desa`
--
ALTER TABLE `him_pemerintahan_desa`
  ADD PRIMARY KEY (`id_pemerintahan_desa`);

--
-- Indeks untuk tabel `him_penduduk`
--
ALTER TABLE `him_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `him_sejarah`
--
ALTER TABLE `him_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `him_geografis`
--
ALTER TABLE `him_geografis`
  MODIFY `id_geografis` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `him_pemerintahan_desa`
--
ALTER TABLE `him_pemerintahan_desa`
  MODIFY `id_pemerintahan_desa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `him_sejarah`
--
ALTER TABLE `him_sejarah`
  MODIFY `id_sejarah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
