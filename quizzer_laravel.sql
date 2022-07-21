-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 11:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_true` int(10) NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `created_at`, `updated_at`, `is_true`, `text`, `question_id`) VALUES
(1, NULL, NULL, 0, 'بی نام', 1),
(2, NULL, NULL, 1, 'ابراهیم', 1),
(3, NULL, NULL, 0, 'اصغر بی گزند', 1),
(4, NULL, NULL, 1, 'کیارستمی', 2),
(5, NULL, NULL, 0, 'مجیدی', 2),
(6, NULL, NULL, 0, 'حاتمی کیا', 2),
(14, '2020-01-02 18:14:28', '2020-01-02 18:14:28', 0, 'فتحعلی شاه', 10),
(15, '2020-01-02 18:14:28', '2020-01-02 18:14:28', 0, 'محد رضا شاه', 10),
(16, '2020-01-02 18:14:28', '2020-01-02 18:14:28', 1, 'رضا شاه', 10),
(17, '2020-01-02 18:14:28', '2020-01-02 18:14:28', 0, 'محمد علی شاه', 10),
(18, '2020-01-02 18:16:38', '2020-01-02 18:16:38', 0, 'فردوسی', 11),
(19, '2020-01-02 18:16:38', '2020-01-02 18:16:38', 0, 'سجاد', 11),
(20, '2020-01-02 18:16:38', '2020-01-02 18:16:38', 0, 'آزاد', 11),
(21, '2020-01-02 18:16:38', '2020-01-02 18:16:38', 1, 'جهاددانشگاهی مشهد', 11),
(22, '2020-01-02 18:42:49', '2020-01-02 18:42:49', 0, 'نرم افزار', 12),
(23, '2020-01-02 18:42:50', '2020-01-02 18:42:50', 1, 'سخت افزار', 12),
(24, '2020-01-02 18:48:25', '2020-01-02 18:48:25', 0, 'تابستان', 13),
(25, '2020-01-02 18:48:25', '2020-01-02 18:48:25', 1, 'بهار', 13);

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
(1, '2019_12_25_131032_create_answers_table', 1),
(2, '2019_12_25_131330_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `text`) VALUES
(1, NULL, NULL, 'نام آلبوم محسن خان چاووشی؟'),
(2, NULL, NULL, 'کارگردان فیلم درباره الی؟'),
(10, '2020-01-02 18:14:28', '2020-01-02 18:14:28', 'اولین پادشاه پهلوی که بود؟'),
(11, '2020-01-02 18:16:38', '2020-01-02 18:16:38', 'نام دانشگاه محل تحصیل؟'),
(12, '2020-01-02 18:42:49', '2020-01-02 18:42:49', 'رشته تحصیلی شما چیست؟'),
(13, '2020-01-02 18:48:25', '2020-01-02 18:48:25', 'اولین فصل سال؟');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
