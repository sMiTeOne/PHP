-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 07 2016 г., 07:15
-- Версия сервера: 5.6.12-log
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `phonelist`
--

CREATE TABLE IF NOT EXISTS `phonelist` (
  `id` int(11) NOT NULL,
  `firstName` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `lastName` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `birthDay` date NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `phonelist`
--

INSERT INTO `phonelist` (`id`, `firstName`, `lastName`, `birthDay`, `email`, `phone`) VALUES
(0, 'Кузьма', 'Степанов', '1983-05-04', 'kuzya@mail.ru', '+79689106245'),
(1, 'Вася', 'Форточкин', '2016-05-02', NULL, '+79186284286'),
(2, 'Аркадий', 'Паравозов', '1989-06-24', 'trainpower@mail.ru', '+79153627428'),
(3, 'Кеша', 'Свистоплясов', '2016-06-26', NULL, '+79134271386');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `phonelist`
--
ALTER TABLE `phonelist`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
