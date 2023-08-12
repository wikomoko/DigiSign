-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2023 at 03:04 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digisign`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Laron Koepp PhD', 'christelle.dicki@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(2, 'Daniela McClure', 'tillman.winifred@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(3, 'German Hartmann', 'johnson.alfred@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(4, 'Felipe White', 'damore.rogelio@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(5, 'Sister Bergstrom', 'dietrich.orion@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', '2023-08-11 05:27:29', '2023-08-11 05:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_11_085655_create_ttd_table', 1),
(6, '2023_08_11_090031_create_admin_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ttd`
--

CREATE TABLE `ttd` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ttd`
--

INSERT INTO `ttd` (`id`, `id_user`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 'tanta tangan untuk persetujuan kerjasama dengan perusahaan asing di Eropa', 1, '2023-08-11 06:29:47', '2023-08-11 06:29:47'),
(2, 21, 'membayar tagihan PO Iphone14', 1, '2023-08-11 06:34:56', '2023-08-11 06:34:56'),
(3, 22, 'Tesiting Succesfully', 1, '2023-08-11 19:42:43', '2023-08-11 19:42:43'),
(4, 22, 'This is pre release app', 1, '2023-08-11 19:42:54', '2023-08-11 19:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `membership`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valentin Langosh', 'iullrich@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'BlKk7epKQ4', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(2, 'Dexter Abernathy', 'neva.ebert@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'bKdiLQZHPuKmdCvBtA2sLnWLqKtlVNGRUdiGoBI1cys6LcPJeJ65DPOlJbmP', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(3, 'Cordie Trantow IV', 'catherine.stamm@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'Psy8nc54Ev', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(4, 'Deshawn Corwin', 'langworth.chaim@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'Wk7X8xDZ0W', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(5, 'Prof. Antonia Erdman', 'melissa65@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'J2lmqAEy7C', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(6, 'Cristopher Jerde', 'jkling@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'DCYS4QvoKM', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(7, 'Sallie Watsica', 'chester44@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, '95TTA6sI0c', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(8, 'Amiya Borer', 'nels.waters@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'NnzeRUUqen', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(9, 'Carmine Murphy', 'icole@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, '2WirX22iRl', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(10, 'Ms. Dovie Trantow', 'marlin21@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'HHWG4qbGpE', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(11, 'Lonzo Bruen', 'yolanda.schneider@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'LpIyf5JNMV', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(12, 'Mr. Hayley Hilpert', 'ucremin@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'gw9oWnwOJF', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(13, 'Josefa Stracke III', 'klocko.kiarra@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'zpFvgHG9zR', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(14, 'Mrs. Pearl Braun', 'feeney.jaclyn@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, '9gduMFa5UA', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(15, 'Zita Spencer', 'klocko.tyree@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'UqP2j1Jh0H', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(16, 'Favian Schuppe', 'tania.kozey@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'eh2goOPjUo', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(17, 'Dr. Marc Klocko PhD', 'wisoky.leilani@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'teLmul996z', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(18, 'Keanu Hackett', 'fkuhic@example.net', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'HhKPYfgY45', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(19, 'Miss Nakia Gaylord Sr.', 'umarks@example.org', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'nR6SsQiVjq', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(20, 'Jazmyne Walker II', 'tmarquardt@example.com', '$2y$10$xy22LAmbi2qP8YLQoXPTu.G4Wh2FlGOZMPaCIzHzQJF6v2i0mPJSm', 0, 'N3Jzly3H0L', '2023-08-11 05:27:29', '2023-08-11 05:27:29'),
(21, 'Natasha Amelia', 'natasha@gmail.com', '$2y$10$kCrhm/AKCc9qNag5vSRW0.P28UOL5lykPjJbe7ASzQVNxOGRFhVEa', 0, NULL, '2023-08-11 05:47:19', '2023-08-11 05:47:19'),
(22, 'wikomoko', 'moko@mail.com', '$2y$10$cPOSuAF.ruSalqzXvUXPt.65wKlDJXPH/nsRz67vdE975IbWtQLYy', 0, NULL, '2023-08-11 19:40:28', '2023-08-11 19:40:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ttd_id_user_foreign` (`id_user`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ttd`
--
ALTER TABLE `ttd`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ttd`
--
ALTER TABLE `ttd`
  ADD CONSTRAINT `ttd_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
