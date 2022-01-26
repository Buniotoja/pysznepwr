-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2022, 15:36
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pysznepwr`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `imie` varchar(10) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `email`, `haslo`) VALUES
(1, 'Adam', 'Nowak', 'a.nowak@serwis.pl', '1e70e62392d0b8a851f052caea73ac7d'),
(2, 'Michał', 'Buniowski', 'm.buniowski@serwis.pl', 'c0a8e1e5e307cc5b33819b387b5f01fd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `skladniki` varchar(150) COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `menu`
--

INSERT INTO `menu` (`id`, `nazwa`, `skladniki`, `cena`) VALUES
(1, 'margaritha', 'ser', 15),
(2, 'farmerska', 'ser, szynka, kukurydza, brokół', 20),
(3, 'miesny jeż', 'ser, szynka, salami, boczek', 25),
(4, 'najlepsza', 'ser, szynka, boczek, chilli, rukola', 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu2`
--

CREATE TABLE `menu2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `skladniki` varchar(150) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `menu2`
--

INSERT INTO `menu2` (`id`, `nazwa`, `skladniki`, `cena`) VALUES
(1, 'Kubek', 'wołowina, frytki, sos', 15),
(2, 'Tortilla', 'baranina, surówki, sos', 13),
(3, 'Talerz', 'wołowina, frytki, sórówki sos', 17),
(4, 'Bułka', 'baranina, sórówki, sos', 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu3`
--

CREATE TABLE `menu3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `skladniki` varchar(150) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `menu3`
--

INSERT INTO `menu3` (`id`, `nazwa`, `skladniki`, `cena`) VALUES
(1, '2forU', 'Hamburger, frytki/cola', 6),
(2, 'Wieśmac', 'kotlet, surówka, ser, sos', 15),
(3, 'HappyMeal', 'nuggetsy, frytki, jabłko', 12),
(4, 'Kubełek', 'nuggetsy, cola, sos', 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restauracje`
--

CREATE TABLE `restauracje` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `numer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `restauracje`
--

INSERT INTO `restauracje` (`id`, `nazwa`, `numer`) VALUES
(1, 'pizza Hut', 1),
(2, 'Noor kebab', 2),
(3, 'McDonald', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `menu3`
--
ALTER TABLE `menu3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `restauracje`
--
ALTER TABLE `restauracje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `menu2`
--
ALTER TABLE `menu2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `menu3`
--
ALTER TABLE `menu3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `restauracje`
--
ALTER TABLE `restauracje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
