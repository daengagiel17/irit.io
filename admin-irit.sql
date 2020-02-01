-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Feb 2020 pada 05.14
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin-irit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiturs`
--

CREATE TABLE `fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portofolio_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fiturs`
--

INSERT INTO `fiturs` (`id`, `portofolio_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 12, 'Registrasi Peserta', '2019-07-22 00:44:17', '2019-07-22 00:44:17'),
(2, 12, 'Konfirmasi Pendaftaran', '2019-07-22 00:44:32', '2019-07-22 00:44:32'),
(3, 12, 'Cetak Kartu Pendaftaran', '2019-07-22 00:44:43', '2019-07-22 00:44:43'),
(4, 14, 'Pengelolaan katalog perumahan', '2019-07-22 05:13:52', '2019-07-22 05:13:52'),
(5, 14, 'Simulasi kalkulator KPR', '2019-07-22 05:14:02', '2019-07-22 05:14:02'),
(7, 9, 'Pengelolaan katalog perumahan', '2019-07-22 05:22:18', '2019-07-22 05:22:18'),
(8, 9, 'Pengelolaan fasilitas perumahan', '2019-07-22 05:22:36', '2019-07-22 05:22:36'),
(9, 9, 'Pengelolaan spesifikasi bangunan', '2019-07-22 05:22:47', '2019-07-22 05:22:47'),
(10, 15, 'Pengelolaan paket tour', '2019-07-22 05:36:01', '2019-07-22 05:36:01'),
(11, 15, 'Pengelolaan travel', '2019-07-22 05:36:15', '2019-07-22 05:36:15'),
(12, 15, 'Pengelolaan rent car', '2019-07-22 05:36:25', '2019-07-22 05:36:25'),
(13, 17, 'Pengelolaan konten perusahaan', '2019-07-22 05:52:26', '2019-07-22 05:52:26'),
(14, 17, 'Pengelolaan portofolio perusahaan', '2019-07-22 05:52:41', '2019-07-22 05:52:41'),
(15, 18, 'Berita Muhammadiyah dan IMM', '2019-07-23 02:56:26', '2019-07-23 02:56:26'),
(16, 18, 'Pedoman Organisasi', '2019-07-23 02:56:45', '2019-07-23 02:56:45'),
(17, 18, 'Admin melakukan pengelolaan berita', '2019-07-23 02:57:12', '2019-07-23 02:57:12'),
(18, 18, 'Admin melakukan pengelolaan pedoman organisasi', '2019-07-23 02:57:36', '2019-07-23 02:57:36'),
(19, 8, 'Pengelolaan jenis trip', '2019-07-24 19:35:23', '2019-07-24 19:35:23'),
(20, 8, 'Pengelolaan paket trip', '2019-07-24 19:35:37', '2019-07-24 19:35:37'),
(21, 8, 'Pengelolaan promo menurut tanggal', '2019-07-24 19:35:52', '2019-07-24 19:35:52'),
(22, 8, 'Pengelolaan driver', '2019-07-24 19:36:02', '2019-07-24 19:36:02'),
(23, 8, 'Pengelolaan penumpang dan driver', '2019-07-24 19:36:12', '2019-07-24 19:36:12'),
(24, 8, 'Pengelolaan transaksi pembayaran', '2019-07-24 19:36:25', '2019-07-24 19:36:25'),
(25, 8, 'Validasi pembayaran', '2019-07-24 19:36:38', '2019-07-24 19:36:38'),
(26, 11, 'Pengelolaan konten Muktamar', '2019-07-24 19:43:06', '2019-07-24 19:43:06'),
(27, 11, 'Pengelolaan berita Muktamar', '2019-07-24 19:43:17', '2019-07-24 19:43:17'),
(28, 11, 'Pengelolaan unduhan dokumen', '2019-07-24 19:43:33', '2019-07-24 19:43:33'),
(29, 13, 'Pengelolaan konten organisasi', '2019-07-24 19:54:34', '2019-07-24 19:54:34'),
(30, 13, 'Pengelolaan berita organisasi', '2019-07-24 19:54:46', '2019-07-24 19:54:46'),
(31, 13, 'Pengelolaan pengaduan kasus', '2019-07-24 19:54:58', '2019-07-24 19:54:58'),
(32, 13, 'Integrasi facebook', '2019-07-24 19:55:07', '2019-07-24 19:55:07'),
(33, 13, 'Share berita media sosial', '2019-07-24 19:55:25', '2019-07-24 19:55:25'),
(34, 16, 'Pengelolaan kader', '2019-07-24 20:03:29', '2019-07-24 20:03:29'),
(35, 16, 'Pengelolaan agenda', '2019-07-24 20:03:37', '2019-07-24 20:03:37'),
(36, 16, 'Pengelolaan informasi', '2019-07-24 20:03:51', '2019-07-24 20:03:51'),
(37, 16, 'Pengelolaan unduhan materi', '2019-07-24 20:05:08', '2019-07-24 20:05:08'),
(38, 16, 'Informasi perkembangan kader', '2019-07-24 20:05:19', '2019-07-24 20:05:19'),
(39, 16, 'Pengelolaan kelompok', '2019-07-24 20:05:35', '2019-07-24 20:05:35'),
(40, 10, 'Pengelolaan relawan', '2019-07-24 20:17:08', '2019-07-24 20:17:08'),
(41, 10, 'Pengelolaan calon', '2019-07-24 20:17:26', '2019-07-24 20:17:26'),
(42, 10, 'Pengelolaan jumlah suara', '2019-07-24 20:18:00', '2019-07-24 20:18:00'),
(43, 10, 'Pengelolaan tps', '2019-07-24 20:18:14', '2019-07-24 20:18:14'),
(44, 10, 'Pengelolaan dapil', '2019-07-24 20:18:35', '2019-07-24 20:18:35'),
(45, 10, 'Input data gambar C1', '2019-07-24 20:18:55', '2019-07-24 20:18:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portofolio_id` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambars`
--

INSERT INTO `gambars` (`id`, `portofolio_id`, `url`, `created_at`, `updated_at`) VALUES
(6, 14, 'img/portofolio/14/slV6X1h0D4rHyMDJ.png', '2019-07-22 05:12:51', '2019-07-22 05:12:51'),
(7, 14, 'img/portofolio/14/8MHvrxhVMC09aweI.jpg', '2019-07-22 05:13:02', '2019-07-22 05:13:02'),
(8, 14, 'img/portofolio/14/8YOIkxrGy5xcBSd2.jpg', '2019-07-22 05:13:11', '2019-07-22 05:13:11'),
(9, 9, 'img/portofolio/9/U3bHCXYuWxDFc6f6.jpg', '2019-07-22 05:21:20', '2019-07-22 05:21:20'),
(10, 9, 'img/portofolio/9/tp0BSJzrVIqmymYg.jpg', '2019-07-22 05:21:29', '2019-07-22 05:21:29'),
(11, 9, 'img/portofolio/9/WNeV0JNJJPx5fofm.jpg', '2019-07-22 05:21:42', '2019-07-22 05:21:42'),
(12, 9, 'img/portofolio/9/UzLqK3zmpiBwBq9Y.jpg', '2019-07-22 05:21:52', '2019-07-22 05:21:52'),
(13, 15, 'img/portofolio/15/voRCOwpWOFP2FMX3.jpg', '2019-07-22 05:35:25', '2019-07-22 05:35:25'),
(14, 15, 'img/portofolio/15/YgLGbE8rnH9AVKNJ.jpg', '2019-07-22 05:35:36', '2019-07-22 05:35:36'),
(15, 15, 'img/portofolio/15/rY6Tip2bh6VQOuKB.jpg', '2019-07-22 05:35:45', '2019-07-22 05:35:45'),
(16, 16, 'img/portofolio/16/AfJtTDpzUDAN39N5.jpg', '2019-07-22 05:41:52', '2019-07-22 05:41:52'),
(17, 17, 'img/portofolio/17/wWALiPlzWJ7nNuMw.jpg', '2019-07-22 05:51:44', '2019-07-22 05:51:44'),
(18, 17, 'img/portofolio/17/hoyx3sQ1kcfSAJOD.jpg', '2019-07-22 05:51:59', '2019-07-22 05:51:59'),
(19, 17, 'img/portofolio/17/dMBg0l9jOzHzOW5X.jpg', '2019-07-22 05:52:07', '2019-07-22 05:52:07'),
(20, 18, 'img/portofolio/18/PfzqtBD5GsNx9NS9.png', '2019-07-23 02:55:19', '2019-07-23 02:55:19'),
(21, 18, 'img/portofolio/18/KWNQVKEzCA0LK9gs.png', '2019-07-23 02:55:29', '2019-07-23 02:55:29'),
(22, 18, 'img/portofolio/18/x0ReiZOdyJ8VAKh3.png', '2019-07-23 02:55:38', '2019-07-23 02:55:38'),
(23, 18, 'img/portofolio/18/Fazxph1h7hRtCNVR.png', '2019-07-23 02:55:47', '2019-07-23 02:55:47'),
(24, 8, 'img/portofolio/8/MdO3MYHM0v67A4Yo.jpg', '2019-07-24 19:33:08', '2019-07-24 19:33:08'),
(25, 8, 'img/portofolio/8/6zyzdNv12tNenP0y.jpg', '2019-07-24 19:33:27', '2019-07-24 19:33:27'),
(26, 8, 'img/portofolio/8/9zgSxXH5ajvTXAZv.jpg', '2019-07-24 19:33:39', '2019-07-24 19:33:39'),
(27, 11, 'img/portofolio/11/z5Cww7CuQA0T13dl.jpg', '2019-07-24 19:42:00', '2019-07-24 19:42:00'),
(28, 11, 'img/portofolio/11/NxaE7DGe7Ekrx3oj.jpg', '2019-07-24 19:42:08', '2019-07-24 19:42:08'),
(29, 11, 'img/portofolio/11/ECGAgVsGDBQz15Kk.jpg', '2019-07-24 19:42:15', '2019-07-24 19:42:15'),
(30, 11, 'img/portofolio/11/ojUf9USnhpaYS8vE.jpg', '2019-07-24 19:42:22', '2019-07-24 19:42:22'),
(31, 12, 'img/portofolio/12/6rkOqFXaBZefWA87.jpg', '2019-07-24 19:50:24', '2019-07-24 19:50:24'),
(32, 12, 'img/portofolio/12/YF9JEKHZhYvIc6og.jpg', '2019-07-24 19:50:38', '2019-07-24 19:50:38'),
(33, 12, 'img/portofolio/12/XnEe0sOzAWoTjpaz.jpg', '2019-07-24 19:50:47', '2019-07-24 19:50:47'),
(34, 13, 'img/portofolio/13/9OCcxfNXhEH1xslf.jpg', '2019-07-24 19:53:49', '2019-07-24 19:53:49'),
(35, 13, 'img/portofolio/13/W5NwPGas2vU8fL86.jpg', '2019-07-24 19:54:00', '2019-07-24 19:54:00'),
(36, 13, 'img/portofolio/13/67JftSjskFF82dOQ.jpg', '2019-07-24 19:54:09', '2019-07-24 19:54:09'),
(38, 16, 'img/portofolio/16/Be0XSNxRGDNrSivr.jpg', '2019-07-24 20:02:21', '2019-07-24 20:02:21'),
(39, 16, 'img/portofolio/16/9f2Zyl8YsmTN6jBH.jpg', '2019-07-24 20:02:28', '2019-07-24 20:02:28'),
(40, 16, 'img/portofolio/16/4ChsApSM6h9tI1XL.jpg', '2019-07-24 20:02:34', '2019-07-24 20:02:34'),
(41, 16, 'img/portofolio/16/eAoDXVr2yDqRgcn1.jpg', '2019-07-24 20:02:41', '2019-07-24 20:02:41'),
(42, 16, 'img/portofolio/16/xaHJxlQzkZzwaNM3.jpg', '2019-07-24 20:02:49', '2019-07-24 20:02:49'),
(43, 10, 'img/portofolio/10/CnZ3ljHO4rLKH6C8.jpg', '2019-07-24 20:16:12', '2019-07-24 20:16:12'),
(44, 10, 'img/portofolio/10/9mNYlV5OOULUts6h.jpg', '2019-07-24 20:16:19', '2019-07-24 20:16:19'),
(45, 10, 'img/portofolio/10/0dslaf7y6pfPe6LJ.jpg', '2019-07-24 20:16:28', '2019-07-24 20:16:28'),
(46, 10, 'img/portofolio/10/3puBeMap5R5YvfVq.jpg', '2019-07-24 20:16:38', '2019-07-24 20:16:38'),
(47, 10, 'img/portofolio/10/MxSQDzTcDlI5kVVp.jpg', '2019-07-24 20:16:46', '2019-07-24 20:16:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_07_19_013725_create_user_actions_table', 1),
(11, '2019_07_20_044746_create_portofolios_table', 1),
(12, '2019_07_20_044759_create_testimonis_table', 1),
(13, '2019_07_20_045317_create_gambars_table', 1),
(14, '2019_07_20_045330_create_fiturs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pengerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gif` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolios`
--

INSERT INTO `portofolios` (`id`, `title`, `description`, `link`, `type`, `client`, `waktu_pengerjaan`, `gif`, `image`, `logo`, `created_at`, `updated_at`) VALUES
(8, 'Pemesanan Tiket Jeep', 'Merupakan sistem informasi jasa penyewaan jeep bromo. Potensi wisatawan yang tinggi membuat paguyuban jeep bromo berinovasi untuk membuat sistem yang dapat memudahkan customer. Ngejip memungkan para customer melakukan penyewaan jeep kapan dan dimanapun.\r\nDilengkapi dengan berbagai macam metode pembayaran mulai dari transfer ATM, M-Banking, Gerai Minimarket, hingga layanan Go-PAY. Dari segi driver, membuka peluang yang lebih besar untuk mendapatkan orderan. Sistem yang dibuat juga memudahkan driver dalam mengelola orderan yang masuk.', 'https://ngejip.site/', 'website mobile', 'Paguyuban Bromo Malang', '10 minggu', 'img/portofolio/8/GnlAFE6f15SYOKXw.mp4', 'img/portofolio/8/3mlGO6h3jR74F4t3.jpg', NULL, '2019-07-22 00:11:14', '2019-08-11 11:50:06'),
(9, 'Perumahan Greenview Malang', 'Merupakan landing page web perumahan Green View Malang. Memberikan informasi yang dibutuhkan oleh calon pembeli. Membuat profil mudah untuk diakses menjadikan peluang pembelian lebih tinggi. Perkembangan teknologi dan informasi membuat setiap usaha perlu membuat landing pagenya.', 'https://greenviewregency.com/', 'website', 'PT. Saham Bukit Alam', '1 minggu', 'img/portofolio/9/vuMrsYWNVBFUarqS.mp4', 'img/portofolio/9/WzNWoPEmYo2zpbKf.jpg', NULL, '2019-07-22 00:13:46', '2019-08-11 10:45:51'),
(10, 'Quickcount Pemilu', 'Merupakan sistem informasi perhitungan suara pemilu. Berawal dari semarak demokrasi pemilu 2019. Kami berinisiatif membuat sistem perhitungan cepat dengan akses ke setiap relawan. Mendukung fitur upload foto C1 sebagai validitas data yang dikumpulkan', 'https://qcount.irit-io.id/', 'website mobile', '-', '4 Minggu', 'img/portofolio/10/iSY9einl0pOIykXv.mp4', 'img/portofolio/10/Jrsi5RXCFjKvgktH.jpg', NULL, '2019-07-22 00:15:16', '2019-08-11 07:56:05'),
(11, 'Muktamar IMM', 'Merupakan landing page dari kegiatan Muktamar IMM ke 18 di Malang. Sebagai ajang musyawarah tertinggi organisasi, mengabarkan dan menginformasikan situasi terupdate di arena muktamar.', 'https://muktamar-imm.org/', 'website', 'Dewan Pimpinan Pusat Ikatan Mahasiswa Muhammadiyah', '2 Minggu', 'img/portofolio/11/kNYrfCnHZLwTLwv3.mp4', 'img/portofolio/11/EQLPZ5Lodu8Krukq.jpg', NULL, '2019-07-22 00:17:09', '2019-08-11 10:44:03'),
(12, 'Registrasi Muktamar', 'Merupakan sistem informasi pendaftaran peserta Muktamar IMM. Support sistem pendaftaran online sebagai syarat menggunakan hak pilih dalam pemilihan formatur yang notabene menggunakan sistem E-Vote.', 'https://reg.muktamar-imm.org/', 'website', 'Dewan Pimpinan Pusat Ikatan Mahasiswa Muhammadiyah', '2 minggu', 'img/portofolio/12/6BV8rI5hWcPZTZgk.mp4', 'img/portofolio/12/CTAMGnvX9vTrloC5.jpg', NULL, '2019-07-22 00:18:15', '2019-08-11 10:42:44'),
(13, 'Buruh.co', 'Merupakan website berita dan informasi buruh KPBI. Mengabarkan berita tentang perjuangan buruh. Juga didukung difitur untuk like akun FB. Tampilan yang lebih elegan dan mewah diharapkan dapat memberi rasa nyaman bagi pembaca berlama-lama di website ini.', 'https://buruh.co/', 'website', 'Konfederasi Perjuangan Buruh Indonesia', '1 minggu', 'img/portofolio/13/pfj9vH5pxQXhyWwy.mp4', 'img/portofolio/13/XSURFMHgRzoWxujR.jpg', NULL, '2019-07-22 00:19:49', '2019-08-11 10:41:36'),
(14, 'Green View Pandaan', 'Merupakan landing page web perumahan Green View Pandaan. Memberikan informasi yang dibutuhkan oleh calon pembeli. Membuat profil mudah untuk diakses menjadikan peluang pembelian lebih tinggi. Perkembangan teknologi dan informasi membuat setiap usaha perlu membuat landing pagenya.', 'http://greenviewpandaan.com/', 'website', 'PT Saham Bukit Alam', '1 Minggu', 'img/portofolio/14/nYREoHqyquLXHRpY.mp4', 'img/portofolio/14/M5PdbfpVEHeEDGd9.jpg', NULL, '2019-07-22 05:06:00', '2019-08-11 10:39:40'),
(15, 'Razzaq Tour and Travel', 'Merupakan website pemesanan paket tour dan travel. Menyediakan informasi-informasi yang diperlukan customer. Website ini memungkinkan customer melakukan pemesanan kapan dan dimanapun.', 'https://razzaqtourtravel.com/', 'website', 'Deny', '1 bulan', 'img/portofolio/15/K37VREBGhZKRTkyO.mp4', 'img/portofolio/15/5O2cqtTqj2RMn0c0.png', NULL, '2019-07-22 05:35:00', '2019-08-11 10:37:35'),
(18, 'IMM-Ku Apps', 'Aplikasi sistem informasi dan panduan pedoman dan peraturan organisasi Ikatan Mahasiswa Muhammadiyah. Memudahkan kader dalam mengakses dokumen dokumen organisasi yang selama ini sulit diakses untuk menunjang aktivitas keorganisasian', 'https://sourceforge.net/projects/immku/', 'mobile', '-', '1 bulan', NULL, 'img/portofolio/18/7sNuoQVwMYDaURei.jpg', 'img/portofolio/18/adv4eYtHhRzPIPET.jpeg', '2019-07-23 02:52:35', '2019-08-12 01:50:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `name`, `testimoni`, `position`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Ilhamsyah', 'Kami KPBI mengucapkan terima kasih atas perbaikan web KPBI hingga bisa jadi keren dan makin menarik tampilannya. Webnya jadi OK banget.', 'Ketua Umum KPBI', 'img/testimoni/rrEqZHaEfgXynLD2.jpg', '2019-07-20 02:17:45', '2019-07-20 02:17:45'),
(2, 'Dian Iswanto', 'Support dan profesionalisme dari tim Irit.io ikut mengawal suksesnya pelaksanaan Muktamar IMM 2018. Sukses selalu dan terus berkarya.', 'Ketua DPP IMM', 'img/testimoni/B24laJrSduvEch2S.png', '2019-08-12 00:01:01', '2020-01-30 01:10:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nomor_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `nomor_hp`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Agiel Nugraha', 'agielnara17@gmail.com', NULL, '+6285819910714', 'img/profile/MEHMqdGELJN8tjWs.png', NULL, '2019-07-20 02:11:12', '2019-07-22 01:51:36'),
(2, 'Indra Wahyudi', 'indrawahyudi-@hotmail.com', '0000-00-00 00:00:00', '+6289660600419', 'img/profile/MEHMqdGELJN8tjWs.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_actions`
--

CREATE TABLE `user_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_actions`
--

INSERT INTO `user_actions` (`id`, `user_id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'created', 'testimonis', 1, '2019-07-20 02:17:45', '2019-07-20 02:17:45'),
(2, 1, 'created', 'testimonis', 2, '2019-07-20 02:18:50', '2019-07-20 02:18:50'),
(3, 1, 'created', 'portofolios', 1, '2019-07-20 02:20:51', '2019-07-20 02:20:51'),
(4, 1, 'updated', 'portofolios', 1, '2019-07-20 02:20:51', '2019-07-20 02:20:51'),
(5, 1, 'created', 'portofolios', 2, '2019-07-20 02:22:32', '2019-07-20 02:22:32'),
(6, 1, 'updated', 'portofolios', 2, '2019-07-20 02:22:32', '2019-07-20 02:22:32'),
(7, 1, 'created', 'portofolios', 3, '2019-07-20 02:24:04', '2019-07-20 02:24:04'),
(8, 1, 'updated', 'portofolios', 3, '2019-07-20 02:24:04', '2019-07-20 02:24:04'),
(9, 1, 'created', 'portofolios', 4, '2019-07-20 02:25:05', '2019-07-20 02:25:05'),
(10, 1, 'updated', 'portofolios', 4, '2019-07-20 02:25:05', '2019-07-20 02:25:05'),
(11, 1, 'created', 'portofolios', 5, '2019-07-20 02:26:01', '2019-07-20 02:26:01'),
(12, 1, 'updated', 'portofolios', 5, '2019-07-20 02:26:01', '2019-07-20 02:26:01'),
(13, 1, 'created', 'portofolios', 6, '2019-07-20 02:26:52', '2019-07-20 02:26:52'),
(14, 1, 'updated', 'portofolios', 6, '2019-07-20 02:26:52', '2019-07-20 02:26:52'),
(15, 1, 'deleted', 'portofolios', 1, '2019-07-21 23:26:52', '2019-07-21 23:26:52'),
(16, 1, 'deleted', 'portofolios', 2, '2019-07-21 23:26:53', '2019-07-21 23:26:53'),
(17, 1, 'deleted', 'portofolios', 3, '2019-07-21 23:26:54', '2019-07-21 23:26:54'),
(18, 1, 'deleted', 'portofolios', 4, '2019-07-21 23:26:56', '2019-07-21 23:26:56'),
(19, 1, 'deleted', 'portofolios', 5, '2019-07-21 23:26:57', '2019-07-21 23:26:57'),
(20, 1, 'deleted', 'portofolios', 6, '2019-07-21 23:27:03', '2019-07-21 23:27:03'),
(21, 1, 'created', 'portofolios', 7, '2019-07-21 23:37:42', '2019-07-21 23:37:42'),
(22, 1, 'updated', 'portofolios', 7, '2019-07-21 23:37:42', '2019-07-21 23:37:42'),
(23, 1, 'deleted', 'portofolios', 1, '2019-07-21 23:56:57', '2019-07-21 23:56:57'),
(24, 1, 'created', 'portofolios', 8, '2019-07-22 00:11:14', '2019-07-22 00:11:14'),
(25, 1, 'updated', 'portofolios', 8, '2019-07-22 00:11:14', '2019-07-22 00:11:14'),
(26, 1, 'created', 'portofolios', 9, '2019-07-22 00:13:46', '2019-07-22 00:13:46'),
(27, 1, 'updated', 'portofolios', 9, '2019-07-22 00:13:46', '2019-07-22 00:13:46'),
(28, 1, 'created', 'portofolios', 10, '2019-07-22 00:15:16', '2019-07-22 00:15:16'),
(29, 1, 'updated', 'portofolios', 10, '2019-07-22 00:15:16', '2019-07-22 00:15:16'),
(30, 1, 'created', 'portofolios', 11, '2019-07-22 00:17:09', '2019-07-22 00:17:09'),
(31, 1, 'updated', 'portofolios', 11, '2019-07-22 00:17:09', '2019-07-22 00:17:09'),
(32, 1, 'created', 'portofolios', 12, '2019-07-22 00:18:15', '2019-07-22 00:18:15'),
(33, 1, 'updated', 'portofolios', 12, '2019-07-22 00:18:15', '2019-07-22 00:18:15'),
(34, 1, 'created', 'portofolios', 13, '2019-07-22 00:19:49', '2019-07-22 00:19:49'),
(35, 1, 'updated', 'portofolios', 13, '2019-07-22 00:19:49', '2019-07-22 00:19:49'),
(36, 1, 'updated', 'portofolios', 12, '2019-07-22 00:56:26', '2019-07-22 00:56:26'),
(37, 1, 'created', 'testimonis', 3, '2019-07-22 00:58:12', '2019-07-22 00:58:12'),
(38, 1, 'updated', 'users', 1, '2019-07-22 01:51:36', '2019-07-22 01:51:36'),
(39, 1, 'deleted', 'testimonis', 3, '2019-07-22 03:21:28', '2019-07-22 03:21:28'),
(40, 2, 'deleted', 'testimonis', 2, '2019-07-22 04:49:57', '2019-07-22 04:49:57'),
(41, 2, 'created', 'portofolios', 14, '2019-07-22 05:06:00', '2019-07-22 05:06:00'),
(42, 2, 'updated', 'portofolios', 14, '2019-07-22 05:06:00', '2019-07-22 05:06:00'),
(43, 2, 'created', 'portofolios', 15, '2019-07-22 05:35:00', '2019-07-22 05:35:00'),
(44, 2, 'updated', 'portofolios', 15, '2019-07-22 05:35:00', '2019-07-22 05:35:00'),
(45, 2, 'created', 'portofolios', 16, '2019-07-22 05:41:31', '2019-07-22 05:41:31'),
(46, 2, 'updated', 'portofolios', 16, '2019-07-22 05:41:31', '2019-07-22 05:41:31'),
(47, 2, 'created', 'portofolios', 17, '2019-07-22 05:51:19', '2019-07-22 05:51:19'),
(48, 2, 'updated', 'portofolios', 17, '2019-07-22 05:51:19', '2019-07-22 05:51:19'),
(49, 2, 'created', 'portofolios', 18, '2019-07-23 02:52:35', '2019-07-23 02:52:35'),
(50, 2, 'updated', 'portofolios', 18, '2019-07-23 02:52:35', '2019-07-23 02:52:35'),
(51, 2, 'updated', 'portofolios', 18, '2019-07-23 02:58:33', '2019-07-23 02:58:33'),
(52, 2, 'updated', 'portofolios', 10, '2019-07-24 20:20:40', '2019-07-24 20:20:40'),
(53, 1, 'updated', 'portofolios', 8, '2019-07-27 21:28:52', '2019-07-27 21:28:52'),
(54, 1, 'updated', 'portofolios', 8, '2019-07-27 21:35:07', '2019-07-27 21:35:07'),
(55, 1, 'updated', 'portofolios', 9, '2019-07-27 21:37:56', '2019-07-27 21:37:56'),
(56, 1, 'updated', 'portofolios', 10, '2019-07-27 21:40:18', '2019-07-27 21:40:18'),
(57, 1, 'updated', 'portofolios', 11, '2019-07-27 21:42:22', '2019-07-27 21:42:22'),
(58, 1, 'updated', 'portofolios', 12, '2019-07-27 21:45:38', '2019-07-27 21:45:38'),
(59, 1, 'updated', 'portofolios', 13, '2019-07-27 21:47:18', '2019-07-27 21:47:18'),
(60, 1, 'updated', 'portofolios', 14, '2019-07-27 21:48:43', '2019-07-27 21:48:43'),
(61, 1, 'updated', 'portofolios', 15, '2019-07-27 21:50:23', '2019-07-27 21:50:23'),
(62, 1, 'updated', 'portofolios', 16, '2019-07-27 21:53:07', '2019-07-27 21:53:07'),
(63, 1, 'updated', 'portofolios', 18, '2019-07-27 21:54:58', '2019-07-27 21:54:58'),
(64, 1, 'updated', 'portofolios', 10, '2019-08-11 06:47:22', '2019-08-11 06:47:22'),
(65, 1, 'updated', 'portofolios', 10, '2019-08-11 07:01:33', '2019-08-11 07:01:33'),
(66, 1, 'updated', 'portofolios', 10, '2019-08-11 07:14:16', '2019-08-11 07:14:16'),
(67, 1, 'updated', 'portofolios', 10, '2019-08-11 07:56:05', '2019-08-11 07:56:05'),
(68, 1, 'updated', 'portofolios', 17, '2019-08-11 10:33:55', '2019-08-11 10:33:55'),
(69, 1, 'updated', 'portofolios', 16, '2019-08-11 10:35:11', '2019-08-11 10:35:11'),
(70, 1, 'updated', 'portofolios', 15, '2019-08-11 10:37:35', '2019-08-11 10:37:35'),
(71, 1, 'updated', 'portofolios', 14, '2019-08-11 10:39:40', '2019-08-11 10:39:40'),
(72, 1, 'updated', 'portofolios', 13, '2019-08-11 10:41:36', '2019-08-11 10:41:36'),
(73, 1, 'updated', 'portofolios', 12, '2019-08-11 10:42:44', '2019-08-11 10:42:44'),
(74, 1, 'updated', 'portofolios', 11, '2019-08-11 10:44:03', '2019-08-11 10:44:03'),
(75, 1, 'updated', 'portofolios', 9, '2019-08-11 10:45:51', '2019-08-11 10:45:51'),
(76, 1, 'updated', 'portofolios', 8, '2019-08-11 11:50:06', '2019-08-11 11:50:06'),
(77, 1, 'created', 'testimonis', 2, '2019-08-12 00:01:01', '2019-08-12 00:01:01'),
(78, 1, 'updated', 'portofolios', 18, '2019-08-12 01:50:48', '2019-08-12 01:50:48'),
(79, 1, 'deleted', 'portofolios', 17, '2019-08-12 02:02:50', '2019-08-12 02:02:50'),
(80, 1, 'deleted', 'portofolios', 16, '2019-08-12 02:02:53', '2019-08-12 02:02:53'),
(81, 1, 'updated', 'testimonis', 2, '2020-01-30 01:10:18', '2020-01-30 01:10:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nomor_hp_unique` (`nomor_hp`);

--
-- Indeks untuk tabel `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
