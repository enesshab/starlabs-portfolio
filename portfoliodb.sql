-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2022 at 07:42 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_headings`
--

CREATE TABLE `about_headings` (
  `id` int(11) NOT NULL,
  `bigTitle` varchar(255) NOT NULL,
  `smallTitle` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_headings`
--

INSERT INTO `about_headings` (`id`, `bigTitle`, `smallTitle`, `description`) VALUES
(1, 'Hi there, I\'m Enes Shabani.', 'Web Developer and part time Graphic Designer.', 'I make every effort to ensure that my excitement and passion for my job shows through and defines me in whatever I do. I\'ve discovered that teamwork has many difficulties, but also inspiration and creativity are even higher. Time management and communication are very vital in every industry, so I\'ve worked very hard to develop these skills in order to foster future goals.');

-- --------------------------------------------------------

--
-- Table structure for table `about_skills`
--

CREATE TABLE `about_skills` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `tools` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_skills`
--

INSERT INTO `about_skills` (`id`, `title`, `description`, `tools`) VALUES
(1, 'Designer', 'I love doing logo designs, concepts, brands, and illustration.', 'Adobe Illustrator, Adobe Photoshop, Adobe XD'),
(2, 'Frontend', 'I love coding good-looking websites that are eye-catching for users.', 'HTML, CSS, JS, Bootstrap'),
(3, 'Backend', 'I make sure the website is easy to maintain and edit by every user.', 'PHP, Laravel, MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `client_headings`
--

CREATE TABLE `client_headings` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_headings`
--

INSERT INTO `client_headings` (`id`, `title`, `description`) VALUES
(1, 'Client\'s Says', 'Some of my client\'s thoughts about my work.');

-- --------------------------------------------------------

--
-- Table structure for table `client_says`
--

CREATE TABLE `client_says` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_says`
--

INSERT INTO `client_says` (`id`, `name`, `description`, `filename`) VALUES
(1, 'John Doe', 'From the start of the project, through to completion, Enes supported us and exceeded our expectations in every way.', 'CLIENT_61f6e90555f9d.jpg'),
(2, 'Jane Doe', 'Enes was very helpful and fast to respond to my inquiry to help with my website issues. His knowledge was amazing.', 'CLIENT_61f6e90d3d70e.jpg'),
(3, 'Richard Roe', 'Enes is a great help managing a very out of date website. Everything we ask him to do is done quickly and efficiently.', 'CLIENT_61f6e9134f985.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `time`) VALUES
(6, 'Enes Shabani', 'gicators@gmail.com', 'From the start of the project, through to completion, Enes supported us and exceeded our expectations in every way.', '2022-01-30 20:22:37'),
(7, 'Rilind Neziraj', 'rilind@neziraj.com', 'Enes was very helpful and fast to respond to my inquiry to help with my website issues. His knowledge was amazing.', '2022-01-30 20:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `contact_headings`
--

CREATE TABLE `contact_headings` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_headings`
--

INSERT INTO `contact_headings` (`id`, `title`, `description`) VALUES
(1, 'Get in touch', 'If you got something in mind, let\'s work together!');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `dribbble` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `facebook`, `twitter`, `linkedin`, `dribbble`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://dribbble.com/');

-- --------------------------------------------------------

--
-- Table structure for table `main_headings`
--

CREATE TABLE `main_headings` (
  `id` int(11) NOT NULL,
  `smallTitle` varchar(255) NOT NULL,
  `bigTitle` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_headings`
--

INSERT INTO `main_headings` (`id`, `smallTitle`, `bigTitle`, `description`, `filename`) VALUES
(1, 'Hello,', 'I\'m Enes.', 'I\'m developing this portfolio for the second phase of interno in Starlabs.', 'MAIN_61f6e8ade6fc2.png');

-- --------------------------------------------------------

--
-- Table structure for table `mywork_headings`
--

CREATE TABLE `mywork_headings` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mywork_headings`
--

INSERT INTO `mywork_headings` (`id`, `title`, `description`) VALUES
(1, 'My Work', 'If you think we can work together, contact me!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Enes', 'Shabani', 'admin@portfolio.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `link`, `filename`) VALUES
(1, 'Example #1', '#', 'WORK_61f6e9d415003.jpg'),
(3, 'Example #2', '$', 'WORK_61f6e9dab3e29.jpg'),
(4, 'Example #3', '#', 'WORK_61f6e9e0d1fa5.jpg'),
(5, 'Example #4', '#', 'WORK_61f6e9e6b7ce6.jpg'),
(6, 'Example #5', '#', 'WORK_61f6e9f034711.jpg'),
(8, 'Example #6', '#', 'WORK_61f6e9f67ca99.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_headings`
--
ALTER TABLE `about_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_skills`
--
ALTER TABLE `about_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_headings`
--
ALTER TABLE `client_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_says`
--
ALTER TABLE `client_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_headings`
--
ALTER TABLE `contact_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_headings`
--
ALTER TABLE `main_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mywork_headings`
--
ALTER TABLE `mywork_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_headings`
--
ALTER TABLE `about_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_skills`
--
ALTER TABLE `about_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_headings`
--
ALTER TABLE `client_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_says`
--
ALTER TABLE `client_says`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_headings`
--
ALTER TABLE `contact_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_headings`
--
ALTER TABLE `main_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mywork_headings`
--
ALTER TABLE `mywork_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
