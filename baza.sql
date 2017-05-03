-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 02 2017 г., 17:53
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `baza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL DEFAULT '12Qwert',
  `id_sotr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `login`, `psw`, `id_sotr`) VALUES
(1, '2', '2', 2),
(2, '12', '12', 4),
(3, '13', '13', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `otd` int(11) NOT NULL,
  `dostup` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `number`, `otd`, `dostup`) VALUES
(1, 'имя', 'имя', 4383, 132, 3),
(2, 'имя', 'Tutin', 3456, 165, 0),
(3, 'имя', 'Sonina', 7843, 165, 1),
(4, 'имя', 'имя', 4404, 132, 1),
(5, 'qqq', 'www', 3245, 165, 3),
(6, 'www', 'eee', 4346, 132, 1),
(7, 'pppp', 'pppp', 4356, 133, 2),
(8, 'aaaa', 'dsgdf', 3672, 133, 3),
(9, 'мама', 'папа', 4352, 142, 3),
(10, 'mama', 'papa', 4352, 146, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `zapiski`
--

CREATE TABLE `zapiski` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `data_sozdania` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_end` int(11) NOT NULL,
  `id_otprav` int(11) NOT NULL,
  `specialist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zapiski`
--

INSERT INTO `zapiski` (`id`, `tema`, `text`, `status`, `data_sozdania`, `data_end`, `id_otprav`, `specialist`) VALUES
(1, 'printer', 'тексттексттексттекст', 1, '2017-03-20 16:43:56', 0, 0, 2),
(2, 'po', 'тексттексттекст', 0, '2017-03-20 16:53:17', 0, 0, 0),
(3, 'po', 'тексттексттексттекст', 0, '2017-03-22 06:22:31', 0, 0, 0),
(4, 'printer', 'тексттекст', 2, '2017-03-22 06:25:13', 0, 0, 0),
(5, 'printer', 'тексттекст', 0, '2017-03-22 08:37:52', 0, 0, 3),
(6, 'po', 'gbgbgr', 0, '2017-03-22 08:41:37', 0, 0, 0),
(7, 'po', 'тексттексттекст', 2, '2017-03-26 12:39:24', 0, 0, 2),
(8, 'po', 'тексттексттекст', 0, '2017-04-01 10:59:26', 0, 0, 0),
(9, 'po', 'тексттексттекст', 2, '2017-04-03 08:49:31', 0, 2, 3),
(10, 'po', 'тексттексттекст', 1, '2017-04-03 08:50:56', 0, 2, 5),
(11, 'po', 'тексттексттекст', 1, '2017-04-03 08:52:16', 0, 2, 0),
(12, 'cad', 'тексттексттексттекст', 0, '2017-04-03 08:53:23', 0, 4, 2),
(13, 'cad', 'тексттексттекст', 0, '2017-04-03 08:54:06', 0, 3, 0),
(14, 'cad', 'тексттексттекст', 2, '2017-04-03 10:32:25', 0, 4, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zapiski`
--
ALTER TABLE `zapiski`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `zapiski`
--
ALTER TABLE `zapiski`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
