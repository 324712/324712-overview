-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 28 jul 2021 om 12:26
-- Serverversie: 5.7.32
-- PHP-versie: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `324712`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `iconname` varchar(255) NOT NULL,
  `linkname` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `badgename` varchar(250) NOT NULL,
  `badgecolor` varchar(250) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `information`
--

INSERT INTO `information` (`id`, `type`, `iconname`, `linkname`, `url`, `badgename`, `badgecolor`, `year`) VALUES
(24, 'Demo', 'link', 'url', 'https://url.nl', 'Name', 'Primary', 'Year 2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
