-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2023 г., 19:27
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `term_paper`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_special` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `id_special`) VALUES
(1, 'М-1', 1),
(2, 'Э-1', 2),
(3, 'ЭБ-1', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `specialities`
--

CREATE TABLE `specialities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `specialities`
--

INSERT INTO `specialities` (`id`, `name`) VALUES
(1, 'Менеджмент'),
(2, 'Экономика'),
(3, 'Экономическая безопасность');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `patronymic`, `id_group`, `login`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Денис', 'Малина', 'Владимирович', 2, 'lspa', 'lspa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Никита', 'Дерко', 'Станиславович', 1, 'mvged', 'vdvhw', '2022-05-20 03:52:22', '2022-05-20 03:52:22'),
(3, 'Станислав', 'Чуриков', 'Викторович', 1, 'sr5on', '6zri8', '2022-05-20 05:04:15', '2022-05-20 05:04:15'),
(4, 'Денис', 'Миндаль', 'Жалапаев', 3, 'bsxrn', 'c3s3u', '2022-05-20 06:15:53', '2022-05-20 06:15:53'),
(5, 'Николай', 'Леонтьев', 'Дмитриевич', 1, '2l6hb', '2j2wn', '2022-05-20 07:27:53', '2022-05-20 07:27:53'),
(6, 'Дмитрий', 'Смирнов', 'Витальевич', 1, '9c18s', 'wapvx', '2022-05-22 08:58:57', '2022-05-22 08:58:57'),
(7, 'Кирилл', 'Харин', 'Матвеевич', 3, '72aub', 'p2x4i', '2022-05-23 15:33:45', '2022-05-23 15:33:45'),
(8, 'Денис', 'Петрушин', 'Владимирович', 3, 'ixxpk', 'unvvl', '2022-05-24 17:30:35', '2022-05-24 17:30:35'),
(9, 'Матвей', 'Валенцев', 'Данилович', 1, '4zq4r', '2hx1m', '2022-05-24 17:34:47', '2022-05-24 17:34:47'),
(10, 'Игорь', 'Балашов', 'Алексеевич', 3, 'el85a', 'g715n', '2022-05-26 16:35:31', '2022-05-26 16:35:31');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_things` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `surname`, `id_things`, `login`, `password`) VALUES
(1, 'Станислав', 'Иванов', 1, 'lape', 'lape');

-- --------------------------------------------------------

--
-- Структура таблицы `term_papers`
--

CREATE TABLE `term_papers` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_student` int(11) DEFAULT NULL,
  `id_things` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '.',
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `term_papers`
--

INSERT INTO `term_papers` (`id`, `theme`, `id_student`, `id_things`, `file`, `grade`, `updated_at`, `created_at`) VALUES
(13, 'Курсовая по математике', 1, 1, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '5', '2022-05-26 15:11:35', '2022-05-25 09:43:31'),
(14, 'Курсовая работа по истории', 1, 2, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '5', '2022-05-25 17:55:06', '2022-05-25 09:44:09'),
(16, 'Курсовая по математике номер 2', 2, 1, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-25 17:11:06', '2022-05-25 17:11:06'),
(17, 'Курсовая по истории', 10, 2, 'Курсовик.docx', '5', '2022-05-26 16:36:43', '2022-05-26 16:36:25'),
(18, 'Курсовая по истории', 3, 2, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-26 17:40:21', '2022-05-26 17:40:21'),
(19, 'Курсовая по информатике', 4, 3, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-26 17:40:42', '2022-05-26 17:40:42'),
(20, 'Курсовая по математике', 5, 1, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-26 17:41:00', '2022-05-26 17:41:00'),
(21, 'Курсовая по истории', 6, 2, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-26 17:41:24', '2022-05-26 17:41:24'),
(22, 'Курсовая по информатике', 7, 3, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '5', '2023-02-11 07:05:18', '2022-05-26 17:41:43'),
(23, 'Курсовая по математике', 8, 1, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '4', '2023-02-11 07:05:58', '2022-05-26 17:42:02'),
(24, 'Курсовая по истории', 9, 2, 'Shablon_poyasnitelnoy_zapiski_3_kurs.docx', '.', '2022-05-26 17:42:21', '2022-05-26 17:42:21');

-- --------------------------------------------------------

--
-- Структура таблицы `things`
--

CREATE TABLE `things` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `things`
--

INSERT INTO `things` (`id`, `name`) VALUES
(1, 'Математика'),
(2, 'История'),
(3, 'Информатика');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_special` (`id_special`);

--
-- Индексы таблицы `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_group` (`id_group`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_object` (`id_things`);

--
-- Индексы таблицы `term_papers`
--
ALTER TABLE `term_papers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_object` (`id_things`),
  ADD KEY `id_student` (`id_student`);

--
-- Индексы таблицы `things`
--
ALTER TABLE `things`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `term_papers`
--
ALTER TABLE `term_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `things`
--
ALTER TABLE `things`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_special`) REFERENCES `specialities` (`id`);

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`);

--
-- Ограничения внешнего ключа таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`id_things`) REFERENCES `things` (`id`);

--
-- Ограничения внешнего ключа таблицы `term_papers`
--
ALTER TABLE `term_papers`
  ADD CONSTRAINT `term_papers_ibfk_1` FOREIGN KEY (`id_things`) REFERENCES `things` (`id`),
  ADD CONSTRAINT `term_papers_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
