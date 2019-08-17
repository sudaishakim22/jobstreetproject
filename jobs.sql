-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2019 at 06:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsstreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `josName` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobDescription` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobsSalary` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobsCity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `josName`, `jobDescription`, `jobsSalary`, `jobsCity`, `companyName`, `created_at`, `updated_at`) VALUES
(1, 'Programmer', 'perkerjaan yang  harus sangat menggunakan ketelitian yang hakiki', '1000000', 'Jakarta', 'PT. Lesmana tech', NULL, NULL),
(2, 'Data Analysis', 'merupakan pekerjaan yang menganalisa data untuk kepentingan perusahaan ', '1200000', 'Bogor', 'PT. Data Bersama', '2019-08-13 17:00:00', '2019-08-13 17:00:00'),
(3, 'Designer', 'perkerjan yang membutuhkan kreativitas tanpa batas', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL),
(4, 'Designer', 'badhabskbgjsagbkbskags', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL),
(5, 'Designer', 'badhabskbgjsagbkbskags', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL),
(6, 'Designer', 'badhabskbgjsagbkbskags', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL),
(7, 'Designer', 'badhabskbgjsagbkbskags', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL),
(8, 'Designer', 'badhabskbgjsagbkbskags', '1000000', 'Bandung', 'PT. Kencana', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
