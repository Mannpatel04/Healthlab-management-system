-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 04:55 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` bigint(8) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `email`, `password`, `phoneno`) VALUES
(1, 'admin', 'admin@gmail.com', 12345, 9328366802),
(2, 'Admin1', 'admin1@gmail.com', 12345, 2345678765);

-- --------------------------------------------------------

--
-- Table structure for table `bloodreport`
--

CREATE TABLE `bloodreport` (
  `email` varchar(20) NOT NULL,
  `reqid` bigint(20) NOT NULL,
  `haemoglobin` bigint(20) NOT NULL,
  `totalwbccount` bigint(20) NOT NULL,
  `platelet` bigint(20) NOT NULL,
  `rbccount` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodreport`
--

INSERT INTO `bloodreport` (`email`, `reqid`, `haemoglobin`, `totalwbccount`, `platelet`, `rbccount`) VALUES
('patient1@gmail.com', 12, 16, 5000, 160000, 5),
('patient1@gmail.com', 27, 17, 6000, 190000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `collectorinformation`
--

CREATE TABLE `collectorinformation` (
  `collectorid` int(10) NOT NULL,
  `collectorname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `status` varchar(10) NOT NULL,
  `collectionarea` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectorinformation`
--

INSERT INTO `collectorinformation` (`collectorid`, `collectorname`, `email`, `password`, `phoneno`, `address`, `city`, `pincode`, `status`, `collectionarea`) VALUES
(8, 'Collector Udhna', 'collectoru@gmail.com', '12345', 3456782190, 'pramukh park.', 'Surat', 395006, 'Active', 'Udhna'),
(9, 'Collector Katargam', 'collectorkat@gmail.com', '12345', 9876543210, 'nilam bag.', 'Surat', 394210, 'Active', 'Katargam');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `email` varchar(20) NOT NULL,
  `reqid` bigint(20) NOT NULL,
  `rdrp` varchar(20) NOT NULL,
  `gene` varchar(20) NOT NULL,
  `rnase` varchar(20) NOT NULL,
  `sars` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dangue`
--

CREATE TABLE `dangue` (
  `email` varchar(20) NOT NULL,
  `reqid` bigint(20) NOT NULL,
  `haemoglobin` bigint(20) NOT NULL,
  `totalwbccount` bigint(20) NOT NULL,
  `platelet` bigint(20) NOT NULL,
  `rbccount` bigint(20) NOT NULL,
  `hct(pcv)` bigint(20) NOT NULL,
  `mcv` bigint(20) NOT NULL,
  `mch` bigint(20) NOT NULL,
  `mchc` bigint(20) NOT NULL,
  `neutrophil` bigint(20) NOT NULL,
  `lymphocyte` bigint(20) NOT NULL,
  `monocyte` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dangue`
--

INSERT INTO `dangue` (`email`, `reqid`, `haemoglobin`, `totalwbccount`, `platelet`, `rbccount`, `hct(pcv)`, `mcv`, `mch`, `mchc`, `neutrophil`, `lymphocyte`, `monocyte`) VALUES
('patient1@gmail.com', 12, 15, 5000, 160000, 5, 45, 90, 32, 32, 52, 22, 4),
('patient1@gmail.com', 25, 14, 9000, 190000, 5, 49, 99, 29, 35, 59, 39, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `reqid` int(11) NOT NULL,
  `feedbackdate` date NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `reqid`, `feedbackdate`, `feedback`) VALUES
(1, 25, '2022-03-22', 'good'),
(2, 25, '2022-03-22', 'good'),
(3, 27, '2022-03-23', 'better');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `labid` int(10) NOT NULL,
  `labname` varchar(50) NOT NULL,
  `labregno` varchar(20) NOT NULL,
  `ownername` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialities` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`labid`, `labname`, `labregno`, `ownername`, `address`, `phoneno`, `email`, `specialities`, `status`, `password`) VALUES
(7, 'Lab Udhna', '123abc', 'Ritisha Dobariya', 'gaytri soc.', 3456789021, 'labudhna@gmail.com', 'gd5tju', 'Active', '12345'),
(8, 'Lab Katargam', 'abc123', 'Prarthana Hirpara', 'Amipark soc.', 9328366802, 'labkat@gmail.com', 'dferge', 'Active', '12345'),
(9, 'Lab Udhna1', 'xyz098', 'Rahul Patel', 'Udhna Udhyog Nagar.', 6543218972, 'labudhna1@gmail.com', 'fvfvev', 'Active', '12345'),
(10, 'Lab Katargam1', '098xyz', 'Sahil Golakiya ', 'sarita soc.', 9924158350, 'labkat1@gmail.com', 'dvergre', 'Active', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patientreport`
--

CREATE TABLE `patientreport` (
  `reportid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reporttypeid` int(10) NOT NULL,
  `rdparameter` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `reportdate` date NOT NULL,
  `createdby` varchar(20) NOT NULL,
  `labid` int(10) NOT NULL,
  `suggestedby` varchar(20) NOT NULL,
  `collectorid` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(10) NOT NULL,
  `reqid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `reqid`, `email`, `amount`) VALUES
(1, 22, 'patient1@gmail.com', 450),
(2, 22, 'patient1@gmail.com', 230),
(7, 23, 'patient3@gmail.com', 450),
(6, 24, 'patient4@gmail.com', 450),
(8, 25, 'patient1@gmail.com', 450),
(9, 26, 'patient2@gmail.com', 230),
(10, 29, 'patient1@gmail.com', 450);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdon` date NOT NULL,
  `secqu` varchar(50) NOT NULL,
  `answer` varchar(15) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first_name`, `last_name`, `email`, `password`, `phoneno`, `address`, `city`, `pincode`, `dob`, `status`, `createdon`, `secqu`, `answer`, `area`) VALUES
('Patient1', 'Udhna', 'patient1@gmail.com', '123456', 9876543210, 'Jaldarshan soc.', 'Surat', 395006, '2002-02-05', 'Active', '2022-03-03', 'Enter Favourite Food', 'apple', 'Udhna'),
('Patient2', 'Udhna', 'patient2@gmail.com', '12345', 987654321, 'Sai Darshan soc.', 'Surat', 395006, '2001-09-08', 'Active', '2022-03-03', 'Enter Favourite Food', 'apple', 'Udhna'),
('Patient3', 'Katargam', 'patient3@gmail.com', '12345', 876543143, 'tirupati soc.', 'Surat', 394210, '2012-06-07', 'Active', '2022-03-03', 'Enter Favourite Food', 'apple', 'Katargam'),
('Patient4', 'Katargam', 'patient4@gmail.com', '123456', 2314565478, 'maya soc.', 'Surat', 394210, '2019-07-05', 'Active', '2022-03-03', 'Enter Favourite Food', 'apple', 'Katargam'),
('nayan', 'vaghasiya', 'nayanvaghasiya7623@gmail.com', 'Bajarangi7623@', 7623897188, 'mota varacha', 'Surat', 394101, '1998-06-07', 'Active', '2022-03-11', 'Enter Favourite Food', 'apple', 'Udhna'),
('Pal', 'patel', 'pal@gmail.com', '123456', 65478394668, 'gfd', 'Surat', 394210, '0005-03-04', 'Active', '2022-03-28', 'Enter Favourite Food', 'apple', 'Udhna'),
('Palak', 'Patel', 'palak@gmail.com', '123456', 2345678956, 'dfg', 'Surat', 394210, '0005-02-04', 'Active', '2022-03-28', 'Enter Favourite Food', 'apple', 'Udhna');

-- --------------------------------------------------------

--
-- Table structure for table `reportdetail`
--

CREATE TABLE `reportdetail` (
  `rdid` int(10) NOT NULL,
  `reporttypeid` int(10) NOT NULL,
  `rdparameter` varchar(50) NOT NULL,
  `normalcount` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporttype`
--

CREATE TABLE `reporttype` (
  `reporttypeid` int(10) NOT NULL,
  `reportname` varchar(50) NOT NULL,
  `reportdescription` varchar(50) NOT NULL,
  `price` bigint(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporttype`
--

INSERT INTO `reporttype` (`reporttypeid`, `reportname`, `reportdescription`, `price`, `status`) VALUES
(1, 'Blood Report', 'bfggjdbgjgg', 200, ''),
(2, 'Dengue Report', 'jufhuhfbufjbu', 1000, ''),
(3, 'Meleria  Report', 'fhgujdfhvkjdnfbu', 400, ''),
(7, 'Thyroid', '6eryui', 400, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reqdate` date NOT NULL,
  `labid` int(10) NOT NULL,
  `reporttypeid` int(10) NOT NULL,
  `collectorid` int(10) DEFAULT NULL,
  `remark` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `transactionno` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqid`, `email`, `reqdate`, `labid`, `reporttypeid`, `collectorid`, `remark`, `status`, `area`, `transactionno`) VALUES
(25, 'patient1@gmail.com', '2022-03-18', 7, 2, NULL, 'sdf', 'Completed', 'Udhna', '0'),
(26, 'patient2@gmail.com', '2022-03-18', 9, 7, NULL, '12345', 'Completed', 'Udhna', '0'),
(27, 'patient1@gmail.com', '2022-03-21', 7, 1, NULL, 'jh', 'Pending', 'Udhna', '0'),
(28, 'patient1@gmail.com', '2022-03-22', 7, 1, NULL, 'rg', 'Pending', 'Udhna', '0'),
(29, 'patient1@gmail.com', '2022-03-28', 8, 1, NULL, 'df', 'Completed', 'Udhna', '0'),
(30, '', '2022-03-28', 7, 1, NULL, 'df', 'Pending', 'Udhna', '0'),
(31, 'patient3@gmail.com', '2022-03-28', 8, 7, NULL, 'sdf', 'Pending', 'Katargam', ''),
(32, 'patient3@gmail.com', '2022-03-28', 8, 7, NULL, 'sdf', 'Pending', 'Katargam', ''),
(33, 'patient3@gmail.com', '2022-03-28', 8, 7, NULL, 'sdf', 'Pending', 'Katargam', '34354657');

-- --------------------------------------------------------

--
-- Table structure for table `thyroid`
--

CREATE TABLE `thyroid` (
  `email` varchar(20) NOT NULL,
  `reqid` bigint(20) NOT NULL,
  `t3` bigint(20) NOT NULL,
  `t4` bigint(20) NOT NULL,
  `tsh` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thyroid`
--

INSERT INTO `thyroid` (`email`, `reqid`, `t3`, `t4`, `tsh`) VALUES
('patient2@gmail.com', 14, 1, 5, '0.90'),
('patient1@gmail.com', 17, 1, 5, '0.67'),
('patient2@gmail.com', 26, 1, 5, '0.69');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `collectorinformation`
--
ALTER TABLE `collectorinformation`
  ADD PRIMARY KEY (`collectorid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `patientreport`
--
ALTER TABLE `patientreport`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `reportdetail`
--
ALTER TABLE `reportdetail`
  ADD PRIMARY KEY (`rdid`);

--
-- Indexes for table `reporttype`
--
ALTER TABLE `reporttype`
  ADD PRIMARY KEY (`reporttypeid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `collectorinformation`
--
ALTER TABLE `collectorinformation`
  MODIFY `collectorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `labid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patientreport`
--
ALTER TABLE `patientreport`
  MODIFY `reportid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reportdetail`
--
ALTER TABLE `reportdetail`
  MODIFY `rdid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reporttype`
--
ALTER TABLE `reporttype`
  MODIFY `reporttypeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
