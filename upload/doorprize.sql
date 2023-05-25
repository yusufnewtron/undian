-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2017 pada 03.33
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doorprize`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(1, 'admin', 'admin@localhost', 'pria', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemenang`
--

CREATE TABLE IF NOT EXISTS `pemenang` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Nomor` varchar(100) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Hadiah` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `Id` int(30) NOT NULL,
  `Penyelenggara` varchar(100) NOT NULL,
  `Tema1` varchar(200) NOT NULL,
  `Tema2` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`Id`, `Penyelenggara`, `Tema1`, `Tema2`) VALUES
(1, 'Penyelenggara', 'Tema1', 'Tema2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hadiah`
--

CREATE TABLE IF NOT EXISTS `tbl_hadiah` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `Hadiah` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `id` (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE IF NOT EXISTS `tbl_peserta` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Nomor` varchar(30) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Nomor` (`Nomor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
