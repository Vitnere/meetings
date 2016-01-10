-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 11:24 AM
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
-- Table structure for table `main_main`
--

CREATE TABLE `main_main` (
  `id` int(255) NOT NULL,
  `page` varchar(30) NOT NULL,
  `title` varchar(10000) NOT NULL,
  `text_left` varchar(10000) NOT NULL,
  `text_right` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_main`
--

INSERT INTO `main_main` (`id`, `page`, `title`, `text_left`, `text_right`) VALUES
(1, 'main', 'GO INTERNATIONAL - ICT \r\nBROKERAGE EVENT 2015', 'Get connected and take advantage of ICT networking opportunities by discovering new international partnerships to grow your business.\r\n\r\n\r\nEnterprise Europe Network in Macedonia is pleased to invite you to participate on business meetings that will take place within Go International - ICT Brokerage Event 2015 on November 13 in Skopje in Hotel Continental, Skopje.\r\n\r\n\r\nThe event is free of charge and targets companies and organizations working in the ICT sector interested in presenting and discovering new products and services, exploring new business opportunities, finding new potential clients and partners for creating new business opportunities and industry partnerships for reaching international markets.\r\n\r\n\r\nThe Go International - ICT Brokerage Event 2015 is organized by the Foundation for Management and Industrial Research, Youth Entrepreneurial Service Foundation and cooperating network partners: University of Novi Sad - Serbia, ARC Consulting – Bulgaria and Chamber of Economy - Montenegro.\r\n\r\n\r\nThe event is supported by the Ministry of Economy of the Republic of Macedonia and CEI – Central European Initiative.', 'BILATERAL TALKS\r\nPARTICIPANTS\r\nMEETINGS REQUESTED\r\nMEETINGS ACCEPTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_main`
--
ALTER TABLE `main_main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_main`
--
ALTER TABLE `main_main`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
