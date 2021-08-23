-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 22 2021 г., 07:29
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autors`
--

CREATE TABLE `autors` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `autors`
--

INSERT INTO `autors` (`id`, `name`, `surname`) VALUES
(1, 'Николай', 'Страусовски'),
(2, 'Евгений', 'Табаченко'),
(3, 'Елизавета', 'Шапошник'),
(4, 'Баба', 'Яга');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `ISBN` bigint(13) NOT NULL,
  `autors_id` int(11) NOT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_pages` int(11) NOT NULL,
  `genre` varchar(225) NOT NULL,
  `pub_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`ISBN`, `autors_id`, `title`, `num_pages`, `genre`, `pub_data`) VALUES
(1579463215874, 1, 'Идейные соображения высшего порядка.', 1153, 'Романтика', '2021-08-22 04:49:48'),
(1254896354875, 4, 'Повседневная практика показывает.', 345, 'Фентези', '2021-08-22 04:57:39'),
(5975486321568, 3, 'Повседневная практика показывает', 235, 'Ужасы', '2021-08-22 05:08:02');

-- --------------------------------------------------------

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `autors`
--
ALTER TABLE `autors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
