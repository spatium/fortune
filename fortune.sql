-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 10 2014 г., 20:35
-- Версия сервера: 5.5.37
-- Версия PHP: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fortune`
--

-- --------------------------------------------------------

--
-- Структура таблицы `f_action`
--

CREATE TABLE IF NOT EXISTS `f_action` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_module` int(3) NOT NULL,
  `onInit` smallint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `f_config`
--

CREATE TABLE IF NOT EXISTS `f_config` (
  `multilang` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `f_config`
--

INSERT INTO `f_config` (`multilang`) VALUES
(1);

-- --------------------------------------------------------

--
-- Структура таблицы `f_entities`
--

CREATE TABLE IF NOT EXISTS `f_entities` (
  `id` int(11) NOT NULL,
  `entity` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `f_entities`
--

INSERT INTO `f_entities` (`id`, `entity`) VALUES
(1, 'controller'),
(2, 'controller');

-- --------------------------------------------------------

--
-- Структура таблицы `f_objects`
--

CREATE TABLE IF NOT EXISTS `f_objects` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_entity` int(3) NOT NULL,
  `name` varchar(16) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `f_objects`
--

INSERT INTO `f_objects` (`id`, `id_entity`, `name`, `title`, `description`) VALUES
(1, 1, 'List', 'Список всех', NULL),
(2, 1, 'Element', 'детальная', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `f_objects_config`
--

CREATE TABLE IF NOT EXISTS `f_objects_config` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `f_objects_config`
--

INSERT INTO `f_objects_config` (`id`, `title`, `keywords`, `description`) VALUES
(1, 'Квартира на сутки', '', 'Квартира на сутки');

-- --------------------------------------------------------

--
-- Структура таблицы `f_page`
--

CREATE TABLE IF NOT EXISTS `f_page` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_configs` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `f_page_route`
--

CREATE TABLE IF NOT EXISTS `f_page_route` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `page` varchar(64) NOT NULL,
  `id_objects` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `f_page_route`
--

INSERT INTO `f_page_route` (`id`, `page`, `id_objects`) VALUES
(1, 'about', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `f_url_rewrite`
--

CREATE TABLE IF NOT EXISTS `f_url_rewrite` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_object` int(3) NOT NULL,
  `url` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `f_url_rewrite`
--

INSERT INTO `f_url_rewrite` (`id`, `id_object`, `url`) VALUES
(1, 1, 'квартиры'),
(2, 1, 'квартиры');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
