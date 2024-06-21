-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dissertation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defense_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `feedback` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_cert` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_cover_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_thesis_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `phone`, `email`, `lastname`, `firstname`, `ac_year`, `ac_level`, `mat`, `delay`, `field`, `speciality`, `defense_date`, `description`, `status`, `feedback`, `birth_cert`, `cip`, `id_card`, `student_card`, `enrolle1`, `enrolle2`, `enrolle3`, `dis_cover_page`, `cert_thesis_def`, `created_at`, `updated_at`) VALUES
(1, 1, '1234567890', 'emm@example.com', 'Smith', 'Emma', '2022-2023', 'Licence 1', '17104018', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'you', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-10-24 09:56:51', '2023-10-24 09:56:51'),
(2, 1, '1234567890', 'emm@example.com', 'Smith', 'Emma', '2022-2023', 'Licence 1', '17104018', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'you 2', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-10-24 10:02:01', '2023-10-24 10:02:01'),
(3, 1, '1234567890', 'emm@example.com', 'Smith', 'Emma', '2022-2023', 'Licence 1', '17104018', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', ':.', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-03 00:22:56', '2023-11-03 00:22:56'),
(4, 1, '1234567890', 'emm@example.com', 'Smith', 'Emma', '2022-2023', 'Licence 1', '17104018', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', ':;', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-09 13:41:12', '2023-11-09 13:41:12'),
(5, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'session', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-13 18:12:52', '2023-11-13 18:12:52'),
(6, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'l', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-13 18:20:57', '2023-11-13 18:20:57'),
(7, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'lkk', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-13 18:39:06', '2023-11-13 18:39:06'),
(8, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', ';', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-11-13 18:43:41', '2023-11-13 18:43:41'),
(9, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'jk', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-04 19:42:48', '2023-12-04 19:42:48'),
(10, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'jj', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-08 12:40:11', '2023-12-08 12:40:11'),
(11, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-11', 'hghg', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-08 13:09:22', '2023-12-08 13:09:22'),
(12, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Master 2', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '0000-00-00', 'projet', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-11 04:56:32', '2023-12-11 04:56:32'),
(13, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '0000-00-00', 'nhg', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-11 14:38:28', '2023-12-11 14:38:28'),
(14, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-06', 'lo', 1, NULL, '', '', '', '', '', '', '', '', '', '2023-12-11 14:59:21', '2023-12-11 14:59:21'),
(15, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-14', 'good', 1, NULL, 'birth_cert/9Uf1K7OTiMl4zi5Ujvg3LJ6yjNxNTpwgGopAnf5M.jpg', 'cip/hEHZ4TDmoFjzsaJJDDaPuyhGL2lPPc6mosbMEzI2.jpg', 'id_card/yH0nRSSat8F5FYAHXFmdOzCG1AqSg7GKml2xvVwO.jpg', 'student_card/nyAKBy8WUxdxvCDtULhVL9iubH3UIjNpx6XzX88t.jpg', 'enrolle1/wGSYlXSZmurvwEuexk0uKbigbu0S1N8MsMrOCOei.jpg', 'enrolle2/kFbldRgMCuvWF0C4vYcyL1LZx2y7v2BomdLp0YFw.jpg', 'enrolle3/88aMnoK8te9F0bMjYwGQbePxHQoJWn900ZP8BfeM.jpg', 'dis_cover_page/XT8eLNL1Jms9USlHWQBFQYFOoSMjqWriz7eNbZUd.jpg', 'cert_thesis_def/cnoquL83Mz2q4yja4bDO8bk8sipkzExllNAwxL98.jpg', '2023-12-12 14:37:46', '2023-12-12 14:37:46'),
(16, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', NULL, 'Sciences Economiques', 'Economie Appliquée', '2023-12-14', 'good', 1, NULL, 'birth_cert/NUKqk7Vssgxn3MTNaahTbu9KnCitfvq74RCjorpB.jpg', 'cip/EiRtuGS2vRjZINOqj8fHVhsHFi2j6eOuJiullQgL.jpg', 'id_card/0kKa16Nn2NUJBxgDdFLeyQa1Rsoch2m5zkqrfrXr.jpg', 'student_card/d8cTycQBrkosuumiNZTJSdPCAgs5jnOpelwI7qQs.jpg', 'enrolle1/0RBKV6TKyr0AeFzA58AMLEIrk78sqqLYixH7xWR7.jpg', 'enrolle2/siryBFFfjrQNpvODDRMLcNTbKEVvleOmZXBuX6MT.jpg', 'enrolle3/uFvC1w5KENCR15LOcORNq08Qg9DGjaacb2ozY8aB.jpg', 'dis_cover_page/n813wwi28oBfaqNI4nZl3WWfK27bYaN2PEhK2ixx.jpg', 'cert_thesis_def/LNPQkHeQrQLkIOuZIDL3z3RlbRfCysfLqqvUlbem.jpg', '2023-12-12 14:44:08', '2023-12-12 14:44:08'),
(17, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2023-2024', 'Licence 2', '12345678', '5 ans et plus', 'Sciences Economiques', 'Marketing et action commerciale', '2023-12-08', 'j', 1, NULL, 'birth_cert/zK6yfB55NokpDpQ9tUOqRIIkgOr5m94uVxGrYBsd.jpg', 'cip/hxUQc2slbH5x3DjrI6R6J7H8fxVvPYDFqmBPWi7p.jpg', 'id_card/5rijf5QWmU9ytzoNkkkkuAxSZS4sJHN7CpO28NUR.jpg', 'student_card/6ZNsSGiYjZSSi6lSAYJqUUSt5miZAWHCuHIOyn7b.jpg', 'enrolle1/BvWxYc4ITB1DtAMDeUhSJEm0oUjv4zWRa1Q9Cktt.jpg', 'enrolle2/ZWKpNpceeuxyP4uv9qyhaakEMAjgdYXYQkPHFgVC.jpg', 'enrolle3/G7M68tsLK0Macm3DJnn7Q3nrv8pvd5r73dN6oLUH.jpg', 'dis_cover_page/WEVF4tXwvMtMOUsrexCB0tPmXbKi2YnDkhIzKUbS.jpg', '', '2023-12-31 14:35:02', '2023-12-31 14:35:02'),
(18, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2023-2024', 'Licence 2', '12345678', '5 ans et plus', 'Sciences Economiques', 'Marketing et action commerciale', '2023-12-08', 'j', 1, NULL, 'birth_cert/uPVuKO3S9Kb2Oxu3nWZX6kq0FlgIIwwmpCUvnv40.jpg', 'cip/9qN0QXjE564fFoWJ0zwRCmo7OJPBfOSwOP1VLANm.jpg', 'id_card/5e3NeUCpVj0VdgnQlnpjoMqx6BjKN65MJXEZ24bp.jpg', 'student_card/ngiN37jsh7OTmGJuBtQiOL10BnF0dWtEJY0r7FPg.jpg', 'enrolle1/C6LtAX4hZ6QPfjIEpjlmX6Y3ekO4x1opiXIQEIT5.jpg', 'enrolle2/oz7adTmGCrg73caiMSrf1Hu3rKoQwXFynttX7vAl.jpg', 'enrolle3/w065uiLnwv0rXoyXIjWhn9PBxXOLbL78mQwFQ8NA.jpg', 'dis_cover_page/CPQyleAkqfA2JM1NpisZTJe0b7gOsWIzRYMhVU0q.jpg', 'cert_thesis_def/4P0AyeRl5to8IfTAtIEYxRFNY7wCsQmVxk6C2GeW.png', '2023-12-31 14:39:14', '2023-12-31 14:39:14'),
(19, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2023-2024', 'Licence 2', '12345678', '5 ans et plus', 'Sciences Economiques', 'Marketing et action commerciale', '2023-12-08', NULL, 1, NULL, 'birth_cert/9OZd07MZuViGZXeFTjEWRAfCPXlOM6dWVZTDA9id.jpg', 'cip/MzCZTKCgLsVkT89qQIEDrkAU2MbjbLZb5PQIYzL9.jpg', 'id_card/isDdkx00gpGc80BSAQc3Ef6lJb3GDjn0ktK93k9g.jpg', 'student_card/h0xdLPg2PryC9o0K28dwonHWrdQF7biE6OFTEx1u.jpg', 'enrolle1/k8HSjiAFRY6P9dD5rOHXwe7rzV0gK4X9awq3Sv73.jpg', 'enrolle2/k0p3SHWi0GGKeiIFS5sdC8vYtKfnb2q8RetvlrVZ.jpg', 'enrolle3/VGPSnK75IrsRqu2o0FKHK0sL0K51syupHIz0y7rd.jpg', 'dis_cover_page/6fgFy5HfzJDsYEj09vAB0i6gmkhoCdhkWxvN1w67.jpg', 'cert_thesis_def/PVL4KdbNzvh2mchsGFkPIJxwJGsxfLZsGpAsAQ7d.png', '2023-12-31 14:39:29', '2023-12-31 14:39:29'),
(20, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2023-2024', 'Licence 2', '12345678', '5 ans et plus', 'Sciences Economiques', 'Marketing et action commerciale', '2023-12-08', 'after training', 1, NULL, 'birth_cert/SB0xaPnprf9UxPmg3qU1paISGhZDv3pySvI7pFic.jpg', 'cip/SplUUpQVNHbWqRBBp7JlTEaWx7DcmYtJY8943reu.jpg', 'id_card/LY5Roam5TP95UxKGQpsbYQmjAsTJGAiUrFAdHnnz.jpg', 'student_card/JGuXFk0N12VNGxFD2TvD9Hid32f16bWhoH33jsiJ.jpg', 'enrolle1/ABs68Hmpz5mp2hklCqO0laCxn004HtL0ohKqmQFZ.jpg', 'enrolle2/1uYaMKqE6nDP9Noo11kM0z87tYcIgCGEjYeuKZgH.jpg', 'enrolle3/AJeWak85xWHfUmm5Lahehag18rf6BkywX2NSR0eO.jpg', 'dis_cover_page/u47KoBLb7IGLpaEwXlt4ftsHVdjlMV7DtcAZH5ui.jpg', 'cert_thesis_def/rzznrTb1kpAe4crun0Jl8eCKwh5z35NOZGwavepa.png', '2023-12-31 14:40:30', '2023-12-31 14:40:30'),
(21, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 1', '12345678', 'moins de 5 ans', 'Sciences Economiques', 'Economie Appliquée', '2023-12-08', 'kk', 1, NULL, 'birth_cert/tceqfjRmUSe1BRti6Mlt8xrSEHsMuFEbnjLRN0Os.jpg', 'cip/rylfXsauA9E47o8sdBugg78SLDRpaAQ4JntO0HnH.jpg', 'id_card/stDLmmDiBvV25m8ENHN3MvXlf4MPHYisOqBO8ZJG.jpg', 'student_card/6u07oP97ROVH4XyIjL8xf80TfwalcUlehq9wZVpD.jpg', 'enrolle1/PACiHu6SYu6Mg36o7SCJVGl2CqIYiN8j7VChCmdk.jpg', 'enrolle2/3Tq6Up1kzDCBTZZonjupmDuhU0hPXK8SmrhtmwRq.png', 'enrolle3/fWHM63BuHlvq9NYOMTOIdMmqe6jHbJY3aThnuP4T.jpg', 'dis_cover_page/wenNpvQqVdmqKOBfsH0QjeO6mizgkNfLpbMREmw8.jpg', 'cert_thesis_def/UCZCn4vevbX0MwSnrKbzC11eCTCRb7c6L5EmgZjb.jpg', '2023-12-31 15:05:23', '2023-12-31 15:05:23'),
(22, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 3', '12345678', '5 ans et plus', 'Sciences Economiques', 'Economie Appliquée', '2023-12-29', 'k', 1, NULL, 'birth_cert/HLtUMI1UPIxMyzzt9pYX4t0P0NfLL8H1BmvYYfh7.jpg', 'cip/mmTE2z7HNTeu1di6hQRP7MyHsUdaNgALZ5EqZveM.jpg', 'id_card/sGrQUTGsQuyNtt0bKIUK7buRHYSttduZeFP6cPAM.jpg', 'student_card/AkQZZWYCzpzONOEVIIEM7zZ2LOmkx8G4ND7QbTFW.jpg', 'enrolle1/DFeKpo4B1YXXHpXtZ2DN9FbxhoiMFsfu1bJS1J6m.jpg', 'enrolle2/PxvMtS3gnmgjdQ8emtH0Yqt5Ugmt7QnVMK0VOxGX.jpg', 'enrolle3/ZkT2wWKUKqH8hTmhi2agSl1U09ZdqcB5d24ESfVs.jpg', 'dis_cover_page/m57sb9ybU2RwcllrHyk7RdwCwe9HEYJqi3Qq1rMW.jpg', 'cert_thesis_def/DuQr8CErAZNke5ImW36GMxKa6rwbYW7LAcqFGAiV.jpg', '2023-12-31 15:21:41', '2023-12-31 15:21:41'),
(23, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 3', '12345678', '5 ans et plus', 'Sciences Economiques', 'Economie Appliquée', '2023-12-29', 'k', 1, NULL, 'birth_cert/E1SZqSjDET1MFBOToeIRv84EQUXTrqZVNz60O8MN.jpg', 'cip/BcupAJo51Fqy9cWJDhI55fjJYbbaQyXmhnIqFaEk.jpg', 'id_card/qjQ2x0cHAkCjyIyPP7RVhikWcOZoGXFXhKn8yFCH.jpg', 'student_card/Bd8VQt3ZHEdXPIvSERCsXXq5RJYOwPF6Q3eb9nRE.jpg', 'enrolle1/LCwHQI6XuvPa8q5MY2WXHj0sun3gf0a9g2zWLoLR.jpg', 'enrolle2/Jg1YHSQa3OuWibTefWcJrDyvu2GcwyxkI3f2Wgpb.jpg', 'enrolle3/ZEU5PfgYELQJNikBF0xdd216RsZMuxh8NziofodY.jpg', 'dis_cover_page/6rfh8FLSpS58hRe7nhB1G2lrKO2VabJQrQ2gZ5Yj.jpg', 'cert_thesis_def/1Bub4p0mEyYhLzXY5hGOqzgKVc4BRtRbLDnzoGUh.jpg', '2023-12-31 15:24:29', '2023-12-31 15:24:29'),
(24, 2, '+22967419414', 'ronaldoagbohou@gmail.com', 'Agbohou', 'Ronaldo', '2022-2023', 'Licence 3', '12345678', 'moins de 5 ans', 'Sciences Economiques', 'Economie Appliquée', '2023-12-29', 'k', 1, NULL, 'birth_cert/hmYlGj9kIKak9itN9MKk7w4FnnnvUBKrMWbpmGag.jpg', 'cip/rFO7cbR3yLzbsUoc11wHcWanSaA5Emj1eMjl2wAQ.jpg', 'id_card/8b0Z7NPD13tauo3lcV16oc6kQ4opgkWR0ksm7DeC.jpg', 'student_card/IJKfkZbRCpq1MlPVP50dDIqKQe18QSOpFRGamsAs.jpg', 'enrolle1/3BnW1kVruSioS6HvPafzbNWPOcVwQ6fFoBFbrTKo.jpg', 'enrolle2/0OLyP4rSTF2YpZSLvZBdvIECGjZggkGEsoa7zg9O.jpg', 'enrolle3/h1tt0PWlF04s7rEqWW3XXHxZ8p5oc4jy9ehoZ9Og.jpg', 'dis_cover_page/KIrjEGoT9fjLXEfhrckFpaDJ3Mo1OsdeooSIm886.jpg', 'cert_thesis_def/NnAnyjYa3QUWatI9rpasSP1z9JEMKF4SQMbzspaK.jpg', '2023-12-31 15:27:22', '2023-12-31 15:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `certificates_master`
--

CREATE TABLE `certificates_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defense_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_cert` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_fees1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_fees2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolle_defense` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_cover_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cert_dis_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cue_m1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cue_m2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates_master`
--

INSERT INTO `certificates_master` (`id`, `user_id`, `firstname`, `lastname`, `phone`, `email`, `ac_year`, `ac_level`, `mat`, `field`, `speciality`, `delay`, `defense_date`, `status`, `feedback`, `birth_cert`, `cip`, `id_card`, `student_card`, `enrolle1`, `enrolle2`, `school_fees1`, `school_fees2`, `enrolle_defense`, `dis_cover_page`, `cert_dis_def`, `cue_m1`, `cue_m2`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Master 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'moins de 5 ans', '2024-01-04', NULL, NULL, 'birth_cert/2o1HcHdPQTNH5Hezgh2xo6nSvBr7RqG2PetuNAKN.jpg', 'cip/EuJMtOaVTMaw6KaAdjKiNgfm1SDyB9LrWRGo2eJ6.jpg', 'id_card/1mrEcbfpe0VplJj0SO5Wxrwq8Jeh0IfApjStgR4K.jpg', 'student_card/KcmSSmtJW1Pqqc9O7A8DUMsyEPDqoD6tgkXcVvUA.jpg', 'enrolle1/dNDneDrvUM34yWxpgBhCbuPdPMmIaJxTFQjy801M.jpg', 'enrolle2/WsQXIi2Cy3aBP0cPVSjmbAPcjOGWqReTt9lmWCE3.jpg', 'school_fees1/okZG36XuzjfdtjQAhscDRIUkERdt6hN5nyWCuvJG.jpg', 'school_fees2/emzydMisWCrYraoiJZTLCPmT9KNpfSkmPEWAIC7I.jpg', 'enrolle_defense/sUOKUTOVxHVLrxHmzoxSdp8NfUWuZBoLmrLyLpIy.jpg', 'dis_cover_page/5FD41HcDrxq9XV6Bn1LtqRJeglhmUderD9RyPssC.jpg', 'cert_dis_def/Lhb7CpsEzxS2Vaf1Em8e18BrJwCIUrMSVfHgLOcl.jpg', 'cue_m1/qtTSlNoZkfVaOdfuoOqQHt20C82jG2yZjn6OGywU.jpg', 'cue_m2/LTOKtEjwsSj40hehijjxoU5ZyuJMMaikopcBjjjC.jpg', '4', '2024-01-01 07:58:56', '2024-01-01 07:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `claimant_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `claimant_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `claimant_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `claimant_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecue_sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiche_inscription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `feedback` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `student_id`, `claimant_firstname`, `claimant_lastname`, `claimant_phone`, `claimant_email`, `ac_year`, `ac_level`, `mat`, `field`, `speciality`, `exam_type`, `complain_type`, `ecue`, `ecue_sub`, `fiche_inscription`, `payment_proof`, `description`, `status`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 14:49:55', '2023-09-04 14:49:55'),
(2, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 14:55:12', '2023-09-04 14:55:12'),
(3, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 15:03:54', '2023-09-04 15:03:54'),
(4, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 15:06:56', '2023-09-04 15:06:56'),
(5, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 15:25:15', '2023-09-04 15:25:15'),
(6, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 15:33:44', '2023-09-04 15:33:44'),
(7, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 15:59:33', '2023-09-04 15:59:33'),
(8, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:03:44', '2023-09-04 16:03:44'),
(9, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:10:00', '2023-09-04 16:10:00'),
(10, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:10:56', '2023-09-04 16:10:56'),
(11, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:11:52', '2023-09-04 16:11:52'),
(12, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:17:52', '2023-09-04 16:17:52'),
(13, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-04 16:24:08', '2023-09-04 16:24:08'),
(14, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 2', '17104018', 'Sciences Economiques', 'Economie et Finance des Collectivités Locales', 'session de rattrapage', 'Omission de note', 'Macro3', 'MACRO', '', '', 'Test purpose', 0, NULL, '2023-09-04 16:41:07', '2023-09-04 16:41:07'),
(15, 2, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', '2023-2024', 'Licence 3', '12345678', 'Sciences Economiques', 'Economie et Finance des Collectivités Locales', 'session de rattrapage', 'Contestation de note', 'Macro1', 'Macro', '', 'la photo de la fiche d\'inscription envoyé n\'est pas du tout claire', 'Je ne suis pas d’accord avec ma note', 0, NULL, '2023-09-04 17:01:54', '2023-09-04 17:01:54'),
(16, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 3', '17104018', 'field', 'Economie et Gestion des Exploitations Agricoles', 'session de rattrapage', 'Omission de note', 'stat', 'mi', '', '', 'go', 0, NULL, '2023-09-04 17:30:35', '2023-09-04 17:30:35'),
(17, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2024-2025', 'Licence 3', '17104018', 'field', 'Economie et Finance des Collectivités Locales', 'session de rattrapage', 'Omission de note', 'Macro1', 'Macro', '', '', 'Test purpose', 0, NULL, '2023-09-04 18:43:11', '2023-09-04 18:43:11'),
(18, 2, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', '2023-2023', 'Licence 3', '12345678', 'Sciences Economiques', 'Economie et Finance des Collectivités Locales', 'session de rattrapage', 'Omission de note', 'Informatique appliquée', 'Math Info', '', '', 'Test this', 0, NULL, '2023-09-04 19:13:18', '2023-09-04 19:13:18'),
(19, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 3', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session de rattrapage', 'Omission de note', 'Droit des TICs', 'Droit', '', '', 'Ma note n\'est affichée sur la liste de la délibération.', 0, NULL, '2023-09-05 18:43:57', '2023-09-05 18:43:57'),
(20, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 3', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session de rattrapage', 'Omission de note', 'Droit des TICs', 'Droit', '', '', 'Ma note n\'est affichée sur la liste de la délibération.', 0, NULL, '2023-09-05 18:46:20', '2023-09-05 18:46:20'),
(21, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2024-2925', 'Licence 3', '17104018', 'field', 'Gestion des ressources humaines', 'session normale', 'Contestation de note', 'Comptabilité générale', 'Gestion avancée', '', '', 'Je ne suis pas d’accord avec ma note. Je mérite mieux', 0, NULL, '2023-09-06 10:58:28', '2023-09-06 10:58:28'),
(22, 4, 'Epiphane', 'HONVO', '+22966154804', 'honvoeiphane@gmail.com', '2022-2023', 'Licence 1', '13872320', 'field', 'Statistique et Econometrie', 'session normale', 'Omission de note', 'Vfjkvjl\'bj', 'Etcigj', '', '', 'Hggjjjjj', 0, NULL, '2023-09-06 17:31:37', '2023-09-06 17:31:37'),
(23, 4, 'Epiphane', 'HONVO', '+22966154804', 'honvoeiphane@gmail.com', '2022-2023', 'Licence 1', '13872320', 'Sciences Economiques', 'Tronc commun de Licence 1', 'session normale', 'Contestation de note', 'Yghnkhhk', 'Ghfhk', '', '', 'Hgjjhjkknbj', 0, NULL, '2023-09-06 17:43:16', '2023-09-06 17:43:16'),
(24, 5, 'Rosaline', 'Tchoumado', '69750515', 'tchoumadorrosaline@gmail.com', '2021-2022', 'Licence 3', '19409719', 'Sciences Economiques', 'Comptabilité et Finance', 'session de rattrapage', 'Omission de note', 'Economie', '1', '', '', 'Defaillance', 0, NULL, '2023-09-06 18:57:09', '2023-09-06 18:57:09'),
(25, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 3', '17104018', 'field', 'Economie et Gestion des Micro-Finances', 'session de rattrapage', 'Omission de note', 'Gdh', 'Bgi', '', '', 'Test', 0, NULL, '2023-09-07 19:35:23', '2023-09-07 19:35:23'),
(26, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 2', '17104018', 'Sciences Economiques', 'Comptabilité et Finance', 'session de rattrapage', 'Omission de note', 'Anglais', 'Droit', '', '', 'go here', 0, NULL, '2023-09-12 08:29:43', '2023-09-12 08:29:43'),
(27, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 2', '17104018', 'Sciences Economiques', 'Economie et Finance des Collectivités Locales', 'session normale', 'Contestation de note', 'Ut', 'Ty', '', '', 'Je ne suis pas d’accord avec ma note', 0, NULL, '2023-09-12 09:05:12', '2023-09-12 09:05:12'),
(28, 10, 'De', 'De', '623544525', 'de@gmail.com', '2022-2023', 'Licence 3', '000000', 'field', 'Gestion des ressources humaines', 'session de rattrapage', 'Omission de note', 'Macro', 'ECONOMICS', '', '', 'Je n’ai vu pas vu ma note sur la liste', 0, NULL, '2023-09-13 17:10:42', '2023-09-13 17:10:42'),
(29, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 2', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session de rattrapage', 'Omission de note', 'Macro economie avancée de developpement', 'MACRO', '', '', 'wanna give a try to the plateform', 0, NULL, '2023-09-18 15:19:09', '2023-09-18 15:19:09'),
(30, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2023-2024', 'Licence 2', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Omission de note', 'statistics', 'ECONOMETRICS', '', '', 'Can\'t see my grade', 0, NULL, '2023-09-20 07:35:34', '2023-09-20 07:35:34'),
(31, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'd', 'D', '', '', 'Do it', 0, NULL, '2023-09-21 17:05:07', '2023-09-21 17:05:07'),
(32, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'g', 'G', '', '', 'G', 0, NULL, '2023-09-21 17:18:27', '2023-09-21 17:18:27'),
(33, 12, 'Mathilde', 'DAAH-HOUEDJI', '53989380', 'mathildedaah@gmail.com', '2022-2023', 'Licence 1', '14272021', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais', 'Droit', '', '', 'j', 0, NULL, '2023-09-21 18:30:51', '2023-09-21 18:30:51'),
(34, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais', 'Droit', '', '', 'k', 0, NULL, '2023-09-26 12:32:11', '2023-09-26 12:32:11'),
(35, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'mi', '', '', 'l', 0, NULL, '2023-09-26 12:38:23', '2023-09-26 12:38:23'),
(36, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:00:50', '2023-09-30 12:00:50'),
(37, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:07:00', '2023-09-30 12:07:00'),
(38, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:12:21', '2023-09-30 12:12:21'),
(39, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:19:47', '2023-09-30 12:19:47'),
(40, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:23:30', '2023-09-30 12:23:30'),
(41, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:26:39', '2023-09-30 12:26:39'),
(42, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:27:15', '2023-09-30 12:27:15'),
(43, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:31:51', '2023-09-30 12:31:51'),
(44, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:42:38', '2023-09-30 12:42:38'),
(45, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:45:09', '2023-09-30 12:45:09'),
(46, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 12:46:12', '2023-09-30 12:46:12'),
(47, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 13:01:31', '2023-09-30 13:01:31'),
(48, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 13:14:54', '2023-09-30 13:14:54'),
(49, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 13:16:25', '2023-09-30 13:16:25'),
(50, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', '', '', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 13:24:59', '2023-09-30 13:24:59'),
(51, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquee', 'session normale', 'contestation de note', 'Macro-Micro', 'STATS', NULL, 'C:\\Users\\Admin\r\nonaldo Dropbox\\Ronaldo AGBOHOU\\Mon PC (ronaldoagbohou)\\Desktop\\Presentation\r\neset\\assets\\img\\apple-touch-icon.jpeg', 'j\'ai eu un souci avec ma note', 0, NULL, '2023-09-30 13:45:59', '2023-09-30 13:45:59'),
(52, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', NULL, NULL, 'htyydh', 0, NULL, '2023-10-16 11:50:06', '2023-10-16 11:50:06'),
(53, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', NULL, NULL, 'htyydh', 0, NULL, '2023-10-16 12:08:51', '2023-10-16 12:08:51'),
(54, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', NULL, NULL, 'htyydh', 0, NULL, '2023-10-16 12:09:56', '2023-10-16 12:09:56'),
(55, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', NULL, NULL, 'htyydh', 0, NULL, '2023-10-16 12:11:45', '2023-10-16 12:11:45'),
(56, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', NULL, NULL, 'htyydh', 0, NULL, '2023-10-16 12:13:05', '2023-10-16 12:13:05'),
(57, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2025-2026', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', 'complaint_files/64iAn59mcl1hxspqjpdgbz9exiNkyWBwkzMO4Tco.jpg', NULL, 'htyydh', 0, NULL, '2023-10-16 12:18:54', '2023-10-16 12:18:54'),
(58, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'stat', 'Macro', 'complaint_files/KTOAgjAmJhJ79K4kG5W268SN2RMqDC0hu2WkF90R.jpg', NULL, 'jh', 0, NULL, '2023-10-16 17:36:46', '2023-10-16 17:36:46'),
(59, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/TcR3Oy3N3SkmQDwqmOZtUNl3pv5EVenxyjqkFSvE.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 00:44:41', '2023-10-23 00:44:41'),
(60, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/CWXJBidCo17N8NmM9O21SGR2gjfgEtzNJCBDJd9i.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 00:45:00', '2023-10-23 00:45:00'),
(61, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/n2KZZMBaNYE8YfCV19ANQgvZDxNsDtyjtwinimrA.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 00:47:35', '2023-10-23 00:47:35'),
(62, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/bSPCTRyUzib1DLOHEVlUIRXzcAgFeQxmLmTqUh00.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 00:50:20', '2023-10-23 00:50:20'),
(63, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/RjJZxqTHXqbyLsQpERftOWp6vH3LRx9HkCedbaxr.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 00:51:40', '2023-10-23 00:51:40'),
(64, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'ega', 'session normale', 'session normale', 'Macro-Micro', 'jhy', 'complaint_files/HYIVyHqcke0ZONyWO9mL8lAodWqs0XdIMNVL7DZm.jpg', NULL, 'j\'ai eu un souci avec ma note', 0, NULL, '2023-10-23 01:09:53', '2023-10-23 01:09:53'),
(65, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Tronc commun de Licence 1', 'session de rattrapage', 'Omission de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/8p32OxZYnykLXHZU2VjgaT9wlIRUR5TJBEceQfkC.jpg', NULL, '12', 0, NULL, '2023-10-23 01:24:21', '2023-10-23 01:24:21'),
(66, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/ReMsA0dEVbBJxgA91OYChxTx5Xh3uxCQirl1bUJ3.jpg', NULL, 'stepping on', 0, NULL, '2023-10-23 08:11:07', '2023-10-23 08:11:07'),
(67, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/yz8gNLQVT0hrF5TXIl7Uuc2eqv06WeBx85kLewEH.jpg', NULL, '4', 0, NULL, '2023-10-23 09:03:48', '2023-10-23 09:03:48'),
(68, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/RtkK4U89Adt4zUR6EXSMERLwPyKMGlOuTF7rhQH7.jpg', NULL, NULL, 0, NULL, '2023-10-23 10:22:04', '2023-10-23 10:22:04'),
(69, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/9dNBxdYyZVIS237E54TiEmtpGKzMrEfBCqXYqctO.jpg', NULL, NULL, 0, NULL, '2023-10-23 10:22:19', '2023-10-23 10:22:19'),
(70, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/zzCTHJWos57ZsDLzB6DJcpCzlBuCileccADByCMd.jpg', NULL, NULL, 0, NULL, '2023-10-23 10:23:10', '2023-10-23 10:23:10'),
(71, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/ZDkVOajwuz37z76VebsHvKqhlUs2zX5G2dO2dUMJ.jpg', NULL, 'go', 0, NULL, '2023-10-23 17:07:15', '2023-10-23 17:07:15'),
(72, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/tzmq9zZLhrCR13vDlK2qT9nXWOPqo1IZUfynuUpd.jpg', NULL, 'kl', 0, NULL, '2023-10-23 18:57:24', '2023-10-23 18:57:24'),
(73, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie et Gestion des Exploitations Agricoles', 'session de rattrapage', 'Omission de note', 'Anglais commerciale', 'Economie', 'complaint_files/VwKx6uNnEpKRhJLdYrJgLsTpeDCds46BIYXpkFpy.jpg', NULL, 'sample of here', 0, NULL, '2023-10-25 10:27:47', '2023-10-25 10:27:47'),
(74, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/G7OXjEOZzqq3mAokivnMJwbio4BA03zOMmiYsrzH.png', NULL, 'x', 0, NULL, '2023-10-25 20:05:19', '2023-10-25 20:05:19'),
(75, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Gestion des ressources humaines', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/4rvzv4yMTcRh7xlELVLEha6PAIz4PZS4eci0479Z.png', NULL, 'linoin', 0, NULL, '2023-10-26 10:29:15', '2023-10-26 10:29:15'),
(76, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/kx0Ihq7r6QG3FvmgjlS9CqhEBMk4PtIWjato98Mk.png', NULL, 'bv', 0, NULL, '2023-10-27 08:17:51', '2023-10-27 08:17:51'),
(77, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/eDiW2oJaby5HrDu0VMSmE7oL9Txro0ME83q7SCc4.png', NULL, 'I want you guys to make it more flexible students', 0, NULL, '2023-10-27 13:00:35', '2023-10-27 13:00:35'),
(78, 1, 'Emma', 'Smith', '1234567890', 'emm@example.com', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie et Finance des Collectivités Locales', 'session de rattrapage', 'Omission de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/gV8uKpICU3D85EICnMTiFfSg8CU9Anlcp0TQfUGp.png', NULL, 'j', 0, NULL, '2023-11-09 13:05:58', '2023-11-09 13:05:58'),
(79, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/2oidRxI9vQt4ZJm6WAYrwO49g3D6P6CHVze8HRyn.jpg', NULL, ';k', 0, NULL, '2023-11-13 17:51:41', '2023-11-13 17:51:41'),
(80, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/i6l2vXv38PvsktScGEiDwBj48c7ejpCNFT51EyoT.jpg', NULL, ';', 0, NULL, '2023-11-13 18:38:14', '2023-11-13 18:38:14'),
(81, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/uI7FdlqoIHZBQVbwnSbXYDRSG4ahGp844RVqHH40.jpg', NULL, ';', 0, NULL, '2023-11-13 18:43:12', '2023-11-13 18:43:12'),
(82, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/hoWfjYD4O4dYDwrZwARIzbjan4xsiRG4bj9wKuAa.png', NULL, 'k', 0, NULL, '2023-11-18 13:16:04', '2023-11-18 13:16:04'),
(83, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/0rvAWOzzi1QpKzEgrQ4xBJLjTaalvtU8IFyYTtgO.png', NULL, 'k', 0, NULL, '2023-11-18 13:16:28', '2023-11-18 13:16:28'),
(84, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/QyESbshtDlTyV52gdz5Hm8JDjtTbeUMJi8v5KmYB.jpg', NULL, 'this is a sample of training that people need to make use of  in order to stand as a student and ask anyhtignrelated to the fact that we ave some more thing that we are supposed to be doing\r\nnothing to great or higher than the one they are gonna make use of\r\n\r\nset purpose and great idea', 0, NULL, '2023-11-27 18:05:32', '2023-11-27 18:05:32'),
(85, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/JET0l2LmD2q8R1q317JwT5GkBkMIIR05jBB22LlY.jpg', NULL, 'this is a sample of training that people need to make use of  in order to stand as a student and ask anyhtignrelated to the fact that we ave some more thing that we are supposed to be doing\r\nnothing to great or higher than the one they are gonna make use of\r\n\r\nset purpose and great idea', 0, NULL, '2023-11-27 18:08:36', '2023-11-27 18:08:36'),
(86, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/8YoB4MASuSlGP3T4j32oM19OVJucctGIeuU7Yuff.jpg', NULL, 'this is a sample of training that people need to make use of  in order to stand as a student and ask anyhtignrelated to the fact that we ave some more thing that we are supposed to be doing\r\nnothing to great or higher than the one they are gonna make use of\r\n\r\nset purpose and great idea', 0, NULL, '2023-11-27 18:08:46', '2023-11-27 18:08:46'),
(87, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Macro1', 'Droit des affaires-Anglais commerciale', 'complaint_files/oZHC8jslFD8vvptKIxYqz3G7XFZk2ByIHU22mRaJ.jpg', NULL, 'this is a sample of training that people need to make use of  in order to stand as a student and ask anyhtignrelated to the fact that we ave some more thing that we are supposed to be doing\r\nnothing to great or higher than the one they are gonna make use of\r\n\r\nset purpose and great idea', 0, NULL, '2023-11-27 18:09:15', '2023-11-27 18:09:15'),
(88, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/ixJsY3NmcVTaiPRkS1HSYzWVfw9XpShDEY8IDqA0.jpg', NULL, 'jhgi', 1, NULL, '2023-12-08 13:10:07', '2023-12-08 13:10:07'),
(89, 28, '4', '4', '658455555', '4@gmail.com', '2022-2023', 'Licence 1', '88888889', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/ZNyxIudnhN3skRI1YupLbUKaHtvwSti3Y55R8Vll.png', NULL, 'pas bon', 1, 'votre demande est en cours de traitement', '2023-12-08 16:47:52', '2023-12-08 16:47:52'),
(90, 30, 'bob', 'Marley', '54862016658', 'bob@gmail.com', '2022-2023', 'Licence 1', '54863213', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/Kd509oqyyUlXOafypaaUIuiainzRpzp0RY6Se3J8.png', NULL, 'tgf', 1, NULL, '2023-12-09 06:07:46', '2023-12-09 06:07:46'),
(91, 30, 'bob', 'Marley', '54862016658', 'bob@gmail.com', '2022-2023', 'Licence 1', '54863213', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/M4ZAdu37j0ymTTTdA5jZrPlig5WkrZcixGfnSFbu.png', NULL, 'hjjj', 1, NULL, '2023-12-09 06:32:56', '2023-12-09 06:32:56'),
(92, 35, 'gogan', 'joel', '54555555', 'joel@gmail.com', '2022-2023', 'Licence 1', '22222200', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/qLp7pUeU4qFT3Sm4LwyrR74qEu5TzNp8j8clSh6v.jpg', NULL, 'go', 1, NULL, '2023-12-15 09:23:22', '2023-12-15 09:23:22'),
(93, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/qYMmvkGVWTKJXHVaHXp7fqQEeb63RJ3czfqg5kXa.jpg', NULL, NULL, 1, NULL, '2023-12-20 17:24:03', '2023-12-20 17:24:03'),
(94, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Master 2', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/Dbj7zuqiB32bjFYIMWqTjMgG4XNcyB4JIXa9QPDA.png', NULL, 'b', 1, NULL, '2023-12-23 20:58:52', '2023-12-23 20:58:52'),
(95, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Master 2', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/n5PJlO22T7uvHfqqZmMG3GRXJ7bayAEUdU2Cx58u.png', NULL, 'b', 1, NULL, '2023-12-23 21:03:14', '2023-12-23 21:03:14'),
(96, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Master 2', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/sq5zo5GK8IYHckxyHCJ3NBssuZ6qAKso8Tp1t0f4.png', NULL, 'b', 1, NULL, '2023-12-23 21:08:00', '2023-12-23 21:08:00'),
(97, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/OOLHR8A3YZBgcNvFxpYc1t9X4JM6RGxxKy4Jw46M.jpg', NULL, 'k', 1, NULL, '2023-12-29 09:19:27', '2023-12-29 09:19:27'),
(98, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/7wkJIDbX35WGPwK3NAQ8y3efxURRtv8v1OKNVEzD.jpg', NULL, ',', 1, NULL, '2023-12-29 09:33:06', '2023-12-29 09:33:06'),
(99, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/5AshTsHB6ZaKyG79KrK2k47jyn61NB7PZIq9QMNG.jpg', NULL, '^j', 1, NULL, '2023-12-29 09:42:32', '2023-12-29 09:42:32'),
(100, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/pPcMKo4sPCmuhfhgEBuNuL7W08vMmnpiFB26Z4na.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:49:10', '2023-12-29 09:49:10'),
(101, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/RnxnHq2GRsGB3WA6q1Oz7KCWRtmxCtPN0UwNxjLz.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:51:00', '2023-12-29 09:51:00'),
(102, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/wIo04TaPlF9XvMq258N4hrxVb0gvosmj4uv5NXpP.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:52:10', '2023-12-29 09:52:10'),
(103, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/fYBkOSRrA0OIxX5ZuIjwtb7RoO8foUHTXsCck0JP.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:52:33', '2023-12-29 09:52:33'),
(104, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/oT6sDkKBepSJ81tOQEby9iSQm6A15I4gPSYkeEJB.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:52:43', '2023-12-29 09:52:43'),
(105, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/ak3KuLaWaWbHpvs8Wdd9iqUkQ4Hj68hjOcmPJ0Af.jpg', NULL, 'j', 1, NULL, '2023-12-29 09:57:38', '2023-12-29 09:57:38'),
(106, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/Dgryjnusi84nRWlukQpOJ5f6Gu9gafkW1i4DIPkW.jpg', NULL, 'n', 1, NULL, '2023-12-29 09:58:02', '2023-12-29 09:58:02'),
(107, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/Zs06FQCnJo9Edi3vSl5AxyRnWi4Cn70CvOjIydLF.jpg', NULL, 'n', 1, NULL, '2023-12-29 09:58:18', '2023-12-29 09:58:18'),
(108, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/uuba1q6yW23PcWRPH9S3bsv2S6sKFAmXEdCJif5R.jpg', NULL, ',', 1, NULL, '2023-12-29 09:59:18', '2023-12-29 09:59:18'),
(109, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/1nqnGnRgNbrTZHB9UwOumSsaHeDeihgUAfkY8DBR.jpg', NULL, ',', 1, NULL, '2023-12-29 09:59:47', '2023-12-29 09:59:47'),
(110, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/85SGcn6L4EaNuTysuZk9MKNHI5ZA715mLSYIxuyi.jpg', NULL, ';', 1, NULL, '2023-12-29 10:01:14', '2023-12-29 10:01:14'),
(111, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/ay2SiAF79xtzUWc9yGKcOYBKs9oCT2b0wYm8XhSv.jpg', NULL, ';', 1, NULL, '2023-12-29 10:01:32', '2023-12-29 10:01:32'),
(112, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/xSZfMqgYjhEm87qRiTmwAewJsjUyzosTb24o9KIa.png', NULL, ';;', 1, NULL, '2023-12-29 10:07:49', '2023-12-29 10:07:49'),
(113, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'session normale', 'Contestation de note', 'Anglais commerciale', 'Droit des affaires-Anglais commerciale', 'complaint_files/VauNGS7PFpfwy6SeSBZrKowlPfpOZXSk3cNLrfWv.png', NULL, ',', 1, NULL, '2023-12-29 10:09:32', '2023-12-29 10:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `diplomas`
--

CREATE TABLE `diplomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `feedback` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiche_inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diplomas`
--

INSERT INTO `diplomas` (`id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `ac_year`, `ac_level`, `mat`, `field`, `speciality`, `description`, `status`, `feedback`, `fiche_inscription`, `created_at`, `updated_at`) VALUES
(1, 1, 'Emma', 'Smith', 'emm@example.com', '1234567890', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'gr', 1, NULL, 'diploma_images/KOW44NjV636haIAz188x9gnUyKPwbc1w0Kws3Tm8.jpg', '2023-10-24 11:12:38', '2023-10-24 11:12:38'),
(2, 1, 'Emma', 'Smith', 'emm@example.com', '1234567890', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', 'gr', 1, NULL, 'diploma_images/b5lHeIRc1zd9uAk53t5TaVP9AQwX4IU0XrO2pZHX.jpg', '2023-10-24 11:13:59', '2023-10-24 11:13:59'),
(3, 1, 'Emma', 'Smith', 'emm@example.com', '1234567890', '2022-2023', 'Licence 1', '17104018', 'Sciences Economiques', 'Economie Appliquée', '!!', 1, NULL, 'diploma_images/DP6zd4m05bZw71QRMhFJFbMWxrsGLCnneewdKUML.jpg', '2023-11-09 14:19:42', '2023-11-09 14:19:42'),
(4, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'illk', 1, NULL, 'diploma_images/vVSNeDBiVKZ0Tu8kqI3WNcjTTB489wulZQjHZ4hW.jpg', '2023-11-13 18:49:26', '2023-11-13 18:49:26'),
(5, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'jj', 1, NULL, 'diploma_images/BinmEXXor4LCA5S7V929pEojx8jYDDBbjvTISAT3.png', '2023-12-08 12:39:27', '2023-12-08 12:39:27'),
(6, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'mknjmpikn', 1, NULL, 'diploma_images/p1Y4MrztrmmzR6MG7Did2zlfQnIMkMpzlKRh8EAA.jpg', '2023-12-08 13:08:07', '2023-12-08 13:08:07'),
(7, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', '/', 1, NULL, 'diploma_images/HMczmWZGZtkJdf5cGViSsJeMHpmDLJcRJ0G9SAfz.png', '2023-12-29 13:28:07', '2023-12-29 13:28:07'),
(8, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'j', 1, NULL, 'diploma_images/P81zeSVbHiNPSH0odLUvZuBMES5uXaqxItj2XJnz.jpg', '2023-12-29 13:31:23', '2023-12-29 13:31:23'),
(9, 2, 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'j', 1, NULL, 'diploma_images/6liRmolllIepKJkpPz5KbjQZsdzjMpGYw9tQku8x.jpg', '2023-12-29 13:33:51', '2023-12-29 13:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `dup_transcripts`
--

CREATE TABLE `dup_transcripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiche_inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dup_transcripts`
--

INSERT INTO `dup_transcripts` (`id`, `user_id`, `firstname`, `lastname`, `phone`, `email`, `ac_year`, `ac_level`, `mat`, `field`, `speciality`, `exam_type`, `status`, `feedback`, `fiche_inscription`, `cip`, `inscription`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'Semestre 1', NULL, NULL, 'transcript_images/0vsY84pSpvh55j3AbTYu4lD9ZwbnCGWkZ9ZoGAb5.jpg', 'transcript_images/T44JrMC47rCRXBwO9byhdufxH91Ruonva9AqNO9G.jpg', 'transcript_images/GMjJq5k9RSqKOMVHs834qTZ6BgLfXaogEq2oZvBB.png', 'j', '2023-12-30 10:37:05', '2023-12-30 10:37:05'),
(2, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'Semestre 1', NULL, NULL, 'transcript_images/UbuQ0qF2oUD5PVyObYI6tJT7teZpPjlqm13y5ZE9.jpg', 'transcript_images/H5yLHMclZBNSP2yUEVDA9blA5qDHzYJUJlrT0Ymf.png', 'transcript_images/DrfFMmAoNLQQpiGjbLvsrG5LzULya2wVJ3cbTDj7.png', 'n', '2023-12-30 10:40:32', '2023-12-30 10:40:32'),
(3, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'Semestre 1', NULL, NULL, 'transcript_images/MScFpt42e9MyCWuyDsiT2W7kc0tvlfDCbhCnHggU.jpg', 'transcript_images/7UgcKpjTCzY6A7MJGU9Zv7KqLamfY92boDI3o1pN.jpg', 'transcript_images/X0UcelorxFzUv4QNnC1bydIkfJ3ckeRbitYepHKy.jpg', 'n', '2023-12-30 10:43:52', '2023-12-30 10:43:52'),
(4, 2, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', '2022-2023', 'Licence 1', '12345678', 'Sciences Economiques', 'Economie Appliquée', 'Semestre 1', NULL, NULL, 'transcript_images/QvZe2lMZuHffzj7y2wB96z8AJCUXPgwcN1CJWUqR.jpg', 'transcript_images/bmHfipoQZDAPd8XEJsPeMETRt7AZzWflvyUdNghd.jpg', 'transcript_images/CgEXbX1uGMUIekjY08ecmq0EFZ19EDpCq0BfStiL.jpg', 'n', '2023-12-30 10:46:17', '2023-12-30 10:46:17');

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
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `complaint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `diploma_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages_table`
--

CREATE TABLE `messages_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages_table`
--

INSERT INTO `messages_table` (`id`, `sender_firstname`, `sender_lastname`, `send_phone`, `sender_email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:04:55', '2023-09-06 16:04:55'),
(2, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:22', '2023-09-06 16:05:22'),
(3, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:23', '2023-09-06 16:05:23'),
(4, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:23', '2023-09-06 16:05:23'),
(5, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:24', '2023-09-06 16:05:24'),
(6, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:24', '2023-09-06 16:05:24'),
(7, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:24', '2023-09-06 16:05:24'),
(8, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:25', '2023-09-06 16:05:25'),
(9, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'Hint', 'Take care', '2023-09-06 16:05:25', '2023-09-06 16:05:25'),
(10, 'Dario', 'Isma', '+22996965829', 'darioabissi0@gmail.com', 'Demande d\'information', 'Ksklqklfllsls lslqlsn', '2023-09-06 19:25:54', '2023-09-06 19:25:54'),
(11, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:19:17', '2023-09-13 17:19:17'),
(12, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:19:53', '2023-09-13 17:19:53'),
(13, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:20:04', '2023-09-13 17:20:04'),
(14, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:20:08', '2023-09-13 17:20:08'),
(15, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:20:11', '2023-09-13 17:20:11'),
(16, 'De', 'De', '623544525', 'de@gmail.com', 'Test', 'This message is for test purpose', '2023-09-13 17:20:13', '2023-09-13 17:20:13'),
(17, 'Ronaldo', 'Agbohou', '97247851', 'ronaldoagbohou@gmail.com', 'A quand la délibération', 'Veuillez me fournir', '2023-09-14 08:49:36', '2023-09-14 08:49:36'),
(18, 'Ronaldo', 'Agbohou', '+22967419414', 'ronaldoagbohou@gmail.com', 'go', 'w', '2023-11-09 14:46:32', '2023-11-09 14:46:32');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_23_184541_create_students_table', 1),
(6, '2023_08_23_184542_create_teachers_table', 1),
(7, '2023_08_23_184543_create_complaints_table', 1),
(8, '2023_08_23_221047_create_subjects_table', 1),
(9, '2023_09_02_112304_create_messages_table', 1),
(10, '2023_09_04_162144_create_images_table', 2),
(11, '2023_09_22_141537_create_password_resets_table', 3),
(12, '2023_10_18_181741_add_password_reset_columns_to_users', 4),
(13, '2023_10_24_084028_create_transcripts_table', 5),
(14, '2023_10_24_094202_create_certificates_table', 6),
(15, '2023_10_24_100110_add_additional_fields_to_certificates_table', 7),
(16, '2023_10_24_113529_create_diplomas_table', 8),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 9),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 9),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 9),
(20, '2016_06_01_000004_create_oauth_clients_table', 9),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 9),
(22, '2023_11_13_091916_create_sessions_table', 10),
(23, '2023_12_08_125051_create_admins_table', 11),
(24, '2023_12_08_130735_create_images_table', 12),
(25, '2023_12_30_084702_create_dup_transcripts_table', 13),
(26, '2023_12_31_171851_create_certificates_master_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'api-token', '368bdd38bb0815f042e96fa10e759b35bd7825efd57ae061757ab0315b33ab8f', '[\"read\"]', NULL, '2023-11-03 09:39:41', '2023-11-03 08:48:07', '2023-11-03 09:09:41'),
(2, 'App\\Models\\User', 2, 'api-token', '0a26e5b37c78376d03bfdcf8a865a13bc4607ea70fefd73e4c3594e4bac99002', '[\"read\"]', NULL, NULL, '2023-11-03 09:12:47', '2023-11-03 09:12:47'),
(3, 'App\\Models\\User', 2, 'api-token', '018ee4d12f74196f0524f0b73f0addb04bf84b69206838e8f4fb4330009c905d', '[\"read\"]', NULL, NULL, '2023-11-03 09:13:49', '2023-11-03 09:13:49'),
(4, 'App\\Models\\User', 2, 'api-token', '33239920337f6c9c94ce7dac5606db635e3e750b194d03091d11086996fdf58b', '[\"read\"]', NULL, NULL, '2023-11-03 09:16:24', '2023-11-03 09:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5498VB3336ejbucVFlou4YYzXuulPVvF6DPQE7M1', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic043aFlsbnNKWFp1enJFVkNRajlwMFVVTXpNVGpLTllKa1JtckM0dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jZXJ0aWZpY2F0ZV9mb3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704037230),
('9fEoUH8i2t4pBvNccgz94v59vj0lgawunZ0XRHFZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQk9TQk1hT2FEc3YwY0plWUk1cGhLRmJINGJnMFlpbWRWeGFaNUNTWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jZXJ0aWZpY2F0ZV9mb3JtIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704094607),
('akJRBiVALymhF2TrR61Fnmt8RLjV78YipdIkT5Ne', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiazFGcTZyWlY1d1R5Zk1qS1NBSzVsUWtsZVAwVDhYNUEwbTBpMWpLbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3RyYW5zY3JpcHRzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704057445),
('bbZnQW7kkYS4ZmfwIKCMHcpH2ffOPCWxnnNKat6I', 35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Avast/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoialBoZTRLOFk4Y0xIdGtsY09kenYwRmE0Yno5c0RIdnJCa0lJYUJrWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM1O30=', 1704036216),
('c1FX65JqKAw7Fi84yXYVCFgMekzUOSzLpuRtDJKg', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWHM3QWlmQzhyU0dGMHBTQjdmN0VPTWhndFNNVnFEVndncUZFM0kyZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704034815),
('cJhscB2GwkkBrMcRzhhmeNqmOA4x0HOyfCMKKlLU', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZWl5NnVGcTQ5SngxaDVnQnV1eFljY2JkalJUOWJqeFBvMHdocTdacCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm1fbWFzdGVyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jZXJ0aWZpY2F0ZV9mb3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704060936),
('eGnBQfsyEzh8uYzzMgQacx2sLc0ChRPLgAm2MGUi', 35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Avast/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiemRFcmJ3bmlkd2V1Q3ZnZ3lxQ2c2QW4wTHR0cjF1OVlFeHN2ODFiYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM1O30=', 1704032253),
('hzfXPlpyACsrTrBdpzbIMaQQ0wbsNbUCc3ysoGzx', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkxaWEczdFY5UnNtVjhsNndqRGN2UUNYT1E2ZmFoTWI0NGxOR2ZWViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704031114),
('jwJJeJlCJoCA42bvSq4Qsxhd7eRByTOfVQCIcEnn', 35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Avast/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYWt2QTAxRTJ0R2dJWEJoc1pJa1I3bDhMelMxWnNTWTAxanNER3JaWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM1O30=', 1704034802),
('k7KTuF1Wv4ShWojB3hppopWhtxSKz1lhLa4BzRnZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTnhRZUl2bmszakNrQ2szQmF1Z1Fmek10cmZJWUZJTmRBNXdldkEzRCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm0iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RyYW5zY3JpcHRfZm9ybSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704100605),
('Kt84TtfXaSLenjufC966qgaUDedrHpHqiTcg8ufK', 35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Avast/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia3pQU0lyWUw2c2MwN2ZaZWZNSE9LVWFmTnRlU1l4Q2tMZ3BhRmFQNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM1O30=', 1704033458),
('MRJox9HtFUZFCQV2HoR7PV5Fh4NhQUkoMWQYCfwb', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibGo4Qk1iUWw3ekxjRnJVd0pKRWxIYnhYYnROeVM2cm9BUUFpNDhFMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704031086),
('RrpaH5XpgH99cKyRpazSRi59LPAGtkiT8eMGnxcb', 35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Avast/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFZybUJBMWU5NlBkNUw1NkNzN1Noa3A0MFJpY0RPeWpYMWJua3BKTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM1O30=', 1704030924),
('S3QhgGCZRjLSIhFb2e14wOtmVFmg67E1eHtl62Ee', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 OPR/105.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid0hzaGdsZzJ6UEhvZWJzODVCN1dPRTQzdEJGRW9SWGc0eHBNbllmdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704034846),
('S6DN7KykZmDjhkuTWNfKkSVzkeFhuiLoMFzxlYkS', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidDNyNkVPeU9CbG9EVGdpNGY5TmJ4T1RYaDBpN0lWQ1ZzOFlSZXBndSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2NvbXBsYWludHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1704034962),
('s8hJy0YOpqN1BivM7GgLdyWwMQFvWr7ErpF1Xr6f', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN29SOTdXUUhKamdUaDNUcFhXbUVhNnI1Tko3dktjNTR4ZGNuVzBIYSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm1fbWFzdGVyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cmFuc2NyaXB0X2Zvcm0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1704052524),
('SNdOQcm5mAEhEy9vgPdFZth4G7TQCT7s7iLqCe4h', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTlJ2RFJ2N081Zk55VUM5bXNwNFJnaGNHRm1JTGlPYnJLZjVPemVBeiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm0iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1704066792),
('tPYK0XcXNkVL16ZNMhzCWxuBxZX3apKT3RUvzHTp', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 OPR/105.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVzZ5UEZubkt3bEd6RUhDdmc0SnZjbnp0b2dzVEp4NVRzOXJoTVVrUyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luX3Bvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704030987),
('TuG7Z5nvEIkXSOFqfuurShaRxSmrfpDEpK4MUHOV', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmpHd1J2bFR0bk4ydGhJTzA3c2pqVE5LZU5GR3pCdGY5SDBOTHkxNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704032733),
('vi9Ne9Br1FZ3BoBG8nceF8kieDt9Z2nQUNvSDNDq', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ2lxclZhNVM0Rk03MnV6M2hVSndGQldVd3U0Qm1iTDNOb1FqSzhkRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jZXJ0aWZpY2F0ZV9mb3JtX21hc3RlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704058727),
('vrmzJBvnMcwg52e3SI0SnfMlgfdnnkHO2IAOjFsW', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidWNZMDE3VWF6bjNsNXZ2Yzd2RXZuWFUwcGZvSTJxSE1uR3ZZYmZDYyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm0iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlcnRpZmljYXRlX2Zvcm1fbWFzdGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1704041095),
('YfRbvqmf3LlualSF1Fbl6uyZZ8hPV3ypyOp8VLzl', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiekdjUWpGcWpLUklmZkhRWFlZMUhaR3g1OTExVEZvN0lzTkM4SWd6VSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704143296),
('ZdFdfer9hY9rPFZRxeNSdRKp0KdoLsNIWDKURtnx', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiekZJb1ZOS1NzMGRhNlJPd3lhQTYwUjBiYkpVSlA5NE5FVERhWWZ4TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1704032779);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `student_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transcripts`
--

CREATE TABLE `transcripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ac_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiche_inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `feedback` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transcripts`
--

INSERT INTO `transcripts` (`id`, `user_id`, `ac_year`, `ac_level`, `mat`, `exam_type`, `field`, `speciality`, `training_type`, `fiche_inscription`, `cip`, `inscription`, `description`, `status`, `feedback`, `created_at`, `updated_at`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, 2, '2022-2023', 'Master 2', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', NULL, 'transcript_images/dSA4rmXWgV6gVQiGWvh3p96XNXSgKgOJDlls1X6P.jpg', 'transcript_images/0fA71PqYdQ20tU6V7Omdulk1qls2kjrUJ81ROJhY.jpg', 'transcript_images/9pPocFfPER0plOdvxm9Am7cEHowZz3LVUX4fOdc1.jpg', 'gfg', 1, NULL, '2023-12-20 17:04:22', '2023-12-20 17:04:22', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(2, 35, '2022-2023', 'Licence 1', '22222200', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', NULL, 'transcript_images/Cn033VwmUozOJAkFJvSDzX6Z5CmSYXLe6fgGz713.jpg', 'transcript_images/St3eEI4tguegkFP9WGMNgKLZXABPyNxbEk852rG9.jpg', 'transcript_images/Slm9nOgtBYoIv5NndEi5pbKX0GMh6Zw5SuDqXViF.jpg', 'go', 1, NULL, '2023-12-20 21:05:56', '2023-12-20 21:05:56', 'gogan', 'joel', 'joel@gmail.com', '54555555'),
(3, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie et Gestion des Micro-Finances', NULL, 'transcript_images/4sroDyxrAqEWX2IHNqZtzC91HfwLlFY5kwcWInJk.png', 'transcript_images/8jAndEwmqa6SoMiSaej867nBLVEl8Ec3lwLx7AWN.png', 'transcript_images/nrYz9XydfskA9jnI17H78rTAJ6fN0hFlN1HtI7S9.jpg', 'je \r\nveux passer un test', 1, NULL, '2023-12-23 21:17:01', '2023-12-23 21:17:01', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(4, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'paid_training', 'transcript_images/qQHN93mZikCW6ejthZPF8wlOBQCZNjUiJKJ1bQF4.jpg', 'transcript_images/KTisf2skXyVtlf4ZqcOgunOGdpUPPJ9vIdDdCjDm.jpg', 'transcript_images/IwgAg3KAC55m7xrFglFoKAUmIbPWbuQHonSx4eTM.jpg', 'hj', 1, NULL, '2023-12-30 01:57:09', '2023-12-30 01:57:09', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(5, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'non_paid_training', 'transcript_images/XLwa7ub3ePbtigBdlxUQUtiSubaHbX7jiedbESEn.jpg', 'transcript_images/pAqCD6Ga8EOSItvcTE5xADCvQRgNwV9cOLsbuxZr.jpg', 'transcript_images/ygxWs9QZMoKRi7JCd803SCNgAunkTk7G5yciKhod.jpg', 'hj', 1, NULL, '2023-12-30 01:58:10', '2023-12-30 01:58:10', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(6, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'more_than_five', 'transcript_images/au1cu6JKUgLyUUZ16U95LrxmLvsVbG4ezxg6kyDX.jpg', 'transcript_images/2pV8WWiNZXho0twRn2CB304lK2lw3NCRUAoPPvZL.jpg', 'transcript_images/GjLs5a6erT8ybLGr6ar0aHipjIZ2fNYwlkk1o5CV.png', 'c', 1, NULL, '2023-12-30 02:22:47', '2023-12-30 02:22:47', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(7, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'more_than_five', 'transcript_images/mqbXQLSlDNnw2ByyNqv9PQ692ZdJDCij2zNz4xyd.jpg', 'transcript_images/J2kvPHyEP3MRikQyII29ZS5eySWRWytKEYYIsYJZ.jpg', 'transcript_images/eD4lWvrClMiS6eOiQc84TxRMap1oJfp7n3NuSKcZ.jpg', 'j', 1, NULL, '2023-12-30 02:42:18', '2023-12-30 02:42:18', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(8, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'paid_training', 'transcript_images/08bkSZNystoYNBFuUK59deFu3dWqll7e2MWVQvXT.jpg', 'transcript_images/SjXAf8Fv84Dfc98EWbEps75PNrO4guCQuhCk7Dxd.jpg', 'transcript_images/3VLFPVF2aIRnYC78jdaUMzhRjatxuqrCtrY055VD.jpg', 'j', 1, NULL, '2023-12-30 02:42:58', '2023-12-30 02:42:58', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(9, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'non_paid_training', 'transcript_images/mDEtCp6cnXZzIBCxdCSjtYq0IsFhe2w2ArBuh3yP.jpg', 'transcript_images/v4PT29AnEWdxNDKmfiLUJEZYf259y3xCA8FhgawZ.jpg', 'transcript_images/EU3wYNdBfhCBxE18uelOMAKQhI2XG1TDtasY9Bvr.jpg', 'j', 1, NULL, '2023-12-30 02:43:41', '2023-12-30 02:43:41', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(10, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 1', 'Sciences Economiques', 'Economie Appliquée', 'paid_training', 'transcript_images/QLcQvocDUCNG1E5aDGAmDjrVaPhT3t2pbSMhAQVu.jpg', 'transcript_images/nL1vtY2kkwYxVUunhiLUPCIBRe3p6odeIrx7a60Q.jpg', 'transcript_images/cJEcea7B9capoRoggNXXUoaSfbM9EqOuCZKqR8Ul.jpg', 'hgg', 1, NULL, '2023-12-30 06:38:55', '2023-12-30 06:38:55', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414'),
(11, 2, '2022-2023', 'Licence 1', '12345678', 'Semestre 2', 'Sciences de Gestion', 'Marketing et action commerciale', 'paid_training', 'transcript_images/aLG2BMpkOckypQHAnsbsdKC6zhptTAfbrMksEpC3.jpg', 'transcript_images/gLvz2IRzG0AwTnmhLQe8jyXgtZG9meX0F8HHJ30v.jpg', 'transcript_images/e3ojqvkJHt9P9uBqVCPKK62YX0z1whG1BqPUcrVf.jpg', 'g', 1, NULL, '2023-12-30 07:06:40', '2023-12-30 07:06:40', 'Ronaldo', 'Agbohou', 'ronaldoagbohou@gmail.com', '+22967419414');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `place_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=deactivate',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mat_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_token_hash` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reset_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_code_expiry` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `date`, `place_birth`, `email`, `phone`, `status`, `image`, `gender`, `mat_number`, `identifier`, `google_id`, `phone_code`, `secret_key`, `password`, `reset_token_hash`, `reset_token_expires_at`, `created_at`, `updated_at`, `reset_code`, `reset_code_expiry`, `remember_token`) VALUES
(1, 'Emma', 'Smith', '2023-12-11', '', 'emm@example.com', '1234567890', 1, NULL, NULL, '17104018', 'Emma|-_-|64f5faff5207e@ADR0@Smith|_-_|17104018', NULL, NULL, NULL, '$2y$10$rOUJLvR2vhmSWQanX9ssNe7Xzp/64/eNuVCAC5vWV8K9TTsIJvgIe', '41068a0d68e0209121a48256caf340417d3b90b624dbeab62079311be449be89', '2023-09-25 14:47:37', '2023-09-04 14:42:55', '2023-09-04 14:42:55', '', NULL, NULL),
(2, 'Ronaldo', 'Agbohou', '2023-12-11', '', 'ronaldoagbohou@gmail.com', '+22967419414', 1, NULL, NULL, '12345678', 'Ronaldo|-_-|64f61ac818e10@ADR0@Agbohou|_-_|12345678', NULL, NULL, '3|SziXwb5I9w0nLGX2WFpD0vU7gYOhGcBVf1KPhH3K89f6726c', '$2y$12$cDl6MAuuitMGs8OBEMpc.OEFWlICQJ2Y4Gz6spLe6fUEzUaX3DCaK', '45aeb3c2b772b7b229879ce0a266b235e749f172e4ee508c712cb6602f9264bd', '2023-10-21 19:15:48', '2023-09-04 16:58:32', '2023-12-30 00:08:04', '753865', '2023-12-30 00:35:10', NULL),
(3, 'DJOKPE', 'Marius', '2023-12-11', '', 'Djokpemarius10@gmail.com', '97753419', 1, NULL, NULL, '8745359', 'DJOKPE|-_-|64f877b485f4c@ADR0@Marius|_-_|8745359', NULL, NULL, NULL, '$2y$10$PB3D1N4OlGSFMBwLin6LH.Rwk8fIxWrP7HjteKs00KQyX/ddxEg8m', NULL, NULL, '2023-09-06 11:59:32', '2023-09-06 11:59:32', '', NULL, NULL),
(4, 'Epiphane', 'HONVO', '2023-12-11', '', 'honvoeiphane@gmail.com', '+22966154804', 1, NULL, NULL, '13872320', 'Epiphane|-_-|64f8c48f8b0bb@ADR0@HONVO|_-_|13872320', NULL, NULL, NULL, '$2y$10$TZWF07pQ0uIQavmH1kUBeuiZ/l.kRCdhFMU5YlWtPjqr2gByqD7a.', '52f35bd6b1cc4b09ecb0f886933b9efab2a3943c4cd8fadf7ef48f8a5355854e', '2023-10-21 12:17:41', '2023-09-06 17:27:27', '2023-09-06 17:27:27', '', NULL, NULL),
(5, 'Rosaline', 'Tchoumado', '2023-12-11', '', 'tchoumadorrosaline@gmail.com', '69750515', 1, NULL, NULL, '19409719', 'Rosaline|-_-|64f8d7548e08f@ADR0@Tchoumado|_-_|19409719', NULL, NULL, NULL, '$2y$10$N/MALRoGp9oaYpBoyJB4OuECHJF6Q0xB3P9HhIA4JuQuBAlEyAcUe', NULL, NULL, '2023-09-06 18:47:34', '2023-09-06 18:47:34', '', NULL, NULL),
(6, 'Boris', 'YEHOUENOU', '2023-12-11', '', 'borisyehouenou626@gmail.com', '96546994', 1, NULL, NULL, '11137719', 'Boris|-_-|64f8d859ace6e@ADR0@YEHOUENOU|_-_|11137719', NULL, NULL, NULL, '$2y$10$ayCIIK/y9VCQpCIiBJ8dy.OW1DXV16WTSGpxz8wYNLftpFvMgXUq2', NULL, NULL, '2023-09-06 18:51:53', '2023-09-06 18:51:53', '', NULL, NULL),
(7, 'Réjuste', 'WENOUMI', '2023-12-11', '', 'rejustewenoumi@gmail.com', '94552616', 1, NULL, NULL, '10375819', 'Réjuste|-_-|64f8d9ff7ce49@ADR0@WENOUMI|_-_|10375819', NULL, NULL, NULL, '$2y$10$GL1m/AqIFDE9tTb8PQTPEeM5ICR1Qlv1lFFiLkxiAXpybVk1V2rKC', NULL, NULL, '2023-09-06 18:58:55', '2023-09-06 18:58:55', '', NULL, NULL),
(8, 'Dario', 'Isma', '2023-12-11', '', 'darioabissi0@gmail.com', '+22996965829', 1, NULL, NULL, '11262840', 'Dario|-_-|64f8dfad74539@ADR0@Isma|_-_|11262840', NULL, NULL, NULL, '$2y$10$9L2ys9YW2Sj9AOkR3yKwj.yltATl51MXzxBOLa81TGbVKuz1Ez89W', NULL, NULL, '2023-09-06 19:23:09', '2023-09-06 19:23:09', '', NULL, NULL),
(10, 'De', 'De', '2023-12-11', '', 'ronaldoownpurpose@gmail.com', '623544525', 1, NULL, NULL, '000000', 'De|-_-|6501fa42dc793@ADR0@De|_-_|000000', NULL, NULL, NULL, '$2y$12$qiehW3cSr0iq.kNb5yPCQ.ha1kbbfIus84GvHpmyUA41JMBK7Pzk2', NULL, '2023-10-21 12:25:40', '2023-09-13 17:07:06', '2023-11-14 13:01:33', '221114', '2023-11-14 13:29:08', NULL),
(11, 'Gram', 'Francis', '2023-12-11', '', 'gra@gmail.com', '65225885', 1, NULL, NULL, '456789', 'Gram|-_-|6502d50120c7d@ADR0@Francis|_-_|456789', NULL, NULL, NULL, '$2y$10$ELSTJVHs9ZdnRlBV8wNPCeDkDVN9OZJ9VgshU9YgGGCFpvZZpHRtq', NULL, NULL, '2023-09-14 08:40:17', '2023-09-14 08:40:17', '', NULL, NULL),
(12, 'Mathilde', 'DAAH-HOUEDJI', '2023-12-11', '', 'mathildedaah@gmail.com', '53989380', 1, NULL, NULL, '14272021', 'Mathilde|-_-|650c87d3830ee@ADR0@DAAH-HOUEDJI|_-_|14272021', NULL, NULL, NULL, '$2y$10$UZ6hDBSetaTbqagnOcGuVOt4oUebtUuA17kQVFtx7WIkZGSTt2L/i', NULL, NULL, '2023-09-21 17:13:39', '2023-09-21 17:13:39', '', NULL, NULL),
(13, '', '', '2023-12-11', '', '', '', 1, NULL, NULL, '', '', NULL, NULL, NULL, '$2y$10$LLdMETecN9N7EohvHpe9PuLmeL6KKxb8sKQI/J7ziBw2syStdrLzG', NULL, NULL, NULL, NULL, '', NULL, NULL),
(17, 'hero', 'hero', '2023-12-11', '', 'nherodion@gmail.com', '5846326561', 1, NULL, NULL, '154545', 'hero|-_-|652e999b71c61@ADR0@hero|_-_|154545', NULL, NULL, NULL, '$2y$10$OPQmTrORpxkou.LEKcdz8OD90jBgcqxoDs6R0nRbDt.AvGFuTm7NC', '181b1faa770d76effd5f0d772284b449ecdf1b5ae878dd3eb60ad59077ae3471', '2023-10-17 16:49:25', '2023-10-17 13:26:35', '2023-10-17 13:26:35', '', NULL, NULL),
(18, 'hero', 'hero', '2023-12-11', '', 'ron2agb2@gmail.com', '123456789', 1, NULL, NULL, '1234567', 'hero|-_-|652e9bb750a72@ADR0@hero|_-_|1234567', NULL, NULL, NULL, '$2y$10$YGszHbQ0ivvrPsdyuGkBnujhlNKJQt3F4mR5OGz6Cf6XrdhjvSAYm', 'c90c44007ee46a33790a525527727679f45abf7aaeabd56de56a7eb9d4d26c94', '2023-10-17 17:23:46', '2023-10-17 13:35:35', '2023-10-17 13:35:35', '', NULL, NULL),
(19, 'ljxlks', 'lj,clk', '2023-12-11', '', 'mkcmkc@gmail.com', 'mkxkc', 1, NULL, NULL, 'mk,xcm', 'ljxlks|-_-|6531853589089@ADR0@lj,clk|_-_|mk,xcm', NULL, NULL, NULL, '$2y$10$AXUh7PrS1qzUKc1QX.MSFeKY11iCyuOO6OPixnDOMA4laajViCZ/W', NULL, NULL, '2023-10-19 18:36:25', '2023-10-19 18:36:25', '', NULL, NULL),
(20, 'Ronaldo', 'AGBOHOU', '2023-12-11', '', 'ronaldo@g.com', '98554477', 1, NULL, NULL, '11111111', 'Ronaldo|-_-|6535128b6f84c@ADR0@AGBOHOU|_-_|11111111', NULL, NULL, NULL, '$2y$10$djhMhWdSBa5/UqzQEx41TuIFyHi2IXC.8OLOXp8OhQRmfYl2dt0Qm', NULL, NULL, '2023-10-22 11:16:11', '2023-10-22 11:16:11', NULL, NULL, NULL),
(21, 'ù!', '!', '2023-12-11', '', 'ronaldo@n.com', '58', 1, NULL, NULL, '15151515', 'ù!|-_-|6535142d4fb22@ADR0@!|_-_|15151515', NULL, NULL, NULL, '$2y$10$iBhdhd1nJf04SGo592I9kubD6DN.hvbMYXjqLRVxM5aq5CNowog7K', NULL, NULL, '2023-10-22 11:23:09', '2023-10-22 11:23:09', NULL, NULL, NULL),
(22, 'AGBOHOU', 'Marius', '2023-12-11', '', 'agb1ron1@gmail.com', '0022997247851', 1, NULL, NULL, '10101010', 'AGBOHOU|-_-|653a99bb5244f@ADR0@Marius|_-_|10101010', NULL, NULL, NULL, '$2y$10$GgYvIEOCONBSGMdVXN4J9u.Blx6tdLr1h3CLWPaL.jxheKSA4P/cG', NULL, NULL, '2023-10-26 15:54:20', '2023-10-26 15:54:20', NULL, NULL, NULL),
(23, 'gog', 'go', '2023-12-11', '', 'ronaldou@gmail.com', '54555547', 1, NULL, NULL, '65465464', 'gog|-_-|654cd7f95a68e@ADR0@go|_-_|65465464', NULL, NULL, NULL, '$2y$12$q3tv5jC7xYR1mVAv7YMYaedYQKrv9cHd9xcNPiCGIgGBt63fA2bFO', NULL, NULL, '2023-11-09 12:00:42', '2023-11-09 12:00:42', NULL, NULL, NULL),
(24, 'sess', 'session', '2023-12-11', '', 'session@gmail.com', '654586464', 1, NULL, NULL, '22222211', 'sess|-_-|65524372d15cf@ADR0@session|_-_|22222211', NULL, NULL, NULL, '$2y$12$jjFoZkatxnWknpVkxB5M9.nfIyKl7Vcfj51Kw4UAWp2CyzwccChhy', NULL, NULL, '2023-11-13 14:40:35', '2023-11-13 14:40:35', NULL, NULL, NULL),
(25, 's', 's', '2023-12-11', '', 's@gmail.com', '5846464646', 1, NULL, NULL, '88888899', 's|-_-|655243fe577df@ADR0@s|_-_|88888899', NULL, NULL, NULL, '$2y$12$jPoO8Ho/Ru/gmbfqNmHM5.9dZB2uCaOC0TlRzjY4/C/ARjIGx.gfy', NULL, NULL, '2023-11-13 14:42:54', '2023-11-13 14:42:54', NULL, NULL, NULL),
(26, 'qmkkj oi,oik;n,ljl,,', 'mk,mm,ml,ml,ml, mkinoin', '2023-12-11', '', '00@gmail.com', '229724785154', 1, NULL, NULL, '00223311', 'qmkkj oi,oik;n,ljl,,|-_-|65568c2bb93f8@ADR0@mk,mm,ml,ml,ml, mkinoin|_-_|00223311', NULL, NULL, NULL, '$2y$12$aqkco4Tr/I.GkbmmPg9goe1Al7OG8KVYqzpeiSZMhst91aW.ETuJq', NULL, NULL, '2023-11-16 20:39:56', '2023-11-16 20:39:56', NULL, NULL, NULL),
(27, 'test', 'test', '2023-12-11', '', 'test02@gmail.com', '585545666', 1, NULL, NULL, '02020202', 'test|-_-|657355f4aaa62@ADR0@test|_-_|02020202', NULL, NULL, NULL, '$2y$12$hs6UQZbsYecYn.nJwG5sf.LlJTyT14ngn2mlQ4a.IBn/TRxcGLAIu', NULL, NULL, '2023-12-08 16:44:21', '2023-12-08 16:44:21', NULL, NULL, NULL),
(28, '4', '4', '2023-12-11', '', '4@gmail.com', '658455555', 1, NULL, NULL, '88888889', '4|-_-|657356711d32d@ADR0@4|_-_|88888889', NULL, NULL, NULL, '$2y$12$fsz20U35v13GsgYNyfEs1ebqUBK64NEXV0Oq3al8ZO9RQmWSpnURK', NULL, NULL, '2023-12-08 16:46:25', '2023-12-08 16:46:25', NULL, NULL, NULL),
(29, 'pass', 'pass', '2023-12-11', '', 'pass@gmail.com', '874154555', 1, NULL, NULL, '58452565', 'pass|-_-|65741148b240a@ADR0@pass|_-_|58452565', NULL, NULL, NULL, '$2y$12$s3ZTvdUlK/NBmukAk.l9J.icHasVyfxV19PHL2gs.n7juctZRIEBi', NULL, NULL, '2023-12-09 06:03:37', '2023-12-09 06:03:37', NULL, NULL, NULL),
(30, 'bob', 'Marley', '2023-12-11', '', 'bob@gmail.com', '54862016658', 1, NULL, NULL, '54863213', 'bob|-_-|657411f15cd12@ADR0@Marley|_-_|54863213', NULL, NULL, NULL, '$2y$12$VJfBdOPLG4AaVNOuzDyLmuFcHWh.oImzUaX5sOX56a1iJGascuJsq', NULL, NULL, '2023-12-09 06:06:25', '2023-12-09 06:06:25', NULL, NULL, NULL),
(31, 'bobo', 'Adjanou', '2023-12-11', '', 'bobo@gmail.com', '8796321456', 1, NULL, NULL, '45876300', 'bobo|-_-|65741e78da6db@ADR0@Adjanou|_-_|45876300', NULL, NULL, NULL, '$2y$12$kz7AWIJ5Up0vZEnmnFTlbOO2vVliTHAPDFuU6XdKbSz.zJHdNNE9q', NULL, NULL, '2023-12-09 06:59:53', '2023-12-09 06:59:53', NULL, NULL, NULL),
(32, 'n', 'n', '2023-12-11', '', 'n@gmail.com', '8756325', 1, NULL, NULL, '58472001', 'n|-_-|65742254b658a@ADR0@n|_-_|58472001', NULL, NULL, NULL, '$2y$12$guKSM5iw3QDOnJZfS9CMZ.zArNVIu7.U1wlpj2qY.wGlfCJmAj/z2', NULL, NULL, '2023-12-09 07:16:20', '2023-12-09 07:16:20', NULL, NULL, NULL),
(33, 'Avohou', 'Richard', '2023-12-11', '', 'richo@gmail.com', '25698745', 1, NULL, NULL, '99988777', 'Avohou|-_-|65761537ee92e@ADR0@Richard|_-_|99988777', NULL, NULL, NULL, '$2y$12$Eu/3Xq21FBVJeSmdAxbdBeEQ3UTLFf0Pija//NmSIlX9/r.HUB1vy', NULL, NULL, '2023-12-10 18:44:56', '2023-12-10 18:44:56', NULL, NULL, NULL),
(34, 'cocou2', 'nazif1', '2023-12-05', 'TANGBE', 'cocou2@gmail.com', '458755024875', 1, NULL, NULL, '24154032', 'cocou2|-_-|65768e8d76911@ADR0@nazif1|_-_|24154032', NULL, NULL, NULL, '$2y$12$/JmU.lP2k6PZMctgKwztKu0y/H3bmti6wqkka5b0kyhbSYy70z/fi', NULL, NULL, '2023-12-11 03:22:40', '2023-12-11 03:22:40', NULL, NULL, NULL),
(35, 'gogan', 'joel', '2023-12-22', 'TANGBE', 'joel@gmail.com', '54555555', 1, NULL, NULL, '22222200', 'gogan|-_-|657c23bc55cba@ADR0@joel|_-_|22222200', NULL, NULL, NULL, '$2y$12$U8S9qZtyjQK6vJfEIUoEGe.U2FNZXopEeCvM4LqjzvIwWC4yqJGR2', NULL, NULL, '2023-12-15 09:00:32', '2023-12-15 09:00:32', NULL, NULL, NULL),
(36, 'pass', 'pass', '2023-12-29', 'jk', 'latesc@yahoo.com', '48564786525', 1, NULL, NULL, '82015444', 'pass|-_-|658d6a9f37340@ADR0@pass|_-_|82015444', NULL, NULL, NULL, '$2y$12$9ujGU3AqAwUF3oC/3YnFQeI0udCbwtOExCGCYDcBR68V6oAY2RvHe', NULL, NULL, '2023-12-28 11:31:27', '2023-12-28 11:55:33', '187212', '2023-12-28 12:25:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_user_id_foreign` (`user_id`);

--
-- Indexes for table `certificates_master`
--
ALTER TABLE `certificates_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_master_user_id_foreign` (`user_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_student_id_foreign` (`student_id`);

--
-- Indexes for table `diplomas`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diplomas_user_id_foreign` (`user_id`);

--
-- Indexes for table `dup_transcripts`
--
ALTER TABLE `dup_transcripts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dup_transcripts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_complaint_id_foreign` (`complaint_id`),
  ADD KEY `image_certificate_id_foreign` (`certificate_id`),
  ADD KEY `image_diploma_id_foreign` (`diploma_id`),
  ADD KEY `image_stu_id_foreign` (`stu_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_complaint_id_foreign` (`complaint_id`);

--
-- Indexes for table `messages_table`
--
ALTER TABLE `messages_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_title_unique` (`title`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `transcripts`
--
ALTER TABLE `transcripts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `certificates_master`
--
ALTER TABLE `certificates_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `diplomas`
--
ALTER TABLE `diplomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dup_transcripts`
--
ALTER TABLE `dup_transcripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages_table`
--
ALTER TABLE `messages_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transcripts`
--
ALTER TABLE `transcripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `certificates_master`
--
ALTER TABLE `certificates_master`
  ADD CONSTRAINT `certificates_master_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `diplomas`
--
ALTER TABLE `diplomas`
  ADD CONSTRAINT `diplomas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dup_transcripts`
--
ALTER TABLE `dup_transcripts`
  ADD CONSTRAINT `dup_transcripts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_diploma_id_foreign` FOREIGN KEY (`diploma_id`) REFERENCES `diplomas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
