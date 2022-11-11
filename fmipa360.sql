-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2022 pada 07.31
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
-- Database: `fmipa360`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biotek`
--

CREATE TABLE `biotek` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `luas` varchar(225) NOT NULL,
  `kapasitas` varchar(225) NOT NULL,
  `denah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biotek`
--

INSERT INTO `biotek` (`id`, `nama`, `luas`, `kapasitas`, `denah`) VALUES
(3, 'Dosen Fisika', '45', '7', '636623164c6ba.gif'),
(4, 'Jurusan Fisika', '45', '6', '63662535d4d63.gif'),
(5, 'Laboratorium Fisika Dasar', '100', '50', '6366257691eba.gif'),
(6, 'Laboratorium Geofisika dan SIG', '80', '40', '636628e586b26.gif'),
(7, 'Laboratorium Pigmen', '12', '3', '63662cbb14999.gif'),
(8, 'Laboratorium Fisika Lanjut', '24', '4', '63662d1dae50a.gif'),
(9, 'ASS', '10', '1', '63662d4e9409c.gif'),
(10, 'Laboratorium Riset Kimia anorganik', '77', '25', '63662de7c360d.gif'),
(11, 'Kepala Bioteknologi dan Riset', '12', '2', '63662e49ecfa8.gif'),
(12, 'Laboratorium Ilmu Kelautan', '63', '12', '63662ec18a6f5.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedungbaru`
--

CREATE TABLE `gedungbaru` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `luas` varchar(225) NOT NULL,
  `kapasitas` varchar(225) NOT NULL,
  `denah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedungbaru`
--

INSERT INTO `gedungbaru` (`id`, `nama`, `luas`, `kapasitas`, `denah`) VALUES
(91, 'H 1.2', '64', '50', '63645cb893789.gif'),
(92, 'H 1.1', '96', '70', '63645cf026343.gif'),
(93, 'H 1.4', '128', '100', '63645d21d57ec.gif'),
(94, 'Umun dan Perlengkapan', '192', '30', '6365f790837e1.gif'),
(95, 'Akademik', '152', '25', '6365f7d15e550.gif'),
(96, 'Kepegawaian', '32', '6', '6365f8269f2c9.gif'),
(97, 'Tamu', '32', '8', '6365f8aa87ccf.gif'),
(98, 'Baca', '64', '30', '6365f8da0dcc2.gif'),
(99, 'H 2.2', '64', '60', '6365f9932f7ab.gif'),
(100, 'H 2.4', '64', '60', '6365f9e124a47.gif'),
(101, 'Dosen Kimia', '128', '35', '6365fa442ef88.gif'),
(102, 'H 2.6', '64', '60', '6365fae71ad7e.gif'),
(103, 'H 2.3', '64', '60', '6365fb25c672f.gif'),
(104, 'Dosen Sistem Informasi', '96', '25', '6365fb8e961fe.gif'),
(105, 'H 2.8', '64', '60', '6365fbe0db73a.gif'),
(106, 'H 2.10', '64', '60', '6365fc41759d6.gif'),
(107, 'Baca Matematika', '96', '25', '6365fd4ab9441.gif'),
(108, 'Mushola Pria', '32', '25', '6365fde431fad.gif'),
(109, 'Keuangan', '64', '15', '6365fe9384205.gif'),
(110, 'Senat', '128', '60', '6365fef016937.gif'),
(111, 'Dekan', '88', '15', '6365ffea00a1d.gif'),
(112, 'Jurusan Ilmu Kelautan', '88', '24', '63660075a926f.gif'),
(113, 'Jurusan Matematika', '96', '25', '6366010e3d17b.gif'),
(114, 'Wakil Dekan', '96', '20', '636601942c0e4.gif'),
(115, 'Jurusan Fisika', '128', '28', '636602142520e.gif'),
(116, 'H 3.2', '64', '60', '6366030ebd21c.gif'),
(117, 'H 3.4', '64', '60', '6366035434949.gif'),
(118, 'H 3.1', '128', '100', '636603bb8a660.gif'),
(119, 'H 3.3', '64', '60', '636605fe32b41.gif'),
(120, 'H 3.6', '64', '60', '6366064632dcd.gif'),
(121, 'Sidang', '32', '10', '636606ad35197.gif'),
(122, 'Laboratorium Sistem Informasi', '96', '60', '636607242673f.gif'),
(123, 'Dosen Statistik', '96', '25', '636607a10e758.gif'),
(124, 'Mushola Wanita', '32', '15', '636607f2a5b12.gif'),
(125, 'H 3.7', '64', '60', '636608c02b064.gif'),
(126, 'Laboratorium Ilmu Kelautan', '64', '45', '63660c2d00257.gif'),
(127, 'Laboratorium Komputasi Fisika', '96', '30', '63660ca595854.gif'),
(128, 'H 3.10', '96', '65', '63660d0763e2d.gif'),
(129, 'Kontrol', '64', '20', '63660d4720c5e.gif'),
(130, 'Komputer B', '128', '95', '63660da58644f.gif'),
(131, 'Komputer A', '192', '100', '63660e162add2.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedunglama`
--

CREATE TABLE `gedunglama` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `luas` varchar(225) NOT NULL,
  `kapasitas` varchar(225) NOT NULL,
  `denah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedunglama`
--

INSERT INTO `gedunglama` (`id`, `nama`, `luas`, `kapasitas`, `denah`) VALUES
(3, 'Laboratorium Ekologi', '63', '10', '63660f68327f0.gif'),
(4, 'Laboratorium Kultur Jaringan', '63', '20', '636615ae388d8.gif'),
(5, 'Laboratorium Mikrobiologi', '64', '20', '6366161279cb0.gif'),
(6, 'C 1', '63', '50', '636616924edc0.gif'),
(7, 'Laboratorium Riset Kimia Organik', '63', '40', '6366171b3cda3.gif'),
(8, 'C 2', '63', '50', '636617a11bde1.gif'),
(9, 'BEM', '28', '10', '636617dea3135.gif'),
(10, 'SEKBER HMJ', '98', '60', '63661871bb8b3.gif'),
(11, 'Laboratorium Kimia B', '130', '50', '636618c8d89d6.gif'),
(12, 'Sidang', '46', '30', '63661a71390dc.gif'),
(13, 'F 2', '80', '50', '63661b1829cf1.gif'),
(14, 'Prodi S2 Kimia', '80', '15', '63661b8a78045.gif'),
(15, 'F 3', '80', '50', '63661c7e9ffc2.gif'),
(16, 'F 4', '80', '50', '63661d1821ebd.gif'),
(17, 'C 3', '63', '50', '63661d7e29206.gif'),
(18, 'UKM', '0', '0', '63661f2e618d3.gif'),
(19, 'Aula 1', '63', '50', '6366200976953.gif'),
(20, 'Aula 2', '63', '50', '636620280998d.gif'),
(21, 'Laboratorium Zoologi', '140', '30', '636621bca74cd.gif'),
(22, 'Laboratorium Biologi', '0', '0', '636622613283d.gif'),
(23, 'Laboratorium Kimia', '0', '0', '63662283778aa.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siskom`
--

CREATE TABLE `siskom` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `luas` varchar(225) NOT NULL,
  `kapasitas` varchar(225) NOT NULL,
  `denah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siskom`
--

INSERT INTO `siskom` (`id`, `nama`, `luas`, `kapasitas`, `denah`) VALUES
(3, 'Dosen Sistem Komputer', '80', '25', '63662f517511e.gif'),
(4, 'Laboratorium Workshop', '80', '25', '63662fe188058.gif'),
(5, 'Komputer B', '0', '0', '63663022e615a.gif'),
(6, 'Komputer A', '0', '0', '6366306b988b5.gif'),
(7, 'Siskom 1', '0', '0', '636630fd74d13.gif'),
(8, 'Siskom 2', '0', '0', '6366317ef23f9.gif'),
(9, 'Siskom 3', '0', '0', '636631b8a586b.gif'),
(10, 'Siskom 4', '0', '0', '636631d0958fd.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'fmipa360', '$2y$10$.vVdMBwqgIUZCNssF7M/qOy4kBcGMA7TG8jsqV6dxT.wTAiIPSnVW'),
(8, 'coba', '$2y$10$timBV9VcKQ1IpsPG0EtMs.PouRx4/K6EhxP1klRJPisaYOxtRPuY6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biotek`
--
ALTER TABLE `biotek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gedungbaru`
--
ALTER TABLE `gedungbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gedunglama`
--
ALTER TABLE `gedunglama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siskom`
--
ALTER TABLE `siskom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biotek`
--
ALTER TABLE `biotek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `gedungbaru`
--
ALTER TABLE `gedungbaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `gedunglama`
--
ALTER TABLE `gedunglama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `siskom`
--
ALTER TABLE `siskom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
