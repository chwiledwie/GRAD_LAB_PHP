-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 02 Sty 2017, 16:12
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000027`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logi`
--

CREATE TABLE IF NOT EXISTS `logi` (
  `idl` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(20) NOT NULL,
  `liczbaprob` int(11) NOT NULL,
  `poprawnelog` varchar(3) NOT NULL,
  `datagodzina` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=14 ;

--
-- Zrzut danych tabeli `logi`
--

INSERT INTO `logi` (`idl`, `IP`, `liczbaprob`, `poprawnelog`, `datagodzina`) VALUES
(1, '93.105.141.201', 0, 'NIE', '2017-01-01 12:27:16'),
(2, '93.105.141.201', 1, 'TAK', '2016-12-31 15:53:17'),
(3, '93.105.141.201', 1, 'TAK', '2016-12-31 15:53:48'),
(4, '93.105.141.201', 1, 'TAK', '2016-12-31 15:56:38'),
(5, '93.105.141.201', 1, 'TAK', '2016-12-31 15:57:29'),
(7, '93.105.141.201', 1, 'TAK', '2016-12-31 16:10:47'),
(8, '93.105.141.201', 1, 'TAK', '2016-12-31 16:12:14'),
(9, '93.105.141.201', 1, 'TAK', '2016-12-31 16:17:29'),
(10, '93.105.141.201', 1, 'TAK', '2016-12-31 16:29:09'),
(11, '93.105.141.201', 1, 'TAK', '2016-12-31 16:40:09'),
(12, '93.105.141.201', 1, 'TAK', '2016-12-31 17:18:53'),
(13, '93.105.141.201', 1, 'TAK', '2017-01-01 12:27:16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`idu`, `login`, `password`) VALUES
(20, 'arek', 'arek'),
(21, 'adam', 'adam'),
(22, 'bielas', 'one1288');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
