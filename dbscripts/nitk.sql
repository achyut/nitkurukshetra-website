-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2013 at 03:28 PM
-- Server version: 5.1.46-log
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nitk`
--

-- --------------------------------------------------------

--
-- Table structure for table `archieve`
--

CREATE TABLE IF NOT EXISTS `archieve` (
  `arc_id` int(11) NOT NULL AUTO_INCREMENT,
  `arc_title` text,
  `arc_url` text,
  `arc_short` text,
  `arc_new` text,
  `arc_file` text,
  KEY `arc_id` (`arc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `evnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `evnt_title` text COLLATE utf8_unicode_ci NOT NULL,
  `evnt_url` text COLLATE utf8_unicode_ci NOT NULL,
  `evnt_short` text COLLATE utf8_unicode_ci NOT NULL,
  `evnt_new` text COLLATE utf8_unicode_ci NOT NULL,
  `evnt_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`evnt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `cdno` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci,
  `quali` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `designation` varchar(43) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(46) CHARACTER SET utf8 DEFAULT NULL,
  `radd` varchar(99) CHARACTER SET utf8 DEFAULT NULL,
  `phonen` varchar(42) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(51) CHARACTER SET utf8 DEFAULT NULL,
  `totlexp` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `research` varchar(346) CHARACTER SET utf8 DEFAULT NULL,
  `ind_counseltancy` varchar(352) CHARACTER SET utf8 DEFAULT NULL,
  `awards` varchar(700) CHARACTER SET utf8 DEFAULT NULL,
  `other` varchar(350) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `srno` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `urlname` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`cdno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=204 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fno` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `message` longtext,
  `ipaddress` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `fno` (`fno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_username` text,
  `login_password` text,
  `login_created` text,
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text COLLATE utf8_unicode_ci NOT NULL,
  `news_url` text COLLATE utf8_unicode_ci NOT NULL,
  `news_short` text COLLATE utf8_unicode_ci NOT NULL,
  `news_new` text COLLATE utf8_unicode_ci NOT NULL,
  `news_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` text COLLATE utf8_unicode_ci NOT NULL,
  `notice_url` text COLLATE utf8_unicode_ci NOT NULL,
  `notice_short` text COLLATE utf8_unicode_ci NOT NULL,
  `notice_new` text COLLATE utf8_unicode_ci NOT NULL,
  `notice_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` text COLLATE utf8_unicode_ci NOT NULL,
  `page_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `page_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `page_link` text COLLATE utf8_unicode_ci NOT NULL,
  `template` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=191 ;

-- --------------------------------------------------------

--
-- Table structure for table `scrollnews`
--

CREATE TABLE IF NOT EXISTS `scrollnews` (
  `scroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `scroll_title` text COLLATE utf8_unicode_ci NOT NULL,
  `scroll_url` text COLLATE utf8_unicode_ci NOT NULL,
  `scroll_short` text COLLATE utf8_unicode_ci NOT NULL,
  `scroll_new` text COLLATE utf8_unicode_ci NOT NULL,
  `scroll_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`scroll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Table structure for table `stdact`
--

CREATE TABLE IF NOT EXISTS `stdact` (
  `stdact_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdact_title` text COLLATE utf8_unicode_ci NOT NULL,
  `stdact_url` text COLLATE utf8_unicode_ci NOT NULL,
  `stdact_short` text COLLATE utf8_unicode_ci NOT NULL,
  `stdact_new` text COLLATE utf8_unicode_ci NOT NULL,
  `stdact_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`stdact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `tmp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_type` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tmp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `tndr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tndr_title` text COLLATE utf8_unicode_ci NOT NULL,
  `tndr_url` text COLLATE utf8_unicode_ci NOT NULL,
  `tndr_short` text COLLATE utf8_unicode_ci NOT NULL,
  `tndr_new` text COLLATE utf8_unicode_ci NOT NULL,
  `tndr_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`tndr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `walkin`
--

CREATE TABLE IF NOT EXISTS `walkin` (
  `wlk_id` int(11) NOT NULL AUTO_INCREMENT,
  `wlk_title` text COLLATE utf8_unicode_ci NOT NULL,
  `wlk_url` text COLLATE utf8_unicode_ci NOT NULL,
  `wlk_short` text COLLATE utf8_unicode_ci NOT NULL,
  `wlk_new` text COLLATE utf8_unicode_ci NOT NULL,
  `wlk_file` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`wlk_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
