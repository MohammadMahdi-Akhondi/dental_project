-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 12:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `dentist`
--

CREATE TABLE `dentist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `family` varchar(70) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_persian_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `dentist`
--

INSERT INTO `dentist` (`id`, `name`, `family`, `gender`, `experience`, `phone`) VALUES
(1, 'شاهین', 'رفیعی', 'm', 5, '۰۹۱۲۳۴۵۶۷۸۹'),
(2, 'محمد', 'ملکوتی', 'm', 8, '۰۹۴۵۶۱۲۷۸۹۰');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `family` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `national_code` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `family`, `national_code`, `phone`, `password`) VALUES
(1, 'محمد مهدی', 'آخوندی', '0123456789', '09012345678', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `turn`
--

CREATE TABLE `turn` (
  `id` int(11) NOT NULL,
  `dentist_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `turn_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `turn`
--

INSERT INTO `turn` (`id`, `dentist_id`, `patient_id`, `turn_id`) VALUES
(1, 2, 14, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dentist`
--
ALTER TABLE `dentist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `national_code` (`national_code`);

--
-- Indexes for table `turn`
--
ALTER TABLE `turn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dentist`
--
ALTER TABLE `dentist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `turn`
--
ALTER TABLE `turn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
