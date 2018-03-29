-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2018 lúc 09:04 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ffse1702028`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` tinyint(4) NOT NULL,
  `class` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `name`, `age`, `class`, `gender`) VALUES
(1, 'Hồ Công Lịch', 19, 'FFSE1701', 'Nam'),
(2, 'Trần Thu Hà', 19, 'FFSE1701', 'Nữ'),
(3, 'Trần Thị Tuyết Nhung', 19, 'FFSE1701', 'Nữ'),
(4, 'Trần Nguyên Nam', 19, 'FFSE1701', 'Nam'),
(5, 'Mai Tuyết Loan', 18, 'FFSE1702', 'Nữ'),
(6, 'Trương Đại Nghĩa', 20, 'FFSE1702', 'Nam'),
(7, 'Phạm Quan Nhân', 21, 'FFSE1702', 'Nam'),
(8, 'Bùi Ngọc Quỳnh Nhi', 20, 'FFSE1703', 'Nữ'),
(9, 'Nguyễn Minh Huy', 22, 'FFSE1704', 'Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
