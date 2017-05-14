-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 29 Sty 2017, 14:10
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `20033357_0000031`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `IDA` int(11) NOT NULL AUTO_INCREMENT,
  `nazwisko` varchar(45) DEFAULT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `pseudonim` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `autor`
--

INSERT INTO `autor` (`IDA`, `nazwisko`, `imie`, `pseudonim`) VALUES
(1, 'Egmont R.', 'Koch', 'KRS'),
(2, 'Andrzej', 'Sapkowski', 'Sapp'),
(3, 'Chris ', 'Kyle', 'Legenda');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunek`
--

CREATE TABLE IF NOT EXISTS `gatunek` (
  `IDG` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDG`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `gatunek`
--

INSERT INTO `gatunek` (`IDG`, `nazwa`) VALUES
(1, 'Fantastyka'),
(2, 'Poezja'),
(3, 'Literatura faktu');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE IF NOT EXISTS `ksiazka` (
  `IDK` int(11) NOT NULL AUTO_INCREMENT,
  `IDA` int(11) DEFAULT NULL,
  `IDG` int(11) DEFAULT NULL,
  `IDWyd` int(11) DEFAULT NULL,
  `Sygnatura` varchar(45) DEFAULT NULL,
  `Tytul` varchar(45) DEFAULT NULL,
  `RokWydania` varchar(45) DEFAULT NULL,
  `CenaZakupu` varchar(45) DEFAULT NULL,
  `Stan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDK`),
  KEY `IDA_idx` (`IDA`),
  KEY `IDG_idx` (`IDG`),
  KEY `IDWyd_idx` (`IDWyd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=25 ;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`IDK`, `IDA`, `IDG`, `IDWyd`, `Sygnatura`, `Tytul`, `RokWydania`, `CenaZakupu`, `Stan`) VALUES
(1, 2, 1, 3, '0000001', 'Wiedźmin Czas Pogardy', '2011', '35.99', '0'),
(2, 3, 3, 2, '0000002', 'Snajper', '2015', '39.90', '0'),
(3, 1, 3, 1, '0000003', 'Licencja na zabijanie', '2015', '39.99', '0'),
(4, 2, 1, 3, '0000004', 'Wiedźmin Ostatnie życzenie', '2011', '35.99', '1'),
(5, 2, 1, 3, '0000005', 'Wiedźmin Miecz przeznaczenia', '2011', '35.99', '1'),
(6, 2, 1, 3, '0000006', 'Wiedźmin Krew Elfów', '2011', '35.99', '1'),
(7, 2, 1, 3, '0000007', 'Wiedźmin Chrzest ognia', '2011', '35.99', '0'),
(8, 2, 1, 3, '0000008', 'Wiedźmin Wieża jaskółki', '2011', '35.99', '1'),
(9, 2, 1, 3, '0000009', 'Wiedźmin Pani Jeziora', '2011', '39.90', '3'),
(10, 2, 1, 3, '0000010', 'Wiedźmin Sezon Burz', '2016', '49.90', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE IF NOT EXISTS `pracownik` (
  `IDP` int(11) NOT NULL AUTO_INCREMENT,
  `loginp` varchar(25) NOT NULL,
  `haslop` varchar(25) NOT NULL,
  `Nazwisko` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`IDP`, `loginp`, `haslop`, `Nazwisko`) VALUES
(1, 'pracownik1', 'gonzo11', 'Kowalczyk'),
(2, 'pracownik2', 'gonzo22', 'Majewski'),
(3, 'pracownik3', 'gonzo33', 'Domski'),
(4, 'pracownik4', 'gonzo44', 'Przybyłko');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwo`
--

CREATE TABLE IF NOT EXISTS `wydawnictwo` (
  `IDWyd` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDWyd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `wydawnictwo`
--

INSERT INTO `wydawnictwo` (`IDWyd`, `nazwa`) VALUES
(1, 'Czarna Owca'),
(2, 'znak'),
(3, 'superNOWA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczajacy`
--

CREATE TABLE IF NOT EXISTS `wypozyczajacy` (
  `IDWyp` int(11) NOT NULL AUTO_INCREMENT,
  `loginw` varchar(25) NOT NULL,
  `haslow` varchar(25) NOT NULL,
  `Nazwisko` varchar(45) DEFAULT NULL,
  `Imie` varchar(45) DEFAULT NULL,
  `Adres` varchar(95) DEFAULT NULL,
  PRIMARY KEY (`IDWyp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `wypozyczajacy`
--

INSERT INTO `wypozyczajacy` (`IDWyp`, `loginw`, `haslow`, `Nazwisko`, `Imie`, `Adres`) VALUES
(1, 'arek', 'arek', 'Krys', 'Arek', 'Bydgoszcz Kaliskiego 17'),
(2, 'adam', 'adam', 'Gonc', 'Adam', 'Bydgoszcz Ogińskiego 3'),
(3, 'piotr', 'piotr', 'Malik', 'Piotr', 'Paterek Łokietka 9'),
(4, 'andrzej', 'andrzej', 'Kowalski', 'Andrzej', 'Rozwarzyn 9');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE IF NOT EXISTS `wypozyczenia` (
  `IDW` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Godzina` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IDK` int(11) DEFAULT NULL,
  `IDG` int(11) NOT NULL,
  `IDWyd` int(11) NOT NULL,
  `IDA` int(11) NOT NULL,
  `IDP` int(11) DEFAULT NULL,
  `IDWyp` int(11) DEFAULT NULL,
  `DataZwrotu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDW`),
  KEY `IDK_idx` (`IDK`),
  KEY `IDP_idx` (`IDP`),
  KEY `IDWyp_idx` (`IDWyp`),
  KEY `powkz` (`IDG`),
  KEY `wyd` (`IDWyd`),
  KEY `IDAApow` (`IDA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=8 ;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`IDW`, `Data_Godzina`, `IDK`, `IDG`, `IDWyd`, `IDA`, `IDP`, `IDWyp`, `DataZwrotu`) VALUES
(2, '2017-01-28 21:20:32', 3, 3, 1, 1, 2, 3, '13-05-2017'),
(3, '2017-01-28 21:21:21', 2, 3, 2, 3, 2, 3, '12-02-2017'),
(4, '2017-01-28 21:21:40', 1, 1, 3, 2, 3, 4, '14-03-2017'),
(5, '2017-01-28 21:22:06', 10, 1, 3, 2, 2, 2, '15-02-2017'),
(6, '2017-01-28 21:22:28', 7, 1, 3, 2, 2, 3, '27-04-2017'),
(7, '2017-01-28 21:23:38', 2, 3, 2, 3, 2, 2, '21-03-2017');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD CONSTRAINT `IDA` FOREIGN KEY (`IDA`) REFERENCES `autor` (`IDA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDG` FOREIGN KEY (`IDG`) REFERENCES `gatunek` (`IDG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDWyd` FOREIGN KEY (`IDWyd`) REFERENCES `wydawnictwo` (`IDWyd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `IDAApow` FOREIGN KEY (`IDA`) REFERENCES `autor` (`IDA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDK` FOREIGN KEY (`IDK`) REFERENCES `ksiazka` (`IDK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDP` FOREIGN KEY (`IDP`) REFERENCES `pracownik` (`IDP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDWyp` FOREIGN KEY (`IDWyp`) REFERENCES `wypozyczajacy` (`IDWyp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `powkz` FOREIGN KEY (`IDG`) REFERENCES `gatunek` (`IDG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wyd` FOREIGN KEY (`IDWyd`) REFERENCES `wydawnictwo` (`IDWyd`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
