-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Feb 2023 pada 08.57
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_syahru_2021310181`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuker`
--

CREATE TABLE `tb_kuker` (
  `id_kue` int(15) NOT NULL,
  `nama_kue` varchar(50) NOT NULL,
  `ukuran` varchar(40) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kuker`
--

INSERT INTO `tb_kuker` (`id_kue`, `nama_kue`, `ukuran`, `harga`, `gambar`) VALUES
(1, 'nastar meler', '5000r', '70.000', 'gambar/1.jpg'),
(2, 'nastar jumbo lumer', '1000r', '75.000', 'gambar/jpg'),
(3, 'nastar apel', '1000r', '50.000', 'gambar/3.jpg'),
(4, 'nastar coklat', '3000r', '20.000', 'gambar/4.jpeg'),
(5, 'nastar medium', '5000r', '15.0000', 'gambar/5.jpg'),
(6, 'nastar lumer', '5000r', '80.000', 'gambar/6.jpeg'),
(7, 'nastar salju', '5000r', '60000', 'gambar/7.jpg'),
(8, 'nastar blueberry', '5000r', '10.0000', 'gambar/jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kuker`
--
ALTER TABLE `tb_kuker`
  ADD PRIMARY KEY (`id_kue`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kuker`
--
ALTER TABLE `tb_kuker`
  MODIFY `id_kue` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
