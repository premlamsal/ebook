-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2019 at 07:42 AM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.3.2-3+0~20190208150725.31+stretch~1.gbp0912bd

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_image`, `blog_body`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'This is blog title edited', '1551102961.png', '<p>This is blog body edited</p>', NULL, '2019-02-25 21:56:01', '2019-02-25 21:56:12');

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
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_file` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `abstract`, `isbn`, `page_no`, `tagline`, `category_id`, `price`, `author`, `publication_id`, `image`, `book_file`, `edition`, `user_id`, `tags`, `views`, `created_at`, `updated_at`) VALUES
(7, 'Mere Dushman Mere Bhai', 'gsfdgdf', '1234', 24323, 'vdsf', 2, '323', 'Prem Dai CHain', 1, 'just copy_1550480995.jpg', 'HGRS_FINAL_1550480995', '2018', 1, 'hyf', 200, '2019-02-18 17:09:55', '2019-02-18 17:09:55'),
(8, 'Hero Hiralal', 'K cha bhaiya khabar', '132423', 34, 'hora kancha', 2, '432', 'author niraj', 1, 'rrotboc (1)_1550559534.jpg', '01 IPv6 - complete note - Er.Loknath Regmi_1550559534', '2019', 1, 'tags', 400, '2019-02-19 14:58:54', '2019-02-19 14:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'localfcaskdjfn', 1, '2019-02-06 11:08:11', '2019-02-06 11:08:11'),
(2, 'Juice', 'fdasfsd', 2, '2019-02-06 11:08:11', '2019-02-06 11:08:11');

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
(5, '2019_02_05_104203_create_transactions_table', 1),
(6, '2019_02_05_104557_create_books_table', 1),
(7, '2019_02_05_104858_create_my_books_table', 1),
(8, '2019_02_06_052110_create_menus_table', 1),
(9, '2019_02_06_052123_create_sub_menus_table', 1),
(10, '2019_02_06_081523_create_sub_categories_table', 1),
(11, '2019_02_07_104827_create_blogs_table', 1),
(12, '2019_02_18_082215_create_reviews_table', 1),
(13, '2019_02_12_132746_create_sliders_table', 2),
(14, '2019_02_14_053639_create_testimonials_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `my_books`
--

CREATE TABLE `my_books` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_books`
--

INSERT INTO `my_books` (`id`, `user_id`, `book_id`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 3, 7, 1, '2019-02-06 11:08:11', NULL),
(2, 3, 8, 1, '2019-02-06 11:08:11', '2019-02-06 11:08:11');

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
(1, 'Makalu', 'Kathmadnu Nepal`', 'y87y87', 'ihbk', 'fadsf', 'premlamsal2@gmail.com', 'http://makalu.coom.np', 'asdfads', '2019-02-06 11:08:11', '2019-02-06 11:08:11');

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
(11, 'Niraj Lamsal', 'gea', 3, '2019-02-27 22:25:23', '2019-02-27 22:25:23', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_url`, `created_at`, `updated_at`) VALUES
(1, '1550563889.jpg', NULL, '2019-02-19 16:11:29', '2019-02-19 16:11:29'),
(2, '1550564615.jpg', NULL, '2019-02-19 16:23:35', '2019-02-19 16:23:35'),
(3, '1550564621.jpg', NULL, '2019-02-19 16:23:41', '2019-02-19 16:23:41'),
(4, '1550564624.jpg', NULL, '2019-02-19 16:23:44', '2019-02-19 16:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcategory_name`, `link`, `category_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Donut', 'fsadfsad', 1, 1, '2019-02-06 11:08:11', '2019-02-06 11:08:11'),
(2, 'Vanila', 'fsadf', 2, 2, '2019-02-06 11:08:11', '2019-02-06 11:08:11');

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
(3, '1550564276.jpg', '<p>This is the best site I have ever Seen in My life.</p>', 'Bishal Bhandari', NULL, NULL, '2019-02-19 16:17:56', '2019-02-19 16:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_Id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `dateTime`, `amount`, `points`, `created_at`, `updated_at`, `user_Id`) VALUES
(1, '2019-02-20 00:00:00', '20000', '20', '2019-02-20 08:00:00', '2019-02-20 08:00:00', 3);

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
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Niraj Lamsal', 'admin@admin.com', '2019-02-18 08:00:00', 'admin1234', 'ktm', '987087', NULL, 'Male', 'admin', NULL, '2019-02-18 08:00:00', '2019-02-18 17:59:38'),
(3, 'Prem Lamsal', 'premlamsal2@gmail.com', NULL, '$2y$10$bUAlxtOAF/G5hi7stSGcSeMFlsGyTM5QKsAwc6FD.wJYYpjzAnFca', NULL, NULL, NULL, 'male', 'customer', NULL, '2019-02-18 18:43:42', '2019-02-18 18:43:42');

--
-- Indexes for dumped tables
--

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
  ADD KEY `my_books_book_id_foreign` (`book_id`),
  ADD KEY `my_books_transaction_id_foreign` (`transaction_id`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `my_books`
--
ALTER TABLE `my_books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  ADD CONSTRAINT `my_books_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`),
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

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_Id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
