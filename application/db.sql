-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 02:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypkl`
--
CREATE DATABASE IF NOT EXISTS `mypkl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mypkl`;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama` text NOT NULL,
  `ttl` text NOT NULL,
  `nik` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `apt` text NOT NULL,
  `jur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sidebar_type` text NOT NULL,
  `navbar_type` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `color`, `sidebar_type`, `navbar_type`, `role`) VALUES
(1, 'info', 'bg-white', 'checked', 'admin'),
(2, 'info', 'bg-white', 'checked', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(150) NOT NULL,
  `role` varchar(6) NOT NULL,
  `id_setting` int(11) NOT NULL,
  `id_dokumen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`, `id_setting`, `id_dokumen`) VALUES
(10, 'alesan@gmail.com', '$2y$10$LHkS9QjXP4lhrjVteqw2VOVPsYKgXOoOfGUEQ6LUBbz3o5Ai2ZMhS', 'Alessandro', 'user', 2, 0),
(11, 'adolina@ptpn4.co.id', '$2y$10$wj6pLt64hnuGaoD5tDmrOOSaiOQT46TOsx.uvq/ome1TEmJ23G9HW', 'Adolina', 'user', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
