-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 11:10 AM
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
-- Database: `sinhvd_ffse1704010`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` tinyint(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `masp` int(15) NOT NULL,
  `manv` int(10) NOT NULL,
  `ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nhanhvien`
--

CREATE TABLE `nhanhvien` (
  `maNV` tinyint(15) NOT NULL,
  `tenNV` varchar(50) NOT NULL,
  `diachi` tinyint(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` bit(4) NOT NULL,
  `soDT` tinyint(12) NOT NULL,
  `phongban` int(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phieudatmua`
--

CREATE TABLE `phieudatmua` (
  `MaPhieuDat` tinyint(15) NOT NULL,
  `maKH` tinyint(15) NOT NULL,
  `maNV` int(10) NOT NULL,
  `ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` tinyint(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hangxs` int(50) NOT NULL,
  `mota` varchar(30) NOT NULL,
  `dongia` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvd`
--

CREATE TABLE `sinhvd` (
  `Makh` tinyint(15) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` bit(4) NOT NULL,
  `sdt` tinyint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`);

--
-- Indexes for table `nhanhvien`
--
ALTER TABLE `nhanhvien`
  ADD PRIMARY KEY (`maNV`);

--
-- Indexes for table `phieudatmua`
--
ALTER TABLE `phieudatmua`
  ADD PRIMARY KEY (`MaPhieuDat`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `sinhvd`
--
ALTER TABLE `sinhvd`
  ADD PRIMARY KEY (`Makh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` tinyint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanhvien`
--
ALTER TABLE `nhanhvien`
  MODIFY `maNV` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieudatmua`
--
ALTER TABLE `phieudatmua`
  MODIFY `MaPhieuDat` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` tinyint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sinhvd`
--
ALTER TABLE `sinhvd`
  MODIFY `Makh` tinyint(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
