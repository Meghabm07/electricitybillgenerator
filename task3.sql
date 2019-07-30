-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 02:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregister`
--

CREATE TABLE `aregister` (
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `acno` varchar(10) NOT NULL,
  `aadd` varchar(100) NOT NULL,
  `apw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aregister`
--

INSERT INTO `aregister` (`aname`, `aemail`, `acno`, `aadd`, `apw`) VALUES
('Admin', 'Admin@gmail.com', '8123469267', 'Hyderbad', '123');

-- --------------------------------------------------------

--
-- Table structure for table `caluculatebill`
--

CREATE TABLE `caluculatebill` (
  `cname` varchar(100) NOT NULL,
  `bno` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `money` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caluculatebill`
--

INSERT INTO `caluculatebill` (`cname`, `bno`, `month`, `edate`, `money`, `status`) VALUES
('Megha', '1', 'May', '10-1-2019', '120', 'Paid'),
('Nisha', '12', 'May', '10-10-2018', '60', 'Paid'),
('Asha', '1', 'May', '10-10-2018', '60', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cid` varchar(100) NOT NULL,
  `feedback` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cid`, `feedback`) VALUES
('Megha', 'Good\r\n'),
('Asha', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cid` varchar(100) NOT NULL,
  `sno` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `payvia` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cid`, `sno`, `month`, `payvia`, `status`) VALUES
('Megha', '1', 'May', '', ''),
('Nisha', '12', 'May', '', ''),
('Asha', '1', 'May', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `update1`
--

CREATE TABLE `update1` (
  `update1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update1`
--

INSERT INTO `update1` (`update1`) VALUES
('15');

-- --------------------------------------------------------

--
-- Table structure for table `uregister`
--

CREATE TABLE `uregister` (
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ucno` varchar(10) NOT NULL,
  `uadd` varchar(100) NOT NULL,
  `upw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregister`
--

INSERT INTO `uregister` (`uname`, `uemail`, `ucno`, `uadd`, `upw`) VALUES
('Megha', 'meghabm07@gmail.com', '9611487498', 'Banglore', '123'),
('Nisha', 'nisha@gmail.com', '123456', 'Bangalore', '123'),
('Asha', 'asha@gmail.com', '123456789', 'Banglore', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
