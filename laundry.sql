-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 01:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
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
-- Table structure for table `hargas`
--

CREATE TABLE `hargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hargas`
--

INSERT INTO `hargas` (`id`, `kategori`, `satuan`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'Baju', '20', '10000000', '2022-08-04 16:25:37', '2022-08-04 16:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `fasilitas`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'Tv, AC, Lemari Es, Tempat Tidur, dan Lain-lain', 'Ori', '2022-08-04 16:23:35', '2022-08-04 16:23:35');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_03_064724_create_pelanggans_table', 1),
(6, '2022_08_03_090228_create_services_table', 1),
(7, '2022_08_04_020040_create_orders_table', 1),
(8, '2022_08_04_033609_create_statuses_table', 1),
(9, '2022_08_04_060234_create_hargas_table', 1),
(10, '2022_08_04_064908_create_pembayarans_table', 1),
(11, '2022_08_04_110822_create_layanans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pelanggan_id`, `barang`, `satuan`, `no_order`, `pembayaran_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'Baju', '12', '12111', 2, '2022-08-04 16:24:43', '2022-08-04 16:24:43');

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
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_pelanggan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `kd_pelanggan`, `nama`, `jk`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '4757014471', 'Mrs. Tess Vandervort III', 'Perempuan', '1-862-802-7151', '17037 Kirlin Way\nPort Yessenia, NJ 91939-9383', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(2, '5862849839', 'Savanna Mraz', 'Laki-laki', '+18646694445', '976 Mohr Stravenue Apt. 855\nLake Chaunceyborough, OK 32703', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(3, '0853915063', 'Nedra Keeling IV', 'Laki-laki', '1-539-566-3531', '5163 Helga Key Suite 594\nKilbackville, GA 25575-1270', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(4, '2996707855', 'Amalia Corkery', 'Laki-laki', '940.432.3934', '79223 Marquardt Village Suite 008\nGaylordmouth, SC 31240', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(5, '6671302644', 'Dr. Juanita Morissette Sr.', 'Perempuan', '+1 (678) 587-1280', '2841 Gillian Court Suite 774\nNorth Sydni, MT 13212', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(6, '3410334164', 'Brook Mayer DDS', 'Perempuan', '941-624-1874', '4494 Kilback Meadow\nWest Napoleonborough, IL 69318-1850', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(7, '2189366972', 'Anabel Koss', 'Laki-laki', '718-778-6622', '1054 Derick Loaf Suite 868\nSouth Izaiahmouth, TX 50607-4686', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(8, '1112513105', 'Alysson Kessler', 'Perempuan', '630.514.5505', '6644 Marlene Freeway Suite 955\nPort Madalynview, ID 23092', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(9, '4459436988', 'Kali Hills', 'Laki-laki', '(469) 543-4747', '365 Jadyn Lakes Apt. 838\nSouth Delaney, ID 21561', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(10, '7814242806', 'Mr. Solon Cole Jr.', 'Laki-laki', '1-213-907-8503', '801 Destini Harbors Suite 631\nPfefferborough, OR 66428', '2022-08-04 16:14:53', '2022-08-04 16:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `metode`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'Cash', 'Tunai', '2022-08-04 16:22:15', '2022-08-04 16:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_layanan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `kd_layanan`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'P001', 'Arsyad Hamidi', 10000000, '2022-08-04 16:29:42', '2022-08-04 16:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `order_id`, `pembayaran_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'Selesai', '2022-08-04 16:26:23', '2022-08-04 16:26:23');

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
(1, 'Mrs. Guadalupe Brown MD', 'jacobi.lavina@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KMSiVT4eqO', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(2, 'Coleman Leuschke', 'adan.roob@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J8NJu8noDX', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(3, 'Prof. Jakob Beahan', 'arthur88@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mcVDn0YMLh', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(4, 'Noble Leannon', 'rogelio28@example.com', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ElcKjSJ8IkzINkjepW1Zh6mJAoTae8U2MUsmD4BZeEufJ6or9N0QhivOhOzs', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(5, 'Miss Elda Kassulke Sr.', 'anjali.schiller@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3s9XKV5iK9', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(6, 'Shyanne Ledner', 'roslyn.ortiz@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'feBJiPjrsX', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(7, 'Javon Bashirian', 'eprohaska@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NSTbwFcHJb', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(8, 'Roxanne Armstrong', 'kozey.julia@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CD6kOvZjUx', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(9, 'Mrs. Misty Heathcote', 'johns.giovanna@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dTcwCgAhr9', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(10, 'Sebastian Wyman', 'ariel28@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WTJwVA5CK2', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(11, 'Makayla Schuppe', 'casper.waters@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TXadgH6PcP', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(12, 'Jocelyn Fay II', 'hartmann.amy@example.com', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BtA7IRqxxV', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(13, 'Ms. Glenda Kuvalis MD', 'golden12@example.com', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XVG5XoMVXn', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(14, 'Elisabeth Carroll', 'wintheiser.jenifer@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dQozVGLXw6', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(15, 'Maiya Muller', 'ojacobson@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YewjWKwcki', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(16, 'Loma Klein IV', 'leuschke.cory@example.com', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zQAWCSYe9y', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(17, 'Jarrett Mosciski V', 'juana.buckridge@example.org', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7Xo43yGWQa', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(18, 'Ted Pagac', 'adrienne40@example.com', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mS1BUuEpWS', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(19, 'Eulalia Runte', 'earnestine.kuhlman@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QaeD3X2lMB', '2022-08-04 16:14:53', '2022-08-04 16:14:53'),
(20, 'Cielo Zboncak', 'pouros.katrine@example.net', '2022-08-04 16:14:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9EBl0BLYiW', '2022-08-04 16:14:53', '2022-08-04 16:14:53');

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
-- Indexes for table `hargas`
--
ALTER TABLE `hargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_kd_pelanggan_unique` (`kd_pelanggan`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_kd_layanan_unique` (`kd_layanan`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `hargas`
--
ALTER TABLE `hargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
