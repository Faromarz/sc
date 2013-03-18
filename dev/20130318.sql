
-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 09:07 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soulcoaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendaitems`
--

CREATE TABLE IF NOT EXISTS `agendaitems` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agendaitems`
--

INSERT INTO `agendaitems` (`id`, `date`, `time`, `title`, `info`) VALUES
(1, '2013-04-21', '10:00 tot 17:00 uur', 'Opendag Stichting de Ster', 'Gratis informatieve consulten\r\n \r\nLokatie Kuturhus de Rietborgh: \r\nBorgsche Rieten 15 \r\nTerborg'),
(2, '2013-05-01', '10:00 tot 17:00', 'Introductiedag Megchelen', 'Een informatieve dag');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(63) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `type`, `name`, `description`, `content`) VALUES
(1, 'html', 'frontpage', 'Voorpagina inhoud', 'Welkom');

-- --------------------------------------------------------

--
-- Table structure for table `guestbookitems`
--

CREATE TABLE IF NOT EXISTS `guestbookitems` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(63) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `guestbookitems`
--

INSERT INTO `guestbookitems` (`id`, `timestamp`, `ip`, `name`, `accepted`, `text`) VALUES
(18, '2013-03-16 11:16:30', '127.0.0.1', 'Tom Lankhorst', 1, 'Ik wens je veel plezier met je coaching praktijk!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
