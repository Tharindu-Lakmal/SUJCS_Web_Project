-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 10:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sujcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_subjects`
--

CREATE TABLE `all_subjects` (
  `subject_id` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_subjects`
--

INSERT INTO `all_subjects` (`subject_id`, `subject_name`) VALUES
('ca1', 'software article'),
('ca2', 'software article'),
('cj1', 'computer'),
('cj2', 'computer'),
('cj3', 'computer'),
('clj1', 'cloud'),
('clj2', 'cloud'),
('sa1', 'security article'),
('sa2', 'security article'),
('sj1', 'software'),
('sj2', 'software'),
('sj3', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `article_types`
--

CREATE TABLE `article_types` (
  `type_id` varchar(100) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_types`
--

INSERT INTO `article_types` (`type_id`, `type_name`) VALUES
('TA01', 'software article'),
('TA02', 'security article');

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmark_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`bookmark_id`, `user_id`, `category_id`) VALUES
(1, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Journals'),
(2, 'Articles');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_computing`
--

CREATE TABLE `cloud_computing` (
  `subject_id` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloud_computing`
--

INSERT INTO `cloud_computing` (`subject_id`, `subject_name`) VALUES
('clj1', 'cloud'),
('clj2', 'cloud');

-- --------------------------------------------------------

--
-- Table structure for table `computer_security`
--

CREATE TABLE `computer_security` (
  `subject_id` varchar(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer_security`
--

INSERT INTO `computer_security` (`subject_id`, `subject_name`) VALUES
('cj1', 'computer'),
('cj2', 'computer'),
('cj3', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `journal_Id` int(11) NOT NULL,
  `journal_title` varchar(255) NOT NULL,
  `journal_description` varchar(255) NOT NULL,
  `journal_keyword` varchar(255) NOT NULL,
  `journal_pdf` varchar(255) NOT NULL,
  `category_id` int(100) NOT NULL,
  `journal_type_id` varchar(100) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_affliation` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_designation` varchar(255) NOT NULL,
  `journal_publish_date` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`journal_Id`, `journal_title`, `journal_description`, `journal_keyword`, `journal_pdf`, `category_id`, `journal_type_id`, `subject_id`, `author_name`, `author_affliation`, `author_email`, `author_designation`, `journal_publish_date`, `date`) VALUES
(1, 'Software Engineering', 'the branch of computer science that deals with the design, development, testing, and maintenance of software applications', 'software engineering, engineering, software, full stack developer', 'Untitled document.pdf', 0, '', '1', 'Akela Dumindu', 'Sabaragamuwa university of Sri Lanka', 'akela@gmail.com', 'undergraduate', '2024-02-27', '2024-02-27 07:33:33'),
(3, 'cyber security', ' the practice of protecting internet-connected systems such as hardware, software and data from cyberthreats', 'cyber, security', 'CamScanner 11-12-2023 01.00.pdf', 2, '', '2', 'dumindu', 'Sabaragamuwa university of Sri Lanka', 'akkk@gmail.com', 'undergraduate', '2024-02-28', '2024-02-28 09:24:31'),
(4, 'cyber security', ' the practice of protecting internet-connected systems such as hardware, software and data from cyberthreats', 'cyber, security', 'CamScanner 11-12-2023 01.00.pdf', 2, '', '2', 'dumindu', 'Sabaragamuwa university of Sri Lanka', 'akkk@gmail.com', 'undergraduate', '2024-02-28', '2024-02-28 17:20:29'),
(5, 'cyber security', ' the practice of protecting internet-connected systems such as hardware, software and data from cyberthreats', 'cyber, security', 'CamScanner 11-12-2023 01.00.pdf', 2, '', '2', 'dumindu', 'Sabaragamuwa university of Sri Lanka', 'akkk@gmail.com', 'undergraduate', '2024-02-28', '2024-02-28 17:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `journal_types`
--

CREATE TABLE `journal_types` (
  `type_id` varchar(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journal_types`
--

INSERT INTO `journal_types` (`type_id`, `type_name`) VALUES
('TJ01', 'software Engineering'),
('TJ02', 'Computer Security'),
('TJ03', 'Cloud Computing');

-- --------------------------------------------------------

--
-- Table structure for table `security_article`
--

CREATE TABLE `security_article` (
  `subject_id` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security_article`
--

INSERT INTO `security_article` (`subject_id`, `subject_name`) VALUES
('sa1', 'security article'),
('sa2', 'security article');

-- --------------------------------------------------------

--
-- Table structure for table `software_article`
--

CREATE TABLE `software_article` (
  `subject_id` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `software_article`
--

INSERT INTO `software_article` (`subject_id`, `subject_name`) VALUES
('ca1', 'software article'),
('ca2', 'software article');

-- --------------------------------------------------------

--
-- Table structure for table `software_engineering`
--

CREATE TABLE `software_engineering` (
  `subject_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `software_engineering`
--

INSERT INTO `software_engineering` (`subject_id`, `subject_name`) VALUES
('sj1', 'software'),
('sj2', 'software'),
('sj3', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(10, 'Akela', 'akela@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(11, 'dumindu', 'dumi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_subjects`
--
ALTER TABLE `all_subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `article_types`
--
ALTER TABLE `article_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cloud_computing`
--
ALTER TABLE `cloud_computing`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `computer_security`
--
ALTER TABLE `computer_security`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`journal_Id`);

--
-- Indexes for table `journal_types`
--
ALTER TABLE `journal_types`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `type_id_2` (`type_id`),
  ADD KEY `type_id_3` (`type_id`),
  ADD KEY `type_id_4` (`type_id`);

--
-- Indexes for table `security_article`
--
ALTER TABLE `security_article`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `software_article`
--
ALTER TABLE `software_article`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `software_engineering`
--
ALTER TABLE `software_engineering`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `journal_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
