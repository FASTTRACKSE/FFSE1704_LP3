-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 05:30 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FFSE1702052`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `age` tinyint(4) NOT NULL,
  `class` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `gender` char(4) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `name`, `age`, `class`, `gender`) VALUES
(1, 'Hồ Công Lịnh', 19, 'FFSE1701', 'Nam'),
(2, 'Trần Thu Hà', 19, 'FFSE1701', 'Nữ'),
(3, 'Trần Thị Tuyết Nhung', 19, 'FFSE1701', 'Nữ'),
(4, 'Trần Nguyên Nam', 19, 'FFSE1701', 'Nam'),
(5, 'Mai Tuyết Loan', 18, 'FFSE1702', 'Nữ'),
(6, 'Trương Đại Nghĩa', 20, 'FFSE1702', 'Nam'),
(7, 'Phạm Quang Nhân', 21, 'FFSE1702', 'Nam'),
(8, 'Bùi Ngọc Quỳnh Nhi', 20, 'FFSE1703', 'Nữ'),
(9, 'Nguyễn Minh Huy', 22, 'FFSE1703', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
