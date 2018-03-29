-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 06:07 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffse1703012`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` char(10) CHARACTER SET latin1 NOT NULL,
  `MaKH` char(15) CHARACTER SET latin1 NOT NULL,
  `MaSP` char(10) CHARACTER SET latin1 NOT NULL,
  `MaNV` char(10) CHARACTER SET latin1 NOT NULL,
  `NgayLap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` char(15) CHARACTER SET latin1 NOT NULL,
  `TenKH` varchar(50) CHARACTER SET latin1 NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` char(4) CHARACTER SET latin1 NOT NULL,
  `SoDT` char(12) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNV` char(15) CHARACTER SET latin1 NOT NULL,
  `TenNV` varchar(50) CHARACTER SET latin1 NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` char(4) CHARACTER SET latin1 NOT NULL,
  `SoDT` char(12) CHARACTER SET latin1 NOT NULL,
  `PhongBan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ChucVu` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieudatmua`
--

CREATE TABLE IF NOT EXISTS `phieudatmua` (
  `MaPhieuDat` char(15) CHARACTER SET latin1 NOT NULL,
  `MaKH` char(15) CHARACTER SET latin1 NOT NULL,
  `MaNV` char(10) CHARACTER SET latin1 NOT NULL,
  `NgayLap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` char(10) CHARACTER SET latin1 NOT NULL,
  `TenSP` char(50) CHARACTER SET latin1 NOT NULL,
  `HangSx` varchar(50) CHARACTER SET latin1 NOT NULL,
  `MoTa` varchar(30) CHARACTER SET latin1 NOT NULL,
  `DonGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
