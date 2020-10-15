-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 15 2020 г., 20:00
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `symfony`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `text`) VALUES
(3, 'BigBiz LLC', 'BigBiz LLC announces a partnership with Clayton-Roberts - the leading financial consulting player.', 'After some testing I found a bug in my function \"myGetType\":\r\nThe check for \"is_callable\" was done before \"is_string\", so that something like <?php echo myGetType(\"max\"); ?> would output: \"function reference\" instead of \"string\"'),
(4, 'LLC Big News', 'BigBiz LLC announces some other kind of thing, not necessarily a partnership.', '\"is_callable\" and \"is_string\" can\'t be checked together in this method, so I\'ve removed the check for is_callable because it\'s a very rare usage case and if it\'s a valid string the check for is_callable never executes because is_string would be reached first (or vice-versa).'),
(5, 'The third news', 'The third news item is usually not even being read.', 'NaN and #IND will return double or float on gettype, while some inexistent values, like division by zero, will return as a boolean FALSE. 0 by the 0th potency returns 1, even though it is mathematically indetermined.'),
(6, 'The third news', 'The third news item is usually not even being read.', 'NaN and #IND will return double or float on gettype, while some inexistent values, like division by zero, will return as a boolean FALSE. 0 by the 0th potency returns 1, even though it is mathematically indetermined.'),
(7, 'The third news', 'The third news item is usually not even being read.', 'NaN and #IND will return double or float on gettype, while some inexistent values, like division by zero, will return as a boolean FALSE. 0 by the 0th potency returns 1, even though it is mathematically indetermined.');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `title`, `text`) VALUES
(2, 'Doodle I', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(3, 'Macrohard', 'The QueryBuilder object contains every method necessary to build your query. For more information on Doctrine’s Query Builder, consult Doctrine’s Query Builder documentation. For a list of the available conditions you can place on the query, see the Conditional Operators documentation specifically.'),
(4, 'A-Bode', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(7, 'GoMommy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(8, 'Lola-Cola', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(10, 'Colonel Motors', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(11, 'loop.index', 'The current iteration of the loop. (1 indexed)');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `title`, `text`, `position`) VALUES
(1, 'ohn Doe', 'The presidents always come first, but we’re sure you knew that. So here it is - the info about the biggest man on your company.', 'President and a big boss'),
(2, 'Sam Cohen', 'Also some kind of info about how good he is at whatever he does - that’s what vice presidents are for.', 'Vice president'),
(3, 'Jane Doe', 'This nice lady would love if you say a couple of good words about her on this page. Besides, it’s not a big deal for you - than why don’t you be nice and just put the info.', 'Personal assistant'),
(4, 'Jebediah Ray Tergesen', 'In the previous section, you began constructing and using more complex queries from inside a controller. In order to isolate, test and reuse these queries, it’s a good idea to create a custom repository class for your document and add methods with your query logic there.', 'Whatever, farmer perhaps'),
(5, 'ohn Doe', 'The presidents always come first, but we’re sure you knew that. So here it is - the info about the biggest man on your company.', 'President and a big boss');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
