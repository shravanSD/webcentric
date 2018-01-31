-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 05:41 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carzone`
--
CREATE DATABASE IF NOT EXISTS `carzone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carzone`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `immat_num` varchar(15) NOT NULL,
  `make` varchar(15) NOT NULL,
  `model` varchar(15) NOT NULL,
  `year` varchar(4) NOT NULL,
  `member_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `shortreaction` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `member_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `member_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `member_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholders`
--

CREATE TABLE `stakeholders` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenum` varchar(10) NOT NULL,
  `stakeholder_email` varchar(30) NOT NULL,
  `priviledge` int(11) NOT NULL,
  `job` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
-- Dumping data for table `stakeholders`
--

INSERT INTO `stakeholders` (`id`, `firstname`, `lastname`, `phonenum`, `stakeholder_email`, `priviledge`, `job`) VALUES
(1, 'Heinz', 'Doofenshmirtz', '11111111', 'heinz@doofenshmirtz.com', 1, 'Evil scientist'),
(2, 'Phineas', 'Flint', '22222222', 'phineas@flint.com', 2, 'student'),
(3, 'Perry', 'the Platypus', '33333333', 'perry@theplatypus.com.com', 1, 'secret agent'),
(4, 'Candace', 'Flint', '44444444', 'candace@flint.com', 2, 'young adult'),
(5, 'Ferb', 'Flint', '55555555', 'ferb@flint.com', 1, 'student'),
(6, 'Linda', 'Flint', '66666666', 'linda@flint.com', 1, 'Housewife'),
(7, 'Bufford', 'Van Stomm', '77777777', 'bufford@vanstomm.com', 1, 'Bully'),
(8, 'Isabella', 'Something', '88888888', 'isabella@something.com', 2, 'Fireside girl'),
(9, 'Baljeet', 'Something', '99999999', 'baljeet@something.com', 2, 'nerd'),
(10, 'stacy', 'Something', '10000000', 'stacy@something.com', 2, 'Young adult');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stakeholders`
--
ALTER TABLE `stakeholders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;
--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`immat_num`),
  ADD KEY `member_email` (`member_email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `member_email` (`member_email`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_email` (`member_email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_email`),
  ADD UNIQUE KEY `member_email` (`member_email`);

--
-- Indexes for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_email` (`member_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inbox`
--
ALTER TABLE `inbox`
  ADD CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
