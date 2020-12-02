-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 06:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fathersname` varchar(255) DEFAULT NULL,
  `mothersname` varchar(255) DEFAULT NULL,
  `presentAddress` varchar(255) DEFAULT NULL,
  `permanentAddress` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `nationalID` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `user_id`, `name`, `fathersname`, `mothersname`, `presentAddress`, `permanentAddress`, `dateofbirth`, `mobileNumber`, `nationalID`, `email`, `password`) VALUES
(1, 'anwarhosain', 'Anwar Hosain', 'Md Abul Kalam', 'Sakina Begum', '4, gazi villa, milon road, dogair Bazar, sarulia, demra, dhaka', 'same', '2016-12-30', '01963776336', '019637769336', 'admin@admin.com', '1'),
(2, 'hmruf', 'Hosain Maruf', 'my father', 'My Mother', 'my address', 'my address', '1996-12-31', '0198765432', '357951268', 'h@gmail.com', '3'),
(3, 'asd fadsf ', 'asdf', 'admin@admin.com', 'asdf', 'asdf', 'asdf', '2019-09-07', 'asdf', '6546', 'a@gmail.com', 'adsf'),
(4, 'danayem', 'Nayem Hosain', 'Father', 'Mother', 'csl', 'csl', '1990-07-01', '01987654321', '987654321', 'da@gmail.com', '12345'),
(6, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00', '654654654', '65464646', 'a@gmail.com', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`,`user_id`,`nationalID`,`email`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
