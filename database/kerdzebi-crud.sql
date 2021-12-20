-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerdzebi-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'en', '2021-12-18 10:16:20', '2021-12-18 10:16:20');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_08_12_014722_create_permission_tables', 1),
(17, '2021_08_12_014733_create_posts_table', 1),
(18, '2021_12_06_090353_create_post_translations_table', 1),
(19, '2018_08_29_200844_create_languages_table', 2),
(20, '2018_08_29_205156_create_translations_table', 2),
(21, '2021_12_18_141228_create_pages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 10),
(1, 'App\\Models\\User', 11),
(1, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `currency`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'ბუღალტერი1 პოსტი', 'ბუღალტერი1 პოსტი', 12, 7, NULL, NULL),
(22, 'მოდერატორის პოსტი', 'მოდერატორის პოსტი', 322, 6, NULL, NULL),
(23, 'პოსტი2', 'პოსტი2', 2, 7, NULL, NULL),
(24, 'ბუღალტერი 2', 'ბუღალტერი 2', 23, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'მომხმარებლების სია', 'user-list', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(2, 'მომხმარებლის დამატება', 'user-create', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(3, 'მომხმარებლის რედაქტირება', 'user-edit', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(4, 'მომხმარებლის წაშლა', 'user-delete', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(5, 'როლების სია', 'role-list', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(6, 'როლის შექმნა', 'role-create', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(7, 'როლის რედაქტირება', 'role-edit', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(8, 'როლის წაშლა', 'role-delete', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(9, 'პრივილეგიების სია', 'permission-list', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(10, 'პრივილეგიის შექმნა', 'permission-create', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(11, 'პრივილეგიის რედაქტირება', 'permission-edit', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(12, 'პრივილეგიის წაშლა', 'permission-delete', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(13, 'პოსტები', 'post-list', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(14, 'პოსტის შექმნა', 'post-create', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(15, 'პოსტის რედაქტირება', 'post-edit', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(16, 'პოსტის წაშლა', 'post-delete', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(17, 'გვერდები', 'page-list', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(18, 'გვერდის შექმნა', 'page-create', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(19, 'გვერდის რედაქტირება', 'page-edit', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03'),
(20, 'გვერდის წაშლა', 'page-delete', 'web', '2021-12-12 17:53:03', '2021-12-12 17:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_translations`
--

CREATE TABLE `post_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-12-12 17:53:39', '2021-12-12 17:53:39'),
(4, 'moderator', 'web', '2021-12-19 13:32:41', '2021-12-19 14:14:06'),
(5, 'accountant', 'web', '2021-12-19 14:15:11', '2021-12-19 14:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(3, 4),
(4, 1),
(4, 4),
(5, 1),
(5, 4),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 4),
(17, 5),
(18, 1),
(18, 4),
(18, 5),
(19, 1),
(19, 4),
(20, 1),
(20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Davit Gakhokia', 'd.gakhokia@diem.ge', NULL, '$2y$10$47t2DbmUVhu2VThOHtgs9O4jNqJZ4WnHxbojS64JmCFneehTfrdZ2', 'owwkvfoBVKsarqgGQuFtPXZhOOUZMLL9NRYd9pMxXmtz42aFjbzxXq2j0yYh', '2021-12-12 17:53:55', '2021-12-12 18:04:29'),
(6, 'მოდერატორი', 'moderator@gmail.com', NULL, '$2y$10$Ar8s/NRRwm.WeNVdDL7saOSZ2vASYh.9higVrb/yO/dbVbFqTpd4y', NULL, '2021-12-19 14:13:29', '2021-12-19 14:19:57'),
(7, 'ბუღალტერი1', 'bug1@gmail.com', NULL, '$2y$10$PxogTFMmMTwc04mFhANeeOxhYGi7dxTih2MFYWbbPp5lJ95OkwOmm', NULL, '2021-12-19 14:17:10', '2021-12-19 14:17:10'),
(8, 'ბუღალტერი2', 'bug2@gmail.com', NULL, '$2y$10$1xaMTSVNuoTkoQE5vPKv3eB2i7fB22j5NPLGjTX0giCV9XF1LneQq', NULL, '2021-12-19 14:17:38', '2021-12-19 14:17:38'),
(9, 'Quamar11 Mathews', 'bewo@mailinator.com', NULL, '$2y$10$NaNwT1V5TfE5Yw.Z01KUMetWgj3p8wA3EiILaWSelD7HMXJpMCMm.', NULL, '2021-12-19 15:48:01', '2021-12-19 16:52:55'),
(10, 'Ira Cherry', 'jeqi@mailinator.com', NULL, '$2y$10$S4jJFtyxNbG.1bZI7wpIr.BHsbecKhXVayzlnItxKsTliNcQQho3e', NULL, '2021-12-19 15:51:57', '2021-12-19 15:51:57'),
(11, 'Odessa Hendricks', 'zojezupum@mailinator.com', NULL, '$2y$10$Un50YBIvuSFxHJZXZUh4JeaXx.1XVBkfb5PszmvC0zncg35ARV6Ty', NULL, '2021-12-19 15:52:39', '2021-12-19 15:52:39'),
(12, 'Jenette Goodwin', 'zysyjekyli@mailinator.com', NULL, '$2y$10$08sfnAzFcmWIGetgX9khbeWRKUvJY0y5mIAsPYrrIGfNq46vxvj7q', NULL, '2021-12-19 15:52:59', '2021-12-19 15:52:59'),
(16, 'Wyatt Norman', 'zapyp@mailinator.com', NULL, '$2y$10$EHVFgf3pBYtUGNN2QKrX8.XTmg8C5nne/Z2Qy9j1uMYBxLhOR.b1e', NULL, '2021-12-19 15:58:23', '2021-12-19 15:58:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_translations_post_id_locale_unique` (`post_id`,`locale`),
  ADD KEY `post_translations_locale_index` (`locale`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
