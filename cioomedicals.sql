-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 03:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cioomedicals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `apic` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `apic`, `createddate`) VALUES
(1, 'Daniel Ezeali', 'ezealiokechukwu1999@gmail.com', '202cb962ac59075b964b07152d234b70', '6452ff18ea4258.49423227.jpg', '23-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `appintment`
--

CREATE TABLE `appintment` (
  `id` int(11) NOT NULL,
  `doc_special` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `atime` varchar(255) NOT NULL,
  `apurpose` varchar(255) NOT NULL,
  `adate` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appintment`
--

INSERT INTO `appintment` (`id`, `doc_special`, `doc_name`, `atime`, `apurpose`, `adate`, `createddate`, `deleted`) VALUES
(1, 'General Physician', 'Dr. Victor Jeo', '16:45', 'I need urgent attention', '2023-05-17', '2023:05:10', 1),
(2, 'Dentist', 'Dr. Victor Jeo', '03:58', 'I need attention now pls', '2023-05-12', '2023:05:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `createddate`, `deleted`) VALUES
(2, 'General Physician', '2023-05-08', 1),
(3, 'Dentist', '2023-05-08', 1),
(5, 'Ear-Nose-Throat (Ent) Specialist', '2023-05-08 02:02:00', 1),
(7, 'Homeopath', '2023-05-10 01:42:05', 1),
(8, 'Dietary', '2023-05-10 01:43:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pcode` int(11) NOT NULL,
  `dpic` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `state` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `address2`, `mobileno`, `dob`, `pcode`, `dpic`, `dept`, `descp`, `gender`, `state`, `deleted`) VALUES
(4, 'Victor Jeo', 'vic@gmail.com', '123', 'Owerri', '08164869025', '2023-05-05', 246810, '6453b120bb4132.39578324.jpg', 'Gynecologist/Obstetrician', 'he is good', 'Male', 'Rajastan', 1),
(5, 'LivingStone Chibueze', 'eze@gmail.com', '123', 'Afikpo', '08024756185', '2020-10-03', 3456789, '64542cd41dec88.68563015.jpg', 'Health', 'He is a nice doctor', 'Male', 'Maharastra', 1),
(7, 'Network Obi', 'net@gmail.com', '123', 'Lagos Nigeria', '08164869025', '2023-05-15', 5678910, '64581be021c186.48139207.jpg', 'Dentist', 'i like him', 'Male', 'Maharastra', 1),
(8, 'Ikenna Monday', 'monday@gmail.com', '123', 'Lagos Nigeria', '08164869025', '1993-09-02', 1456789, '64599b0b073967.85220902.jpg', 'Dentist', 'i am the solution', 'Male', 'Maharastra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `email`, `phone`, `address2`, `dept`, `doctor`, `message`, `createddate`, `deleted`) VALUES
(2, 'Ekeh Godwin', 'ezealidaniel29@gmail.com', '8164869025', 'Imo State', 'General Physician', 'Dr. Network Obi', 'I need help now', '2023-05-08 12:05:58', 1),
(3, 'John Deo', 'deo@gmail.com', '07041904225', 'Owerri', 'Dentist', 'Dr. LivingStone Chibueze', 'I am sick', '2023-05-09 13:05:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `med_name` varchar(255) NOT NULL,
  `med_image` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `med_name`, `med_image`, `createddate`, `deleted`) VALUES
(1, 'Para', '64584f8db29840.98484649.jpg', '2023-05-08 03:25:33', 1),
(2, 'Acetaminophen', '645852673cb4d7.31218050.jpg', '2023-05-08 03:37:43', 1),
(3, 'Azithromycin', '64585342c4d581.99333218.jpg', '2023-05-08 03:41:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mstatus` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
  `genotype` varchar(255) NOT NULL,
  `mchallenge` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `password`, `address2`, `title`, `phone`, `gender`, `mstatus`, `dob`, `bgroup`, `genotype`, `mchallenge`, `pic`, `createddate`, `deleted`) VALUES
(2, 'Kalu Uchenna', 'kalu@gmail.com', '123', 'Lagos Nigeria', 'Mr.', '07041904225', 'Male', 'Married', '1990-09-09', 'A+', 'A+', 'Mentally sick', '645a3737a114b5.75616637.jpg', '23-05-09', 1),
(4, 'Oti Williams', 'will@gmail.com', '123', '24, Abakaliki Read', 'Master', '07037080692', 'Male', 'Single', '2002-05-03', 'A+', 'A+', 'Not medically fit', '645b1f2cc957f9.09917254.jpg', '23-05-10', 1),
(5, 'Ezeali Daniel', 'eze@gmail.com', '123', 'No 2 Abakaliki Read', 'Mr', '07037080692', 'Male', 'Married', '2001-07-05', 'A+', 'A+', 'many things', '645c4706809264.41769434.jpg', '23-05-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `presc_id` int(11) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`presc_id`, `medicine`, `instructions`, `id`) VALUES
(1, 'Acetaminophen', 'Twice in a day (morning and night)', 5),
(3, 'Acetaminophen', 'Twice in a day (morning and night)', 2),
(4, 'Acetaminophen', 'Twice in a day (morning and night)', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appintment`
--
ALTER TABLE `appintment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`presc_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appintment`
--
ALTER TABLE `appintment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `presc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`id`) REFERENCES `patient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
