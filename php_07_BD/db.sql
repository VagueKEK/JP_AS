-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 26, 2024 at 06:52 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kredyt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynik`
--

CREATE TABLE `wynik` (
  `idwynik` int(11) NOT NULL,
  `kwota` double NOT NULL,
  `lat` int(11) NOT NULL,
  `procent` double NOT NULL,
  `rata` double NOT NULL,
  `total` double NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `wynik`
--

INSERT INTO `wynik` (`idwynik`, `kwota`, `lat`, `procent`, `rata`, `total`, `data`) VALUES
(1, 100000, 5, 5, 1750, 105000, '2024-05-06 19:40:51'),
(2, 1000.5, 4, 7, 22.3, 1070.4, '2024-05-06 19:41:01'),
(3, 100000, 5, 2, 1700, 102000, '2024-05-20 13:27:07'),
(4, 100000, 5, 2, 1700, 102000, '2024-05-20 16:12:36');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wynik`
--
ALTER TABLE `wynik`
  ADD PRIMARY KEY (`idwynik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wynik`
--
ALTER TABLE `wynik`
  MODIFY `idwynik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
