-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 09:32 PM
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
-- Table structure for table `booking_table`
--

CREATE TABLE IF NOT EXISTS `booking_table` (
`booking_id` int(10) NOT NULL,
  `room_slno_id` int(10) NOT NULL,
  `checkin` varchar(22) NOT NULL,
  `checkout` varchar(22) NOT NULL,
  `number_of_room` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `postcode` varchar(12) NOT NULL,
  `country` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(25) NOT NULL,
  `email` varchar(32) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `additional_request` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`booking_id`, `room_slno_id`, `checkin`, `checkout`, `number_of_room`, `title`, `first_name`, `last_name`, `city`, `state`, `postcode`, `country`, `phone`, `fax`, `email`, `passport_no`, `payment_type`, `additional_request`) VALUES
(1, 1, '22-02-2015', '28-02-2015', '2', 'Mr', 'Hafiz', 'Rahman', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', '01913560357', '+012-225545', 'sumonround21@yahoo.com', '213564656987', 'card', 'please give me a nice room.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
 ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
