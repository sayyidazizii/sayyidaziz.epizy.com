-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 06:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal-profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `current_job` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `current_job`, `address`, `phone`, `email`, `school`, `image`) VALUES
(1, 'Sayyid Syafiq Abdul Aziz', 'Information Technology Department', 'Soka RT 02/ RW 02,Sokasari,Jumantono,Karanganyar,Jawa Tengah', '085602678871', 'sayyidsyafiq234@gmail.com', 'SMK N 2 KARANGANYAR  Jurusan Rekayasa Perangkat Lunak', 'profil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `paragraf` text NOT NULL,
  `hero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `paragraf`, `hero`) VALUES
(1, 'Sayyid Syafiq Abdul Aziz', 'Here you can see the profile and posts that i made. i want to share happiness with you.	', 'c99f398cf46ed742c72398f680c7f7de~21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `message`, `created_at`) VALUES
(1, 'sayyid', 'Hello send your message...', '2022-07-28 16:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `paragraf` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `slug`, `paragraf`, `image`, `created_at`) VALUES
(1, 'Point Of Sale And Request Laundry', 'Aplikasi Sistem Informasi Laundry dengan php CI 3 dan Bootrstrap', 'Aplikasi Sistem Informasi Laundry dengan php CI 3 dan Bootrstrap', 'p1.png', '2022-05-14 17:39:20'),
(2, 'COMPANY PROFILE LARAVEL 8', 'Website Profil perusahaan menggunakan laravel 8', 'Website Profil perusahaan menggunakan laravel 8', 'p2.png', '2022-05-14 17:39:20'),
(3, 'SAMPLE WEBSITE SEKOLAH', 'Website Sekolah dengan Laravel 8', 'Membuat Website Sekolah dengan Laravel 8', 'p3.png', '2022-05-14 17:44:11'),
(4, 'Poin Of Sale ', 'Aplikasi Sistem Informasi Kasir Cafe dengan CI 3 dan Bootstrap', 'Aplikasi Sistem Informasi Kasir Cafe ', 'p4.png', '2022-05-14 17:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `paragraf` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `paragraf`, `image`, `created_at`) VALUES
(1, 'Perkenalan ', 'Assalamualaikum wr.wb,Hai teman-teman ', '  Assalamualaikum wr.wb,Hai teman-teman perkenalkan nama saya Sayyid Syafiq Abdul Aziz.Saya sering dipangggil Sayyid.Saya tinggal di desa sokasari,jumantono,Karanganyar,Jawa tengah.  <p>Saya Lulusan SMK N 2 Karanganyar,jurusan Rekayasa Perangkat Lunak.Angkatan 2022.Cukup Sekian saja perkenalan saya,kalian bisa hubungi nomor handphone saya jika da yang ingin ditanyakan.</p>', 'profil.jpg', '2022-05-16 00:56:13'),
(2, 'Design Dengan Adobe Ilustrator', 'Membuat design Kaos Dengan Adobe Ilustrator', 'Belajar Design Dengan Adobe Ilustrator.Belajar Design Dengan Adobe Ilustrator', 'DESING11.png', '2022-05-16 06:14:01'),
(3, 'Sertifikat Kelulusan', 'Architecting on AWS (Membangun Arsitektur Cloud di AWS)', 'Beasiswa Architecting on AWS (Membangun Arsitektur Cloud di AWS).Beasiswa ini saya dpatkan saat saya berada di kelas 12 smk .Saya tertarik dengan beasiswa ini. Beasiswa ini meripakan lanjutan dari Belaja Dasar AWS.', 'Sertifikat_AWS_Cloud_Architecting.png', '2022-05-16 18:25:39'),
(4, 'Sertifikat Kelulusan', 'Belajar dasar-dasar AWS Cloud, mulai dari konsep cloud hingga cara membangun arsitektur yang baik.', 'Belajar dasar-dasar AWS Cloud, mulai dari konsep cloud hingga cara membangun arsitektur yang baik.', 'Sertifikat_AWS_cloud_Dicoding1.png', '2022-05-16 18:27:15'),
(5, 'Sertifikat Kelulusan ', 'Belajar Dasar Pemrograman Web', '<br><p>Belajar Dasar Pemrograman Web.Sertifikat ini  saya dapatkan dari beasiswa dicoding yang diselenggarakan oleh dicoding dengan kementrian Parekraf.Beasiswa ini dapat di lihat pada website Baparekraf Coding Day.</p>', 'sertifikasi_web_dasar1.png', '2022-05-17 00:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `skill` varchar(255) NOT NULL,
  `bgcolor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `icon`, `skill`, `bgcolor`) VALUES
(7, NULL, 'PHP', '#541690'),
(8, NULL, 'HTML&CSS', '#FF4949'),
(9, NULL, 'Javascript', '#FF8D29'),
(15, NULL, 'Bootstrap', '#764AF1'),
(16, NULL, 'Codeigniter3', '#F32424'),
(17, NULL, 'Laravel', '#EB5353'),
(18, NULL, 'C#', '#3B44F6'),
(23, NULL, 'GIT', '#F32424'),
(26, NULL, 'VB.NET', '#A149FA'),
(27, NULL, 'JQUERY', '#3AB0FF'),
(29, NULL, 'SQLServer', '#A10035'),
(30, NULL, 'PostgreSQL', '#6E85B7'),
(31, NULL, 'MySQL', '#FAEA48'),
(32, NULL, 'Github', '#191919'),
(33, NULL, 'Corel', '#3CCF4E'),
(34, NULL, 'Photoshop', '#003865');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `sosmed`, `link`) VALUES
(1, 'fab fa-facebook-f', 'https://web.facebook.com/sayyid.aziz.12/'),
(2, 'fab fa-instagram', 'https://www.instagram.com/sayyidazizii/'),
(4, 'fab fa-linkedin-in', 'https://www.linkedin.com/in/sayyid-syafiq-52aaaa220/'),
(5, 'fab fa-github', 'https://github.com/sayyidazizii');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`) VALUES
(1, 'sayyid', 'c09dd0a95b31e4452eae79f1ad05e3c6', 1),
(3, 'sayyidaziz', 'c09dd0a95b31e4452eae79f1ad05e3c6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
