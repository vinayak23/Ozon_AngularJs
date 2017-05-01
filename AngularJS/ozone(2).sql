-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2017 at 12:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ozone`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `aid` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `s_id` int(3) NOT NULL,
  `app_nm` varchar(25) NOT NULL,
  `app_des` varchar(25) NOT NULL,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  `CTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MTS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`aid`, `c_id`, `s_id`, `app_nm`, `app_des`, `delflag`, `CTS`, `MTS`) VALUES
(1, 4, 1, 'Spurthi', 'Klp', 1, '2016-08-25 10:50:33', '2016-08-25'),
(2, 4, 1, 'Srushti', 'Pune', 1, '2016-08-25 10:50:17', '2016-08-25'),
(3, 4, 1, 'fdgdf', 'dfhhd', 1, '2016-08-25 10:26:30', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(3) NOT NULL,
  `cat_nm` varchar(25) NOT NULL,
  `cat_des` varchar(25) NOT NULL,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  `CTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MTS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cat_nm`, `cat_des`, `delflag`, `CTS`, `MTS`) VALUES
(4, 'Residencial', 'Ganeshaaaa!!!!!!', 1, '2016-08-24 11:31:53', '0000-00-00'),
(5, 'Comersial', 'jkghjkfjk', 1, '2016-08-24 11:32:18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `email`, `pwd`) VALUES
('Archana', 'archajmane@gmail.com', 'archana123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(3) NOT NULL,
  `a_id` int(3) NOT NULL,
  `s_id` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `prod_nm` varchar(25) NOT NULL,
  `prod_des` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL,
  `url` varchar(25) NOT NULL,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  `CTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MTS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `a_id`, `s_id`, `c_id`, `prod_nm`, `prod_des`, `img`, `url`, `delflag`, `CTS`, `MTS`) VALUES
(1, 1, 1, 4, 'Jeetraj', 'fghdgf', 'Penguins.jpg', 'http://localhost:8080/mru', 1, '2016-08-25 10:52:23', '2016-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sid` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `sub_nm` varchar(25) NOT NULL,
  `sub_des` varchar(25) NOT NULL,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  `CTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MTS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sid`, `c_id`, `sub_nm`, `sub_des`, `delflag`, `CTS`, `MTS`) VALUES
(1, 4, 'Raj', 'Kolhapur', 1, '2016-08-24 12:21:31', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `cid` (`c_id`),
  ADD KEY `sid` (`s_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `aid` (`a_id`),
  ADD KEY `sid` (`s_id`),
  ADD KEY `cid` (`c_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `sub_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`c_id`) REFERENCES `category` (`cid`),
  ADD CONSTRAINT `FK2` FOREIGN KEY (`s_id`) REFERENCES `sub_category` (`sid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK3` FOREIGN KEY (`a_id`) REFERENCES `application` (`aid`),
  ADD CONSTRAINT `FK4` FOREIGN KEY (`s_id`) REFERENCES `sub_category` (`sid`),
  ADD CONSTRAINT `FK5` FOREIGN KEY (`c_id`) REFERENCES `category` (`cid`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `FK` FOREIGN KEY (`c_id`) REFERENCES `category` (`cid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
