-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 01:12 PM
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
('Admin', 'meghabm07@gmail.com', '0934375964', '#64 Main road cubbenpet bangalore', '123');

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
('Megha', '444', 'January', '10-10-2018', '6700', 'Paid'),
('Megha', '34567', 'January', '2018-10-11', '3400', 'Paid'),
('shivam', '1', 'January', '2018-10-13', '50', 'Not Paid'),
('Nisha', '12', 'January', '2018-10-20', '20', 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactname` varchar(100) NOT NULL,
  `contactemail` varchar(100) NOT NULL,
  `contactsubject` varchar(1000) NOT NULL,
  `contactmessage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Megha', 'GOOD'),
('shivam', 'good'),
('Megha', 'bad');

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
('Megha', '444', 'January', '', ''),
('Megha', '34567', 'January', '', '');

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
('10');

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
('Megha', 'meghabm07@gmail.com', '123456789', 'bangalore', '123'),
('Nisha', 'nishamohan029@gmail.com', '8123456789', 'Bangalore', '123'),
('shivam', 'asdk@gmail.com', '123456789', 'Bangalore', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
