-- phpMyAdmin SQL Dump
-- version 4.7.4

-- Last Update: December 13, 2019
-- Server-Version: 10.1.29-MariaDB
-- PHP-Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Forename` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Birthday` date NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `RegisterDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `account`
--

INSERT INTO `account` (`ID`, `Username`, `Forename`, `Name`, `Birthday`, `EMail`, `Password`, `RegisterDate`) VALUES
(1, 'TheOne', 'Alina', 'Musterfrau', '1977-6-19', 'a@a.de', 'xyz', '2019-12-13'),
(2, 'TheTwo', 'Max', 'Mustermann', '1968-2-2', 'm@b-tu.de', 'bla', '2019-12-13');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
