-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 09:01 AM
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
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaNV` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` char(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `TenNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Diac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `PhongBan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieudatmua`
--

CREATE TABLE `phieudatmua` (
  `MaPhieuDat` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `MaNV` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hangsx` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
