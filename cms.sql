-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 28, 2020 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'PHP'),
(2, 'JAVASCRIPT'),
(3, 'PYTHON'),
(11, 'C#'),
(13, 'PERL');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 2, 'Randheer Kumar', 'Randheerkumar2010@gmail.com', 'this is cms project for learning purpose.', 'Approved', '2020-05-07'),
(2, 4, 'Raushan kumar', 'kumar@gmail.com', 'this will happen to anyone.', 'Approved', '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(4, 4, 'CORONA VIRUS ISSUE', 'RAUSHAN GUHATI', 'SHASHIKANT PODDAR', '2020-05-01', 'Raju_placeholder.jpg', 'Chuck Rhoades, a sincere but ruthless US attorney, engages in an egoistic battle with hedge fund kingpin Bobby \'Axe\' Axelrod as they try to outdo each other in the competitive financial market.', 'LAHERAISARIA', 90, 'published', 14),
(17, 33, 'PYTHON', 'RANDHEER KUMAR', 'Rajeev Singh', '2020-05-15', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 57, 'published', 45),
(32, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-15', 'Friend_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 57, 'published', 44),
(33, 33, 'PYTHON', 'KUMAR', '', '2020-05-15', 'end_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 57, 'published', 43),
(34, 8, 'CORONA VIRUS ISSUE', 'RAUSHAN GUHATI', '', '2020-05-01', 'Raju_placeholder.jpg', 'Chuck Rhoades, a sincere but ruthless US attorney, engages in an egoistic battle with hedge fund kingpin Bobby \'Axe\' Axelrod as they try to outdo each other in the competitive financial market.', 'LAHERAISARIA', 90, 'published', 23),
(35, 33, 'PYTHON', 'KUMAR', '', '2020-05-27', 'end_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 0, 'published', 1),
(36, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(37, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(38, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'Friend_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 0, 'published', 0),
(39, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(40, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'Friend_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 0, 'published', 0),
(41, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-27', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(42, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(43, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(44, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(45, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(46, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(47, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'age_placeholder.jpg', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some', 'GOOD ONE', 0, 'published', 0),
(48, 33, 'PYTHON', 'RANDHEER KUMAR', '', '2020-05-28', 'Friend_placeholder.jpg', 'In season five of BILLIONS, Bobby Axelrod (Damian Lewis) and Chuck Rhoades (Paul Giamatti) see their vicious rivalry reignited, while new enemies rise and take aim. ... Watch new episodes of Billions on Sundays at 9/8c on SHOWTIME.', 'GOOD ONE', 0, 'published', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'Randheer', 'Rajeev@1', 'Rajeev', 'Singh', 'Rahu@gmail.com', 'image_placeholder.jpg', 'admin', 'kuch toh hoga'),
(2, 'Shashi', 'chutiya', 'kabru', 'mali', 'mali@gmail.com', 'Raju_placeholder.jpg', 'subscriber', 'koru'),
(91, 'GOLU sINGH', 'sINGH123', 'GOLU', 'SINGH', 'SINGH@GMAIL.COM', 'age_placeholder.jpg', 'admin', '$2y$10$iusesomecrazystring22'),
(92, 'Raju', 'Raju@12', '', '', 'Raju@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(93, 'Golu Singer', 'Golu@123', '', '', 'Golu@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(94, 'Shashi', 'kuLunMkGlQmgU', '', '', 'rahul@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(95, 'Raushan', 'kuH/nSEu4KMk2', '', '', 'Raushan@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(96, 'domo100', 'kuAa/iL8qvSX2', '', '', 'domo100@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(97, 'doli', 'kuzxtCaRK3dfM', '', '', 'doli@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(98, 'Ram', '$2y$12$bJ52bTyY5sz2K/Z2E27zsuBZ69QrbSHDF8czPykIkINOXYxYYG.6u', '', '', 'Ram@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(107, 'kullu', '$2y$12$.x4Ikn3rPYZHGoeB6ly6.OdcYp1WSTZCK4qsRgCVZ6ngYkKvZJeQW', '', '', 'kullu@gmail.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(108, '', '$2y$10$KAI8LA5AevJj8MY9JLD5DuFk03kz6D0.hMtVsTWetCp8Od4tyw.g.', '', '', '', '', '', '$2y$10$iusesomecrazystrings22'),
(109, '', '$2y$10$1WaxQ.vCQjDSTYc9r.YWReBXKm4jD4F1995JPqAwlp0ymypzzdTA2', '', '', '', '', '', '$2y$10$iusesomecrazystrings22'),
(110, '', '$2y$10$3VG1DrGRK1Q44ANKzPI3p.hcZLvUOKWm1wKeSmf2kDWzLeh5Matza', '', '', '', '', '', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(2, 'lmsrvcok2acbbqhd6hdmbrvheg', 1590602719),
(3, '1a1jut2uo7irvv8d94d1a4f16m', 1590604490);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
