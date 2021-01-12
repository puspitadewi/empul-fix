-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empul2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `username`, `password1`) VALUES
(1, 'sri', 'dewi', 'macvermilion@gmail.com', 'tata', '$2y$10$CY0Ouh.5a0si1N6ABIW5NuUBdpqYOyDNj8xen4JcJm4r8b27pdVU2');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `bobot` int(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` int(10) NOT NULL,
  `hp` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `lokasi`, `bobot`, `tanggal`, `jenis`, `hp`) VALUES
(18, 'dalem', 8, '2021-01-08 17:00:00', 3, 3467890);

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE `fb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` int(128) NOT NULL,
  `txt` varchar(2700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb`
--

INSERT INTO `fb` (`id`, `nama`, `email`, `hp`, `txt`) VALUES
(4, 'ana', 'ana@gmail.com', 9890789, 'saya harap web ini bisa berkembang menjadi lebih baik lagi'),
(5, 'ana', 'ana@gmail.com', 9890789, 'saya harap web ini bisa berkembang menjadi lebih baik lagi');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `jenis` int(11) NOT NULL,
  `nama_barang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbarang`
--

INSERT INTO `jenisbarang` (`jenis`, `nama_barang`) VALUES
(1, 'kainsisa'),
(2, 'kertas'),
(3, 'kardus'),
(4, 'plastik'),
(5, 'kaleng'),
(6, 'pakaianbekas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` int(120) NOT NULL,
  `gender` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `email`, `password`, `alamat`, `hp`, `gender`) VALUES
(5, 'sri', 'puspita', 'puspitadewi@gmail.com', '$2y$10$V/9O/Lfc8hsn7PB.4GlwHe4Fwhh4fAdiIrtSzdrfbWDO6OnKPz05S', 'citragarden', 2147483647, 2),
(6, 'puspita', 'dewi', 'puspita2004@gmail.com', '$2y$10$z7NqsrQGOWUgXpYujb39vuWqU5ip9upXcN690jssR.KdDIpPRfbFi', 'negri olok gading', 2147483647, 2),
(7, 'ana', 'anita', 'ana@gmail.com', '$2y$10$3zHZIKlJJzuF5IG/u1NAeOtXJEFxMpfHEG4ASudhAAenwQOCMuUo2', 'dano', 9890789, 2),
(8, 'danop', 'bagus', 'danop@yahoo', '$2y$10$0uHF2S1scCj0PJ3HyANP9.q0UZ2xZT9kH2gRweG4mKyZhEaCGg/WS', 'kelapa', 987656789, 1),
(21, 'nata', 'nata', 'nata@', '$2y$10$AiQwPQ/cyAIsMV57rCDYzurn2B2wNYG6bFUCcXmpfmpWGQD1qNTdu', 'kelapa', 97644678, 1),
(22, 'bani', 'saka', 'banisak@', '$2y$10$qA8/g0PLcIBxUfel7rOUDOAmazMa1c2cBZUW1vMilgwAmFiKtoBw2', 'dalem', 2147483647, 1),
(23, 'raka', 'putra', 'raka@', '$2y$10$YDhSA6DGDpxP6FDjaXqO8eYwSV7eyrHFCuLl3nIV8pTjxrt1evXay', 'kamboja2', 234567, 1),
(24, 'papa', 'papa', 'papa', '$2y$10$8Oxr9fbaB3K5O0qXbI/7wu.kOSIo1YfmcqNhrNxx706eeJlS1OtOi', 'jkt', 2345, 1),
(26, 'rani', 'maria', 'maria@', '$2y$10$.6pPBMH7yxfuF6/vXzYL5e2uYVbWfsTlyai6YQOuyyL1Cez8UBsc2', 'kiri', 45789, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`jenis`),
  ADD KEY `hp` (`hp`);

--
-- Indexes for table `fb`
--
ALTER TABLE `fb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD PRIMARY KEY (`jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fb`
--
ALTER TABLE `fb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisbarang`
--
ALTER TABLE `jenisbarang`
  MODIFY `jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
