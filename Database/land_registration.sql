/*
Navicat MySQL Data Transfer

Source Server         : land_registration1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : land_registration

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-09-07 02:27:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cj`
-- ----------------------------
DROP TABLE IF EXISTS `cj`;
CREATE TABLE `cj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cj_user` (`user_id`),
  CONSTRAINT `fk_cj_user` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cj
-- ----------------------------

-- ----------------------------
-- Table structure for `cs`
-- ----------------------------
DROP TABLE IF EXISTS `cs`;
CREATE TABLE `cs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cs_user` (`user_id`),
  CONSTRAINT `fk_cs_user` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cs
-- ----------------------------
INSERT INTO `cs` VALUES ('1', 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('2', 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('3', 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('4', 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('5', 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('6', 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('7', 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `cs` VALUES ('8', 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);

-- ----------------------------
-- Table structure for `notification`
-- ----------------------------
DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ffrom` varchar(255) DEFAULT NULL,
  `tto` varchar(255) DEFAULT NULL,
  `ddate` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noti_user` (`ffrom`),
  KEY `fk_noti_user1` (`tto`),
  CONSTRAINT `fk_noti_user` FOREIGN KEY (`ffrom`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_noti_user1` FOREIGN KEY (`tto`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notification
-- ----------------------------

-- ----------------------------
-- Table structure for `notification1`
-- ----------------------------
DROP TABLE IF EXISTS `notification1`;
CREATE TABLE `notification1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ffrom` varchar(255) DEFAULT NULL,
  `tto` varchar(255) DEFAULT '',
  `ddate` varchar(255) DEFAULT NULL,
  `status` varchar(5) DEFAULT '1',
  `comment` varchar(255) DEFAULT NULL,
  `khatiyan_no` varchar(255) DEFAULT NULL,
  `land_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notification1
-- ----------------------------
INSERT INTO `notification1` VALUES ('1', 'anwarhosain', 'anwarhosain', '01/09/19', '1', '', '123', 'same');
INSERT INTO `notification1` VALUES ('2', 'hmruf', 'anwarhosain', '01/09/19', '1', 'ami kinte chai. ', '123', 'same');
INSERT INTO `notification1` VALUES ('3', 'danayem', 'anwarhosain', '01/09/19', '1', '', '123', 'same');

-- ----------------------------
-- Table structure for `record`
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_record_user` (`sell_date`),
  KEY `fk_record_user_1` (`buyer_user_id`),
  KEY `fk_record_user_2` (`seller_user_id`),
  KEY `fk_record_user_3` (`witness_1`),
  KEY `fk_record_user_4` (`witness_2`),
  KEY `fk_record_user_5` (`witness_3`),
  CONSTRAINT `fk_record_user1` FOREIGN KEY (`buyer_user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_record_user2` FOREIGN KEY (`seller_user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_record_user3` FOREIGN KEY (`witness_1`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_record_user4` FOREIGN KEY (`witness_2`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_record_user5` FOREIGN KEY (`witness_3`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of record
-- ----------------------------

-- ----------------------------
-- Table structure for `rs`
-- ----------------------------
DROP TABLE IF EXISTS `rs`;
CREATE TABLE `rs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rs_user` (`user_id`),
  CONSTRAINT `fk_rs_user` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rs
-- ----------------------------
INSERT INTO `rs` VALUES ('1', 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('2', 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('3', 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('4', 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('5', 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('6', 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('7', 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `rs` VALUES ('8', 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);

-- ----------------------------
-- Table structure for `sa`
-- ----------------------------
DROP TABLE IF EXISTS `sa`;
CREATE TABLE `sa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sa_user` (`user_id`),
  CONSTRAINT `fk_sa_user` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sa
-- ----------------------------
INSERT INTO `sa` VALUES ('1', 'anwarhosain', 'Dhaka', 'Dhamrai', 'Demra', '123', '123', 'Anwar Hosain', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('2', 'jahidulislam', 'Dhaka', 'Dhamrai', 'Demra', '124', '124', 'Jahidul Islam', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('3', 'farhanaeva', 'Dhaka', 'Dhamrai', 'Demra', '125', '125', 'Farhana Eva', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('4', 'shakilakondho', 'Dhaka', 'Dhamrai', 'Demra', '126', '126', 'Shakil Akondho', '10', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('5', 'sanjida', 'Dhaka', 'Dhamrai', 'Demra', '127', '127', 'Sanjida Islam', '10', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('6', 'mahfuzulhasan', 'Dhaka', 'Dhamrai', 'Demra', '128', '128', 'Mahfuzul Hosain', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('7', 'tania', 'Dhaka', 'Dhamrai', 'Demra', '129', '129', 'Tania Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);
INSERT INTO `sa` VALUES ('8', 'asmaakter', 'Dhaka', 'Dhamrai', 'Demra', '130', '130', 'Asma Akter', '10', '795 Dhania, Kadamtoli, Dhaka - 1236', null, 'Registri Krito Patta', null);

-- ----------------------------
-- Table structure for `user_information`
-- ----------------------------
DROP TABLE IF EXISTS `user_information`;
CREATE TABLE `user_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`nationalID`,`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_information
-- ----------------------------
INSERT INTO `user_information` VALUES ('1', 'anwarhosain', 'Anwar Hosain', 'Md Abul Kalam', 'Sakina Begum', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka-1261', 'Vill: Mohasraddi, P.O: Mohsenuddin, P.S: Bauphal, Dist: Patuakhali', '1995-11-25', '01963776336', '3752499453', 'anwar@gmail.com', '1');
INSERT INTO `user_information` VALUES ('2', 'jahidulislam', 'Md Jahidul Islam', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1995-11-10', '01924853923', '375249954', 'jahid@gmail.com', '2');
INSERT INTO `user_information` VALUES ('3', 'shakilakondho', 'Shakil Akondho', 'Md kamal Hosain', 'Ferdous Begum', '5, Zamil Villa, Mistir Dokan, Jurain, Kadamtoli, Dhaka', '5, Zamil Villa, Mistir Dokan, Jurain, Kadamtoli, Dhaka', '1994-03-11', '01848002511', '1592667651', 'shakil@gmail.com', '3');
INSERT INTO `user_information` VALUES ('4', 'sanjida', 'Sanjida Islam', 'Sirajul Islam', 'Nasrin Akter', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', '65/ka Bagdasa Lane, Noyabazar, Dhaka-1100', '1995-07-03', '01948080089', '6902170627', 'sanjida@gmail.com', '4');
INSERT INTO `user_information` VALUES ('5', 'meherunshohagy', 'Meherunnesa Shohagy', 'Md Abul Kalam', 'Sakina Begum', '4, Gazi Villa, Milon Road, Dogair Bazar, Sarulia, Demra, Dhaka', 'Vill: Mohasraddi, P.O: Mohsenuddin, P.S: Bauphal, Dist: Patuakhali', '2001-12-08', '01621195159', '3752499459', 'shohagy@gmail.com', '5');
INSERT INTO `user_information` VALUES ('6', 'mahfuzulhasan', 'Mahfuzul Hasan', 'Delowar Hosain', 'Morium Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Moutukpur, P.O: Tongibari, P.S: Munshiganj, Dist: Munshiganj', '2008-12-30', '01924853924', '357951462', 'samir@gmail.com', '6');
INSERT INTO `user_information` VALUES ('7', 'farhanaeva', 'Farhana Islam Eva', 'Md Shohidul Islam', 'Fatema Begum', '4, gazi villa, milon road, dogair Bazar, sarulia, demra, dhaka', 'same', '2006-03-23', '01621195159', '35795124863', 'eva@gmail.com', '7');
INSERT INTO `user_information` VALUES ('8', 'asmaakter', 'Asma Akter', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1990-07-19', '01924853935', '375249956', 'asma@gmail.com', '8');
INSERT INTO `user_information` VALUES ('9', 'tania', 'Tania Akter', 'Md Rafiqul Islam', 'Shima Begum', '795 Dhania, Kadamtoli, Dhaka - 1236', 'Vill: Radhanagar, P.O: Charbaktabaly, P.S: Narayanganj Sadar, Dist: Narayanganj', '1985-03-25', '01924853930', '375249957', 'tania@gmail.com', '9');
