-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 00.04
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_laporan`
--

CREATE TABLE `data_laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_paket` varchar(1000) NOT NULL,
  `kontraktor` varchar(1000) NOT NULL,
  `konsultan_supervisi` varchar(1000) NOT NULL,
  `tahun_anggaran` varchar(100) NOT NULL,
  `nama_proyek` varchar(1000) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `gambar_0` varchar(100) NOT NULL,
  `gambar_50` varchar(100) NOT NULL,
  `gambar_100` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_laporan`
--

INSERT INTO `data_laporan` (`id_laporan`, `nama_paket`, `kontraktor`, `konsultan_supervisi`, `tahun_anggaran`, `nama_proyek`, `pekerjaan`, `lokasi`, `gambar_0`, `gambar_50`, `gambar_100`) VALUES
(1, 'PRESERVASI PAKET BERKALA JEMBATAN SIDOARJO - PANDAAN - PURWOSARI - MALANG - KEPANJEN', 'CV. NAVES VOLTAIRE', 'PT. ADHY DUTA PRIMA Kso PT. ADYA WIDYA JASA, PT. SAICLE JASA', '2019', 'Porong III A', 'Pemeliharaan Kinerja Jembatan', 'Km Sby 33+850', '1582757685.png', '1582757695.png', '1582757705.png'),
(2, 'PRESERVASI PAKET BERKALA JEMBATAN SIDOARJO - PANDAAN - PURWOSARI - MALANG - KEPANJEN', 'CV. NAVES VOLTAIRE', 'PT. ADHY DUTA PRIMA Kso PT. ADYA WIDYA JASA, PT. SAICLE JASA', '2019', 'Porong III B', 'Pemeliharaan Kinerja Jembatan', 'Km Sby 33+850', '1582757770.png', '1582757783.png', '1582757809.png'),
(3, 'PRESERVASI PAKET BERKALA JEMBATAN SIDOARJO - PANDAAN - PURWOSARI - MALANG - KEPANJEN', 'CV. NAVES VOLTAIRE', 'PT. ADHY DUTA PRIMA Kso PT. ADYA WIDYA JASA, PT. SAICLE JASA', '2019', 'Tanggulangin', 'Pemeliharaan Kinerja Jembatan', 'Km. Sby 29+230', '1582757865.png', '1582757875.png', '1582757895.png'),
(4, 'PRESERVASI PAKET BERKALA JEMBATAN SIDOARJO - PANDAAN - PURWOSARI - MALANG - KEPANJEN', 'CV. NAVES VOLTAIRE', 'PT. ADHY DUTA PRIMA Kso PT. ADYA WIDYA JASA, PT. SAICLE JASA', '2019', 'Bligo', 'Pemeliharaan Kinerja Jembatan', 'Km. Sby 25+900', '1582757951.png', '1582757963.png', '1582757986.png'),
(5, 'PRESERVASI PAKET BERKALA JEMBATAN SIDOARJO - PANDAAN - PURWOSARI - MALANG - KEPANJEN', 'CV. NAVES VOLTAIRE', 'PT. ADHY DUTA PRIMA Kso PT. ADYA WIDYA JASA, PT. SAICLE JASA', '2019', 'Candi', 'Pemeliharaan Kinerja Jembatan', 'Km. Sby 26+230', '1582758095.png', '1582758110.png', '1582758128.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `no_telp`, `username`, `password`) VALUES
(1, 'fara', '08123838932', 'far', '123'),
(2, 'dini', '08133377089', 'din', '123'),
(3, 'hayan', '081223393732', 'hay', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_laporan`
--
ALTER TABLE `data_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_laporan`
--
ALTER TABLE `data_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
