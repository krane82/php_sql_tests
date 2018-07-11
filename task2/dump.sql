-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 11 2018 г., 23:40
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `strings`
--

CREATE TABLE `strings` (
  `string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `strings`
--

INSERT INTO `strings` (`string`) VALUES
('12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `strings`
--
ALTER TABLE `strings`
  ADD UNIQUE KEY `string_unique` (`string`(255));
COMMIT;