-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 04:55 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetings`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Nemanja', 'Vitnere', 'nemanjakolar@gmail.com', 'Vitnere', '897a7e220e7efa507ef74d6330e371b4', '2016-03-27 09:09:10'),
(2, 'Rypere', 'Strigoi', 'nemanjavitnere@gmail.com', 'root', 'f359a06712e6e64f7af28a493673a138', '2016-03-27 10:28:07'),
(3, 'Test', 'test2', 'nemanjakolar@gmail.com', 'admin', '200ceb26807d6bf99fd6f4f0d1ca54d4', '2016-03-28 19:41:26'),
(4, 'R2D2', 'droid', 'nemanjavitnere@gmail.com', 'R2D2', 'e10adc3949ba59abbe56e057f20f883e', '2016-04-19 10:24:23'),
(5, 'Sookie', 'Northman', 'anitaeric@yahoo.com', 'sookie', '80401a8df2c947ad536cd955fae56ba5', '2016-04-19 10:29:00'),
(6, 'Nemanja', 'Vitnere', 'nemanjavitnere@gmail.com', 'Nesto', 'fc59cb62a11b843c24b5257af915bcd9', '2016-04-29 14:25:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
