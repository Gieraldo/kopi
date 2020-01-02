-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 09:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id` int(10) NOT NULL,
  `id_rfid` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id`, `id_rfid`, `waktu`) VALUES
(1, 11829, '2019-12-23 13:52:34'),
(2, 11932, '2019-12-23 13:53:51'),
(3, 11932, '2019-12-25 09:31:14'),
(4, 11932, '2019-12-25 09:32:07'),
(5, 11932, '2019-12-25 09:32:36'),
(10, 11932, '2019-12-25 09:51:56'),
(11, 11932, '2019-12-25 09:53:40'),
(12, 11829, '2019-12-25 09:53:40'),
(13, 11932, '2019-12-25 09:53:45'),
(14, 11829, '2019-12-25 09:53:45'),
(15, 11932, '2019-12-25 09:54:39'),
(16, 11829, '2019-12-25 09:54:39'),
(17, 11932, '2019-12-25 09:55:31'),
(18, 11829, '2019-12-25 09:55:31'),
(19, 11932, '2019-12-26 04:10:27'),
(20, 11829, '2019-12-26 04:10:27'),
(21, 11932, '2019-12-26 04:19:00'),
(22, 11829, '2019-12-26 04:19:00'),
(29, 11932, '2019-12-26 04:27:47'),
(30, 11829, '2019-12-26 04:27:47'),
(31, 11932, '2019-12-26 04:30:23'),
(32, 11829, '2019-12-26 04:30:23'),
(33, 11932, '2019-12-26 04:30:33'),
(34, 11829, '2019-12-26 04:30:33'),
(37, 11932, '2019-12-26 06:31:17'),
(38, 11932, '2019-12-26 06:32:09'),
(39, 11829, '2019-12-26 06:32:50'),
(40, 11932, '2019-12-26 06:33:24'),
(41, 11829, '2019-12-26 06:35:44'),
(47, 11829, '2019-12-26 06:46:06'),
(48, 11829, '2019-12-26 07:04:45'),
(49, 11829, '2019-12-26 07:08:13'),
(52, 11829, '2019-12-26 08:25:54'),
(53, 11829, '2019-12-26 08:25:54'),
(54, 11829, '2019-12-26 08:25:54'),
(56, 11932, '2019-12-26 12:18:46'),
(59, 11932, '2019-12-26 13:59:52'),
(60, 11932, '2019-12-26 13:59:52'),
(61, 11932, '2019-12-26 13:59:52'),
(62, 11932, '2019-12-26 13:59:52'),
(63, 11932, '2019-12-26 13:59:53'),
(64, 11829, '2019-12-26 13:59:56'),
(65, 11829, '2019-12-26 13:59:56'),
(66, 11829, '2019-12-26 13:59:56'),
(67, 11829, '2019-12-26 13:59:56'),
(68, 11829, '2019-12-26 13:59:56'),
(69, 11932, '2019-12-26 14:01:40'),
(70, 11932, '2019-12-26 14:01:40'),
(71, 11829, '2019-12-26 14:01:44'),
(72, 11932, '2019-12-26 14:20:25'),
(73, 11932, '2019-12-26 14:20:25'),
(74, 11829, '2019-12-27 03:52:38'),
(75, 11829, '2019-12-27 03:52:38'),
(76, 11829, '2019-12-27 04:15:53'),
(77, 11829, '2019-12-27 04:49:32'),
(78, 11829, '2019-12-27 04:49:32'),
(79, 11829, '2019-12-27 04:49:32'),
(80, 11829, '2019-12-27 04:49:32'),
(81, 11829, '2019-12-27 04:49:32'),
(82, 11829, '2019-12-27 07:09:31'),
(83, 11829, '2019-12-27 07:09:31'),
(84, 11829, '2019-12-27 07:09:31'),
(85, 11829, '2019-12-27 07:09:31'),
(86, 11829, '2019-12-27 07:09:32'),
(87, 11829, '2019-12-27 07:09:32'),
(88, 11829, '2019-12-27 07:09:32'),
(89, 11829, '2019-12-27 07:09:32'),
(90, 11829, '2019-12-27 13:03:35'),
(91, 11829, '2019-12-27 13:03:35'),
(92, 11829, '2019-12-27 13:03:35'),
(93, 11829, '2019-12-27 13:03:35'),
(94, 11829, '2019-12-27 13:03:35'),
(95, 11932, '2019-12-27 13:06:57'),
(96, 11932, '2019-12-27 13:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `ngopi`
--

CREATE TABLE `ngopi` (
  `rfid` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngopi`
--

INSERT INTO `ngopi` (`rfid`, `jenis`) VALUES
(11829, 'kopi gula'),
(11932, 'kopi hitam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin123', 'dede', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rfid` (`id_rfid`);

--
-- Indexes for table `ngopi`
--
ALTER TABLE `ngopi`
  ADD PRIMARY KEY (`rfid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `ngopi`
--
ALTER TABLE `ngopi`
  MODIFY `rfid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11933;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kopi`
--
ALTER TABLE `kopi`
  ADD CONSTRAINT `kopi_ibfk_1` FOREIGN KEY (`id_rfid`) REFERENCES `ngopi` (`rfid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
