-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 02:38 AM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID_C` varchar(10) NOT NULL COMMENT 'รหัสหมวดวิชา',
  `Name_C` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT 'ชื่ิอหมวดวิชา'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID_C`, `Name_C`) VALUES
('tr_001', 'Analytical skill '),
('tr_002', 'Basic SSS'),
('tr_003', 'Budget Cont.'),
('tr_004', 'Coaching'),
('tr_005', 'Leadership'),
('tr_006', 'Maizouskin');

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE `learning` (
  `ID_NO.` varchar(15) CHARACTER SET utf8mb4 NOT NULL COMMENT 'รหัสพนักงาน',
  `ID_C` varchar(10) CHARACTER SET utf8mb4 NOT NULL COMMENT 'รหัสวิชา',
  `Date.` date NOT NULL COMMENT 'วันที่เรียน'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
('00001', 'Admin Admin', 'Tester', 'GG', 'Dev.', 'Dev.', 'O', 8),
('00002', 'กรกฎ วิริยะ', 'test', 'test', 'test', 'test', 'test', 7),
('00003', 'กอไก่ ในเล้า', 'sss', 'sss', 'sss', 'sss', 'sss', 0),
('00004', 'qwe', 'ewq', 'qwe', 'fddf', 'fbdfgd', 'sds', 5),
('00005', 'ชื่อ นามสกุล ', '', '', '', '', '', 0);

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
('admin', 'Admin', 1, 'qwerty');

--
-- Indexes for dumped tables
--

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
