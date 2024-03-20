-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bima_sandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `tittle` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `tittle`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Predictors of early adulthood insomnia following exposure to a single mass violence attack during adolescence: 7-13 year follow-up from the Utoya and HNT studies', 1, 0, '2024-03-19 07:13:55', '2024-03-19 07:51:11'),
(2, 'xyz', 0, 1, '2024-03-19 07:19:14', '2024-03-19 07:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tittle` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tittle`, `description`, `image`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/diverse-couple-on-a-therapy-session-in-a-psychologist-office-1.jpg_1710844530.jpg', 0, 1, '2024-03-19 04:42:08', '2024-03-19 05:44:07'),
(3, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/back-to-school_1710933922.png', 1, 0, '2024-03-19 04:42:08', '2024-03-20 06:25:22'),
(4, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/head (1).webp_1710841328.webp', 1, 0, '2024-03-19 04:42:08', '2024-03-19 04:42:08'),
(5, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/head (1).webp_1710841328.webp', 1, 0, '2024-03-19 04:42:08', '2024-03-19 04:42:08'),
(6, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/head (1).webp_1710841328.webp', 1, 0, '2024-03-19 04:42:08', '2024-03-19 04:42:08'),
(7, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/head (1).webp_1710841328.webp', 1, 0, '2024-03-19 04:42:08', '2024-03-19 04:42:08'),
(8, 'Astrocytes in the Traumatic Brain Injury: the Good and the Bad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,', 'uploads/head (1).webp_1710841328.webp', 1, 0, '2024-03-19 04:42:08', '2024-03-19 04:42:08'),
(9, 'demo', 'klhjuionjjhuiunh', 'uploads/back-to-school_1710918392.png', 1, 0, '2024-03-20 02:06:32', '2024-03-20 02:06:32'),
(10, 'demo', 'xyz', 'uploads/65b04432d5738_1710934105.jpg', 1, 0, '2024-03-20 06:28:25', '2024-03-20 06:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `subject` mediumtext NOT NULL,
  `message` mediumtext NOT NULL,
  `is_active` int(4) NOT NULL DEFAULT 1,
  `is_deleted` int(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Aqib Arain', 'ali@gmail.com', 'books', 'aa', 1, 0, '2024-03-19 09:31:57', '2024-03-19 09:31:57'),
(2, 'Aqib Arain', 'ali@gmail.com', 'Health', 'aaa', 0, 1, '2024-03-19 09:33:08', '2024-03-20 06:36:37'),
(3, 'demo', 'ali@gmail.com', 'books', 'demodemo', 1, 0, '2024-03-19 09:39:52', '2024-03-19 09:39:52'),
(4, 'ali', 'ali4@gmail.com', 'Health', 'aaasasdsad', 0, 1, '2024-03-19 09:40:34', '2024-03-20 06:36:19'),
(5, 'ali', 'ali4@gmail.com', 'Health', 'ahello', 1, 0, '2024-03-19 09:42:31', '2024-03-19 09:42:31'),
(6, 'waqas', 'anus2@gmail.com', 'books', 'anus', 0, 1, '2024-03-19 09:44:08', '2024-03-20 06:36:30'),
(7, 'Aqib Arain', 'anus@gmail.com', 'books', 'demo', 1, 0, '2024-03-20 05:13:21', '2024-03-20 05:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` mediumint(9) NOT NULL,
  `type` varchar(255) NOT NULL,
  `timing` time NOT NULL,
  `description` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `phone_no`, `address`, `city`, `state`, `zipcode`, `type`, `timing`, `description`, `image`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'Aqib Arain', '0321524867', 'kmkm', 'Newyork', 'NY', 1451, 'for_youth', '12:59:00', 'helloworld', 'uploads/back-to-school_1710918305.png', 0, 1, '2024-03-15 05:40:11', '2024-03-20 14:26:33'),
(3, 'demo', '0321253562', 'karachi', 'Phoenix', 'south', 2321511, 'parent_and_family', '01:00:00', 'demo', 'uploads/contact-banner.jpg_1710502197.jpg', 1, 0, '2024-03-15 06:11:49', '2024-03-20 13:19:10'),
(4, 'ali', '0321253562', 'karachik', 'Newyork', 'hello', 1451, 'parent_and_family', '23:58:00', 'helo', 'uploads/diverse-couple-on-a-therapy-session-in-a-psychologist-office-1_1710918120.jpg', 1, 0, '2024-03-15 06:26:18', '2024-03-20 02:02:16'),
(5, 'ali', '0321253562', '2153453132', 'Newyork', 'NY', 232151, 'national', '23:58:00', 'xyz', 'uploads/back-to-school_1710933149.png', 1, 0, '2024-03-15 06:26:18', '2024-03-20 13:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userType`, `email`, `phone_no`, `email_verified_at`, `password`, `remember_token`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(33, 'anus', 'admin', 'anus@gmail.com', 3222554514, NULL, '$2y$10$ordxRniXgxv7PpRgDvdQzuDQN2eC5qoYN4HpMioBk7wLTS3HoNLKG', NULL, 1, 0, '2024-02-19 19:59:00', '2024-02-20 12:09:06'),
(34, 'Aqib Arain', 'user', 'ali@gmail.com', 321253562, NULL, '$2y$10$lQfjojbiPR2KD5TeC4UdwuwC12OD5GrnGKX2S1Myn.EzdvgW7J1nO', NULL, 1, 0, '2024-02-20 12:45:33', '2024-02-20 12:45:33'),
(35, 'Dr.ali', 'user', 'ali4@gmail.com', 321524867, NULL, '$2y$10$U6LLhKfunXc.WAONfV0IZOpU1yahF8RqxAggQehaAjvP/RFm3UVFG', NULL, 1, 0, '2024-02-20 13:00:07', '2024-02-20 13:00:07'),
(37, 'ali', 'user', 'ali1@gmail.com', 3212569464, NULL, '$2y$10$VjXX0Jep8ry5g29Uk5ibEOMFvXLsN4TzKnhgrg2J1lVUAUjdSoWA.', NULL, 1, 0, '2024-02-20 13:00:56', '2024-02-20 13:00:56'),
(38, 'Aqib Arain', 'user', 'anus2@gmail.com', 321524867, NULL, '$2y$10$ASR0gFCGwb0SaPeGJ4.HmuZ5ArlFPJpdmsho2kHaYRNm6Eqb/O1pq', NULL, 1, 0, '2024-02-20 13:03:26', '2024-02-20 13:03:26'),
(39, 'anus', 'user', 'anusanus@gmail.com', 32125213421, NULL, '$2y$10$9V1Ym8ob0YGCMv0EAJ6KBO2BXoMysF5nFkZWM.NQrkjbhVhnkj/B.', NULL, 1, 0, '2024-02-21 12:59:24', '2024-02-21 12:59:24'),
(40, 'ali', 'user', 'ali4a@gmail.com', 321524867, NULL, '$2y$10$i6nkE5/GT2Q83D7HumadRePzmAbDp8E.5LqzqiVKUdXVEbxES12lW', NULL, 1, 0, '2024-02-21 13:01:00', '2024-02-21 13:01:00'),
(42, 'Aqib Arain', 'admin', 'aliaa@gmail.com', 321253562, NULL, '$2y$10$53xTWLu3pTcs4jIV1/36suZnjrXJp8idOBNPJZsLjAD60TGFsENtK', NULL, 1, 0, '2024-03-18 08:08:39', '2024-03-18 08:08:39'),
(43, 'Aqib Arain', 'user', 'aaqli@gmail.com', 321253562, NULL, '$2y$10$rIFnWy4BGAnB56M.XD7Lj.3.R5eOLnB0hBJnGO0uGHSdaaW7Rp8gW', NULL, 1, 0, '2024-03-20 03:48:25', '2024-03-20 03:48:25'),
(44, 'Aqib Arain', 'user', 'aliaali@gmail.com', 321253562, NULL, '$2y$10$Rew8/VW6x.wO.Ewigwfbe.HNaGPYgARoWPhWTCaWSBPwiM8Te45ne', NULL, 1, 0, '2024-03-20 04:28:59', '2024-03-20 04:28:59'),
(45, 'Aqib Arain', 'admin', 'alij@gmail.com', 321253562, NULL, '$2y$10$KP82.iPFMwYR6ce38m7R.uHdeSEzP4AvttT2VB6RRJ9mmEDLb2RZ.', NULL, 1, 0, '2024-03-20 04:31:21', '2024-03-20 04:31:21'),
(46, 'Aqib Arain', 'admin', 'jaa@gmail.com', 321253562, NULL, '$2y$10$5FEIwTCigoVG1Wy8.4FBOeAZ6vT7yvi8gEpcyy/1jmT0rhdJMZdUO', NULL, 1, 0, '2024-03-20 04:32:12', '2024-03-20 04:32:12'),
(47, 'Aqib Arain', 'admin', 'alianus@gmail.com', 321253562, NULL, '$2y$10$aUuUEGMhi.Bed.W/1FCqbOkso4V/eI/iQ3gvRHpqZnQin.ci7paHu', NULL, 1, 0, '2024-03-20 04:40:46', '2024-03-20 04:40:46'),
(48, 'Aqib Arain', 'admin', 'anusn@gmail.com', 321253562, NULL, '$2y$10$bg.KAR2OGK0OcQM3FmDCROBTrP0.WXsyutD0bda.JFduZyc8dZmKO', NULL, 1, 0, '2024-03-20 04:41:47', '2024-03-20 04:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `web_cms`
--

CREATE TABLE `web_cms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `tag` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_cms`
--

INSERT INTO `web_cms` (`id`, `name`, `slug`, `value`, `tag`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Section 1 heading', 'section_1_heading', 'RECLAIM YOUR HAPPINESS', 'home', 1, 0, '2024-03-14 08:24:13', '2024-03-20 07:00:04'),
(2, 'Section 1 tittle', 'section_1_tittle', 'Lets Get Back Your Mental Health <br> With Our Pediatric Cancer <br> Treatments', 'home', 1, 0, '2024-03-14 08:24:13', '2024-03-20 07:00:04'),
(3, 'Section 1 desc', 'section_1_desc', 'We recognizes how powerfully thought can affect our emotional and behavioral health. That is why Cognitive Therapy and Mindfulness <br> are fundamental theories of its practice.', 'home', 1, 0, '2024-03-14 08:24:13', '2024-03-20 07:00:04'),
(4, 'Section 2 tittle', 'section_2_tittle', 'Woebot Therapy App', 'home', 1, 0, '2024-03-14 08:24:13', '2024-03-20 07:00:04'),
(5, 'Banner tittle', 'banner_tittle', 'About Us', 'about', 1, 0, '2024-03-14 09:23:45', '2024-03-18 01:56:43'),
(6, 'Section 1 tittle 1', 'section_1_tittle_1', 'We are a non-profit foundation for promoting better mental health among <br> adolescents and                             young adults, especially those who have experienced <br> trauma due to illness such as cancers.', 'about', 1, 0, '2024-03-14 09:23:45', '2024-03-18 01:56:43'),
(7, 'Banner image', 'banner_image', 'uploads/about-bg.jpg_1710745003.jpg', 'about', 1, 0, '2024-03-14 09:23:45', '2024-03-18 01:56:43'),
(8, 'Banner tittle', 'banner_tittle', 'Our Story', 'our_story', 1, 0, '2024-03-18 02:01:12', '2024-03-19 02:41:21'),
(9, 'Section 1 heading', 'section_1_heading', 'Our Story', 'our_story', 1, 0, '2024-03-18 02:01:12', '2024-03-19 02:41:21'),
(10, 'Section main tittle', 'section_main_tittle', 'Inspiring Journeys of Pediatric Cancer Survivors', 'our_story', 1, 0, '2024-03-18 02:01:12', '2024-03-19 02:41:21'),
(11, 'Section 1 desc 1', 'section_1_desc_1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'our_story', 1, 0, '2024-03-18 02:02:12', '2024-03-19 02:41:21'),
(12, 'Section 1 desc 2', 'section_1_desc_2', 'The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it’s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.', 'our_story', 1, 0, '2024-03-18 02:02:12', '2024-03-19 02:41:21'),
(13, 'Banner image', 'banner_image', 'uploads/Story.webp_1710834081.webp', 'our_story', 1, 0, '2024-03-18 02:02:12', '2024-03-19 02:41:21'),
(14, 'Section 1 image', 'section_1_image', 'uploads/story-girl.jpg_1710745333.jpg', 'our_story', 1, 0, '2024-03-18 02:02:13', '2024-03-18 02:02:13'),
(15, 'Banner tittle', 'banner_tittle', 'Our Mission', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(16, 'Section 1 heading', 'section_1_heading', 'OUR MISSION', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(17, 'Section 1 desc 1', 'section_1_tittle', 'Promote Mental Wellness', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(18, 'Section 1 desc 2', 'section_1_desc', 'We are dedicated to fostering mental well-being in adolescents and young adults by providing accessible resources, support, and education, empowering them to overcome challenges and thrive emotionally.', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(19, 'Section 2 heading', 'section_2_heading', 'OUR MISSION', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(20, 'Section 2 tittle', 'section_2_tittle', 'Sponsor Research Projects', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(21, 'Section 2 desc', 'section_2_desc', 'Sponsor research projects aimed at deepening our understanding of how trauma influences the mental well-being of adolescents and young adults.', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(22, 'Section 2 tittle 1', 'section_2_tittle_1', 'Curate A Premier Hub For Contemporary Psychology Content', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(23, 'Section 2 desc 1', 'section_2_desc_1', 'We aim to build a central content hub featuring groundbreaking research and initiatives focused on psychological issues affecting adolescents and young adults.', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 06:15:50'),
(24, 'Banner image', 'banner_image', 'uploads/mission.webp_1710745531.webp', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 02:05:31'),
(25, 'Section 1 image', 'section_1_image', 'uploads/mission-img.webp_1710745531.webp', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 02:05:31'),
(26, 'Section 2 image', 'section_2_image', 'uploads/mission-img-1.webp_1710745531.webp', 'our_mission', 1, 0, '2024-03-18 02:05:31', '2024-03-18 02:05:31'),
(27, 'Section 1 tittle 1', 'section_1_tittle_1', 'Comments', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(28, 'Section 1 desc 1', 'section_1_desc_1', 'When visitors leave comments on the site we collect the data ssh) may be provided to  the Gravatar service to see if you arhown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(29, 'Section 1 desc 2', 'section_1_desc_2', 'An anonymized string created from your email address (also called a hash) may be provided to                             the Gravatar service to see if you are using it. The Gravatar service privacy policy is                             available here <a href=\"https://automattic.com/privacy/\">https://automattic.com/privacy/</a>                             . After approval of your comment, your                             profile picture is visible to the public in the context of your comment.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(30, 'Section 3 tittle 1', 'section_2_tittle_1', 'Media', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(31, 'Section 3 desc 1', 'section_2_desc_1', 'If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(32, 'Section 2 tittle 1', 'section_3_tittle_1', 'Cookies', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(33, 'Section 2 desc 1', 'section_3_desc_1', 'If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(34, 'Section 3 desc 2', 'section_3_desc_2', 'If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(35, 'Section 3 desc 3', 'section_3_desc_3', 'When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(36, 'Section 3 desc 4', 'section_3_desc_4', 'If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(37, 'Section 4 tittle 1', 'section_4_tittle_1', 'Embedded content from other websites', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(38, 'Section 4 desc 1', 'section_4_desc_1', 'Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(39, 'Section 4 desc 2', 'section_4_desc_2', 'These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(40, 'Section 5 tittle 1', 'section_5_tittle_1', 'Who we share your data with', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(41, 'Section 5 desc 1', 'section_5_desc_1', 'If you request a password reset, your IP address will be included in the reset email.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(42, 'Section 6 tittle 1', 'section_6_tittle_1', 'How long we retain your data', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(43, 'Section 6 desc 1', 'section_6_desc_1', 'If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(44, 'Section 6 desc 2', 'section_6_desc_2', 'For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(45, 'Section 7 tittle 1', 'section_7_tittle_1', 'What rights you have over your data', 'privacy_policy', 1, 0, '2024-03-18 02:08:46', '2024-03-18 08:19:32'),
(46, 'Section 7 desc 1', 'section_7_desc_1', 'If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.', 'privacy_policy', 1, 0, '2024-03-18 02:08:47', '2024-03-18 08:19:32'),
(47, 'Section 8 tittle 1', 'section_8_tittle_1', 'Where your data is sent', 'privacy_policy', 1, 0, '2024-03-18 02:08:47', '2024-03-18 08:19:32'),
(48, 'Section 8 desc 1', 'section_8_desc_1', 'Visitor comments may be checked through an automated spam detection service.', 'privacy_policy', 1, 0, '2024-03-18 02:08:47', '2024-03-18 08:19:32'),
(49, 'Banner tittle', 'banner_tittle', 'Survivors Profile', 'survivors_profile', 1, 0, '2024-03-18 02:16:06', '2024-03-18 02:16:06'),
(50, 'Banner image', 'banner_image', 'uploads/prfoli-bg.webp_1710746166.webp', 'survivors_profile', 1, 0, '2024-03-18 02:16:06', '2024-03-18 02:16:06'),
(51, 'Banner tittle', 'banner_tittle', 'Contact Mental Health Expert', 'contact-mental-health-expert', 1, 0, '2024-03-18 02:16:56', '2024-03-18 02:16:56'),
(52, 'Banner image', 'banner_image', 'uploads/mental.webp_1710746216.webp', 'contact-mental-health-expert', 1, 0, '2024-03-18 02:16:56', '2024-03-18 02:16:56'),
(53, 'Banner tittle', 'banner_tittle', 'Navigating Minds: The Latest in Psychiatry Research and Education', 'journals_and_latest_research', 1, 0, '2024-03-18 02:40:14', '2024-03-18 02:40:14'),
(54, 'Banner image', 'banner_image', 'uploads/about-bg.jpg_1710747614.jpg', 'journals_and_latest_research', 1, 0, '2024-03-18 02:40:14', '2024-03-18 02:40:14'),
(55, 'Banner tittle', 'banner_tittle', 'Donate', 'donation', 1, 0, '2024-03-18 02:43:04', '2024-03-18 02:43:04'),
(56, 'Section 1 card tittle', 'section_1_card_tittle', 'Support Our Cause', 'donation', 1, 0, '2024-03-18 02:43:04', '2024-03-18 02:43:04'),
(57, 'Section 1 card desc', 'section_1_card_desc', 'Help our organization by donating today! All donations go directly to making a difference for our cause.', 'donation', 1, 0, '2024-03-18 02:43:04', '2024-03-18 02:43:04'),
(58, 'Banner image', 'banner_image', 'uploads/donate.webp_1710747784.webp', 'donation', 1, 0, '2024-03-18 02:43:04', '2024-03-18 02:43:04'),
(59, 'Section 1 card image', 'section_1_card_image', 'uploads/donate.webp_1710747784.webp', 'donation', 1, 0, '2024-03-18 02:43:04', '2024-03-18 02:43:04'),
(60, 'Banner tittle', 'banner_tittle', 'Contact Us', 'contact_us', 1, 0, '2024-03-18 02:43:28', '2024-03-18 02:43:28'),
(61, 'Banner image', 'banner_image', 'uploads/donate.webp_1710747808.webp', 'contact_us', 1, 0, '2024-03-18 02:43:28', '2024-03-18 02:43:28'),
(62, 'Section 1 desc 1', 'section_1_desc_1', 'Inspire hope and fortify resilience through the shared stories of survival and perseverance.', 'our_mission', 1, 0, '2024-03-18 06:05:27', '2024-03-18 06:15:50'),
(63, 'Section 1 desc 2', 'section_1_desc_2', 'We aim to offer AI-based therapy services', 'our_mission', 1, 0, '2024-03-18 06:05:27', '2024-03-18 06:15:50'),
(64, 'Section 1 tittle 1', 'section_1_tittle_1', 'Inspire Hope and Resilience', 'our_mission', 1, 0, '2024-03-18 06:15:50', '2024-03-18 06:15:50'),
(65, 'Section 1 tittle 2', 'section_1_tittle_2', 'Offer AI-based Psychological Therapy Services', 'our_mission', 1, 0, '2024-03-18 06:15:50', '2024-03-18 06:15:50'),
(66, 'Section 1 tittle 3', 'section_1_tittle_3', 'Prevent Mental Issues Through Education', 'our_mission', 1, 0, '2024-03-18 06:15:50', '2024-03-18 06:15:50'),
(67, 'Section 1 desc 3', 'section_1_desc_3', 'We aim to prevent mental health crises among adolescents and young adults through education initiatives that promote early intervention, resilience-building, and healthy coping strategies.', 'our_mission', 1, 0, '2024-03-18 06:15:50', '2024-03-18 06:15:50'),
(68, 'Logo-white', 'logo', 'uploads/logo.png_1710837930.png', 'logo-favicon', 1, 0, '2024-03-19 03:45:30', '2024-03-19 08:46:28'),
(69, 'Favicon', 'favicon', 'uploads/logo.png_1710837930.png', 'logo-favicon', 1, 0, '2024-03-19 03:45:30', '2024-03-19 03:45:30'),
(70, 'Contact number', 'contact_number', '+6221.2002.2012', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(71, 'Email address', 'email_address', 'support@yourdomain.tld', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(72, 'Address', 'address', 'Karachi', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(73, 'Facebook link', 'pinterest_link', 'https://www.pinterest.com/', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(74, 'Instagram link', 'instagram_link', 'instagram.com', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(75, 'Linkedin link', 'linkedin_link', 'linkedin.com', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(76, 'Twitter link', 'twitter_link', 'twitter.com', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 03:53:53'),
(77, 'Tiktok link', 'tiktok_link', 'tiktok.com', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 03:53:53'),
(78, 'Copy right', 'copy_right', 'Copyright © 2023 All Rights Reserved. Designed By Website Designs', 'config', 1, 0, '2024-03-19 03:53:53', '2024-03-19 04:12:55'),
(79, 'Facebook link', 'facebook_link', 'facebook.com', 'config', 1, 0, '2024-03-19 04:12:55', '2024-03-19 04:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_cms`
--
ALTER TABLE `web_cms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `web_cms`
--
ALTER TABLE `web_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
