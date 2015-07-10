-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 09:33 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motel`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
`room_type_id` int(11) NOT NULL,
  `room_type_title` varchar(100) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_title`, `image`) VALUES
(10, 'Deluxe King', 'egr-1.jpg'),
(11, 'Super Deluxe', 'egr-2.jpg'),
(12, 'Premium King', 'egr-3.jpg'),
(13, 'Premium Twin', 'egr-4.jpg'),
(14, 'Crown Suite', 'egr-5.jpg'),
(15, 'Imperial Suite', 'egr-6.jpg'),
(16, 'Presidential Suite', 'egr-7.jpg'),
(17, 'Royal Suite', 'egr-8.jpg'),
(18, 'Premier Suite', 'ps-1.jpg'),
(19, 'Honeymoon (Sea Side)', 'ps-2.jpg'),
(20, 'Honeymoon (Hill Side)', 'ps-3.jpg'),
(21, 'Executive Suite(Sea Side)', 'ps-4.jpg'),
(22, 'Executive Suite(Hill Side)', 'ps-5.jpg'),
(23, 'Cox Deluxe (Sea Side)', 'ps-6.jpg'),
(24, 'Cox Deluxe (Hill Side)', 'ps-7.jpg'),
(25, 'Cox Deluxe (Twin Hill Side)', 'ps-8.jpg'),
(26, 'Cox Deluxe (Hill Side) Triple Bed', 'egr-11.jpg'),
(27, 'Cox Deluxe (Hill Side) Four Bed', 'egr-21.jpg'),
(28, 'Standard', 'egr-71.jpg'),
(29, 'Standard Twin', 'ps-41.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
 ADD PRIMARY KEY (`room_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
