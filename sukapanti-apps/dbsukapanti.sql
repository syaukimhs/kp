-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 08:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsukapanti`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_21_011632_create_usulanfisiks_table', 1),
(6, '2024_03_21_013335_create_usulanbelanjamodals_table', 1),
(7, '2024_03_21_013903_create_usulaninovasis_table', 1),
(8, '2024_03_21_014211_create_tbdataperencanaans_table', 1),
(9, '2024_03_21_014453_create_tbdatamonitorings_table', 1),
(10, '2024_03_21_014627_create_tbmoduls_table', 1),
(11, '2024_03_21_014754_create_tbmateris_table', 1),
(12, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbdatamonitorings`
--

CREATE TABLE `tbdatamonitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbdatamonitorings`
--

INSERT INTO `tbdatamonitorings` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen Usulan', 'Usulan Rehab Fisik Panti 2025 fix.docx', '2024-03-27 21:03:44', '2024-03-27 21:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbdataperencanaans`
--

CREATE TABLE `tbdataperencanaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbdataperencanaans`
--

INSERT INTO `tbdataperencanaans` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen Usulan', 'Usulan Rehab Fisik Panti 2025 fix.docx', '2024-03-27 21:02:47', '2024-03-27 21:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbmateris`
--

CREATE TABLE `tbmateris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbmateris`
--

INSERT INTO `tbmateris` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen Usulan', 'Usulan Rehab Fisik Panti 2025 fix.docx', '2024-03-27 21:04:54', '2024-03-27 21:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbmoduls`
--

CREATE TABLE `tbmoduls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbmoduls`
--

INSERT INTO `tbmoduls` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen Usulan', 'Usulan Rehab Fisik Panti 2025 fix.docx', '2024-03-27 21:04:28', '2024-03-27 21:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin', '$2y$10$/i3YXjZPnRFZ62G4xRln4.ginsiYYEDqM9GyJqcwr4fCIXtxZKKGq', '2024-03-26 19:15:38', '2024-03-26 19:15:38'),
(6, 'PPSPGOT Mardi Utomo', 'ppspgot.mardiutomo', '$2y$10$tJ1/vtiOwBfl/fg4fvZeA.u3eKU3y4I7e8FE9oJL7Ms1ceEgON4j6', '2024-03-26 19:17:12', '2024-03-26 19:17:12'),
(7, 'PPSA Mandiri', 'ppsa.mandiri', '$2y$10$8gAKM/xPeC/n7RmA8Skfy.MnGlGhguhyBb/7yrbZpcGyjUZ7BcBpu', '2024-03-26 19:17:59', '2024-03-26 19:17:59'),
(8, 'PPSA  Wira Adhi Karya', 'ppsa.wiraadhikarya', '$2y$10$ragAuBvyaakjltCpBSdCjOHoZnPnRbtGdTiILK47Cf17ZNkAHXUsG', '2024-03-26 19:18:49', '2024-03-26 19:18:49'),
(9, 'PPSDM Ngudi Rahayu', 'ppsdm.ngudirahayu', '$2y$10$RhatMUncwetQobRH8eurLenhp7iCbXgLrvY/spd1qghaTDG1H5Xpe', '2024-03-26 19:19:26', '2024-03-26 19:19:26'),
(10, 'PPSLU Cepiring', 'ppslu.cepiring', '$2y$10$ZHOWWBul8pYb7C/.waHdr.u.qEQjRIxP70VNwYi0MT4J2G4OMcA5S', '2024-03-26 19:20:08', '2024-03-26 19:20:08'),
(11, 'PPSLU Turusgede', 'ppslu.turusgede', '$2y$10$nzcWStQL2Up.NdhuP38tKOOM6wPsftgAtFcgyAVv/BKzfkQ8uFi/e', '2024-03-26 19:20:51', '2024-03-26 19:20:51'),
(12, 'PPSDM Pangrukti Mulyo', 'ppsdm.pangruktimulyo', '$2y$10$vhmfwlOU4ZINTPF1AJZsweWLIpqr4RwVGqrguRyFPqZMwO0MfSF9i', '2024-03-26 19:21:43', '2024-03-26 19:21:43'),
(13, 'PPSDM Pendowo', 'ppsdm.pendowo', '$2y$10$jfaUgc7yU/ePzZ/weNC85.C69TO0G950gUDoIOUQNVZQ5U8Z6SEwG', '2024-03-26 19:22:22', '2024-03-26 19:22:22'),
(14, 'PPSLU Potroyudan', 'ppslu.potroyudan', '$2y$10$kKnBrQno1evPGP5msB9cDuLDDvfnGn.5jwgeWPE.ywrFb8oUDNAWC', '2024-03-26 19:22:53', '2024-03-26 19:22:53'),
(15, 'PPSW Wanodyatama', 'ppsw.wanodyatama', '$2y$10$wHl5QkWcRqyaL1bmyNltxejqkIOb3F9wfO7lWm2vsz44x6zc1Pjee', '2024-03-26 19:23:42', '2024-03-26 19:23:42'),
(16, 'PPSA Taruna Yodha', 'ppsa.tarunayodha', '$2y$10$MKGhNuzz27aGXwVS1gMh3uw1T7gsjaC2.tjPDNpygJdml4J4sNPVK', '2024-03-26 19:24:14', '2024-03-26 19:24:14'),
(17, 'PPSA Dharma Putera', 'ppsa.dharmaputera', '$2y$10$ugaLPy.gjzTlYhJ0kiN17e/7dqsIkO4uKGxylV1a6Zr0Lm//k3hd6', '2024-03-26 19:25:03', '2024-03-26 19:25:03'),
(18, 'PPSLU Adi Yuswo', 'ppslu.adiyuswo', '$2y$10$dvdVpVcUn3Sng0MFqaIt7OiiuRCqn1Xx4MxaXWzLBQHvfGc77TmcW', '2024-03-26 19:25:58', '2024-03-26 19:25:58'),
(19, 'PPSLU Dewanata', 'ppslu.dewanata', '$2y$10$8dja8xVHHmPU/4jCEPw2Re5ll5BT0UtDOL7bPUswWGmujcTmbOgpW', '2024-03-26 19:26:34', '2024-03-26 19:26:34'),
(20, 'PPSDI Raharjo', 'ppsdi.raharjo', '$2y$10$t5aPK.jeJaXbCgNw/w/oyOGNxIPbfyvU1WAs.O48nT.2RVh.PU5Aq', '2024-03-26 19:28:56', '2024-03-26 19:28:56'),
(21, 'PPSDM Samekto Karti', 'ppsdm.samektokarti', '$2y$10$.kW0BtRXj0sphHpnfEni6e3Wjxwcsaqge66lr4hIACq9FdxuYKKfy', '2024-03-26 19:29:42', '2024-03-26 19:29:42'),
(22, 'PPSLU Bisma Upakara', 'ppslu.bismaupakara', '$2y$10$.V2cr9xjgpGlLMqNRMfj6.PVUx0XVZpsueF9mxC2zfrybv9i7LcnK', '2024-03-26 19:30:16', '2024-03-26 19:30:16'),
(23, 'PPSLU Bojong Bata', 'ppslu.bojongbata', '$2y$10$slSnJhenA37o1P6J5EAQEOe2TrVYOXuEbThf3MoLBmSFrmwZpwc42', '2024-03-26 19:30:56', '2024-03-26 19:30:56'),
(24, 'PPSDM Penganthi', 'ppsdm.penganthi', '$2y$10$jJ0HhTx/4/3AEaOZDP7w0OvId7Sr9so/knyya8l.rJTxK47pcFL26', '2024-03-26 19:31:57', '2024-03-26 19:31:57'),
(25, 'PPSPMKS Margo Widodo', 'ppspmks.margowidodo', '$2y$10$nlnMPKQkOEaSVevRPbmNwet7tIjr2auzDCPQMrk.ChiBUr0u/mZWG', '2024-03-26 19:33:06', '2024-03-26 19:33:06'),
(26, 'PPSA Kasih Mesra', 'ppsa.kasihmesra', '$2y$10$E6.ca5sVRb0IR8RShtkazeewEvbdVkacvNKhPNVD31GzlsMt0xq9y', '2024-03-26 19:33:42', '2024-03-26 19:33:42'),
(27, 'PPSA Suko Mulyo', 'ppsa.sukomulyo', '$2y$10$CAXWPo9VGSPLLErIJr1Eq.M6LO9wvRsnybpH1pYO39KHtN3V0Fga.', '2024-03-26 19:34:43', '2024-03-26 19:34:43'),
(28, 'PPSA Pamardi Utomo', 'ppsa.pamardiutomo', '$2y$10$9LlH4caciAWVrRYBgf2GueanERaFIlKXvhh.kpsssVNscp8qG73pu', '2024-03-26 19:35:16', '2024-03-26 19:35:16'),
(29, 'PPSA Worowiloso', 'ppsa.worowiloso', '$2y$10$fjzj5TPThY4brY1H/9BJxeFk1h6Y4DJajy9gYmiLRWPvyaJifvXye', '2024-03-26 19:35:55', '2024-03-26 19:35:55'),
(30, 'PPSA Kumuda Putera Puteri', 'ppsa.kumudaputeraputeri', '$2y$10$ubLmb4iBdr/9L5xaG3i1R.V8HK4T4Gt2IyMGv7of8AY1q8DP6bI8a', '2024-03-26 19:36:32', '2024-03-26 19:36:32'),
(33, 'PPSLLU Sudagaran', 'ppslu.sudagaran', '$2y$10$ZZKue2A3Qawb5cBNokkMIedc1tM3PHOc5QJcDiWuSEKdm1ar/ANrC', '2024-03-26 19:39:18', '2024-03-26 19:39:18'),
(34, 'PPSA Tawangmangu', 'ppsa.tawangmangu', '$2y$10$rtVdr8xIsKdZ7J2b4ADPueFdPpPbaoByLuk12HOAjNaQiicYQCMpG', '2024-03-26 19:40:08', '2024-03-26 19:40:08'),
(35, 'RPSDI Pamardi Mulyo', 'rpsdi.pamardimulyo', '$2y$10$kVJU0zxEeukf03FrNLK5tewrmKWRgc6pkHRX7a48zlXajcgscXdAK', '2024-03-27 22:12:44', '2024-03-27 22:12:44'),
(36, 'RPSLU Pucang Gading', 'rpslu.pucanggading', '$2y$10$KsWkz5qOGAmwmt1hH71olO9UwazgpeLEM1Ti0EkYq2URWgEyX8u1m', '2024-03-27 22:13:50', '2024-03-27 22:13:50'),
(37, 'RPLSU Wening Wardoyo', 'rpslu.weningwardoyo', '$2y$10$/nJiadur8T4nmfqgFH2uI.8aTVoIUnj9kE/ghHlIf0pjPSiK0/DYy', '2024-03-27 22:14:25', '2024-03-27 22:14:25'),
(38, 'RPSAB Wiloso Tomo', 'rpsab.wilosotomo', '$2y$10$wY1dj0fsIdyPlS7IBGVALu3dv.hIN.YASnh4ZzJ8Is4CNESELnQYC', '2024-03-27 22:14:54', '2024-03-27 22:14:54'),
(39, 'RPSDM Bina Sejahtera', 'rpsdm.binasejahtera', '$2y$10$wv2KfIfcAuA4U99Rb26z/eXqgN5DPZJsnYlQ0kt8OhnItovmRCMuK', '2024-03-27 22:15:16', '2024-03-27 22:15:16'),
(40, 'RPSLU Waleri', 'rpslu.waleri', '$2y$10$/UIZkQ4cY50wSn1e7noXYOyjLiRBBQAaPxHB/INBnKakzLL0tyjuC', '2024-03-27 22:15:34', '2024-03-27 22:15:34'),
(41, 'RPSLU Margomukti', 'rpslu.margomukti', '$2y$10$rGKa7MD5cjIO4haMehorZ.rc2jD7tdv/LfMzNCPJTALiSGoqhvywa', '2024-03-27 22:15:54', '2024-03-27 22:15:54'),
(42, 'RPSDM Pamardikarya', 'rpsdm.pamardikarya', '$2y$10$kwRz9Lxi/SmswpA7vpOnSOyup/A8F5a5p9VjBG22J0BXW/8SSw2Aa', '2024-03-27 22:16:23', '2024-03-27 22:16:23'),
(43, 'RPSDM Muria jaya', 'rpsdm. muriajaya', '$2y$10$UmkEahOQWBK2gJCLCu3aGOO/um4fFFO1doGMtZwiswXxmFcPoe76O', '2024-03-27 22:16:44', '2024-03-27 22:16:44'),
(44, 'RPSDM Waluyotomo', 'rpsdm.waluyotomo', '$2y$10$P.BCrJcEbEN/Z7Gu8N0U1OAeKs4HFpR3.Rc8zr1k25o2nlAo0b1xS', '2024-03-27 22:17:03', '2024-03-27 22:17:03'),
(45, 'RPSDN Bhakti Candrasa', 'rpsdn.bhakticandrasa', '$2y$10$URzbc.b9rdPBsVvGQHH1culmd4CXRh.Myp8OOkRPy.gxiXORhEL3e', '2024-03-27 22:17:58', '2024-03-27 22:17:58'),
(46, 'RPSDM Estitomo', 'rpsdm.estitomo', '$2y$10$GC9P9zGw0lEAKqHTiMO0U.UD3VPpVA5CVps.z42AN5DzSD/zAVNvm', '2024-03-27 22:18:20', '2024-03-27 22:18:20'),
(47, 'RPSDM Hestining Budi', 'rpsdm.hestiningbudi', '$2y$10$dYAUiGh/14BLztjNBILu5uYnC8kHAbBjy2oQQlWhuCiQW800le.GO', '2024-03-27 22:18:41', '2024-03-27 22:18:41'),
(48, 'RPSLU Wilosowredo', 'rpslu.wilosowredo', '$2y$10$jaXS3.Q6LVYpS.nnHrjdK.J6hgqtXs2TMz9cNIvAOBw2HyQC/V/Si', '2024-03-27 22:19:04', '2024-03-27 22:19:04'),
(49, 'RPSDSRW Wira Karya Tama', 'rpsdsrw.wirakaryatama', '$2y$10$qODhSYSdd46q6gVof7z0c.cLGJfq0HDqHk5obs1L3gU.f3vMsKaP2', '2024-03-27 22:19:22', '2024-03-27 22:19:22'),
(50, 'RPSPGOT Mardiguno', 'rpsgot. mardiguno', '$2y$10$woLhH5lSYZGkZvprcD3jp.i9puRupPB2IoWLSZljlSJ3Wd.OUmHAK', '2024-03-27 22:19:43', '2024-03-27 22:19:43'),
(51, 'RPSDM Martani', 'rpsdm.martani', '$2y$10$j.mMCUZHeg3p4BAum0XPj.EpYJDEcQ8gv9RoI012WnVa0EUdCDW4.', '2024-03-27 22:20:09', '2024-03-27 22:20:09'),
(52, 'RPSDM Jeruk Legi', 'rpsdm.jeruklegi', '$2y$10$.FCoiyB150XA5jRUIGt.2eRPF3q6YXqzoxZ4N5FQc/wgDRI7XMIHe', '2024-03-27 22:20:32', '2024-03-27 22:20:32'),
(53, 'RPSLU Mojo Mulyo', 'rpslu.mojomulyo', '$2y$10$LMn7y2GIjwwffA4GWnjT.uZSlk9Kien5pK7z720L.1ckAAa8MoBue', '2024-03-27 22:20:53', '2024-03-27 22:20:53'),
(54, 'RPSDF Gondang', 'rpsdf.gondang', '$2y$10$2HViYwn6iVR4s9OUKBLMd.1vxY/Z7V3o2PfapXzTeIj//XyOSJC1e', '2024-03-27 22:21:13', '2024-03-27 22:21:13'),
(55, 'RPSA Pamardi Siwi', 'rpsa.pamardisiwi', '$2y$10$I7h0RxVY05arok6e76b1DeKNJHOKF/ITd1OV4WMUODyDCEEFLv1fS', '2024-03-27 22:22:17', '2024-03-27 22:22:17'),
(56, 'RPSA Putera Harapan', 'rpsa.puteraharapan', '$2y$10$dowjhw2IftNBUREQuP7QJ.rbJiaO4NeMl61.dZ8GDlJ/dQxNkQYZy', '2024-03-27 22:22:35', '2024-03-27 22:22:35'),
(57, 'RPSDM Talun', 'rpsdm.talun', '$2y$10$zMEK12AxtLYTf9NHisfa2.HHzr9fRsg049OPpAUYsoMCF1byrHtc.', '2024-03-27 22:23:08', '2024-03-27 22:23:08'),
(58, 'RPSPGOT Karya Mandiri', 'rpsgot.karyamandiri', '$2y$10$byI.WLJsTEgXsa4X5KE88ukqn7swLF54Yw7cQ6aKHMd6flMrbKTu6', '2024-03-27 22:23:28', '2024-03-27 22:23:28'),
(59, 'RPSLU Klampok', 'rpslu.klampok', '$2y$10$K7nqLbwVqzVIOR7Zgr8KTOCH5XmzYqV6WWNK2Q4yEldYuaPPBoipO', '2024-03-27 22:23:49', '2024-03-27 22:23:49'),
(60, 'RPSDSN Dristarasta', 'rpsdsn.dristarasta', '$2y$10$UVshwojQZ9Fp0GH3qbSEcOh/5d8dDZhcQddS7k9LheXA1EnwwzKFu', '2024-03-27 22:24:27', '2024-03-27 22:24:27'),
(61, 'RPSA Mardi Yuwono', 'rpsa.mardiyuwono', '$2y$10$XZn5Nquhx8IXVdJV7tIpTuOrXeMv6ubqM6OKx9U5eVxX8dcI4su.q', '2024-03-27 22:24:48', '2024-03-27 22:24:48'),
(62, 'RPSPMKS Pamardi Raharjo', 'rpspmks.pamardiraharjo', '$2y$10$HH7bAwUbBt1j1gVOhfBKuuKdqR3SrhDBGlDStp3Mh/0cKCBrX/sXC', '2024-03-27 22:25:07', '2024-03-27 22:25:07'),
(63, 'RPSDM Sono Rumekso', 'rpsdm.sonorumekso', '$2y$10$sEZL0qdAy1Evpj4sqJ4aQubzPbEf.FTXMeB/QESKixpVHBsJQZkSS', '2024-03-27 22:25:28', '2024-03-27 22:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `usulanbelanjamodals`
--

CREATE TABLE `usulanbelanjamodals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaunit` varchar(255) NOT NULL,
  `usulan` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `peruntukan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usulanfisiks`
--

CREATE TABLE `usulanfisiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaunit` varchar(255) NOT NULL,
  `usulanrehab` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usulanfisiks`
--

INSERT INTO `usulanfisiks` (`id`, `namaunit`, `usulanrehab`, `volume`, `file`, `created_at`, `updated_at`) VALUES
(4, 'PPSPGOT Mardi Utomo', 'Rehab Kopel / Wisma Penerima Manfaat', '105 m2', 'KOPEL RUSAK BERAT - Mardi Utomo.docx', '2024-03-27 22:37:27', '2024-03-27 22:37:27'),
(5, 'PPSA Mandiri', 'Asrama Ki Hajar Dewantara', '15,40 M X 10,80 M', 'Ki Hajar Dewantara DOKUMENTASI BANGUNAN PPSA MANDIRI SMG - Raden Ardhini.docx', '2024-03-27 22:43:29', '2024-03-27 22:43:29'),
(6, 'PPSA Mandiri', 'Ruang Kesenian', '12,30 X 8,50 M', 'DOKUMENTASI BANGUNAN PPSA MANDIRI SMG - Raden Ardhini (3).docx', '2024-03-27 22:44:27', '2024-03-27 22:44:27'),
(7, 'RPSLU Pucang Gading', 'Bangsal Dahlia', '234,9 m (P = 27 m x L = 8,7 m)', 'DOKUMENTASI BANGUNAN RPSLU PUCANG GADING SMG - Raden Ardhini.docx', '2024-03-27 22:45:57', '2024-03-27 22:45:57'),
(8, 'RPSLU Pucang Gading', 'Ruang Makan Mbah Kakung', '82,30 m (P= 8,85 m x L = 9,30 m)', 'DOKUMENTASI BANGUNAN RPSLU PUCANG GADING SMG - Raden Ardhini.docx', '2024-03-27 22:46:35', '2024-03-27 22:46:35'),
(9, 'RPSLU Pucang Gading', 'Ruang Makan Mbah Putri', '82,83 m  (P = 8,85 m x L = 9,36 m)', 'DOKUMENTASI BANGUNAN RPSLU PUCANG GADING SMG - Raden Ardhini.docx', '2024-03-27 22:47:02', '2024-03-27 22:47:02'),
(10, 'RPLSU Wening Wardoyo', 'Wisma Drupadi Lansia Terlantar Wening Wardoyo Ungaran', '241,1', 'Wisma Drupadi Lansia Terlantar Wening Wardoyo Ungaran - panti pelayanan sosial anak wira adhi karya ungaran.pdf', '2024-03-27 22:48:43', '2024-03-27 22:48:43'),
(11, 'PPSDM Ngudi Rahayu', 'Perbaikan Asrama Pala', '243', 'Asrama Pala - PPSDM NgudiRahayu.pdf', '2024-03-27 22:50:24', '2024-03-27 22:50:24'),
(12, 'PPSLU Cepiring', 'Rumah Negara Golongan Ii Type B Permanen/Rumah Dinas Kepala', 'Luas lantai  56 M2', 'Cepiring.docx', '2024-03-27 22:56:10', '2024-03-27 22:56:10'),
(15, 'PPSW Wanodyatama', 'Rehab Gedung Ruang Data', '180,9 M2', 'FOTO GEDUNG RUANG DATA PPSW WANODYATAMA - bhakti candrasa.docx', '2024-03-27 23:02:55', '2024-03-27 23:02:55'),
(16, 'RPSDN Bhakti Candrasa', 'Rehab Gedung Asrama Putri Bertingkat', '130,8 M2', 'FOTO GEDUNG ASRAMA PUTRI BERTINGKAT RPSDSN BHAKTI CANDRASA - bhakti candrasa.docx', '2024-03-27 23:05:07', '2024-03-27 23:05:07'),
(17, 'PPSA Taruna Yodha', 'Asrama 3', '65 M2', 'ASRAMA 3 - ppsa taruna yodha sukoharjo.docx', '2024-03-27 23:07:36', '2024-03-27 23:07:36'),
(18, 'PPSA Taruna Yodha', 'Rumah Dinas Kepala', '45 M2', 'RUMAH DINAS - ppsa taruna yodha sukoharjo.docx', '2024-03-27 23:08:17', '2024-03-27 23:08:17'),
(19, 'RPSDM Estitomo', 'Atap Dan Keramik', '160 M2', 'USUL REHAB 2025 - estitomo wonogiri.pdf', '2024-03-27 23:09:40', '2024-03-27 23:09:40'),
(20, 'RPSDM Hestining Budi', 'Poliklinik - Ruang Karaoke Dan Dapur -Ruang Makan', '48 & 72', 'KERUSAKAN - Panti Hestiningbudi 2019.docx', '2024-03-27 23:11:29', '2024-03-27 23:11:29'),
(21, 'PPSLU Adi Yuswo', 'Kamar Mandi', '25m x 8m = 200 M2', 'Kamar Mandi AY 24 - ADI YUSWO PURWOREJO.docx', '2024-03-27 23:13:13', '2024-03-27 23:13:13'),
(22, 'PPSLU Dewanata', 'Pagar Keliling', '198m2', 'pagar - ppslu dewanata.pdf', '2024-03-27 23:15:04', '2024-03-27 23:15:04'),
(23, 'PPSLU Dewanata', 'Bangunan Gudang', '90m2', 'BANGUNAN GUDANG - ppslu dewanata.pdf', '2024-03-27 23:16:07', '2024-03-27 23:16:07'),
(25, 'PPSDI Raharjo', '- Pelebaran Luas Bangunan/Gedung (Rehab Total) - Penambahan Tinggi Bangunan/Gedung - Penambahan Panggung', '27 x 11 Meter', 'Rehab Gedung PPSDI Raharjo 2025 - ppsdi raharjo.docx', '2024-03-27 23:22:33', '2024-03-27 23:22:33'),
(26, 'RPSLU Mojo Mulyo', 'Rehab Gedung Aula/Pertemuan', '25 x 12 Mater', 'Rehab Gedung RPSLU MOJOMULYO 2025 - ppsdi raharjo.docx', '2024-03-27 23:25:23', '2024-03-27 23:25:23'),
(27, 'RPSDF Gondang', 'Rehab Gedung Kantor', '15 x 12 Meter', 'Rehab Gedung RPSDF GONDANG 2025 - ppsdi raharjo.docx', '2024-03-27 23:27:16', '2024-03-27 23:27:16'),
(28, 'RPSA Pamardi Siwi', 'Rehab Gedung Aula/Pertemuan', '17.5 x 10 Mater', 'Rehab Gedung RPSA PAMARDI SIWI - ppsdi raharjo.docx', '2024-03-27 23:28:43', '2024-03-27 23:28:43'),
(29, 'PPSDM Samekto Karti', 'Kamar Mandi', '7.4 m x 13.2 m', 'samekto karti - samekto karti pemalang.pdf', '2024-03-27 23:30:26', '2024-03-27 23:30:26'),
(30, 'RPSA Putera Harapan', 'Rumah Dinas Pegawai dan Kamar Mandi Penerima Manfaat (dan tempat jemuran pakaian)', 'Rumah Dinas 29,45m x 9,20m, Kamar Mandi Penerima Manfaat (dan tempat jemuran pakaian) 7,25m x 4m (6,25m x 10m)', 'data dukung usulan rehab rpsa putra harapan slawi - SAMEKTO KARTI.pdf', '2024-03-27 23:32:17', '2024-03-27 23:32:17'),
(31, 'RPSDM Talun', 'Gedung Kantor dan kamar mandi Asrama', 'Kantor 12 m x 12 m, Kamar Mandi 2 x 2 m', 'samekto karti pemalang.pdf', '2024-03-27 23:34:11', '2024-03-27 23:34:11'),
(32, 'PPSLU Bojong Bata', 'Rehab Gedung Gudang', '22 m x 12 m', 'Rehab Gedung Gudang Bojongbata - Panti Pelayanan Sosial Lanjut Usia Bojongbata.pdf', '2024-03-27 23:36:47', '2024-03-27 23:36:47'),
(33, 'RPSLU Klampok', 'Rehab Gedung Kantor', '15 m x 15 m', 'Rehab Gedung Kantor Klampok - Panti Pelayanan Sosial Lanjut Usia Bojongbata.pdf', '2024-03-27 23:38:52', '2024-03-27 23:38:52'),
(34, 'RPSDSN Dristarasta', 'Rahab Gedung Dapur', '10 m x 18 m', 'Rehab Gedung dapur Dris - Panti Pelayanan Sosial Lanjut Usia Bojongbata.pdf', '2024-03-27 23:40:56', '2024-03-27 23:40:56'),
(35, 'PPSDM Penganthi', 'Gedung Asrama Putra', '784m', 'USULAN REHAB ASRAPA PUTRA PPSDSN PENGANTHI TEMANGGUNG - Dian Septila.pdf', '2024-03-27 23:43:01', '2024-03-27 23:43:01'),
(36, 'RPSA Mardi Yuwono', 'Rehab Fisik Gedung Asrama (Atap Dan Langit-Langit Asrama Selatan)', '206,2 m2', 'Rehab Asrama Selatan - MARDI YUWONO.pdf', '2024-03-27 23:45:18', '2024-03-27 23:45:18'),
(37, 'RPSPMKS Pamardi Raharjo', 'Rehab Kamar Mandi Pm', '23 M2', 'FOTO KONDISI FISIK BANGUNAN KAMAR MANDI PM - Pamardi Raharjo.docx', '2024-03-27 23:47:08', '2024-03-27 23:47:08'),
(38, 'PPSPMKS Margo Widodo', 'Rehab Wisma Teratai Dan Rumah Dinas Eks.Lk3', '198 M2 Dan 219,25 M2', 'REHAB GEDUNG BANGUNAN 2024 MARGO WIDODO - Panti Pelayanan Sosial PMKS Margo Widodo Semarang.pdf', '2024-03-27 23:49:13', '2024-03-27 23:49:13'),
(39, 'RPSDM Sono Rumekso', 'Rehab Rumah Dinas Dan Kamar Mandi PM', '99 M2 DAN 45M2', 'REHAB GEDUNG BANGUNAN 2024 SONO RUMEKSO - Rumpelsos Sono Rumekso Grobogan.pdf', '2024-03-27 23:51:52', '2024-03-27 23:51:52'),
(40, 'PPSA Kasih Mesra', 'Rehab Gedung Kantor Dan Asrama (Bertingkat)', '742 m2', 'Usulan Kerusakan Bangunan PPSA Kasih Mesra Demak - PPS Kasih Mesra.docx', '2024-03-27 23:53:55', '2024-03-27 23:53:55'),
(41, 'PPSA Pamardi Utomo', 'Rehab Atap Asrama Jenderal Sudirman', 'Bangunan 115 m2, atap 165 m2', 'ASRAMA JENSUD PPSA PAMARDI UTOMO BOYOLALI - shodiq wibowo.pdf', '2024-03-27 23:56:02', '2024-03-27 23:56:02'),
(42, 'PPSA Worowiloso', 'Perubahan Ruang Jahit Menjadi Asrama Pm', '5 M X 16 M', 'RUANG KETRAMPILAN JAHIT - WORO WILOSO.docx', '2024-03-27 23:57:44', '2024-03-27 23:57:44'),
(43, 'PPSA Kumuda Putera Puteri', 'Atap Rumah Dinas', '13182 M2', 'ATAP RUMAH DINAS KEPALA - PPSA Kumuda Putera-Puteri MAGELANG.docx', '2024-03-27 23:59:21', '2024-03-27 23:59:21'),
(44, 'PPSA Tawangmangu', 'Rehabilitasi Bangunan Gedung Pendidikan', '135 M 2', 'KONDISI EKSISTING AWAL RUANG PENDIDIKAN - PPSA Tawangmangu.pdf', '2024-03-28 00:01:37', '2024-03-28 00:01:37'),
(45, 'PPSLLU Sudagaran', 'Rehab Aula (Rangka  Atap, Atap Dan Plapon)', '186 m2', 'PLAPON AULA SUDAGARAN.docx', '2024-03-28 00:03:10', '2024-03-28 00:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `usulaninovasis`
--

CREATE TABLE `usulaninovasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namapanti` varchar(255) NOT NULL,
  `namainovasi` varchar(255) NOT NULL,
  `paguanggaran` bigint(20) NOT NULL,
  `tahunpelaksanaan` bigint(20) NOT NULL,
  `latarbelakang` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `deskripsiinovasi` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `rab` varchar(255) NOT NULL,
  `tanggalusulan` date NOT NULL,
  `catatankeuangan` varchar(255) NOT NULL,
  `statususulan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `tbdatamonitorings`
--
ALTER TABLE `tbdatamonitorings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbdataperencanaans`
--
ALTER TABLE `tbdataperencanaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmateris`
--
ALTER TABLE `tbmateris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmoduls`
--
ALTER TABLE `tbmoduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `usulanbelanjamodals`
--
ALTER TABLE `usulanbelanjamodals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usulanfisiks`
--
ALTER TABLE `usulanfisiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usulaninovasis`
--
ALTER TABLE `usulaninovasis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbdatamonitorings`
--
ALTER TABLE `tbdatamonitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbdataperencanaans`
--
ALTER TABLE `tbdataperencanaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbmateris`
--
ALTER TABLE `tbmateris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbmoduls`
--
ALTER TABLE `tbmoduls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `usulanbelanjamodals`
--
ALTER TABLE `usulanbelanjamodals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `usulanfisiks`
--
ALTER TABLE `usulanfisiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `usulaninovasis`
--
ALTER TABLE `usulaninovasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
