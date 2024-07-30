-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 08:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railways`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `sno` int(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `depot` varchar(100) NOT NULL,
  `coachno` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rly` varchar(100) NOT NULL,
  `shellno` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `base` varchar(100) NOT NULL,
  `acnac` varchar(100) NOT NULL,
  `builtby` varchar(100) NOT NULL,
  `builtdt` varchar(100) NOT NULL,
  `postn` varchar(100) NOT NULL,
  `podt` varchar(100) NOT NULL,
  `rd` varchar(100) NOT NULL,
  `iostn` varchar(100) DEFAULT NULL,
  `iodt` varchar(100) DEFAULT NULL,
  `trainno` varchar(100) NOT NULL,
  `rakeno` varchar(100) NOT NULL,
  `built` varchar(100) NOT NULL,
  `purdt` varchar(100) NOT NULL,
  `recddt` varchar(100) NOT NULL,
  `commdt` varchar(100) NOT NULL,
  `lastshop` varchar(100) NOT NULL,
  `scshop` varchar(100) NOT NULL,
  `scdt` varchar(100) NOT NULL,
  `wspmake` varchar(100) NOT NULL,
  `fibamake` varchar(100) NOT NULL,
  `fiba` varchar(100) NOT NULL,
  `fibadirt` varchar(100) NOT NULL,
  `cbcirs` varchar(100) NOT NULL,
  `cbcmake` varchar(100) NOT NULL,
  `cbcmaken` varchar(100) NOT NULL,
  `junction` varchar(100) NOT NULL,
  `rfid` varchar(100) NOT NULL,
  `rdso` varchar(100) NOT NULL,
  `coupling` varchar(100) NOT NULL,
  `flooring` varchar(100) NOT NULL,
  `toilettype` varchar(100) NOT NULL,
  `biovaccum` varchar(100) NOT NULL,
  `fire` varchar(100) NOT NULL,
  `automatic` varchar(100) NOT NULL,
  `fdss` varchar(100) NOT NULL,
  `fps` varchar(100) NOT NULL,
  `fdssmake` varchar(100) NOT NULL,
  `cctvmake` varchar(100) NOT NULL,
  `cctv` varchar(100) NOT NULL,
  `automaticdoor` varchar(100) NOT NULL,
  `prflushing` varchar(100) NOT NULL,
  `flushtype` varchar(100) NOT NULL,
  `pressurised` varchar(100) NOT NULL,
  `prflsgmake` varchar(100) NOT NULL,
  `papisystem` varchar(100) NOT NULL,
  `pcvocv` varchar(100) NOT NULL,
  `suspension` varchar(100) NOT NULL,
  `airmake` varchar(100) NOT NULL,
  `aircapacity` varchar(100) NOT NULL,
  `seatcapacity` varchar(100) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`sno`, `division`, `depot`, `coachno`, `class`, `rly`, `shellno`, `type`, `base`, `acnac`, `builtby`, `builtdt`, `postn`, `podt`, `rd`, `iostn`, `iodt`, `trainno`, `rakeno`, `built`, `purdt`, `recddt`, `commdt`, `lastshop`, `scshop`, `scdt`, `wspmake`, `fibamake`, `fiba`, `fibadirt`, `cbcirs`, `cbcmake`, `cbcmaken`, `junction`, `rfid`, `rdso`, `coupling`, `flooring`, `toilettype`, `biovaccum`, `fire`, `automatic`, `fdss`, `fps`, `fdssmake`, `cctvmake`, `cctv`, `automaticdoor`, `prflushing`, `flushtype`, `pressurised`, `prflsgmake`, `papisystem`, `pcvocv`, `suspension`, `airmake`, `aircapacity`, `seatcapacity`, `additional`, `remarks`) VALUES
(5, 'SL1', '087223', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'icf', 'BZA', 'nac', 'icf', '2024-01-01', '', '', '', '', '', '', '', '', '', '', '', 'ss-3', '', '', '', '', '', '', 'cbc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'SL1', '087223', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'other', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'SL23', '087223', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'LHB', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '12345', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'SL23', '087223', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'LHB', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '12345', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'SL23', '087223', 'LGDS', 'GS', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'SL267', '08724', 'LGDS', 'GS', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'SL269', '08724', 'LGDS', 'GS', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '12345', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'SL261', '08724', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'SL261', '08724', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'SL261', '08724', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'SL261', '08724', 'LGDS', 'MTM', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '', '', '', '67890', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'SL267', '', '', '', '', '', '', '', 'AC', 'ICF', '', '', '', '', NULL, NULL, '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'SL1', '', '', '', '', '', 'ICF', '', 'AC', 'ICF', '', '', '', '', NULL, NULL, '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'SL23', '087223', 'dnsjhdbnlew', 'SLR', 'BVCX', '123456', 'LHB', 'MTM', 'AC', 'ICF', '', '', '', '', '', '', '67895', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'SL23', '087223', 'dnsjhdbnlew', 'SLR', 'BVCX', '123456', 'ICF', 'MTM', 'AC', 'ICF', '2024-06-20', '', '2024-06-20', '2024-06-20', '', '', '67895', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'SL23', '087223', 'dnsjhdbnlew', 'SLR', 'BVCX', '123456', 'ICF', 'MTM', 'AC', 'ICF', '2024-06-20', '', '2024-06-20', '2024-06-20', '', '', '67895', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'ASD', '087223', 'dnsjhdbnlew', 'SLR', 'sc', 'MTM', '', 'MTM', 'AC', 'ICF', '', '', '', '', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'SL23', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'LHB', 'BZA', 'NAC', 'RCF', '', '', '', '2024-03', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'SL23', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '2024-02', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', 'AC', 'ICF', '', '', '', '', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'SL23', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '2024-04', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'SL23', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '2024-05', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'SL257', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '2024-05', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'SL23', 'ASD', 'SC CZ 077619 C', 'SLR', 'EXP U/E', 'MTM', 'ICF', 'BZA', 'AC', 'ICF', '', '', '', '2024-02', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'SL23', '', '', '', '', '', '', '', 'AC', 'ICF', '', '', '', '', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'SL261', '', '', '', '', '', 'ICF', '', 'AC', 'ICF', '', '', '', '', '', '', '', '', '', '', '', '', 'SS-3', '', '', '', '', '', '', 'CBC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `pfno` int(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `authority` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`name`, `email`, `password`, `pfno`, `designation`, `department`, `authority`, `place`) VALUES
('Sesha satya sai', 'seshasatyasai2003@gmail.com', '$2y$10$ze.0DSQI5LlSImNyLRzYO.vgGKBmZRv2aZUaZvYsXrcJSwE8yc/3y', 1234, 'administrator', 'mechanical', 'ADMIN', 'vijayawada'),
('Ravi', 'kommuravi799@gmail.com', '$2y$10$yvxB5css95TgZU8qW7UzNeGaX/e7BYDoY/eTH9LlfMCzl89CeZBdi', 4565, 'administrator', 'mechanical', 'ADMIN', 'ASDFG');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sno` int(100) NOT NULL,
  `tno` varchar(100) NOT NULL,
  `pfno` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `disg` varchar(100) NOT NULL,
  `rly` varchar(100) NOT NULL,
  `workingsince` varchar(100) NOT NULL,
  `direc` varchar(100) NOT NULL,
  `vacn` varchar(100) NOT NULL,
  `fitness` varchar(100) NOT NULL,
  `yrsinbd` varchar(100) NOT NULL,
  `bdormrv` varchar(100) NOT NULL,
  `o` varchar(100) NOT NULL,
  `doni` varchar(100) NOT NULL,
  `supnumarari` varchar(100) NOT NULL,
  `mediphoto` varchar(111) NOT NULL,
  `classification` varchar(111) DEFAULT NULL,
  `cata` varchar(111) NOT NULL,
  `ndamonth` varchar(111) NOT NULL,
  `ndacode` varchar(111) NOT NULL,
  `ndahours` varchar(111) NOT NULL,
  `nha` varchar(100) NOT NULL,
  `del` varchar(100) NOT NULL,
  `awards` varchar(100) NOT NULL,
  `doe` varchar(100) NOT NULL,
  `vaccine` varchar(100) NOT NULL,
  `vaccine1` varchar(100) NOT NULL,
  `vaccine2` varchar(100) NOT NULL,
  `hrmsid` varchar(100) NOT NULL,
  `billunit` varchar(100) NOT NULL,
  `los` varchar(111) NOT NULL,
  `rcduedt` varchar(111) NOT NULL,
  `rcattdt` varchar(111) NOT NULL,
  `rim` varchar(111) NOT NULL,
  `aadharno` varchar(111) NOT NULL,
  `lap` varchar(111) NOT NULL,
  `lhap` varchar(111) NOT NULL,
  `aaa` varchar(111) NOT NULL,
  `dor` varchar(111) NOT NULL,
  `gpay` varchar(100) NOT NULL,
  `npsno` varchar(100) NOT NULL,
  `cellno` varchar(100) NOT NULL,
  `expr1018` varchar(100) NOT NULL,
  `panno` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `ropay` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `doa` varchar(100) NOT NULL,
  `sup` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `doec` varchar(100) NOT NULL,
  `fplaning` varchar(100) NOT NULL,
  `son` varchar(100) NOT NULL,
  `daughter` varchar(100) NOT NULL,
  `chailed` varchar(100) NOT NULL,
  `lcage` varchar(100) NOT NULL,
  `vctb` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pfrmslmis` varchar(100) NOT NULL,
  `scale` varchar(100) NOT NULL,
  `award` varchar(100) NOT NULL,
  `snu` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `lastrcatten` varchar(100) NOT NULL,
  `oldstn` varchar(100) NOT NULL,
  `fromtno` varchar(100) NOT NULL,
  `olddrop` varchar(100) NOT NULL,
  `tostn` varchar(100) NOT NULL,
  `naoftrf` varchar(100) NOT NULL,
  `authority` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `dateofpgrade` varchar(100) NOT NULL,
  `presenadrs` varchar(100) NOT NULL,
  `permanentadrs` varchar(100) NOT NULL,
  `knowcomp` varchar(100) NOT NULL,
  `print1` varchar(100) NOT NULL,
  `groupname` varchar(100) NOT NULL,
  `rlyqtrs` varchar(100) NOT NULL,
  `mf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sno`, `tno`, `pfno`, `name`, `disg`, `rly`, `workingsince`, `direc`, `vacn`, `fitness`, `yrsinbd`, `bdormrv`, `o`, `doni`, `supnumarari`, `mediphoto`, `classification`, `cata`, `ndamonth`, `ndacode`, `ndahours`, `nha`, `del`, `awards`, `doe`, `vaccine`, `vaccine1`, `vaccine2`, `hrmsid`, `billunit`, `los`, `rcduedt`, `rcattdt`, `rim`, `aadharno`, `lap`, `lhap`, `aaa`, `dor`, `gpay`, `npsno`, `cellno`, `expr1018`, `panno`, `grade`, `ropay`, `dob`, `doa`, `sup`, `batch`, `age`, `doec`, `fplaning`, `son`, `daughter`, `chailed`, `lcage`, `vctb`, `hospital`, `place`, `pass`, `pfrmslmis`, `scale`, `award`, `snu`, `qualification`, `lastrcatten`, `oldstn`, `fromtno`, `olddrop`, `tostn`, `naoftrf`, `authority`, `activity`, `dateofpgrade`, `presenadrs`, `permanentadrs`, `knowcomp`, `print1`, `groupname`, `rlyqtrs`, `mf`) VALUES
(1, 'juj', 'u', 'ku', 'kugk', 'ugi', 'ug', 'iu', 'gi', 'gi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-06-07', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-06-20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'kh', 'bkhvh', 'vh', 'vj', 'vjh', 'v', 'hv', 'hv', 'j', 'hvj', 'gv', 'jgv', '', 'jgv', 'j', 'vgv', 'jgv', 'jg', 'j', 'g', 'j', 'vg', 'vj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'kh', 'bkhvh', 'vh', 'vj', 'vjh', 'v', 'hv', 'hv', 'j', 'hvj', 'gv', 'jgv', '', 'jgv', 'j', 'vgv', 'jgv', 'jg', 'j', 'g', 'j', 'vg', 'vj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', '6666-06-06', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '0006-06-06', '6', '0006-06-06', '2121-06-06', '6', '6', '6', '6666-06-06', '6666-06-06', '6', '6', '6', '6', '6', '6666-06-06', '6', '6', '6', '6', '6', '6', '6', '0006-06-06', '0006-06-06', '6', '6', '6', '0006-06-06', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6'),
(7, 'ni', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'g', 'g', '', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', 'g', '', '', 'g', 'g', 'g', '', '', 'g', 'g', 'g', 'g', 'g', '', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', '', 'g', 'g', 'g', '', '', 'g', 'g', '', '', '', 'g', '', '', 'g', 'g', 'gg', 'g', 'g', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g'),
(9, 'ni', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'g', 'g', 'ASDFG', 'gSDFG', 'gSDFGHJ', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', 'g', 'DFGH', 'DFGH', 'g', 'g', 'g', '', '2024-06-28', 'gFVGBHNJ', 'g', 'g', 'g', 'g', 'DFGH', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', '', 'g', 'g', 'g', '', '', 'g', 'g', '', '', '', 'g', '', '', 'g', 'g', 'gg', 'g', 'g', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g'),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'QWER', 'D', 'FGHJ', 'FGHJ', 'VBNM', 'TYU', 'RTYU', 'VBN', 'RTYU', 'VBN', 'RTYU', 'FGH', '2024-06-13', 'DFGH', 'RTY', 'ERTY', 'FGH', 'RTY', 'RTY', 'VBN', 'DFGH', 'ERT', 'CVB', '2024-06-21', 'WERT', '2024-06-12', '2024-06-20', '', 'VBNFGHJTY', 'GHJ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'QWER', 'D', 'FGHJ', 'FGHJ', 'VBNM', 'TYU', 'RTYU', 'VBN', 'RTYU', 'VBN', 'RTYU', 'FGH', '', 'DFGH', 'RTY', 'ERTY', 'FGH', 'RTY', 'RTY', 'VBN', 'DFGH', 'ERT', 'CVB', '', 'WERT', '', '', '', 'VBNFGHJTY', 'GHJ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'FGH', 'FGHJ', 'VBN', 'FGHJ', 'FGH', 'TYU', 'VBNM', 'TYU', 'TY', 'VBN', 'YH', 'UIJ', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'QWER', 'D', 'FGHJ', 'FGHJ', 'VBNM', 'TYU', 'RTYU', 'VBN', 'RTYU', 'VBN', 'RTYU', 'FGH', '', 'DFGH', 'RTY', 'ERTY', 'FGH', 'RTY', 'RTY', 'VBN', 'DFGH', 'ERT', 'CVB', '', 'WERT', '', '', '', 'VBNFGHJTY', 'GHJ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'FGH', 'FGHJ', 'VBN', 'FGHJ', 'FGH', 'TYU', 'VBNM', 'TYU', 'TY', 'VBN', 'YH', 'UIJ', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'QWER', 'D', 'FGHJ', 'FGHJ', 'VBNM', 'TYU', 'RTYU', 'VBN', 'RTYU', 'VBN', 'RTYU', 'FGH', '', 'DFGH', 'RTY', 'ERTY', 'FGH', 'RTY', 'RTY', 'VBN', 'DFGH', 'ERT', 'CVB', '', 'WERT', '', '', '', 'VBNFGHJTY', 'GHJ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'FGH', 'FGHJ', 'VBN', 'FGHJ', 'FGH', 'TYU', 'VBNM', 'TYU', 'TY', 'VBN', 'YH', 'UIJ', '', '', '', 'QWER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
