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
-- Table structure for table `price_details`
--

CREATE TABLE IF NOT EXISTS `price_details` (
`pricedetails_slno` int(11) NOT NULL,
  `price_slno` int(11) NOT NULL,
  `sunday` varchar(12) NOT NULL,
  `monday` varchar(12) NOT NULL,
  `tuesday` varchar(12) NOT NULL,
  `wednesday` varchar(12) NOT NULL,
  `thursday` varchar(12) NOT NULL,
  `friday` varchar(12) NOT NULL,
  `saturday` varchar(12) NOT NULL,
  `hourly_rate` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `price_details`
--

INSERT INTO `price_details` (`pricedetails_slno`, `price_slno`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `hourly_rate`) VALUES
(1, 1, '1', '1', '1', '1', '1', '1', '1', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price_details`
--
ALTER TABLE `price_details`
 ADD PRIMARY KEY (`pricedetails_slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price_details`
--
ALTER TABLE `price_details`
MODIFY `pricedetails_slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
