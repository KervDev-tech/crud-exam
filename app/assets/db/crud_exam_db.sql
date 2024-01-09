-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 06:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `song_tb`
--

CREATE TABLE `song_tb` (
  `id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_artist` varchar(255) NOT NULL,
  `s_lyrics` varchar(8000) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT NULL,
  `createdby` int(11) NOT NULL,
  `updatedby` int(11) DEFAULT NULL,
  `is_active` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song_tb`
--

INSERT INTO `song_tb` (`id`, `s_title`, `s_artist`, `s_lyrics`, `datecreated`, `dateupdated`, `createdby`, `updatedby`, `is_active`) VALUES
(1, 'test', 'test', 'test', '2024-01-09 04:32:37', '2024-01-09 06:08:07', 1, 2, 'N'),
(2, 'Ballin', 'Cash G', 'woho hoi, hehe wehei!', '2024-01-09 05:07:12', NULL, 1, NULL, 'Y'),
(3, 'Test ulit updated naman', 'Wohoi test', 'hehe', '2024-01-09 05:35:10', '2024-01-09 05:57:42', 1, 2, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song_tb`
--
ALTER TABLE `song_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song_tb`
--
ALTER TABLE `song_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
