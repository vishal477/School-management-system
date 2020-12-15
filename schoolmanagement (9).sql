-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2020 at 01:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `lc_record`
--

DROP TABLE IF EXISTS `lc_record`;
CREATE TABLE IF NOT EXISTS `lc_record` (
  `last_class` text NOT NULL,
  `exam` text NOT NULL,
  `sub1` text NOT NULL,
  `sub2` text NOT NULL,
  `sub3` text NOT NULL,
  `sub4` text NOT NULL,
  `sub5` text NOT NULL,
  `promotion` text NOT NULL,
  `total_days` text NOT NULL,
  `ncc` text NOT NULL,
  `general_cunduct` text NOT NULL,
  `apply_date` date NOT NULL,
  `issue_date` date NOT NULL,
  `fees_status` text NOT NULL,
  `fees_cons` text NOT NULL,
  `reason1` text NOT NULL,
  `remark` text NOT NULL,
  `erno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lc_record`
--

INSERT INTO `lc_record` (`last_class`, `exam`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `promotion`, `total_days`, `ncc`, `general_cunduct`, `apply_date`, `issue_date`, `fees_status`, `fees_cons`, `reason1`, `remark`, `erno`) VALUES
('aldsjfA', 'ljdfjdslj', 'skjlsdfjglsa', 'fsdgjl', 'glsdjflasj', 'sjflsjdflj', 'jdflsdjfl', 'yes', '17', 'yes1', 'asdff', '2021-01-01', '2020-12-01', 'yes2', 'fdsfsadfsd', 'dfdsf', 'fdsfdsad', 0),
('5', '13th', 'english', 'maths', 'bio', 'histrory', 'c', 'no', '600', 'yes1', '45898\\7844587', '2020-06-12', '2020-06-25', 'yes2', 'concession', '12th complete', 'nothing', 0),
('5', '13th', 'abc', 'fsdgjl', 'glsdjflasj', 'sjflsjdflj', 'c', 'no', '5653', 'no1', 'asdff', '2020-06-11', '2020-06-28', 'no2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('5', '13th', 'abc', 'fsdgjl', 'glsdjflasj', 'sjflsjdflj', 'c', 'no', '5653', 'no1', 'asdff', '2020-06-11', '2020-06-28', 'no2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('5', '13th', 'abc', 'fsdgjl', 'glsdjflasj', 'sjflsjdflj', 'c', 'no', '5653', 'no1', 'asdff', '2020-06-11', '2020-06-28', 'no2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('aldsjfA', '13th', 'skjlsdfjglsa', 'abc2', 'abc3', 'histrory', 'jdflsdjfl', 'no', '2', 'yes1', 'asdff', '2020-06-03', '2020-06-09', 'no2', 'concession', '12th complete', 'nothing', 0),
('55', '13th', 'skjlsdfjglsa', 'abc2', 'abc3', 'histrory', 'jdflsdjfl', 'no', '2', 'yes1', 'asdff', '2020-06-04', '2020-06-14', 'yes2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('55', '13th', 'skjlsdfjglsa', 'abc2', 'abc3', 'histrory', 'jdflsdjfl', 'no', '2', 'yes1', 'asdff', '2020-06-04', '2020-06-14', 'yes2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('12', 'ljdfjdslj', 'skjlsdfjglsa', 'fsdgjl', 'glsdjflasj', 'sjflsjdflj', 'jdflsdjfl', 'no', '2', 'yes1', 'asdff', '2020-06-26', '2020-06-28', 'yes2', 'concession', '12th complete', 'nothing', 0),
('20', 'ljdfjdslj', 'abc', 'fsdgjl', 'glsdjflasj', 'histrory', 'jdflsdjfl', 'yes', '2', 'no1', 'asdff', '2020-06-11', '2020-06-20', 'yes2', 'fdsfsadfsd', '12th complete', 'nothing', 0),
('10', '10', 'c', 'java', 'python', 'php', 'html', 'yes', '654', 'yes1', 'go corona', '2020-06-12', '2020-06-13', 'yes2', 'concession', 'my life my rule', '...', 0),
('10', '10', 'c', 'java', 'python', 'php', 'html', 'yes', '654', 'yes1', 'go corona', '2020-06-12', '2020-06-13', 'yes2', 'concession', 'my life my rule', '...', 0),
('12', '10', 'c', 'maths', 'python', 'php', 'c', 'yes', '650', 'yes1', 'go corona', '2020-06-11', '2020-06-28', 'no2', 'concession', 'my life my rule', 'no', 5598),
('12', '10', 'c', 'maths', 'python', 'php', 'c', 'yes', '650', 'yes1', 'go corona', '2020-06-11', '2020-06-28', 'no2', 'concession', 'my life my rule', 'no', 5598),
('47', '10', 'skjlsdfjglsa', 'maths', 'glsdjflasj', 'sjflsjdflj', 'c', 'no', '52', 'yes1', 'asdff', '2020-07-04', '2020-06-19', 'yes2', 'concession', '12th complete', 'nothing', 789789),
('12', 'ljdfjdslj', 'c', 'fsdgjl', 'python', 'php', 'c', 'yes', '154', 'yes1', 'asdff', '2020-06-20', '2020-06-20', 'yes2', 'concession', 'my life my rule', 'fdsfdsad', 789789),
('aldsjfA', '10', 'skjlsdfjglsa', 'abc2', 'python', 'php', 'jdflsdjfl', 'no', '4', 'yes1', 'go corona', '2020-06-03', '2020-06-07', 'no2', 'fdsfsadfsd', 'my life my rule', 'nothing', 5598),
('12', '10', 'skjlsdfjglsa', 'maths', 'python', 'sjflsjdflj', 'jdflsdjfl', 'no', '3', 'yes1', '45898\\7844587', '2020-06-14', '2020-06-06', 'no2', 'concession', 'my life my rule', 'nothing', 121),
('12', '10', 'english', 'java', 'python', 'histrory', 'html', 'yes', '152', 'no1', 'go corona', '2020-06-20', '2020-06-13', 'no2', 'concession', 'my life my rule', 'no', 121),
('aldsjfA', '13th', 'english', 'maths', 'python', 'histrory', 'html', 'yes', '21', 'yes1', 'go corona', '2020-06-07', '2020-06-13', 'yes2', 'concession', 'my life my rule', 'no', 121);

-- --------------------------------------------------------

--
-- Table structure for table `studentregister`
--

DROP TABLE IF EXISTS `studentregister`;
CREATE TABLE IF NOT EXISTS `studentregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admissiontype` varchar(100) NOT NULL,
  `busno` varchar(100) NOT NULL,
  `busstop` varchar(100) NOT NULL,
  `erno` varchar(100) NOT NULL,
  `admissiondate` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `studentsurname` varchar(100) NOT NULL,
  `studentfname` varchar(100) NOT NULL,
  `studentmname` varchar(100) NOT NULL,
  `studentdob` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `studentadharno` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `relogion` varchar(10) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `studentaddress` varchar(100) NOT NULL,
  `studenttelephoneno` varchar(100) NOT NULL,
  `studentmobileno` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `Preschool` varchar(100) NOT NULL,
  `mediumofins` varchar(100) NOT NULL,
  `serialno` varchar(100) NOT NULL,
  `udiseno` varchar(100) NOT NULL,
  `studentimage` blob NOT NULL,
  `motherlang` varchar(100) NOT NULL,
  `otherlang` varchar(100) NOT NULL,
  `ifany` varchar(100) NOT NULL,
  `aliments` varchar(100) NOT NULL,
  `idmark` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `fatherlname` varchar(100) NOT NULL,
  `fatherfname` varchar(100) NOT NULL,
  `fathermname` varchar(100) NOT NULL,
  `fatherage` varchar(100) NOT NULL,
  `fatheredu` varchar(100) NOT NULL,
  `parentadd` varchar(100) NOT NULL,
  `fathertel` varchar(100) NOT NULL,
  `motherlname` varchar(100) NOT NULL,
  `motherfname` varchar(100) NOT NULL,
  `mothermname` varchar(100) NOT NULL,
  `motherage` varchar(100) NOT NULL,
  `motheredu` varchar(100) NOT NULL,
  `motheroccupation` varchar(100) NOT NULL,
  `familytype` varchar(100) NOT NULL,
  `memberno` varchar(100) NOT NULL,
  `siblingno` varchar(100) NOT NULL,
  `siblingname1` varchar(100) NOT NULL,
  `siblingage1` varchar(100) NOT NULL,
  `siblingschool1` varchar(100) NOT NULL,
  `siblingname2` varchar(100) NOT NULL,
  `siblingage2` varchar(100) NOT NULL,
  `siblingschool2` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  `documents` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregister`
--

INSERT INTO `studentregister` (`id`, `admissiontype`, `busno`, `busstop`, `erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`, `studentmname`, `studentdob`, `placeofbirth`, `studentadharno`, `gender`, `caste`, `relogion`, `nationality`, `category`, `studentaddress`, `studenttelephoneno`, `studentmobileno`, `landmark`, `emergency`, `Preschool`, `mediumofins`, `serialno`, `udiseno`, `studentimage`, `motherlang`, `otherlang`, `ifany`, `aliments`, `idmark`, `bgroup`, `fatherlname`, `fatherfname`, `fathermname`, `fatherage`, `fatheredu`, `parentadd`, `fathertel`, `motherlname`, `motherfname`, `mothermname`, `motherage`, `motheredu`, `motheroccupation`, `familytype`, `memberno`, `siblingno`, `siblingname1`, `siblingage1`, `siblingschool1`, `siblingname2`, `siblingage2`, `siblingschool2`, `place`, `dt`, `documents`) VALUES
(1, 'regular', '78', 'poop', '55', '2033-09-02', '1st', 'A', 'hkhj', 'hjkhk', 'hkjh', '2010-06-05', 'kjhkjhk', '6576576476476', 'Male', 'kjhjkh', 'kjhk', 'hkjhk', 'sc', 'yhitgyufgjhjg', '456789067', '5678909876', 'sdfghjk', 'fghjklkjhg', 'ghjkllkjnhbhjkl', 'wertgyhujik', '234', '34567', 0x6162632e6a7067, 'rtyui', 'tyuio', 'tyuio', 'tyuio', 'tyuhtyuio', 'aneg', 'tgyhujkil', 'rtyuio', 'tgyuio', '67', 'fghjkl', 'ghjkl;', '234567890', 'dfghjk', 'fghjk', 'fghjk', '456', 'ytuio', 'yuiop', 'nuclear', '06', '3', 'ertyuio', '456', 'ertyujkil;lkjhg', 'fghjklkjhg', '34', 'dfghjkl;', 'fghjkl', '2019-11-03', ',Leaving Certificate,Domacile Certificate,Caste Certificate,Birth Certificate,Adhar Card'),
(5, 'regular', '123445', 'fghjk', '5598', '1999-10-10', '7th', 'B', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-07', 'agsdgsdg', '-1', 'Male', 'gdgfc', 'jvjvhj', 'India', 'st', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'fukjgfugfuyj', 'sdfgadfg', 'adaf', 'sdfsdfsa', 'sdfsafsdf', 0x37383733373065363163333464666266623739386365303861633735613631302e706e67, 'dsfsdgfdg', 'gdfg', 'dcsc', 'sdfsdf', 'asdgsdg', 'aneg', 'LAWATE', 'PRAKASH', 'D', '3', 'ertwert', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '52', 'LAWATE', 'PRAKASH', 'D', '3', 'fsdfsdf', 'sdgsag', 'nuclear', '7', '6', 'PRAKASH DADA LAWATE', '5', 'sdgasdg', 'PRAKASH DADA LAWATE', '13', 'asdgsdg', 'sdgsadg', '2020-02-12', ''),
(7, 'regular', '123445', 'fghjk', '5598', '1999-10-10', '3rd', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-07', 'agsdgsdg', '-1', 'Male', 'gdgfc', 'jvjvhj', 'India', 'st', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'fukjgfugfuyj', 'sdfgadfg', 'adaf', 'sdfsdfsa', 'sdfsafsdf', 0x37383733373065363163333464666266623739386365303861633735613631302e706e67, 'dsfsdgfdg', 'gdfg', 'dcsc', 'sdfsdf', 'asdgsdg', 'aneg', 'LAWATE', 'PRAKASH', 'D', '3', 'ertwert', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '52', 'LAWATE', 'PRAKASH', 'D', '3', 'fsdfsdf', 'sdgsag', 'nuclear', '7', '6', 'PRAKASH DADA LAWATE', '5', 'sdgasdg', 'PRAKASH DADA LAWATE', '13', 'asdgsdg', 'sdgsadg', '2020-02-12', ',Leaving Certificate,Domacile Certificate,Caste Certificate,Birth Certificate,Adhar Card');

-- --------------------------------------------------------

--
-- Table structure for table `student_out`
--

DROP TABLE IF EXISTS `student_out`;
CREATE TABLE IF NOT EXISTS `student_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admissiontype` varchar(100) NOT NULL,
  `busno` varchar(100) NOT NULL,
  `busstop` varchar(100) NOT NULL,
  `erno` varchar(100) NOT NULL,
  `admissiondate` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `studentsurname` varchar(100) NOT NULL,
  `studentfname` varchar(100) NOT NULL,
  `studentmname` varchar(100) NOT NULL,
  `studentdob` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `studentadharno` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `relogion` varchar(10) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `studentaddress` varchar(100) NOT NULL,
  `studenttelephoneno` varchar(100) NOT NULL,
  `studentmobileno` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `Preschool` varchar(100) NOT NULL,
  `mediumofins` varchar(100) NOT NULL,
  `serialno` varchar(100) NOT NULL,
  `udiseno` varchar(100) NOT NULL,
  `studentimage` blob NOT NULL,
  `motherlang` varchar(100) NOT NULL,
  `otherlang` varchar(100) NOT NULL,
  `ifany` varchar(100) NOT NULL,
  `aliments` varchar(100) NOT NULL,
  `idmark` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `fatherlname` varchar(100) NOT NULL,
  `fatherfname` varchar(100) NOT NULL,
  `fathermname` varchar(100) NOT NULL,
  `fatherage` varchar(100) NOT NULL,
  `fatheredu` varchar(100) NOT NULL,
  `parentadd` varchar(100) NOT NULL,
  `fathertel` varchar(100) NOT NULL,
  `motherlname` varchar(100) NOT NULL,
  `motherfname` varchar(100) NOT NULL,
  `mothermname` varchar(100) NOT NULL,
  `motherage` varchar(100) NOT NULL,
  `motheredu` varchar(100) NOT NULL,
  `motheroccupation` varchar(100) NOT NULL,
  `familytype` varchar(100) NOT NULL,
  `memberno` varchar(100) NOT NULL,
  `siblingno` varchar(100) NOT NULL,
  `siblingname1` varchar(100) NOT NULL,
  `siblingage1` varchar(100) NOT NULL,
  `siblingschool1` varchar(100) NOT NULL,
  `siblingname2` varchar(100) NOT NULL,
  `siblingage2` varchar(100) NOT NULL,
  `siblingschool2` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_out`
--

INSERT INTO `student_out` (`id`, `admissiontype`, `busno`, `busstop`, `erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`, `studentmname`, `studentdob`, `placeofbirth`, `studentadharno`, `gender`, `caste`, `relogion`, `nationality`, `category`, `studentaddress`, `studenttelephoneno`, `studentmobileno`, `landmark`, `emergency`, `Preschool`, `mediumofins`, `serialno`, `udiseno`, `studentimage`, `motherlang`, `otherlang`, `ifany`, `aliments`, `idmark`, `bgroup`, `fatherlname`, `fatherfname`, `fathermname`, `fatherage`, `fatheredu`, `parentadd`, `fathertel`, `motherlname`, `motherfname`, `mothermname`, `motherage`, `motheredu`, `motheroccupation`, `familytype`, `memberno`, `siblingno`, `siblingname1`, `siblingage1`, `siblingschool1`, `siblingname2`, `siblingage2`, `siblingschool2`, `place`, `dt`) VALUES
(1, 'Regular', 'qwert', 'qwer', '7576465', '2020-12-31', 'First Standard', 'A Division', 'qwer', 'qwerty', 'wergh', '2020-12-31', 'asdfg', '-1', 'Male', 'maratha', 'qwert', 'ertyu', 'Open', 'ghjhgvb', '-2', '-1', 'fddggf', 'ytghg', 'dgfergrgr', 'gergrgr', 'ergrg', 'egertr4t', 0x30346434633433306332353139343737346636363631363065643666653062632e706e67, 'dssf', 'hindi', 'hindi', 'dfefer', 'fdfr', '', 'wfefe', 'baburao', 'fefe', '-1', '353', 'bbbbbbbbbbbbbb', '-1', 'fdf', 'grg', 'fgtht', '-1', 'bfngn', 'fgrgrrgg', 'Joint', '-1', '-1', 'wrer', '-1', 'sfsf', 'fgfh', '-2', 'ggr', 'grr', '2020-12-31'),
(6, 'Regular', 'qwert', 'qwer', '23543', '2020-10-31', 'Second Standard', 'B Division', 'qwer', 'sahil', 'wergh', '2020-12-31', 'asdfg', '-1', 'Female', 'qwer', 'qwert', 'ertyu', 'Open', 'sssssss', '-1', '-2', 'fddggf', 'ssssssssa', 'dgfergrgr', 'gergrgr', 'ergrg', 'egertr4t', 0x30346434633433306332353139343737346636363631363065643666653062632e706e67, 'dssf', 'hindi', 'dfdfgd', 'dfefer', 'fdfr', '', 'wfefe', 'fefef', 'fefe', '-1', '353', 'dddddddddddd', '-1', 'fdf', 'grg', 'fgtht', '-1', 'bfngn', 'fgrgrrgg', 'Joint', '-1', '-1', 'wrer', '-1', 'sfsf', 'fgfh', '-1', 'ggr', 'grr', '2020-12-31'),
(7, 'Regular', 'qwert', 'qwer', '55465', '2020-12-31', 'First Standard', 'A Division', 'qwer', 'qwerty', 'wergh', '2020-12-31', 'asdfg', '-1', 'Male', 'qwer', 'qwert', 'ertyu', 'Open', 'rrrrrrrr', '-1', '-1', 'fddggf', 'rrr', 'dgfergrgr', 'gdgf', 'ergrg', 'egertr4t', 0x4e325f3437315f33302e6a7067, 'dssf', 'dfdfer', 'dfdfgd', 'dfefer', 'mole', '', 'wfefe', 'fefef', 'fefe', '-1', '353', 'rrrrrrrrrrrr', '-1', 'fdf', 'grg', 'fgtht', '-1', 'bfngn', 'fgrgrrgg', 'Joint', '-1', '-2', 'wrer', '-1', 'sfsf', 'fgfh', '-1', 'ggr', 'grr', '2020-12-31'),
(8, 'Regular', 'qwert', 'qwer', '11', '2020-12-31', 'Second Standard', 'B Division', 'jadhav', 'vishal', 'haridas', '2020-12-31', 'pandharpur', '5', 'Male', 'maratha', 'hindu', 'indian', 'Open', 'hhhhhhhhhhhhhhhh', '4', '4', 'hjghfh', 'jjjjjjjjj', 'gfdgdg', 'gergrgr', '98', '87878', 0x4e325f343834375f34302e6a7067, 'marathi', 'hindi', 'hindi', 'no', 'mole', 'B+', 'jadhav', 'Haridas', 'baburao', '66', 'BSc', 'jjjjjjjjj', '6', 'jadhav', 'vidya', 'haridas', '55', '10', 'no', 'Nuclear', '4', '0', '23', '1', 'sfsf', 'fgfh', '1', 'ggr', 'pandharpur', '2020-01-01'),
(9, 'RTE-251', 'qwert', 'qwer', '55', '2019-12-31', 'First Standard', 'A Division', 'pathan', 'sahil', 'wergh', '2019-12-31', 'asdfg', '-1', 'Male', 'qwer', 'qwert', 'ertyu', 'Open', 'aa', '-1', '-1', 'fddggf', 'aa', 'dgfergrgr', 'gergrgr', 'ergrg', 'egertr4t', 0x3133393731332e6a7067, 'dssf', 'dfdfer', 'dfdfgd', 'dfefer', 'fdfr', 'A-', 'wfefe', 'fefef', 'fefe', '-1', '353', 'aaa', '-1', 'fdf', 'grg', 'fgtht', '-1', 'bfngn', 'fgrgrrgg', 'Joint', '-1', '-1', 'wrer', '-1', 'sfsf', 'fgfh', '-1', 'ggr', 'grr', '2020-12-31'),
(10, 'Regular', 'qwert', 'qwer', '868649865765', '2020-12-31', 'First Standard', 'A Division', 'qwer', 'qwerty', 'wergh', '2020-12-31', 'asdfg', '-1', 'Male', 'qwer', 'qwert', 'indian', 'Open', 'gasi', '-1', '-1', 'fddggf', 'jyfugfjf', 'dgfergrgr', 'jfjuyg', 'ergrg', 'iyfuyyug', 0x356364313631313833623465382e6a7067, 'dssf', 'dfdfer', 'dfdfgd', 'dfefer', 'fdfr', 'AB+', 'wfefe', 'fefef', 'fefe', '-1', '353', 'iutiutiug', '-1', 'fdf', 'grg', 'fgtht', '-1', 'bfngn', 'fgrgrrgg', 'Joint', '-1', '-1', 'wrer', '-1', 'sfsf', 'fgfh', '-1', 'ggr', 'grr', '2020-12-31'),
(11, 'Regular', '22', 'karkamb', '10001', '2020-06-18', 'Twelfth Standard', 'D Division', 'jadhav', 'vishal', 'haridas', '2020-06-24', 'pandharpur', '1', 'Male', 'maratha', 'hindu', 'indian', 'Open', 'mohol', '3456789', '123456789', 'fddggf', '234567', 'gfdgdg', 'gdgf', 'ergrg', '87878', 0x4e325f313038335f31372e6a7067, 'marathi', 'hindi', 'no', 'no', 'mole', 'B+', 'jadhav', 'Haridas', 'baburao', '20', 'BSc', 'mohol', '3456789', 'jadhav', 'vidya', 'haridas', '044', '10', 'no', 'Joint', '1', '1', 'Jadhav Prathamesh Baburao', '1', 'RJHSK', 'Jadhav Rushi Babuaro', '25', 'RJHSK', 'pandharpur', '2020-12-31'),
(12, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(13, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(14, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(15, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(16, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(17, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(18, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(19, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(20, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(21, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(22, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(23, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(24, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(25, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(26, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(27, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(28, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(29, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(30, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(31, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(32, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(33, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(34, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(35, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(36, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(37, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(38, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(39, 'regular', '32161', 'plp', '121', '1536-12-10', '5th', 'D', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjnhjghgfxfdgdgddgxgfdxffgdg', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(40, 'regular', '32161', 'plp', '121', '1536-12-10', '1st', 'A', 'ss', 'dd', 'sca', '2001-04-20', 'hjkj', '789456331256', 'Male', 'vhvhgvh', 'jvjvhj', 'jvjvj', 'vj', 'hbkbj', '8798789966', '7898456525', 'khkkjn', '2655651641', 'jbjbjb', 'khjhk', 'kjhk', '3651', 0x646279686761322d37306431373735312d656332322d343038632d396266352d6236383331653133303333302e706e67, 'dsgdfg', 'csdcsdc', 'dcsc', 'sdcsd', 'sdcsdc', 'abpos', 'sdcsdc', 'dcsdc', 'dcsdc', '34', 'sdfasdfas', 'sfsdfa', '223321123', 'gfdfg', 'dfgd', 'dfgdfgsd', '7', 'dfgdfg', 'dfgdg', 'jsoint', '', '1', 'dgsdg', '4', 'dfgdg', 'dgdg', '4', 'dfgsdg', 'dgdgdsg', '1536-12-20'),
(41, 'rte-251', '32161', 'plp', '121', '2020-02-20', '7th', 'D', 'LAWATE', 'PRAKASH', 'DADA', '2020-02-21', 'hjkj', '7796464654654', 'Male', 'asfasdf', 'dadad', 'India', 'nt', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '07219887387', '07219887387', 'Maharashtra', 'sdfasdfsdfsdf', 'dsfasdfa', 'sdfasdf', 'sdfsdfsa', 'sdfsdfsadf', 0x6d79417661746172202831292e706e67, 'sdfasdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'bpos', 'sdfsdf', 'sdsdf', 'sdfsd', '2', 'sdfsdf', 'sdfsd', '13', 'dsfasdf', 'asdfsd', 'sdfsdfsd', '3', 'fsdfsdf', 'dsfs', 'jsoint', '14', '2', 'sdfsdf', '3', 'sdfsdf', 'sdfs', '5', 'dsfsdfsdf', 'sdfsdfsdf', '2020-02-07'),
(42, 'regular', '45', 'karkamb', '789789', '2010-06-23', '1st', 'D', 'Jadhav', 'Prathamesh', 'Baburao', '2000-01-24', 'Karkamb', '909090990', 'Male', 'mali', 'hindu', 'indian', 'obc', 'KArkamb', '02186767667', '9421068744', 'Sangvi Road', '02186777777', 'RJHSK,Karkamb', 'English', '09', '8899', 0x4161646f4265676161353666663065626536633439382e706e67, 'Marathi', 'Hindi,Kannada,Tamil', 'No', 'No', 'Mole in left ear', 'abpos', 'Jadhav', 'PRAKASH', 'Maruti', '78', '12', 'RAJEWADI,TAL- ATPADI\r\nDHANGAR GALLI', '0218677777', 'Jadhav', 'Shailja', 'BAburao', '98', '10', 'no', 'nuclear', '4', '2', 'JAdhav Rushi BAburao', '23', 'RJHSK', 'Jadhav Sunil Gajendra', '21', 'SKN SCOE', 'Pandharpur', '6666-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
