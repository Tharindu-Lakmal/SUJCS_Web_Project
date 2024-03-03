-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 07:04 AM
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
(5, 'cyber security', ' the practice of protecting internet-connected systems such as hardware, software and data from cyberthreats', 'cyber, security', 'CamScanner 11-12-2023 01.00.pdf', 2, '', '2', 'dumindu', 'Sabaragamuwa university of Sri Lanka', 'akkk@gmail.com', 'undergraduate', '2024-02-28', '2024-02-28 17:24:17'),
(6, 'Software engineering', 'A software engineer is a person who applies the engineering design process to design, develop, test, maintain, and evaluate computer software.', 'engineering, software', 'CamScanner 11-12-2023 01.00 (2).pdf', 1, 'TJ01', 'sj2', 'Akela', 'saaaaaaaaaa', 'akela@gmail.com', 'undergraduate', '2024-03-03', '2024-03-03 05:59:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`journal_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `journal_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
