-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdao_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcementName` varchar(256) NOT NULL,
  `announcementDate` date NOT NULL,
  `announcementDesc` varchar(256) NOT NULL,
  `announcementPlace` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcementName`, `announcementDate`, `announcementDesc`, `announcementPlace`) VALUES
(1, 'PDAO Meeting', '2023-12-01', 'Meeting sa PDAO', 'PDAO Office'),
(2, 'PWD Event', '2023-12-03', 'Christmas Party @ PWD Event', 'PDAO Office'),
(4, 'Test Event', '2023-12-18', 'Test Time Check LOLs', 'PDAO Office');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `benefitName` varchar(256) NOT NULL,
  `benefitDescription` varchar(256) NOT NULL,
  `benefitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `benefitName`, `benefitDescription`, `benefitDate`) VALUES
(1, '20% Discount on Transportation', 'Pay as much as 11.00php', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permID` int(11) NOT NULL,
  `permMod` varchar(5) NOT NULL,
  `permDesc` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permID`, `permMod`, `permDesc`) VALUES
(1, 'USR', 'Get Users'),
(2, 'USR', 'Save Users'),
(3, 'USR', 'Delete Users');

-- --------------------------------------------------------

--
-- Table structure for table `pwd`
--

CREATE TABLE `pwd` (
  `id` int(11) NOT NULL,
  `accountType` varchar(256) NOT NULL,
  `pwdNumber` varchar(256) NOT NULL,
  `dateApplied` date NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `middleName` varchar(256) NOT NULL,
  `suffix` varchar(256) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` varchar(256) NOT NULL,
  `civilStatus` varchar(256) NOT NULL,
  `disabilityType` varchar(256) NOT NULL,
  `disabilityCause` varchar(256) NOT NULL,
  `houseNumber` varchar(256) NOT NULL,
  `barangay` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `province` varchar(256) NOT NULL,
  `region` varchar(256) NOT NULL,
  `landlineNumber` varchar(256) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `educationalAttainment` varchar(256) NOT NULL,
  `employmentStatus` varchar(256) NOT NULL,
  `employmentCategory` varchar(256) NOT NULL,
  `employmentType` varchar(256) NOT NULL,
  `occupation` varchar(256) NOT NULL,
  `orgAffiliated` varchar(256) NOT NULL,
  `orgContactPerson` varchar(256) NOT NULL,
  `orgOfficeAddress` varchar(256) NOT NULL,
  `orgContactNumber` varchar(256) NOT NULL,
  `sssNumber` varchar(256) NOT NULL,
  `gsisNumber` varchar(256) NOT NULL,
  `pagibigNumber` varchar(256) NOT NULL,
  `philsysNumber` varchar(256) NOT NULL,
  `philhealthNumber` varchar(256) NOT NULL,
  `fathersName` varchar(256) NOT NULL,
  `mothersName` varchar(256) NOT NULL,
  `guardiansName` varchar(256) NOT NULL,
  `applicantName` varchar(256) NOT NULL,
  `guardiansName_2` varchar(256) NOT NULL,
  `representativeName` varchar(256) NOT NULL,
  `pwdStatus` varchar(256) NOT NULL DEFAULT 'Active',
  `avatar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pwd`
--

INSERT INTO `pwd` (`id`, `accountType`, `pwdNumber`, `dateApplied`, `lastName`, `firstName`, `middleName`, `suffix`, `birthDate`, `gender`, `civilStatus`, `disabilityType`, `disabilityCause`, `houseNumber`, `barangay`, `city`, `province`, `region`, `landlineNumber`, `mobileNumber`, `email`, `educationalAttainment`, `employmentStatus`, `employmentCategory`, `employmentType`, `occupation`, `orgAffiliated`, `orgContactPerson`, `orgOfficeAddress`, `orgContactNumber`, `sssNumber`, `gsisNumber`, `pagibigNumber`, `philsysNumber`, `philhealthNumber`, `fathersName`, `mothersName`, `guardiansName`, `applicantName`, `guardiansName_2`, `representativeName`, `pwdStatus`, `avatar`) VALUES
(1, 'new', '10-3503-040-4920324', '2023-11-11', 'Mendiola', 'Carlos', 'Petron', '', '2015-06-04', 'Male', 'Single', 'Mental Disability', 'Others', 'Purok 2', 'Tipanoy', 'Iligan City', 'Lanao del Norte', '10', '', 912345678, 'carlmendiola@gmail.com', 'Junior High School', '-none-', '-none-', '-none-', '-none-', 'Mga JAGGARRS Organization', 'Rhod Michael Lano Adalid', 'Plasteradas', '', '', '', '', '', '', 'Adalid, Rhod Michael L.', 'Quimod, Regine Mae T.', 'Ansaldo, Gabriel', 'Arakashi, Riko', 'Ansaldo, Gabriel', 'Masiglat, David', 'Active', ''),
(2, 'renewal', '10-3504-022-104935', '2023-12-01', 'Dela Cruz', 'Juan', 'De Leon', '', '2001-06-13', 'Male', 'Single', 'Mental Disability', 'Select Cause', 'Purok 8, Canaway', 'Tibanga', 'Iligan City', 'Lanao del Norte', '10', '4921234', 2147483647, 'juandelacruz@gmail.com', 'College', 'Select Status', 'Select Category', 'Select Type', 'Select Occupation', 'N/A', 'N/A', 'N/A', '00', '0123-456-7890', '0123-456-7890', '0123-456-7890', '0123-4567-8910-1234', '0123-456-7890', 'Dela Cruz, Jose', 'Dela Cruz, Maria', 'De Leon, Jose Maria', 'Dela Cruz, Juan', 'De Leon, Jose Maria', 'Sotto, Marvic C.', 'Active', ''),
(10, 'new', '10-3504-002-216806', '2023-12-08', 'Alonto', 'Romeo', 'Alonto', '', '1963-12-07', 'Male', 'Married', 'Mental Disability', 'Select Cause', 'Purok 8, Canaway', 'Tibanga', 'Iligan City', 'Lanao del Norte', '', '', 2147483647, 'juandelacruz@gmail.com', 'College', 'Unemployed', 'Select Category', 'Select Type', 'Select Occupation', 'N/A', 'N/A', '', '', '0123-456-7890', '0123-456-7890', '0123-456-7890', '0123-4567-8910-1234', '0123-456-7890', '', '', '', '', '', '', 'Inactive', ''),
(14, '', '10-3504-017-819981', '0000-00-00', 'TESTING', '', '', '', '0000-00-00', 'Select Gender', 'Select Status', 'Select Type', 'Select Cause', '', '', '', '', '', '', 0, '', 'Select Attainment', 'Select Status', 'Select Category', 'Select Type', 'Select Occupation', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select Status', '');

-- --------------------------------------------------------

--
-- Table structure for table `roleperms`
--

CREATE TABLE `roleperms` (
  `roleID` int(11) NOT NULL,
  `permID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roleperms`
--

INSERT INTO `roleperms` (`roleID`, `permID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `roleName`) VALUES
(1, 'Admin'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL,
  `userType` varchar(256) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `avatar`, `userType`) VALUES
(7, 'tonio.fabrigar', 'sweetsidebummer', 'Juan Antonio', 'Fabrigar', 'ja.fabrigar@my.smciligan.edu.ph', '', 'admin'),
(8, 'rm.adalid', '12141998', 'Rhod Michael', 'Adalid', 'rm.adalid@my.smciligan.edu.ph', '', 'admin'),
(9, 'pwd_user', 'pdao2023', 'PDAO', 'USER', 'user@pdao.com', '', 'user'),
(10, 'pwdadmin', 'pwdadmin', 'PDAO', 'Admin', 'pdao@pdao.com', '', 'admin'),
(11, 'pwdstaff', 'pwdstaff', 'PDAO', 'STAFF', 'staff@pdao.com', '', 'staff'),
(13, 'ronilo', 'ronilom', 'Ronilo', 'Micabalo', 'ronilo_micabalo@gmail.com', '', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permID`),
  ADD KEY `permMod` (`permMod`);

--
-- Indexes for table `pwd`
--
ALTER TABLE `pwd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roleperms`
--
ALTER TABLE `roleperms`
  ADD PRIMARY KEY (`roleID`,`permID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleID` (`userType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pwd`
--
ALTER TABLE `pwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
