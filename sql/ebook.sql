-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 11:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_no` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `abstract`, `isbn`, `page_no`, `category`, `sub_category`, `tagline`, `category_id`, `price`, `author`, `publication_id`, `image`, `book_file`, `edition`, `user_id`, `tags`, `views`, `created_at`, `updated_at`) VALUES
(3, 'All around the circle', 'THis is the best', '132', 3223, 'Love', 'Romance', 'fkasdnf', 1, '10', 'fadsfas', 1, 'polo-shirt-6_1554909132.png', 'HGRS_FINAL_1554909133', '2019', 1, 'fasjnf', NULL, '2019-04-02 08:55:03', '2019-04-10 09:27:13'),
(4, 'Introduction to Business', 'Introduction to Business', '23412', 123, 'Business', 'Finance', 'Dbms', 5, '20', 'Dipesh Acharya', 1, 'gtkpro_second_frontcover_lg-250x300_1557495303.jpg', '13 DDBMS - Intro_1557495304', '2014', 1, 'DBMS', NULL, '2019-05-10 07:50:04', '2019-05-10 07:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Love', '/Love', '2019-04-02 08:18:50', '2019-04-02 08:18:50'),
(2, 'Tech', '/Tech', '2019-04-02 08:19:00', '2019-04-02 08:19:00'),
(3, 'Comics', '/Comics', '2019-05-04 01:57:10', '2019-05-04 01:57:10'),
(4, 'Horror', '/Horror', '2019-05-04 02:00:46', '2019-05-04 02:00:46'),
(5, 'Business', '/Business', '2019-05-04 02:05:24', '2019-05-04 02:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `short_description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'New new new new nmew newNew new new new nmew newNew new new new nmew newNew new new new nmew newNew new new new nmew newNew new new new nmew newNew new new new nmew newNew new new new nmew ne', 'nirja new new new', '/uploads/1556872000.jpg', '2019-05-03 02:41:07', '2019-05-03 02:44:11'),
(4, 'Hand Gestures Recognition', 'lots of love', '/uploads/1556874444.jpg', '2019-05-03 03:22:24', '2019-05-03 03:22:24'),
(5, 'long', 'logn', '/uploads/1556874677.jpg', '2019-05-03 03:26:17', '2019-05-03 03:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `khaltis`
--

CREATE TABLE `khaltis` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `pre_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_identity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khaltis`
--

INSERT INTO `khaltis` (`id`, `user_id`, `mobile`, `amount`, `pre_token`, `verified_token`, `product_identity`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '98XXXXX747', '10.00', 'U4Jw4qyaQdQUT9MRNVLnp5', 'TokenNotSet', 0, 0, '2019-05-10 02:02:18', '2019-05-10 02:02:18'),
(2, 3, '98XXXXX747', '10.00', 'DTbC6aTWAaM5nVHuFeXDv3', 'TokenNotSet', 0, 0, '2019-05-10 04:05:05', '2019-05-10 04:05:05'),
(3, 3, '98XXXXX747', '10.00', 'dmEhfhHUgkeov7p4MwioSE', 'TokenNotSet', 0, 0, '2019-05-10 04:07:01', '2019-05-10 04:07:01'),
(4, 3, '98XXXXX747', '10.00', 'fFS5j9jM6UGruupuDFAKPL', 'TokenNotSet', 0, 0, '2019-05-10 04:09:31', '2019-05-10 04:09:31'),
(5, 3, '98XXXXX747', '10.00', 'X9sML9QFDXjxdrQ5SR7SL6', 'TokenNotSet', 0, 0, '2019-05-10 04:48:25', '2019-05-10 04:48:25'),
(6, 3, '98XXXXX747', '10.00', 'dtASzaayvrKzwWPRJeT5P8', 'TokenNotSet', 3, 0, '2019-05-10 06:14:30', '2019-05-10 06:14:30'),
(7, 3, '98XXXXX747', '10.00', 'imetVt6wQgoGb2fFZmsrpm', 'TokenNotSet', 3, 0, '2019-05-10 06:17:30', '2019-05-10 06:17:30'),
(8, 3, '98XXXXX747', '10.00', 'r5DjmBmjSBGiDDfmgN2Wrj', 'TokenNotSet', 3, 0, '2019-05-10 06:18:44', '2019-05-10 06:18:44'),
(9, 3, '98XXXXX747', '10.00', 'Shc92f8xCsoPMQCyKAX2RU', 'TokenNotSet', 3, 0, '2019-05-10 06:31:10', '2019-05-10 06:31:10'),
(10, 3, '98XXXXX747', '10.00', 'MhvTo3ENBpoiqTaLDsYRUb', 'TokenNotSet', 3, 0, '2019-05-10 06:32:50', '2019-05-10 06:32:50'),
(11, 3, '98XXXXX747', '10.00', 'Vchog8qQtTrakwMx4rMmkK', 'TokenNotSet', 3, 0, '2019-05-10 06:35:24', '2019-05-10 06:35:24'),
(12, 3, '98XXXXX747', '10.00', 'YSxtiHw37E84muwD2Kcitf', 'TokenNotSet', 3, 0, '2019-05-10 06:37:43', '2019-05-10 06:37:43'),
(13, 3, '98XXXXX747', '10.00', 'sDeoZLqykxQVmqCn3WC2HE', 'TokenNotSet', 3, 0, '2019-05-10 06:40:09', '2019-05-10 06:40:09'),
(14, 3, '98XXXXX747', '10.00', 'wo8avkzVRX6rN5JNkSCiYC', 'TokenNotSet', 3, 0, '2019-05-10 06:41:48', '2019-05-10 06:41:48'),
(15, 3, '98XXXXX747', '10.00', '839fdkrgJNX5NDrN6M2HZn', 'TokenNotSet', 3, 0, '2019-05-10 06:42:40', '2019-05-10 06:42:40'),
(16, 3, '98XXXXX747', '10.00', 'YTXJS9u88H4CmrRKgxKVT3', 'TokenNotSet', 3, 0, '2019-05-10 06:45:23', '2019-05-10 06:45:23'),
(17, 3, '98XXXXX747', '10.00', 'UyQCxaiKmn2pmh8jii4kUV', 'TokenNotSet', 3, 0, '2019-05-10 06:46:38', '2019-05-10 06:46:38'),
(18, 3, '98XXXXX747', '10.00', '2sZmVe8cQSuiwtWD46s37d', 'null', 3, 0, '2019-05-10 06:52:01', '2019-05-10 06:52:01'),
(19, 3, '98XXXXX747', '10.00', 'Xv3TV3UYqvXXsQG2qemhJB', 'null', 3, 0, '2019-05-10 06:52:52', '2019-05-10 06:52:52'),
(20, 3, '98XXXXX747', '10.00', 'oFvoYrb395i8NisFHTikmU', 'null', 3, 0, '2019-05-10 07:12:09', '2019-05-10 07:12:09'),
(21, 3, '98XXXXX747', '10.00', 'kwdHHJeNQAogfqg8bF9Lgk', 'null', 3, 0, '2019-05-10 07:13:45', '2019-05-10 07:13:45'),
(22, 3, '98XXXXX747', '10.00', '7gEG9NGgR8QeiMWa8rYBfM', 'NRHiG2B67gseNdX4uxQBk9', 3, 1, '2019-05-10 07:17:22', '2019-05-10 07:17:22'),
(23, 3, '98XXXXX747', '10.00', 'GfS5obxiHbkGTUk4bCaFRG', 'rCBLtRaKr4Yr9a8nDbaJVY', 3, 1, '2019-05-10 07:30:14', '2019-05-10 07:30:15'),
(24, 2, '98XXXXX747', '20.00', 'ofhzCu5pe2LRxJQak4wyQD', 'ihEfdr82TVuna8yYbQz4C6', 4, 1, '2019-05-10 07:52:05', '2019-05-10 07:52:05'),
(25, 2, '98XXXXX838', '10.00', 'tZzRRYjHeGUnzkEZxaWLVC', 'BTmbjHBzFnPQ8dk46yRqAD', 3, 1, '2019-05-11 19:26:59', '2019-05-11 19:27:00'),
(26, 3, '98XXXXX747', '20.00', 'FpYFYYq2EKVjukWJzRZNjC', 'SdgUHm8MhJXfe9MkAP9R7a', 4, 1, '2019-05-11 19:35:22', '2019-05-11 19:35:24'),
(27, 4, '98XXXXX838', '20.00', 'gm8mFQgFUNWmmEekSTDJBY', 'GNuELxX3YxgqcwXbZheAYY', 4, 1, '2019-05-11 19:44:39', '2019-05-11 19:44:39'),
(28, 4, '98XXXXX838', '10.00', 'husW3UzCAD25WezP2VKMhH', '9wbH7GMbf8kyte8qLMYNk5', 3, 1, '2019-05-11 20:39:10', '2019-05-11 20:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_12_000000_create_users_table', 1),
(2, '2019_01_12_100000_create_password_resets_table', 1),
(3, '2019_02_05_090916_create_categories_table', 1),
(4, '2019_02_05_103723_create_publications_table', 1),
(5, '2019_02_05_104557_create_books_table', 1),
(6, '2019_02_05_104858_create_my_books_table', 1),
(7, '2019_02_06_052110_create_menus_table', 1),
(8, '2019_02_06_052123_create_sub_menus_table', 1),
(9, '2019_02_06_081523_create_sub_categories_table', 1),
(10, '2019_02_07_104827_create_blogs_table', 1),
(11, '2019_02_12_132746_create_sliders_table', 1),
(12, '2019_02_14_053639_create_testimonials_table', 1),
(13, '2019_03_11_201514_create_abouts_table', 1),
(14, '2019_03_13_063955_create_staff_table', 1),
(15, '2019_03_15_034824_create_writers_table', 1),
(16, '2019_02_08_082215_create_reviews_table', 2),
(20, '2019_04_10_153005_create_wishlists_table', 3),
(23, '2019_05_03_043232_create_galleries_table', 4),
(24, '2019_05_04_075449_create_subscribers_table', 5),
(25, '2019_05_05_160050_create_khaltis_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `my_books`
--

CREATE TABLE `my_books` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `trans_idx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_books`
--

INSERT INTO `my_books` (`id`, `user_id`, `book_id`, `trans_idx`, `trans_amount`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'rCBLtRaKr4Yr9a8nDbaJVY', '10', '2019-05-10 07:30:15', '2019-05-10 07:30:15'),
(2, 2, 4, 'ihEfdr82TVuna8yYbQz4C6', '20', '2019-05-10 07:52:05', '2019-05-10 07:52:05'),
(3, 2, 3, 'BTmbjHBzFnPQ8dk46yRqAD', '10', '2019-05-11 19:27:00', '2019-05-11 19:27:00'),
(4, 3, 4, 'SdgUHm8MhJXfe9MkAP9R7a', '20', '2019-05-11 19:35:24', '2019-05-11 19:35:24'),
(5, 4, 4, 'GNuELxX3YxgqcwXbZheAYY', '20', '2019-05-11 19:44:40', '2019-05-11 19:44:40'),
(6, 4, 3, '9wbH7GMbf8kyte8qLMYNk5', '10', '2019-05-11 20:39:11', '2019-05-11 20:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pobox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `name`, `address`, `pobox`, `phone`, `fax`, `email`, `website`, `tagline`, `created_at`, `updated_at`) VALUES
(1, 'Gnagotri', 'ghoarhi', '97897', 'hjhfkajs', 'kjnfaskdj', 'jnfksad', 'knfalsdf', 'jnfasd', '2019-02-15 01:43:31', '2019-02-15 01:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `body`, `rating`, `created_at`, `updated_at`, `user_id`, `book_id`) VALUES
(2, 'premlamsal', 'Nice Book. Well done Authors.', 4, '2019-04-18 06:54:54', '2019-04-18 06:54:54', 2, 3),
(5, 'Nisha lamsal', 'nice', 4, '2019-04-18 07:06:14', '2019-04-18 07:06:14', 3, 3),
(6, 'Nisha lamsal', 'nice book', 3, '2019-05-12 07:01:54', '2019-05-12 07:01:54', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_title`, `slider_subtitle`, `slider_url`, `created_at`, `updated_at`) VALUES
(6, '1555342075.jpg', 'New Books in Store', 'Valenti Bash Lakh With the Thousand of Granite', NULL, '2019-04-15 09:42:55', '2019-04-15 09:42:55'),
(7, '1555342338.jpg', 'new', 'new', NULL, '2019-04-15 09:47:18', '2019-04-15 09:47:18'),
(8, '1555343921.jpg', 'ok donw', 'ok done', NULL, '2019-04-15 10:13:41', '2019-04-15 10:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` text COLLATE utf8mb4_unicode_ci,
  `staff_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_name`, `staff_image`, `staff_position`, `contact_info`, `staff_type`, `created_at`, `updated_at`) VALUES
(1, 'ram tandon', '1555344396.png', 'hero', '<p>nothing like anything</p>', 'ADMINISTRATION AND FINANCE', '2019-04-15 10:21:36', '2019-04-15 10:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'premlamsal2@gmail.com', '2019-05-04 03:00:59', '2019-05-04 03:00:59'),
(5, 'hello@gmail.com', '2019-05-04 03:07:49', '2019-05-04 03:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcategory_name`, `link`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Ghosts', '/Horror/Ghosts', 4, '2019-05-04 02:01:01', '2019-05-04 02:01:01'),
(6, 'Paranormal', '/Horror/Paranormal', 4, '2019-05-04 02:01:14', '2019-05-04 02:01:14'),
(7, 'Computer', '/Tech/Computer', 2, '2019-05-04 02:02:43', '2019-05-04 02:02:43'),
(8, 'Mobile', '/Tech/Mobile', 2, '2019-05-04 02:02:53', '2019-05-04 02:02:53'),
(9, 'Romance', '/Love/Romance', 1, '2019-05-04 02:03:12', '2019-05-04 02:03:12'),
(10, 'Animie', '/Comics/Animie', 3, '2019-05-04 02:03:36', '2019-05-04 02:03:36'),
(11, 'Fantasy', '/Comics/Fantasy', 3, '2019-05-04 02:04:01', '2019-05-04 02:04:01'),
(12, 'Finance', '/Business/Finance', 5, '2019-05-04 02:05:35', '2019-05-04 02:05:35'),
(13, 'Economics', '/Business/Economics', 5, '2019-05-04 02:05:44', '2019-05-04 02:05:44'),
(14, 'Industries', '/Business/Industries', 5, '2019-05-04 02:05:55', '2019-05-04 02:05:55'),
(15, 'International', '/Business/International', 5, '2019-05-04 02:06:02', '2019-05-04 02:06:02'),
(16, 'Careers', '/Business/Careers', 5, '2019-05-04 02:06:13', '2019-05-04 02:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `person_image`, `testimonial_body`, `person_name`, `company_name`, `post`, `created_at`, `updated_at`) VALUES
(1, '1554112656.jpg', '<p>THis can be great with the bar graph and the coordinate geometry and the traingular rule of the happen kura in this thing.</p>', 'Prem Lamsal', NULL, NULL, '2019-04-01 04:12:36', '2019-04-01 04:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `interest` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `phone`, `interest`, `gender`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'premlamsal', 'premlamsal2@gmail.com', NULL, '$2y$10$NG3eVmybM0F/24SiyBs4EekSykdjIRrojkowM6fCfi4JGx3qdTWLW', NULL, NULL, NULL, 'male', 'admin', 'oeukRfYYOgoyDl9phVIx2jZqQzXnW9iVbvoCHwYNiaTNXmf3TP2TsSVagjB9', '2019-04-01 02:48:57', '2019-04-01 02:48:57'),
(2, 'niraj lamsal', 'nirajlamsal@gmail.com', NULL, '$2y$10$UEQEgw13363NxsO3cle5YeusnMD/5pACKtmfZq98pl/e9jKZ1fgjG', NULL, NULL, NULL, 'male', 'customer', 'HvasXNcJ55yDlwCtmqxODwUCNeOCE1PnVdgHopAfLwOYFYrkr1fgOLOHbSHk', '2019-04-08 09:50:47', '2019-04-08 09:50:47'),
(3, 'Nisha lamsal', 'nishalamsal@yahoo.com', NULL, '$2y$10$HvOtZlbLKcAkDf9ywDMjvOrUKeYIXeI4Cb20LsELlk82Hzjw1r64W', NULL, NULL, NULL, 'Female', 'customer', 'VkziRmsgMKDd0UqNYzFhvjTReIZVxbtWsT9At7b7hAYoltmpiLfKcK7K15hL', '2019-04-13 01:44:41', '2019-04-13 01:44:41'),
(4, 'Umesh Puri', 'umeshpuri@gmail.com', NULL, '$2y$10$npJsOdehX05Mg7.EaZ0vn.2la9KCkPMQdGtDfCoNadeZaRcUtx3VG', NULL, NULL, NULL, 'male', 'customer', NULL, '2019-05-11 19:40:59', '2019-05-11 19:40:59'),
(5, 'nirajan lamsal', 'nirajan@gmail.com', NULL, '$2y$10$ll6rtB1XGhpBu4Xc.8.Os.ckxDubhY14ByLbYZv9dJhPdGle85qSa', NULL, NULL, NULL, 'male', 'customer', '9X9KqEIVWDB5EC7ftcVN4PMpBAg5JJuc0Uyz1dkEkICx07sMSda71rieeBem', '2019-05-12 19:59:59', '2019-05-12 19:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(3, 3, 3, '2019-04-18 07:08:34', '2019-04-18 07:08:34'),
(4, 2, 4, '2019-05-10 09:16:44', '2019-05-10 09:16:44'),
(5, 4, 4, '2019-05-11 20:43:39', '2019-05-11 20:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(10) UNSIGNED NOT NULL,
  `writer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_Contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writer_name`, `writer_Contact`, `created_at`, `updated_at`) VALUES
(1, 'Prem Lamsal', '980980', '2019-04-01 04:24:47', '2019-04-01 04:24:47'),
(2, 'hari', '98798', '2019-04-01 04:24:52', '2019-04-01 04:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_publication_id_foreign` (`publication_id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khaltis`
--
ALTER TABLE `khaltis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khaltis_user_id_index` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_books`
--
ALTER TABLE `my_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_books_user_id_foreign` (`user_id`),
  ADD KEY `my_books_book_id_foreign` (`book_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publications_email_unique` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khaltis`
--
ALTER TABLE `khaltis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `my_books`
--
ALTER TABLE `my_books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_publication_id_foreign` FOREIGN KEY (`publication_id`) REFERENCES `publications` (`id`),
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `my_books`
--
ALTER TABLE `my_books`
  ADD CONSTRAINT `my_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `my_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD CONSTRAINT `sub_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
