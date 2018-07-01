-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2018 г., 07:29
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `work-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text,
  `category_position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `category_position`) VALUES
(1, 'Семена сои ', NULL, 0),
(2, 'Семена гречихи ', NULL, 0),
(3, 'Семена люцерны ', NULL, 0),
(4, 'Семена чечевицы ', NULL, 0),
(5, 'Семена льна ', NULL, 0),
(6, 'Семена гороха ', NULL, 0),
(7, 'Семена сорго ', NULL, 0),
(8, 'Семена суданской травы ', NULL, 0),
(9, 'Семена нута ', NULL, 0),
(10, 'Семена горчицы ', NULL, 0),
(11, 'Семена проса ', NULL, 0),
(12, 'Семена вики яровой ', NULL, 0),
(13, 'Семена ячменя ярового ', NULL, 0),
(14, 'Семена ячменя озимого ', NULL, 0),
(15, 'Семена вики озимой ', NULL, 0),
(16, 'Смена клевера ', NULL, 0),
(17, 'Семена кориандра ', NULL, 0),
(18, 'Семена эспарцета ', NULL, 0),
(19, 'Семена люпина ', NULL, 0),
(20, 'Семена тимофеевки ', NULL, 0),
(21, 'Семена тритикале ', NULL, 0),
(22, 'Семена овса голозерного', NULL, 0),
(23, 'Семена овса пплёнчатого', NULL, 0),
(24, 'Семена твердой пшеницы', NULL, 0),
(25, 'Семена мягкой пшеницы', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name_first` varchar(255) NOT NULL,
  `name_second` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `qwert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `products_list` varchar(512) NOT NULL,
  `count_list` varchar(512) CHARACTER SET utf16 NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house_block_flat` varchar(255) NOT NULL,
  `desctiption_to_order` varchar(1000) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_text`) VALUES
(1, 'О нас', '<p>ХаскомТрейд - это компания, которая на протяжении нескольких лет предлагает фермерским хозяйствам купить семена пшеницы и прочих культур. Среди нашей продукции только качественные семена от ведущих хозяйств Украины.</p><p>Компания занимается продажей семян пшеницы, люцерны, эспарцета, тимофеевки, клевера, люпина, горчицы, сои, кориандра, тритикале, ячменя ярового и озимого, проса, льна, гороха, гречихи, овса, нута, сорго, вики яровой и озимой, суданской травы и чечевицы оптом.</p>'),
(3, 'Для партнеров', '<p>текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст </p>'),
(4, 'Оставить отзыв', '<p>текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст </p>');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `to_home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_img`, `to_home`) VALUES
(1, 1, 'Семена сои Валюта под гербицид, 1 Репродукция', 'semena-soi-valyuta-pod-gerbitsid-1-reproduktsiya-1568596.jpg', ''),
(2, 1, 'Семена сои Ультра под гербицид, 1 Репродукция', 'semena-soi-ultra-pod-gerbitsid-1-reproduktsiya-1527690.png', ''),
(3, 1, 'Семена сои Сенсор под гербицид, 1 Репродукция', 'semena-soi-sensor-pod-gerbitsid-1-reproduktsiya-1527689.jpg', 'to_home'),
(4, 1, 'Семена сои Монро под гербицид , 1 Репродукция', 'semena-soi-monro-pod-gerbitsid-1-reproduktsiya-1527688.jpeg', ''),
(5, 1, 'Семена сои Максус под гербицид, 1 Репродукция', 'semena-soi-maksus-pod-gerbitsid-1-reproduktsiya-1527687.jpg', ''),
(6, 1, 'Семена сои Венус под гербицид, 1 Репродукция', 'semena-soi-apollo-pod-gerbitsid-1-reproduktsiya-1527686.png', ''),
(7, 1, 'Семена сои Аполло под гербицид, 1 Репродукция', 'semena-soi-apollo-1-reproduktsiya-1527684.jpg', ''),
(8, 1, 'Семена сои Сиверка, Элита / 1 Репродукция', 'semena-soi-siverka-elita1-reproduktsiya-1527683.jpg', ''),
(9, 1, 'Семена сои Ментор, Элита / 1 Репродукция', 'semena-soi-mentor-elita1-reproduktsiya-1527682.jpg', ''),
(10, 1, 'Семена сои Диона, Элита / 1 Репродукция', 'semena-soi-diona-elita1-reproduktsiya-1527681.jpg', ''),
(11, 1, 'Семена сои Вильшанка, Элита / 1 Репродукция', 'semena-soi-vilshanka-elita1-reproduktsiya-1527680.jpg', ''),
(12, 1, 'Семена сои Алмаз, Элита / 1 Репродукция', 'semena-soi-almaz-elita1-reproduktsiya-1527679.jpg', ''),
(13, 1, 'Семена сои Александрит, Элита / 1 Репродукция', 'semena-soi-aleksandrit-elita1-reproduktsiya-1527651.jpg', ''),
(14, 1, 'Семена сои Адамос, Элита / 1 Репродукция', 'semena-soi-adamos-elita1-reproduktsiya-1527448.jpg', ''),
(15, 2, 'Семена гречихи гречки Гренби, 1 репродукция', 'semena-grechihi-grechki-grenbi-1-reproduktsiya-1568647.jpg', ''),
(16, 2, 'Семена гречихи Арно, 1 репродукция', 'semena-grechihi-arno-1-reproduktsiya-1568641.jpeg', ''),
(17, 2, 'Семена гречихи Крупинка, Элита / 1 репродукция', 'semena-grechihi-krupinka-1523975.jpeg', 'to_home'),
(18, 2, 'Семена гречихи Юбилейная 100, Элита / 1 Репродукция', 'semena-grechihi-yubileynaya-100-1523969.jpg', ''),
(19, 2, 'Семена гречихи Антария, Элита / 1 Репродукция', 'semena-grechihi-antariya-1523967.jpg', ''),
(20, 2, 'Семена гречихи Девятка, 1 Репродукция', 'semena-grechihi-devyatka-1523964.jpg', ''),
(21, 2, 'Семена гречихи Сын, Элита / 1 Репродукция', 'semena-grechihi-syn-1523961.jpg', ''),
(22, 2, 'Семена гречихи Селяночка, Элита / 1 Репродукция', 'semena-goroha-tsarevich-1124995-1523951.jpeg', ''),
(23, 3, 'Семена люцерны Надежда, Элита / 1 Репродукция', 'semena-lyutserny-nadezhda-elita1-reproduktsiya-1525296.jpg', ''),
(24, 3, 'Семена люцерны Вера, Элита / 1 Репродукция', 'semena-lyutserny-vera-elita1-reproduktsiya-1525295.jpg', ''),
(25, 4, 'Семена чечевицы красной Максим, 1 Репродукция', 'semena-chechevitsy-krasnoy-maksim-1-reproduktsiya-1530635.jpg', ''),
(26, 4, 'Семена чечевицы зеленой Линза, 1 Репродукция', 'semena-chechevitsy-linza-1-reproduktsiya-1530633.jpg', ''),
(27, 5, 'Семенальна Эврика, Элита / 1 Репродукция', 'semena-lna-evrika-elita1-reproduktsiya-1542426.jpeg', ''),
(28, 6, 'Семена гороха Астронавт, 1 Репродукция', 'semena-goroha-astronavt-1-reproduktsiya-1567976.png', 'to_home'),
(29, 6, 'Семена гороха Мадонна, 1 Репродукция', 'semena-goroha-madonna-1-reproduktsiya-1525263.jpg', ''),
(30, 6, 'Семена гороха Царевич, Элита / 1 Репродукция', 'semena-goroha-tsarevich-1523937.jpg', ''),
(31, 6, 'Семена гороха Саламанка, 1 Репродукция', 'semena-goroha-salamanka-1523935.jpg', ''),
(32, 6, 'Семена гороха Оплот, Элита / 1 Репродукция', 'semena-goroha-oplot-1124987-1523934.jpg', ''),
(33, 6, 'Семена гороха Модус, Элита / 1 Репродукция', 'semena-goroha-modus-1523931.jpg', ''),
(34, 6, 'Семена гороха Зекон, 1 Репродукция', 'semena-goroha-zekon-1523894.jpg', ''),
(35, 6, 'Семена гороха Готиевский, 1 Репродукция', 'semena-goroha-gotievskiy-1523893.jpeg', ''),
(36, 6, 'Семена гороха Глянс, Элита / 1 Репродукция', 'semena-goroha-glyans-1523892.jpeg', 'to_home'),
(37, 7, 'Семена сорго Карликовое 45, Элита', 'semena-sorgo-karlikovoe-45-elita-1530660.jpg', ''),
(38, 8, 'Семена суданской травы Билявка, Элита / 1 Репродукция', 'semena-sudanskoy-travy-bilyavka-elita1-reproduktsiya-1565371.jpg', ''),
(39, 8, 'Семена суданской травы Днепровская 54, Элита / 1 Репродукция', 'semena-sudanskoy-travy-dneprovskaya-54-elita1-reproduktsiya-1530663.jpg', ''),
(40, 8, 'Семена суданской травы Голубовская 25, Элита / 1 Репродукция', 'semena-sudanskoy-travy-golubovskaya-25-elita1-reproduktsiya-1530662.png', ''),
(41, 9, 'Семена нута Иордан, 1 Репродукция', 'semena-nuta-iordan-1-reproduktsiya-1594055.png', ''),
(42, 10, 'Семена горчицы желтой Тавричанка, Элита / 1 Репродукция', 'semena-gorchitsy-zheltoy-tavrichanka-elita1-reproduktsiya-1525821.jpeg', 'to_home'),
(43, 10, 'Семена горчицы Чорнява, Элита / 1 Репродукция', 'semena-gorchitsy-chornyava-elita1-reproduktsiya-1525820.jpg', ''),
(44, 10, 'Семена горчицы белой Ослава, Элита / 1 Репродукция', 'semena-gorchitsy-beloy-oslava-elita1-reproduktsiya-1525819.jpg', ''),
(45, 10, 'Семена горчицы белой Талисман, Элита / 1 Репродукция', 'semena-gorchitsy-beloy-talisman-elita1-reproduktsiya-1525818.jpeg', ''),
(46, 10, 'Семена горчицы Мрия, Элита / 1 Репродукция', 'semena-gorchitsy-mriya-elita1-reproduktsiya-1525816.jpg', ''),
(47, 11, 'Семена проса Константиновское, Элита / 1 Репродукция', 'semena-prosa-konstantinovskoe-elita1-reproduktsiya-1543392.jpg', ''),
(48, 12, 'Семена вики яровой Белоцерковская 34, Элита / 1 Репродукция', 'semena-viki-yarovoy-belotserkovskaya-34-elita1-reproduktsiya-1578732.jpeg', 'to_home'),
(49, 12, 'Семена вики яровой Гибридная 85, Элита / 1 Репродукция', 'semena-viki-yarovoy-gibridnaya-85-elita1-reproduktsiya-1578690.jpg', 'to_home'),
(50, 12, 'Семена вики яровой Гибридная 97, Элита / 1 Репродукция', 'semena-viki-yarovoy-gibridnaya-97-elita1-reproduktsiya-1578646.jpeg', ''),
(51, 12, 'Семена вики яровой Евгена, Элита / 1 Репродукция', 'semena-viki-yarovoy-evgena-elita1-reproduktsiya-1578642.jpg', ''),
(52, 12, 'Семена вики яровой Знахидка, Элита / 1 Репродукция', 'semena-viki-yarovoy-znahidka-elita1-reproduktsiya-1578641.jpeg', ''),
(53, 12, 'Семена вики яровой Лила, Элита / 1 Репродукция', 'semena-viki-yarovoy-lila-elita1-reproduktsiya-1578640.jpg', ''),
(54, 13, 'Семена ячменя ярового Вакула, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-vakula-elita1-reproduktsiya-1587693.jpeg', ''),
(55, 13, 'Семена ячменя ярового Сталкер, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-stalker-elita1-reproduktsiya-1565360.jpg', ''),
(56, 13, 'Семена ячменя ярового Себастьян, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-sebastyan-elita1-reproduktsiya-1565361.jpg', ''),
(57, 13, 'Семена ячменя ярового Прерия, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-preriya-elita1-reproduktsiya-1565363.jpg', ''),
(58, 13, 'Семена ячменя ярового Командор, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-komandor-elita1-reproduktsiya-1565364.jpeg', ''),
(59, 13, 'Семена ячменя ярового Донецкий 14, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-donetskiy-14-elita1-reproduktsiya-1565365.jpeg', ''),
(60, 13, 'Семена ячменя ярового Гелиос, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-gelios-elita1-reproduktsiya-1565362.jpg', ''),
(61, 13, 'Семена ячменя ярового Адапт, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-adapt-elita1-reproduktsiya-1565366.jpeg', ''),
(62, 13, 'Семена ячменя ярового Аграрий, Элита / 1 Репродукция', 'semena-yachmenya-yarovogo-agrariy-elita1-reproduktsiya-1565367.jpg', ''),
(63, 14, 'Семена ячменя озимого Девятый Вал, Элита / 1 Репродукция', 'semena-yachmenya-ozimogo-devyatiy-val-elita1-reproduktsiya-1565368.jpg', ''),
(64, 14, 'Семена ячменя озимого Достойный, Элита / 1 Репродукция', 'semena-yachmenya-ozimogo-dostoyniy-elita1-reproduktsiya-1565369.jpg', ''),
(65, 14, 'Семена ячменя озимого Снежная Королева, Элита / 1 Репродукция', 'semena-yachmenya-ozimogo-snezhnaya-koroleva-elita1-reproduktsiya-1565370.jpg', ''),
(66, 15, 'Семена вики озимой Лебединая Песня, Элита / 1 Репродукция', 'semena-viki-ozimoy-lebedinaya-pesnya-elita1-reproduktsiya-1578827.jpg', ''),
(67, 15, 'Семена вики озимой Полтавская 77, Элита / 1 Репродукция', 'semena-viki-ozimoy-poltavskaya-77-elita1-reproduktsiya-1578783.jpg', ''),
(68, 18, 'Семена эспарцета Аметист Донецкий, Элита / 1 Репродукция', 'semena-espartseta-ametist-donetskiy-elita1-reproduktsiya-1582169.jpg', ''),
(69, 18, 'Семена эспарцета Песчаный 1251 (Медонос), Элита / 1 Репродукция', 'semena-espartseta-peschaniy-1251-medonos-elita1-reproduktsiya-1582165.jpg', ''),
(70, 18, 'Семена эспарцета Смарагд, Элита / 1 Репродукция', 'semena-espartseta-smaragd-elita1-reproduktsiya-1582164.jpg', ''),
(71, 21, 'Семена тритикале Дарх либа Харьковский, Элита / 1 Репродукция', 'semena-tritikale-darhliba-harkovskiy-elita1-reproduktsiya-1576626.jpg', ''),
(72, 21, 'Семена тритикале Коровай Харьковский, Элита / 1 Репродукция', 'semena-tritikale-korovay-harkovskiy-elita1-reproduktsiya-1576622.jpeg', ''),
(73, 21, 'Семена тритикале Ландар, Элита / 1 Репродукция', 'semena-tritikale-landar-elita1-reproduktsiya-1576619.jpeg', ''),
(74, 22, 'Семена овса голозерного Самуэль, 1 Элита / 1 Репродукция', 'semena-ovsa-golozernogo-samuel-1-elita1-reproduktsiya-1567975.jpg', ''),
(75, 22, 'Семена овса голозерного Скарб Украины, 1 Элита / 1 Репродукция', 'semena-ovsa-golozernogo-skarb-ukrainy-1-elita1-reproduktsiya-1567974.jpg', ''),
(76, 22, 'Семена овса голозерного Диетический, 1 Элита / 1 Репродукция', 'semena-ovsa-golozernogo-dieticheskiy-1-elita1-reproduktsiya-1567973.jpeg', ''),
(77, 23, 'Семена овса Спонтанно, 1 Элита', 'semena-ovsa-spontanno-1-elita-1567972.jpg', ''),
(78, 23, 'Семена овса Черниговский 28, Элита / 1 Репродукция', 'semena-ovsa-chernigovskiy-28-elita1-reproduktsiya-1567970.jpg', ''),
(79, 23, 'Семена овса Спурт, Элита / 1 Репродукция', 'semena-ovsa-spurt-elita1-reproduktsiya-1567969.jpg', ''),
(80, 23, 'Семена овса Парламентский, Элита / 1 Репродукция', 'semena-ovsa-parlamentskiy-elita1-reproduktsiya-1567968.jpg', ''),
(81, 23, 'Семена овса Нептун, Элита / 1 Репродукция', 'semena-ovsa-neptun-elita1-reproduktsiya-1567966.jpg', ''),
(82, 23, 'Семена овса Деснянский, Элита / 1 Репродукция', 'semena-ovsa-desnyanskiy-elita1-reproduktsiya-1567962.jpg', ''),
(83, 23, 'Семена овса Бусол, Элита / 1 Репродукция', 'semena-ovsa-busol-elita1-reproduktsiya-1567958.jpg', ''),
(84, 25, 'Семена пшеница Широкко КВС, 1 Репродукция', 'semena-pshenitsa-shirokko-kvs-1-reproduktsiya-1525212.jpg', ''),
(85, 25, 'Семена пшеница Струна Мироновская, Элита / 1 Репродукция', 'semena-pshenitsa-struna-mironovskaya-elita1-reproduktsiya-1525208.jpg', ''),
(86, 25, 'Семена пшеница Ранняя 93, Элита / 1 Репродукция', 'semena-pshenitsa-rannyaya-93-elita1-reproduktsiya-1525057.jpg', ''),
(87, 25, 'Семена пшеница Недра, Элита / 1 Репродукция', 'semena-pshenitsa-nedra-elita1-reproduktsiya-1524944.jpg', ''),
(88, 25, 'Семена пшеница Леннокс, 1 Репродукция', 'semena-pshenitsa-lennoks-1-reproduktsiya-1524813.jpg', ''),
(89, 25, 'Семена пшеница Алатус, 1 Репродукция', 'semena-pshenitsa-alatus-1-reproduktsiya-1524812.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_cart`
--

CREATE TABLE `products_cart` (
  `id` int(11) NOT NULL,
  `ip_client` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_cart`
--

INSERT INTO `products_cart` (`id`, `ip_client`, `product_id`, `product_count`) VALUES
(5, '127.0.0.2', 20, '1'),
(6, '127.0.0.2', 11, '12.5'),
(29, '127.0.0.3', 29, '3'),
(238, '127.0.0.1', 17, '7'),
(239, '127.0.0.1', 28, '7'),
(251, '127.0.0.1', 36, '4'),
(252, '127.0.0.1', 42, '4'),
(253, '127.0.0.1', 48, '3'),
(254, '127.0.0.1', 49, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `products_desc`
--

CREATE TABLE `products_desc` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_desc`
--

INSERT INTO `products_desc` (`id`, `product_id`, `product_desc`, `product_unit`) VALUES
(1, 1, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(2, 2, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(3, 3, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(4, 4, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(5, 5, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(6, 6, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(7, 7, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(8, 8, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(9, 9, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(10, 10, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(11, 11, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(12, 12, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(13, 13, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(14, 14, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(15, 15, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(16, 16, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(17, 17, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(18, 18, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(19, 19, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(20, 20, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(21, 21, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(22, 22, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(23, 23, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(24, 24, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(25, 25, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(26, 26, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(27, 27, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(28, 28, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(29, 29, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(30, 30, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(31, 31, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(32, 32, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(33, 33, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(34, 34, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(35, 35, '<p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p><p>product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description product description </p>', 'тонна'),
(36, 36, 'product description', 'тонна'),
(37, 37, 'product description', 'тонна'),
(38, 38, 'product description', 'тонна'),
(39, 39, 'product description', 'тонна'),
(40, 40, 'product description', 'тонна'),
(41, 41, 'product description', 'тонна'),
(42, 42, 'product description', 'тонна'),
(43, 43, 'product description', 'тонна'),
(44, 44, 'product description', 'тонна'),
(45, 45, 'product description', 'тонна'),
(46, 46, 'product description', 'тонна'),
(47, 47, 'product description', 'тонна'),
(48, 48, 'product description', 'тонна'),
(49, 49, 'product description', 'тонна'),
(50, 50, 'product description', 'тонна'),
(51, 51, 'product description', 'тонна'),
(52, 52, 'product description', 'тонна'),
(53, 53, 'product description', 'тонна'),
(54, 54, 'product description', 'тонна'),
(55, 55, 'product description', 'тонна'),
(56, 56, 'product description', 'тонна'),
(57, 57, 'product description', 'тонна'),
(58, 58, 'product description', 'тонна'),
(59, 59, 'product description', 'тонна'),
(60, 60, 'product description', 'тонна'),
(61, 61, 'product description', 'тонна'),
(62, 62, 'product description', 'тонна'),
(63, 63, 'product description', 'тонна'),
(64, 64, 'product description', 'тонна'),
(65, 65, 'product description', 'тонна'),
(66, 66, 'product description', 'тонна'),
(67, 67, 'product description', 'тонна'),
(68, 68, 'product description', 'тонна'),
(69, 69, 'product description', 'тонна'),
(70, 70, 'product description', 'тонна'),
(71, 71, 'product description', 'тонна'),
(72, 72, 'product description', 'тонна'),
(73, 73, 'product description', 'тонна'),
(74, 74, 'product description', 'тонна'),
(75, 75, 'product description', 'тонна'),
(76, 76, 'product description', 'тонна'),
(77, 77, 'product description', 'тонна'),
(78, 78, 'product description', 'тонна'),
(79, 79, 'product description', 'тонна'),
(80, 80, 'product description', 'тонна'),
(81, 81, 'product description', 'тонна'),
(82, 82, 'product description', 'тонна'),
(83, 83, 'product description', 'тонна'),
(84, 84, 'product description', 'тонна'),
(85, 85, 'product description', 'тонна'),
(86, 86, 'product description', 'тонна'),
(87, 87, 'product description', 'тонна'),
(88, 88, 'product description', 'тонна'),
(89, 89, 'product description', 'тонна');

-- --------------------------------------------------------

--
-- Структура таблицы `products_price`
--

CREATE TABLE `products_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_price`
--

INSERT INTO `products_price` (`id`, `product_id`, `cost`, `price`) VALUES
(1, 1, NULL, '15000'),
(2, 2, NULL, '15000'),
(3, 3, NULL, '15000'),
(4, 4, NULL, '15000'),
(5, 5, NULL, '15000'),
(6, 6, NULL, '15000'),
(7, 7, NULL, '15000'),
(8, 8, NULL, '15000'),
(9, 9, NULL, '15000'),
(10, 10, NULL, '15000'),
(11, 11, NULL, '15000'),
(12, 12, NULL, '15000'),
(13, 13, NULL, '15000'),
(14, 14, NULL, '15000'),
(15, 15, NULL, '25000'),
(16, 16, NULL, '25000'),
(17, 17, NULL, '18000'),
(18, 18, NULL, '18000'),
(19, 19, NULL, '23000'),
(20, 20, NULL, '23000'),
(21, 21, NULL, '20000'),
(22, 22, NULL, '20000'),
(23, 23, NULL, '58000'),
(24, 24, NULL, '58000'),
(25, 25, NULL, '30000'),
(26, 26, NULL, '35000'),
(27, 27, NULL, '24000'),
(28, 28, NULL, '14000'),
(29, 29, NULL, '16000'),
(30, 30, NULL, '10000'),
(31, 31, NULL, '16000'),
(32, 32, NULL, '10000'),
(33, 33, NULL, '10000'),
(34, 34, NULL, '12000'),
(35, 35, NULL, '12000'),
(36, 36, NULL, '10000'),
(37, 37, NULL, '60000'),
(38, 38, NULL, '20000'),
(39, 39, NULL, '20000'),
(40, 40, NULL, '20000'),
(41, 41, NULL, '53000'),
(42, 42, NULL, '35000'),
(43, 43, NULL, '35000'),
(44, 44, NULL, '35000'),
(45, 45, NULL, '35000'),
(46, 46, NULL, '35000'),
(47, 47, NULL, '10000'),
(48, 48, NULL, '13000'),
(49, 49, NULL, '13000'),
(50, 50, NULL, '13000'),
(51, 51, NULL, '13000'),
(52, 52, NULL, '13000'),
(53, 53, NULL, '13000'),
(54, 54, NULL, '6500'),
(55, 55, NULL, '6500'),
(56, 56, NULL, '6500'),
(57, 57, NULL, '6500'),
(58, 58, NULL, '6500'),
(59, 59, NULL, '6500'),
(60, 60, NULL, '6500'),
(61, 61, NULL, '6500'),
(62, 62, NULL, '6500'),
(63, 63, NULL, '6500'),
(64, 64, NULL, '6500'),
(65, 65, NULL, '6500'),
(66, 66, NULL, '13000'),
(67, 67, NULL, '13000'),
(68, 68, NULL, '16000'),
(69, 69, NULL, '16000'),
(70, 70, NULL, '16000'),
(71, 71, NULL, '7500'),
(72, 72, NULL, '7500'),
(73, 73, NULL, '7500'),
(74, 74, NULL, '10000'),
(75, 75, NULL, '10000'),
(76, 76, NULL, '10000'),
(77, 77, NULL, '6500'),
(78, 78, NULL, '6500'),
(79, 79, NULL, '6500'),
(80, 80, NULL, '6500'),
(81, 81, NULL, '6500'),
(82, 82, NULL, '6500'),
(83, 83, NULL, '6500'),
(84, 84, NULL, '9000'),
(85, 85, NULL, '7500'),
(86, 86, NULL, '7700'),
(87, 87, NULL, '8000'),
(88, 88, NULL, '7500'),
(89, 89, NULL, '7500');

-- --------------------------------------------------------

--
-- Структура таблицы `questions_and_answers`
--

CREATE TABLE `questions_and_answers` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `question_short_desc` varchar(1000) NOT NULL,
  `qwert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions_and_answers`
--

INSERT INTO `questions_and_answers` (`question_id`, `question_title`, `question_short_desc`, `qwert`) VALUES
(1, 'Какие самые продуктивные сорта озимой пшеницы?', 'Какие самые продуктивные сорта озимой пшеницы?Какие самые продуктивные сорта озимой пшеницы?Какие самые продуктивные сорта озимой пшеницы?Какие самые продуктивные сорта озимой пшеницы?Какие самые продуктивные сорта озимой пшеницы?', ''),
(2, 'Как правильно выращивать сою?', 'Как правильно выращивать сою?Как правильно выращивать сою?Как правильно выращивать сою?Как правильно выращивать сою?Как правильно выращивать сою?', '');

-- --------------------------------------------------------

--
-- Структура таблицы `questions_and_answers_text`
--

CREATE TABLE `questions_and_answers_text` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions_and_answers_text`
--

INSERT INTO `questions_and_answers_text` (`id`, `question_id`, `question_text`) VALUES
(1, 1, '<p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p><p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>'),
(2, 2, '<p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p><p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `products_cart`
--
ALTER TABLE `products_cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_desc`
--
ALTER TABLE `products_desc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_price`
--
ALTER TABLE `products_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions_and_answers`
--
ALTER TABLE `questions_and_answers`
  ADD PRIMARY KEY (`question_id`);

--
-- Индексы таблицы `questions_and_answers_text`
--
ALTER TABLE `questions_and_answers_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT для таблицы `products_cart`
--
ALTER TABLE `products_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
--
-- AUTO_INCREMENT для таблицы `products_desc`
--
ALTER TABLE `products_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT для таблицы `products_price`
--
ALTER TABLE `products_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT для таблицы `questions_and_answers`
--
ALTER TABLE `questions_and_answers`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `questions_and_answers_text`
--
ALTER TABLE `questions_and_answers_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
