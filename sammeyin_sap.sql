-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2018 at 12:55 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sammeyin_sap`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `jobid`, `emp_id`) VALUES
(12, 15, 34),
(13, 15, 38);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `job_id`, `comment`, `empid`) VALUES
(21, 15, '123', 35),
(22, 15, 'nice', 36),
(23, 15, 'hello', 37);

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `id` int(11) NOT NULL,
  `compname` varchar(255) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `jobtype` varchar(255) NOT NULL,
  `jlocation` varchar(255) NOT NULL,
  `salary` float NOT NULL,
  `expirydate` varchar(20) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`id`, `compname`, `phonenumber`, `email`, `description`, `jobtitle`, `jobtype`, `jlocation`, `salary`, `expirydate`, `company_id`) VALUES
(15, 'SAMEvent', 123, 'sagarmistry08@gmail.com', 'EVENT DESC.', 'International Title', 'Cultural', 'Mumbai', 120000, '2021-04-05', 35),
(16, 'Hack It', 123, 'sidshah29599@gmail.com', 'Hackathon!', 'Vyro', 'Workshop', 'basement', 500000, '2018-09-23', 36);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `confirm_code` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `forgototp` int(12) NOT NULL,
  `task` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `company`, `email`, `password`, `reg`, `confirm_code`, `confirmed`, `forgototp`, `task`) VALUES
(33, 'raj', 'rajshah9172@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Participant', 0, 1, 0, 0),
(34, 'Apk Developers', 'apkdevelopers97@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Participant', 0, 1, 0, 0),
(35, 'Adioly Studios', 'sagarmistry08@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 0, 1, 0, 0),
(36, 'Hack It', 'sidshah29599@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 0, 1, 0, 0),
(37, 'Sammey INC.', 'sammeyinc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Participant', 38216, 0, 0, 0),
(38, 'raj', 'adityagosalia18@gmail.com', '202cb962ac59075b964b07152d234b70', 'Participant', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL,
  `hdegree` varchar(60) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `emp_id`, `fname`, `lname`, `dob`, `addr`, `phn`, `emailid`, `position`, `language`, `hdegree`, `intro`, `skill_name`) VALUES
(10, 33, 'raj', 'shah', '2018-09-22', 'bhayander', '989-288-9172', 'rajshah9172@gmail.com', 'employee', '2018-09-22', '2018-09-22', 'coder', 'Web development'),
(11, 34, 'Sagar', 'Mistry', '2018-09-22', 'A-1104, Rite Galaxy, Sodawala Lane, Borivali West', '123-456-4567', 'sagarmistry08@gmail.com', 'CEO', '2018-09-22', '2018-09-22', 'Im Awessommeee', 'Android development'),
(12, 38, 'raj', 'shah', '2018-09-22', 'CHARKOP OM SIDDHIVINAYAK C.H.S.LTD, A-106,PLOT-50,SECTOR-2A, kANDIVALI (W)', '989-987-9876', 'adityagosalia18@gmail.com', 'CEO', '2015-09-26', '2018-09-22', '', 'Web development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
