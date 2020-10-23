-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2020 г., 09:38
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reja`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 2, 1603096278),
('member', 3, 1603096379),
('theCreator', 1, 1602674219);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator of this application', NULL, NULL, 1602674186, 1602674186),
('employee', 1, 'Employee of this site/company who has lower rights than admin', NULL, NULL, 1602674186, 1602674186),
('manageUsers', 2, 'Allows admin+ roles to manage users', NULL, NULL, 1602674186, 1602674186),
('member', 1, 'Authenticated user, equal to \"@\"', NULL, NULL, 1602674186, 1602674186),
('premium', 1, 'Premium users. Authenticated users with extra powers', NULL, NULL, 1602674186, 1602674186),
('theCreator', 1, 'You!', NULL, NULL, 1602674186, 1602674186),
('usePremiumContent', 2, 'Allows premium+ roles to use premium content', NULL, NULL, 1602674186, 1602674186);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'employee'),
('admin', 'manageUsers'),
('employee', 'premium'),
('premium', 'member'),
('premium', 'usePremiumContent'),
('theCreator', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 'O:25:\"app\\rbac\\rules\\AuthorRule\":3:{s:4:\"name\";s:8:\"isAuthor\";s:9:\"createdAt\";i:1602674186;s:9:\"updatedAt\";i:1602674186;}', 1602674186, 1602674186);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1602674181),
('m141022_115823_create_user_table', 1602674183),
('m141022_115912_create_rbac_tables', 1602674184);

-- --------------------------------------------------------

--
-- Структура таблицы `reklama`
--

CREATE TABLE `reklama` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `slug` varchar(25) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `tumans_shahars_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tumans_shahars_id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `tel` varchar(25) DEFAULT '''NULL''',
  `telegram` varchar(128) DEFAULT '''NULL''',
  `location` varchar(255) DEFAULT '''NULL''',
  `youtube_link` varchar(255) DEFAULT '''NULL''',
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `name`, `user_id`, `tumans_shahars_id`, `photo`, `short`, `text`, `slug`, `views`, `status`, `tel`, `telegram`, `location`, `youtube_link`, `create_date`, `update_date`) VALUES
(1, 'sport forma', 1, 1, '', 'sport forma do\'koni', 'liverpoolliverpoolliverpoolliverpoolliverpool liverpoolliverpoolliverpoolliverpoolliverpool liverpoolliverpoolliverpoolliverpoolliverpool', 'sport', 78, 1, '+998979933632', '', '', '', '2020-10-16', '2020-10-23'),
(3, 'kitoblar', 2, 1, '', 'kitoblaaaaar', 'kitoblaaaaarkitoblaaaaar kitoblaaaaarkitoblaaaaar kitoblaaaaarkitoblaaaaar dfgdf gfdg dfgfd gfd', 'kitob', 5, 1, '+998901404641', '', '', '', '2020-10-16', '2020-10-20'),
(6, 'kastim shim', 3, 7, '', 'kastim shim', 'kastim shim', 'kastimshim', 8, 1, '986548574', '', '', '', '2020-10-19', '2020-10-20');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_items`
--

CREATE TABLE `shop_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tuman_shahar_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_items`
--

INSERT INTO `shop_items` (`id`, `name`, `tuman_shahar_id`, `shop_id`, `user_id`, `title`, `photo`, `short`, `views`, `slug`, `status`, `price`, `sale`, `created_date`, `updated_date`) VALUES
(1, 'Krasofka', 1, 1, 1, 'Krasofka', 'Krasofkalar', '', 2, 'Krasofka', 1, 45000, NULL, '2020-10-16', '2020-10-20'),
(3, 'Kepka', 1, 1, 1, 'kepka', '', 'Kepka', 6, 'kepka', 1, 3500, NULL, '2020-10-16', '2020-10-19'),
(4, 'to\'p', 1, 3, 2, 'koptok', '', '', 4, 'koptok', 1, 2500, NULL, '2020-10-16', '2020-10-19'),
(5, 'Turkiya kastim', 1, 6, 3, 'Turkiya kastim', '', '', 1, 'turkkastim', 1, 120000, NULL, '2020-10-19', '2020-10-19'),
(7, 'Namangan kastim', 1, 6, 3, 'Namangan kastim', '', '', 8, 'namangankastim', 1, 150000, NULL, '2020-10-19', NULL),
(11, 'Futbolka', 1, 1, 1, 'Yozgi futbolka', '', 'Yozgi futbolka', 5, 'futbolka', 1, 50000, NULL, '2020-10-20', NULL),
(12, 'Spartivka', 1, 1, 1, 'Spartivka', '', '', 9, 'spartivka', 1, 98000, NULL, '2020-10-20', NULL),
(15, 'Futbolka Orginal', 1, 1, 1, 'Futbolka Orginal', '', '', 3, 'futbolkas', 1, 90000, NULL, '2020-10-20', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tumans_shahars`
--

CREATE TABLE `tumans_shahars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tumans_shahars`
--

INSERT INTO `tumans_shahars` (`id`, `name`, `img`, `slug`, `status`, `template_id`, `viloyat_id`, `create_date`, `update_date`) VALUES
(1, 'Asaka', '', 'asaka', 1, 1, 1, '2020-10-15', NULL),
(2, 'Marxamat', '', 'marxamat', 1, 1, 1, '2020-10-15', NULL),
(3, 'Shaxrixon', '', 'shaxrixon', 1, 1, 1, '2020-10-15', NULL),
(4, 'Quva', '', 'quva', 1, 1, 2, '2020-10-15', '2020-10-20'),
(5, 'Marg\'ilon', '', 'margilan', 1, 1, 2, '2020-10-15', '2020-10-20'),
(7, 'Pop', '', 'pop', 1, 1, 3, '2020-10-15', '2020-10-20');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `tuman_shahar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `status`, `auth_key`, `password_reset_token`, `account_activation_token`, `created_at`, `updated_at`, `tuman_shahar_id`) VALUES
(1, 'sardor', 'sardor88.88@mail.ru', '$2y$13$n0somayxG5khwJWMuw9X/ezj8o99qAt9P6d2h6qnSQIKDgREBASNK', 10, 'PAUC8hfLd-o7QxsFNNPiGdRaopbh-NS8', NULL, NULL, 1602674219, 1602674219, NULL),
(2, 'lfc', 'Lfc@lfc.com', '$2y$13$EqTMMDS.m8ywa72rg8a3d.zyIkADkLFY5LbWJLzPxnzslgFbH/N9e', 10, '5GYW7ygAhiFCcVGZyaZt9qn2DHsOuy4A', NULL, NULL, 1602754393, 1603096278, NULL),
(3, 'liverpool', 'sasa@ok.ru', '$2y$13$G0hX7Wpd7pdxlDpqDgBGMu4Zu3xbBAhZfAspF7aVjObHGFprpmm6W', 10, 'CzcBjxXuk_7l21eXwE7lsFsP-Isg-mwm', NULL, NULL, 1603088764, 1603096379, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `viloyats`
--

CREATE TABLE `viloyats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `viloyats`
--

INSERT INTO `viloyats` (`id`, `name`, `img`, `create_date`, `update_date`) VALUES
(1, 'Andijon', '', '2020-10-15', '2020-10-15'),
(2, 'Farg\'ona', '', '2020-10-15', NULL),
(3, 'Namangan', '', '2020-10-15', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `reklama`
--
ALTER TABLE `reklama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `shop_to_tuman_shahar` (`tumans_shahars_id`),
  ADD KEY `shop_to_user` (`user_id`);

--
-- Индексы таблицы `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `item_to_shop` (`shop_id`),
  ADD KEY `item_to_tuman_shahar` (`tuman_shahar_id`),
  ADD KEY `item_to_user` (`user_id`);

--
-- Индексы таблицы `tumans_shahars`
--
ALTER TABLE `tumans_shahars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `tumant_to_viloyat` (`viloyat_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `account_activation_token` (`account_activation_token`),
  ADD KEY `user_to_tuman_shahar` (`tuman_shahar_id`);

--
-- Индексы таблицы `viloyats`
--
ALTER TABLE `viloyats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reklama`
--
ALTER TABLE `reklama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `shop_items`
--
ALTER TABLE `shop_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `tumans_shahars`
--
ALTER TABLE `tumans_shahars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `viloyats`
--
ALTER TABLE `viloyats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shop_to_tuman_shahar` FOREIGN KEY (`tumans_shahars_id`) REFERENCES `tumans_shahars` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shop_items`
--
ALTER TABLE `shop_items`
  ADD CONSTRAINT `item_to_shop` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `item_to_tuman_shahar` FOREIGN KEY (`tuman_shahar_id`) REFERENCES `tumans_shahars` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `item_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tumans_shahars`
--
ALTER TABLE `tumans_shahars`
  ADD CONSTRAINT `tumant_to_viloyat` FOREIGN KEY (`viloyat_id`) REFERENCES `viloyats` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_to_tuman_shahar` FOREIGN KEY (`tuman_shahar_id`) REFERENCES `tumans_shahars` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
