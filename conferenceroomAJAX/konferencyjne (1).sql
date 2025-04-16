-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 10, 2025 at 09:59 PM
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
-- Database: `konferencyjne`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modification_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by_user_id` int(11) NOT NULL,
  `modified_by_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `date`, `time`, `number_of_people`, `status`, `creation_date`, `modification_date`, `created_by_user_id`, `modified_by_user_id`) VALUES
(57, 21, '2024-11-29', '21:00:00', 12, 'Oczekujące', '2024-11-29 18:30:34', '2024-11-29 18:30:34', 21, 21),
(58, 21, '2024-12-04', '20:00:00', 12, 'Potwierdzone', '2024-12-04 18:00:38', '2024-12-14 16:47:34', 21, 21),
(59, 21, '2024-12-20', '19:00:00', 12, 'Oczekujące', '2024-12-06 19:25:00', '2024-12-14 16:50:27', 21, 21),
(62, 21, '2024-12-26', '20:00:00', 12, 'Zrealizowane', '2024-12-08 12:14:01', '2025-01-10 19:18:34', 21, 21),
(64, 21, '2024-12-14', '18:00:00', 22, 'Potwierdzone', '2024-12-14 16:17:13', '2024-12-14 16:47:18', 21, 21),
(65, 21, '2024-12-14', '19:00:00', 22, 'Oczekujące', '2024-12-14 16:18:02', '2024-12-14 16:53:51', 21, 21);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation_rooms`
--

CREATE TABLE `reservation_rooms` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `reservation_rooms`
--

INSERT INTO `reservation_rooms` (`id`, `reservation_id`, `room_id`) VALUES
(55, 57, 1),
(56, 58, 1),
(57, 59, 1),
(59, 62, 4),
(61, 64, 1),
(62, 65, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modification_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by_user_id` int(11) NOT NULL,
  `modified_by_user_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `creation_date`, `modification_date`, `created_by_user_id`, `modified_by_user_id`, `active`) VALUES
(1, 'admin', '2024-05-25 12:56:45', '2024-05-25 13:02:13', 2, 2, 1),
(3, 'Użytkownik', '2024-05-26 14:32:44', '2024-05-26 14:32:44', 2, 2, 1),
(4, 'Pracownik', '2024-05-27 13:19:03', '2024-05-27 13:19:03', 2, 2, 1),
(5, 'mod', '2024-06-02 15:55:21', '2024-06-02 15:55:21', 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `location`) VALUES
(1, 'Executive Room', 'Pokój 200'),
(2, 'Visionary Boardroom', 'Pokój 201'),
(3, 'Tech Hub', 'Pokój 202'),
(4, 'Panorama Space', 'Pokój 203'),
(5, 'Classic Lounge', 'Pokój 204'),
(6, 'Futuristic Hall', 'Pokój 205');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modification_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `creation_date`, `modification_date`, `active`) VALUES
(1, 'Jacek', 'Jackowski', 'lolo@gmail.com', 'lolo', '2024-05-20 17:02:01', '2025-01-10 20:58:13', 0),
(2, 'AdamA', 'Adamowski', 'xd@gmail.com', 'lolo', '2024-05-25 12:52:47', '2024-12-14 16:14:03', 1),
(3, 'aaa', 'aaaaa', 'aaaa@gmail.com', '$2y$10$wFQVs57KThZix6FqBp.45euG7JGNJkmHLiBMshn8mBz6OCQmU.Mua', '2024-05-26 15:35:41', '2024-05-26 15:35:41', 1),
(5, 'b', 'bb', 'b@gmail.com', '$2y$10$oqBCy3Xjrda20xyV46Xj5u6yPYINQ3MHlB39DA4yJPUMXDBJ5Se3y', '2024-05-26 15:39:41', '2024-05-26 15:39:41', 1),
(6, 'x', 'x', 'x@gmail.com', '$2y$10$uAbGKbcrZ4FKTWSwjXHpr.AHa/LayyBB6TSO1.7I2nzVevoju/kr6', '2024-05-26 16:12:12', '2024-05-26 16:12:12', 1),
(7, 'Pracownik', 'Pracowniczy', 'p@gmail.com', '$2y$10$QRC7X0euoGeclX/wMzVhQ.V8sjZMlWQ2OgSdBz525t3RKkJylNiyC', '2024-05-29 16:21:14', '2024-05-29 16:21:14', 1),
(8, 'Stanisław', 'Stachowski', 's@lolo.com', '$2y$10$2IwAUTvhxS5dpt6shnSvbu/esWuExgb7VY6161zdVQGQjSgs2WmXW', '2024-05-30 17:11:32', '2024-05-31 11:24:49', 1),
(9, 'Moderator', 'Moderatorowy', 'mod@gmail.com', '$2y$10$pJUGE.6u7REbRPvZbXKOZuIOMaB1YTsLHdL9FBa7Y22PgAS4xnuzS', '2024-06-02 15:54:15', '2024-06-02 15:54:15', 1),
(10, 'Janusz', 'Kowalski', 'janusz@mail.com', '$2y$10$EUzoKtGbZ6RbjpBBTA98O.wSAVwdF4fCS3Q2ae2b2aqQYuL3pbUYW', '2024-06-02 17:49:32', '2024-06-02 17:49:32', 1),
(12, 'Andrzej', 'Andrzejowy', 'andrzej@gmail.com', '$2y$10$FOv1ZxlTO80HAvk88rowOuThU9sXj4K1b6ykZ6vWEgQnWXFWbjiuG', '2024-06-03 21:44:09', '2024-06-03 21:44:09', 1),
(13, 'gdgd', 'gvfdg', 'gd@gdgd', '$2y$10$y6bfvcMWayANN8qSBCcyYO0qEY7M2mwYsD69Fjmm7wGZXYMilMbxy', '2024-06-03 22:36:12', '2024-06-03 22:39:02', 1),
(14, 'fs', 'fs', 'fs@dw', '$2y$10$91dgXgGol0QZcHavc6l6N.MYTiZff20PY2c5/bwaXJGUivpjxfSF6', '2024-06-03 23:12:32', '2024-06-03 23:12:32', 1),
(15, 'h', 'h', 'h@h', '$2y$10$/0bSJCOZdF3ZyqceaUry0u.o3IqN23waRDg7wTdz0gnE1NPx68LQq', '2024-06-03 23:14:36', '2024-06-03 23:14:36', 1),
(16, 'j', 'j', 'j@j', '$2y$10$8Kq2iFId0QG43yCgKgxi8uh0J5zl54zr/NUIHWS5ieRRu7svmbKim', '2024-06-03 23:16:05', '2024-06-03 23:16:05', 1),
(17, 'n', 'n', 'n@n', '$2y$10$SfLAZIgltmobjynaXatAXeEPYEtfngptSe4zdWch9y6AdJv1bVycO', '2024-06-03 23:17:29', '2024-06-03 23:17:29', 1),
(18, 'z', 'z', 'z@z', '$2y$10$q5Hpym1Zx9.7u7kZf8pQXOZ7llQwNloJqhVJ3dSDRZ5YgRXG5ozDW', '2024-06-03 23:20:45', '2024-06-03 23:20:45', 1),
(19, 'qq', 'qqq', 'q@q.pl', '$2y$10$1aLEZ93b4F0z5Ez/g8KdAuZ6pqq4tPgaMZA9mzc2a0PIl06dujDvC', '2024-06-03 23:24:29', '2024-06-03 23:24:29', 1),
(20, 'd', 'd', 'd@d', '$2y$10$00NotQ89m83gV/c1t8Xgiuw9L4oQXqtvRU.PEeAjX9nejPjJuq/Vu', '2024-06-04 00:12:54', '2024-06-04 00:12:54', 1),
(21, 'Kuba', 'Kubowski', 'a@b.pl', '$2y$10$IqB2oTI9f/2DePlSB.iW2OL4AOJw0Uv55EzuRuG2BIIyfTS1Qus4m', '2024-11-29 16:42:03', '2024-11-29 16:42:03', 1),
(22, 'user', 'user', 'user@user.pl', '$2y$10$CWulwc5DBn1Lc7tJTUYMCeMBoFsJ9CcQnUu01u1UoSUKHl.xMzXZi', '2024-12-08 12:14:24', '2024-12-08 12:14:24', 1),
(24, 'unactive', 'unactivowski', 'u@u.pl', '$2y$10$z5dzRfil5MQsn0fCdkhe1O.EP/bW.g.XSpSy3lzBV.wSVxvMLZ4jS', '2025-01-10 19:20:06', '2025-01-10 20:23:56', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `assignment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `removal_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `assignment_date`, `removal_date`) VALUES
(1, 2, 1, '2024-05-25 12:59:28', NULL),
(3, 1, 4, '2024-05-26 14:36:12', NULL),
(5, 5, 3, '2024-05-26 15:39:41', NULL),
(6, 6, 3, '2024-05-26 16:12:12', NULL),
(8, 7, 4, '2024-05-29 16:23:04', NULL),
(9, 8, 4, '2024-05-30 17:11:32', NULL),
(10, 9, 5, '2024-06-02 15:54:15', NULL),
(11, 10, 3, '2024-06-02 17:49:32', NULL),
(12, 12, 3, '2024-06-03 21:44:09', NULL),
(13, 13, 3, '2024-06-03 22:36:12', NULL),
(14, 14, 3, '2024-06-03 23:12:32', NULL),
(15, 15, 3, '2024-06-03 23:14:36', NULL),
(16, 16, 3, '2024-06-03 23:16:05', NULL),
(17, 17, 3, '2024-06-03 23:17:29', NULL),
(18, 18, 3, '2024-06-03 23:20:45', NULL),
(19, 19, 3, '2024-06-03 23:24:29', NULL),
(20, 20, 3, '2024-06-04 00:12:54', NULL),
(21, 21, 1, '2024-11-29 16:42:03', NULL),
(22, 22, 3, '2024-12-08 12:14:24', NULL),
(23, 24, 3, '2025-01-10 19:20:06', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `created_by_user_id` (`created_by_user_id`),
  ADD KEY `modified_by_user_id` (`modified_by_user_id`);

--
-- Indeksy dla tabeli `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name` (`role_name`),
  ADD KEY `created_by_user_id` (`created_by_user_id`),
  ADD KEY `modified_by_user_id` (`modified_by_user_id`);

--
-- Indeksy dla tabeli `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`created_by_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`modified_by_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  ADD CONSTRAINT `reservation_rooms_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`),
  ADD CONSTRAINT `reservation_rooms_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`created_by_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `roles_ibfk_2` FOREIGN KEY (`modified_by_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
