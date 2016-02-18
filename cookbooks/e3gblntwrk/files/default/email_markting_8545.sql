-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 06:27 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `email_markting_8545`
--
CREATE DATABASE IF NOT EXISTS `email_markting_8545` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `email_markting_8545`;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rlink` text NOT NULL,
  `olink` text NOT NULL,
  `ulink` text NOT NULL,
  `adddate` varchar(200) NOT NULL,
  `offerid` varchar(200) NOT NULL,
  `clicks` int(11) NOT NULL,
  `opens` int(11) NOT NULL,
  `listname` varchar(200) DEFAULT NULL,
  `sponsor` varchar(200) DEFAULT NULL,
  `account` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `offerid` (`offerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `rlink`, `olink`, `ulink`, `adddate`, `offerid`, `clicks`, `opens`, `listname`, `sponsor`, `account`) VALUES
(6, 'www.gooogle.com', 'www.gooogle.com', 'www.gooogle.com', '07/01/2016', 'HDFC bank', 0, 0, 'liststud,listcs,listcsa,listpolics,', 'gopal', '45454');

-- --------------------------------------------------------

--
-- Table structure for table `profiles468`
--

CREATE TABLE IF NOT EXISTS `profiles468` (
  `Pid5` int(11) NOT NULL,
  `Name2` varchar(200) NOT NULL,
  `Email2` varchar(200) NOT NULL,
  `Mobile2` varchar(12) NOT NULL,
  PRIMARY KEY (`Pid5`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles468`
--

INSERT INTO `profiles468` (`Pid5`, `Name2`, `Email2`, `Mobile2`) VALUES
(1, 'Pankaj Galoit', 'sample@gmail.com', '8855885588');

-- --------------------------------------------------------

--
-- Table structure for table `userids845`
--

CREATE TABLE IF NOT EXISTS `userids845` (
  `Pid5` int(11) NOT NULL AUTO_INCREMENT,
  `Usr5` text NOT NULL,
  `Pwd5` text NOT NULL,
  `Tpe5` varchar(10) NOT NULL,
  PRIMARY KEY (`Pid5`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userids845`
--

INSERT INTO `userids845` (`Pid5`, `Usr5`, `Pwd5`, `Tpe5`) VALUES
(1, 'NgXYCvXUc9UVfm3sjEufPWaPvmjCuaC6u1SHZdJ6lqY=', 'BmhrzPyaA42HuyR/IZjfbQuqqIDX09BkqTrO3SHel7I=', 'admin'),
(6, 'BRgJ69oocJghk5vE3hcRZJaEO9LieAZXO/nd3KfjTVM=', 'xJCPNYy0jkDTOtJtDd6eOCg8/pgVCzjFUOzu251VT2g=', 'user'),
(9, 'ofLBJkDPRK8Zpg3JYOo8P09tPLVnf6cRLEnpFoniKE8=', 'ofLBJkDPRK8Zpg3JYOo8P09tPLVnf6cRLEnpFoniKE8=', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles468`
--
ALTER TABLE `profiles468`
  ADD CONSTRAINT `profiles468_ibfk_1` FOREIGN KEY (`Pid5`) REFERENCES `userids845` (`Pid5`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
