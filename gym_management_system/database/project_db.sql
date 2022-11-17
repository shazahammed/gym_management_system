-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 09:31 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`) VALUES
('roopali', 'roopali@!', 'Roopali Singh'),
('shaz', 'boy@1234', 'Shaz Ahammed');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `userid` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `monthly_fee` int(11) NOT NULL,
  `trained_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`userid`, `password`, `name`, `phone`, `monthly_fee`, `trained_by`) VALUES
(201100, 'sid@!', 'Sidharth', 7856321498, 900, 101100),
(201101, 'simran@!', 'Simran', 8246712548, 800, 101101),
(201102, 'joy@!', 'Joy Pearce', 8524569317, 1200, 101102),
(201108, 'sania@!', 'Saniya Mira', 8745632198, 1500, 101106),
(201110, 'harry@!', 'Harry Linson', 7896541258, 900, 101109),
(201169, 'louis@!', 'Louis Linson', 7896548796, 1000, 101109);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `userid` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`userid`, `password`, `name`, `phone`, `salary`) VALUES
(101100, 'gary@!', 'Gary', 8546321789, 12000),
(101101, 'mandy@!', 'Mandy', 9856321478, 12000),
(101102, 'sam@!', 'Sam Hunter', 8745963256, 14000),
(101106, 'saina@!', 'Saina Agarwal', 963258741, 16000),
(101109, 'larry@!', 'Larry', 9658741236, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `trainer_trainee`
--

CREATE TABLE `trainer_trainee` (
  `userid` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `plan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_trainee`
--

INSERT INTO `trainer_trainee` (`userid`, `weight`, `fat`, `plan`) VALUES
(201100, 75, 28, '6 month'),
(201101, 59, 25, '1 year'),
(201102, 70, 28, '5 months'),
(201108, 62, 25, '2 years'),
(201110, 69, 26, '4 months'),
(201169, 70, 30, '3 months');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `id` (`trained_by`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `trainer_trainee`
--
ALTER TABLE `trainer_trainee`
  ADD KEY `trainee` (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trainee`
--
ALTER TABLE `trainee`
  ADD CONSTRAINT `id` FOREIGN KEY (`trained_by`) REFERENCES `trainer` (`userid`);

--
-- Constraints for table `trainer_trainee`
--
ALTER TABLE `trainer_trainee`
  ADD CONSTRAINT `trainee` FOREIGN KEY (`userid`) REFERENCES `trainee` (`userid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
