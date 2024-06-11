-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 10:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charitable`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donor_fname` varchar(255) NOT NULL,
  `donor_lname` varchar(255) NOT NULL,
  `donor_rollno` bigint(15) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `val_fname` varchar(255) NOT NULL,
  `val_lname` varchar(255) NOT NULL,
  `val_rollno` bigint(15) NOT NULL,
  `val_email` varchar(255) NOT NULL,
  `val_degree` varchar(50) NOT NULL,
  `val_dept` varchar(25) NOT NULL,
  `payment` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `donor_fname`, `donor_lname`, `donor_rollno`, `donor_email`, `val_fname`, `val_lname`, `val_rollno`, `val_email`, `val_degree`, `val_dept`, `payment`, `amount`, `status`, `datetime`) VALUES
(1623277166, 'Muhammad', 'Awais', 19010819111, '19010819-111@uog.edu.pk', 'Qnadeel', 'Zulfiqar', 19010819076, '19010819-076@uog.edu.pk', 'MSc - Computer Science', 'CS and IT', 'on', 1000, 'Completed from Volunteer', '2021-06-21 15:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll_no` bigint(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `campus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`first_name`, `last_name`, `email`, `roll_no`, `password`, `gender`, `contact`, `campus`) VALUES
('Muhammad', 'Awais', 'awaismunir320@gmail.com', 19010819111, 'admind', 'Male', 3137884973, 'GT Road - City Campus');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `roll_no` bigint(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `msg` varchar(5000) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`first_name`, `last_name`, `roll_no`, `email`, `degree`, `dept`, `msg`, `amount`) VALUES
('Qnadeel', 'Zulfiqar', 19010819076, '19010819-076@uog.edu.pk', 'MSc - Computer Science', 'CS and IT', 'Need Help..!', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll_no` bigint(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `contact` bigint(25) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `matric_degree` varchar(25) NOT NULL,
  `matric_avg` double NOT NULL,
  `inter_degree` varchar(25) NOT NULL,
  `inter_avg` double NOT NULL,
  `degree` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `cgpa` double NOT NULL,
  `members` int(11) NOT NULL,
  `father_status` varchar(255) NOT NULL,
  `family_exp` int(11) NOT NULL,
  `acco_exp` int(11) NOT NULL,
  `utility_exp` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `resident` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`first_name`, `last_name`, `email`, `roll_no`, `password`, `gender`, `contact`, `campus`, `matric_degree`, `matric_avg`, `inter_degree`, `inter_avg`, `degree`, `dept`, `cgpa`, `members`, `father_status`, `family_exp`, `acco_exp`, `utility_exp`, `income`, `transport`, `resident`, `status`) VALUES
('Qandeel', 'Zulfiqar', '19010819-076@uog.edu.pk', 19010819076, '12345', 'Female', 3117788336, 'GT Road - City Campus', 'Computer Science', 70, 'FSc - Pre Engineering', 80, 'MSc - Computer Science', 'CS and IT', 3.5, 7, 'Alive', 11000, 7000, 4000, 15000, 'Yes', 'Yes', 'Registered'),
('Muhammad', 'Awais', '19010819-111@uog.edu.pk', 19010819111, 'admin', 'Male', 3137884973, 'GT Road - City Campus', 'Bio Science', 76.45, 'ICS - Math & Stat', 72.55, 'MSc - Computer Science', 'CS and IT', 3.4, 5, 'Alive', 10000, 5000, 8000, 20000, 'Yes', 'Yes', 'Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
