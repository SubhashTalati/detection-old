-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 09:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detection`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(11) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `productname`, `category`, `subcategory`, `cost`, `description`, `quantity`, `image`) VALUES
(9, 'mixi', 'electronics', 'lg', '10000', 'red', '2', 'Hydrangeas.jpg'),
(10, 'induction', 'electricals', 'lg', '13000', 'black', '3', 'Jellyfish.jpg'),
(11, 'phone', 'phones', 'samsung', '12000', 'slim', '6', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `username`, `password`) VALUES
(1, 'gowtham', 'gowtham');

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `id` int(11) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `banklogin` varchar(20) NOT NULL,
  `bankpassword` varchar(20) NOT NULL,
  `cvvnumber` varchar(20) NOT NULL,
  `expirydate` varchar(20) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `amountlimit` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `textone` varchar(20) NOT NULL,
  `ansone` varchar(20) NOT NULL,
  `texttwo` varchar(20) NOT NULL,
  `anstwo` varchar(20) NOT NULL,
  `textthree` varchar(20) NOT NULL,
  `ansthree` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pass_otp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`id`, `cardtype`, `cardnumber`, `banklogin`, `bankpassword`, `cvvnumber`, `expirydate`, `mobilenumber`, `email`, `amountlimit`, `password`, `textone`, `ansone`, `texttwo`, `anstwo`, `textthree`, `ansthree`, `uid`, `pass_otp`) VALUES
(1, 'credit', '12345678909876', 'gowtham', 'gowtham', '123', '2019-02-28', '8610395809', 'gowtham@fabhost.in', '5000', '1144', 'what', 'what', 'was', 'was', 'when', 'when', '9', '6723'),
(2, 'credit', '123456789101112', 'naveen', 'naveen', '555', '2020-03-30', '8610395809', 'naveen@fabhost.in', '5000', 'naveen', 'what', 'what', 'where', 'where', 'was', 'was', '10', '5381');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartdetail`
--

INSERT INTO `cartdetail` (`id`, `uid`, `pid`) VALUES
(20, 9, 9),
(21, 9, 10),
(22, 10, 9),
(23, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(9, 'gowtham', 'gowtham@fabhost.in', '1144', '1144'),
(10, 'naveen', 'naveen@fabhost.in', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `uid`, `productname`, `quantity`, `cost`, `total`, `status`) VALUES
(1, '7', 'induction', '3', '13000', '39000', 'complete'),
(31, '6', 'induction', '1', '13000', '13000', 'complete'),
(34, '6', 'induction', '4', '13000', '52000', 'process'),
(35, '6', 'induction', '3', '13000', '39000', 'pending'),
(36, '9', 'induction', '1', '13000', '13000', 'pending'),
(37, '10', 'induction', '1', '13000', '13000', 'process');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cartdetail`
--
ALTER TABLE `cartdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
