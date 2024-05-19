-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2024 at 09:16 PM
-- Server version: 5.7.42-0ubuntu0.18.04.1
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2324BACKE03`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `champion_tier_lists`
--

CREATE TABLE `champion_tier_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `champion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `win_rate` decimal(5,2) NOT NULL,
  `pick_rate` decimal(5,2) NOT NULL,
  `ban_rate` decimal(5,2) NOT NULL,
  `games_played` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `champion_tier_lists`
--

INSERT INTO `champion_tier_lists` (`id`, `role`, `champion_name`, `tier`, `win_rate`, `pick_rate`, `ban_rate`, `games_played`, `created_at`, `updated_at`) VALUES
(10, 'Top', 'Sett', 'A', 51.60, 7.20, 2.10, 19312, '2024-05-08 15:45:30', '2024-05-08 15:45:30'),
(21, 'Mid', 'Zed', 'S', 52.90, 8.10, 12.30, 40231, '2024-05-08 15:45:31', '2024-05-08 15:45:31'),
(22, 'Mid', 'Talon', 'S', 52.70, 7.90, 14.70, 38215, '2024-05-08 15:45:31', '2024-05-08 15:45:31'),
(23, 'Mid', 'Yasuo', 'S', 52.50, 12.20, 20.90, 51234, '2024-05-08 15:45:31', '2024-05-08 15:45:31'),
(24, 'Mid', 'Fizz', 'S', 52.40, 10.70, 9.80, 45789, '2024-05-08 15:45:31', '2024-05-08 15:45:31'),
(25, 'Mid', 'Ekko', 'S', 52.30, 9.50, 13.10, 41321, '2024-05-08 15:45:31', '2024-05-08 15:45:31'),
(26, 'Mid', 'Viktor', 'A', 52.10, 6.70, 5.20, 33201, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(27, 'Mid', 'Katarina', 'A', 52.00, 8.90, 6.10, 37912, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(28, 'Mid', 'Annie', 'A', 51.90, 7.20, 4.90, 30128, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(29, 'Mid', 'Veigar', 'A', 51.80, 5.80, 3.40, 27781, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(30, 'Mid', 'Twisted Fate', 'A', 51.70, 9.10, 2.00, 38901, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(31, 'ADC', 'Jhin', 'S', 53.10, 11.50, 7.80, 44291, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(32, 'ADC', 'Samira', 'S', 52.90, 10.20, 16.50, 50123, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(33, 'ADC', 'Kai\'Sa', 'S', 52.70, 14.90, 10.20, 58321, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(34, 'ADC', 'Aphelios', 'S', 52.50, 9.80, 13.30, 46201, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(35, 'ADC', 'Caitlyn', 'S', 52.40, 10.50, 5.70, 50122, '2024-05-08 15:45:32', '2024-05-08 15:45:32'),
(36, 'ADC', 'Ezreal', 'A', 52.20, 12.30, 5.90, 52987, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(37, 'ADC', 'Miss Fortune', 'A', 52.10, 8.70, 3.80, 39812, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(38, 'ADC', 'Kog\'Maw', 'A', 52.00, 6.50, 2.10, 31123, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(39, 'ADC', 'Tristana', 'A', 51.90, 7.90, 2.30, 33721, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(40, 'ADC', 'Varus', 'A', 51.80, 5.30, 4.50, 27819, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(41, 'Support', 'Leona', 'S', 53.20, 12.10, 8.30, 45231, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(42, 'Support', 'Lulu', 'S', 53.00, 11.50, 6.90, 41328, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(43, 'Support', 'Blitzcrank', 'S', 52.80, 9.80, 11.20, 38942, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(44, 'Support', 'Thresh', 'S', 52.60, 14.20, 9.80, 52201, '2024-05-08 15:45:33', '2024-05-08 15:45:33'),
(45, 'Support', 'Nautilus', 'S', 52.50, 10.50, 8.70, 46281, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(46, 'Support', 'Janna', 'A', 52.30, 7.90, 4.60, 36129, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(47, 'Support', 'Soraka', 'A', 52.20, 8.30, 5.20, 37912, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(48, 'Support', 'Bard', 'A', 52.10, 6.50, 2.80, 31901, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(49, 'Support', 'Morgana', 'A', 52.00, 9.10, 6.10, 41123, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(50, 'Support', 'Nami', 'A', 51.90, 7.50, 3.40, 33128, '2024-05-08 15:45:34', '2024-05-08 15:45:34'),
(51, 'Top', 'Dr. Mundo', 'S', 52.90, 4.10, 3.00, 11029, '2024-05-14 16:06:14', '2024-05-14 16:06:14'),
(52, 'Top', 'Yorick', 'S', 52.70, 4.50, 4.70, 12050, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(53, 'Top', 'Trundle', 'S', 52.50, 5.00, 4.30, 13420, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(54, 'Top', 'Nasus', 'S', 52.40, 5.70, 3.90, 15378, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(55, 'Top', 'Mordekaiser', 'S', 52.30, 8.70, 16.60, 23501, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(56, 'Top', 'Warwick', 'A', 52.30, 1.40, 3.20, 3834, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(57, 'Top', 'Tahm Kench', 'A', 52.20, 3.40, 2.00, 9142, '2024-05-14 16:06:15', '2024-05-14 16:06:15'),
(58, 'Top', 'Kayle', 'A', 52.10, 4.90, 1.30, 13311, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(59, 'Top', 'Urgot', 'A', 51.70, 3.40, 1.20, 9149, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(60, 'Top', 'Sett', 'A', 51.60, 7.20, 2.10, 19312, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(61, 'Jungle', 'Lee Sin', 'S', 52.90, 14.10, 10.00, 22345, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(62, 'Jungle', 'Kha\'Zix', 'S', 52.70, 11.50, 8.70, 20123, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(63, 'Jungle', 'Rengar', 'S', 52.50, 10.00, 7.50, 18234, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(64, 'Jungle', 'Nunu & Willump', 'S', 52.40, 8.90, 5.30, 16543, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(65, 'Jungle', 'Graves', 'S', 52.30, 9.50, 4.10, 17321, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(66, 'Jungle', 'Ekko', 'A', 52.10, 7.30, 6.20, 14123, '2024-05-14 16:06:16', '2024-05-14 16:06:16'),
(67, 'Jungle', 'Elise', 'A', 52.00, 6.50, 3.90, 12345, '2024-05-14 16:06:17', '2024-05-14 16:06:17'),
(68, 'Jungle', 'Fiddlesticks', 'A', 51.90, 8.70, 2.50, 15234, '2024-05-14 16:06:17', '2024-05-14 16:06:17'),
(69, 'Jungle', 'Kayn', 'A', 51.80, 5.90, 3.10, 11234, '2024-05-14 16:06:17', '2024-05-14 16:06:17'),
(70, 'Jungle', 'Hecarim', 'A', 51.70, 6.70, 4.30, 13245, '2024-05-14 16:06:17', '2024-05-14 16:06:17'),
(100, 'Support', 'Nami', 'A', 51.90, 7.50, 3.40, 33128, '2024-05-14 16:06:20', '2024-05-14 16:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2024_04_30_130040_create_videos_table', 2),
(11, '2024_04_30_130050_create_roles_table', 2),
(12, '2024_04_30_130102_create_video_role_table', 2),
(13, '2024_05_05_144334_create_champion_tier_lists_table', 3),
(14, '2024_05_05_152438_add_role_to_videos_table', 4),
(15, '2024_05_10_192104_add_role_to_users_table', 5),
(16, '2024_05_10_192104_create_admins_table', 5),
(17, '2024_05_10_201824_add_user_id_to_admins_table', 6),
(19, '2024_05_15_095255_create_user_video_favorites_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('jean-mariebiets@telenet.be', '$2y$12$WORidvyscsknN.1abW1JnuUqbg9EnUCcHZqmE/uCLRGlae1Rstfoa', '2024-05-18 20:42:28'),
('rowan.biets@gmail.com', '$2y$12$MOo5lKh.PJH3kiVwyVrqXO3vn3vuEZ/G6Yvbn9wqa3YhCEOr3GucO', '2024-05-18 20:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1Ktc2PmIbxyr40L7B3TSdPZsWsahKCdAzFsSOu9x', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlR6ME5VS2FNMUo2S3g0aGowMFJ0VEtHazM1aTQ0NG1iajFQYWNrTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3Jnb3QtcGFzc3dvcmQiO319', 1716072870),
('dEmFIdDo2R4nm2DW1Hm0lRD0xl8mcEg4Ch5H3fro', 28, '10.2.144.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTFl3dVZqVGZVbjBXME94QXVkcUpFaExIZFdzYjN3TVdZWjV0dnJhcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTg6Imh0dHA6Ly8xMC4yLjE2MC4xNTYvYmFjay1lbmQtdG8tYmluZ2Utb3Itbm90LXRvLWJpbmdlLVJvd2FuYmlldHMvY29kZS9zdHJlYW1pbmdzc2l0ZS9wdWJsaWMvdmlkZW9zIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxMDE6Imh0dHA6Ly8xMC4yLjE2MC4xNTYvYmFjay1lbmQtdG8tYmluZ2Utb3Itbm90LXRvLWJpbmdlLVJvd2FuYmlldHMvY29kZS9zdHJlYW1pbmdzc2l0ZS9wdWJsaWMvZmF2b3JpdGVzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjg7fQ==', 1716065514),
('n0lfoqqN8hmLFZF5AS1sx0iehWYEcJXDr6NYos0t', NULL, '10.2.144.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFJRM2hWQmpjSUc5WW44ZGZGMXphN3RXcnIwNkJFOHlSSVh6V1BGdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTE6Imh0dHA6Ly8xMC4yLjE2MC4xNTYvYmFjay1lbmQtdG8tYmluZ2Utb3Itbm90LXRvLWJpbmdlLVJvd2FuYmlldHMvY29kZS9zdHJlYW1pbmdzc2l0ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716153237),
('QFQiaaohgKJ079eQZHUgAMJNzKS6vWfb9FT2BRIb', 1, '10.2.144.22', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ2ZxbHFaVHdoQktsOVVYVlpIZ0ZYYU1mc2NPcDg0YTZoaFNEM2o4cCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTg6Imh0dHA6Ly8xMC4yLjE2MC4xNTYvYmFjay1lbmQtdG8tYmluZ2Utb3Itbm90LXRvLWJpbmdlLVJvd2FuYmlldHMvY29kZS9zdHJlYW1pbmdzc2l0ZS9wdWJsaWMvdmlkZW9zIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxMDE6Imh0dHA6Ly8xMC4yLjE2MC4xNTYvYmFjay1lbmQtdG8tYmluZ2Utb3Itbm90LXRvLWJpbmdlLVJvd2FuYmlldHMvY29kZS9zdHJlYW1pbmdzc2l0ZS9wdWJsaWMvZmF2b3JpdGVzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1716072097);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rowan Biets', 'rowan.biets@gmail.com', NULL, '$2y$12$Wnq2YXjmmhlbkKw//IgaguBWT0qcQJ4/52.YvSCDWeMil8xfJeJvO', 'user', 'Q0wKs6Y58OiyZ9UQBh1rS2LV78LlTgruwlkOAxM6a27PYHlJuUL5zWqAjYOS', '2024-04-30 15:34:07', '2024-04-30 15:34:07'),
(22, 'TestUser', 'Mikolai.monkey@hotmail.com', NULL, '$2y$12$ZJ9Opjl5MVDBoJSdPI4qLOT2y9MAdPF4SGZAe5CQVisv1Cp8nRUc6', 'user', '39Loffn02NDMc44nhsefUKCnNO7pkCZOgSPlK4OtYpeYkZLXBtMaalvQhUGr', '2024-05-15 11:54:18', '2024-05-15 11:54:18'),
(25, 'User2', 'jean-mariebiets@telenet.be', NULL, '$2y$12$KMY/L3IW/8J9KenGgtbgUuo9hh6q0vTW7MU6FWOrROpI8/j/8MaJ2', 'user', 'YVm6kIAeiFEgvr7mWrj6ZUXogsvLyPYtAxPjydBrd1wjyy0d3oLvQJn6pJUJ', '2024-05-15 20:38:24', '2024-05-15 20:38:24'),
(26, 'Test User', 'test@example.com', '2024-05-16 21:23:06', '$2y$12$xnt6v4CXutakIr5DoZPHG.yswUyMlgAphrr1PYSfCg/bvoZsWDymO', 'user', 'xhXuJW79Kz', '2024-05-16 21:23:06', '2024-05-16 21:23:06'),
(28, 'Mikolaj', 'mikolaj.buelens@student.ehb.be', NULL, '$2y$12$0rbvTw/CQLDMZVwEPvB.duExALDFHJK1obsKJoFnippDsOJhfRlJ6', 'user', NULL, '2024-05-18 17:22:57', '2024-05-18 17:22:57'),
(30, 'Jan', 'Jan.sheldon@gmail.com', NULL, '$2y$12$sU0MGyD07aJqEbQiMeC6ce5Y6/nt76vpjfVBNtJsSxQc8q/sr65pW', 'user', 'q3IteLPPJxIB7HWFXQvEAB0cChCFua1hWouOShwWyvJAzgSPtvvp5tHigUGb', '2024-05-18 20:38:38', '2024-05-18 20:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_video_favorites`
--

CREATE TABLE `user_video_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_video_favorites`
--

INSERT INTO `user_video_favorites` (`id`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(3, 22, 4, '2024-05-15 12:08:22', '2024-05-15 12:08:22'),
(4, 22, 1, '2024-05-15 12:08:27', '2024-05-15 12:08:27'),
(5, 22, 9, '2024-05-15 12:14:34', '2024-05-15 12:14:34'),
(19, 25, 1, '2024-05-15 20:40:54', '2024-05-15 20:40:54'),
(21, 25, 6, '2024-05-16 07:38:53', '2024-05-16 07:38:53'),
(22, 25, 4, '2024-05-16 09:49:40', '2024-05-16 09:49:40'),
(31, 1, 22, '2024-05-16 20:59:16', '2024-05-16 20:59:16'),
(38, 1, 17, '2024-05-18 18:47:24', '2024-05-18 18:47:24'),
(40, 28, 13, '2024-05-18 18:50:05', '2024-05-18 18:50:05'),
(43, 28, 8, '2024-05-18 18:50:35', '2024-05-18 18:50:35'),
(44, 28, 1, '2024-05-18 18:50:36', '2024-05-18 18:50:36'),
(46, 1, 23, '2024-05-18 19:49:59', '2024-05-18 19:49:59'),
(47, 1, 33, '2024-05-18 19:50:09', '2024-05-18 19:50:09'),
(48, 1, 27, '2024-05-18 19:50:22', '2024-05-18 19:50:22'),
(49, 1, 18, '2024-05-18 19:50:26', '2024-05-18 19:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_url`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Top lane', 'The 7 BEST TIPS for TOP LANE in League of Legends', 'https://www.youtube.com/embed/efUCB-RB23s', '2024-04-30 14:41:24', '2024-05-12 13:36:50', 'Top'),
(4, 'Jungle Lane', 'The COMPLETE Beginners Guide to JUNGLE for SEASON 14 - League of Legends', 'https://www.youtube.com/embed/xFzMEvjlepQ', '2024-05-10 20:26:11', '2024-05-12 19:05:34', 'Jungle'),
(5, 'Mid Lane', 'The COMPLETE Beginners Guide to MID LANE for SEASON 14 - League of Legends', 'https://www.youtube.com/embed/3Ghso_QraPw', '2024-05-10 20:28:45', '2024-05-12 19:05:57', 'Mid'),
(6, 'ADC', 'The COMPLETE Beginner\'s Guide to ADC in SEASON 14 - League of Legends', 'https://www.youtube.com/embed/ft0mfQ62hUQ', '2024-05-10 20:31:16', '2024-05-12 19:06:17', 'ADC'),
(8, 'League of Legends: Beginner\'s Guide to Summoner\'s Rift', 'Learning League of Legends in 2024', 'https://www.youtube.com/embed/l9Yy9g_8F9M', '2024-05-10 21:07:10', '2024-05-10 21:07:10', NULL),
(9, 'Matchups', 'How to Play EVERY Top Lane Matchup! - League of Legends', 'https://www.youtube.com/embed/3MqU0Qf6P7U', '2024-05-12 13:17:59', '2024-05-12 13:17:59', 'Top'),
(12, 'How to play', 'HOW TO PLAY MID GAME - FULL IN DEPTH GUIDE - MID LANE FUNDAMENTALS', 'https://www.youtube.com/embed/VUVK5tzw1nc', '2024-05-14 16:23:31', '2024-05-14 16:23:31', 'Mid'),
(13, 'Support : Micros', 'Season 14 Support Guide - Best wards for lane, Void Grub rotation, Vision tips & tricks', 'https://www.youtube.com/embed/dqrbA7dg7h4', '2024-05-14 16:25:04', '2024-05-14 16:25:04', 'Support'),
(14, 'Support : Macros', 'Support Guide - Early Game Macro (Lane Prio, Roams, Recall Timing, Wave States) - League of Legends', 'https://www.youtube.com/embed/Z42sYRXaWHc', '2024-05-14 16:26:38', '2024-05-14 16:26:38', 'Support'),
(15, 'Jungle: Macros', 'The ONLY JUNGLE MACRO Guide You\'ll EVER NEED - League of Legends', 'https://www.youtube.com/embed/TFFz8OILKPM', '2024-05-16 10:02:46', '2024-05-16 10:02:46', 'Jungle'),
(16, 'Jungle: Micros', '4 Fundamentals ALL Junglers Must Have! (Gain The Ultimate JUNGLE CONTROL)', 'https://www.youtube.com/embed/2b_nOxeeQag', '2024-05-16 10:06:39', '2024-05-16 10:06:39', 'Jungle'),
(17, 'Fundamentals', '4 Fundamentals ALL Junglers Must Have For Season 14! (Gain The Ultimate JUNGLE CONTROL)', 'https://www.youtube.com/embed/WiM0S4wR5aQ', '2024-05-16 10:10:25', '2024-05-16 10:10:25', 'Jungle'),
(18, 'Mid: Difference', 'The Difference Between GOOD and BAD Mid Laners - League of Legends', 'https://www.youtube.com/embed/_3GM8N8yl8o', '2024-05-16 10:12:46', '2024-05-16 10:12:46', 'Mid'),
(19, 'Top: Macros', 'The ONLY Top Lane MACRO Guide You\'ll EVER NEED - League of Legends', 'https://www.youtube.com/embed/kpik7BHRTV4', '2024-05-16 10:14:29', '2024-05-16 10:14:29', 'Top'),
(20, 'Keria Guide', 'How to SUPPORT like the PRO T1 Keria - League of Legends', 'https://www.youtube.com/embed/L-pButbQFNs', '2024-05-16 10:19:31', '2024-05-16 10:19:31', 'Support'),
(21, 'Spacing', 'How Challengers Win Lane with Spacing - Micro Guide', 'https://www.youtube.com/embed/pdu2PAVXdLA', '2024-05-16 10:30:52', '2024-05-16 10:30:52', 'Top'),
(22, 'Mistakes', 'The 4 WORST MISTAKES Every Top Laners MAKE (And How To Fix Them)', 'https://www.youtube.com/embed/W3S5EyrU7b8', '2024-05-16 10:35:02', '2024-05-16 10:35:02', 'Top'),
(23, 'How to win', 'EVERYTHING YOU NEED TO KNOW to WIN TOPLANE', 'https://www.youtube.com/embed/wnGIuyWjKes', '2024-05-16 10:58:09', '2024-05-16 10:58:09', 'Top'),
(24, 'How to win', 'How You MUST Jungle To Win AFTER Patch The JG Changes! (Fix These Mistakes In The GRUB META)', 'https://www.youtube.com/embed/4axGouuTZIU', '2024-05-16 11:01:20', '2024-05-16 11:01:20', 'Jungle'),
(25, 'ADC: Macros', 'Complete ADC Macro Guide in less than 5 minutes | League of Legends (Guide)', 'https://www.youtube.com/embed/I8sw0aK8T6o', '2024-05-16 13:16:14', '2024-05-16 13:16:14', 'ADC'),
(26, 'Move & Kite', 'How to ATTACK MOVE & KITE like a PRO - League of Legends', 'https://www.youtube.com/embed/-oyxOgtT33U', '2024-05-17 15:06:38', '2024-05-17 15:06:38', 'ADC'),
(27, 'Mid : Micros', '2 BROKEN Tips to CARRY with EVERY MIDLANE Champion: Challenger Micro Tricks - LoL Pro Guide', 'https://www.youtube.com/embed/cCNhEtaY020', '2024-05-18 19:08:02', '2024-05-18 19:08:02', 'Mid'),
(28, 'Mid: Macros', 'The ONLY MID LANE MACRO Guide You NEED for Season 13 - League of Legends', 'https://www.youtube.com/embed/p42K2cuubNQ', '2024-05-18 19:09:33', '2024-05-18 19:09:33', 'Mid'),
(29, 'Blind Picking', 'THE BEST BLIND PICK MID LANER? | League of Legends', 'https://www.youtube.com/embed/JzeXLVBJBA4', '2024-05-18 19:11:27', '2024-05-18 19:11:27', 'Mid'),
(30, 'Challenger Guide', 'Why You SUCK at JUNGLE (And How to Fix It) - League of Legends', 'https://www.youtube.com/embed/dh2MqzHEeCc', '2024-05-18 19:13:16', '2024-05-18 19:13:16', 'Jungle'),
(31, 'ADC : Micros', 'The ONLY ADC Macro Guide You NEED for Season 13 - League of Legends', 'https://www.youtube.com/embed/TCM29Q9orHw', '2024-05-18 19:15:03', '2024-05-18 19:15:03', 'ADC'),
(32, 'AutoAttacking(Gumayusi)', 'The Only SPACING Guide You Need!!! (Gumayusi Secrects)', 'https://www.youtube.com/embed/HfcuCAMh_N0', '2024-05-18 19:16:28', '2024-05-18 19:16:28', 'ADC'),
(33, 'Gold Managment', 'ADC Macro Breakdown: How to Get 2,500 Gold in 2 Minutes', 'https://www.youtube.com/embed/dgmEr0RSGDU', '2024-05-18 19:18:05', '2024-05-18 19:18:05', 'ADC'),
(34, 'Champion Pool', 'Challenger Explains How to Build Your Champion Pool - Support Edition - League of Legends', 'https://www.youtube.com/embed/ZH7J9-iWyxM', '2024-05-18 19:56:04', '2024-05-18 19:56:04', 'Support'),
(35, 'How to carry', 'How to CARRY BAD ADCS as Support - League of Legends', 'https://www.youtube.com/embed/p71Reg63KKU', '2024-05-18 19:58:40', '2024-05-18 19:58:40', 'Support'),
(36, 'Roaming', 'Support Guide - Roam Timers (Crashing Waves, Neutral Waves, Wave Bounce/Freeze) - League of Legends', 'https://www.youtube.com/embed/fkn926N8Th4', '2024-05-18 20:01:50', '2024-05-18 20:01:50', 'Support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `champion_tier_lists`
--
ALTER TABLE `champion_tier_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_video_favorites`
--
ALTER TABLE `user_video_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_video_favorites_user_id_foreign` (`user_id`),
  ADD KEY `user_video_favorites_video_id_foreign` (`video_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `champion_tier_lists`
--
ALTER TABLE `champion_tier_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_video_favorites`
--
ALTER TABLE `user_video_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_video_favorites`
--
ALTER TABLE `user_video_favorites`
  ADD CONSTRAINT `user_video_favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_video_favorites_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
