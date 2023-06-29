-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 15.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jns_klmn` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nis`, `nama_anggota`, `kelas`, `jns_klmn`, `alamat`) VALUES
(1111, 'Tina Rostiana', '6', 'Perempuan', 'Jakarta'),
(1234, 'Gina Nur ', 'RW', 'Perempuan', 'Gedong'),
(1290, 'Suga', '5', 'Laki-Laki', 'Bekasi'),
(2710, 'Dhia', '6', 'Perempuan', 'Tasikmalaya'),
(2756, 'Aqilah', '3', 'Perempuan', 'Kalisari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kd_buku` int(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` varchar(6) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `bnyk_item` int(100) NOT NULL,
  `no_rak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `kategori`, `bnyk_item`, `no_rak`) VALUES
(1234, 'Sejarah Bahasa Sunda', 'Joshua', 'Cahaya Media', '2014', 'UMUM', 1, '2A'),
(4321, 'Belajar Website Menggunakan Bootstrap', 'Ridwan Sahuria', 'Gramedia Book', '2018', 'KOMPUTER', 5, '1A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `kd_denda` int(30) NOT NULL,
  `kd_kembali` int(30) NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jns_denda` varchar(20) NOT NULL,
  `nominal` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kd_pinjam` int(30) NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `kd_buku` int(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_pustakawan` int(15) NOT NULL,
  `nama_pustakawan` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`kd_pinjam`, `nis`, `nama_anggota`, `kd_buku`, `judul`, `id_pustakawan`, `nama_pustakawan`, `tgl_pinjam`, `tgl_kembali`) VALUES
(9, 1290, 'Suga', 4321, 'Belajar Website Menggunakan Bootstrap', 1111, 'Masa', '2023-07-01', '2023-07-08'),
(12, 1234, 'Gina Nur Rahmadhaniah', 4321, 'Belajar Website Menggunakan Bootstrap', 1789, 'Salma', '2023-06-30', '2023-07-05'),
(17, 1234, 'Gina Nur', 4321, 'Belajar Website Menggunakan Bootstrap', 765, 'Giant', '2023-07-01', '2023-07-08'),
(24, 2756, 'Aqilah', 1234, 'Sejarah Bahasa Sunda', 2101, 'Yasmin', '2023-07-01', '2023-07-07'),
(29, 2710, 'Dhia', 1234, 'Sejarah Bahasa Sunda', 1111, 'Masa', '2023-07-04', '2023-07-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kd_kembali` int(30) NOT NULL,
  `kd_pinjam` int(30) NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `kd_buku` int(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_pustakawan` int(15) NOT NULL,
  `nama_pustakawan` varchar(50) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`kd_kembali`, `kd_pinjam`, `nis`, `nama_anggota`, `kd_buku`, `judul`, `id_pustakawan`, `nama_pustakawan`, `tgl_kembali`) VALUES
(1, 24, 2647, 'Gina Nur Rahmadhaniah', 1234, 'Belajar Bootstrap', 1111, 'Tina Rostiana', '2023-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `id_pustakawan` int(15) NOT NULL,
  `nama_pustakawan` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `jns_klmn` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pustakawan`
--

INSERT INTO `pustakawan` (`id_pustakawan`, `nama_pustakawan`, `ttl`, `jns_klmn`, `alamat`, `no_hp`) VALUES
(113, 'Tina Rostiana', '1980-04-28', 'Perempuan', 'Gedong, JAKTIM', '081323547624'),
(765, 'Giant', '2014-11-04', 'Laki-Laki', 'Tasik\r\n', '08818463729'),
(1111, 'Masa', '2001-06-19', 'Perempuan', 'Tangerang', '085714353060'),
(1789, 'Salma', '2000-06-21', 'Perempuan', 'BLOK M\r\n', '0811112435435'),
(2101, 'Yasmin', '2002-08-26', 'Perempuan', 'SLAWI\r\n', '0811111123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`kd_denda`),
  ADD KEY `kd_kembali` (`kd_kembali`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kd_pinjam`),
  ADD KEY `id_pustakawan` (`id_pustakawan`),
  ADD KEY `nis` (`nis`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kd_kembali`),
  ADD KEY `kd_pinjam` (`kd_pinjam`),
  ADD KEY `nis` (`nis`,`kd_buku`,`id_pustakawan`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`id_pustakawan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`kd_kembali`) REFERENCES `pengembalian` (`kd_kembali`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pustakawan`) REFERENCES `pustakawan` (`id_pustakawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `anggota` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kd_pinjam`) REFERENCES `peminjaman` (`kd_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
