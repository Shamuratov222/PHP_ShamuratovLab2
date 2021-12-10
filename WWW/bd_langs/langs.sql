-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2021 г., 16:13
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `langs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(50) NOT NULL,
  `l_type` varchar(50) NOT NULL,
  `l_year` int(4) NOT NULL,
  `l_extype` varchar(50) NOT NULL,
  `l_author` varchar(50) NOT NULL,
  PRIMARY KEY (`l_id`),
  KEY `l_type` (`l_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`l_id`, `l_name`, `l_type`, `l_year`, `l_extype`, `l_author`) VALUES
(1, 'PHP', 'Интерпретируемый', 1995, 'Серверный', 'Расмус Лердорф'),
(2, 'Python', 'Интерпретируемый', 1991, 'Серверный', 'Гвидо ван Россум'),
(3, 'С', 'Компилируемый', 1972, 'Клиентский', 'Деннис Ритчи'),
(4, 'Go', 'Компилируемый', 2009, 'Клиентский', 'Роберт Гризмер, Роб Пайк, Кен Томпсон');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
