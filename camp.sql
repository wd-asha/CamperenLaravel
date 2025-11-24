-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: mysql-8.4
-- Время создания: Ноя 24 2025 г., 20:57
-- Версия сервера: 8.4.6
-- Версия PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `camp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accomods`
--

CREATE TABLE `accomods` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `persons` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persons` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icons` int DEFAULT NULL,
  `sqr` int DEFAULT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `subtitle`, `image`, `persons`, `icons`, `sqr`, `is_main`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Luxsery Tent', 'Purus sem bibendum nisl, at lobortis odio justo ut mauris. Vestibulum mi mauris, blandit et condimentum sed, tincidunt eget metus sed. Phasellus tempor porta convallis. Maximus mollis lorem, nec auctor lectus consequat vitae. Nullam a magna ipsum. In tincidunt mi vel facilisis eleifend', 'Tent', 'booking-1.jpg', '1-6', 1, 25, 1, '2025-11-17 11:43:15', '2025-11-21 14:03:47', NULL),
(2, 'Caravan Soler Tent', 'Ut varius nisi et dui volutpat mattis. Etiam quis augue sollicitudin, tristique sapien ut, tristique ante. Quisque efficitur purus libero, nec facilisis ex rutrum vitae. Duis leo felis, rhoncus ut malesuada vitae, tincidunt vel magna. Vivamus varius mauris et ex efficitur rutrum nec massa eu rhoncus', 'Trailer', 'booking-2.jpg', '2-14', 2, 12, 1, '2025-11-17 11:43:15', '2025-11-17 11:43:15', NULL),
(3, 'Glamping Tent', 'Curabitur purus dolor, placerat at diam vitae, convallis eleifend turpis. Etiam rutrum sapien non sapien convallis, id convallis augue facilisis. Aliquam luctus vulputate elementum. Ut venenatis erat eget magna varius consectetur. Donec bibendum leo', 'Tent', 'booking-3.jpg', '1-3', 3, 17, 1, '2025-11-17 11:49:14', '2025-11-17 11:49:14', NULL),
(4, 'Small Cabin Wood', 'Morbi pharetra arcu at pretium tempus. Maecenas tincidunt, odio in feugiat malesuada, lectus massa porttitor augue, sed placerat libero erat ac diam. Praesent pharetra consectetur magna vel tempus ut. Phasellus a massa non nisi egestas sodales. Proin luctus felis massa, semper urna venenatis vitae', 'Cabin', 'booking-4.jpg', '1-4', 4, 20, 1, '2025-11-17 11:49:14', '2025-11-17 11:49:14', NULL),
(5, 'Classic Tent', 'Quisque est tellus, aliquet id magna sed, ultrices elementum est. Duis accumsan ligula turpis, eu consectetur quam faucibus quis. Aenean ut eros ipsum. Curabitur vehicula convallis eros, et aliquam ligula. Sed semper, odio quis sagittis posuere, quam augue porta dolor, vel pellentesque purus mauris', 'Tent', 'booking-5.jpg', '1-4', 5, 8, 0, '2025-11-17 11:54:14', '2025-11-21 08:51:55', NULL),
(6, 'Tent', 'Fusce eget quam et arcu molestie rhoncus. Nam lectus purus, porttitor a libero facilisis, tincidunt commodo nibh. Ut vitae sem magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus idnibh pellentesque. Morbi ut massa ut velit cursus tincidunt. Vestibulum congue, justo tincidunt', 'Tent', 'booking-6.jpg', '2-5', 6, 15, 0, '2025-11-17 11:54:15', '2025-11-17 11:54:15', NULL),
(7, 'Motorhome', 'In id gravida diam. Praesent a tempor erat. Integer scelerisque tellus sit amet ligula tincidunt molestie. Fusce tincidunt pellentesque lectus eget mollis. Quisque mi diam, tempus a pellentesque ut, mattis quis lacus. Aenean luctus elementum justo nec congue. Nam sed lectus a dolor finibus pretium', 'Trailer', 'booking-7.jpg', '2-5', 7, 15, 0, '2025-11-17 12:01:04', '2025-11-17 12:01:04', NULL),
(8, 'Small Trailer', 'Ut nec vehicula libero, sed scelerisque odio. Praesent convallis mauris risus, vitae vulputate tellus accumsan quis. Morbi quis ligula et mi vehicula tincidunt at at libero. In hac habitasse platea dictumst. Aliquam erat volutpat. Duis elementum egestas dui et luctus. Curabitur lobortis lectus gravida justo auctor', 'Trailer', 'booking-8.jpg', '1-3', 8, 12, 0, '2025-11-17 12:01:04', '2025-11-17 12:01:04', NULL),
(9, 'Safari Tent', 'In eu arcu a enim luctus venenatis eu non lacus. Quisque placerat laoreet magna, viverra scelerisque ante dictum in. Aliquam bibendum ligula ligula, in gravida urna laoreet in. Pellentesque tincidunt id turpis vel sagittis. Pellentesque mattis justo sit amet commodo elementum. Fusce vitae ex vel magna porta tempor', 'Tent', 'booking-9.jpg', '2-6', 9, 30, 0, '2025-11-17 15:54:55', '2025-11-17 15:54:55', NULL),
(10, 'Bubble Tent', 'Nullam faucibus mollis justo, at rhoncus tortor condimentum eu. Aenean consequat sem cursus elit auctor, eu ornare sapien bibendum. Donec consequat lorem felis. Mauris dapibus neque vel magna varius, ac elementum urna porta. Nullam eu odio ac dui rutrum bibendum. Nullam eleifend nibh ac justo iaculis', 'Tent', 'booking-10.jpg', '1-3', 10, 12, 0, '2025-11-17 15:54:56', '2025-11-17 15:54:56', NULL),
(11, 'Family Cabin', 'Aenean tincidunt, eros et egestas elementum, massa ante suscipit turpis, tincidunt condimentum urna urna in massa. Nunc quis varius dolor, vitae convallis magna. Duis cursus hendrerit placerat. Nam vulputate fermentum velit, vel malesuada est bibendum at. Pellentesque habitant morbi tristique senectus', 'Cabin', 'booking-11.jpg', '1-6', 11, 40, 0, '2025-11-17 16:04:06', '2025-11-17 16:04:06', NULL),
(12, 'Camper', 'Morbi tincidunt facilisis sodales. Sed tincidunt metus mattis nisl vehicula, non varius urna tristique. In nec viverra diam. Vivamus mi est, viverra congue ultrices et, pretium in justo. In laoreet arcu eget porttitor ullamcorper. Vestibulum eu quam tincidunt', 'Trailer', 'booking-12.jpg', '1-4', 12, 12, 0, '2025-11-17 16:04:06', '2025-11-17 16:04:06', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `days`
--

CREATE TABLE `days` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `days`
--

INSERT INTO `days` (`id`, `date`, `created_at`, `updated_at`) VALUES
(6, '2025-11-22', NULL, NULL),
(7, '2025-11-23', NULL, NULL),
(8, '2025-11-24', NULL, NULL),
(9, '2025-11-25', NULL, NULL),
(10, '2025-11-26', NULL, NULL),
(11, '2025-11-27', NULL, NULL),
(12, '2025-11-28', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(10, '2025_11_17_084028_create_categories_table', 2),
(11, '2025_11_17_084044_create_accomods_table', 2),
(12, '2025_11_17_172455_create_days_table', 3),
(14, '2025_11_18_165509_create_orders_table', 4),
(15, '2025_11_20_134838_add_address-phone_to_users_table', 5),
(16, '2025_11_20_172824_create_posts_table', 6),
(17, '2025_11_21_091541_add_field_soft_to_users_table', 7),
(18, '2025_11_24_135125_create_subscribers_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `price` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/images/posts/default.jpg',
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `tag`, `author`, `is_main`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'Home on the wheels', 'Cras viverra semper sagittis. Vivamus aliquet, turpis ut condimentum venenatis, ipsum felis sollicitudin sapien, scelerisque lacinia ante orci at magna. Consectetur adipiscing elit', 'blog-1.jpg', 'Camping story', 'Melissa Burton', 1, '3 May', '2025-11-22 09:47:25', NULL, NULL),
(17, 'Campfire on the beach', 'Ut eu ullamcorper sem. Cras malesuada viverra ligula ut consectetur. Suspendisse potenti. Cras justo tortor, congue sit amet dolor vel, ornare dapibus dui. Praesent sollicitudin felis dui', 'blog-2.jpg', 'Camping story', 'Melissa Burton', 1, '15 May', '2025-11-22 09:47:25', NULL, NULL),
(18, 'Mountain camping', 'Phasellus vitae metus condimentum, auctor ligula vitae, dictum dolor. Nullam tristique ullamcorper est interdum blandit. Donec diam ante, pulvinar nec tellus', 'blog-3.jpg', 'Camping story', 'Melissa Burton', 1, '1 Jun', '2025-11-22 09:47:25', NULL, NULL),
(19, 'Coffee time', 'Quisque fermentum venenatis eros vitae pretium. Nam rhoncus erat elit, eu condimentum velit vehicula vel. Donec vestibulum facilisis sodales. Proin nec libero gravida, efficitur libero quis', 'blog-4.jpg', 'Camping story', 'Melissa Burton', 0, '8 Jun', '2025-11-22 09:47:25', NULL, NULL),
(20, 'Breakfast in nature', 'Proin nulla ligula, finibus vel auctor nec, condimentum ut risus. Nullam ullamcorper risus at risus mattis molestie. Etiam nec ultrices felis, nec tincidunt felis. Quisque laoreet, risus ac sagittis', 'blog-5.jpg', 'Camping story', 'Melissa Burton', 0, '11 Jun', '2025-11-22 09:47:25', NULL, NULL),
(21, 'Inside the wheel house', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac diam libero. Mauris sit amet imperdiet urna. Ut eget lacus pellentesque rhoncus urna', 'blog-6.jpg', 'Camping story', 'Melissa Burton', 0, '18 Jun', '2025-11-22 09:47:26', NULL, NULL),
(22, 'Moto Camp', 'Morbi facilisis odio metus, a dignissim lorem aliquet et. Sed venenatis lectus in lorem volutpat, vel accumsan elit vulputate. Aliquam eu nisl porta, pharetra elit eget, ullamcorper magna vehicula well', 'blog-7.jpg', 'Camping story', 'Melissa Burton', 0, '20 Jun', '2025-11-22 09:47:26', NULL, NULL),
(23, 'Relaxation time', 'Nulla suscipit viverra sem, quis bibendum ex iaculis sed. Donec rhoncus gravida massa, eget interdum felis luctus a. Duis sed enim justo. Suspendisse sollicitudin metus ut libero vulputate aliquam', 'blog-8.jpg', 'Camping story', 'Melissa Burton', 0, '21 Jun', '2025-11-22 09:47:26', NULL, NULL),
(24, 'Hiking tour', 'Diam nisl tincidunt orci, ac luctus leo orci at elit. Sed id enim efficitur, ultrices erat non, sollicitudin turpis. Aliquam a accumsan justo. Eleifend est ut ultricies finibus dignissim quis velit, blandit venenatis', 'blog-9.jpg', 'Camping story', 'Melissa Burton', 0, '23 Jun', '2025-11-22 09:47:26', NULL, NULL),
(25, 'Summer kitchen', 'Nam pellentesque, est vel facilisis placerat, mi libero efficitur lectus, malesuada malesuada libero felis id orci. In suscipit ante sit amet mauris aliquam vestibulum. Praesent fringilla ut tortor aliquet semper', 'blog-10.jpg', 'Camping story', 'Melissa Burton', 0, '23 Jun', '2025-11-22 09:47:26', NULL, NULL),
(26, 'RV nature camp', 'Viverra blandit justo, lacinia molestie tortor placerat id. Quisque eu diam sit amet arcu egestas eleifend. Vestibulum ac odio sapien. Mauris ex sem, mattis eget hendrerit at, varius ut libero', 'blog-11.jpg', 'Camping story', 'Melissa Burton', 0, '25 Jun', '2025-11-22 09:47:26', NULL, NULL),
(27, 'Lake view', 'Aenean porta venenatis libero, quis hendrerit felis mollis volutpat. Cras aliquet vel velit et laoreet. Vestibulum congue gravida quam, vitae vehicula turpis ultrices at. Curabitur eu ornare nulla', 'blog-12.jpg', 'Camping story', 'Melissa Burton', 0, '30 Jun', '2025-11-22 09:47:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jzB9jK9qN3evj4ElFZ8TFI7NqV9wO2E5RV4FJk41', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTVFMGhPQnFwRmMxME9Ub2FXTXdNYUZLN0ZtS3o3V3ZJQzRyODNrUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTI6Imh0dHBzOi8vY2FtcCI7czo1OiJyb3V0ZSI7czo3OiJ3ZWxjb21lIjt9fQ==', 1763999767);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `phone`, `address`, `deleted_at`) VALUES
(5, 'admin', 'admin@gmail.com', NULL, '$2y$12$A3wCWk7fN1MhjZ8iK066HOamiE7DIyUafeNPYprNVdl/B6zHFvgeS', NULL, '2025-11-24 10:54:28', '2025-11-24 10:54:28', 1, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accomods`
--
ALTER TABLE `accomods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accomods_category_id_foreign` (`category_id`),
  ADD KEY `accomods_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accomods`
--
ALTER TABLE `accomods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `accomods`
--
ALTER TABLE `accomods`
  ADD CONSTRAINT `accomods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `accomods_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
