-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 10:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FFSE1704_MySQL_02`
--

-- --------------------------------------------------------

--
-- Table structure for table `SinhVien`
--

CREATE TABLE `sinhvien` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` tinyint(4) NOT NULL,
  `Class` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `SinhVien`
--

INSERT INTO `SinhVien` (`ID`, `Name`, `age`, `Class`, `Gender`) VALUES
(1, 'Hồ Công Lịch', 19, 'FFSE1701', 'Nam'),
(2, 'Trần Thu Hà', 19, 'FFSE1701', 'Nữ'),
(3, 'Trần Thị Tuyết Nhung', 19, 'FFSE1701', 'Nữ'),
(4, 'Trần Nguyên Nam', 19, 'FFSE1701', 'Nữ'),
(5, 'Mai Tuyết Loan', 18, 'FFSE1702', 'Nữ'),
(6, 'Trương Đại Nghĩa', 20, 'FFSE1702', 'Nam'),
(7, 'Phạm Quan Nhân', 21, 'FFSE1702', 'Nam'),
(8, 'Bùi Ngọc Quỳnh Chi', 20, 'FFSE1703', 'Nữ'),
(9, 'Nguyễn Minh Huy', 22, 'FFSE1704', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SinhVien`
--
ALTER TABLE `SinhVien`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `SinhVien`
--
ALTER TABLE `SinhVien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
