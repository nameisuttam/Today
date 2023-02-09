-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2023 at 11:58 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_regi`
--

CREATE TABLE `stud_regi` (
  `id` int NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `chk` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reli` varchar(30) NOT NULL,
  `age` varchar(10) NOT NULL,
  `nal` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `blood` varchar(10) NOT NULL,
  `bplace` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `pmno` varchar(20) NOT NULL,
  `adr` varchar(200) NOT NULL,
  `pcode` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stud_regi`
--

INSERT INTO `stud_regi` (`id`, `fname`, `mname`, `lname`, `dob`, `gender`, `chk`, `reli`, `age`, `nal`, `blood`, `bplace`, `grade`, `mno`, `pmno`, `adr`, `pcode`, `city`, `country`, `email`, `status`) VALUES
(61, 'Ashish', 'R', 'C', '2023-02-09', 'Male', 'Playing,Dancing,Reading', 'Hindu', '20', 'Indian', 'A+', 'ST', 'BCA', '9874563210', '6547893210', 'Deepak Nagar', '123456', 'Navsari', 'India', 'Vil@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_regi`
--
ALTER TABLE `stud_regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_regi`
--
ALTER TABLE `stud_regi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
