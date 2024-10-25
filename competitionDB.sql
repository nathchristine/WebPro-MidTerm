-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2024 at 06:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competitionDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('bbb@gmail.com|127.0.0.1', 'i:1;', 1729775928),
('bbb@gmail.com|127.0.0.1:timer', 'i:1729775928;', 1729775928);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Hackathon Challenge', 'A competition focused on hackathon challenge.', '2024-08-16', NULL, '2024-10-18 01:48:42'),
(2, 'Coding Marathon', 'A competition focused on coding marathon.', '2024-03-12', NULL, NULL),
(3, 'AI Innovation Contest', 'A competition focused on ai innovation contest!!!!!!!', '2024-05-18', NULL, '2024-10-24 04:13:37'),
(4, 'Web Development Showdown', 'A competition focused on web development showdown.', '2024-10-15', NULL, NULL),
(5, 'Game Development Tournament', 'A competition focused on game development tournament.', '2024-11-21', NULL, NULL),
(6, 'Cybersecurity Capture the Flag', 'A competition focused on cybersecurity capture the flag.', '2024-04-08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '0001_01_01_000000_create_users_table', 1),
(29, '0001_01_01_000001_create_cache_table', 1),
(30, '0001_01_01_000002_create_jobs_table', 1),
(31, '2024_10_17_085905_create_competition_table', 1),
(32, '2024_10_17_090057_create_participants_table', 1),
(34, '2024_10_17_090210_create_results_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `email`, `phone`, `competition_id`, `created_at`, `updated_at`) VALUES
(4567, 'hgahfslc', 'jf@gmail.coo', '34567', 3, '2024-10-24 03:39:43', '2024-10-24 20:19:59'),
(5025231005, 'Muiz Surya Fata', '5025231005@student.its.ac.id', '08123456787', 5, NULL, NULL),
(5025231007, 'Anindya Diany Putri', '5025231007@student.its.ac.id', '08123456786', 5, NULL, NULL),
(5025231008, 'Alfa Radithya Fanany', '5025231008@student.its.ac.id', '08123456786', 6, NULL, NULL),
(5025231009, 'Sanie Ghanda Prawira', '5025231009@student.its.ac.id', '08123456789', 6, NULL, NULL),
(5025231010, 'Nathaniel Christine Martauli Simanullang', '5025231010@student.its.ac.id', '08123456781', 4, NULL, NULL),
(5025231069, 'R. Rafif Aqil Aabid Hermawan', '5025231069@student.its.ac.id', '08123456789', 5, NULL, NULL),
(5025231070, 'Muhammad Dzaky Taufiqurrahman', '5025231070@student.its.ac.id', '08123456788', 4, NULL, NULL),
(5025231072, 'Azkiya Rusyda Zahra', '5025231072@student.its.ac.id', '08123456787', 1, NULL, NULL),
(5025231074, 'Rogelio Kenny Arisandi', '5025231074@student.its.ac.id', '08123456782', 1, NULL, NULL),
(5025231075, 'Reino Yuris Kusumanegara', '5025231075@student.its.ac.id', '08123456783', 4, NULL, NULL),
(5025231078, 'Bima Prayoga Miftachul Rahmat', '5025231078@student.its.ac.id', '08123456780', 2, NULL, NULL),
(5025231079, 'Arini Nur Azizah', '5025231079@student.its.ac.id', '08123456783', 3, NULL, NULL),
(5025231081, 'Khairunnisa Rahmahdani Danang', '5025231081@student.its.ac.id', '08123456784', 6, NULL, NULL),
(5025231085, 'Muhammad Rafly Abdillah', '5025231085@student.its.ac.id', '08123456780', 2, NULL, NULL),
(5025231086, 'Safa Nadhira Azzahra', '5025231086@student.its.ac.id', '08123456788', 3, NULL, NULL),
(5025231161, 'Muhammad Rizqy Hidayat', '5025231161@student.its.ac.id', '08123456784', 3, NULL, NULL),
(5025231163, 'Muhammad Thariq Darobi', '5025231163@student.its.ac.id', '08123456785', 4, NULL, NULL),
(5025231165, 'Danendra Ramadhan', '5025231165@student.its.ac.id', '08123456785', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `participants_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `competition_id`, `participants_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 5, 5025231069, 87, NULL, NULL),
(2, 2, 5025231085, 76, NULL, NULL),
(3, 4, 5025231010, 92, NULL, NULL),
(4, 1, 5025231074, 68, NULL, NULL),
(5, 3, 5025231079, 85, NULL, NULL),
(6, 6, 5025231081, 91, NULL, NULL),
(7, 4, 5025231163, 74, NULL, NULL),
(10, 3, 5025231086, 66, NULL, NULL),
(11, 6, 5025231009, 93, NULL, NULL),
(12, 2, 5025231078, 54, NULL, NULL),
(15, 4, 5025231075, 82, NULL, NULL),
(16, 3, 5025231161, 95, NULL, NULL),
(17, 2, 5025231165, 59, NULL, NULL),
(18, 6, 5025231008, 64, NULL, NULL),
(19, 5, 5025231005, 71, NULL, NULL),
(20, 4, 5025231070, 88, NULL, NULL),
(35, 5, 5025231007, 100, '2024-10-24 03:24:32', '2024-10-24 03:24:32'),
(36, 1, 5025231072, 89, '2024-10-24 03:32:47', '2024-10-24 03:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('s6KavqJLJ6Pi2hFZLzldqyN63WfhIhbWPra16hr6', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXV0bFVCT09GU2tIb0hZd1ZuZGRiTHozUFk1VGRCam4xNkJtWDhpTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1729826475),
('SoDV1hMQ4Qh4OdCoZC3ZvQ7tPf1BZjUemFvF9OCL', 4, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUjNteHp5V0VIb3dMM2pVUG8wRzBpYVVpcjF4UnFkSzZERDRoYlJmQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9JVVBQYXJ0aWNpcGFudExpc3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1729776842);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aninonielicha', 'aninonielicha@gmail.com', NULL, '$2y$12$Q1OroO4.jpaKZ0EzyMnENunkcPFgqUuT79Nz.lv.uxRh.do/lHjtu', 'MCBaCdcd3Agc8oacAqK5x9VB3wPSgM5pf1f1lKmclMU3lwbAMSXLYz9kHvCy', '2024-10-17 22:43:15', '2024-10-17 22:43:15'),
(2, '1234', 'aaaaaaa@gmail.com', NULL, '$2y$12$B8QnlrWZ72ss/HK27iVND.vu6qPGmZWi8bLbLxy777J1HOQelLs2q', NULL, '2024-10-24 06:02:19', '2024-10-24 06:02:19'),
(3, 'ljef', 'kfeb@gmail.com', NULL, '$2y$12$OJAQpaFe6qm2J/ZTUWIQ8.zHiJvjQz8QZMLSivsIKRayW29Vh2JHS', NULL, '2024-10-24 06:20:26', '2024-10-24 06:20:26'),
(4, 'jk', 'lewf@jfbq', NULL, '$2y$12$q/EEitqL55Mw1p.V5TkoSO0udHW5siXShCX4rkhmvtKkSBiBDUqgO', NULL, '2024-10-24 06:33:47', '2024-10-24 06:33:47');

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
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participants_competition_id_foreign` (`competition_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_competition_id_foreign` (`competition_id`),
  ADD KEY `results_participants_id_foreign` (`participants_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5025231167;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competition` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competition` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_participants_id_foreign` FOREIGN KEY (`participants_id`) REFERENCES `participants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
