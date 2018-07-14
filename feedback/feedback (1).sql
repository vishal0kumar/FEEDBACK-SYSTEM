-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 04:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('vishal', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `username` varchar(20) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `ans5` varchar(200) NOT NULL,
  `ans6` varchar(200) NOT NULL,
  `ans7` varchar(200) NOT NULL,
  `ans8` varchar(200) NOT NULL,
  `ans9` varchar(200) NOT NULL,
  `ans10` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `approval` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`username`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`, `status`, `approval`) VALUES
('20101000', ' LJ/L JH,.L JHVJMHI.L', ';J/KL; ', 'YES', 'NO', 'YES', '12:00 PM', '4.5', '3.4', '', '', 'abusive', 'rejected'),
('2010557', ' lkkj``', 'hlkjm ', 'YES', 'NO', 'YES', '1:00 PM', '3.6', '2.8', '', '', 'abusive', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `d_ques`
--

CREATE TABLE IF NOT EXISTS `d_ques` (
`id` int(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `op1` varchar(200) NOT NULL,
  `op2` varchar(200) NOT NULL,
  `op3` varchar(200) NOT NULL,
  `op4` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_ques`
--

INSERT INTO `d_ques` (`id`, `question`, `op1`, `op2`, `op3`, `op4`) VALUES
(2, 'WHAT LUNCH TIMING WOULD YOU PREFER?', '1:00 PM', '12:00 PM', '2:00 PM', '1:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `professsor`
--

CREATE TABLE IF NOT EXISTS `professsor` (
  `name` varchar(20) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professsor`
--

INSERT INTO `professsor` (`name`, `doj`, `email`, `username`, `course`, `subject`, `mobile`, `password`) VALUES
(' Akash Singh', '2/3/2009', 'a@gmail.com', 'aki1', 'PE', 'compiler', '9876678543', '12345'),
('RAVI VERMA', '1/2/2003', 'r@gmail.com', 'ravi1', 'CSE', 'mathematic', '9876545674', 'asdfg'),
('VIKRAM RATHORE', '1/2/2003', 'VI@GMAIL.COM', 'VIK47', 'ME', 'Automata', '987654321', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ques_cat`
--

CREATE TABLE IF NOT EXISTS `ques_cat` (
`cat_id` int(20) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_cat`
--

INSERT INTO `ques_cat` (`cat_id`, `type`) VALUES
(1, 'TEXT'),
(2, 'YES/NO'),
(3, 'DROP_DWON'),
(4, 'RATING');

-- --------------------------------------------------------

--
-- Table structure for table `r_ques`
--

CREATE TABLE IF NOT EXISTS `r_ques` (
`id` int(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_ques`
--

INSERT INTO `r_ques` (`id`, `question`, `cat_id`) VALUES
(2, 'RATE TEACHING FACILITY OF THIS COLLEGE?', '4'),
(3, 'RATE HOSTEL FACILITY.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `studen`
--

CREATE TABLE IF NOT EXISTS `studen` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studen`
--

INSERT INTO `studen` (`username`, `name`, `course`, `semester`, `email`, `p_address`, `password`) VALUES
('2010001', 'UTKARSH', 'B.TECH', '2', 'u@gmail.com', 'Lucknow', 'fdsa'),
('20101000', 'vikash', 'B.tech', '1', 'b@gmail.com', 'Dehradun', '12345'),
('2010557', 'VISHAL', 'B.TECH', '3', 'v@gmail.com', 'near mahavir temple buxar', '12345'),
('2012411', 'SUMIT', 'B.TECH', '3', 's@gmail.com', 'Chamoli', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `text_ques`
--

CREATE TABLE IF NOT EXISTS `text_ques` (
`id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `cat_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_ques`
--

INSERT INTO `text_ques` (`id`, `question`, `cat_id`) VALUES
(6, 'WHAT CHANGES DO YOU WANT?', 1),
(8, 'WRITE FEW LINES ABOUT TRANSPORT FACILITY.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `y_ques`
--

CREATE TABLE IF NOT EXISTS `y_ques` (
`id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `cat_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y_ques`
--

INSERT INTO `y_ques` (`id`, `question`, `cat_id`) VALUES
(4, 'SHOULD COLLEGE TIMING CHANGE?', '2'),
(5, 'ARE YOU ENJOYING ALL THE  FACILITY OF THIS COLLEGE?', '2'),
(6, 'IS SATURDAY SHOULD BE OFF FOR 3RD YEAR STUDENT?', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `d_ques`
--
ALTER TABLE `d_ques`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professsor`
--
ALTER TABLE `professsor`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `ques_cat`
--
ALTER TABLE `ques_cat`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `r_ques`
--
ALTER TABLE `r_ques`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studen`
--
ALTER TABLE `studen`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `text_ques`
--
ALTER TABLE `text_ques`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_ques`
--
ALTER TABLE `y_ques`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_ques`
--
ALTER TABLE `d_ques`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ques_cat`
--
ALTER TABLE `ques_cat`
MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `r_ques`
--
ALTER TABLE `r_ques`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `text_ques`
--
ALTER TABLE `text_ques`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `y_ques`
--
ALTER TABLE `y_ques`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
