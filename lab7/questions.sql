-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 18 Lis 2016, 13:58
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000008`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `questionid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `choice1` varchar(55) NOT NULL,
  `choice2` varchar(55) NOT NULL,
  `choice3` varchar(55) NOT NULL,
  `answer` varchar(55) NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `questions`
--

INSERT INTO `questions` (`questionid`, `name`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'Ile bitów ma jeden bajt?', '3', '4', '8', '8'),
(2, '1 MB to ile kB?', '1000', '1024', '960', '1024'),
(3, 'Jaka jest jednostka częstotliwości?', 'S', 'Hz', '1/s', 'Hz'),
(4, 'Jednostką tłumienności jest?', 'dB', 'W', 'dB/km', 'dB');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
