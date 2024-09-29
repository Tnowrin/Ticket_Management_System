-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 11:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `departure_location` varchar(255) NOT NULL,
  `arrival_location` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `number_of_tickets` int(11) NOT NULL,
  `passenger` varchar(255) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `passenger_name` varchar(255) NOT NULL,
  `status` enum('pending','completed') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `departure_location`, `arrival_location`, `departure_date`, `number_of_tickets`, `passenger`, `contact_number`, `passenger_name`, `status`) VALUES
(1, 'dhaka', 'rajshahi', '2024-09-25', 1, 'toma', '01312345678', '', 'pending'),
(2, 'dhaka', 'rajshahi', '2024-09-25', 1, 'toma', '01312345678', '', 'pending'),
(3, 'dhaka', 'rajshahi', '2024-09-25', 1, '', '01312345678', 'toma', 'pending'),
(4, 'dhaka', 'rajshahi', '2024-09-25', 1, '', '01312345678', 'toma', 'pending'),
(5, 'chittagong', 'sylhet', '2024-09-18', 1, '', '01312345678', 'anika', 'pending'),
(6, 'sylhet', 'dhaka', '2024-09-27', 1, '', '01399999999', 'asif', 'pending'),
(7, 'dhaka', 'sylhet', '2024-10-04', 2, '', '01312345678', 'asif', 'pending'),
(8, 'dhaka', 'rajshahi', '2024-09-25', 1, '', '01312345678', 'toma', 'pending'),
(9, 'sylhet', 'rajshahi', '2024-09-28', 4, '', '01399999999', 'tanjil', 'pending'),
(10, 'sylhet', 'dhaka', '2024-09-27', 3, '', '01399999999', 'tanjil', 'pending'),
(11, 'dhaka', 'rajshahi', '2024-09-25', 1, '', '01312345678', 'toma', 'pending'),
(12, 'dhaka', 'sylhet', '2024-09-25', 1, '', '01312345678', 'toma', 'pending'),
(13, 'sylhet', 'Cox\'s Bazar', '2024-09-26', 1, '', '01312345678', 'tanjil', 'pending'),
(14, 'dhaka', 'rajshahi', '2024-10-04', 6, '', '01312345678', 'tanjil', 'pending'),
(15, 'dhaka', 'dhaka', '2024-09-25', 2, '', '01312345678', 'toma', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `bus_schedules`
--

CREATE TABLE `bus_schedules` (
  `id` int(11) NOT NULL,
  `departure_location` varchar(255) NOT NULL,
  `arrival_location` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `ticket_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
