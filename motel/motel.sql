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

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE IF NOT EXISTS `capacity` (
`capacity_id` int(11) NOT NULL,
  `capacity_title` varchar(100) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`capacity_id`, `capacity_title`, `quantity`) VALUES
(19, 'Single', '1'),
(20, 'Double', '2'),
(21, 'Twin', '3'),
(22, 'Deluxe King', '5'),
(23, 'Super Deluxe', '6'),
(24, 'Premium King', '3'),
(25, 'Crown Suite', '12'),
(26, 'Imperial Suite', '11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `displayroom`
--
CREATE TABLE IF NOT EXISTS `displayroom` (
`room_no` int(11)
,`number_of_room` varchar(10)
,`room_type_title` varchar(100)
,`image` varchar(25)
,`capacity_title` varchar(100)
,`quantity` varchar(10)
);
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

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`room_no` int(11) NOT NULL,
  `number_of_room` varchar(10) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `capacity_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `number_of_room`, `room_type_id`, `capacity_id`) VALUES
(5, '2001', 10, 19),
(7, '2002', 11, 20),
(8, '2003', 12, 21),
(9, '2004', 12, 20),
(10, '2005', 14, 19),
(11, '2006', 13, 20),
(12, '2007', 17, 19),
(13, '2008', 28, 19),
(14, '2009', 28, 20),
(15, '2010', 21, 21),
(16, '2011', 11, 21);

-- --------------------------------------------------------

--
-- Table structure for table `room_price_manager`
--

CREATE TABLE IF NOT EXISTS `room_price_manager` (
`price_slno` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `end_date` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `room_price_manager`
--

INSERT INTO `room_price_manager` (`price_slno`, `RoomID`, `start_date`, `end_date`) VALUES
(1, 0, '12-02-2015', '13-02-2015');

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

-- --------------------------------------------------------

--
-- Structure for view `displayroom`
--
DROP TABLE IF EXISTS `displayroom`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `displayroom` AS select `room`.`room_no` AS `room_no`,`room`.`number_of_room` AS `number_of_room`,`room_type`.`room_type_title` AS `room_type_title`,`room_type`.`image` AS `image`,`capacity`.`capacity_title` AS `capacity_title`,`capacity`.`quantity` AS `quantity` from ((`room_type` join `room` on((`room`.`room_type_id` = `room_type`.`room_type_id`))) join `capacity` on((`room`.`capacity_id` = `capacity`.`capacity_id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
 ADD PRIMARY KEY (`capacity_id`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
 ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `price_details`
--
ALTER TABLE `price_details`
 ADD PRIMARY KEY (`pricedetails_slno`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `room_price_manager`
--
ALTER TABLE `room_price_manager`
 ADD PRIMARY KEY (`price_slno`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
 ADD PRIMARY KEY (`room_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
MODIFY `capacity_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `price_details`
--
ALTER TABLE `price_details`
MODIFY `pricedetails_slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `room_price_manager`
--
ALTER TABLE `room_price_manager`
MODIFY `price_slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
