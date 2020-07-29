-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2020 at 11:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aryan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `phone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `footer_desc` text NOT NULL,
  `fb` varchar(100) NOT NULL,
  `google-plus` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `map` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`phone`, `email`, `address`, `footer_desc`, `fb`, `google-plus`, `twitter`, `map`, `id`) VALUES
('', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `page_title` varchar(300) NOT NULL,
  `title` varchar(150) NOT NULL,
  `small_desc` text NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `seo_linktitle` varchar(300) NOT NULL,
  `meta_title` varchar(300) NOT NULL,
  `meta_keyword` varchar(300) NOT NULL,
  `meta_desc` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `page`
--


-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(150) NOT NULL,
  `title2` varchar(150) NOT NULL,
  `display_order` int(11) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `slideshow`
--

