-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 11:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wts`
--

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vrijeme` timestamp NOT NULL,
  `autornovosti` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `naslovnovosit` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `kratkiopis` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  `detaljno` varchar(1000) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `vrijeme`, `autornovosti`, `naslovnovosit`, `kratkiopis`, `detaljno`, `url`) VALUES
(1, '2015-05-25 21:51:11', 'Faris Odobasic', 'OVO JE NEKI PRIMJER NOVOSTI', 'Sada ću napisati neki osnovni tekst.\r\nOvaj osnovni tekst se nalazi u više redova.\r\nLorem ipsum dolor', 'vdje sada slijedi detaljniji tekst novosti. \r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.\r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.\r\nLorem ipsum dolor sit am', 'https://zamger.etf.unsa.ba/images/16x16/zad_ok.png'),
(2, '2015-05-25 21:55:11', 'Vedran Ljubovic', 'OVO JE NEKI PRIMJER NOVOSTI', 'Sada ću napisati neki osnovni tekst.\r\nOvaj osnovni tekst se nalazi u više redova.\r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.', NULL, 'https://zamger.etf.unsa.ba/images/16x16/zad_ok.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
