-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 11:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejati_erentut`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_aktv`
--

CREATE TABLE `log_aktv` (
  `id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `aktivitas` tinytext NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_aktv`
--

INSERT INTO `log_aktv` (`id`, `username`, `ip`, `aktivitas`, `datetime`) VALUES
(1, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 01:03:06'),
(2, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 01:04:56'),
(3, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 02:05:23'),
(4, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:35:36'),
(5, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:36:17'),
(6, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:36:17'),
(7, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:37:07'),
(8, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:39:50'),
(9, '1111111111111111', '::1', 'menambahkan sopform 47', '2020-03-16 06:40:06'),
(10, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:11'),
(11, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:14'),
(12, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:30'),
(13, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:31'),
(14, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:32'),
(15, '1111111111111111', '::1', 'menambahkan/mengubah sopform 47', '2020-03-16 06:46:33'),
(16, 'admin', '::1', 'Login ke sistem', '2020-03-16 04:30:14'),
(17, 'admin', '::1', 'Login ke sistem', '2020-03-16 10:46:34'),
(18, 'admin', '::1', 'Login ke sistem', '2020-03-17 12:33:29'),
(19, 'admin', '::1', 'Login ke sistem', '2020-03-17 01:50:56'),
(20, '1234', '::1', 'Login ke sistem', '2020-03-17 02:26:20'),
(21, 'admin', '::1', 'Login ke sistem', '2020-03-17 02:30:44'),
(22, '1234', '::1', 'Login ke sistem', '2020-03-17 02:31:04'),
(23, '1234', '::1', 'Login ke sistem', '2020-03-17 02:41:55'),
(24, 'admin', '::1', 'Login ke sistem', '2020-03-17 04:08:47'),
(25, '12345', '::1', 'Login ke sistem', '2020-03-17 04:09:41'),
(26, '12345', '::1', 'menambahkan/mengubah sopform 47', '2020-03-17 04:12:47'),
(27, '1234', '::1', 'Login ke sistem', '2020-03-17 04:13:04'),
(28, 'admin', '::1', 'Login ke sistem', '2020-03-17 04:14:28'),
(29, '123456', '::1', 'Login ke sistem', '2020-03-17 04:15:51'),
(30, '123456', '::1', 'menambahkan/mengubah sopform 47', '2020-03-17 04:18:15'),
(31, '1234', '::1', 'Login ke sistem', '2020-03-17 04:18:57'),
(32, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:22:15'),
(33, '1234', '::1', 'Login ke sistem', '2020-03-17 04:25:31'),
(34, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:25:44'),
(35, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:29:58'),
(36, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:30:04'),
(37, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:33:01'),
(38, '1234', '::1', 'Kasi 1234 menambahkan usulan', '2020-03-17 04:57:49'),
(39, 'admin', '::1', 'Login ke sistem', '2020-03-17 05:35:25'),
(40, '12', '::1', 'Login ke sistem', '2020-03-17 05:37:09'),
(41, '12', '::1', 'menambahkan/mengubah sopform 47', '2020-03-17 05:38:43'),
(42, '123', '::1', 'Login ke sistem', '2020-03-17 05:39:01'),
(43, '12', '::1', 'Login ke sistem', '2020-03-17 05:41:37'),
(44, '123', '::1', 'Login ke sistem', '2020-03-17 05:42:21'),
(45, '123', '::1', 'Kasi 123 menambahkan usulan', '2020-03-17 05:59:28'),
(46, '123', '::1', 'Kasi 123 menambahkan usulan', '2020-03-17 06:01:57'),
(47, '123', '::1', 'Login ke sistem', '2020-03-18 02:31:08'),
(48, 'admin', '::1', 'Login ke sistem', '2020-03-18 02:32:49'),
(49, '321', '::1', 'Login ke sistem', '2020-03-18 02:45:25'),
(50, '321', '::1', 'Login ke sistem', '2020-03-18 02:45:35'),
(51, '321', '::1', 'Login ke sistem', '2020-03-18 02:59:00'),
(52, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 03:14:48'),
(53, '12', '::1', 'Login ke sistem', '2020-03-18 03:40:23'),
(54, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:42:14'),
(55, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:45:32'),
(56, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:47:17'),
(57, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:48:25'),
(58, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:49:19'),
(59, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:54:24'),
(60, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:57:57'),
(61, '321', '::1', 'Kajari 321 menambahkan usulan', '2020-03-18 04:59:17'),
(62, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-18 04:59:47'),
(63, '123', '::1', 'Login ke sistem', '2020-03-18 05:02:06'),
(64, '123', '::1', 'Kasi 123 mengubah usulan', '2020-03-18 05:02:27'),
(65, '4321', '::1', 'Login ke sistem', '2020-03-18 05:02:56'),
(66, '4321', '::1', 'Login ke sistem', '2020-03-18 05:06:07'),
(67, '4321', '::1', 'Login ke sistem', '2020-03-18 05:06:15'),
(68, '4321', '::1', 'Login ke sistem', '2020-03-18 05:06:48'),
(69, '4321', '::1', 'Aspidum 4321 mengubah usulan', '2020-03-18 05:11:10'),
(70, '4321', '::1', 'Aspidum 4321 menambahkan usulan', '2020-03-18 05:13:44'),
(71, '4321', '::1', 'Aspidum 4321 mengubah usulan', '2020-03-18 05:14:06'),
(72, '54321', '::1', 'Login ke sistem', '2020-03-18 05:15:48'),
(73, '54321', '::1', 'Login ke sistem', '2020-03-18 05:25:21'),
(74, '54321', '::1', 'Login ke sistem', '2020-03-18 05:25:27'),
(75, '54321', '::1', 'Login ke sistem', '2020-03-18 05:25:45'),
(76, '54321', '::1', 'Kajati 54321 menambahkan usulan', '2020-03-18 05:30:30'),
(77, '4321', '::1', 'Login ke sistem', '2020-03-18 06:09:46'),
(78, '321', '::1', 'Login ke sistem', '2020-03-18 06:37:36'),
(79, '123', '::1', 'Login ke sistem', '2020-03-18 06:41:21'),
(80, '321', '::1', 'Login ke sistem', '2020-03-18 06:43:51'),
(81, '123', '::1', 'Login ke sistem', '2020-03-18 06:44:06'),
(82, '4321', '::1', 'Login ke sistem', '2020-03-18 06:57:53'),
(83, '54321', '::1', 'Login ke sistem', '2020-03-18 08:33:55'),
(84, '54321', '::1', 'Login ke sistem', '2020-03-18 08:34:36'),
(85, '123', '::1', 'Login ke sistem', '2020-03-18 08:47:41'),
(86, '123', '::1', 'Kasi 123 mengubah usulan', '2020-03-18 09:00:56'),
(87, '123', '::1', 'Kasi 123 mengubah usulan', '2020-03-18 09:01:04'),
(88, '123', '::1', 'Kasi 123 mengubah usulan', '2020-03-18 09:01:25'),
(89, '123', '::1', 'Kasi 123 mengubah usulan', '2020-03-18 09:01:31'),
(90, '321', '::1', 'Login ke sistem', '2020-03-18 09:01:59'),
(91, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-18 09:05:10'),
(92, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-18 09:05:19'),
(93, '4321', '::1', 'Login ke sistem', '2020-03-18 09:05:46'),
(94, '4321', '::1', 'Aspidum 4321 mengubah usulan', '2020-03-18 09:08:52'),
(95, '54321', '::1', 'Login ke sistem', '2020-03-18 09:09:50'),
(96, '54321', '::1', 'Kajati 54321 mengubah usulan', '2020-03-18 09:14:11'),
(97, '54321', '::1', 'Kajati 54321 mengubah usulan', '2020-03-18 09:14:21'),
(98, '54321', '::1', 'Login ke sistem', '2020-03-18 11:55:17'),
(99, '54321', '::1', 'Login ke sistem', '2020-03-18 11:55:51'),
(100, 'admin', '::1', 'Login ke sistem', '2020-03-19 12:29:13'),
(101, '12345', '::1', 'Login ke sistem', '2020-03-19 12:29:56'),
(102, '54321', '::1', 'Login ke sistem', '2020-03-19 12:32:41'),
(103, '4321', '::1', 'Login ke sistem', '2020-03-19 01:54:18'),
(104, 'admin', '::1', 'Login ke sistem', '2020-03-19 02:58:45'),
(105, '123', '::1', 'Login ke sistem', '2020-03-19 02:59:09'),
(106, '131197', '::1', 'Login ke sistem', '2020-03-19 03:14:54'),
(107, '131197', '::1', 'Login ke sistem', '2020-03-19 05:53:18'),
(108, '131197', '::1', 'menambakan sopform 47', '2020-03-19 06:11:05'),
(109, '131197', '::1', 'menambakan sopform 47', '2020-03-19 06:11:55'),
(110, '131197', '::1', 'menambakan sopform 47', '2020-03-19 06:12:26'),
(111, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:20:28'),
(112, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:21:06'),
(113, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:21:32'),
(114, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:22:28'),
(115, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:29:19'),
(116, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:29:52'),
(117, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:30:40'),
(118, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:31:26'),
(119, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:31:40'),
(120, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:33:49'),
(121, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:34:49'),
(122, '131197', '::1', 'mengubah sopform 47', '2020-03-19 06:34:58'),
(123, '54321', '::1', 'Login ke sistem', '2020-03-19 06:02:11'),
(124, '131197', '::1', 'Login ke sistem', '2020-03-19 07:01:06'),
(125, '131197', '::1', 'mengubah sopform 47', '2020-03-19 07:07:09'),
(126, '131197', '::1', 'mengubah sopform 47', '2020-03-19 07:07:59'),
(127, '54321', '::1', 'Login ke sistem', '2020-03-19 07:11:13'),
(128, '131197', '::1', 'Login ke sistem', '2020-03-19 07:30:33'),
(129, '131197', '::1', 'menambakan sopform 47', '2020-03-19 07:44:13'),
(130, '131197', '::1', 'mengubah sopform 47', '2020-03-19 07:53:16'),
(131, '131197', '::1', 'mengubah sopform 47', '2020-03-19 07:54:04'),
(132, '131197', '::1', 'Login ke sistem', '2020-03-20 01:12:54'),
(133, '54321', '::1', 'Login ke sistem', '2020-03-20 01:13:21'),
(134, '54321', '::1', 'Kajati 54321 mengubah usulan', '2020-03-20 01:34:43'),
(135, '131197', '::1', 'mengubah sopform 47', '2020-03-20 01:43:59'),
(136, '321', '::1', 'Login ke sistem', '2020-03-20 11:43:33'),
(137, '54321', '::1', 'Login ke sistem', '2020-03-20 11:51:35'),
(138, '54321', '::1', 'Login ke sistem', '2020-03-20 11:52:01'),
(139, '4321', '::1', 'Login ke sistem', '2020-03-20 11:56:49'),
(140, '54321', '::1', 'Login ke sistem', '2020-03-20 11:57:27'),
(141, '321', '::1', 'Login ke sistem', '2020-03-20 12:00:05'),
(142, 'admin', '::1', 'Login ke sistem', '2020-03-20 02:58:22'),
(143, '321', '::1', 'Login ke sistem', '2020-03-20 02:59:01'),
(144, 'admin', '::1', 'Login ke sistem', '2020-03-22 02:54:28'),
(145, '321', '::1', 'Login ke sistem', '2020-03-22 02:54:50'),
(146, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-22 03:10:20'),
(147, '4321', '::1', 'Login ke sistem', '2020-03-22 03:11:06'),
(148, '54321', '::1', 'Login ke sistem', '2020-03-22 03:12:14'),
(149, '54321', '::1', 'Login ke sistem', '2020-03-22 03:12:25'),
(150, 'admin', '::1', 'Login ke sistem', '2020-03-22 03:35:51'),
(151, 'admin', '::1', 'Login ke sistem', '2020-03-22 10:54:52'),
(152, '321', '::1', 'Login ke sistem', '2020-03-22 10:55:19'),
(153, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-22 10:59:43'),
(154, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-22 11:01:33'),
(155, '321', '::1', 'Kajari 321 mengubah usulan', '2020-03-22 11:08:10'),
(156, '4321', '::1', 'Login ke sistem', '2020-03-22 11:14:24'),
(157, '54321', '::1', 'Login ke sistem', '2020-03-22 11:17:19'),
(158, '54321', '::1', 'Login ke sistem', '2020-03-22 11:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akibat`
--

CREATE TABLE `tb_akibat` (
  `id_akibat` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `rugi` int(11) DEFAULT NULL,
  `mati` text DEFAULT NULL,
  `luka` text DEFAULT NULL,
  `akibat_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akibat`
--

INSERT INTO `tb_akibat` (`id_akibat`, `id_sop`, `rugi`, `mati`, `luka`, `akibat_lain`) VALUES
(1, 13, 7, '8', '9', '10'),
(2, 14, 14, '15', '16', '18'),
(3, 15, 0, '1', '1', '1'),
(12, 15, 0, '1', '1', '1'),
(13, 15, 0, '1', '1', '1'),
(14, 20, 1223, '12', '33', '11'),
(15, 20, 1223, '12', '33', '11'),
(16, 21, 123, '123', '123', '123'),
(17, 21, 123, '123', '123', '123'),
(18, 22, 1, '2', '3', '4'),
(19, 22, 1, '2', '3', '4'),
(20, 23, 111, 'asd', 'asdasd', 'asdas'),
(21, 24, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangbukti`
--

CREATE TABLE `tb_barangbukti` (
  `id_barangbukti` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `barang_bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barangbukti`
--

INSERT INTO `tb_barangbukti` (`id_barangbukti`, `id_sop`, `barang_bukti`) VALUES
(1, 13, NULL),
(2, 14, NULL),
(3, 15, NULL),
(12, 15, NULL),
(13, 15, NULL),
(14, 20, NULL),
(15, 20, NULL),
(16, 21, NULL),
(17, 21, NULL),
(19, 22, 'barang bukti'),
(20, 23, 'asdasdasdas'),
(21, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `hasil` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_sop`, `hasil`) VALUES
(1, 23, 'www'),
(2, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasus`
--

CREATE TABLE `tb_kasus` (
  `id_kasus` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `kasus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasus`
--

INSERT INTO `tb_kasus` (`id_kasus`, `id_sop`, `kasus`) VALUES
(1, 13, '4'),
(2, 13, '4'),
(3, 14, '11'),
(4, 14, '11'),
(5, 15, '1'),
(6, 15, '1'),
(15, 20, 'a'),
(16, 20, 'a'),
(17, 21, 'kasus'),
(18, 21, 'kasus'),
(20, 22, 'a'),
(21, 23, 'sdas'),
(22, 23, 'sdas'),
(23, 24, ''),
(24, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keadaan`
--

CREATE TABLE `tb_keadaan` (
  `id_keadaan` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `berat` text DEFAULT NULL,
  `ringan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keadaan`
--

INSERT INTO `tb_keadaan` (`id_keadaan`, `id_sop`, `berat`, `ringan`) VALUES
(1, 13, '11', '12'),
(2, 14, '19', '20'),
(3, 15, '1', '1'),
(8, 20, 'asda', 'dad'),
(9, 21, 'berat', 'ringan'),
(10, 22, 'f', 'faf'),
(11, 22, 'de', 'dffgg'),
(82, 23, '1', '5'),
(83, 23, '2', '6'),
(84, 23, '3', '7'),
(85, 23, '4', '8'),
(86, 23, NULL, '9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendalikorporasi`
--

CREATE TABLE `tb_kendalikorporasi` (
  `id_kendali` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `id_korporasi` int(11) NOT NULL,
  `nama_kendali` tinytext DEFAULT NULL,
  `tempat_lahirkendali` tinytext DEFAULT NULL,
  `tanggal_lahirkendali` date DEFAULT NULL,
  `jk_kendali` tinytext DEFAULT NULL,
  `kebangsaan_kendali` tinytext DEFAULT NULL,
  `alamat_kendali` tinytext DEFAULT NULL,
  `agama_kendali` tinytext DEFAULT NULL,
  `pekerjaan_kendali` tinytext DEFAULT NULL,
  `pendidikan_kendali` tinytext DEFAULT NULL,
  `foto_kendali` varchar(32) DEFAULT NULL,
  `ktp_kendali` varchar(18) DEFAULT NULL,
  `sim_kendali` varchar(18) DEFAULT NULL,
  `passpor_kendali` varchar(18) DEFAULT NULL,
  `ket_kendali` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendalikorporasi`
--

INSERT INTO `tb_kendalikorporasi` (`id_kendali`, `id_sop`, `id_korporasi`, `nama_kendali`, `tempat_lahirkendali`, `tanggal_lahirkendali`, `jk_kendali`, `kebangsaan_kendali`, `alamat_kendali`, `agama_kendali`, `pekerjaan_kendali`, `pendidikan_kendali`, `foto_kendali`, `ktp_kendali`, `sim_kendali`, `passpor_kendali`, `ket_kendali`) VALUES
(1, 13, 1, '', '', '0000-00-00', '', NULL, '', '', '', '', NULL, '', '', '', ''),
(2, 14, 2, '', '', '0000-00-00', '', NULL, '', '', '', '', NULL, '', '', '', ''),
(3, 15, 3, '22', '23', '2020-03-13', 'laki-laki', '', '24', 'Islam', '25', '26', NULL, '27', '29', '28', '30'),
(8, 20, 8, '', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', ''),
(9, 21, 9, '', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', ''),
(10, 22, 10, 'kndli', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', ''),
(11, 23, 11, '', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', ''),
(12, 24, 12, 'dsadasd', 'sadasdasd', '2018-03-07', 'laki-laki', 'WNI', 'adsad', 'Islam', 'asdasd', 'asdasd', NULL, 'asdasda', 'dasdas', 'dasdas', 'dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_korporasi`
--

CREATE TABLE `tb_korporasi` (
  `id_korporasi` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `nama_korporasi` tinytext DEFAULT NULL,
  `tempat_pendirian` tinytext DEFAULT NULL,
  `tanggal_pendirian` date DEFAULT NULL,
  `nomor_anggaran` varchar(32) DEFAULT NULL,
  `nomor_pendirian` varchar(32) DEFAULT NULL,
  `nomor_perubahan` varchar(32) DEFAULT NULL,
  `nomor_korporasi` varchar(32) DEFAULT NULL,
  `tempat_korporasi` tinytext DEFAULT NULL,
  `kebangsaan_korporasi` tinytext DEFAULT NULL,
  `surat_korporasi` tinytext DEFAULT NULL,
  `jenis_korporasi` tinytext DEFAULT NULL,
  `kegiatan_korporasi` tinytext DEFAULT NULL,
  `alamat_korporasi` tinytext DEFAULT NULL,
  `npwp` int(11) DEFAULT NULL,
  `nwdp` int(11) DEFAULT NULL,
  `ket_korporasi` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_korporasi`
--

INSERT INTO `tb_korporasi` (`id_korporasi`, `id_sop`, `nama_korporasi`, `tempat_pendirian`, `tanggal_pendirian`, `nomor_anggaran`, `nomor_pendirian`, `nomor_perubahan`, `nomor_korporasi`, `tempat_korporasi`, `kebangsaan_korporasi`, `surat_korporasi`, `jenis_korporasi`, `kegiatan_korporasi`, `alamat_korporasi`, `npwp`, `nwdp`, `ket_korporasi`) VALUES
(1, 13, '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', 0, 0, ''),
(2, 14, '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', 0, 0, ''),
(3, 15, '1', '12', '2020-03-12', '3', '9', '5', '6', '7', '', '9', '10', '11', '12', 13, 14, '15'),
(8, 20, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(9, 21, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(10, 22, 'agg', 'a', '0000-00-00', '5', '7', '8', '3', 'bkl', 'wni', 'srt', 'jns', 'kgtn', 'almt', 1, 1, ''),
(11, 23, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(12, 24, 'zcxz', 'czczxcxzc', '2020-03-12', 'cxzczx', 'czxczxc', 'czxczxc', 'xczxczx', 'zxczxc', 'WNI', 'czxczxc', 'zxczxczxc', 'zxczxcz', 'xczxcxc', 0, 0, 'zczxczx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `laporan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `id_sop`, `laporan`) VALUES
(1, 23, 'wwwww'),
(2, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orang`
--

CREATE TABLE `tb_orang` (
  `id_orang` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `nama_orang` tinytext DEFAULT NULL,
  `tempat_lahirorang` tinytext DEFAULT NULL,
  `tanggal_lahirorang` date DEFAULT NULL,
  `jk_orang` tinytext DEFAULT NULL,
  `kebangsaan_orang` tinytext DEFAULT NULL,
  `alamat_orang` tinytext DEFAULT NULL,
  `agama_orang` tinytext DEFAULT NULL,
  `pekerjaan_orang` tinytext DEFAULT NULL,
  `pendidikan_orang` tinytext DEFAULT NULL,
  `foto_orang` tinytext DEFAULT NULL,
  `ktp_orang` tinytext DEFAULT NULL,
  `sim_orang` tinytext DEFAULT NULL,
  `passpor_orang` tinytext DEFAULT NULL,
  `ket_orang` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orang`
--

INSERT INTO `tb_orang` (`id_orang`, `id_sop`, `nama_orang`, `tempat_lahirorang`, `tanggal_lahirorang`, `jk_orang`, `kebangsaan_orang`, `alamat_orang`, `agama_orang`, `pekerjaan_orang`, `pendidikan_orang`, `foto_orang`, `ktp_orang`, `sim_orang`, `passpor_orang`, `ket_orang`) VALUES
(1, 13, 'AJI DWI', 'BENGKULU', '1997-04-04', 'laki-laki', NULL, 'BENGKULU', 'Islam', 'FREELANCE', 'S1', NULL, '177711111111', '1', '2', '3'),
(2, 14, '1', '2', '2020-03-06', 'laki-laki', NULL, '3', 'Islam', '4', '5', NULL, '6', '7', '8', '9'),
(3, 15, '', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', ''),
(8, 20, 'Nama Lengkap', 'Tempat Lahir', '2020-04-02', 'laki-laki', 'WNI', 'Alamat', 'Islam', 'Pekerjaan', 'Pendidikan', NULL, '122', '1233', '1233', '1223'),
(9, 21, 'nama ', 'tempat', '2020-03-21', 'laki-laki', 'WNI', 'alamat', 'Islam', 'pekerjaan', 'pendidikan', NULL, '123', '123', '123', '123'),
(10, 22, 'ajik', 'f', '2017-04-05', 'laki-laki', 'WNI', 'a', 'Islam', 'a', 'a', NULL, 'a', 'a', 'a', 'a'),
(11, 23, 'Aasds', 'bengkulu', '2020-03-18', '', 'WNI', 'WR supratman', 'Islam', 'BUruh', 'S1', NULL, '1231231', '12312343', '5345435', '1'),
(12, 24, 'astaga', '', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasalbukti`
--

CREATE TABLE `tb_pasalbukti` (
  `id_pasalbukti` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `pasal_bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasalbukti`
--

INSERT INTO `tb_pasalbukti` (`id_pasalbukti`, `id_sop`, `pasal_bukti`) VALUES
(1, 13, '5'),
(2, 14, '12'),
(3, 15, '1'),
(8, 20, 'a'),
(9, 21, 'pasal'),
(10, 22, 'a'),
(11, 23, 'dasd'),
(12, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasaldakwa`
--

CREATE TABLE `tb_pasaldakwa` (
  `id_pasaldakwa` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `pasal_dakwa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasaldakwa`
--

INSERT INTO `tb_pasaldakwa` (`id_pasaldakwa`, `id_sop`, `pasal_dakwa`) VALUES
(1, 13, '5'),
(2, 14, '12'),
(3, 15, '1'),
(8, 20, 'a'),
(9, 21, 'pasal'),
(10, 22, 'ab'),
(11, 23, 'asda'),
(12, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` tinytext NOT NULL,
  `jabatan_pegawai` tinytext NOT NULL,
  `pangkat_pegawai` tinytext NOT NULL,
  `golongan_pegawai` varchar(11) NOT NULL,
  `keterangan_pegawai` tinytext NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan_pegawai`, `pangkat_pegawai`, `golongan_pegawai`, `keterangan_pegawai`, `password`, `level`) VALUES
(1, '131197', 'Aji Dwi Herza Novariadi', 'Jaksa', 'Struktrual', '3a', 'KEJAKSAAN NEGERI BENGKULU UTARA', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, '222222', 'agief', 'jaksa', 'asd', 'asd', 'kejaksaan negeri bengkulu', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, '2222222', 'Rina', 'aspidum', 'asdasdas', 'asdsadas', 'kejaksaan tinggi bengkulu', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 'admin', '', '', '', '', '', '21232f297a57a5a743894a0e4a801fc3', 0),
(7, '12321', 'budi4', 'wakajati', 'asdas', 'asds', 'kejaksaan tinggi bengkulu', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(14, '11111111111111111', 'asdasdas', 'jaksa', 'asdasda', '3a', 'KEJAKSAAN NEGERI BENGKULU UTARA', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(15, '1234', 'Kasi', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI BENGKULU SELATAN', '60caaf7e0101ac691972e0414d506b5b', 2),
(16, '12345', 'Jaksa', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI BENGKULU SELATAN', 'dc779843c63e18ba1abd96192f15155c', 1),
(17, '12345', 'Jaksa2', 'Jabatan', 'Pangkat', 'Golongan', 'KEJAKSAAN NEGERI BENGKULU', 'dc779843c63e18ba1abd96192f15155c', 1),
(18, '123456', 'Jaksa2', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI BENGKULU UTARA', 'dc779843c63e18ba1abd96192f15155c', 1),
(19, '12', 'Jaksa3', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI MUKO-MUKO', 'dc779843c63e18ba1abd96192f15155c', 1),
(20, '123', 'Kasi2', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI SELUMA', '60caaf7e0101ac691972e0414d506b5b', 2),
(21, '321', 'Kajari', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN NEGERI SELUMA', 'af16404a927381f7ce547e0a7949f214', 3),
(22, '4321', 'Aspidum', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN TINGGI BENGKULU', 'cdd116756bc615cb20ff00f0353366dc', 4),
(23, '54321', 'Kajati', 'jabatan', 'pangkat', 'golongan', 'KEJAKSAAN TINGGI BENGKULU', '65238ff3e2659c22720a006b2cde21f6', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rentut`
--

CREATE TABLE `tb_rentut` (
  `id_rentut` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `pidana_pokok` text DEFAULT NULL,
  `pidana_tambahan` text DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `bb_rentut` text DEFAULT NULL,
  `biaya_perkara` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `pendapat` text DEFAULT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rentut`
--

INSERT INTO `tb_rentut` (`id_rentut`, `id_sop`, `pidana_pokok`, `pidana_tambahan`, `tindakan`, `bb_rentut`, `biaya_perkara`, `saran`, `pendapat`, `level`) VALUES
(1, 13, '14', '15', '16', '171', '18', '19', '20', 1),
(2, 14, '22', '23', '24', '25', '26', '27', '28', 1),
(3, 15, '1', '1', '1', '1', '1', '1', '1', 1),
(8, 20, 'Pidana Pokok', 'Pidana Tambahan', 'Tindakan', 'Barang Bukti', 'Biaya Perkara', 'Saran', 'Pendapat', 1),
(10, 21, 'z', 'y', 'c', 'd', 'e', NULL, 'f', 2),
(13, 22, 'Ini usulan kajari', 'Ini usulan kajari', 'Ini usulan kajari', 'Ini usulan kajari', 'Ini usulan kajari', 'fwe', 'Ini usulan kajari', 1),
(14, 22, 'Ini usulan kasi', 'Ini usulan kasi', 'Ini usulan kasi', 'Ini usulan kasi', 'Ini usulan kasi', NULL, 'Ini usulan kasi', 2),
(20, 221, 'Ini usulan kajaria', 'Ini usulan kajaria', 'Ini usulan kajaria', 'Ini usulan kajaria', 'Ini usulan kajaria', NULL, 'Ini usulan kajaria', 9),
(22, 221, 'Ini usulan aspidum', 'Ini usulan aspidum', 'Ini usulan aspidum', 'Ini usulan aspidum', 'Ini usulan aspidum', NULL, 'Ini usulan aspidum', 7),
(23, 221, 'Ini usulan kajati', 'Ini usulan kajati', 'Ini usulan kajati', 'Ini usulan kajati', 'Ini usulan kajati', NULL, 'Ini usulan kajati', 8),
(24, 23, 'dasdasda', 'asdas', 'dasdasd', 'asdasd', 'asdasd', 'asdasdsa', 'adsadasdas', 1),
(25, 24, '', '', '', '', '', '', '', 1),
(27, 22, ' Ini usulan kajari 3', ' Ini usulan kajari 2', ' Ini usulan kajari 2', ' Ini usulan kajari 2', ' Ini usulan kajari 2', NULL, ' Ini usulan kajari 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sopform`
--

CREATE TABLE `tb_sopform` (
  `id_sop` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tujuan` tinytext NOT NULL,
  `dari` tinytext NOT NULL,
  `nomor_sop` varchar(32) NOT NULL,
  `sifat` tinytext NOT NULL,
  `tanggal` date NOT NULL,
  `terdakwa` tinytext NOT NULL,
  `perihal` tinytext NOT NULL,
  `lampiran` tinytext NOT NULL,
  `kategori` tinytext NOT NULL,
  `posisi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sopform`
--

INSERT INTO `tb_sopform` (`id_sop`, `nip`, `tujuan`, `dari`, `nomor_sop`, `sifat`, `tanggal`, `terdakwa`, `perihal`, `lampiran`, `kategori`, `posisi`) VALUES
(13, '2147483647', 'Kejaksaan Negeri Bengkulu', 'Kejaksaan Tinggi Bengkulu', '-', 'Rahasia', '2020-03-15', 'Perorangan', '', '', '', 2),
(14, '2147483647', 'Kejaksaan Negeri Kepahiang', 'Kejaksaan Tinggi Bengkulu', '-', 'Rahasia', '2020-03-16', 'Perorangan', '', '', '', 2),
(15, '1111111111111111', 'Kejaksaan Negeri Bengkulu', 'Kejaksaan Tinggi Bengkulu', '-', 'Rahasia', '2020-03-03', 'Koporasi', 'asdasda', '', '', 2),
(20, '12345', 'Kejaksaan Negeri Bengkulu', 'KEJAKSAAN NEGERI BENGKULU SELATAN', '-', 'Rahasia', '2020-03-17', 'Perorangan', 'Perihal', '', '', 2),
(21, '123456', 'Kejaksaan Negeri Bengkulu Selatan', 'KEJAKSAAN NEGERI BENGKULU UTARA', '-', 'Rahasia', '2020-03-17', 'Perorangan', 'perihal', '', '', 2),
(22, '12', 'Kejaksaan Negeri Seluma', 'KEJAKSAAN NEGERI MUKO-MUKO', '-', 'Rahasia', '2020-03-04', 'Perorangan', 'e', 'lampiran', '', 6),
(23, '131197', 'KEJAKSAAN NEGERI BENGKULU SELATAN', 'KEJAKSAAN NEGERI BENGKULU UTARA', '-', 'Rahasia', '2020-03-19', 'Perorangan', 'asdas', 'dasdas', 'Umum', 2),
(24, '131197', 'KEJAKSAAN NEGERI BENGKULU', 'KEJAKSAAN NEGERI BENGKULU UTARA', '-', 'Rahasia', '2020-03-19', 'Perorangan', 'zxc', 'xzcz', 'Umum', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_terlibat`
--

CREATE TABLE `tb_terlibat` (
  `id` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `nip` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_terlibat`
--

INSERT INTO `tb_terlibat` (`id`, `id_sop`, `nip`) VALUES
(12, 15, '1111111111111111'),
(13, 20, '1111111111111111'),
(14, 20, '222222'),
(15, 20, '2222222'),
(16, 21, '1111111111111111'),
(17, 21, '222222'),
(18, 21, '2222222'),
(19, 22, '131197'),
(20, 22, '222222'),
(21, 22, '2222222'),
(39, 24, '131197'),
(40, 23, '131197');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukur`
--

CREATE TABLE `tb_ukur` (
  `id_tolakukur` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `tolak_ukur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ukur`
--

INSERT INTO `tb_ukur` (`id_tolakukur`, `id_sop`, `tolak_ukur`) VALUES
(1, 13, '13'),
(2, 14, '21'),
(3, 15, '1'),
(8, 20, 'adsa'),
(9, 21, 'tolak'),
(10, 22, 'as'),
(11, 23, 'asdas'),
(12, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wakilkorporasi`
--

CREATE TABLE `tb_wakilkorporasi` (
  `id_wakil` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `id_korporasi` int(11) NOT NULL,
  `nama_wakil` tinytext DEFAULT NULL,
  `tempat_lahirwakil` tinytext DEFAULT NULL,
  `tanggal_lahirwakil` date DEFAULT NULL,
  `jk_wakil` tinytext DEFAULT NULL,
  `kebangsaan_wakil` tinytext DEFAULT NULL,
  `alamat_wakil` tinytext DEFAULT NULL,
  `agama_wakil` tinytext DEFAULT NULL,
  `pekerjaan_wakil` tinytext DEFAULT NULL,
  `pendidikan_wakil` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wakilkorporasi`
--

INSERT INTO `tb_wakilkorporasi` (`id_wakil`, `id_sop`, `id_korporasi`, `nama_wakil`, `tempat_lahirwakil`, `tanggal_lahirwakil`, `jk_wakil`, `kebangsaan_wakil`, `alamat_wakil`, `agama_wakil`, `pekerjaan_wakil`, `pendidikan_wakil`) VALUES
(1, 13, 1, '', '', '0000-00-00', '', NULL, '', '', '', ''),
(2, 14, 2, '', '', '0000-00-00', '', NULL, '', '', '', ''),
(3, 15, 3, '16', '17', '2019-12-18', 'laki-laki', NULL, '19', 'Islam', '20', '21'),
(4, 23, 11, '', '', '0000-00-00', '', '', '', '', '', ''),
(5, 24, 12, 'czxczx', 'asdasd', '2017-03-07', 'laki-laki', 'WNI', 'asdas', 'Islam', 'asdas', 'sdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_aktv`
--
ALTER TABLE `log_aktv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_akibat`
--
ALTER TABLE `tb_akibat`
  ADD PRIMARY KEY (`id_akibat`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_barangbukti`
--
ALTER TABLE `tb_barangbukti`
  ADD PRIMARY KEY (`id_barangbukti`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_kasus`
--
ALTER TABLE `tb_kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_keadaan`
--
ALTER TABLE `tb_keadaan`
  ADD PRIMARY KEY (`id_keadaan`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_kendalikorporasi`
--
ALTER TABLE `tb_kendalikorporasi`
  ADD PRIMARY KEY (`id_kendali`),
  ADD KEY `id_sop` (`id_sop`),
  ADD KEY `id_korporasi` (`id_korporasi`);

--
-- Indexes for table `tb_korporasi`
--
ALTER TABLE `tb_korporasi`
  ADD PRIMARY KEY (`id_korporasi`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_orang`
--
ALTER TABLE `tb_orang`
  ADD PRIMARY KEY (`id_orang`);

--
-- Indexes for table `tb_pasalbukti`
--
ALTER TABLE `tb_pasalbukti`
  ADD PRIMARY KEY (`id_pasalbukti`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_pasaldakwa`
--
ALTER TABLE `tb_pasaldakwa`
  ADD PRIMARY KEY (`id_pasaldakwa`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_rentut`
--
ALTER TABLE `tb_rentut`
  ADD PRIMARY KEY (`id_rentut`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tb_sopform`
--
ALTER TABLE `tb_sopform`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `tb_terlibat`
--
ALTER TABLE `tb_terlibat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ukur`
--
ALTER TABLE `tb_ukur`
  ADD PRIMARY KEY (`id_tolakukur`);

--
-- Indexes for table `tb_wakilkorporasi`
--
ALTER TABLE `tb_wakilkorporasi`
  ADD PRIMARY KEY (`id_wakil`),
  ADD KEY `id_sop` (`id_sop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_aktv`
--
ALTER TABLE `log_aktv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `tb_akibat`
--
ALTER TABLE `tb_akibat`
  MODIFY `id_akibat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_barangbukti`
--
ALTER TABLE `tb_barangbukti`
  MODIFY `id_barangbukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kasus`
--
ALTER TABLE `tb_kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_keadaan`
--
ALTER TABLE `tb_keadaan`
  MODIFY `id_keadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tb_kendalikorporasi`
--
ALTER TABLE `tb_kendalikorporasi`
  MODIFY `id_kendali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_korporasi`
--
ALTER TABLE `tb_korporasi`
  MODIFY `id_korporasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_orang`
--
ALTER TABLE `tb_orang`
  MODIFY `id_orang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pasalbukti`
--
ALTER TABLE `tb_pasalbukti`
  MODIFY `id_pasalbukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pasaldakwa`
--
ALTER TABLE `tb_pasaldakwa`
  MODIFY `id_pasaldakwa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_rentut`
--
ALTER TABLE `tb_rentut`
  MODIFY `id_rentut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_sopform`
--
ALTER TABLE `tb_sopform`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_terlibat`
--
ALTER TABLE `tb_terlibat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_ukur`
--
ALTER TABLE `tb_ukur`
  MODIFY `id_tolakukur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_wakilkorporasi`
--
ALTER TABLE `tb_wakilkorporasi`
  MODIFY `id_wakil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_korporasi`
--
ALTER TABLE `tb_korporasi`
  ADD CONSTRAINT `tb_korporasi_ibfk_1` FOREIGN KEY (`id_sop`) REFERENCES `tb_sopform` (`id_sop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
