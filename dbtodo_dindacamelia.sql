-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2025 at 03:19 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtodo_dindacamelia`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbtodo`
--

CREATE TABLE IF NOT EXISTS `dbtodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tugas` varchar(225) NOT NULL,
  `jangkawaktu` date NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dbtodo`
--

INSERT INTO `dbtodo` (`id`, `tugas`, `jangkawaktu`, `keterangan`) VALUES
(1, 'belajarlaravel', '2025-02-28', 'selesai'),
(2, 'belajarphp', '2025-02-28', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tododindacamelia`
--

CREATE TABLE IF NOT EXISTS `tb_tododindacamelia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tugas` varchar(255) NOT NULL,
  `jangkawaktu` date NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_tododindacamelia`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
