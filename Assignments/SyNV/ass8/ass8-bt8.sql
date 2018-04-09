-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2018 lúc 11:44 AM
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
-- Cấu trúc bảng cho bảng `lms_users`
--

CREATE TABLE `lms_users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lms_users`
--

INSERT INTO `lms_users` (`user_id`, `user_name`, `user_fullname`, `user_email`, `user_password`) VALUES
(1, 'thanhcl', 'Cao Lê Thanh', 'thanhcl@fasttrack.edu.vn ', '12345'),
(2, 'ffse1702001', 'Nguyễn Văn Nam', 'ffse1702002@st.fasttrack.edu.vn', 'abc123'),
(3, 'ffse1702002', 'FFSE 002', 'ffse1702002@st.fasttrack.edu.vn', '123abc'),
(4, 'admin', 'Administrator', 'admin@gmail.com', '654321'),
(5, 'author', 'Author', 'author@gmail.com', 'abced12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lms_users`
--
ALTER TABLE `lms_users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
