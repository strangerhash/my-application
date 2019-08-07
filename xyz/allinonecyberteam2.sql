-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2019 at 07:59 AM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allinonecyberteam2`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `ticket_count` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `order_id`, `name`, `email`, `city`, `contact`, `ticket_count`) VALUES
(1, 'ORDS53766180', 'mayur  gupta', 'guglumedia@gmail.com', 'delhi', NULL, NULL),
(2, 'ORDS30919515', 'mayur  gupta', 'guglumedia@gmail.com', 'delhi', NULL, NULL),
(3, 'ORDS46968752', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'allahabad', NULL, NULL),
(4, 'ORDS1900286', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'allahabad', NULL, NULL),
(5, 'ORDS9988266', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'allahabad', NULL, NULL),
(6, 'ORDS8535752', 'mayur  gupta', 'guglumedia@gmail.com', 'delhi', NULL, NULL),
(7, 'ORDS76356053', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'allahabad', NULL, NULL),
(8, 'ORDS20703102', 'satyendra  pandey', '7376998083', 'allahabad', NULL, NULL),
(9, 'ORDS7712392', 'mayur  gupta', '8527346252', 'delhi', NULL, NULL),
(10, 'ORDS25327191', 'ankit  Jjj', 'Shshhs', 'Nddnn', NULL, NULL),
(11, '', 'Neha  Verma', '9582522332', 'Gurgaon', NULL, NULL),
(12, '', 'Neha  Verma', '9582522332', 'Gurgaon', NULL, NULL),
(13, '', 'Neha  Verma', '9582522332', 'Gurgaon', NULL, NULL),
(14, '', 'Neha  Verma', '9582522332', 'Gurgaon', NULL, NULL),
(15, '', 'Neha  Verma', '9582522332', 'Gurgaon', NULL, NULL),
(16, '', 'asfsa  gsd', 'sdgsd', 'sdfsds', NULL, NULL),
(17, '', 'asfsa  gsd', 'sdgsd', 'sdfsds', NULL, NULL),
(18, 'ORDS352755', 'asfsa  gsd', 'sdgsd', 'sdfsds', NULL, NULL),
(19, 'ORDS10837121', 'satyendra  zxcz', '7376998083', 'allahabd', NULL, NULL),
(20, 'ORDS76464701', 'satyendra  gsd', '7376998083', 'sdfsds', NULL, NULL),
(21, 'ORDS91507206', 'mayur  gupta', '8527346252', 'delhi', NULL, NULL),
(22, 'ORDS20640359', 'mayur  gupta', '8527346252', 'delhi', NULL, NULL),
(23, 'ORDS40878137', 'satyendra  pandey', '7376998083', 'allahabd', NULL, NULL),
(24, 'ORDS46610270', 'satyendra  zczxc', '7376998083', 'allahabd', NULL, NULL),
(25, 'ORDS14894631', 'satyendra  pandey', '7376998083', 'allahabd', NULL, NULL),
(26, 'ORDS46740742', 'satyendra  gsd', '7376998083', 'sdfsds', NULL, NULL),
(27, 'ORDS80940125', 'satyendra  pandey', '7376998083', 'allahabd', NULL, NULL),
(28, 'ORDS47121188', 'satyendra  pandey', '7376998083', 'allahabd', NULL, NULL),
(29, 'ORDS42280987', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'allahabd', '7376998083', NULL),
(30, 'ORDS82247459', 'N  N', 'png@gmail.com', 'Gurgaon', '9899262332', NULL),
(31, 'ORDS88113703', 'satyendra  pandey', 'pandeysatyendra870@gmail.com', 'sdfsds', '7376998083', NULL),
(32, 'ORDS52197728', 'Ajay  Poonia', 'er.ajaypoonia@gmail.com', 'Noida', '8447944060', NULL),
(33, 'ORDS85386059', 'mayur  gupta', 'guglumedia@gmail.com', 'delhi', '8527346252', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `male` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `male`, `name`, `email`, `city`) VALUES
(1, '', 'asfsa  gsd', 'sdgsd', 'sdfsds'),
(2, '', 'abab  ababa', '9555665585', 'delhi'),
(3, '', 'Deepa  Viral', '7906616255', 'New Delhi'),
(4, '', 'asfsa  zxcz', 'zxcz', 'sdfsds'),
(5, '', 'asfsa  gsd', 'sdgsd', 'sdfsds'),
(6, '', 'asfsa  asdfs', 'asdaas', 'sdfsds'),
(7, '', 'asfsa  asdfs', '7376998083', 'sasdas'),
(8, '', 'asfsa  zczxc', '7376998083', 'sasdas'),
(9, '', 'mayur  gupta', '8527346252', 'delhi'),
(10, '', 'mayur  gupta', '8527346252', 'delhi'),
(11, '', 'satyendra  asdfs', '7376998083', 'sasdas'),
(12, '', 'mayur  gupta', '8527346252', 'delhi'),
(13, '', 'satyendra  pandey', '7376998083', 'allahabd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
