-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2023 at 05:06 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20187026_vehiclerent`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `email`, `category`, `pass`, `datetime`) VALUES
(1, 'sankalp car rental', 'marinefive1@gmail.com', 'agency', '$2y$10$zkdytFIt5AH0fS.aHEY11eUidIF2umuseUXwZkgDuypTUNIfyJX9W', '2023-01-22 16:44:35'),
(2, 'Vivek Kumar Saurabh', 'vk@gmail.com', 'agency', '$2y$10$39Wz3i3Nxym67Z1Zeq9ANOzjbbeFV3h43M8ejfnGdXADnWoG0U99m', '2023-01-22 19:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_car`
--

CREATE TABLE `order_car` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `email_owner` varchar(255) NOT NULL,
  `res` int(255) NOT NULL,
  `current_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_car`
--

INSERT INTO `order_car` (`id`, `c_name`, `c_email`, `days`, `date`, `car_model`, `car_number`, `price`, `email_owner`, `res`, `current_date_time`) VALUES
(2, 'Vicky Kumar', 'vicky@gmail.com', '2', '2023-01-25', 'Alto 800', 'HR 26DQ 5551', '1600', 'marinefive1@gmail.com', 1, '2023-01-22 20:01:41'),
(3, 'Sankalp Singh', 'sankalp.singh117@gmail.com', '1', '2023-01-28', 'Mercedes S Class', 'UP 26DQ 5590', '2000', 'marinefive1@gmail.com', 0, '2023-01-22 20:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `category`, `pass`, `datetime`) VALUES
(1, 'Sankalp Singh', 'marinefive1@gmail.com', 'individual', '$2y$10$IrVQ1AhaI9FrvOUQSdJ0reoRnu9W58axoKm5IBs2V/Atq3q0Vkuhy', '2023-01-22 16:56:46'),
(2, 'Sankalp Singh', 'sankalp.singh117@gmail.com', 'individual', '$2y$10$omr5yvh7tHrHqxUZqIcSCOtq7PD5KshfteZJJ.rMHcgie/BvqkQ3q', '2023-01-22 16:58:14'),
(3, 'Vicky Kumar', 'vicky@gmail.com', 'individual', '$2y$10$JTdLaW6wF5BjGWcHh0ii.OE3Tb0a8hEWxziKK4X5pUsahLlcyyRDy', '2023-01-22 19:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `vnumber` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `model`, `vnumber`, `seat`, `rent`, `email`) VALUES
(5, 'Toyota Fortuner', 'HR 26DQ 5555 ', '7', '2000', 'vk@gmail.com'),
(6, 'Alto 800', 'HR 26DQ 5551', '5', '800', 'marinefive1@gmail.com'),
(7, 'Mercedes S Class', 'UP 26DQ 5590', '5', '2000', 'marinefive1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_car`
--
ALTER TABLE `order_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_car`
--
ALTER TABLE `order_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
