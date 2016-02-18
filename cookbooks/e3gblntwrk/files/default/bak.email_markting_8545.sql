-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 05:27 AM
-- Server version: 5.5.42-cll-lve
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_markting_8545`
--

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE IF NOT EXISTS `clicks` (
  `id` bigint(20) NOT NULL,
  `offerid` bigint(20) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `dates` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datafile`
--

CREATE TABLE IF NOT EXISTS `datafile` (
  `id` int(11) NOT NULL,
  `dfname` varchar(200) NOT NULL,
  `dfpath` text NOT NULL,
  `totalemails` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `rlink` text NOT NULL,
  `olink` text NOT NULL,
  `ulink` text NOT NULL,
  `adddate` varchar(200) NOT NULL,
  `offerid` varchar(200) NOT NULL,
  `offername` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1027 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles468`
--

CREATE TABLE IF NOT EXISTS `profiles468` (
  `Pid5` int(11) NOT NULL,
  `Name2` varchar(200) NOT NULL,
  `Email2` varchar(200) NOT NULL,
  `Mobile2` varchar(12) NOT NULL
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
  `Pid5` int(11) NOT NULL,
  `Usr5` text NOT NULL,
  `Pwd5` text NOT NULL,
  `Tpe5` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userids845`
--

INSERT INTO `userids845` (`Pid5`, `Usr5`, `Pwd5`, `Tpe5`) VALUES
(1, 'NgXYCvXUc9UVfm3sjEufPWaPvmjCuaC6u1SHZdJ6lqY=', 'BmhrzPyaA42HuyR/IZjfbQuqqIDX09BkqTrO3SHel7I=', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datafile`
--
ALTER TABLE `datafile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profiles468`
--
ALTER TABLE `profiles468`
  ADD PRIMARY KEY (`Pid5`);

--
-- Indexes for table `userids845`
--
ALTER TABLE `userids845`
  ADD PRIMARY KEY (`Pid5`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datafile`
--
ALTER TABLE `datafile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1027;
--
-- AUTO_INCREMENT for table `userids845`
--
ALTER TABLE `userids845`
  MODIFY `Pid5` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
