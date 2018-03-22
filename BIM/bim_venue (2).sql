-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Mrz 2018 um 09:44
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bim_venue`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `userId` int(11) NOT NULL,
  `userName` varchar(130) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(600) NOT NULL,
  `users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`userId`, `userName`, `userEmail`, `userPass`, `users`) VALUES
(1, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0),
(3, 'test', 'test@test.com', '37268335dd6931045bdcdf92623ff819a64244b53d0e746d438797349d4da578', 1),
(7, 'ayse', 'ayse@uluc.at', 'fd4126b3ac636d350a2be275f5251fdfde316c34f00d7e03a5704d5cd96afea5', 1),
(8, 'jon', 'jon@jon.at', 'f225398f29e2c3081714c5fbec6ef484fccdd8a5ab35e8c7bcd5b0559a59a743', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `booking`
--

CREATE TABLE `booking` (
  `bId` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lName` varchar(150) NOT NULL,
  `bBegin` date NOT NULL,
  `bEmail` varchar(250) NOT NULL,
  `dcName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `booking`
--

INSERT INTO `booking` (`bId`, `fname`, `lName`, `bBegin`, `bEmail`, `dcName`) VALUES
(1, '', 'maria', '2018-03-10', 'anna.maria@aon.com', 'bb'),
(2, 'd', 'd', '2018-03-01', 'adgfsdfgsdf', 'aefsdf'),
(3, 'd', 'maria', '2018-03-10', 'anna.maria@aon.com', 'cbc'),
(4, 'd', 'maria', '2018-03-17', 'anna.maria@aon.com', 'bb'),
(5, 'd', 'maria', '2018-03-17', 'anna.maria@aon.com', 'bb'),
(6, 'd', 'maria', '2018-03-17', 'anna.maria@aon.com', 'bb'),
(7, 'd', 'an', '2018-03-04', 'anna.maria@aon.com', 'cbc'),
(8, 'd', 'an', '2018-03-04', 'anna.maria@aon.com', 'cbc'),
(9, 'd', 'an', '2018-03-04', 'anna.maria@aon.com', 'cbc'),
(10, 'd', 'an', '2018-03-04', 'anna.maria@aon.com', 'cbc'),
(11, '', '', '0000-00-00', '', ''),
(12, 'vxv', 'dfb ', '2018-03-24', 'fgvb @dgb-c', 'xfgb '),
(13, 'Ayse', 'Malibu', '2018-03-23', 'ayse@malibu', 'CBM'),
(14, 'John', 'Doe', '2018-03-22', 'john@doe.at', 'CBM'),
(15, '', '', '0000-00-00', '', ''),
(16, 'Sabine', 'Steirer', '0000-00-00', 'sabine@steirer.at', 'CBM'),
(17, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(18, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(19, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(20, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(21, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(22, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(23, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(24, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(25, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(26, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(27, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(28, 'ayse', 'uluc', '2018-03-14', 'ayseuluc@live.at', 'CBM'),
(29, '', '', '0000-00-00', '', ''),
(30, 'ayse', 'maria', '2018-03-19', 'anna.maria@aon.com', 'cbc'),
(31, 'ayse', 'ayse', '2018-03-22', 'ayse@ayse.at', 'ayse'),
(32, 'o', 'l', '2018-03-29', 'ayse@ayse.at', 'l'),
(33, 'aye', 'ayse', '2018-03-23', 'ayse@ayse.at', 'ayse'),
(34, 'aye', 'ayse', '2018-03-23', 'ayse@ayse.at', 'ayse'),
(35, '', 'yc', '0000-00-00', '', ''),
(36, '', 'xc ', '0000-00-00', '', ''),
(37, 'dc xc x', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cours`
--

CREATE TABLE `cours` (
  `cId` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cBegin` date NOT NULL,
  `cEnd` date NOT NULL,
  `cDetails` varchar(1600) NOT NULL,
  `cSchedule` varchar(1600) NOT NULL,
  `cDescription` varchar(1600) NOT NULL,
  `cPrice` int(50) NOT NULL,
  `capacity` int(20) DEFAULT NULL,
  `image` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cours`
--

INSERT INTO `cours` (`cId`, `cName`, `cBegin`, `cEnd`, `cDetails`, `cSchedule`, `cDescription`, `cPrice`, `capacity`, `image`) VALUES
(1, 'The Certified BIM Practitioner (CBP )', '2018-03-25', '2018-04-13', 'The Certified BIM Practitioner (CBP) is the first certificate offered by TBFAs BIM Education Program. It is the best-rounded certificate aiming at existing Architecture, Engineering, Construction and Building Operation professionals. This 16-hour course provides the majority of the important knowledge from understating what Building Information Modeling means to various management systems that are critical for anyone wanting to initiate or jump right into a BIM project.', ' 2-days | 16 hours: Tuesday & Thursday |  09:00 - 18:00', 'The Certified BIM Practitioner is a 16-hour condensed course aims at working professionals within the Architecture, Engineering, and Construction (AEC) industry.', 2300, 0, 'pic6.jpg'),
(2, 'Certified BIM Manager (CBM)', '2018-03-25', '2018-04-26', 'The Certified BIM Manager (CBM) is the third and most advanced certificate offered by TBFA BIM Education Program. It is a must have certification for anyone who intends to work and participate in Vietnam\'s AEC industry in the immediate future. Vietnams current BIM Roadmap stipulates that by 2019, the building industry will have to adopt BIM and implement on all Grade A, Infrastructure, and Category I construction projects. This means Vietnam\'s Architecture, Engineering, Construction and Building Operation professionals will have to learn and apply BIM at the design, engineering, and construction level.', '1-day |  4.5 hours: \r\n\r\nSaturday |  07:30 - 12:00', 'This course introduces you (the Executive and Senior Candidate) to the various concepts and components of the Building Information Modeling process.', 1400, 19, 'pic7.jpg'),
(3, 'The Certified BIM Executive (CBE)', '2018-04-02', '2018-05-04', 'The Certified BIM Executive (CBE) is the second certificate offered by BIM Education Program. It is one of the most well-rounded certificate aiming at executives or senior managers within Vietnam\'s Architecture, Engineering, Construction and Building Operation professionals. This 1-day course provides an overview of the important knowledge from understating what Building Information Modeling means to Building Management systems that are critical for executives who want to initiate BIM on their existing project immediately.', '15-day | 30 hours: \r\n\r\nMondays - Fridays | 18:00 - 20:00', 'This one-of-a-kind in-depth course introduces you to the various process and components of the Building Information Modeling management systems.', 1000, 10, 'pic4.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `userch`
--

CREATE TABLE `userch` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `userch`
--

INSERT INTO `userch` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userId`);

--
-- Indizes für die Tabelle `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bId`);

--
-- Indizes für die Tabelle `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`cId`);

--
-- Indizes für die Tabelle `userch`
--
ALTER TABLE `userch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `booking`
--
ALTER TABLE `booking`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT für Tabelle `cours`
--
ALTER TABLE `cours`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
