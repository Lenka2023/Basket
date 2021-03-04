-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2021 г., 15:40
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lenka2023`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apple_rate`
--

CREATE TABLE `apple_rate` (
  `id` int(255) NOT NULL,
  `Apple_rate` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `apple_rate`
--

INSERT INTO `apple_rate` (`id`, `Apple_rate`) VALUES
(1, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 1),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 2),
(38, 2),
(39, 2),
(40, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `balance`
--

CREATE TABLE `balance` (
  `Previous_balance` int(255) NOT NULL,
  `total_purchase_cost` int(11) DEFAULT NULL,
  `remaining_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `balance`
--

INSERT INTO `balance` (`Previous_balance`, `total_purchase_cost`, `remaining_balance`) VALUES
(100, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `beer_rate`
--

CREATE TABLE `beer_rate` (
  `id` int(255) NOT NULL,
  `Beer_rate` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `beer_rate`
--

INSERT INTO `beer_rate` (`id`, `Beer_rate`) VALUES
(1, 5),
(2, 5),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cheese_rate`
--

CREATE TABLE `cheese_rate` (
  `id` int(255) NOT NULL,
  `Cheese_rate` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `cheese_rate`
--

INSERT INTO `cheese_rate` (`id`, `Cheese_rate`) VALUES
(1, 1),
(2, 5),
(3, 3),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Product` varchar(25) COLLATE utf8_icelandic_ci NOT NULL,
  `Cost` float NOT NULL,
  `Rate` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `Product`, `Cost`, `Rate`) VALUES
(1, 'Apple', 0.3, 2),
(2, 'Beer', 2, 2),
(3, 'Water', 1, 2),
(4, 'Сheese', 3.74, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `water_rate`
--

CREATE TABLE `water_rate` (
  `id` int(255) NOT NULL,
  `Water_rate` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Дамп данных таблицы `water_rate`
--

INSERT INTO `water_rate` (`id`, `Water_rate`) VALUES
(1, 5),
(2, 1),
(3, 5),
(4, 2),
(5, 1),
(6, 1),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apple_rate`
--
ALTER TABLE `apple_rate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `beer_rate`
--
ALTER TABLE `beer_rate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cheese_rate`
--
ALTER TABLE `cheese_rate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `water_rate`
--
ALTER TABLE `water_rate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apple_rate`
--
ALTER TABLE `apple_rate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `beer_rate`
--
ALTER TABLE `beer_rate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `cheese_rate`
--
ALTER TABLE `cheese_rate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `water_rate`
--
ALTER TABLE `water_rate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
