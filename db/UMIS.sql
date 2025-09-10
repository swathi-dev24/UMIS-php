-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2025 at 05:02 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umis`
--
CREATE DATABASE IF NOT EXISTS `umis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `umis`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(20) NOT NULL,
  `ad_password` varchar(20) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ad_id`, `ad_name`, `ad_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `umis_info`
--

CREATE TABLE IF NOT EXISTS `umis_info` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `aadhaar` varchar(20) NOT NULL,
  `emis` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `community` varchar(10) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `graduate` varchar(10) NOT NULL,
  `quota` varchar(10) NOT NULL,
  `abled` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pcountry` varchar(30) NOT NULL,
  `pstate` varchar(30) NOT NULL,
  `plocation` varchar(30) NOT NULL,
  `pdistrict` varchar(30) NOT NULL,
  `ptaluk` varchar(30) NOT NULL,
  `pvillage` varchar(50) NOT NULL,
  `pblock` varchar(30) NOT NULL,
  `ppanchayat` varchar(30) NOT NULL,
  `paddress` text NOT NULL,
  `ccountry` varchar(30) NOT NULL,
  `cstate` varchar(30) NOT NULL,
  `clocation` varchar(30) NOT NULL,
  `cdistrict` varchar(30) NOT NULL,
  `ctaluk` varchar(30) NOT NULL,
  `cvillage` varchar(50) NOT NULL,
  `cpanchayat` varchar(30) NOT NULL,
  `cward` varchar(10) NOT NULL,
  `caddress` text NOT NULL,
  `cjoin` varchar(10) NOT NULL,
  `cstream` varchar(20) NOT NULL,
  `cctype` varchar(20) NOT NULL,
  `ccourse` varchar(20) NOT NULL,
  `cbranch` varchar(30) NOT NULL,
  `cmedium` varchar(15) NOT NULL,
  `cmode` varchar(20) NOT NULL,
  `cadmission` varchar(20) NOT NULL,
  `cad_type` varchar(20) NOT NULL,
  `ccounselling` varchar(20) NOT NULL,
  `crollno` varchar(20) NOT NULL,
  `clateral` varchar(10) NOT NULL,
  `chosteller` varchar(10) NOT NULL,
  `cinstitute` varchar(50) NOT NULL,
  `cyear` varchar(10) NOT NULL,
  `pjoin` varchar(20) NOT NULL,
  `pstream` varchar(20) NOT NULL,
  `pctype` varchar(20) NOT NULL,
  `pcourse` varchar(20) NOT NULL,
  `pbranch` varchar(30) NOT NULL,
  `pmedium` varchar(20) NOT NULL,
  `pmode` varchar(20) NOT NULL,
  `padmission` varchar(20) NOT NULL,
  `pad_type` varchar(20) NOT NULL,
  `prollno` varchar(20) NOT NULL,
  `plateral` varchar(10) NOT NULL,
  `phosteller` varchar(10) NOT NULL,
  `pinstitute` varchar(30) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `foccup` varchar(30) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `moccup` varchar(30) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `orphan` varchar(10) NOT NULL,
  `income` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `accno` varchar(30) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `bbranch` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `acctype` varchar(15) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `e_aname` varchar(20) NOT NULL,
  `e_gender` varchar(10) NOT NULL,
  `e_nationality` varchar(20) NOT NULL,
  `e_religion` varchar(20) NOT NULL,
  `e_community` varchar(20) NOT NULL,
  `e_communityno` varchar(20) NOT NULL,
  `e_caste` varchar(20) NOT NULL,
  `e_graduate` varchar(10) NOT NULL,
  `e_fname` varchar(20) NOT NULL,
  `e_mname` varchar(20) NOT NULL,
  `e_income` varchar(10) NOT NULL,
  `e_incomeno` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `umis_info`
--

INSERT INTO `umis_info` (`uid`, `sname`, `aname`, `password`, `aadhaar`, `emis`, `dob`, `gender`, `nationality`, `religion`, `community`, `caste`, `blood`, `graduate`, `quota`, `abled`, `mobile`, `email`, `pcountry`, `pstate`, `plocation`, `pdistrict`, `ptaluk`, `pvillage`, `pblock`, `ppanchayat`, `paddress`, `ccountry`, `cstate`, `clocation`, `cdistrict`, `ctaluk`, `cvillage`, `cpanchayat`, `cward`, `caddress`, `cjoin`, `cstream`, `cctype`, `ccourse`, `cbranch`, `cmedium`, `cmode`, `cadmission`, `cad_type`, `ccounselling`, `crollno`, `clateral`, `chosteller`, `cinstitute`, `cyear`, `pjoin`, `pstream`, `pctype`, `pcourse`, `pbranch`, `pmedium`, `pmode`, `padmission`, `pad_type`, `prollno`, `plateral`, `phosteller`, `pinstitute`, `pyear`, `fname`, `foccup`, `mname`, `moccup`, `guardian`, `orphan`, `income`, `phno`, `accno`, `ifsc`, `bname`, `bbranch`, `city`, `acctype`, `e_name`, `e_aname`, `e_gender`, `e_nationality`, `e_religion`, `e_community`, `e_communityno`, `e_caste`, `e_graduate`, `e_fname`, `e_mname`, `e_income`, `e_incomeno`) VALUES
(1, '', '', '123', '', '', '', '', 'Select You', 'Select You', 'Select You', '', 'Select You', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select Your National', 'Select Your Religion', 'Select Your Communit', '', '', '', '', '', '', ''),
(2, 'Swathi', 'Swathi G', '123', '812870966633', '76432617', '2004-11-24', 'Female', 'Indian', 'Hindu', 'MBC', 'Vanniyar', 'B+', 'No', 'No', 'No', '1234567890', 'swathi@gmail.com', 'India', 'TamilNadu', 'Salem', 'Salem', 'PN Palayam', 'Abinavam', '3rd', 'Abinavam', 'Yethapur', 'India', 'Tamil Nadu', 'Salem', 'Salem', 'PN Palayam', 'Abinavam', 'Yethapur', '13', 'Yethapur', '2022', ' Arts and Science', 'Computer Application', 'BCA', 'Computer Application', '', 'Offline', '18.11.2022', 'Online', '303764g82992', 'C22UG104CAP030', '', '', 'Government College', '2025', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select Your National', 'Select Your Religion', 'Select Your Communit', '', '', '', '', '', '', ''),
(3, 'kowshika', 'kowshika', 'kowshi', '', '', '', '', 'Select You', 'Select You', 'Select You', '', 'Select You', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select Your National', 'Select Your Religion', 'Select Your Communit', '', '', '', '', '', '', ''),
(4, 'Sudha', 'Sudha Ganesan', '321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
