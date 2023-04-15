-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2022 at 12:19 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengumuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

DROP TABLE IF EXISTS `daftar`;
CREATE TABLE IF NOT EXISTS `daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(32) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `desa` varchar(500) DEFAULT NULL,
  `alamat` text,
  `umur` varchar(5) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `kendaraan` varchar(10) DEFAULT NULL,
  `simitra` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `android` varchar(10) DEFAULT NULL,
  `memori` varchar(10) DEFAULT NULL,
  `siap_bertugas` varchar(10) DEFAULT NULL,
  `komitmen` varchar(10) DEFAULT NULL,
  `desa_kerja` varchar(500) DEFAULT NULL,
  `foto_ktp` varchar(500) DEFAULT NULL,
  `foto_kendaraan` varchar(500) DEFAULT NULL,
  `foto_hp` varchar(500) DEFAULT NULL,
  `surat_komitmen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupatendompu`
--

DROP TABLE IF EXISTS `kabupatendompu`;
CREATE TABLE IF NOT EXISTS `kabupatendompu` (
  `nik` varchar(33) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `wiltug` varchar(30) NOT NULL,
  `posisi` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `setuju` varchar(10) NOT NULL,
  `nama_survei` varchar(200) NOT NULL,
  `tahapan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupatendompu`
--

INSERT INTO `kabupatendompu` (`nik`, `nama`, `wiltug`, `posisi`, `status`, `nomor`, `setuju`, `nama_survei`, `tahapan`) VALUES
('2938219381081', 'askldskajdk', 'ksajkdakd', 'ksdjkajs', 'tidaklulus', '08451545', 'Ya', 'Survei Kepuasan Pegawai', 'Administrasi'),
('23782738127', 'KLSAJDKSALJK', 'KAJDKSAJ', 'SKADJKAJ', 'KSJDKAJSD', '082121312', 'Ya', 'Survei Kepuasan Pegawai', 'Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

DROP TABLE IF EXISTS `mitra`;
CREATE TABLE IF NOT EXISTS `mitra` (
  `nik` varchar(33) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `wiltug` varchar(10) DEFAULT NULL,
  `posisi` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `nomor` varchar(20) NOT NULL,
  `setuju` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`nik`, `nama`, `wiltug`, `posisi`, `status`, `nomor`, `setuju`) VALUES
('5205030210760002', 'Hanafi', 'Huu', 'Kortim', 'Utama', '085337297986', 'ya'),
('5205035209810003', 'Isdyansih', 'Huu', 'PPL', 'Utama', '085237475134', 'ya'),
('5205034802840001', 'Siti Maryam', 'Huu', 'PPL', 'Utama', '123456', 'ya'),
('5205035101810001', 'Siti Asmah', 'Huu', 'PPL', 'Utama', '123456', 'tidak'),
('5205036408840001', 'Nur Intan', 'Huu', 'PPL', 'Utama', '082339950745', 'ya'),
('5204186604840001', 'Nurbiati S.Pd', 'Huu', 'PPL', 'Utama', '085205374089', 'ya'),
('5205030110740001', 'Julkifli', 'Huu', 'PPL', 'Utama', '7894545', 'ya'),
('5205016205940005', 'Dwihardiatma', 'Huu', 'PPL', 'Cadangan', '123456789', ''),
('5205034302900002', 'Putri Ayuningtyas', 'Huu', 'PPL', 'Cadangan', '', ''),
('5205081112920001', 'Bhadrun', 'Pajo', 'Kortim', 'Utama', '083142606565', 'ya'),
('5205080106900003', 'HARYANTO', 'Pajo', 'PPL', 'Utama', '080128089218918', 'ya'),
('5205087108960004', 'Nurfitriyaningsih', 'Pajo', 'PPL', 'Utama', '083142606565', 'ya'),
('5205086101910001', 'Rahmatillah', 'Pajo', 'PPL', 'Utama', '083142606565', 'ya'),
('5205081005750002', 'ABUBAKAR', 'Pajo', 'PPL', 'Utama', '', ''),
('5205085106960002', 'Mia Agustina', 'Pajo', 'PPL', 'Cadangan', '0832123312321', ''),
('5205080207970002', 'Amirudin putra', 'Pajo', 'PPL', 'Cadangan', '5205081112920001', ''),
('5205080703930003', 'Farhan bil islam', 'Pajo', 'PPL', 'Cadangan', '0832123312321', ''),
('5205013005850002', 'Taufikurramadhan', 'Dompu', 'Kortim', 'Utama', '082339256040', 'ya'),
('5205012105710003', 'Nila Utama', 'Dompu', 'Kortim', 'Utama', '085399815266', 'ya'),
('5205012404740004', 'Eko Anshari', 'Dompu', 'Kortim', 'Utama', '082340692006', 'ya'),
('5205011409750002', 'Buhari Salam', 'Dompu', 'PPL', 'Utama', '085338285785', 'ya'),
('5205011109900003', 'Paturai diase', 'Dompu', 'PPL', 'Utama', '085237913642', 'ya'),
('5205015507910003', 'Nur Utari', 'Dompu', 'PPL', 'Utama', '082339532104', 'ya'),
('5205080601870002', 'Imron', 'Dompu', 'PPL', 'Utama', '082340364643', 'ya'),
('5205015901890002', 'ATIKA', 'Dompu', 'PPL', 'Utama', '082340107189', 'ya'),
('5205014612780003', 'LEPI LELIATI', 'Dompu', 'PPL', 'Utama', '085339093952', 'ya'),
('5205012307930002', 'A.Haris', 'Dompu', 'PPL', 'Utama', '085338956107', 'ya'),
('5205012711830002', 'Rachmad Soebari', 'Dompu', 'PPL', 'Utama', '', ''),
('5205011002720007', 'SUHERMAN', 'Dompu', 'PPL', 'Utama', '085337522056', 'ya'),
('5205014203870004', 'SRI MARDIANINGSIH', 'Dompu', 'PPL', 'Utama', '082341394066', 'ya'),
('5205016412830002', 'ST.RAHMATIKA', 'Dompu', 'PPL', 'Utama', '085253006427', 'ya'),
('5205012205960003', 'Muhamad al amin', 'Dompu', 'PPL', 'Utama', '085238949102', 'ya'),
('5205015510880003', 'Astini', 'Dompu', 'PPL', 'Utama', '085333706791', 'ya'),
('5205016912900002', 'Sri nurnaningsih', 'Dompu', 'PPL', 'Utama', '082339051761', 'ya'),
('5205016911830001', 'Titin Fatmawati', 'Dompu', 'PPL', 'Utama', '081952942436', 'ya'),
('5205011203930007', 'Ilham', 'Dompu', 'PPL', 'Utama', '085253006266', 'ya'),
('5205011010930011', 'Firdaus Putra', 'Dompu', 'PPL', 'Cadangan', '', ''),
('5205012807950004', 'Subhan Zainul', 'Dompu', 'PPL', 'Cadangan', '', ''),
('5205012404950008', 'Deny Syahrial', 'Dompu', 'PPL', 'Cadangan', '', ''),
('5205010612800002', 'Haeruddin', 'Woja', 'Kortim', 'Utama', '082340504802', 'ya'),
('5205050107750386', 'Ahmad', 'Woja', 'Kortim', 'Utama', '', ''),
('5205051206850004', 'Hasanuddin', 'Woja', 'Kortim', 'Utama', '082340956846', 'ya'),
('5205050605760001', 'Yusuf', 'Woja', 'Kortim', 'Utama', '081339732464', 'ya'),
('5272026108840002', 'Rosita', 'Woja', 'PPL', 'Utama', '085338230200', 'ya'),
('5205056906870002', 'SARIFAH', 'Woja', 'PPL', 'Utama', '082359207899', 'ya'),
('5205054503910006', 'Nur muslimah', 'Woja', 'PPL', 'Utama', '082339173094', 'ya'),
('5272046610780001', 'Nining sudiarni', 'Woja', 'PPL', 'Utama', '085338704065', 'ya'),
('5206025712990001', 'Lestari cahyani putri', 'Woja', 'PPL', 'Utama', '085337154209', 'ya'),
('5205052701930003', 'Aan aditya munandar', 'Woja', 'PPL', 'Utama', '085238742557', 'ya'),
('5205051603000005', 'CAHYADI', 'Woja', 'PPL', 'Utama', '081225126955', 'ya'),
('5205056409950001', 'Ratih Anggriani', 'Woja', 'PPL', 'Utama', '082352432441', 'ya'),
('5205050107850575', 'Adi Hidayat', 'Woja', 'PPL', 'Utama', '082237722002', 'ya'),
('5205054305850006', 'Noerhalimah', 'Woja', 'PPL', 'Utama', '085338116028', 'ya'),
('5205055811900002', 'Nurwahidah', 'Woja', 'PPL', 'Utama', '082339615514', 'ya'),
('5205056909990003', 'Nurul Ainun', 'Woja', 'PPL', 'Utama', '', ''),
('5205054205960003', 'Leni meilani', 'Woja', 'PPL', 'Utama', '082340956620', 'ya'),
('5205050202910005', 'Sadam Husen', 'Woja', 'PPL', 'Utama', '085339095909', 'ya'),
('5206021708971009', 'M Nur Aditya', 'Woja', 'PPL', 'Utama', '085339442022', 'ya'),
('5205054505900002', 'Atikasari', 'Woja', 'PPL', 'Utama', '082340028780', 'ya'),
('5207021305930003', 'Habdinir Kurniawan', 'Woja', 'PPL', 'Utama', '081353366125', 'ya'),
('5205056704980001', 'Sarah Ariani', 'Woja', 'PPL', 'Cadangan', '45664645412121', ''),
('5205056111860004', 'Fitriani', 'Woja', 'PPL', 'Cadangan', '', ''),
('5205054701950003', 'SRI WAHYUNINGSIH', 'Woja', 'PPL', 'Cadangan', '', ''),
('5205041308910001', 'Ermansyah', 'Kilo', 'PPL', 'Utama', '082340254861', 'ya'),
('5205080710870002', 'suparjon', 'Kilo', 'PPL', 'Utama', '085253669484', 'ya'),
('5205013112900015', 'Gunawan', 'Kilo', 'PPL', 'Utama', '245533121212', 'ya'),
('5205046203900002', 'Nurkamiskatiningsih', 'Kilo', 'PPL', 'Utama', '085239526354', 'ya'),
('5205040204960002', 'Fajriadin', 'Kilo', 'PPL', 'Cadangan', '', ''),
('5205013112900015', 'Gunawan', 'Kilo', 'PPL', 'Cadangan', '245533121212', 'ya'),
('5205020107680154', 'Salahuddin', 'Kempo', 'Kortim', 'Utama', '082340905087', 'ya'),
('5205025212980002', 'Desi Purnama Sari', 'Kempo', 'PPL', 'Utama', '085239136047', 'ya'),
('5205024705000001', 'Humairah', 'Kempo', 'PPL', 'Utama', '087821599273', 'ya'),
('5205025605910001', 'QURRATA AINI', 'Kempo', 'PPL', 'Utama', '085338263339', 'ya'),
('5205021207960001', 'Arif Susanto Julia Putra', 'Kempo', 'PPL', 'Utama', '082341592349', 'ya'),
('5205021504880002', 'Sidiratul Muhtaha', 'Kempo', 'PPL', 'Utama', '082340589716', 'ya'),
('5205021212740002', 'Lukman', 'Kempo', 'PPL', 'Utama', '', ''),
('5205022104940001', 'Reza Al Fachrusi', 'Kempo', 'PPL', 'Cadangan', '', ''),
('5205026503950001', 'Ika Muliati', 'Kempo', 'PPL', 'Cadangan', '', ''),
('5205070808820001', 'Maswan', 'Manggelewa', 'Kortim', 'Utama', '082341395239', 'ya'),
('5205075308800002', 'Yuliati', 'Manggelewa', 'Kortim', 'Utama', '085239807270', 'ya'),
('5205076509940001', 'Sumiyanti', 'Manggelewa', 'PPL', 'Utama', '082359019664', 'ya'),
('5205075609950002', 'Yuni setiawati', 'Manggelewa', 'PPL', 'Utama', '082339753353', 'ya'),
('5205075208970001', 'Nining Susilawati S. sos', 'Manggelewa', 'PPL', 'Utama', '082341393039', 'ya'),
('5205076808800001', 'Yuriati', 'Manggelewa', 'PPL', 'Utama', '082339200023', 'ya'),
('5205075203960001', 'Sri maryani', 'Manggelewa', 'PPL', 'Utama', '082359504760', 'ya'),
('5205021802840002', 'SAIFUL BAHRI', 'Manggelewa', 'PPL', 'Utama', '082339182517', 'ya'),
('5205072309970002', 'ADRIAN PRATAMA', 'Manggelewa', 'PPL', 'Utama', '082359319101', 'ya'),
('5205070304820001', 'NURHIDAYAT', 'Manggelewa', 'PPL', 'Utama', '082340934817', 'ya'),
('5205071505900001', 'Dafid Hermawan', 'Manggelewa', 'PPL', 'Utama', '085337369848', 'ya'),
('5205073112870008', 'Sahlan', 'Manggelewa', 'PPL', 'Utama', '085213000246', 'ya'),
('5205070609831000', 'Nurdin', 'Manggelewa', 'PPL', 'Utama', '085338193105', 'ya'),
('5205070504940020', 'A. Bakar', 'Manggelewa', 'PPL', 'Cadangan', '', ''),
('5205072012900001', 'Hidayat', 'Manggelewa', 'PPL', 'Cadangan', '', ''),
('5205076503970003', 'Sri Rahmawati', 'Manggelewa', 'PPL', 'Cadangan', '', ''),
('5205051206950001', 'Haerul Annas', 'Pekat', 'PPL', 'Utama', '085205341444', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `nik` varchar(33) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `wiltug` varchar(30) NOT NULL,
  `posisi` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `setuju` varchar(10) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nik`, `nama`, `wiltug`, `posisi`, `status`, `nomor`, `setuju`) VALUES
('51212132312131', 'salskjdlaj', 'daskjsakd', 'djlasjdl', 'kdjakjdk', '', ''),
('5203234215', 'Coba 2', 'asndkjask', 'shjhasjdh', 'Cadangan', '085132121', 'Ya'),
('52050306980005', 'Agung Yuniarta Sosiawan', 'Lombok Timur', 'Kortim', 'Lulus', '083142606565', 'Ya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
