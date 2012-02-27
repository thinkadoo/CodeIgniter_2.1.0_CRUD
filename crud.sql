-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2012 at 02:36 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_person`
--

CREATE TABLE `tbl_person` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_person`
--

INSERT INTO `tbl_person` VALUES(2, 'name_001', 'M', '1962-01-12');
INSERT INTO `tbl_person` VALUES(3, 'name_002', 'F', '2000-01-01');
INSERT INTO `tbl_person` VALUES(4, 'name_003', 'm', '2000-02-02');
INSERT INTO `tbl_person` VALUES(5, 'name_005', 'm', '2000-04-04');
INSERT INTO `tbl_person` VALUES(6, 'name_006', 'f', '2000-05-05');
INSERT INTO `tbl_person` VALUES(7, 'name_007', 'm', '2000-06-06');
INSERT INTO `tbl_person` VALUES(8, 'name_008', 'f', '2000-07-07');
INSERT INTO `tbl_person` VALUES(9, 'name_009', 'm', '2000-08-08');
INSERT INTO `tbl_person` VALUES(10, 'name_010', 'f', '2000-09-09');
INSERT INTO `tbl_person` VALUES(11, 'name_011', 'm', '2000-10-10');
INSERT INTO `tbl_person` VALUES(12, 'name_012', 'f', '2000-11-11');
INSERT INTO `tbl_person` VALUES(13, 'name_013', 'm', '2000-12-12');
INSERT INTO `tbl_person` VALUES(14, 'name_014', 'f', '2001-01-01');
INSERT INTO `tbl_person` VALUES(15, 'name_015', 'm', '2001-02-02');
INSERT INTO `tbl_person` VALUES(16, 'name_016', 'm', '2001-03-03');
INSERT INTO `tbl_person` VALUES(17, 'name_017', 'm', '2001-04-04');
INSERT INTO `tbl_person` VALUES(18, 'name_018', 'm', '2001-05-05');
INSERT INTO `tbl_person` VALUES(19, 'name_019', 'm', '2001-06-06');
INSERT INTO `tbl_person` VALUES(20, 'name_020', 'm', '2001-07-07');
INSERT INTO `tbl_person` VALUES(21, 'name_021', 'm', '2001-08-08');
INSERT INTO `tbl_person` VALUES(22, 'name_022', 'm', '2001-09-09');
INSERT INTO `tbl_person` VALUES(23, 'name_023', 'm', '2001-10-10');
INSERT INTO `tbl_person` VALUES(24, 'name_024', 'm', '2001-11-11');
INSERT INTO `tbl_person` VALUES(25, 'name_025', 'm', '2001-12-12');
