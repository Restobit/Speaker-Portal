-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Júl 25. 01:37
-- Kiszolgáló verziója: 10.3.16-MariaDB
-- PHP verzió: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `speakerportal`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `magentacontent`
--

CREATE TABLE `magentacontent` (
  `id` int(1) NOT NULL,
  `name` varchar(6) COLLATE latin2_hungarian_ci NOT NULL,
  `position` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `magentacontent`
--

INSERT INTO `magentacontent` (`id`, `name`, `position`) VALUES
(1, 'pound', 1),
(2, 'fish', 2),
(3, 'foot', 3),
(4, 'milk', 4),
(5, 'super', 5),
(6, 'heart', 6);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `purplecontent`
--

CREATE TABLE `purplecontent` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(6) COLLATE latin2_hungarian_ci NOT NULL,
  `position` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `purplecontent`
--

INSERT INTO `purplecontent` (`id`, `name`, `position`) VALUES
(1, 'dog', 1),
(2, 'cat', 2),
(3, 'frog', 3),
(4, 'cow', 4),
(5, 'sheep', 5),
(6, 'lion', 6);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `username` varchar(16) COLLATE latin2_hungarian_ci NOT NULL,
  `password` varchar(32) COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `magentacontent`
--
ALTER TABLE `magentacontent`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `purplecontent`
--
ALTER TABLE `purplecontent`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `magentacontent`
--
ALTER TABLE `magentacontent`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `purplecontent`
--
ALTER TABLE `purplecontent`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
