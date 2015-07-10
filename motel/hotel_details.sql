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
-- Table structure for table `hotel_details`
--

CREATE TABLE IF NOT EXISTS `hotel_details` (
`hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zipcode` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(25) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hotel_id`, `hotel_name`, `address`, `city`, `state`, `country`, `zipcode`, `phone`, `fax`, `email`) VALUES
(36, 'Sarina Hotel', 'Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'Bangladesh', '1205', '01245789655', '65656562658', 'hafiz.ubikm@gmail.com'),
(37, 'Gulshan Hotel', 'Dhaka, Gulshan, Bangladesh', 'Dhaka', 'Dhaka', 'Bangladesh', '1212', '0198522452215', '0246545646', 'gulshan@gmail.com'),
(38, 'Dhanmondi Hotel', 'Dhanmondi, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'Bangladesh', '120', '01751245895455', '0245789965', 'dhotel@mgaoo.com'),
(40, 'CoxBazar Hotel2', 'This address is cox bazar...', 'Cox Bazar', 'Dhaka', 'Bangladesh', '1730', '35654', 'asfasfa', 'haka@gmail.com'),
(43, 'CoxBazar Hotel', 'dfasfasf', 'asfafsa', 'asfasfas', 'America', 'asfasfas', 'asfasfas', 'afasfas', 'afasfasfasfas'),
(45, 'Sarina Hotel', 'Dhaka, Bangladesh', 'Dhaka', 'Dhaka', 'Bangladesh', '1205ff', '01245789655', '65656562658', 'hafiz.ubikm@gmail.com'),
(46, 'CoxBazar Hotel', 'dfasfasf656565', 'asfafsa', 'asfasfas', 'America', 'asfasfas', 'asfasfas', 'afasfas', 'afasfasfasfas'),
(47, 'CoxBazar Hotel', 'dfasfasf', 'asfafsa', 'asfasfas', 'America', 'asfasfas', 'asfasfas0000000', 'afasfas', 'afasfasfasfas'),
(48, 'Gulshan Hotel', 'Dhaka, Gulshan, Bangladesh', 'Dhaka', 'Dhaka', 'Bangladesh', '1212', '0198522452215', '0246545646', 'gulshan@gmail.comfasfasf'),
(49, 'CoxBazar Hotelksafjlafjsa', 'dfasfasf656565', 'asfafsa', 'asfasfas', 'America', 'asfasfas', 'asfasfas', 'afasfas', 'afasfasfasfas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
 ADD PRIMARY KEY (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
