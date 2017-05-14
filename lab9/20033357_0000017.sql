-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 01 Gru 2016, 15:02
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000017`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komunikat`
--

CREATE TABLE IF NOT EXISTS `komunikat` (
  `idk` int(11) NOT NULL AUTO_INCREMENT,
  `komunikat` varchar(255) NOT NULL,
  `nick` varchar(55) NOT NULL,
  `datagodzina` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idu` int(11) NOT NULL,
  `colorbg` varchar(25) NOT NULL,
  PRIMARY KEY (`idk`),
  KEY `powku` (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=18 ;

--
-- Zrzut danych tabeli `komunikat`
--

INSERT INTO `komunikat` (`idk`, `komunikat`, `nick`, `datagodzina`, `idu`, `colorbg`) VALUES
(1, 'Czesc', 'bielas', '2016-11-23 18:19:12', 3, '#f89f59'),
(2, 'no hej', '11', '2016-11-23 18:19:42', 4, '#f21288'),
(3, 'o co chodzi?', '11', '2016-11-23 18:19:51', 4, '#f21288'),
(4, 'działa', 'bielas', '2016-11-23 18:20:24', 3, '#f89f59'),
(5, 'Elo ziomek jestes?', 'bielas', '2016-11-23 18:27:58', 3, '#f89f59'),
(6, 'no?', 'bielas', '2016-11-23 18:28:38', 3, '#f89f59'),
(7, 'no?', 'bielas', '2016-11-23 18:30:05', 3, '#f89f59'),
(8, 'no?', 'bielas', '2016-11-23 18:30:37', 3, '#f89f59'),
(9, 'no?', 'bielas', '2016-11-23 18:31:26', 3, '#f89f59'),
(10, 'AREK?', 'bielas', '2016-11-23 18:31:36', 3, '#f89f59'),
(11, 'Bede po 20 :)', '11', '2016-11-23 18:34:16', 4, '#f21288'),
(12, 'Jesteś w końcu?', 'bielas', '2016-11-23 20:43:50', 3, '#f89f59'),
(13, 'hello', 'bielas', '2016-11-24 10:05:08', 3, '#f89f59'),
(14, 'hello', 'bielas', '2016-11-24 10:05:09', 3, '#f89f59'),
(15, 'Czy mogę dołączyć do rozmowy?', 'tracz', '2016-11-24 15:51:15', 5, '#740c47'),
(16, 'gdzie są chwile dwie ja sie pytam ?', 'janusz', '2016-11-29 20:41:07', 6, '#522967'),
(17, 'wykonujemy prace serwisowe, wkrótce wrócimy ze zdwojoną siłą', 'bielas', '2016-11-30 15:12:51', 3, '#f89f59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konto`
--

CREATE TABLE IF NOT EXISTS `konto` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(85) NOT NULL,
  `haslo` varchar(85) NOT NULL,
  `colorbg` varchar(25) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `konto`
--

INSERT INTO `konto` (`idu`, `login`, `haslo`, `colorbg`) VALUES
(3, 'bielas', 'one22', '#f89f59'),
(4, '11', '123', '#f21288'),
(5, 'tracz', 'one11', '#740c47'),
(6, 'janusz', 'tracz', '#522967');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `komunikat`
--
ALTER TABLE `komunikat`
  ADD CONSTRAINT `powku` FOREIGN KEY (`idu`) REFERENCES `konto` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
