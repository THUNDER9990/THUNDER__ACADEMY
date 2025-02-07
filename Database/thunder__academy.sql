-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 05:36 PM
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
-- Database: `thunder__academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__record`
--

CREATE TABLE `admin__record` (
  `ID` int(255) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission__form`
--

CREATE TABLE `admission__form` (
  `ID` int(255) NOT NULL,
  `Admission_Date` varchar(50) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Standard` varchar(50) NOT NULL,
  `Date_Of_Birth` varchar(50) NOT NULL,
  `Student_Image` varchar(400) NOT NULL,
  `Residential_Address` varchar(400) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` varchar(50) NOT NULL,
  `Mobile_No` varchar(50) NOT NULL,
  `Alt_Mobile_No` varchar(50) NOT NULL,
  `Previous_Year_Marksheet` varchar(400) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Father_Occupation` varchar(50) NOT NULL,
  `Father_Mobile_No` varchar(50) NOT NULL,
  `Mother_Name` varchar(50) NOT NULL,
  `Mother_Occupation` varchar(50) NOT NULL,
  `Mother_Mobile_No` varchar(50) NOT NULL,
  `Student_Signature` varchar(400) NOT NULL,
  `Parent_Signature` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register__information`
--

CREATE TABLE `register__information` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__record`
--
ALTER TABLE `admin__record`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admission__form`
--
ALTER TABLE `admission__form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register__information`
--
ALTER TABLE `register__information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin__record`
--
ALTER TABLE `admin__record`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission__form`
--
ALTER TABLE `admission__form`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register__information`
--
ALTER TABLE `register__information`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
