-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 04:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('ISLAM@GMAIL.COM', 'ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `Account No` int(40) NOT NULL,
  `House Address` varchar(40) NOT NULL,
  `Amount Of Dues` int(40) NOT NULL,
  `Name Of Month` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`email`, `password`, `fullname`) VALUES
('hasan@gmail.com', 'nayem', 'Hasanul'),
('na@gmail.com', 'Nayem', 'Kaiyum'),
('nayem@djg.com', 'asdf', 'Kamran'),
('nayem@gam.com', '01985', 'Nayem'),
('nayem@gm.com', '12345', 'Nayem'),
('nayem@gmail.com', 'nayem', 'Hasanul'),
('piyal@gm.com', '12345', 'Piyal'),
('tan@gml.com', 'tan', 'Tanzim');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `speciality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`email`, `password`, `fullname`, `speciality`) VALUES
('kaiy', 'kaitum', 'kaiyum@gmail.com', 'volunteer'),
('kamran', 'KAMRAN', 'em@GMAIL.COM', 'volunteer'),
('mash', 'mash', 'mash@gmail.com', 'volunteer'),
('nayem', 'fghdegf', 'vchnftc@cg.mk', 'volunteer'),
('nayem@gmail.com', 'nayem', 'nayemul', 'jkkbjkd'),
('Noman', '12345', 'nayem@gm.com', 'volunteer'),
('yaro', '01987', 'yra@gm.com', 'volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD UNIQUE KEY `username` (`email`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
