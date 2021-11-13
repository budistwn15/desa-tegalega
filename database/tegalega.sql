-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2021 pada 12.51
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
-- Struktur dari tabel `him_administrasi`
--

CREATE TABLE `him_administrasi` (
  `id_administrasi` int(12) NOT NULL,
  `judul_administrasi` varchar(50) NOT NULL,
  `isi_administrasi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_berita`
--

CREATE TABLE `him_berita` (
  `id_berita` int(12) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `id_user` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_berita`
--

INSERT INTO `him_berita` (`id_berita`, `judul_berita`, `slug`, `isi_berita`, `thumbnail`, `id_user`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'Mahasiswa Informatika', 'berita-hari-ini-paling-update', '                                                                                                                                <p>                                                                Mahasiswa UNSIKA</p><p>berkunjung ke Desa Tegalega                                                             </p>                                                                                                                          ', 'bg.jpg', 1, '2021-11-13', '2021-11-12 17:35:10', '2021-11-13 08:04:51'),
(3, 'Tes berita', 'tes-berita', '                                                                lorem ipsum dolor sitamet                                                             ', 'bg.jpg', 1, '2021-11-13', '2021-11-13 01:48:07', '2021-11-13 08:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_galeri`
--

CREATE TABLE `him_galeri` (
  `id_galeri` int(12) NOT NULL,
  `judul_galeri` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_galeri`
--

INSERT INTO `him_galeri` (`id_galeri`, `judul_galeri`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'HIMTIKA', 'IMG_6653.JPG', '2021-11-13 08:59:02', '2021-11-13 08:59:02'),
(4, 'HIMTIKA', 'IMG_6652.JPG', '2021-11-13 09:03:09', '2021-11-13 09:03:09');

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
(1, 'Geografis Desa Tegalega', '                                                                                                <h2>A. Letak Wilayah</h2><p>Desa Tegalega termasuk ke kecamatan Ciampel Kabupaten Karawang dengan batas wilayah sebagai berikut:</p><ul><li>Sebelah utara : Desa Mulyasejati</li><li>Sebelah selatan : Desa Kutamanah</li><li>Sebelah Timur : Desa Cilangkap</li><li>Sebelah Barat : Desa Kutamanah</li></ul><h2>B. Luas Wilayah</h2><p>Pembagian luas wilayah desa Tegalega sebagai berikut:</p><ul><li>Luas Wilayah Permukiman : 200ha</li><li>Luas Persawahan : 50ha</li></ul>                                                                                    ', '2021-11-12 02:53:16', '2021-11-12 17:52:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_informasi`
--

CREATE TABLE `him_informasi` (
  `id_informasi` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_handphone` varchar(14) NOT NULL,
  `lembaga` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL,
  `kepentingan` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_kontak_kami`
--

CREATE TABLE `him_kontak_kami` (
  `id_kontak` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'ENDANG SUHAYA S.Pd', 'Kepala Desa', 'profile.jpg'),
(5, 'ULAN', 'Sekretaris Desa', 'profile.jpg'),
(6, 'AJI SANTOSO', 'Kaur EKBANG/perencanaan', 'profile.jpg'),
(7, 'AYUNI EVITA RAHAYU', 'Kaur Keuangan/Bendahara', 'profile.jpg'),
(8, 'TATI ROHAYATI', 'Kasi Kesra', 'profile.jpg'),
(9, 'IRMA RATNA DEWI', 'Kasi Pelayanan', 'profile.jpg'),
(10, 'YANTO', 'Kasi Pemerintahan', 'profile.jpg'),
(11, 'USEP', 'Kepala Dusun I ( Narogtog)', 'profile.jpg'),
(12, 'RASMAWATI', 'Kepala Dusun II ( Parungnala)', 'profile.jpg');

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
('1234567891234565', 'Amzar Hamdah', 'Karawang', '2013-09-01', 9, 'L', '015', '002', 'Kulon', 'Katolik', 'Pelajar/Mahasiswa', 'Tamat SMU / SMK', '2021-11-13 02:45:43', '2021-11-13 02:45:43'),
('1234567891234567', 'Budi Setiawan', 'Subang', '2021-12-31', 15, 'P', '015', '002', 'Kulon', 'Islam', 'Lainnya', 'Tamat Strata I', '2021-11-12 14:58:40', '2021-11-12 14:58:40'),
('1234567891234569', 'Irna Purnahasana', 'Subang', '2020-12-31', 17, 'P', '015', '002', 'Kulon', 'Islam', 'Mengurus Rumah Tangga', 'Tamat SD', '2021-11-13 02:44:56', '2021-11-13 02:44:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_produk_hukum`
--

CREATE TABLE `him_produk_hukum` (
  `id_produk` int(12) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Sejarah Desa Tegalega', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet enim recusandae distinctio quia! Corporis veritatis soluta cupiditate officia repellat impedit magni ab rem itaque commodi doloribus dolorem recusandae, ad est? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius non culpa beatae obcaecati nobis aut minus, ipsam recusandae ducimus laudantium odit impedit. A sed dignissimos distinctio dolorum blanditiis ducimus tempore.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet enim recusandae distinctio quia! Corporis veritatis soluta cupiditate officia repellat impedit magni ab rem itaque commodi doloribus dolorem recusandae, ad est? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius non culpa beatae obcaecati nobis aut minus, ipsam recusandae ducimus laudantium odit impedit. A sed dignissimos distinctio dolorum blanditiis ducimus tempore.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet enim recusandae distinctio quia! Corporis veritatis soluta cupiditate officia repellat impedit magni ab rem itaque commodi doloribus dolorem recusandae, ad est? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius non culpa beatae obcaecati nobis aut minus, ipsam recusandae ducimus laudantium odit impedit. A sed dignissimos distinctio dolorum blanditiis ducimus tempore.</p>', '2021-11-11 18:01:20', '2021-11-13 06:25:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `him_user`
--

CREATE TABLE `him_user` (
  `id_user` int(12) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `him_user`
--

INSERT INTO `him_user` (`id_user`, `nama_lengkap`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Budi Setiawan', 'budi.setiawan112001@gmail.com', '37c60b3fafd04127e2e14620e24e455692010055', '2021-11-12 16:43:45', '2021-11-12 16:43:45'),
(2, 'Pemdes Tegallega', 'tegallega@gmail.com', '4993e22416db2bbe4ccd90fa07b552aa5e949529', '2021-11-13 10:51:20', '2021-11-13 10:51:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `him_administrasi`
--
ALTER TABLE `him_administrasi`
  ADD PRIMARY KEY (`id_administrasi`);

--
-- Indeks untuk tabel `him_berita`
--
ALTER TABLE `him_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `him_galeri`
--
ALTER TABLE `him_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `him_geografis`
--
ALTER TABLE `him_geografis`
  ADD PRIMARY KEY (`id_geografis`);

--
-- Indeks untuk tabel `him_informasi`
--
ALTER TABLE `him_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `him_kontak_kami`
--
ALTER TABLE `him_kontak_kami`
  ADD PRIMARY KEY (`id_kontak`);

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
-- Indeks untuk tabel `him_produk_hukum`
--
ALTER TABLE `him_produk_hukum`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `him_sejarah`
--
ALTER TABLE `him_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `him_user`
--
ALTER TABLE `him_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `him_administrasi`
--
ALTER TABLE `him_administrasi`
  MODIFY `id_administrasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `him_berita`
--
ALTER TABLE `him_berita`
  MODIFY `id_berita` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `him_galeri`
--
ALTER TABLE `him_galeri`
  MODIFY `id_galeri` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `him_geografis`
--
ALTER TABLE `him_geografis`
  MODIFY `id_geografis` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `him_informasi`
--
ALTER TABLE `him_informasi`
  MODIFY `id_informasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `him_kontak_kami`
--
ALTER TABLE `him_kontak_kami`
  MODIFY `id_kontak` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `him_pemerintahan_desa`
--
ALTER TABLE `him_pemerintahan_desa`
  MODIFY `id_pemerintahan_desa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `him_produk_hukum`
--
ALTER TABLE `him_produk_hukum`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `him_sejarah`
--
ALTER TABLE `him_sejarah`
  MODIFY `id_sejarah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `him_user`
--
ALTER TABLE `him_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `him_berita`
--
ALTER TABLE `him_berita`
  ADD CONSTRAINT `him_berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `him_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
