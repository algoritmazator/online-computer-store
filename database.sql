-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2024 г., 18:39
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin1', '$2y$10$mOaE0N27oRUapevtNvXst.uCwfzV2G3EuQ/TI/iZno6r/nYfMvkVq');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `opisanie` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `full_name`, `opisanie`, `price`, `image`, `category`) VALUES
(17, 'мышь компьютерная ', 'Модель1.1', '1500', '20220421141203_80164.png', 'мыши'),
(18, 'мышь компьютерная ', 'модель1.2', '1750', '20220421141333_57510.png', 'мыши'),
(19, 'мышь компьютерная ', 'модель1.3', '2300', '20220421141450_33466.png', 'мыши'),
(20, 'мышь компьютерная', 'модель1.3', '1270', '20220421141613_19626.png', 'мыши'),
(21, 'мышь компьютерная', 'модель2.1', '1750', '20220421143543_84514.png', 'мыши'),
(22, 'мышь компьютерная', 'модель2.2', '3200', '20220909102651_99895.png', 'мыши'),
(23, 'мышь компьютерная', 'модель2.4', '1900', '20220909102651_99895.png', 'мыши'),
(24, 'мышь компьютерная', 'модель2.5', '1750', '20221007144600_85780.png', 'мыши'),
(25, 'мышь компьютерная', 'модель3.1', '3200', '20230202150214_79672.png', 'мыши'),
(26, 'мышь компьютерная', 'модель3.2', '1270', '20230220111702_52588.png', 'мыши'),
(27, 'мышь компьютерная', 'Модель3.3', '1900', '20230713135618_34340.png', 'мыши'),
(28, 'мышь компьютерная', 'Модель4.1', '3300', '20230717091234_52459.png', 'мыши'),
(29, 'мышь компьютерная', 'Модель4.2', '2300', '20231123150119_43390.png', 'мыши'),
(30, 'клавиатура', 'модель1.1', '3200', '20181228085423_63890.png', 'клавиатуры'),
(31, 'клавиатура', 'модель1.2', '3100', '20200814150943_20176.png', 'клавиатуры'),
(32, 'клавиатура', 'модель1.3', '2300', '20200821140033_25688.png', 'клавиатуры'),
(33, 'клавиатура', 'модель2.1', '3200', '20211220091656_14652.png', 'клавиатуры'),
(34, 'клавиатура', 'модель2.2', '4000', '20220921104205_84934.png', 'клавиатуры'),
(35, 'клавиатура', 'модель2.3', '4100', '20230308141102_82067.png', 'клавиатуры'),
(36, 'клавиатура', 'Модель3.1', '3800', '20221216102959_96954.png', 'клавиатуры'),
(37, 'клавиатура', 'модель3.2', '3900', '20230725140557_96890.png', 'клавиатуры'),
(38, 'наушники', 'Модель1.1', '1500', '20180208105215_26072.png', 'наушники'),
(39, 'наушники', 'модель1.2', '2300', '20180306154025_37553.png', 'наушники'),
(40, 'наушники', 'модель1.3', '1270', '20210721135142_29198.png', 'наушники'),
(41, 'наушники', 'модель2.1', '1750', '20230720141011_32362.png', 'наушники'),
(42, 'наушники', 'модель2.2', '1900', '20230720141329_99464.png', 'наушники'),
(43, 'наушники', 'модель2.2', '3200', '20230720141546_31502.png', 'наушники'),
(44, 'наушники', 'модель2.4', '1750', '20230720141828_30374.png', 'наушники'),
(45, 'наушники', 'модель2.5', '1500', '20230720141917_57535.png', 'наушники'),
(49, 'микрофон', 'Модель1.1', '1500', 'Слой 2.png', 'микрофоны');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'Иванов Иван Иванович', 'test', 'test@local.ru', '202cb962ac59075b964b07152d234b70', 'uploads/15698233144.png'),
(4, 'иввнов иван иванович', 'user111', 'ivan@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1708259917h5F2_UBT2ZM.jpg'),
(5, 'lena', 'lena', 'lena@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/1708260081k8m_U9iAJ88.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
