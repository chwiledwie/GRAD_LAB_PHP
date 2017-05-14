-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 25 Lis 2016, 10:52
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000012`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konto`
--

CREATE TABLE IF NOT EXISTS `konto` (
  `idk` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(65) NOT NULL,
  `haslo` varchar(65) NOT NULL,
  PRIMARY KEY (`idk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `konto`
--

INSERT INTO `konto` (`idk`, `login`, `haslo`) VALUES
(1, 'bielas', 'one22'),
(2, 'tracz', 'one11'),
(3, 'jaglak', 'jaglak'),
(4, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE IF NOT EXISTS `posty` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `tresc` varchar(255) NOT NULL,
  `autor` varchar(55) NOT NULL,
  `datagodzina` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idw` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  PRIMARY KEY (`idp`),
  KEY `powPW` (`idw`),
  KEY `powPK` (`idk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`idp`, `tresc`, `autor`, `datagodzina`, `idw`, `idk`) VALUES
(15, 'Napisz na maila bielik.19@wp.pl to pomogÄ.', 'bielas', '2016-11-20 21:43:04', 1, 1),
(16, 'w razie co pisaÄ na priv', 'bielas', '2016-11-20 21:43:25', 1, 1),
(17, 'A ma ktoĹ skrypt rejestracji?', 'tracz', '2016-11-20 21:45:08', 1, 2),
(18, 'Tracz zaĹĂłĹź nowy wÄtek!', 'bielas', '2016-11-20 21:46:33', 1, 1),
(19, 'ProszÄ o pomoc', 'bielas', '2016-11-21 17:18:59', 2, 1),
(20, 'napisz na priv', 'tracz', '2016-11-21 19:10:10', 2, 2),
(21, 'ok?', 'tracz', '2016-11-21 19:10:42', 2, 2),
(22, 'ok?', 'tracz', '2016-11-21 19:13:02', 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `watek`
--

CREATE TABLE IF NOT EXISTS `watek` (
  `idw` int(11) NOT NULL AUTO_INCREMENT,
  `nazwaw` varchar(75) NOT NULL,
  `tresc` varchar(255) NOT NULL,
  `idk` int(11) NOT NULL,
  PRIMARY KEY (`idw`),
  KEY `powWU` (`idk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `watek`
--

INSERT INTO `watek` (`idw`, `nazwaw`, `tresc`, `idk`) VALUES
(1, 'PHP logowanie', 'Jak zrobiÄ prosty skrypt logowania?', 1),
(2, 'Poczta w Javie', 'ZmagaĹ sie ktoĹ z takim projektem?', 1);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD CONSTRAINT `powPK` FOREIGN KEY (`idk`) REFERENCES `konto` (`idk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `powPW` FOREIGN KEY (`idw`) REFERENCES `watek` (`idw`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `watek`
--
ALTER TABLE `watek`
  ADD CONSTRAINT `powWU` FOREIGN KEY (`idk`) REFERENCES `konto` (`idk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
