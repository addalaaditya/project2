-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 05:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `adults` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `totalAmount` varchar(255) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `customername`, `location`, `adults`, `child`, `checkin`, `checkout`, `totalAmount`, `createdDtm`) VALUES
(2, 'Akshay', 'Hotel Susheel\'s Nest In (Narasayya Aagraharam) - Rs 1658.00 per day', '22', '22', '2023-03-30', '2023-03-31', '', '2023-03-28 14:59:23'),
(3, 'Akshay', 'Hotel Susheel\'s Nest In (Narasayya Aagraharam) - Rs 1658.00 per day', '12', '14', '2023-04-01', '2023-03-31', '1658', '2023-03-28 15:11:48'),
(4, 'Akshay', 'Hotel Susheel\'s Nest In (Narasayya Aagraharam) - Rs 1658.00 per day', '12', '14', '2023-03-28', '2023-03-31', '34818', '2023-03-28 15:19:18'),
(5, 'acsac', 'Ananda Inn (J P Road) - Rs 2000.00 per day', '12', '12', '2023-03-01', '2023-03-31', '360000', '2023-03-28 15:29:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
