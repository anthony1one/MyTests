-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 02 2017 г., 19:08
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mytests_schema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `session_activity`
--

CREATE TABLE `session_activity` (
  `Id` int(11) NOT NULL,
  `SessionId` varchar(40) NOT NULL,
  `TestId` int(11) NOT NULL,
  `TestResult` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `session_activity`
--

INSERT INTO `session_activity` (`Id`, `SessionId`, `TestId`, `TestResult`) VALUES
(2, '9i7ahhbec0s8kqv4ufg6eqovp7', 2, 4),
(5, 'u9i7hcklrthttptahg6l54l6d5', 2, 30),
(16, '8mo1il176aidmgpjo58vk04k95', 3, 38),
(17, 'm29e044ddvkp2lobag7oi6kk06', 3, 27);

-- --------------------------------------------------------

--
-- Структура таблицы `test_info`
--

CREATE TABLE `test_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Question_num` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `test_info`
--

INSERT INTO `test_info` (`Id`, `Name`, `Question_num`, `Description`) VALUES
(2, 'Проверка сайта', 5, 'Тренировочный вариант проверки работы сайта'),
(3, 'Какой вы психолог?', 10, 'Каждому деловому человеку приходится оценивать других людей. Естественно, нелегко научиться делать это объективно.\r\nПредлагаемый тест, надеемся, поможет вам выяснить, есть ли у вас способности в области психологии, умение реально оценивать людей или вы нередко \"грешите\" по отношению к ним.\r\nНе слишком задумываясь выберите один из вариантов.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `session_activity`
--
ALTER TABLE `session_activity`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `session_activity`
--
ALTER TABLE `session_activity`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `test_info`
--
ALTER TABLE `test_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
