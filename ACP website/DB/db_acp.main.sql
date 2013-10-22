-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2013 at 07:42 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_acp.main`
--

-- --------------------------------------------------------

--
-- Table structure for table `acp_logsentry`
--

CREATE TABLE IF NOT EXISTS `acp_logsentry` (
  `Name` varchar(55) NOT NULL,
  `DateTime` text NOT NULL,
  `ipaddress` varchar(15) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acp_logsentry`
--

INSERT INTO `acp_logsentry` (`Name`, `DateTime`, `ipaddress`, `status`) VALUES
('Administrator', '2013-10-23 14:17:10', '127.0.0.1', 'login successfull'),
('Administrator', '2013-10-23 14:21:14', '127.0.0.1', 'login successfull'),
('Administrator', '2013-10-23 14:22:47', '127.0.0.1', 'login successfull'),
('', '2013-10-23 14:34:05', '127.0.0.1', 'login failed'),
('Administrator', '2013-10-23 14:34:10', '127.0.0.1', 'login successfull'),
('Administrator', '2013-10-23 15:01:57', '127.0.0.1', 'login successfull'),
('Administrator', '2013-10-23 15:38:37', '127.0.0.1', 'login successfull');

-- --------------------------------------------------------

--
-- Table structure for table `acp_program`
--

CREATE TABLE IF NOT EXISTS `acp_program` (
  `ProgramID` int(11) NOT NULL AUTO_INCREMENT,
  `ProgramName` varchar(55) NOT NULL,
  `ProgramType` varchar(55) NOT NULL,
  `ProgCenter` varchar(55) NOT NULL,
  `Batch` varchar(55) NOT NULL,
  `CreatedBY` varchar(55) NOT NULL,
  `CreatedDate` text NOT NULL,
  `ModifiedBY` varchar(55) NOT NULL,
  `ModifiedDate` text NOT NULL,
  PRIMARY KEY (`ProgramID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `acp_program`
--

INSERT INTO `acp_program` (`ProgramID`, `ProgramName`, `ProgramType`, `ProgCenter`, `Batch`, `CreatedBY`, `CreatedDate`, `ModifiedBY`, `ModifiedDate`) VALUES
(1, 'MDM', 'haha', 'haha', 'haha', 'haha', 'haha', 'haha', 'haha'),
(2, 'MBA 2010', ' Degree', 'EXCELL', 'cohort 8', 'mar', '2013-10-23', 'mar', '2013-10-23'),
(3, 'MDM 2013 Batch 4', ' Non-Degree', 'EXCELL', 'Cohort 9', 'mar', '2013-10-23', 'mar', '2013-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `acp_session`
--

CREATE TABLE IF NOT EXISTS `acp_session` (
  `acp_sesID` int(11) NOT NULL AUTO_INCREMENT,
  `FacultyName` varchar(55) NOT NULL,
  `Fcategory` varchar(55) NOT NULL,
  `ProgramID` int(11) NOT NULL,
  `Ctype` varchar(55) NOT NULL,
  `Cname` varchar(55) NOT NULL,
  `Module` varchar(55) NOT NULL,
  `Topic` varchar(55) NOT NULL,
  `Units` int(11) NOT NULL,
  `Participants` int(11) NOT NULL,
  `Date` text NOT NULL,
  `Start` varchar(55) NOT NULL,
  `End` varchar(55) NOT NULL,
  `AcpAq` int(11) NOT NULL,
  `AcpRq` int(11) NOT NULL,
  `Materials` varchar(55) NOT NULL,
  `Remarks` text NOT NULL,
  `CreatedBY` varchar(55) NOT NULL,
  `CreatedDate` text NOT NULL,
  `ModifiedBY` varchar(55) NOT NULL,
  `ModifiedDate` text NOT NULL,
  PRIMARY KEY (`acp_sesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `acp_session`
--

INSERT INTO `acp_session` (`acp_sesID`, `FacultyName`, `Fcategory`, `ProgramID`, `Ctype`, `Cname`, `Module`, `Topic`, `Units`, `Participants`, `Date`, `Start`, `End`, `AcpAq`, `AcpRq`, `Materials`, `Remarks`, `CreatedBY`, `CreatedDate`, `ModifiedBY`, `ModifiedDate`) VALUES
(1, 'ss', '', 1, '', '', '', '', 0, 0, '', '', '', 0, 0, '', '', '', '', '', ''),
(2, 'Angtuaco, Enrico', 'a', 1, 'd', 'e', 'f', 'g', 2, 2, '10/02/2013', '2:00 AM', '2:30 PM', 2, 3, 'try', 'ytr', 'mar', '2013-10-22', 'mar', '2013-10-22'),
(3, 'Angtuaco, Enrico', 'Adjunc', 1, 'tryer', 'courseee', '1st', 'Heroes of Newerth', 2, 25, '10/23/2013', '2:00 PM', '5:00 PM', 2, 5, '', '', 'mar', '2013-10-23', 'mar', '2013-10-23'),
(4, 'Angtuaco, Enrico', 'Adjunc', 1, 'tryer', 'courseee', '1st', 'Heroes of Newerth', 2, 25, '10/23/2013', '2:00 PM', '5:00 PM', 2, 5, '', '', 'mar', '2013-10-23', 'mar', '2013-10-23'),
(5, 'ss', '', 2, '', '', '', '', 0, 0, '', '', '', 0, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `acp_userlevel`
--

CREATE TABLE IF NOT EXISTS `acp_userlevel` (
  `UserLevel` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(55) NOT NULL,
  PRIMARY KEY (`UserLevel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `acp_userlevel`
--

INSERT INTO `acp_userlevel` (`UserLevel`, `Description`) VALUES
(1, 'Faculty'),
(2, 'Program Assistant'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `acp_users`
--

CREATE TABLE IF NOT EXISTS `acp_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `userLevel` int(11) NOT NULL,
  `createdBY` varchar(55) NOT NULL,
  `createdDate` text NOT NULL,
  `modifiedBY` varchar(55) NOT NULL,
  `modifiedDate` text NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acp_users`
--

INSERT INTO `acp_users` (`userID`, `username`, `password`, `status`, `name`, `userLevel`, `createdBY`, `createdDate`, `modifiedBY`, `modifiedDate`) VALUES
(1, 'administrator', '21232f297a57a5a743894a0e4a801fc3', 1, 'Administrator', 3, 'Nepomuceno, Mar Angel S.', '10/23/2013', 'Nepomuceno, Mar Angel S.', '10/23/2013');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pa_view`
--
CREATE TABLE IF NOT EXISTS `pa_view` (
`acp_sesID` int(11)
,`FacultyName` varchar(55)
,`ProgramName` varchar(55)
,`Date` text
,`AcpAq` int(11)
,`CreatedBY` varchar(55)
);
-- --------------------------------------------------------

--
-- Structure for view `pa_view`
--
DROP TABLE IF EXISTS `pa_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pa_view` AS select `acp_session`.`acp_sesID` AS `acp_sesID`,`acp_session`.`FacultyName` AS `FacultyName`,`acp_program`.`ProgramName` AS `ProgramName`,`acp_session`.`Date` AS `Date`,`acp_session`.`AcpAq` AS `AcpAq`,`acp_session`.`CreatedBY` AS `CreatedBY` from (`acp_session` join `acp_program` on((`acp_session`.`ProgramID` = `acp_program`.`ProgramID`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
