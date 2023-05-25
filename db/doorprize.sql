-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(1,	'admin',	'admin@localhost',	'pria',	'admin',	'admin');

CREATE TABLE `gift_register` (
  `GiftID` int(11) NOT NULL,
  `UserFullName` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `gift_register` (`GiftID`, `UserFullName`) VALUES
(1,	'Tyas Medika Pranandita'),
(2,	'Untung Sukir'),
(3,	'Irwan Wijaya K'),
(4,	'Imron Prakoso'),
(5,	'Rochmad Wijaya'),
(6,	'Sadewo Putra N'),
(7,	'Hari Prastowo'),
(8,	'Ahmat Yusuf'),
(9,	'Indah Susilowati'),
(10,	'Much Badawi'),
(11,	'Angga Bayu Santoso'),
(12,	'Muhammad Herry Erlangga'),
(13,	'Tri Agus Yulianto'),
(14,	'Bambang Sugiyanto'),
(15,	'Adi Suryadi'),
(16,	'Stefanus Kurniawan S'),
(17,	'Happy Priyantini Anggitasari'),
(18,	'Zuni Rusviana'),
(19,	'Dwi Purwanto'),
(20,	'Rohmatul Umma'),
(21,	'Dani Suprabowo'),
(22,	'Albertus Antok S'),
(23,	'Ervina'),
(24,	'Rani Sakuntala'),
(25,	'Linawati Santoso'),
(26,	'Gilang Bayu Swasongko'),
(27,	'Christriana Kusumawati'),
(28,	'Yusiwanto'),
(29,	'Reza Abraham'),
(30,	'Elisabeth Yunita Puspita Rini'),
(31,	'Tri Hartoyo'),
(32,	'Ade Joko Purnomo'),
(33,	'restu'),
(34,	'Ali Muhyiddin'),
(35,	'Agung'),
(36,	'Arif Budi Prasetyo'),
(37,	'Dedy Setiawan'),
(38,	'Maulim'),
(39,	'Ardian Subarjo'),
(40,	'Rinto Aribowo'),
(41,	'Sundri Astuti Dhiah'),
(42,	'Daniel Karunia Sentosa'),
(43,	'Edo Bagus Artandy'),
(44,	'Ahmad Syarkhowi'),
(45,	'Amri Arief'),
(46,	'Faris Resha Widijanto'),
(47,	'Kodrat Setyawan'),
(48,	'Sukarjo'),
(49,	'Anna Susanti'),
(50,	'Rexy Lintar Sakti'),
(51,	'Yudha Prastya Oktawirawan'),
(52,	'Muhammad Rizqi Hidayat');

CREATE TABLE `pemenang` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Nomor` varchar(100) NOT NULL,
  `Nama` varchar(150) NOT NULL DEFAULT '',
  `Hadiah` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `pemenang` (`Id`, `Nomor`, `Nama`, `Hadiah`) VALUES
(1,	'16',	'Indah 1 ( bandar )',	'Januari'),
(2,	'33',	'Awi 1',	'Januari'),
(3,	'22',	'Adi',	'Januari'),
(4,	'27',	'Vina 1',	'Januari'),
(5,	'21',	'Purwanto 2',	'Februari'),
(6,	'48',	'Silvi',	'Februari'),
(7,	'7',	'Antok 1',	'Februari'),
(8,	'31',	'Irwan 1',	'Februari'),
(9,	'1',	'Pak Budi',	'Maret'),
(10,	'35',	'Ahmat ',	'Maret'),
(11,	'44',	'Agung 1',	'Maret'),
(12,	'39',	'Gilang',	'Maret'),
(13,	'41',	'Anis 2',	'April'),
(14,	'46',	'Imron',	'April'),
(15,	'38',	'Yudha',	'April'),
(16,	'43',	'Donny',	'April');

CREATE TABLE `pengaturan` (
  `Id` int(30) NOT NULL,
  `Penyelenggara` varchar(100) NOT NULL,
  `Tema1` varchar(200) NOT NULL,
  `Tema2` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `pengaturan` (`Id`, `Penyelenggara`, `Tema1`, `Tema2`) VALUES
(1,	'ARISAN GVP 2023',	'Tema1',	'Tema2');

CREATE TABLE `tbl_hadiah` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `Hadiah` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `id` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_hadiah` (`Id`, `Hadiah`) VALUES
(17,	'Mei'),
(18,	'Mei'),
(19,	'Mei'),
(20,	'Mei'),
(21,	'Juni'),
(22,	'Juni'),
(23,	'Juni'),
(24,	'Juni'),
(25,	'Juli'),
(26,	'Juli'),
(27,	'Juli'),
(28,	'Juli'),
(29,	'Agustus'),
(30,	'Agustus'),
(31,	'Agustus'),
(32,	'Agustus'),
(33,	'September'),
(34,	'September'),
(35,	'September'),
(36,	'September'),
(37,	'Oktober'),
(38,	'Oktober'),
(39,	'Oktober'),
(40,	'Oktober'),
(41,	'November'),
(42,	'November'),
(43,	'November'),
(44,	'November'),
(45,	'Desember'),
(46,	'Desember'),
(47,	'Desember'),
(48,	'Desember');

CREATE TABLE `tbl_peserta` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Nomor` varchar(30) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Nomor` (`Nomor`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_peserta` (`Id`, `Nomor`, `Nama`) VALUES
(2,	'002',	'Bu Lia'),
(3,	'003',	'Pak stef 1'),
(4,	'004',	'Pak stef 2'),
(5,	'005',	'Pak bayu'),
(6,	'006',	'Happy'),
(8,	'008',	'Antok 2'),
(9,	'009',	'Dita 1'),
(10,	'010',	'Dita 2'),
(11,	'011',	'Tri agus 1'),
(12,	'012',	'Tri agus 2'),
(13,	'013',	'Dedi 1'),
(25,	'025',	'Lina 1'),
(15,	'015',	'Rinto'),
(17,	'017',	'Indah 2'),
(18,	'018',	'Bambang 1'),
(19,	'019',	'Bambang 2'),
(20,	'020',	'Purwanto 1'),
(23,	'023',	'Rani'),
(24,	'024',	'Umma'),
(14,	'014',	'Dedi 2'),
(26,	'026',	'Lina 2'),
(28,	'028',	'Vina 2'),
(29,	'029',	'Ali '),
(30,	'030',	'Restu'),
(32,	'032',	'Irwan 2'),
(34,	'034',	'Awi 2'),
(36,	'036',	'Sadewo 1'),
(37,	'037',	'Sadewo 2'),
(40,	'040',	'Anis 1'),
(42,	'042',	'Anis 3'),
(45,	'045',	'Agung 2'),
(47,	'047',	'Bunga');

-- 2023-05-25 02:54:34
