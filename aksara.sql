-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2019 pada 19.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aksara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `kode` varchar(4) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `tglPost` date NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode` varchar(4) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tags` text NOT NULL,
  `rating` int(11) NOT NULL,
  `voters` int(11) NOT NULL,
  `file` text NOT NULL,
  `gambar` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `tglInput` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `penulis`, `penerbit`, `tahun`, `tipe`, `tags`, `rating`, `voters`, `file`, `gambar`, `slug`, `tglInput`) VALUES
('3ae3', 'Teknologi Informasi Komunikasi Kelas 12 Semester 1', 'Siswanto, Nanang Kuswana', 'Kementerian Negara Riset dan Teknologi', '2008', 'Buku Sekolah', 'teknologi, sekolah', 12, 3, 'Kelas12_Teknologi_Informasi_Komunikasi_XII_semester_1_377.pdf', 'teknologi-informasi-komunikasi-kelas-12-semester-1-tahun-2008.jpg', 'teknologi-informasi-komunikasi-kelas-12-semester-1-tahun-2008', '2019-11-29 18:23:08'),
('7c9e', 'Matematika Kelas 10 Tahun 2017', 'Bornok Sinaga, Pardomuan N.J.M Sinambela, Andri Kristianto Sitanggang, Tri Andri Hutapea, Sudianto M', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 'Buku Sekolah', 'sains, matematika, sekolah', 9, 2, 'Kelas_10_SMA_Matematika_Siswa_2017.pdf', 'matematika-kelas-10-tahun-2017.jpg', 'matematika-kelas-10-tahun-2017', '2019-11-27 08:18:00'),
('99e8', 'Biologi Kelas 10', 'Moch. Anshori, Djoko Martono', 'Departemen Pendidikan Nasional', '2009', 'Buku Sekolah', 'sains, biologi, sekolah', 4, 1, 'Kelas10_Biologi_1_537.pdf', 'biologi-kelas-10-tahun-2009.jpg', 'biologi-kelas-10-tahun-2009', '2019-11-28 10:07:35'),
('ae4d', 'Fisika Kelas 11', 'Siswanto, Sukaryadi', 'Pusat Perbukuan Departemen Pendidikan Nasional', '2009', 'Buku Sekolah', 'sains, fisika, sekolah', 24, 7, 'Kelas11_Kompetensi_Fisika_557.pdf', 'fisika-kelas-11-tahun-2009.jpg', 'fisika-kelas-11-tahun-2009', '2019-11-29 19:06:31'),
('afbc', 'Sosiologi Kelas 12', 'Ruswanto', 'Departemen Pendidikan Nasional', '2009', 'Buku Sekolah', 'sosial, ips, sekolah', 8, 2, 'Kelas12_Sosiologi_839.pdf', 'sosiologi-kelas-12-tahun-2009.jpg', 'sosiologi-kelas-12-tahun-2009', '2019-11-29 18:33:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
