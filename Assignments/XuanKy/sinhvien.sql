-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 07:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffse1701005`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`Id`, `Name`, `Age`, `Class`, `Gender`) VALUES
(1, 'Hồ Công Lịnh', 19, 'FFSE1701', 'Nam'),
(2, 'Trần Thu Hà', 19, 'FFSE1701', 'Nữ'),
(3, 'Trầ Thị Tuyết Nhung', 19, 'FFSE1701', 'Nữ'),
(4, 'Trần Nguyên Nam', 19, 'FFSE1701', 'Nam'),
(5, 'Mai Tuyết Loan', 18, 'FFSE1702', 'Nam'),
(6, 'Trương Đại Nghĩa', 20, 'FFSE1702', 'Nam'),
(7, 'Phạm Quang Nhân', 21, 'FFSE1702', 'Nam'),
(8, 'Bùi Ngọc Quỳnh Nhi', 20, 'FFSE1703', 'Nữ'),
(9, 'Nguyên Minh Huy', 22, 'FFSE1704', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
