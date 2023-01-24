-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jan 2023 um 18:20
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `login`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ausgeliehenvon`
--

CREATE TABLE `ausgeliehenvon` (
  `benutzername` varchar(100) NOT NULL,
  `bezeichnung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeuge`
--

CREATE TABLE `fahrzeuge` (
  `FID` int(100) NOT NULL,
  `bezeichnung` varchar(100) NOT NULL,
  `ausgeliehen` int(1) DEFAULT NULL,
  `standort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `fahrzeuge`
--

INSERT INTO `fahrzeuge` (`FID`, `bezeichnung`, `ausgeliehen`, `standort`) VALUES
(1, 'E-Scooter 1', NULL, '49.4887, 8.4663'),
(2, 'E-Scooter 2', NULL, '49.48846, 8.46011'),
(3, 'E-Bike 1', NULL, '49.4867, 8.4708'),
(4, 'E-Bike 2', NULL, '49.4937, 8.458');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `benutzername` varchar(30) NOT NULL,
  `passwort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `email`, `benutzername`, `passwort`) VALUES
(1, 'test1@mail.com', 'Test', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'test@mail.com', 'Simon', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'test2@mail.com', 'Martin', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  ADD PRIMARY KEY (`FID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  MODIFY `FID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
