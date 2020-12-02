-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 07:18 AM
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
-- Table structure for table `cj`
--

CREATE TABLE `cj` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `mouja` varchar(255) DEFAULT NULL,
  `ze_el_no` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_owner` varchar(255) DEFAULT NULL,
  `land_quantity` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `mouja` varchar(255) DEFAULT NULL,
  `ze_el_no` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_owner` varchar(255) DEFAULT NULL,
  `land_quantity` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id`, `user_id`, `district`, `subdistrict`, `mouja`, `ze_el_no`, `khatiyan_no`, `land_owner`, `land_quantity`, `land_address`, `status`, `comment`, `hash`) VALUES
(1, 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(2, 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(3, 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(4, 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(5, 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', NULL, 'Registri Krito Patta', NULL),
(6, 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(7, 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(8, 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) UNSIGNED NOT NULL,
  `ffrom` varchar(255) DEFAULT NULL,
  `tto` varchar(255) DEFAULT '',
  `ddate` varchar(255) DEFAULT NULL,
  `status` varchar(5) DEFAULT '1',
  `comment` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `ffrom`, `tto`, `ddate`, `status`, `comment`, `khatiyan_no`, `land_address`) VALUES
(1, 'anwarhosain', 'anwarhosain', '01/09/19', '1', '', '123', 'same'),
(2, 'hmruf', 'anwarhosain', '01/09/19', '1', 'ami kinte chai. ', '123', 'same'),
(3, 'danayem', 'anwarhosain', '01/09/19', '1', '', '123', 'same');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(10) UNSIGNED NOT NULL,
  `dolil_no` varchar(255) DEFAULT NULL,
  `sell_date` varchar(255) DEFAULT NULL,
  `buyer_user_id` varchar(255) DEFAULT NULL,
  `buyer_name` varchar(255) DEFAULT NULL,
  `buyer_nid` varchar(255) DEFAULT NULL,
  `seller_user_id` varchar(255) DEFAULT NULL,
  `seller_name` varchar(255) DEFAULT NULL,
  `seller_nid` varchar(255) DEFAULT NULL,
  `witness_1` varchar(255) DEFAULT NULL,
  `witness_2` varchar(255) DEFAULT NULL,
  `witness_3` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `mouja` varchar(255) DEFAULT NULL,
  `ze_el_no` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_owner` varchar(255) DEFAULT NULL,
  `land_quantity` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rs` (`id`, `user_id`, `district`, `subdistrict`, `mouja`, `ze_el_no`, `khatiyan_no`, `land_owner`, `land_quantity`, `land_address`, `status`, `comment`, `hash`) VALUES
(1, 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(2, 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(3, 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(4, 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(5, 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', NULL, 'Registri Krito Patta', NULL),
(6, 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(7, 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(8, 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sa`
--

CREATE TABLE `sa` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `mouja` varchar(255) DEFAULT NULL,
  `ze_el_no` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_owner` varchar(255) DEFAULT NULL,
  `land_quantity` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `sa`
--

INSERT INTO `sa` (`id`, `user_id`, `district`, `subdistrict`, `mouja`, `ze_el_no`, `khatiyan_no`, `land_owner`, `land_quantity`, `land_address`, `status`, `comment`, `hash`) VALUES
(1, 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(2, 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(3, 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(4, 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', NULL, 'Registri Krito Patta', NULL),
(5, 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', NULL, 'Registri Krito Patta', NULL),
(6, 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(7, 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL),
(8, 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', NULL, 'Registri Krito Patta', NULL);



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
(1, 'anwarhosain', 'Anwar Hosain', 'Md Abul Kalam', 'Sakina Begum', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', 'Vill: Mohasraddi, P.O: Mohsenuddin, P.S: Bauphal, Dist: Patuakhali', '1995-11-25', '01963776336', '3752499453', 'anwar@gmail.com', '1'),
(2, 'jahidulislam', 'Md Jahidul Islam', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1995-11-10', '01924853923', '375249954', 'jahid@gmail.com', '2'),
(3, 'shakilakondho', 'Shakil Akondho', 'Md kamal Hosain', 'Ferdous Begum', '5, Zamil Villa, Mistir Dokan, Jurain, Kadamtoli, Dhaka', '5, Zamil Villa, Mistir Dokan, Jurain, Kadamtoli, Dhaka', '1994-03-11', '01848002511', '1592667651', 'shakil@gmail.com', '3'),
(4, 'sanjida', 'Sanjida Islam', 'Sirajul Islam', 'Nasrin Akter', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', '1995-07-03', '01948080089', '6902170627', 'sanjida@gmail.com', '4'),
(5, 'meherunshohagy', 'Meherunnesa Shohagy', 'Md Abul Kalam', 'Sakina Begum', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka', 'Vill: Mohasraddi, P.O: Mohsenuddin, P.S: Bauphal, Dist: Patuakhali', '2001-12-08', '01621195159', '3752499459', 'shohagy@gmail.com', '5'),
(6, 'mahfuzulhasan', 'Mahfuzul Hasan', 'Delowar Hosain', 'Morium Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Moutukpur, P.O: Tongibari, P.S: Munshiganj, Dist: Munshiganj', '2008-12-30', '01924853924', '357951462', 'samir@gmail.com', '6'),
(7, 'farhanaeva', 'Farhana Islam Eva', 'Md Shohidul Islam', 'Fatema Begum', '4, gazi villa, milon road, dogair Bazar, sarulia, demra, dhaka', 'same', '2006-03-23', '01621195159', '35795124863', 'eva@gmail.com', '7'),
(8, 'asmaakter', 'Asma Akter', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1990-07-19', '01924853935', '375249956', 'asma@gmail.com', '8'),
(9, 'tania', 'Tania Akter', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1985-03-25', '01924853930', '375249957', 'tania@gmail.com', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cj`
--
ALTER TABLE `cj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cj_user` (`user_id`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cs_user` (`user_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_noti_user` (`ffrom`),
  ADD KEY `fk_noti_user2` (`tto`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_record_user` (`sell_date`),
  ADD KEY `fk_record_user_1` (`buyer_user_id`),
  ADD KEY `fk_record_user_2` (`seller_user_id`),
  ADD KEY `fk_record_user_3` (`witness_1`),
  ADD KEY `fk_record_user_4` (`witness_2`),
  ADD KEY `fk_record_user_5` (`witness_3`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rs_user` (`user_id`);

--
-- Indexes for table `sa`
--
ALTER TABLE `sa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sa_user` (`user_id`);

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
-- AUTO_INCREMENT for table `cj`
--
ALTER TABLE `cj`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sa`
--
ALTER TABLE `sa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cj`
--

--
-- Constraints for table `cs`
--

--
-- Constraints for table `notification`
--

--
-- Constraints for table `record`
--

--
-- Constraints for table `rs`
--

--
-- Constraints for table `sa`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
