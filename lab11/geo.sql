-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 13 Gru 2016, 22:02
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000026`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `geo`
--

CREATE TABLE IF NOT EXISTS `geo` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `datagodzina` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `szerokosc` varchar(7) NOT NULL,
  `dlugosc` varchar(7) NOT NULL,
  `miejscowosc` varchar(255) NOT NULL,
  `nrdomu` varchar(25) NOT NULL,
  `kraj` varchar(25) NOT NULL,
  `kontynent` varchar(11) NOT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `geo`
--

INSERT INTO `geo` (`idg`, `datagodzina`, `szerokosc`, `dlugosc`, `miejscowosc`, `nrdomu`, `kraj`, `kontynent`) VALUES
(1, '2016-12-13 20:55:13', '53.1168', '17.5982', 'Paterek', '73', 'Poland', 'EU'),
(2, '2016-12-13 20:56:07', '53.3472', '-6.2439', '', '', 'Ireland', 'EU'),
(3, '2016-12-13 20:56:09', '53.3472', '-6.2439', '', '', 'Ireland', 'EU'),
(4, '2016-12-13 20:56:58', '53.1271', '18.02', 'Bydgoszcz', '73', 'Poland', 'EU'),
(5, '2016-12-13 20:57:04', '53.1271', '18.02', 'Bydgoszcz', '73', 'Poland', 'EU');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
