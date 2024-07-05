-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 05:31 AM
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
-- Database: `mysnehabhavan`
--

-- --------------------------------------------------------

--
-- Table structure for table `participantdetails`
--

CREATE TABLE `participantdetails` (
  `ParticipantID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `panchayat` varchar(100) NOT NULL,
  `taluk` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `EducationLevel` varchar(100) DEFAULT NULL,
  `VocationalTraining` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `BirthCertificate` varchar(50) DEFAULT NULL,
  `DisabilityCertificate` varchar(50) DEFAULT NULL,
  `Udid` varchar(200) NOT NULL,
  `AadharCardNumber` varchar(50) DEFAULT NULL,
  `ElectionID` varchar(50) DEFAULT NULL,
  `RationCard` varchar(50) DEFAULT NULL,
  `OtherIdentity` varchar(255) DEFAULT NULL,
  `AssistiveDevices` varchar(200) NOT NULL,
  `Pension` tinyint(1) DEFAULT NULL,
  `Scholarship` tinyint(1) DEFAULT NULL,
  `HealthInsurance` tinyint(1) DEFAULT NULL,
  `Asraya` tinyint(1) DEFAULT NULL,
  `KSRTCConcession` tinyint(1) DEFAULT NULL,
  `PrivateBusConcession` tinyint(1) DEFAULT NULL,
  `RailwayConcession` tinyint(1) DEFAULT NULL,
  `Aswasakiran` tinyint(1) DEFAULT NULL,
  `OtherBenefits` varchar(255) DEFAULT NULL,
  `Membership` varchar(255) DEFAULT NULL,
  `BankAccountType` varchar(50) DEFAULT NULL,
  `BankDetails` varchar(255) DEFAULT NULL,
  `DisabilityType` varchar(100) DEFAULT NULL,
  `AgeOfOnset` int(11) DEFAULT NULL,
  `Severity` varchar(100) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  `EmploymentStatus` varchar(100) DEFAULT NULL,
  `MonthlyIncome` float DEFAULT NULL,
  `TypeOfWork` varchar(100) DEFAULT NULL,
  `RegisteredWithEmploymentExchange` tinyint(1) DEFAULT NULL,
  `HealthcareCoverageSource` text DEFAULT NULL,
  `MonthlyHealthcareExpenses` decimal(10,2) DEFAULT NULL,
  `HealthcareServicesUsed` text DEFAULT NULL,
  `HousingType` varchar(200) NOT NULL,
  `MonthlyHousingCosts` int(11) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `SiblingName` varchar(255) NOT NULL,
  `FatherAge` int(11) NOT NULL,
  `MotherAge` int(11) NOT NULL,
  `SiblingAge` int(11) NOT NULL,
  `FatherEducation` varchar(255) NOT NULL,
  `MotherEducation` varchar(255) NOT NULL,
  `SiblingEducation` varchar(255) NOT NULL,
  `FatherOccupation` varchar(255) NOT NULL,
  `MotherOccupation` varchar(255) NOT NULL,
  `SiblingOccupation` varchar(255) NOT NULL,
  `FatherSalary` int(11) NOT NULL,
  `MotherSalary` int(11) NOT NULL,
  `SiblingSalary` int(11) NOT NULL,
  `ParentsPension` varchar(20) NOT NULL,
  `IncomeLevel` decimal(10,2) DEFAULT NULL,
  `RationCardType` text DEFAULT NULL,
  `LandOwnership` varchar(200) NOT NULL,
  `LandArea` int(11) NOT NULL,
  `Houseownership` varchar(200) NOT NULL,
  `HouseArea` int(11) NOT NULL,
  `HouseType` varchar(200) NOT NULL,
  `WaterSource` text DEFAULT NULL,
  `CookingFuelSource` text DEFAULT NULL,
  `ToiletType` text DEFAULT NULL,
  `Transportation` text DEFAULT NULL,
  `EmployableSkills` varchar(20) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participantdetails`
--

INSERT INTO `participantdetails` (`ParticipantID`, `Name`, `Age`, `Gender`, `panchayat`, `taluk`, `ward`, `EducationLevel`, `VocationalTraining`, `Address`, `PhoneNumber`, `Email`, `BirthCertificate`, `DisabilityCertificate`, `Udid`, `AadharCardNumber`, `ElectionID`, `RationCard`, `OtherIdentity`, `AssistiveDevices`, `Pension`, `Scholarship`, `HealthInsurance`, `Asraya`, `KSRTCConcession`, `PrivateBusConcession`, `RailwayConcession`, `Aswasakiran`, `OtherBenefits`, `Membership`, `BankAccountType`, `BankDetails`, `DisabilityType`, `AgeOfOnset`, `Severity`, `Duration`, `EmploymentStatus`, `MonthlyIncome`, `TypeOfWork`, `RegisteredWithEmploymentExchange`, `HealthcareCoverageSource`, `MonthlyHealthcareExpenses`, `HealthcareServicesUsed`, `HousingType`, `MonthlyHousingCosts`, `FatherName`, `MotherName`, `SiblingName`, `FatherAge`, `MotherAge`, `SiblingAge`, `FatherEducation`, `MotherEducation`, `SiblingEducation`, `FatherOccupation`, `MotherOccupation`, `SiblingOccupation`, `FatherSalary`, `MotherSalary`, `SiblingSalary`, `ParentsPension`, `IncomeLevel`, `RationCardType`, `LandOwnership`, `LandArea`, `Houseownership`, `HouseArea`, `HouseType`, `WaterSource`, `CookingFuelSource`, `ToiletType`, `Transportation`, `EmployableSkills`) VALUES
(22, 'Eby John jb', 15, 'Male', 'Kanjirappally Block Panchayat', 'Kanjirappally', '5', 'Primary School or Elementary School', '', 'Vadasseri house, kuttiattu junction, cherthala.', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'own', '', 'mental-illness', 0, '', '', '', 0, '', 0, '', '0.00', '', '', 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', 1000000, 0, 0, '', '0.00', 'PHH', '', 6, 'rented', 20, 'concrete', '', '', '', '', 'No'),
(56, 'dain', 20, 'Male', 'Vaikom Municipality', 'Vaikom', '5', 'Primary School or Elementary School', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'own', '', 'blindness', 25, '', '', '', 0, '', 1, '', '0.00', '', '', 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '0.00', 'APL', '', 0, 'rented', 0, 'asbestos', '', '', '', '', 'No'),
(456, 'Eby John', 11, 'Male', 'Akalakunnam Grama Panchayat', 'Changanassery', '', 'Primary School or Elementary School', '', 'Vadasseri house, kuttiattu junction, cherthala.', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'own', '', 'blindness', 0, '', '', '', 0, '', 0, '', '0.00', '', '', 0, 'fdvfdv', 'sdf', '', 0, 0, 0, '', '', '', '', '', '', 3234, 233, 0, '', '0.00', 'AAY', '', 8, 'owned', 0, 'concrete', '', '', '', '', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participantdetails`
--
ALTER TABLE `participantdetails`
  ADD PRIMARY KEY (`ParticipantID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
