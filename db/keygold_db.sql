-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Waktu pembuatan: 12 Jul 2024 pada 00.00
-- Versi server: 8.1.0
-- Versi PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keygold_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_11_033941_create_permission_tables', 1),
(6, '2024_07_11_034240_create_products_table', 1),
(7, '2024_07_11_040843_create_transactions_table', 1),
(8, '2024_07_11_041255_create_transaction_details_table', 1),
(9, '2024_07_11_042209_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_id` bigint UNSIGNED DEFAULT NULL,
  `total_bayar` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_produk` text COLLATE utf8mb4_unicode_ci,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat` double(8,2) DEFAULT NULL,
  `harga_jual` decimal(15,2) DEFAULT NULL,
  `total_stock` int DEFAULT NULL,
  `status` enum('tersedia','habis') COLLATE utf8mb4_unicode_ci DEFAULT 'tersedia',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `og_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `uuid`, `nama_produk`, `deskripsi_produk`, `merek`, `berat`, `harga_jual`, `total_stock`, `status`, `gambar`, `meta_title`, `meta_description`, `meta_keywords`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'e109f768-e652-4f6e-8d51-1bb745978a1d', 'Emas Batangan - 3 gr', '<p>Lorem ipsum dolor sit amet consectetur adipiscing, elit fermentum ut semper cursus metus, porttitor suspendisse eu dis laoreet. Penatibus tristique fames mauris ligula natoque velit aptent enim dictum quis ante, fusce lobortis commodo non egestas nisi sed et vitae. Tempor iaculis luctus netus nibh libero vehicula augue magnis bibendum curabitur, morbi eget sodales donec euismod venenatis sagittis dignissim sollicitudin class, curae elementum quisque condimentum diam blandit mi proin molestie.</p>', 'UBS', 3.00, 3450000.00, 499, 'tersedia', 'iB5eTsSnk9QgrbMD0Ljv.jpg', NULL, NULL, NULL, NULL, '2024-07-11 18:54:59', '2024-07-11 18:54:59'),
(2, 'fdd7dc79-32d2-4c48-8ee3-0ad385b44dca', 'Emas Batangan - 5 gr', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, tempor fringilla tortor venenatis at sem, aenean eu scelerisque tempus nisi inceptos. Risus pellentesque taciti iaculis lectus volutpat, enim cursus senectus montes, euismod quam cras sapien. Sodales tellus parturient primis nec ad mi eget malesuada ut nulla fusce aptent, morbi ultricies sagittis erat pharetra platea nunc faucibus varius curae aliquam, ligula integer dis hendrerit accumsan conubia ornare diam vivamus lacus dui.</p>', 'ANTAM', 5.00, 3280000.00, 499, 'tersedia', 'UYqTulo8Z9mBxM4bdpdU.jpg', NULL, NULL, NULL, NULL, '2024-07-11 19:55:50', '2024-07-11 19:55:50'),
(3, 'eba0733b-f7a3-487f-b827-af3cd5282a8d', 'Emas Batangan - 0.5 gr', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit odio urna, hendrerit lectus primis imperdiet facilisis sapien at felis lobortis, quis condimentum in eleifend litora nascetur nunc dis. Porttitor consequat volutpat nam non curae massa risus mus, mollis pharetra conubia mi diam sem ridiculus, fringilla vivamus tempor enim fermentum morbi maecenas. Cursus neque aptent interdum nullam est iaculis, nisi ac aenean phasellus id rhoncus tortor, dictum faucibus augue mauris cubilia.</p>', 'UBS', 0.50, 3200000.00, 0, 'habis', '53zKHNvB0E74xoIE63ng.jpg', NULL, NULL, NULL, NULL, '2024-07-11 21:11:50', '2024-07-11 21:11:50'),
(4, '7aa715be-0c87-4353-91cb-ac5473d80b50', 'Emas Batangan - 1 kg', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit odio urna, hendrerit lectus primis imperdiet facilisis sapien at felis lobortis, quis condimentum in eleifend litora nascetur nunc dis. Porttitor consequat volutpat nam non curae massa risus mus, mollis pharetra conubia mi diam sem ridiculus, fringilla vivamus tempor enim fermentum morbi maecenas. Cursus neque aptent interdum nullam est iaculis, nisi ac aenean phasellus id rhoncus tortor, dictum faucibus augue mauris cubilia.</p>', 'UBS', 1000.00, 9800000.00, 2, 'tersedia', 'mdQnFpqK37qnmh0NZokm.jpg', NULL, NULL, NULL, NULL, '2024-07-11 21:12:41', '2024-07-11 21:12:41'),
(5, 'f0dc8ad1-2510-454d-9609-d9ee0aa7c6f6', 'Emas Batangan - 5 gr', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit odio urna, hendrerit lectus primis imperdiet facilisis sapien at felis lobortis, quis condimentum in eleifend litora nascetur nunc dis. Porttitor consequat volutpat nam non curae massa risus mus, mollis pharetra conubia mi diam sem ridiculus, fringilla vivamus tempor enim fermentum morbi maecenas. Cursus neque aptent interdum nullam est iaculis, nisi ac aenean phasellus id rhoncus tortor, dictum faucibus augue mauris cubilia.</p>', 'ANTAM', 5000.00, 6700000.00, 235, 'tersedia', 'FJ64xcESTSKb15wwi7Bv.jpg', NULL, NULL, NULL, NULL, '2024-07-11 21:13:36', '2024-07-11 21:13:36'),
(6, 'd0ddee14-3801-4d4a-bd89-01b84ac1d134', 'Emas Batangan - 9 gr', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit odio urna, hendrerit lectus primis imperdiet facilisis sapien at felis lobortis, quis condimentum in eleifend litora nascetur nunc dis. Porttitor consequat volutpat nam non curae massa risus mus, mollis pharetra conubia mi diam sem ridiculus, fringilla vivamus tempor enim fermentum morbi maecenas. Cursus neque aptent interdum nullam est iaculis, nisi ac aenean phasellus id rhoncus tortor, dictum faucibus augue mauris cubilia.</p>', 'UBS', 9000.00, 9200000.00, 209, 'tersedia', 'wBxa9SlRmGGrbb4QnVfi.jpg', NULL, NULL, NULL, NULL, '2024-07-11 21:14:51', '2024-07-11 21:14:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-07-11 18:52:30', '2024-07-11 18:52:30'),
(2, 'customer', 'web', '2024-07-11 18:52:33', '2024-07-11 18:52:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `total_pemesanan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `uuid`, `user_id`, `keterangan`, `total_pemesanan`, `created_at`, `updated_at`) VALUES
(3, 'ebf74ceb-b7de-4b39-a68c-731a88894269', 3, 'test', 2, '2024-07-11 20:16:45', '2024-07-11 20:16:59'),
(4, '805936c9-1aba-4334-9d93-d334ebcf390f', 2, 'test', 3, '2024-07-11 20:37:34', '2024-07-11 20:58:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_id` bigint UNSIGNED DEFAULT NULL,
  `produk_id` bigint UNSIGNED DEFAULT NULL,
  `total_pemesanan` int DEFAULT NULL,
  `total_harga` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `uuid`, `transaksi_id`, `produk_id`, `total_pemesanan`, `total_harga`, `created_at`, `updated_at`) VALUES
(4, '286d27a0-9944-4223-811b-3d4d42fa49a2', 3, 2, 2, 6560000.00, '2024-07-11 20:16:45', '2024-07-11 20:16:59'),
(5, 'c2c42ca3-08ae-42c2-8117-da1e89249bd2', 4, 1, 2, 6900000.00, '2024-07-11 20:37:35', '2024-07-11 20:38:27'),
(6, '1acc593e-3d37-46dc-bbfb-c1734c127a9d', 4, 2, 1, 3280000.00, '2024-07-11 20:58:44', '2024-07-11 20:58:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `uuid`, `nama_lengkap`, `no_identitas`, `alamat`, `no_hp`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fbb57dc7-f6cb-4ea4-ba7f-c77efac26d77', 'Mozell Thiel', '9768221936', '448 Konopelski Alley\nAbshiretown, NE 34421', '1-860-933-3683', 'admin@keygold.com', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'ZNDILBgtaE8ZB5EC3Svg0KCpPItNOve4aU9gmuswh8y5hIj48HZyHXpzPGm7', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(2, '3246a7d0-5072-406a-8fbb-8882bb755c31', 'Dr. Cristian Waters III', '0378597095', '515 Joseph Keys Apt. 760\nSengermouth, OH 76134-2867', '+1-404-348-0851', 'demetris.lang@example.org', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', '2CVddXxlgfN3HtgZnbzcoQAsylMhBr5XA6YOXrTOjxeMOJadkzFo9B9m8qiW', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(3, '16aba87f-2e28-4729-9d50-28f54c932153', 'Verna Roob', '3096452557', '796 Crist Islands Suite 104\nNew Mara, NY 97451-3581', '660-676-2621', 'smitham.wyatt@example.net', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'ZH0mrd2kMGnku8Dl3S1G3BFA8FXnetfMQsN7xzlJ0KcXye093arSDBnBAom3', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(4, '36ad1255-7340-49ec-8dd6-e074a2a5caae', 'Enrique McDermott', '3029025515', '23096 Hessel Skyway\nSouth Ninafurt, DC 90512', '(203) 923-3700', 'carole.wiza@example.org', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'fKA9O67zL8', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(5, '1befeddb-9d76-45cf-b623-43f42276948a', 'Emely Parker', '4153541068', '55495 Lyla Mountains Apt. 826\nUptonfurt, OH 36189', '458.821.7541', 'winnifred.boyle@example.net', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'J9IE99Z62T', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(6, 'd7b844a2-426f-4653-b98f-a941c86a6700', 'Leila Armstrong', '9302967683', '1097 Jessica Mountain Apt. 682\nZemlakchester, HI 74467-5161', '+1-430-880-3476', 'sigrid90@example.org', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'e1e1dBn7p5', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(7, 'e9c2e536-e4aa-4c7a-9070-66778bf03b7a', 'Randal Bergnaum', '0051557007', '7803 Rolfson Avenue\nSamirfort, WV 10271-7426', '+1 (781) 947-0593', 'edd04@example.net', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'dg6hHDYD6z', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(8, '09da863d-10b1-4020-808a-b16283cf1bb8', 'Elissa Stiedemann', '0516162262', '4425 Parisian Fords Apt. 743\nSouth Abbey, NJ 47090-2630', '(820) 283-9982', 'alexandra98@example.com', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', '9pzBlMTxLB', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(9, 'ee394a70-3710-4c0d-b7cf-235341a00d62', 'Dr. Carlo Buckridge II', '3893143696', '4192 Dean Viaduct\nNew Myriamfort, AL 32524-6618', '1-863-718-5899', 'danny45@example.org', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'bwzDxR2AEu', '2024-07-11 18:52:19', '2024-07-11 18:52:19'),
(10, 'd6280d78-a454-48a7-970e-6c4421455f30', 'Pattie Fay', '3346493697', '493 Dean Drive\nEast Nelle, SC 14480', '414.209.1535', 'hrodriguez@example.com', '$2y$12$WSGGSVaZldcpkHXTQYl/L.k2rZbkuDpN7DBN48RKel.GLzNRLwCHK', 'h8lAMtRKom', '2024-07-11 18:52:19', '2024-07-11 18:52:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `payments_uuid_index` (`uuid`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_uuid_index` (`uuid`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_user_id_unique` (`user_id`),
  ADD KEY `transactions_uuid_index` (`uuid`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `transaction_details_produk_id_foreign` (`produk_id`),
  ADD KEY `transaction_details_uuid_index` (`uuid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_no_identitas_unique` (`no_identitas`),
  ADD UNIQUE KEY `users_no_hp_unique` (`no_hp`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_uuid_index` (`uuid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_details_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
