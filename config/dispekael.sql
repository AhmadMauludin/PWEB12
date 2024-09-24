-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 10:34 PM
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
-- Database: `dispekael`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nis` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nis`, `nama`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(1, 'Ahmad Mauludin, S.Kom', 'Kabid', 'Humas', '6289502918001', 'ahmadmaldin1799@gmail.com', '1350683862_WhatsApp Image 2023-08-24 at 21.05.13.jpeg'),
(3333, 'Maldines Uzumaki', 'Staf', 'Humas', '6289765432', 'nidia@gmail.com', '335-1696307224982-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `idseminar` int(5) NOT NULL,
  `nis` int(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tautan` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `pengujilap` int(8) NOT NULL,
  `pengujiapl` int(8) NOT NULL,
  `nilaiprakerin` int(3) NOT NULL,
  `nilailaporan` int(3) NOT NULL,
  `nilaiaplikasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nis` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nis`) VALUES
(1, 'ahmadmauludin', 'ahmad', 'Admin', '1111'),
(3, 'maldines', 'maldin', 'Pegawai', '2222'),
(6, 'nidia', 'nidia', 'User', '3333'),
(7, 'defa', 'defa', 'User', '1234'),
(8, 'fauzyyasser', 'fauzy', 'User', '9876');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nis` int(8) NOT NULL,
  `id` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nis`, `id`, `nama`, `tanggal_lahir`, `alamat`, `instansi`, `telp`, `stat`, `foto`) VALUES
(1234, 7, 'Deffa Sidik', '2024-09-01', 'Gundat Jaya', 'BPKAD', '6285175017991', 'Belum Aktif', 'defa.jpg'),
(3333, 6, 'Nidia Gitania Raya', '2024-09-04', 'Cina', 'BPKAD', '999999999', 'Aktif', '843-WhatsApp Image 2024-01-03 at 19.50.23 (1).jpeg'),
(9876, 8, 'Fauzy Ahmad', '2024-09-25', 'Bandung', 'BPKAD', '99887766', 'Aktif', '1021152700_pratama-arhan-320x_.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`idseminar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nis` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3334;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `idseminar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
