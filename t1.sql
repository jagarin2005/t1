-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 10:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdate`
--

CREATE TABLE `bdate` (
  `ide` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `borrow_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bdate`
--

INSERT INTO `bdate` (`ide`, `id`, `borrow_date`, `return_date`) VALUES
('t_01', '00005', '2017-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idc` varchar(10) NOT NULL COMMENT 'รหัสหมวดวิชา',
  `namec` varchar(30) NOT NULL COMMENT 'ชื่ิอหมวดวิชา'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idc`, `namec`) VALUES
('tr_001', 'Analytical skill'),
('tr_002', 'Basic SSS'),
('tr_003', 'Budget Cont.'),
('tr_004', 'Coaching'),
('tr_005', 'Leadership'),
('tr_006', 'Maizouskin');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `manu` varchar(255) NOT NULL,
  `stat` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `model`, `number`, `manu`, `stat`) VALUES
('t_01', 'High Impedance Contacting', '820', 'PCAL 40045', 'Trek', 1),
('t_02', 'Electrostatic Measuring Instrument', 'Statiron DX', '66109A', 'Shishido Electrostatic', 1),
('t_03', 'Temp & Humipity Meter', 'SK-110 TRHII TYPE 1', '113303', 'SATO', 1),
('t_04', 'Surface Resistance Meter', 'TREK152-1', 'PCAL 31599', 'Trek', 1),
('t_05', 'Electrostatic Fieldmeter', '775', '7081', 'ION', 1),
('t_06', 'EMI Locator', 'ES-300V', 'PCAL31507', 'NU', 1),
('t_07', 'Relative Humiodity Temperature Resistance', '800', 'PCAL 31496', 'ACL staticide', 1);

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE `learning` (
  `id` varchar(15) NOT NULL COMMENT 'รหัสพนักงาน',
  `idc` varchar(10) NOT NULL COMMENT 'รหัสวิชา',
  `date` date DEFAULT NULL COMMENT 'วันที่เรียน'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `learning`
--

INSERT INTO `learning` (`id`, `idc`, `date`) VALUES
('00002', 'tr_005', '2017-08-25'),
('00005', 'tr_006', NULL),
('00005', 'tr_005', NULL),
('00005', 'tr_004', NULL),
('00005', 'tr_003', NULL),
('00005', 'tr_002', '2017-06-09'),
('00005', 'tr_001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(15) CHARACTER SET utf8mb4 NOT NULL COMMENT 'รหัสพนักงาน',
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT 'ชื่อนามสกุล',
  `division` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'ส่วนงาน',
  `dept` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'แผนก',
  `process` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'งาน',
  `position` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'ตำแหน่ง',
  `shift` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'กะ',
  `level` int(10) NOT NULL COMMENT 'ขั้น'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `division`, `dept`, `process`, `position`, `shift`, `level`) VALUES
('00001', 'Admin Admin', 'Tester', 'GG', 'Dev.', 'Dev.', 'O', 10),
('00002', 'กรกฎ วิริยะ', 'test', 'test', 'test', 'test', 'test', 7),
('00003', 'กอไก่ ในเล้า', 'sss', 'sss', 'sss', 'sss', 'sss', 0),
('00004', 'qwe', 'ewq', 'qwe', 'fddf', 'fbdfgd', 'sds', 5),
('00005', 'dsdf', 'asdfaf', 'sdfsdfadf', 'asdfasdfadf', 'asdfasdfsdf', 'sdfdf', 5),
('00008', 'kk', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `permission`, `password`) VALUES
('admin', 'Admin', 1, 'qwerty'),
('admin2', 'admin', 2, 'zxcvbn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning`
--
ALTER TABLE `learning`
  ADD KEY `id` (`id`),
  ADD KEY `idc` (`idc`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
