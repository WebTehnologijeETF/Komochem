-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 05:16 AM
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
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idvijesti` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autorkomentara` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `tekstkomentara` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idvijesti` (`idvijesti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `idvijesti`, `datum`, `autorkomentara`, `email`, `tekstkomentara`) VALUES
(1, 1, '2015-05-27 11:02:03', 'Ian Thorpe', 'ian@thorpe.ba', 'Prvi komentar'),
(2, 1, '2015-05-27 11:02:34', 'Ian Thrope', 'ian@thorpe.ba', 'Evo jos jedan komentar na prvu vijesti.'),
(3, 3, '2015-05-27 11:03:45', 'Mladen Vojcic Tifa', 'tifa@yahoo.com', 'Prvi komentar na trecu vijest hehe.'),
(4, 1, '0000-00-00 00:00:00', 'a', 'a', 'tekst'),
(6, 1, '0000-00-00 00:00:00', 'Micheal Phelps', 'michael@machine.ba', 'tekst'),
(24, 1, '0000-00-00 00:00:00', 'Autor1', 'Email1', 'Tekst1'),
(25, 1, '0000-00-00 00:00:00', 'Autor1', 'Email1', 'Tekst1'),
(31, 2, '0000-00-00 00:00:00', 'PrviAutor', 'PrviEmail', 'Prvi tekst'),
(32, 2, '2015-05-28 10:53:06', 'PrviAutor', 'PrviEmail', 'Prvi tekst'),
(33, 3, '2015-05-28 10:53:23', 'AA', 'AA', 'AA'),
(34, 3, '2015-05-28 10:53:36', 'AA', 'AA', 'AA'),
(35, 3, '2015-05-28 10:53:41', 'AA', 'AA', 'AA'),
(36, 3, '2015-05-28 10:54:49', 'AA', 'AA', 'AA'),
(37, 3, '2015-05-28 10:55:09', 'AA', 'AA', 'AA'),
(38, 3, '2015-05-28 10:56:08', 'BB', 'BB', 'BB'),
(39, 3, '2015-05-28 10:56:22', 'BB', 'BB', 'BB'),
(40, 2, '2015-05-28 10:57:07', 'Autor', 'Email', 'Tekst'),
(41, 2, '2015-05-28 10:57:13', 'Autor', 'Email', 'Tekst'),
(42, 2, '2015-05-28 10:57:15', 'Autor', 'Email', 'Tekst'),
(43, 2, '2015-05-28 10:57:33', 'AA', 'AA', 'A'),
(44, 1, '2015-05-28 10:58:59', 'Faris', 'faris', 'tekst komentara'),
(45, 1, '2015-05-28 10:59:12', 'Faris', 'faris', 'tekst komentara'),
(46, 1, '2015-05-28 11:02:27', 'aa', 'AA', 'aaa'),
(47, 3, '2015-05-28 11:07:23', 'A', 'A', 'A'),
(48, 1, '2015-05-28 11:07:33', 'aa', 'AA', 'aaa'),
(49, 2, '2015-05-28 11:08:13', 'FArisisisi', 'sodosdsd', 'dddfdfdf'),
(50, 2, '2015-05-28 11:08:18', 'FArisisisi', 'sodosdsd', 'dddfdfdf'),
(51, 2, '2015-05-28 11:08:24', 'FArisisisi', 'sodosdsd', 'dddfdfdf'),
(52, 2, '2015-05-28 11:13:21', '', '', ''),
(53, 2, '2015-05-28 11:13:34', 'Ponavljam', 'ponavljam', 'ponavljam'),
(54, 2, '2015-05-28 11:13:43', 'Ponavljam', 'ponavljam', 'ponavljam'),
(55, 2, '2015-05-28 11:13:48', 'Ponavljam', 'ponavljam', 'ponavljam'),
(56, 2, '2015-05-28 11:13:56', '', '', ''),
(57, 2, '2015-05-28 11:13:59', '', '', ''),
(58, 3, '2015-05-28 13:52:34', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`,`username`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `password`) VALUES
(2, 'refa', 'refa'),
(3, 'mrbean', 'mrbean'),
(5, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autornovosti` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `naslovnovosit` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `kratkiopis` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  `detaljno` varchar(1000) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `vrijeme`, `autornovosti`, `naslovnovosit`, `kratkiopis`, `detaljno`, `url`) VALUES
(1, '2015-05-27 12:41:43', 'Faris Odobasic', 'OVO JE NEKI PRIMJER NOVOSTI', 'Sada ću napisati neki osnovni tekst.\r\nOvaj osnovni tekst se nalazi u više redova.\r\nLorem ipsum dolor', 'vdje sada slijedi detaljniji tekst novosti. \r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.\r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.\r\nLorem ipsum dolor sit am', 'pr1.jpg'),
(2, '2015-05-25 21:55:11', 'Vedran Ljubovic', 'OVO JE NEKI PRIMJER NOVOSTI', 'Sada ću napisati neki osnovni tekst.\r\nOvaj osnovni tekst se nalazi u više redova.\r\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.', NULL, 'https://zamger.etf.unsa.ba/images/16x16/zad_ok.png'),
(3, '2015-05-26 16:53:40', 'Faris Odobasic', 'Prava zanimljiva novost', 'Ovo je bas kratak opis pravo zanimljive novosti.', 'Kao nesto detaljni opis pravo zanimljive novosti.', 'error.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`idvijesti`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
