-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 06:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungerfree`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `name`, `type`, `quantity`) VALUES
(1, 'Helping hand', 'Veg', 100),
(2, 'Helping hand', 'Veg', 100),
(0, 'veg', 'Non veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Non veg', 50),
(0, 'veg', 'Veg', 50),
(0, '', '', 0),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'veg', 'Veg', 50),
(0, 'Helping hand', 'Veg', 50),
(0, 'Helping hand', 'Veg', 50),
(0, 'Helping hand', 'Veg', 50),
(0, 'samundar', 'Non veg', 10),
(0, 'samundar', 'Veg', 50),
(0, 'samundar', 'Veg', 50),
(0, 'sitara', 'Veg', 10),
(0, 'sitara', 'Veg', 100),
(0, 'sitara', 'Non veg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `foodngo`
--

CREATE TABLE `foodngo` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `preference` varchar(10) NOT NULL,
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodngo`
--

INSERT INTO `foodngo` (`ID`, `name`, `preference`, `count`) VALUES
(1, 'Helping hand', 'Veg', 50),
(2, 'samundar', 'Veg', 10),
(3, 'Helping hand', 'Veg', 50),
(4, 'Helping hand', 'Veg', 10),
(5, 'Helping hand', 'Veg', 50),
(6, 'Helping hand', 'Veg', 50),
(7, 'Helping hand', 'Veg', 20),
(8, '', '', 0),
(9, 'seva', 'Veg', 10),
(10, 'seva', 'Veg', 10),
(11, 'seva', 'Veg', 10),
(12, 'seva', 'Veg', 10),
(13, 'seva', 'Veg', 1),
(14, 'seva', 'Veg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE `individual` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Phone no.` int(10) NOT NULL,
  `Aadhar card` int(16) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indiviual`
--

CREATE TABLE `indiviual` (
  `id` int(11) NOT NULL,
  `name` varchar(355) NOT NULL,
  `address` varchar(389) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(79) NOT NULL,
  `phoneno.` int(11) NOT NULL,
  `adhaarno` int(12) NOT NULL,
  `city` varchar(59) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indiviual`
--

INSERT INTO `indiviual` (`id`, `name`, `address`, `email`, `password`, `phoneno.`, `adhaarno`, `city`, `pincode`) VALUES
(1, 'ss', 'ssdd', 'sameenas482@gmail.com', 'ghjj', 2147483647, 2147483647, 'Kalyan', 7894),
(2, 'ss', 'ssdd', 'sameenas482@gmail.com', 'sss', 2147483647, 2147483647, 'Andheri', 7894),
(3, 'xyz', 'ddd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'Titwala', 478945),
(4, 'ss', 'ddd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'Titwala', 478945),
(5, 'xyz', 'hgfhgv', 'mzjagirdar10@gmail.com', '789', 2147483647, 2147483647, 'Titwala', 478945),
(6, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'sss', 2147483647, 2147483647, 'Andheri', 566),
(7, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `name` varchar(355) NOT NULL,
  `address` varchar(389) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(79) NOT NULL,
  `phoneno.` int(11) NOT NULL,
  `adhaarno` int(12) NOT NULL,
  `city` varchar(59) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `address`, `email`, `password`, `phoneno.`, `adhaarno`, `city`, `pincode`) VALUES
(1, 'ss', 'ssdd', 'sameenas482@gmail.com', 'sadd', 2147483647, 2147483647, 'Andheri', 7894),
(2, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'dff', 2147483647, 2147483647, 'Andheri', 7894),
(3, 'ss', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Kalyan', 7894),
(4, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Andheri', 7894),
(5, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'sss', 2147483647, 2147483647, 'Andheri', 7894),
(6, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'sss', 2147483647, 2147483647, 'Andheri', 7894),
(7, 'ss', 'ssdd', 'sameenas482@gmail.com', 'ghghg', 2147483647, 2147483647, 'Andheri', 7894),
(8, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ss', 2147483647, 2147483647, 'Andheri', 7894),
(9, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ssss', 2147483647, 2147483647, 'Andheri', 7894),
(10, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ssss', 2147483647, 2147483647, 'Andheri', 7894),
(11, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Andheri', 7894),
(12, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ss', 2147483647, 2147483647, 'Andheri', 7894),
(13, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Andheri', 7894),
(14, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'vfd', 2147483647, 2147483647, 'Andheri', 7894),
(15, 'ss', 'ssdd', 'sameenas482@gmail.com', 'cfcv', 2147483647, 2147483647, 'Andheri', 7894),
(16, 'ss', 'ssdd', 'sameenas482@gmail.com', 'bb', 2147483647, 2147483647, 'Andheri', 7894),
(17, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'cccc', 2147483647, 2147483647, 'Andheri', 7894),
(18, 'ddd', 'ddd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Kalyan', 7894),
(19, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'zzzs', 2147483647, 2147483647, 'Kalyan', 7894),
(20, 'xyz', 'ssdd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'Kalyan', 478945),
(21, 'xyz', 'ssdd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'Kalyan', 478945),
(22, 'xyz', 'ssdd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'MiraRoad', 478945),
(23, 'ddd', 'ddd', 'sameenas482@gmail.com', '789', 2147483647, 2147483647, 'MiraRoad', 478945),
(24, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Andheri', 566),
(25, 'xyz', 'ssdd', 'sameenas482@gmail.com', 'ddd', 2147483647, 2147483647, 'Andheri', 566),
(26, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11),
(27, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11),
(28, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11),
(29, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11),
(30, 'veg', '50kg', 'sam@gmail.com', '1234', 445, 4455, 'Andheri', 11),
(31, 'seva', 'kalyan', 'nagamakhalifa@gmail.com', '1234', 456213752, 1234, 'Andheri', 258),
(32, 'sitara', 'kly', 'nagamakhalifa@gmail.com', '000', 1235487, 123654, 'Andheri', 124),
(33, 'seva', 'titwala', 'nagamakhalifa@gmail.com', '1234', 2147483647, 1234567910, 'Titwala', 401107);

-- --------------------------------------------------------

--
-- Table structure for table `ngofood`
--

CREATE TABLE `ngofood` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `preference` varchar(10) NOT NULL,
  `count` int(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngofood`
--

INSERT INTO `ngofood` (`ID`, `name`, `preference`, `count`, `status`) VALUES
(1, 'Helping hand', 'Veg', 50, 'confirm'),
(2, 'Helping hand', 'Veg', 50, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `ngolist`
--

CREATE TABLE `ngolist` (
  `id` int(55) NOT NULL,
  `NGOs` varchar(55) NOT NULL,
  `Phone Number` varchar(50) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngolist`
--

INSERT INTO `ngolist` (`id`, `NGOs`, `Phone Number`, `Email`, `Address`, `status`) VALUES
(1, 'Robin Hood Army', '8169121346', 'www.robinhoodarmy.com', 'Mumbai', 'needed'),
(2, 'SAAD Foundation', '9152954503', 'http://www.saadfoundationmumbai.org/', 'Mumbai', 'not needed'),
(3, 'YUG Foundation', '9152180519', 'mzjagirdar10gmail.com', 'Kalyan', 'needed'),
(4, 'Kamal Arnav Charitable Trust', '9152280945', 'sam@123', 'Mira Road', 'needed'),
(5, 'Aashapura maa Foundation and Charitable trust', '9152454943', 'zee@123', 'Mira Road', 'not needed'),
(6, 'Om Laxmi Charitable Trust', '9152518768', 'nag@123', 'Tiitwala', 'not needed'),
(7, 'Child Help Foundation', '9152176497', 'san@123', 'Ghatkopar', 'needed'),
(8, 'Reborn Humanity Association', '9022189964', 'mam@123', 'Mahim', 'needed'),
(9, 'Disha Foundation', '9004000968', 'vas@123', 'Vasai', 'needed'),
(10, 'Nathani Charitable Trust', '2261226122', 'nanthani@123', 'Mumbai', 'needed'),
(11, 'Balseva ashram', '1234567890', 'balseva@123', 'kalyan', 'not needed'),
(12, 'nityashakti Foundation', '4569871236', 'nitya@123', 'titwala', 'needed'),
(13, 'satyashivam foundation', '1257893456', 'satyashivam@123', 'Ghatkopar', 'not needed'),
(14, 'ujwalbhavishya foundation', '7896541236', 'ujwal@gmail.com', 'Mahim', 'not needed'),
(15, 'smallkids foundation', '7894569685', 'smallkids@123', 'Vasai', 'not needed');

-- --------------------------------------------------------

--
-- Table structure for table `resform`
--

CREATE TABLE `resform` (
  `type` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resform`
--

INSERT INTO `resform` (`type`, `Quantity`) VALUES
('veg11', '50kg'),
('veg11', '50kg'),
('veg11', '50kg'),
('veg', '');

-- --------------------------------------------------------

--
-- Table structure for table `reslist`
--

CREATE TABLE `reslist` (
  `id` int(11) NOT NULL,
  `resname` varchar(50) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reslist`
--

INSERT INTO `reslist` (`id`, `resname`, `Phone Number`, `Email`, `Address`, `status`) VALUES
(1, 'sitara 5 star', 1236547899, 'sitara@gmail.com', 'Kalyan', 'available'),
(2, 'taj', 915295450, 'taj@123', 'Mahim', 'available'),
(3, 'panda', 1234567895, 'panda@123', 'Kalyan', 'not available'),
(4, 'samundar', 1234567894, 'samundar@gmail.com', 'Mahim', 'not available'),
(5, 'six star restuarant', 1546987336, 'sixstar@gmail.com', 'Byculla', 'available'),
(6, 'royal resturant', 1254698736, 'royal@123', 'Byculla', 'not available'),
(7, 'foodfood', 1236457897, 'foodfood@gmail.com', 'MiraRoad', 'available'),
(8, 'delhidarbar', 1245698756, 'delhidarbar@123', 'MiraRoad', 'not available'),
(9, 'kohinoor', 1236547896, 'kohinoor@gmail.com', 'Dadar', 'available'),
(10, 'servefood', 1152954503, 'servefood@123', 'Dadar', 'not available');

-- --------------------------------------------------------

--
-- Table structure for table `restuarant`
--

CREATE TABLE `restuarant` (
  `id` int(11) NOT NULL,
  `name` varchar(355) NOT NULL,
  `address` varchar(389) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(79) NOT NULL,
  `phoneno.` int(10) NOT NULL,
  `adhaarno` int(12) NOT NULL,
  `city` varchar(59) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restuarant`
--

INSERT INTO `restuarant` (`id`, `name`, `address`, `email`, `password`, `phoneno.`, `adhaarno`, `city`, `pincode`) VALUES
(1, 'ddd', 'ddd', 'mzjagirdar10@gmail.com', '785', 2147483647, 78945, 'Kalyan', 478945);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mob` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`ID`, `name`, `mail`, `mob`) VALUES
(1, 'nagama', 'nagamakhalifa@gmail.com', 1236547890),
(2, 'Khalifa Nagama Abdul', 'nagamakhalifa@gmail.com', 2147483647),
(3, '', '', 0),
(4, 'sameena', 'nagamakhalifa@gmail.com', 1236547890),
(5, 'zeeshan', 'sameenas482@gmail.com', 1236547890),
(6, 'zeeshan', 'mzjagirdar10@gmail.com', 2147483647),
(7, 'zeeshan', 'mzjagirdar10@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodngo`
--
ALTER TABLE `foodngo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `indiviual`
--
ALTER TABLE `indiviual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngofood`
--
ALTER TABLE `ngofood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ngolist`
--
ALTER TABLE `ngolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reslist`
--
ALTER TABLE `reslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restuarant`
--
ALTER TABLE `restuarant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodngo`
--
ALTER TABLE `foodngo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `indiviual`
--
ALTER TABLE `indiviual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ngofood`
--
ALTER TABLE `ngofood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngolist`
--
ALTER TABLE `ngolist`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reslist`
--
ALTER TABLE `reslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restuarant`
--
ALTER TABLE `restuarant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
