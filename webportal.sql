-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 09:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `eventTitle` varchar(200) NOT NULL,
  `eventDescription` text NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date DEFAULT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `imageLink` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `eventTitle`, `eventDescription`, `fromDate`, `toDate`, `startTime`, `endTime`, `imageLink`) VALUES
(1, 'adslkfjlsajf', 'akldjfkjalskfagfnajifgnmkasdn vlj awenfkjsdnv awfnkjasdhnfnakejnf aosndfklasd fvawebfliusdafhvbnasdkfv oi;aetfhnka.jlnvd ash;dgfn.nkasmdvh awebfkasjdl flaiuweknfjlx clfgvnaske fjk;lcvhn aseasdnfna sdjkfka kjfvnasdhfjkjkbasdffudgksndjvhaskdfkjvnasdfnj;asvhasdhgfnakljglksenfoiawefn;kalsdvnasf;gbkjasdpofhawenfjknfsv ckhfsartfhreyiogtprht;npgjfs8cgvoirh[g-qwerjf''oiqw-rtf;ckl;ashgoq2p3o4rhjlkw;fvhpoadiwq;eofa09wfyhklsdjfhuiarhiad;lfnhoiua ewoifuwe qfglaise fbawehfrios efv roiewuyfbawe fhu waebfy iuw;epf naiwouer iquw4e rbqweruf iweb fy7rweui fey bfdh awelfui awe fae rfew fhaweiof nabw fy', '2015-09-08', '2015-09-09', '08:00:00', '18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE IF NOT EXISTS `superusers` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `rollNumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `userID` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `rollNumber` (`email`),
  UNIQUE KEY `userName` (`rollNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rollNumber`, `password`, `firstName`, `lastName`, `email`, `userID`) VALUES
('13IM30022', 'ashu', 'ASHUTOSH', 'YADAV', 'ashutoshy.and01@gmail.com', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
