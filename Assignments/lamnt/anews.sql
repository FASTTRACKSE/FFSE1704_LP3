-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 09:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anews`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuctin`
--

CREATE TABLE `danhmuctin` (
  `id_danhmuctin` int(11) NOT NULL,
  `tendanhmuctin` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuctin`
--

INSERT INTO `danhmuctin` (`id_danhmuctin`, `tendanhmuctin`) VALUES
(1, 'Toàn cảnh Nhật Bản'),
(2, 'Tin Tức Việt - Nhật'),
(3, 'Tin tức giải trí'),
(4, 'Du học Nhật Bản'),
(5, 'text'),
(6, 'Bóng đá'),
(7, 'Bóng đá'),
(8, 'Thời sự');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tentintuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `id_danhmuctin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `tentintuc`, `mota`, `hinhanh`, `chitiet`, `ngaydang`, `id_danhmuctin`) VALUES
(1, 'Thị trấn truyền thống Uchiko – Nhật Bản', 'Thị trấn truyền thống của Uchiko được bao quanh bởi vẻ đẹp tự nhiên', 'hinh1.jpg', '<p> Đây là tin tức buổi sáng 1 </p>', '2017-06-14', 1),
(2, 'Đền thiêng Sefa Utaki ở Okinawa', 'Sefa Utaki nằm ở phía đông nam của đảo Okinawa Honto', 'hinh2.jpg', 'Đây là tin tức buổi sáng 2', '2017-06-14', 1),
(3, 'Cây cầu lớn Seto Naikai', 'Người ta có thể đáp xe lửa nhanh chóng', 'hinh3.jpg', 'Đây là tin tức buổi sáng 3', '2017-06-14', 2),
(4, 'Những bảo tàng có một không hai ở Nhật Bản', 'Bảo tàng thuốc lá và muối hay bảo tàng Takoyaki chỉ là hai trong', 'hinh8.jpg', 'Đây là tin tức buổi sáng 4', '2017-06-14', 3),
(5, 'Thiếu nữ Nhật Bản xinh tươi đón lễ Thành nhân', 'Lễ thành nhân – buổi lễ dành cho thanh niên bước sang tuổi 20 (tuổi trưởng thành tại Nhật Bản) – đượ', 'hinh5.jpg', 'Đây là tin tức buổi sáng 5', '2017-06-14', 1),
(6, 'Tắm nước lạnh, ôm tảng băng lớn để cầu may', 'Nhiệt độ ngoài trời khi đó vào khoảng 6 độ C, những người đàn ông cởi bỏ y phục, chỉ mặc trên mình m', 'hinh6.jpg', 'Đây là tin tức buổi sáng 6', '2017-06-14', 1),
(7, 'Tạo khác biệt thu hút FDI Nhật Bản', 'Trong bối cảnh suy giảm kinh tế toàn cầu, ngày càng có nhiều DN Nhật Bản tìm kiếm cơ hội đầu tư tại ', 'hinh7.jpg', 'Đây là tin tức buổi sáng 7', '2017-06-14', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuctin`
--
ALTER TABLE `danhmuctin`
  ADD PRIMARY KEY (`id_danhmuctin`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `id_danhmuctin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
