-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 05 2013 г., 19:01
-- Версия сервера: 5.5.31
-- Версия PHP: 5.4.15-1~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `likes_dislikes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `repositories`
--

CREATE TABLE IF NOT EXISTS `repositories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repo_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `repo_name` (`repo_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `repositories`
--

INSERT INTO `repositories` (`id`, `repo_name`) VALUES
(8, ' '),
(10, ' r');

-- --------------------------------------------------------

--
-- Структура таблицы `repo_vote`
--

CREATE TABLE IF NOT EXISTS `repo_vote` (
  `repo` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_up` int(11) NOT NULL,
  `vote_down` int(11) NOT NULL,
  UNIQUE KEY `repo` (`repo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `repo_vote`
--

INSERT INTO `repo_vote` (`repo`, `vote_up`, `vote_down`) VALUES
('yii', 1, 2),
('yii-eauth', 1, 4),
('yii-user', 1, 2),
('yii2', 1, 1),
('YiiBoilerplate', 1, 2),
('YiiBooster', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `user_id` int(11) NOT NULL,
  `vote_up` int(11) NOT NULL,
  `vote_down` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `votes`
--

INSERT INTO `votes` (`user_id`, `vote_up`, `vote_down`) VALUES
(5856, 8, 4),
(43504, 1, 0),
(14555, 4, 1),
(9766, 1, 0),
(20234, 1, 0),
(100198, 4, 6),
(91159, 1, 0),
(77607, 1, 0),
(62809, 1, 0),
(123245, 1, 0),
(139048, 1, 0),
(47294, 8, 5),
(1443215, 10, 6),
(209837, 4, 3),
(189796, 2, 0),
(1321010, 1, 0),
(363611, 4, 2),
(993322, 1, 3),
(728971, 2, 0),
(1178722, 1, 0),
(1482054, 3, 1),
(132242, 1, 0),
(18924, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
