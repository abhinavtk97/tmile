-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 01:44 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `themanpy_takshak17`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_verify`
--

CREATE TABLE `email_verify` (
  `email` varchar(30) NOT NULL,
  `rand` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_verify`
--

INSERT INTO `email_verify` (`email`, `rand`) VALUES
('abhinavtk97@gmail.com', -1102295047),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', -374131034),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', -1133748999),
('abhinavtk97@gmail.com', -966028086),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', -1090035040),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', 192844037),
('abhinavtk97@gmail.com', -72353980),
('abhinavtk97@gmail.com', 194250923),
('abhinavtk97@gmail.com', -1462558363),
('abhinavtk97@gmail.com', -172544364),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', -508790125),
('abhinavtk97@gmail.com', 318559353),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', 565842432),
('abhinavtk97@gmail.com', -420759257);

-- --------------------------------------------------------

--
-- Table structure for table `main_leader_travel`
--

CREATE TABLE `main_leader_travel` (
  `nick` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_leader_travel`
--

INSERT INTO `main_leader_travel` (`nick`) VALUES
('Shine\'s Teammate @ Telegram'),
('shine'),
('KUMARESAN.C.S.'),
('ajay'),
('vipinonline'),
('Mr.Imperfect'),
('Mukesh Pathak'),
('iim13'),
('Robin Koshy'),
('Akhil James'),
('eyeks'),
('Subin'),
('Sumantro'),
('aveemashfaq'),
('pari'),
('Akshit Sharma'),
('Anivar Aravind'),
('Vaibhav Bajaj'),
('Mozpacers_pushpita'),
('vinitraje'),
('user_15343444611'),
('krishna [ :kr1shna ]'),
('popey'),
('Jochen'),
('Manas Mahodaya'),
('syam'),
('Satish S'),
('Ankur Jain 10791'),
('Rishabh Bansal'),
('nono2357'),
('ashish_mishra'),
('Sumit Murari'),
('shahbaz17'),
('Piyush Rajput'),
('codesahil'),
('Kolappan N'),
('user_15358834561'),
('Shiv Kokroo'),
('SpEcHiDe'),
('JRonin7'),
('the100rabh'),
('user_14679752751'),
('Indi_Stumbler'),
('Mayur Padma'),
('glenzac'),
('ArNaB'),
('DIPIN P JOSEPH'),
('iamsudhanshu'),
('user_15895559281'),
('jigs12'),
('user_15982127781'),
('aman'),
('user_15368453291'),
('atir mallick'),
('giriraj21'),
('saravanapandy'),
('shina_d'),
('Rajesh Dhiman'),
('user_15229943681'),
('Akki'),
('user_14570099321'),
('Sourav186'),
('abhi'),
('Nishant Tayade'),
('Shoble Thomas'),
('Gautam krishna R'),
('cupid'),
('Milan Dhali 7315'),
('maliku'),
('RS'),
('user_14660515311'),
('user_15830151971'),
('user_15222248701'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('Dhanesh95'),
('user_16309164351'),
('abhinav-bit.ly/_HASH'),
('abhinav-bit.ly/_MILE'),
('Shyam Sundar B'),
('userimack');

-- --------------------------------------------------------

--
-- Table structure for table `our_travel`
--

CREATE TABLE `our_travel` (
  `nick` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `college` varchar(60) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `globalrank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_travel`
--

INSERT INTO `our_travel` (`nick`, `email`, `score`, `name`, `password`, `college`, `phno`, `globalrank`) VALUES
('abhinav-bit.ly/_HASH', 'abhinavtk97@gmail.com', 5, 'Abhinav', 'password', 'Mace', '9999999999', 72);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
