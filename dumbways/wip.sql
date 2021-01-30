-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 03:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wip`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_tb`
--

CREATE TABLE `school_tb` (
  `Id` int(11) NOT NULL,
  `NPSN` varchar(20) NOT NULL,
  `name_school` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo_school` varchar(200) NOT NULL,
  `school_level` varchar(10) NOT NULL,
  `status_school` varchar(50) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_tb`
--

INSERT INTO `school_tb` (`Id`, `NPSN`, `name_school`, `address`, `logo_school`, `school_level`, `status_school`, `user_id`) VALUES
(1, '1192031', 'Addimyati', 'jl.Kh.Wahid Hasyim', 'addimyati.jpg', 'A', 'Aktif', '19110029'),
(2, '1192031', 'Smk terpadu Ad-Dimyati', 'jl.Kh.Wahid Hasyim', 'addimyati.jpg', 'A', 'swasta', '19110029'),
(5, '706', 'kg', 'khkg', '', 'hkgk', 'kgklg', 'kgk'),
(6, '1037013', 'SMPN 24 Bandung', 'Jl.Sukamulya no.24', '24.jpg', 'A', 'NEGERI', '07131414'),
(7, '1037013', 'SMPN 24 Bandung', 'Jl.Sukamulya no.24', '24.jpg', 'A', 'NEGERI', '07131414'),
(8, '1037013', 'SMPN 24 Bandung', 'Jl.Sukamulya no.24', '24.jpg', 'A', 'NEGERI', '07131414'),
(9, '1037013', 'SMPN 24 Bandung', 'Jl.Sukamulya no.24', '24.jpg', 'A', 'NEGERI', '07131414');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@dumbways.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_tb`
--
ALTER TABLE `school_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_tb`
--
ALTER TABLE `school_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
