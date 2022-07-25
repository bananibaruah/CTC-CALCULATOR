-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 08:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jarvis`
--

-- --------------------------------------------------------

--
-- Table structure for table `olt`
--

CREATE TABLE `olt` (
  `Employee_Id` varchar(50) DEFAULT NULL,
  `Employee_Name` varchar(50) DEFAULT NULL,
  `Middle_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Contact_No` varchar(11) DEFAULT NULL,
  `Email_ID` varchar(70) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Marital_Status` varchar(20) DEFAULT NULL,
  `Address_Line_1` varchar(100) DEFAULT NULL,
  `Address_Line_2` varchar(100) DEFAULT NULL,
  `Address_Line_3` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Pincode` varchar(10) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `Sd` date DEFAULT NULL,
  `ed` date DEFAULT NULL,
  `dojtype` varchar(20) DEFAULT NULL,
  `wed` varchar(20) DEFAULT NULL,
  `wsd` varchar(20) DEFAULT NULL,
  `aloc` varchar(20) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `SrNo` text DEFAULT NULL,
  `Offer_Status` varchar(50) DEFAULT NULL,
  `Joining_Status` varchar(70) DEFAULT NULL,
  `Current_Status` varchar(100) DEFAULT NULL,
  `Type_of_Hire` varchar(70) DEFAULT NULL,
  `Requirement_Type` varchar(70) DEFAULT NULL,
  `Replaced_Emp_Namekale` varchar(70) DEFAULT NULL,
  `Ref_No_of_Offer_Letter` varchar(70) DEFAULT NULL,
  `New_Ref_No_of_Offer_Letter` varchar(20) DEFAULT NULL,
  `Offer_Date` date DEFAULT NULL,
  `Offer_Dt_Text` varchar(50) DEFAULT NULL,
  `Offer_Month__Year` varchar(50) DEFAULT NULL,
  `Old_Department` varchar(70) DEFAULT NULL,
  `Business_Unit` varchar(50) DEFAULT NULL,
  `Sub_Unit` varchar(100) DEFAULT NULL,
  `New_Department` varchar(70) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `Role` varchar(100) DEFAULT NULL,
  `Skills` varchar(200) DEFAULT NULL,
  `Skills_Category` varchar(100) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `DOJ_Text` varchar(50) DEFAULT NULL,
  `Joined_Month__Year` varchar(50) DEFAULT NULL,
  `Working_Days` int(10) DEFAULT NULL,
  `Ref_No_of_Termination_Letter` varchar(30) DEFAULT NULL,
  `Consultant_Contract_date_Ref` varchar(100) DEFAULT NULL,
  `Highest_Qualification` varchar(100) DEFAULT NULL,
  `Total_Exp_in_yrs` varchar(20) DEFAULT NULL,
  `Rel_Exp_in_yrs` varchar(20) DEFAULT NULL,
  `Present_Employer` varchar(100) DEFAULT NULL,
  `Delivery_Leader` varchar(100) DEFAULT NULL,
  `Delivery_Head` varchar(100) DEFAULT NULL,
  `Reporting_Manager` varchar(100) DEFAULT NULL,
  `Client_Name` varchar(100) DEFAULT NULL,
  `Source` varchar(100) DEFAULT NULL,
  `Source_Name` varchar(100) DEFAULT NULL,
  `Recruiter_Name` varchar(100) DEFAULT NULL,
  `Medical_Status` varchar(200) DEFAULT NULL,
  `Area_of_Operation` varchar(100) DEFAULT NULL,
  `Base_Location` varchar(100) DEFAULT NULL,
  `Posting_Location` varchar(100) DEFAULT NULL,
  `Eligible_for_Relocation_Allowance` varchar(50) DEFAULT NULL,
  `Relocation_Allowance_Clause` varchar(200) DEFAULT NULL,
  `MG` varchar(300) DEFAULT NULL,
  `AG` varchar(300) DEFAULT NULL,
  `Mail_Subject__Offer_Letter_Name` varchar(100) DEFAULT NULL,
  `Adhar_Card_Details` varchar(50) DEFAULT NULL,
  `Pan_Card_Details` varchar(50) DEFAULT NULL,
  `Fresher_OLBond` varchar(100) DEFAULT NULL,
  `Bond_Expiry_Date` date DEFAULT NULL,
  `Bond_Amount` varchar(300) DEFAULT NULL,
  `Retention_Bonus_Monthly` varchar(300) DEFAULT NULL,
  `Retention_Bonus_Annually` varchar(300) DEFAULT NULL,
  `Joining_Bonus` varchar(300) DEFAULT NULL,
  `Offer_Prepared_By` varchar(300) DEFAULT NULL,
  `Offer_Acceptance` varchar(300) DEFAULT NULL,
  `Offer_Acceptance_Date` varchar(300) DEFAULT NULL,
  `Contract_Start_Date` date DEFAULT NULL,
  `Contract_End_Date` date DEFAULT NULL,
  `Name_of_Authorized_Signatory` varchar(150) DEFAULT NULL,
  `Designation_of_Authorized_Signatory` varchar(150) DEFAULT NULL,
  `Old_CTC_` varchar(300) DEFAULT NULL,
  `ctc` varchar(300) DEFAULT NULL,
  `basic` varchar(20) DEFAULT NULL,
  `hra` varchar(20) DEFAULT NULL,
  `Conveyance_Allowance` varchar(20) DEFAULT NULL,
  `Statutory_Bonus` varchar(20) DEFAULT NULL,
  `LTA` varchar(20) DEFAULT NULL,
  `Executive_Allowance` varchar(20) DEFAULT NULL,
  `FOOD_ALLOWANCE` varchar(20) DEFAULT NULL,
  `MOBILE_REIMBURSEMENT` varchar(20) DEFAULT NULL,
  `ATTIRE_ALLOWANCE` varchar(20) DEFAULT NULL,
  `VEHICLE_REIMBURSEMENT` varchar(20) DEFAULT NULL,
  `RETENTION_ALLOWANCE` varchar(20) DEFAULT NULL,
  `Total_A` varchar(20) DEFAULT NULL,
  `PF` varchar(20) DEFAULT NULL,
  `ESIC` varchar(300) DEFAULT NULL,
  `Gratuity` varchar(30) DEFAULT NULL,
  `Total_B` varchar(30) DEFAULT NULL,
  `TOTAL_AB` varchar(30) DEFAULT NULL,
  `VARIABLE_PAY` varchar(30) DEFAULT NULL,
  `STRB` varchar(300) DEFAULT NULL,
  `RB` varchar(30) DEFAULT NULL,
  `LTotal` varchar(30) DEFAULT NULL,
  `TOTAL` varchar(30) DEFAULT NULL,
  `jbamount` varchar(30) DEFAULT NULL,
  `olt_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olt`
--

INSERT INTO `olt` (`Employee_Id`, `Employee_Name`, `Middle_Name`, `Last_Name`, `Contact_No`, `Email_ID`, `Date_of_Birth`, `Gender`, `Marital_Status`, `Address_Line_1`, `Address_Line_2`, `Address_Line_3`, `City`, `Pincode`, `state`, `Sd`, `ed`, `dojtype`, `wed`, `wsd`, `aloc`, `Title`, `SrNo`, `Offer_Status`, `Joining_Status`, `Current_Status`, `Type_of_Hire`, `Requirement_Type`, `Replaced_Emp_Namekale`, `Ref_No_of_Offer_Letter`, `New_Ref_No_of_Offer_Letter`, `Offer_Date`, `Offer_Dt_Text`, `Offer_Month__Year`, `Old_Department`, `Business_Unit`, `Sub_Unit`, `New_Department`, `grade`, `Position`, `Role`, `Skills`, `Skills_Category`, `doj`, `DOJ_Text`, `Joined_Month__Year`, `Working_Days`, `Ref_No_of_Termination_Letter`, `Consultant_Contract_date_Ref`, `Highest_Qualification`, `Total_Exp_in_yrs`, `Rel_Exp_in_yrs`, `Present_Employer`, `Delivery_Leader`, `Delivery_Head`, `Reporting_Manager`, `Client_Name`, `Source`, `Source_Name`, `Recruiter_Name`, `Medical_Status`, `Area_of_Operation`, `Base_Location`, `Posting_Location`, `Eligible_for_Relocation_Allowance`, `Relocation_Allowance_Clause`, `MG`, `AG`, `Mail_Subject__Offer_Letter_Name`, `Adhar_Card_Details`, `Pan_Card_Details`, `Fresher_OLBond`, `Bond_Expiry_Date`, `Bond_Amount`, `Retention_Bonus_Monthly`, `Retention_Bonus_Annually`, `Joining_Bonus`, `Offer_Prepared_By`, `Offer_Acceptance`, `Offer_Acceptance_Date`, `Contract_Start_Date`, `Contract_End_Date`, `Name_of_Authorized_Signatory`, `Designation_of_Authorized_Signatory`, `Old_CTC_`, `ctc`, `basic`, `hra`, `Conveyance_Allowance`, `Statutory_Bonus`, `LTA`, `Executive_Allowance`, `FOOD_ALLOWANCE`, `MOBILE_REIMBURSEMENT`, `ATTIRE_ALLOWANCE`, `VEHICLE_REIMBURSEMENT`, `RETENTION_ALLOWANCE`, `Total_A`, `PF`, `ESIC`, `Gratuity`, `Total_B`, `TOTAL_AB`, `VARIABLE_PAY`, `STRB`, `RB`, `LTotal`, `TOTAL`, `jbamount`, `olt_Id`) VALUES
(NULL, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Test', 'Test', 'Test', 'Test', 'Test', 'MAHARASHTRA', '2022-07-16', '2022-07-31', '2022-07-01', 'monday', 'friday', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', 'Test', NULL, NULL, NULL, '2022-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 1),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'MAHARASHTRA', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', '', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 2),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'MAHARASHTRA', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', '', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 3),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'MAHARASHTRA', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', '', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 4),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'MAHARASHTRA', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', '', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 5),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'MAHARASHTRA', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F00', '', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250000', '99600', '49800', '19200', '38568', NULL, '15480', NULL, NULL, NULL, NULL, NULL, '222648', '20742', '6612', NULL, '27354', NULL, NULL, NULL, NULL, '250002', '250002', '', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `olt`
--
ALTER TABLE `olt`
  ADD PRIMARY KEY (`olt_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `olt`
--
ALTER TABLE `olt`
  MODIFY `olt_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
