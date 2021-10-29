-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.epizy.com
-- Generation Time: Oct 28, 2021 at 09:46 PM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28471972_ngodingdotcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
('0000000000', 'admin', 'admin'),
('apaajadahh', 'haha', 'hihi'),
('1112131415', 'tesaja', 'tesaja'),
('1133557799', 'asadmin', 'asadmin'),
('9234567789', 'asadminnih', 'asadminnih'),
('cornelia16', 'Cornelia', 'cornelia16092001'),
('2007200288', 'amiiraalhusnaa', 'amiira2007'),
('1111111111', 'Muhammad izza', 'izza47');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `course_id` varchar(5) DEFAULT NULL,
  `participant_id` varchar(10) DEFAULT NULL,
  `class_id` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`course_id`, `participant_id`, `class_id`) VALUES
('FEC01', 'cornelia16', 'CLS01'),
('FEC01', 'apaajadahh', 'CLS01'),
('FEC01', 'apaajadahh', 'CLS01'),
('FEC01', 'apaajadahh', 'CLS01');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(5) NOT NULL,
  `course_name` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `status`) VALUES
('FEC01', 'Front End Basics', 'coming soon');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` varchar(8) NOT NULL,
  `headline` varchar(200) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `headline`, `question`) VALUES
('FORUM001', 'HEADLINE AJA', 'QUESTION AJA'),
('FORUM003', 'tes ganti', 'tes juga ganti');

-- --------------------------------------------------------

--
-- Table structure for table `forum_chat`
--

CREATE TABLE `forum_chat` (
  `forum_id` varchar(8) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_chat`
--

INSERT INTO `forum_chat` (`forum_id`, `user_id`, `comments`) VALUES
('FORUM001', 'cornelia16', 'Semangat!!!'),
('FORUM001', 'apaajadahh', 'Saya tidak mengerti Javascript!!');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `id` varchar(10) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`id`, `nickname`, `email`, `role`, `point`, `status`, `rank`, `rate`) VALUES
('0000000000', 'GM', 'derino1115@gmail.com', 'staff', 0, 'offline', 'beginner', 0),
('apaajadahh', 'Livevil', 'wdeodatus@gmail.com', 'student', 1510, 'online', 'beginner', 0),
('1112131415', 'Chris', 'abc@abc.abc', 'student', 0, 'offline', 'beginner', 0),
('1133557799', 'minmin', 'blabla@gmail.com', 'student', 0, 'online', 'beginner', 0),
('9234567789', 'minmin_asli', 'blablanih@gmail.com', 'staff', 0, 'online', 'beginner', 0),
('cornelia16', 'Cornelia', 'corneliadellavina@gmail.com', 'student', 10, 'offline', 'beginner', 0),
('2007200288', 'amiiraalhusnaa', 'amiira.alhusnaa@gmail.com', 'student', 0, 'offline', 'beginner', 0),
('1111111111', 'Kaiza47', 'izzamuhammad267@gmail.com', 'student', 0, 'online', 'beginner', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `user_id` varchar(10) DEFAULT NULL,
  `item_id` varchar(5) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`user_id`, `item_id`, `quantity`) VALUES
('cornelia16', '00002', 5),
('apaajadahh', '00002', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `item_id` varchar(5) NOT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`item_id`, `item_name`, `price`, `stock`) VALUES
('00001', 'extra_time', 100, 10),
('00002', 'point card', 500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `item_id` varchar(5) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD KEY `id` (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `forum_chat`
--
ALTER TABLE `forum_chat`
  ADD KEY `forum_id` (`forum_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
