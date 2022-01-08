-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 02:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin_blood_bank', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('aashna', 'aa@gmail.com', 'thisis cool.\r\n'),
('nishtha', 'nishtha@gmail.com', 'helping hand'),
('nishtha', 'nishtha@gmail.com', 'helping hand'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('doctor', 'hello@gmail.com', 'hey '),
('doctor', 'nishtha@gmail.com', 'asc'),
('jkx', 'hello@gmail.com', 'saddsf'),
('doctor', 'aashnaaneja02@gmail.com', 'sa'),
('jkx', 'nishtha@gmail.com', 'wsad');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `search` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `username`, `email`, `age`, `gender`, `search`) VALUES
(2, 'admin', 'aashnaaneja02@gmail.com', 20, 'Male', 'A+'),
(3, 'nishtha', 'aa@gmail.com', 43, 'Female', 'B-'),
(4, 'raj', 'raj@gmail.com', 20, 'Male', 'B-'),
(5, 'admin', 'admin@gmail.com', 20, 'Female', '0'),
(6, 'new', 'new@gmail.com', 20, 'Female', '0');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `search` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `email`, `age`, `gender`, `search`) VALUES
(4, 'anu', 'anu@gmail.com', 43, 'Female', 'O+'),
(5, 'aashii_aneja29', 'hello@gmail.com', 50, 'Male', 'AB-'),
(6, 'hey', '20mca1021@cuchd.in', 23, 'Female', 'B+'),
(7, 'anio', 'hello3@gmail.com', 50, 'Male', 'AB-'),
(8, 'anio', 'helloaq3@gmail.com', 50, 'Male', 'AB-'),
(9, 'anushka', 'anushka@gmail.com', 50, 'Female', 'AB-'),
(10, 'ashika', 'ashika@gmail.com', 11, 'Male', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'nishtha', '$2y$10$F4QwMgnqiGZ6g33vk8weceblE9IH8YtKYmeyqQcTTOfYCdsQf2BT2', '2021-10-12 07:59:00'),
(2, 'ash', '$2y$10$4rM.lkTtZkhwace/vMgzouZ7jF1uACxHTTXmwKtv54PnwGBPJ7STW', '2021-10-31 17:54:15'),
(3, 'raghav', '$2y$10$nw2ZG4vKn3Vzg2s31Pv3SO2XdjYBvVxF30Lf8I2ePlxcwQRrQhyMu', '2021-11-07 10:02:43'),
(4, 'anu', '$2y$10$LUMXkMf3eQRrnoXSlC/zAOds8Cd0J0BB8HJHVh911wmRw6nRH83Y.', '2021-11-07 16:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
