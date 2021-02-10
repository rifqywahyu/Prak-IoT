-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 01:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekakhir_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `nomor` int(11) NOT NULL,
  `jarak` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`nomor`, `jarak`, `status`, `aksi`) VALUES
(1, 10, 'Aman', 'LED Putih'),
(2, 150, 'Waspada', 'LED Biru'),
(3, 250, 'Bahaya', 'Buzzer'),
(4, 215, 'Bahaya', 'Buzzer'),
(5, 300, 'Bahaya', 'Buzzer'),
(6, 15, 'Aman', 'LED Putih'),
(7, 25, 'Aman', 'LED Putih'),
(8, 25, 'Aman', 'LED Putih'),
(9, 0, 'Aman', 'LED Putih'),
(10, 274, 'Bahaya', 'Buzzer'),
(11, 275, 'Bahaya', 'Buzzer'),
(12, 274, 'Bahaya', 'Buzzer'),
(13, 274, 'Bahaya', 'Buzzer'),
(14, 275, 'Bahaya', 'Buzzer'),
(15, 10, 'Aman', 'LED Putih'),
(16, 238, 'Bahaya', 'Buzzer'),
(17, 279, 'Bahaya', 'Buzzer'),
(18, 20, 'Aman', 'LED Putih'),
(19, 2, 'Aman', 'LED Putih'),
(20, 37, 'Aman', 'LED Putih'),
(21, 19, 'Aman', 'LED Putih'),
(22, 0, 'Aman', 'LED Putih'),
(23, 26, 'Aman', 'LED Putih'),
(24, 29, 'Aman', 'LED Putih'),
(25, 62, 'Aman', 'LED Putih'),
(26, 88, 'Aman', 'LED Putih'),
(27, 124, 'Waspada', 'LED Biru'),
(28, 130, 'Waspada', 'LED Biru'),
(29, 18, 'Aman', 'LED Putih'),
(30, 20, 'Aman', 'LED Putih'),
(31, 22, 'Aman', 'LED Putih'),
(32, 38, 'Aman', 'LED Putih'),
(33, 5, 'Aman', 'LED Putih'),
(34, 274, 'Bahaya', 'Buzzer'),
(35, 12, 'Aman', 'LED Putih'),
(36, 10, 'Aman', 'LED Putih'),
(37, 0, 'Aman', 'LED Putih'),
(38, 275, 'Bahaya', 'Buzzer'),
(39, 274, 'Bahaya', 'Buzzer'),
(40, 274, 'Bahaya', 'Buzzer'),
(41, 274, 'Bahaya', 'Buzzer'),
(42, 274, 'Bahaya', 'Buzzer'),
(43, 14, 'Aman', 'LED Putih'),
(44, 19, 'Aman', 'LED Putih'),
(45, 275, 'Bahaya', 'Buzzer'),
(46, 275, 'Bahaya', 'Buzzer'),
(47, 0, 'Aman', 'LED Putih'),
(48, 0, 'Aman', 'LED Putih'),
(49, 181, 'Waspada', 'LED Biru'),
(50, 274, 'Bahaya', 'Buzzer'),
(51, 275, 'Bahaya', 'Buzzer'),
(52, 89, 'Aman', 'LED Putih'),
(53, 274, 'Bahaya', 'Buzzer'),
(54, 274, 'Bahaya', 'Buzzer'),
(55, 275, 'Bahaya', 'Buzzer'),
(56, 274, 'Bahaya', 'Buzzer'),
(57, 274, 'Bahaya', 'Buzzer'),
(58, 274, 'Bahaya', 'Buzzer'),
(59, 9, 'Aman', 'LED Putih'),
(60, 11, 'Aman', 'LED Putih'),
(61, 36, 'Aman', 'LED Putih'),
(62, 275, 'Bahaya', 'Buzzer'),
(63, 275, 'Bahaya', 'Buzzer'),
(64, 274, 'Bahaya', 'Buzzer'),
(65, 274, 'Bahaya', 'Buzzer'),
(66, 215, 'Bahaya', 'Buzzer'),
(67, 274, 'Bahaya', 'Buzzer'),
(68, 76, 'Aman', 'LED Putih'),
(69, 90, 'Aman', 'LED Putih'),
(70, 275, 'Bahaya', 'Buzzer'),
(71, 274, 'Bahaya', 'Buzzer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
