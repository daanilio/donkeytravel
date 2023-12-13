-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2023 om 15:36
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donkeytravel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ezels`
--

CREATE TABLE `ezels` (
  `id` int(30) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `leeftijd` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ezels`
--

INSERT INTO `ezels` (`id`, `naam`, `leeftijd`) VALUES
(1, 'Karel', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(64) NOT NULL,
  `achternaam` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `functie` varchar(64) NOT NULL,
  `wachtwoord` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achternaam`, `email`, `functie`, `wachtwoord`) VALUES
(1, 'Danilio', 'Veldhoen', 'danilio@test.com', 'medewerker', '202cb962ac59075b964b07152d234b70'),
(2, 'John', 'Doe', 'john@test.nl', 'klant', '202cb962ac59075b964b07152d234b70'),
(3, 'Jane', 'Doe', 'jane@test.nl', 'klant', '202cb962ac59075b964b07152d234b70'),
(4, 'Johnny', 'Doe', 'johnny@test.nl', 'klant', '202cb962ac59075b964b07152d234b70'),
(5, 'Jeremy', 'Doe', 'jeremy@test.nl', 'klant', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `herbergen`
--

CREATE TABLE `herbergen` (
  `id` int(64) NOT NULL,
  `naam` varchar(128) NOT NULL,
  `locatie` varchar(256) NOT NULL,
  `sterren` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `herbergen`
--

INSERT INTO `herbergen` (`id`, `naam`, `locatie`, `sterren`) VALUES
(1, 'Ibis', 'Westlandseweg', 3),
(2, 'Herberg', 'Ambacht', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `reserveerId` int(3) NOT NULL,
  `klantId` int(2) NOT NULL,
  `reserveerVoornaam` varchar(64) NOT NULL,
  `reserveerAchternaam` varchar(64) NOT NULL,
  `reserveerEmail` varchar(64) NOT NULL,
  `reserveerPersonen` int(2) NOT NULL,
  `reserveerTocht` varchar(64) NOT NULL,
  `reserveerStatus` int(11) NOT NULL DEFAULT 1,
  `reserveerDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`reserveerId`, `klantId`, `reserveerVoornaam`, `reserveerAchternaam`, `reserveerEmail`, `reserveerPersonen`, `reserveerTocht`, `reserveerStatus`, `reserveerDatum`) VALUES
(4, 0, 'Lisa', 'Test', 'lisa@test.nl', 2, 'Alpen', 2, '2023-11-27'),
(9, 2, 'John', 'Doe', 'john@email.nl', 3, 'Alpen', 1, '2023-11-05');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(64) NOT NULL,
  `naam` varchar(128) NOT NULL,
  `locatie` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `restaurants`
--

INSERT INTO `restaurants` (`id`, `naam`, `locatie`) VALUES
(1, 'Het Hart van Vlaardingen', 'Hoogstraat 169, 3131 BB Vlaardingen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tochten`
--

CREATE TABLE `tochten` (
  `tochtId` int(3) NOT NULL,
  `tochtLocatie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `tochten`
--

INSERT INTO `tochten` (`tochtId`, `tochtLocatie`) VALUES
(1, 'Alpen'),
(2, 'Bergen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ezels`
--
ALTER TABLE `ezels`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `herbergen`
--
ALTER TABLE `herbergen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`reserveerId`);

--
-- Indexen voor tabel `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tochten`
--
ALTER TABLE `tochten`
  ADD PRIMARY KEY (`tochtId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `ezels`
--
ALTER TABLE `ezels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `herbergen`
--
ALTER TABLE `herbergen`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `reserveerId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `tochten`
--
ALTER TABLE `tochten`
  MODIFY `tochtId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
