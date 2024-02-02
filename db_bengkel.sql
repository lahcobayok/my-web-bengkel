-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 12:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_karyawan`
--

CREATE TABLE `daftar_karyawan` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_karyawan`
--

INSERT INTO `daftar_karyawan` (`id`, `username`, `password`, `jabatan`) VALUES
(3, 'fuadramadon', 'fuad123', 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelanggan`
--

CREATE TABLE `daftar_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `merekmotor` varchar(100) NOT NULL,
  `jenismotor` varchar(100) NOT NULL,
  `jenisservice` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `keluhan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_pelanggan`
--

INSERT INTO `daftar_pelanggan` (`id`, `nama`, `nohp`, `merekmotor`, `jenismotor`, `jenisservice`, `alamat`, `keluhan`) VALUES
(1, 'hagas', '08182', 'bavsvs', 'hwgsvs', 'Service Ringan', 'bsvwgwud', 'jahwvsg');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panel_1`
--

CREATE TABLE `panel_1` (
  `id` int(11) NOT NULL,
  `panel1` varchar(100) NOT NULL,
  `text1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_1`
--

INSERT INTO `panel_1` (`id`, `panel1`, `text1`) VALUES
(1, 'panel 1', 'text 1');

-- --------------------------------------------------------

--
-- Table structure for table `panel_2`
--

CREATE TABLE `panel_2` (
  `id` int(11) NOT NULL,
  `panel2` varchar(100) NOT NULL,
  `text2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_2`
--

INSERT INTO `panel_2` (`id`, `panel2`, `text2`) VALUES
(1, 'panel 2', 'text 2');

-- --------------------------------------------------------

--
-- Table structure for table `panel_3`
--

CREATE TABLE `panel_3` (
  `id` int(11) NOT NULL,
  `panel3` varchar(100) NOT NULL,
  `text3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_3`
--

INSERT INTO `panel_3` (`id`, `panel3`, `text3`) VALUES
(1, 'panel 3', 'panel 3');

-- --------------------------------------------------------

--
-- Table structure for table `panel_4`
--

CREATE TABLE `panel_4` (
  `id` int(11) NOT NULL,
  `panel4` varchar(100) NOT NULL,
  `text4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_4`
--

INSERT INTO `panel_4` (`id`, `panel4`, `text4`) VALUES
(1, 'panel 4', 'panel 4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `jabatan`) VALUES
(1, 'admin', 'admin12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_karyawan`
--
ALTER TABLE `daftar_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_1`
--
ALTER TABLE `panel_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_2`
--
ALTER TABLE `panel_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_3`
--
ALTER TABLE `panel_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_4`
--
ALTER TABLE `panel_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_karyawan`
--
ALTER TABLE `daftar_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panel_1`
--
ALTER TABLE `panel_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panel_2`
--
ALTER TABLE `panel_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panel_3`
--
ALTER TABLE `panel_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panel_4`
--
ALTER TABLE `panel_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
