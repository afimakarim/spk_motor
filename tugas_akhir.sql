-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Agu 2020 pada 03.06
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(2) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$.JYHYxUF2M0qXUv6OkUecOnmtyPxUU.2hrGMDRs3oCwVaGeCFjuNm', NULL, '0PpunC52G2c8bT3cqNnFNQxebsEjp0FpnZWUJ3mDbjuzoMLeHY1vUHNMPki6', '2020-07-18 04:51:32', '2020-07-18 04:51:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif2`
--

CREATE TABLE `alternatif2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kapasitas_mesin` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `kapasitas_tengki` int(11) NOT NULL,
  `kapasitas_bagasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_id` bigint(20) UNSIGNED NOT NULL,
  `motor_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contohs`
--

CREATE TABLE `contohs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dealers`
--

CREATE TABLE `dealers` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_dealer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dealers`
--

INSERT INTO `dealers` (`deleted_at`, `id`, `user_id`, `name`, `email`, `password`, `gambar`, `telephone`, `ket_dealer`, `jam_buka`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 1, 1, 'NagaMas Motor', 'nagamas@gmail.com', '$2y$10$s9Uf3rRFrnpGE/3zndhJ9usdYlG1lJbYLNF4T7jVNNL6DHtWpVXvm', 'dealer/ISCttyndVmWW1r2Lsn03OvimuiqRiNWvdWjx5Nr5.webp', '08989859211', 'Honda Naga Mas Motor adalah salah satu dealer Honda populer di Tegal. Dealer ini terletak di Jl. A. Yani No. 19, Tegal dan Anda bisa mengunjunginya untuk test drive, mendapatkan penawaran terbaik.', '08:00 - 15:00', 'Jalan AR.Hakim No.18 Kel Randugunting \r\nKecamatan Tegal Selatan', 'XRVXVGN8mwtQTcpBlfhGeSHJISOw3pmb4fHDDFVUwFlj63jTrp1s52rHs0bF', '2020-07-18 06:39:31', '2020-07-31 14:22:07'),
(NULL, 2, 1, 'Langgan Motor', 'langgan@gmail.com', '$2y$10$tZfHjWEVoyaf5tNzaeMwnuhAkPphkQSqxOZTb42jr8A6AqzCJGiwG', 'dealer/bO8vRz5SswupeniPG0hPL1JXTqO0xqb0Lqv6ELRE.jpeg', '987678999', 'Honda Naga Mas Motor adalah salah satu dealer Honda populer di Tegal. Dealer ini terletak di Jl. A. Yani No. 19, Tegal dan Anda bisa mengunjunginya untuk test drive, mendapatkan penawaran terbaik.', '0800 0900', 'Jalan AR.Hakim No.18 Kel Randugunting \r\nKecamatan Tegal Selatan', 'VeLLfS2ltNWU30nfRu7VE2uHCabkRRudrZh5559xvFwzPX4yIDgjTxJgyvDu', '2020-07-18 06:39:48', '2020-07-18 09:23:20'),
(NULL, 3, 1, 'Astra Motor', 'astra@gmail.com', '$2y$10$qwTsRjIzQHc4x1xXIIzmBuvyyn6Auf1gBx0OA4jcIHUiXWyb72HWq', 'dealer/xyIXgnTNEYbk2Fast1G8B45lDkT6XhywSxqK79O9.webp', NULL, NULL, NULL, NULL, NULL, '2020-07-18 06:40:34', '2020-07-18 06:40:34'),
(NULL, 4, 2, 'Yamaha Agung', 'yamahaagung@gmail.com', '$2y$10$d33S3lmTvwn3ROXCt0fJE.Cr4W8PpxyYGxQGxvPjBvSZyHj0J6Ogm', 'dealer/vYOd7sObHdHX0ZstkwLEKYdPnQey3hLValfqZAUr.jpeg', '1234567890123', 'KJANDJKVNJAKDNVKJADNVJKANDVJANDVJKANJVN', '0900 08000', 'Jalan AR.Hakim No.18 Kel Randugunting \r\nKecamatan Tegal Selatan', 'C7lcI8bUp289MJD5qItxuQTphIIFL2MnU9OhyN0nWgasP6g29WgTpgyKLQaL', '2020-07-18 06:50:50', '2020-08-03 10:50:13'),
(NULL, 5, 2, 'Yamaha Bahana Tegal', 'bahana@gmail.com', '$2y$10$o5amMLOoTLh2eX.Sk2iRp.1LzohBAiyMS.zalU9Kds7c1uyGJzGxi', 'dealer/Jakbvi2jXLZgGsr8XmQwpvq7pLRUb1ECaJwZjTZk.jpeg', '89889789', 'BASHBCHASBCAGYDVSABHJCAHSJBCASCADUGASUGDUIADSUHDHUIH', '8798798798SA', 'ASHJHASHJDBASHDBASHDBASB8ASAS8ABSUDBA77ADGASHB', 'qFWaKZKjEWQvyDwxEBnfpenixOxKquOU8etGyf1yxVGk93ZBpC9eVntRLC6b', '2020-07-18 06:52:04', '2020-07-18 09:28:56'),
(NULL, 6, 2, 'Orion Jaya Motor', 'orion@gmail.com', '$2y$10$ywG9D1x1e6FT92hZu5igIOmAPoOO/llmp1tjfJnj5ol5aTavdb57m', 'dealer/T70AAT5wH8wPfWThVoyKk7Us9PHNaiSWbuC2k0eS.jpeg', NULL, NULL, NULL, NULL, 'MKcDQ2BVxZ87DHtVQDIAxLgtDPdXpVXyvY6In2DH0uzvI2F7wykMYa0VrbwC', '2020-07-18 06:53:05', '2020-07-18 06:53:05'),
(NULL, 7, 1, 'Nusantara Sakti', 'nusantara@gmail.com', '$2y$10$Q2NqFBjeGk4qPlGdIGdUN.VHkaKHmblllZDqOh6hTE7PUGSJHZLhG', 'dealer/n1OF73CFKdzb91WHE9I80y2M6qfDhc1WRmnwWMu6.png', NULL, NULL, NULL, NULL, NULL, '2020-07-18 08:16:36', '2020-07-18 08:16:36'),
(NULL, 8, 3, 'Indosarana', 'indosarana@gmail.com', '$2y$10$oGiXv.NEhzoioAMYlRr9peaxdIbTFCriTsqR/aTXtTCjW8gH91o42', 'dealer/SW5gaHzgGacAAO6c2ylVC5Rf5wKlLVlJcCrd9u2E.jpeg', '2147483647', 'KJBKJBJKBAKJSBFKJASBKJDAUSJC AJCKADIFIUABFSCSABCBASIBAISBDAIB', '0900 08000', 'ASDJKASDJKASJKASKJFBJKASBFKJASBFJKASBFJASBFKJASBFJASBFJAKSBFAJKSBJKB', NULL, '2020-07-18 08:39:44', '2020-07-18 09:31:05'),
(NULL, 9, 1, 'cekkkk', 'cek@gmail.com', '$2y$10$CfAigEhxukGLYBO8fHWeNea8EHUf6orXfSR8YNdPJBPdq9QvtH/zK', 'dealer/mb3yjcyau43JiFdHaAxxPoQ7QkyA5fkMmDJsjBfV.png', NULL, NULL, NULL, NULL, NULL, '2020-08-06 13:18:21', '2020-08-06 13:18:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Matic', '2020-07-18 04:51:33', '2020-07-18 07:45:12', NULL),
(2, 'Bebek', '2020-07-18 04:51:33', '2020-07-18 04:51:33', NULL),
(3, 'Sport', '2020-07-18 04:51:33', '2020-07-18 04:51:33', NULL),
(4, 'CEK', '2020-08-06 11:10:21', '2020-08-06 11:10:29', '2020-08-06 11:10:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mereks`
--

CREATE TABLE `mereks` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mereks`
--

INSERT INTO `mereks` (`deleted_at`, `id`, `name`, `gambar`, `created_at`, `updated_at`) VALUES
(NULL, 1, 'Honda', 'merk/evv19eUi4AY29KzhKvteA0GuO8TWqNkDRTgRaN3n.png', '2020-07-18 04:51:33', '2020-07-18 09:33:35'),
(NULL, 2, 'Yamaha', 'merk/dfUYCOeEBQDc1tHJxwS168nlz3rUrWj29XbJqpMd.jpeg', '2020-07-18 04:51:33', '2020-07-18 09:33:47'),
(NULL, 3, 'Suzuki', 'merk/a18B8IIMhE0GHLU4jVrDfIUf5snrHoYw5ymwiAC3.png', '2020-07-18 04:51:33', '2020-07-18 09:34:05'),
(NULL, 4, 'Kawasaki', 'merk/PglwqrRpCKwE2Zlw76rDPWRWRum8Kvl6n5bEHp8T.png', '2020-07-18 04:51:33', '2020-07-18 09:34:21'),
('2020-08-03 00:25:19', 5, 'Bajaj', 'merk/UykOtRvgi1DEVYP8D6hswhBhxbevTyN4XDy4Reqw.png', '2020-07-21 02:09:26', '2020-08-03 00:25:19'),
('2020-08-06 11:03:34', 6, 'CEK', 'merk/2XqOlvM6YvIp0t38DS6u6Bs2GuDCLEKt3eo8wZUo.jpeg', '2020-08-06 11:03:07', '2020-08-06 11:03:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_06_04_074620_create_mereks_table', 1),
(2, '2014_06_24_182505_create_jenis_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_06_03_051027_create_admins_table', 1),
(6, '2020_06_03_051043_create_dealers_table', 1),
(7, '2020_06_04_074520_create_motors_table', 1),
(8, '2020_06_25_235020_create_promos_table', 1),
(9, '2020_06_29_235903_create_nilais_table', 1),
(10, '2020_06_29_235926_create_kriterias_table', 1),
(11, '2020_06_29_235945_create_alternatifs_table', 1),
(12, '2020_07_05_111435_create_alternatif2_table', 1),
(13, '2020_07_18_112635_create_pengunjungs_table', 1),
(14, '2020_08_06_203623_create_contohs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motors`
--

CREATE TABLE `motors` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_motor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_motor` int(11) NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_tengki` double(8,2) NOT NULL,
  `kapasitas_bagasi` double(8,2) NOT NULL,
  `berat` double(8,2) NOT NULL,
  `kapasitas_mesin` double(8,2) NOT NULL,
  `tenaga_maksimal` double(8,2) NOT NULL,
  `jenis_transmisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `motors`
--

INSERT INTO `motors` (`deleted_at`, `id`, `merek_id`, `jenis_id`, `gambar`, `tipe_motor`, `harga_motor`, `warna`, `ban_depan`, `ban_belakang`, `jenis_ban`, `kapasitas_tengki`, `kapasitas_bagasi`, `berat`, `kapasitas_mesin`, `tenaga_maksimal`, `jenis_transmisi`, `created_at`, `updated_at`) VALUES
(NULL, 1, 2, 1, 'motor/ZnkDwNIKjqN1EmlH9T4wCfjcySJ6JbFjDqoHCkS6.png', 'MIO M3 CW', 16960000, 'MERAH, ABU-ABU, HITAM, PUTIH, KUNING', '70/90 R14', '80/90 R14', 'Radial', 4.20, 10.10, 94.00, 125.00, 9.38, 'Otomatis, CVT', '2020-07-18 07:47:11', '2020-07-18 07:47:11'),
(NULL, 2, 2, 1, 'motor/ccLSwJdczUypRiyNEforjROZOnwisVqfYvXbcvcv.png', 'FREEGO S', 21050000, 'MERAH, BIRU', '100/90 R12', '110/90 R12', 'Radial, Tubeless', 4.20, 25.00, 102.00, 125.00, 9.38, 'Otomatis, CVT', '2020-07-18 07:49:45', '2020-07-18 07:49:45'),
(NULL, 3, 2, 2, 'motor/SAybvOA6GARF8Ppwjvr1AyCID931K7d8bmqB3CC4.jpeg', 'VEGA FORCE CW', 17190000, 'MERAH, HITAM', '70/90 R17', '80/90 R17', 'Radial', 4.00, 9.20, 96.00, 115.00, 8.59, 'Manual, 4-kecepatan', '2020-07-18 07:51:35', '2020-07-18 07:51:35'),
(NULL, 4, 2, 2, 'motor/M6fmepSo6FFRs2VeoHjFR8H3OceWrtlbsUvw6pnj.jpeg', 'JUPITER MX KING', 24565000, 'BIRU, MERAH, ORANGE', '90/80 R17', '120/70 R17', 'Radial, Tubeless', 4.20, 1.00, 115.00, 150.00, 15.15, 'Manual, 5-kecepatan', '2020-07-18 07:53:19', '2020-08-03 16:52:10'),
(NULL, 5, 2, 3, 'motor/d3SIvT3ghkRTYjWLoFOY9pXmP70IBQxrdeImLZni.png', 'VIXION', 27945000, 'BIRU, MERAH, HITAM', '90/80 R17', '120/70 R17', 'Radial, Tubeless', 12.00, 1.00, 132.00, 149.80, 16.36, 'Manual, 5-kecepatan', '2020-07-18 07:55:49', '2020-08-03 16:51:52'),
(NULL, 6, 2, 3, 'motor/SrXuP7LnpRM3AQyeo3Ec7MBW9xL7brkGrU3RrU6r.png', 'R 15', 37360000, 'BIRU, KUNING, HITAM', '100/80 R17', '140/70 R17', 'Radial, Tubeless', 11.00, 1.00, 137.00, 155.10, 19.04, 'Manual, 6-kecepatan', '2020-07-18 08:14:06', '2020-08-03 16:52:21'),
(NULL, 7, 1, 1, 'motor/UQPUDuosPShNtLTFtqOyEOBkLDaD1PtclpRTjrqY.jpeg', 'ALL NEW SCOOPY GRY PLUS', 20360000, 'HITAM. PUTIH. MERAH. COKLAT', '100/90 R12', '110/90 R12', 'Radial. Tubeless', 4.00, 15.40, 99.00, 110.00, 9.10, 'Otomatis, CVT', '2020-07-18 08:23:13', '2020-07-18 08:23:13'),
(NULL, 8, 1, 1, 'motor/cGQR20SAddl9gdFaOxNAYnzcTB8GwjypWn47keGu.jpeg', 'BEAT STREET', 17670000, 'HITAM. SILVER', '80/90 R14', '90/90 R14', 'Radial. Tubeless', 4.00, 12.00, 89.00, 109.50, 9.00, 'Otomatis, CVT', '2020-07-18 08:26:13', '2020-07-18 20:59:17'),
(NULL, 9, 1, 2, 'motor/ZP13EOjzUZtqQltFDiRyyQJVCYytAhv69gjZTKU0.png', 'NEW REVO FIT MMC', 15140000, 'MERAH. HITAM. HIJAU. BIRU', '70/90 R17', '80/90 R17', 'Radial. Tubeless', 4.00, 7.00, 98.00, 109.17, 8.91, 'Manual, 4-kecepatan', '2020-07-18 08:28:17', '2020-07-18 08:28:17'),
(NULL, 10, 1, 2, 'motor/6w4xUhnr09LrfUmHAVEhuTYo8kHZXmcBjmdsFC2b.png', 'SUPRA X 125 SW', 18690000, 'MERAH. HITAM', '70/90 R17', '80/90 R17', 'Radial. Tubeless', 4.00, 7.00, 103.00, 124.89, 10.10, 'Manual, 4-kecepatan', '2020-07-18 08:32:13', '2020-07-18 08:32:13'),
(NULL, 11, 1, 3, 'motor/ClploNgYy40cuef2tfkrknqiIyX4VqRybyOeJlvr.webp', 'NEW CB150 VERZA CW', 21150000, 'HITAM. MERAH', '80/100 R17', '100/90 R17', 'Radial. Tubeless', 12.20, 1.00, 129.00, 150.00, 13.04, 'Manual, 5-kecepatan', '2020-07-18 08:34:35', '2020-08-03 16:52:59'),
(NULL, 12, 1, 3, 'motor/h27ZFaFDz3cssaqCcJubZ1ApaQYY69Ou17MuPPWq.webp', 'ALL NEW CBR 150R EXO', 35470000, 'MERAH. HITAM. ORANGE', '100/80 R17', '130/70 R17', 'Radial. Tubeless', 12.00, 1.00, 135.00, 150.00, 17.10, 'Manual, 6-kecepatan', '2020-07-18 08:36:26', '2020-08-03 16:53:09'),
(NULL, 13, 3, 1, 'motor/5CXZ21z27g7LEk5DqpF99Nsuv89dLzwPa83i7Znj.jpeg', 'NEX II ELEGANT/STD', 15900000, 'BIRU, MERAH, HITAM', '80/90 R14', '90/90 R14', 'Radial, Tubeless', 3.60, 4.00, 93.00, 113.00, 9.20, 'Otomatis, CVT', '2020-07-18 08:42:14', '2020-07-19 02:32:21'),
(NULL, 14, 3, 1, 'motor/reLJ1tWkq1efbaQTf6Hqvf7JzVfI7KdH3PoD5XOh.jpeg', 'ADDRESS', 16500000, 'PUTIH, HITAM, MERAH, BIRU', '80/90 R14', '90/90 R14', 'Radial, Tubeless', 5.20, 20.60, 95.00, 133.00, 9.20, 'Otomatis, CVT', '2020-07-18 08:44:35', '2020-07-18 08:58:56'),
(NULL, 15, 3, 2, 'motor/Tars2BpXk9QL5UfVZHgxkXTfEwLIrIO5Hb2gvfLM.jpeg', 'SMASH R FI', 15600000, 'MERAH, BIRU, HITAM', '70/90 R17', '80/90 R17', 'Radial', 3.70, 8.00, 93.00, 113.00, 9.25, 'Manual, 4-kecepatan', '2020-07-18 09:00:40', '2020-07-18 09:00:40'),
(NULL, 16, 3, 2, 'motor/ZL7ZAOggldd9v1ywDXJnA3iH9adRkld9HIafkBPd.jpeg', 'SMASH SR FI', 16400000, 'MERAH, BIRU, HITAM', '70/90 R17', '80/90 R17', 'Radial', 3.70, 8.00, 94.00, 113.00, 9.25, 'Manual, 4-kecepatan', '2020-07-18 09:02:17', '2020-07-18 09:02:17'),
(NULL, 17, 3, 3, 'motor/X0VWdo2zvG7xUHiuAGhPDJCPhV88HqnBbFXbfdTh.webp', 'GSX-F BANDIT STD', 27249979, 'PUTIH, MERAH, HITAM, ABU-ABU', '90/80 R17', '130/70 R17', 'Radial, Tubeless', 11.00, 1.00, 135.00, 147.30, 18.90, 'Manual, 6-kecepatan', '2020-07-18 09:04:06', '2020-08-03 16:54:01'),
(NULL, 18, 3, 3, 'motor/AVQwqF4CILO5M0abD1jxdLHENFSNe6NDVmSzlTad.webp', 'GSX-R 150 KEYLESS ABS', 34775000, 'KUNING, HITAM, PUTIH, BIRU', '90/80 R17', '130/70 R17', 'Radial, Tubeless', 11.00, 1.00, 131.00, 147.30, 20.90, 'Manual, 6-kecepatan', '2020-07-18 09:05:40', '2020-08-03 16:54:10'),
(NULL, 19, 3, 1, 'motor/KfKcBxst4F52g3tzv0CUy15dfEvoVymE1oot5ksP.jpeg', 'nexxxx', 11000000, 'MERAH, HITAM', '90/80 R14', '90/90 R14', 'Radial, Tubeless', 4.00, 11.00, 98.00, 113.00, 8.90, 'Otomatis, CVT', '2020-07-20 01:28:13', '2020-08-03 16:54:35'),
(NULL, 20, 2, 3, 'motor/RnP8RzakSEdJhzw5ufXKOr599qO6bMiiINQ7hWdw.png', 'COntohh', 25000000, 'MERAH, HITAM', '80/100 R17', '80/90 R14', 'Radial, Tubeless', 11.00, 12.00, 0.00, 150.00, 8.90, 'Manual, 6-kecepatan', '2020-07-20 01:33:14', '2020-08-03 16:40:27'),
(NULL, 21, 1, 1, 'motor/sJ74KNa2TEGkMehTBCTz5x88QXr6EN37tGn5wDCQ.png', 'BEAT STREET', 14000000, 'HITAM, SILVER', '80/90 R12', '110/90 R12', 'Radial, Tubeless', 3.00, 3.00, 3.00, 3.00, 3.00, 'Otomatis, CVT', '2020-08-06 13:07:05', '2020-08-06 13:07:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjungs`
--

CREATE TABLE `pengunjungs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunjungan_id` bigint(20) NOT NULL,
  `motor_id` bigint(20) NOT NULL,
  `vektor_v` double NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengunjungs`
--

INSERT INTO `pengunjungs` (`id`, `name`, `kunjungan_id`, `motor_id`, `vektor_v`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 'afi', 270597947, 1, 0.16063996052819446, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(2, 'afi', 270597947, 2, 0.18931932376789315, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(3, 'afi', 270597947, 7, 0.1652273275486181, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(4, 'afi', 270597947, 8, 0.15831483256373402, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(5, 'afi', 270597947, 13, 0.12633227643321948, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(6, 'afi', 270597947, 14, 0.20016627915834076, '0.20016627915834076', '2020-08-02 12:58:08', '2020-08-02 12:58:08'),
(7, 'cek', 798415252, 1, 0.1556356805284508, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(8, 'cek', 798415252, 2, 0.20129318489350878, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(9, 'cek', 798415252, 7, 0.17145244150431418, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(10, 'cek', 798415252, 8, 0.1560252544450386, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(11, 'cek', 798415252, 13, 0.11670882503153528, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(12, 'cek', 798415252, 14, 0.19888461359715232, '0.20129318489350878', '2020-08-02 12:59:26', '2020-08-02 12:59:26'),
(13, 'cek', 809033967, 1, 0.16254957908913775, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(14, 'cek', 809033967, 2, 0.18482283431903845, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(15, 'cek', 809033967, 7, 0.16452334470718236, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(16, 'cek', 809033967, 8, 0.1586233103668501, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(17, 'cek', 809033967, 13, 0.13302530257510056, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(18, 'cek', 809033967, 14, 0.19645562894269078, '0.19645562894269078', '2020-08-02 13:07:16', '2020-08-02 13:07:16'),
(19, 'test', 141501532, 1, 0.1565579923499601, '0.20406067386569793', '2020-08-03 16:29:12', '2020-08-03 16:29:12'),
(20, 'test', 141501532, 2, 0.19959408974191092, '0.20406067386569793', '2020-08-03 16:29:12', '2020-08-03 16:29:12'),
(21, 'test', 141501532, 7, 0.16787635979512855, '0.20406067386569793', '2020-08-03 16:29:12', '2020-08-03 16:29:12'),
(22, 'test', 141501532, 8, 0.1568466090405474, '0.20406067386569793', '2020-08-03 16:29:12', '2020-08-03 16:29:12'),
(23, 'test', 141501532, 13, 0.11506427520675502, '0.20406067386569793', '2020-08-03 16:29:13', '2020-08-03 16:29:13'),
(24, 'test', 141501532, 14, 0.20406067386569793, '0.20406067386569793', '2020-08-03 16:29:13', '2020-08-03 16:29:13'),
(25, 'afi', 312549767, 1, 0.16173553533686286, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(26, 'afi', 312549767, 2, 0.18470377227882942, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(27, 'afi', 312549767, 7, 0.1645703594269834, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(28, 'afi', 312549767, 8, 0.15984505145324107, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(29, 'afi', 312549767, 13, 0.13123820903114433, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(30, 'afi', 312549767, 14, 0.19790707247293893, '0.19790707247293893', '2020-08-03 16:30:18', '2020-08-03 16:30:18'),
(31, 'halo', 200979274, 1, 0.1614100445887628, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(32, 'halo', 200979274, 2, 0.18835775158068274, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(33, 'halo', 200979274, 7, 0.16514300562968887, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(34, 'halo', 200979274, 8, 0.15807230407438372, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(35, 'halo', 200979274, 13, 0.12882476914470842, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(36, 'halo', 200979274, 14, 0.19819212498177355, '0.19819212498177355', '2020-08-03 16:31:41', '2020-08-03 16:31:41'),
(37, 'hay', 802030297, 1, 0.16425416890401182, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(38, 'hay', 802030297, 2, 0.18275048091246804, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(39, 'hay', 802030297, 7, 0.16403914888919338, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(40, 'hay', 802030297, 8, 0.1574134319200472, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(41, 'hay', 802030297, 13, 0.1380007678007912, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(42, 'hay', 802030297, 14, 0.19354200157348841, '0.19354200157348841', '2020-08-03 16:32:52', '2020-08-03 16:32:52'),
(43, 'harry', 526049184, 5, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(44, 'harry', 526049184, 6, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(45, 'harry', 526049184, 11, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(46, 'harry', 526049184, 12, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(47, 'harry', 526049184, 17, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(48, 'harry', 526049184, 18, 0, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(49, 'harry', 526049184, 20, 1, '1', '2020-08-03 16:34:18', '2020-08-03 16:34:18'),
(50, 'yaul', 856039663, 3, 0.16717071285864524, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(51, 'yaul', 856039663, 4, 0, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(52, 'yaul', 856039663, 9, 0.16095631444560032, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(53, 'yaul', 856039663, 10, 0.15974327017592124, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(54, 'yaul', 856039663, 15, 0.1615686513699471, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(55, 'yaul', 856039663, 16, 0.16017930576735778, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(56, 'yaul', 856039663, 19, 0.19038174538252844, '0.19038174538252844', '2020-08-03 16:35:09', '2020-08-03 16:35:09'),
(57, 'yaaa', 443495324, 5, 0.1467152732106216, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(58, 'yaaa', 443495324, 6, 0.13517303182525905, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(59, 'yaaa', 443495324, 11, 0.15813766125820494, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(60, 'yaaa', 443495324, 12, 0.13821313065891963, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(61, 'yaaa', 443495324, 17, 0.1452790578951668, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(62, 'yaaa', 443495324, 18, 0.13463488848606187, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(63, 'yaaa', 443495324, 20, 0.14184695666576597, '0.15813766125820494', '2020-08-03 16:37:28', '2020-08-03 16:37:28'),
(64, 'aaa', 266644753, 5, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(65, 'aaa', 266644753, 6, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(66, 'aaa', 266644753, 11, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(67, 'aaa', 266644753, 12, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(68, 'aaa', 266644753, 17, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(69, 'aaa', 266644753, 18, 0, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(70, 'aaa', 266644753, 20, 1, '1', '2020-08-03 16:37:52', '2020-08-03 16:37:52'),
(71, 'aaa', 687097179, 5, 0.1462490813850671, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(72, 'aaa', 687097179, 6, 0.13653296054199968, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(73, 'aaa', 687097179, 11, 0.15644892689877252, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(74, 'aaa', 687097179, 12, 0.13861968715071962, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(75, 'aaa', 687097179, 17, 0.1448432140756269, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(76, 'aaa', 687097179, 18, 0.1352562347365134, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(77, 'aaa', 687097179, 20, 0.1420498952113008, '0.15644892689877252', '2020-08-03 16:39:06', '2020-08-03 16:39:06'),
(78, 'faf', 841246791, 5, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(79, 'faf', 841246791, 6, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(80, 'faf', 841246791, 11, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(81, 'faf', 841246791, 12, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(82, 'faf', 841246791, 17, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(83, 'faf', 841246791, 18, 0, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(84, 'faf', 841246791, 20, 1, '1', '2020-08-03 16:39:32', '2020-08-03 16:39:32'),
(85, 'cecek', 131169379, 1, 0.08391798022840981, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(86, 'cecek', 131169379, 2, 0.09561970760187795, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(87, 'cecek', 131169379, 3, 0.08043005881245867, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(88, 'cecek', 131169379, 4, 0, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(89, 'cecek', 131169379, 5, 0, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(90, 'cecek', 131169379, 6, 0, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(91, 'cecek', 131169379, 7, 0.08478360925464838, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(92, 'cecek', 131169379, 8, 0.08200352112912715, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(93, 'cecek', 131169379, 9, 0.07832358777074748, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(94, 'cecek', 131169379, 10, 0.07720630979693355, '0.10225032340076211', '2020-08-03 16:41:11', '2020-08-03 16:41:11'),
(95, 'cecek', 131169379, 11, 0, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(96, 'cecek', 131169379, 12, 0, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(97, 'cecek', 131169379, 13, 0.06808597638306037, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(98, 'cecek', 131169379, 14, 0.10225032340076211, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(99, 'cecek', 131169379, 15, 0.07805035537688783, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(100, 'cecek', 131169379, 16, 0.0773184643756363, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(101, 'cecek', 131169379, 17, 0, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(102, 'cecek', 131169379, 18, 0, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(103, 'cecek', 131169379, 19, 0.09201010586945044, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(104, 'cecek', 131169379, 20, 0, '0.10225032340076211', '2020-08-03 16:41:12', '2020-08-03 16:41:12'),
(105, 'dasd', 806061453, 5, 0.17110258595170574, '0.18385722250460484', '2020-08-03 16:44:10', '2020-08-03 16:44:10'),
(106, 'dasd', 806061453, 6, 0.157599682699941, '0.18385722250460484', '2020-08-03 16:44:10', '2020-08-03 16:44:10'),
(107, 'dasd', 806061453, 11, 0.18385722250460484, '0.18385722250460484', '2020-08-03 16:44:10', '2020-08-03 16:44:10'),
(108, 'dasd', 806061453, 12, 0.1616944369329235, '0.18385722250460484', '2020-08-03 16:44:11', '2020-08-03 16:44:11'),
(109, 'dasd', 806061453, 17, 0.1687408561692569, '0.18385722250460484', '2020-08-03 16:44:11', '2020-08-03 16:44:11'),
(110, 'dasd', 806061453, 18, 0.15700521574156803, '0.18385722250460484', '2020-08-03 16:44:11', '2020-08-03 16:44:11'),
(111, 'dasd', 806061453, 20, 0, '0.18385722250460484', '2020-08-03 16:44:11', '2020-08-03 16:44:11'),
(112, 'dasd', 415661962, 5, 0.17080263951531555, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(113, 'dasd', 415661962, 6, 0.15913199324885774, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(114, 'dasd', 415661962, 11, 0.18168470527851124, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(115, 'dasd', 415661962, 12, 0.1628589777642694, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(116, 'dasd', 415661962, 17, 0.16771309192922115, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(117, 'dasd', 415661962, 18, 0.15780859226382485, '0.18168470527851124', '2020-08-03 16:45:14', '2020-08-03 16:45:14'),
(118, 'dasd', 415661962, 20, 0, '0.18168470527851124', '2020-08-03 16:45:15', '2020-08-03 16:45:15'),
(119, 'cacaca', 500268996, 5, 0.17052537635402254, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(120, 'cacaca', 500268996, 6, 0.1585877981980704, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(121, 'cacaca', 500268996, 11, 0.18143829878399909, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(122, 'cacaca', 500268996, 12, 0.16238670819102036, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(123, 'cacaca', 500268996, 17, 0.16861960099012005, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(124, 'cacaca', 500268996, 18, 0.1584422174827676, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(125, 'cacaca', 500268996, 20, 0, '0.18143829878399909', '2020-08-03 16:55:08', '2020-08-03 16:55:08'),
(126, 'asasas', 596797393, 5, 0.16843487637215987, '0.17063665041635506', '2020-08-03 16:55:30', '2020-08-03 16:55:30'),
(127, 'asasas', 596797393, 6, 0.16520785644313865, '0.17063665041635506', '2020-08-03 16:55:30', '2020-08-03 16:55:30'),
(128, 'asasas', 596797393, 11, 0.17063665041635506, '0.17063665041635506', '2020-08-03 16:55:30', '2020-08-03 16:55:30'),
(129, 'asasas', 596797393, 12, 0.16729635988332583, '0.17063665041635506', '2020-08-03 16:55:31', '2020-08-03 16:55:31'),
(130, 'asasas', 596797393, 17, 0.16601033110704122, '0.17063665041635506', '2020-08-03 16:55:31', '2020-08-03 16:55:31'),
(131, 'asasas', 596797393, 18, 0.1624139257779795, '0.17063665041635506', '2020-08-03 16:55:31', '2020-08-03 16:55:31'),
(132, 'asasas', 596797393, 20, 0, '0.17063665041635506', '2020-08-03 16:55:31', '2020-08-03 16:55:31'),
(133, 'asa', 971970625, 5, 0.1694505442892022, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(134, 'asa', 971970625, 6, 0.16325224559863627, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(135, 'asa', 971970625, 11, 0.1742812111237442, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(136, 'asa', 971970625, 12, 0.16621644031282687, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(137, 'asa', 971970625, 17, 0.16543417557771067, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(138, 'asa', 971970625, 18, 0.16136538309787993, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(139, 'asa', 971970625, 20, 0, '0.1742812111237442', '2020-08-03 16:56:43', '2020-08-03 16:56:43'),
(140, 'asas', 287640294, 1, 0.1330169169422195, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(141, 'asas', 287640294, 2, 0.17930303796532765, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(142, 'asas', 287640294, 7, 0.1457611198778022, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(143, 'asas', 287640294, 8, 0.13333299781132785, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(144, 'asas', 287640294, 13, 0.09246795109646233, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(145, 'asas', 287640294, 14, 0.17956966188517876, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(146, 'asas', 287640294, 19, 0.13654831442168172, '0.17956966188517876', '2020-08-03 16:58:53', '2020-08-03 16:58:53'),
(147, 'asas', 515912756, 5, 0.16842306532488902, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(148, 'asas', 515912756, 6, 0.1649706046431384, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(149, 'asas', 515912756, 11, 0.1719212721473167, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(150, 'asas', 515912756, 12, 0.16609502788548913, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(151, 'asas', 515912756, 17, 0.16658184262724157, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(152, 'asas', 515912756, 18, 0.16200818737192524, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(153, 'asas', 515912756, 20, 0, '0.1719212721473167', '2020-08-03 16:59:14', '2020-08-03 16:59:14'),
(154, 'tes', 824708026, 1, 0.13800719817834484, '0.16679397798918733', '2020-08-06 05:40:25', '2020-08-06 05:40:25'),
(155, 'tes', 824708026, 2, 0.15691754888989073, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(156, 'tes', 824708026, 7, 0.13968295682585088, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(157, 'tes', 824708026, 8, 0.13467373309837039, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(158, 'tes', 824708026, 13, 0.11294061416885565, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(159, 'tes', 824708026, 14, 0.16679397798918733, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(160, 'tes', 824708026, 19, 0.15098397084950016, '0.16679397798918733', '2020-08-06 05:40:26', '2020-08-06 05:40:26'),
(161, 'cek', 933318368, 1, 0.13204276638705187, '0.16623215315924486', '2020-08-06 14:35:07', '2020-08-06 14:35:07'),
(162, 'cek', 933318368, 2, 0.15745672974787836, '0.16623215315924486', '2020-08-06 14:35:07', '2020-08-06 14:35:07'),
(163, 'cek', 933318368, 7, 0.13615849406604674, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08'),
(164, 'cek', 933318368, 8, 0.13059272184533063, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08'),
(165, 'cek', 933318368, 13, 0.1022933503212836, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08'),
(166, 'cek', 933318368, 14, 0.16623215315924486, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08'),
(167, 'cek', 933318368, 19, 0.14605332581617322, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08'),
(168, 'cek', 933318368, 21, 0.029170458656990854, '0.16623215315924486', '2020-08-06 14:35:08', '2020-08-06 14:35:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promos`
--

CREATE TABLE `promos` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `dealer_id` bigint(20) UNSIGNED NOT NULL,
  `motor_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_promo` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promos`
--

INSERT INTO `promos` (`deleted_at`, `id`, `dealer_id`, `motor_id`, `gambar`, `judul`, `ket_promo`, `created_at`, `updated_at`) VALUES
(NULL, 1, 1, 8, 'promo/vlk1TleLMINy0Ttx9er4uLl3bhWke9wMYHDOxs9P.jpeg', 'Hujan Promo Awal Tahun 2020 Naga Mas Tegal', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya !\r\nKapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan.\r\nUntuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut \r\nAnisa 085615236772\r\nDealer Naga Mas Motor Tegal\r\njl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:15:52', '2020-07-18 09:15:52'),
(NULL, 2, 1, 7, 'promo/0NWGEVGc9KGn2uiybvFr480741URhCqfhbqahkvE.jpeg', 'HASDASDLSDS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:07', '2020-07-18 09:20:07'),
(NULL, 3, 1, 8, 'promo/0NWGEVGc9KGn2uiybvFr480741URhCqfhbqahkvE.jpeg', 'HASDASDLSDS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:07', '2020-07-18 09:20:07'),
(NULL, 4, 1, 9, 'promo/0NWGEVGc9KGn2uiybvFr480741URhCqfhbqahkvE.jpeg', 'HASDASDLSDS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:07', '2020-07-18 09:20:07'),
(NULL, 5, 1, 10, 'promo/0NWGEVGc9KGn2uiybvFr480741URhCqfhbqahkvE.jpeg', 'HASDASDLSDS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:07', '2020-07-18 09:20:07'),
(NULL, 6, 1, 7, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 7, 1, 8, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 8, 1, 9, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 9, 1, 10, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 10, 1, 11, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 11, 1, 12, 'promo/ZIYwxezlC1UYPBJXGyx5i4TINsOFGzcdZ908lFYL.jpeg', 'ASDASDSADASDAS', 'Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan. Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut Anisa 085615236772 Dealer Naga Mas Motor Tegal jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal', '2020-07-18 09:20:56', '2020-07-18 09:20:56'),
(NULL, 12, 2, 7, 'promo/THftkujA64MXjaVqju92Yl6NlKW26vwOgzPiaV0C.jpeg', 'AFSFASFASFAA', 'AFAFAFAFDCNLANFLKANLFALSNFLKANSFLKNASLKFNALKSNFLKANSLKFNASF', '2020-07-18 09:24:12', '2020-07-18 09:24:12'),
(NULL, 13, 2, 8, 'promo/OZ6M1rnbFezVqbtFPPOmFfrQKWvg2FzWQogGlOom.jpeg', 'promooo\r\npromo', 'NLANLKFNALKNFLASNF', '2020-07-18 09:24:47', '2020-08-02 13:59:58'),
(NULL, 14, 2, 7, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'Promo\r\nprpomo\r\nprom', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:00:20'),
(NULL, 15, 2, 8, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'promo1', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:00:38'),
(NULL, 16, 2, 9, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'promomom', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:01:31'),
(NULL, 17, 2, 10, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'promomoo', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:02:25'),
(NULL, 18, 2, 11, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'promomomo', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:02:40'),
(NULL, 19, 2, 12, 'promo/KcvJ4nGZFmosoRIsWJLCz7WhpXZn6V95mbOYDvRR.jpeg', 'promom', 'KJBFKJBAJKBSFJKABSJKFBAJKS', '2020-07-18 09:25:07', '2020-08-02 14:02:51'),
(NULL, 20, 4, 1, 'promo/xoGpshys4B6TDNfIu0gamwprflyud7JZE4Gwh0NC.jpeg', 'halo guyssssasdsadasd', 'BABFJABSJFASJFBAKSJFBJKASBFKJAEUFBIEUFBUJABJCFBACJKANJKNASJKN', '2020-07-18 09:26:43', '2020-07-18 09:26:43'),
(NULL, 21, 4, 1, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 22, 4, 2, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 23, 4, 3, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 24, 4, 4, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 25, 4, 5, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 26, 4, 6, 'promo/dMh3A2ut9eARqdd1XZldqP1EYRgcGKA4gGyfI5pu.jpeg', 'SASASNJNASNFASNJNJNNJNJ', 'KSKASBKASBKJASKJDKJASKDNJAKSNDKJASNDJKASNDJKASDASD', '2020-07-18 09:27:15', '2020-07-18 09:27:15'),
(NULL, 27, 4, 5, 'promo/xd9KlbTaZA6gO5Dw0LbNozwxJPKLFUHZvtf6zcLI.jpeg', 'ASANSFNs m jnajnljnj', 'naksjnfjasnflnaslNJNLNLNAS\r\nASJFNLAJSFNASF\r\nASFJASJFASJFASFASF', '2020-07-18 09:27:58', '2020-07-18 09:27:58'),
(NULL, 28, 5, 4, 'promo/Gw5PzNV3oczrNS1zIr48KVcpgutZRyoEaEdkSnFH.png', 'MDNSANDNANJNJKNJKNJKN', 'KJNJKANJKNJKASNDJASJKDAJSKN', '2020-07-18 09:29:30', '2020-07-18 09:29:30'),
(NULL, 29, 5, 1, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'Promo Motor Yamaha', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:54:52'),
(NULL, 30, 5, 2, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'Promooo', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:56:24'),
(NULL, 31, 5, 3, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'Promomorom', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:56:37'),
(NULL, 32, 5, 4, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'promoormooooo', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:56:57'),
(NULL, 33, 5, 5, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'promomomo', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:57:09'),
(NULL, 34, 5, 6, 'promo/YJfCpYfyLv9gozqHnMbliCXjxuF7HAjtRYf1yWfm.jpeg', 'promomomoo', 'SJABDABSHDBASHDBHJSABDHJASBDHABDHJABSDHJBASDJHABSDHJASDAHJBDJHABSHDBHASJDBHJASBDHJABABSDJHABHJASB', '2020-07-18 09:30:01', '2020-08-02 13:57:21'),
(NULL, 35, 8, 15, 'promo/s0JotGdWSKn4Ytu1pSyj4SxqCphFEJGIJVYvx8Kp.jpeg', 'ASSADASD ASM ASM SMA FMSA M,AS M,AS F ASM FM', 'M, AM M, ASM M,SAFKJASFABSJNCJNAEB8GFYBJ', '2020-07-18 09:31:29', '2020-07-18 09:31:29'),
(NULL, 36, 8, 13, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 37, 8, 14, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 38, 8, 15, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 39, 8, 16, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 40, 8, 17, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 41, 8, 18, 'promo/65RHyWn1c319qUd2v6brFI9cyrfGPNsHzuBNC8iA.jpeg', 'ASDASDBASJBDJKASBDJADJASBDJSABDJKASBDJKASBDKJASBDKJBDJKASBDJKBSAJKDBJAKSBDSKAJBDJKASBDJKASBDKJABSKJDBAKJSDBJKASBDKJASBDJKBASJKDBJKASBDJKASBDKJASBDKJABSJKDBASJKDBAJKSBDAJKBDKJASBJKABSJDBAJSKBDAKJB', 'BAJSBJKASBDKJBASJDKBASJDBJKASBDKJABSJDBAJSBDJKASJKDBKJASBDJKABSDJKABSKJDBASKJDBAJKDBJABDJKABDJKASBDJKASBJK', '2020-07-18 09:32:02', '2020-07-18 09:32:02'),
(NULL, 42, 1, 9, 'promo/mCsVvz25twoU38VZ37AEQva2knda3z8xUcJagQgF.png', 'TESTSTETET', 'SADSADSADASDASDASDSADASDASD', '2020-08-06 13:59:04', '2020-08-06 13:59:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`deleted_at`, `id`, `merek_id`, `name`, `email`, `password`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 1, 1, 'Honda', 'honda@gmail.com', '$2y$10$XMwEG./ZSt7EL//H7UZrg..B0qzBOVdVuFPqrnP6nNIdlibIlK3yi', 'pusat/KriSsWpoCdccNigV8eVR5o5NCqe8asHrPJar5iL6.png', 'UgyKPqxeXQKScCoSJOtFF1364wYDdSx7eiaPajJZ1rGd4KLWaDepCa3IvfBc', '2020-07-18 06:33:16', '2020-07-18 06:33:16'),
(NULL, 2, 2, 'Yamaha', 'yamaha@gmail.com', '$2y$10$eJCIEUj.RmDBN.YBxv6KSeEx4E4YvDkFH/AtDJC2tfnYtMB7T6i8e', 'pusat/U4znd7u6xeLK9Z2wNcCq5fx31eQB3wKVrPCkGh0C.png', 'IBXZNeuaroTzCWn2s2pFeApXEHCDzJeYji9aXoAndESGqqlFYDy0GSFuy8Yh', '2020-07-18 06:34:53', '2020-07-18 06:34:53'),
(NULL, 3, 3, 'Suzuki', 'suzuki@gmail.com', '$2y$10$0raRKf95M8IUWYUs0LFL4OFje2lG9JjLX3qWojQCpbt1YqiW9WMTm', 'pusat/iEiNo2xSGp1sAVdiYi5RydwjAfG9uh9yrDCkYHVr.png', 'FOzFDIDnvT4iOyH09r264yjgrEwopaoQMdAMb5JdSmpAI4nBLbDHRtemYrHf', '2020-07-18 06:35:33', '2020-07-18 06:35:33'),
(NULL, 4, 4, 'Kawasaki', 'kawasaki@gmail.com', '$2y$10$9usz.56LQuhYJbwRlPz8cOa7hruM7sAHl17jn8H43vnJO1H5nkIvu', 'pusat/WnhCEWHguuYZ5pNr0PIaQVV43MPJf94CPZWIRcGH.png', NULL, '2020-07-18 06:54:37', '2020-07-18 06:54:37'),
(NULL, 11, 2, 'cekkk', 'cek@gmail.com', '$2y$10$iw5.u9uDHOKltFQcAHClPur7Bzg8moe2n1T5Qvv6ABuNFOJew78Uu', 'pusat/jzPDQUPRr321CpjsYkn8w8jgcqSK6zcwtVttefoj.png', NULL, '2020-08-06 11:37:24', '2020-08-06 11:37:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `alternatif2`
--
ALTER TABLE `alternatif2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatifs_dealer_id_foreign` (`dealer_id`),
  ADD KEY `alternatifs_motor_id_foreign` (`motor_id`),
  ADD KEY `alternatifs_kriteria_id_foreign` (`kriteria_id`);

--
-- Indexes for table `contohs`
--
ALTER TABLE `contohs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dealers_email_unique` (`email`),
  ADD KEY `dealers_user_id_foreign` (`user_id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mereks`
--
ALTER TABLE `mereks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motors_jenis_id_foreign` (`jenis_id`),
  ADD KEY `motors_merek_id_foreign` (`merek_id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengunjungs`
--
ALTER TABLE `pengunjungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promos_dealer_id_foreign` (`dealer_id`),
  ADD KEY `promos_motor_id_foreign` (`motor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_merek_id_foreign` (`merek_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alternatif2`
--
ALTER TABLE `alternatif2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contohs`
--
ALTER TABLE `contohs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mereks`
--
ALTER TABLE `mereks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengunjungs`
--
ALTER TABLE `pengunjungs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD CONSTRAINT `alternatifs_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `dealers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatifs_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatifs_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dealers`
--
ALTER TABLE `dealers`
  ADD CONSTRAINT `dealers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `motors`
--
ALTER TABLE `motors`
  ADD CONSTRAINT `motors_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `motors_merek_id_foreign` FOREIGN KEY (`merek_id`) REFERENCES `mereks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `promos`
--
ALTER TABLE `promos`
  ADD CONSTRAINT `promos_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `dealers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promos_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_merek_id_foreign` FOREIGN KEY (`merek_id`) REFERENCES `mereks` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
