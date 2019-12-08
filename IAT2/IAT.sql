-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2019 at 08:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IAT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Changes`
--

CREATE TABLE `Changes` (
  `QP_code` int(10) NOT NULL,
  `Changes_needed` varchar(300) NOT NULL,
  `change_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Changes`
--

INSERT INTO `Changes` (`QP_code`, `Changes_needed`, `change_id`) VALUES
(28, 'spelling errors', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Question_paper`
--

CREATE TABLE `Question_paper` (
  `QP_code` int(10) NOT NULL,
  `Subject_code` varchar(10) NOT NULL,
  `Sem` int(10) NOT NULL,
  `QP` varchar(100) NOT NULL,
  `VerifiedbyCCI` tinyint(1) NOT NULL DEFAULT '0',
  `CI_Id` int(10) NOT NULL,
  `Confirmed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Question_paper`
--

INSERT INTO `Question_paper` (`QP_code`, `Subject_code`, `Sem`, `QP`, `VerifiedbyCCI`, `CI_Id`, `Confirmed`) VALUES
(28, '15CS42', 4, 'upload_qp/5424Ch05-2.pdf', 1, 20, 1),
(32, '15CS42', 4, 'upload_qp/CHAPTER 5.pdf', 0, 20, 0),
(33, '15CS42', 4, 'upload_qp/lecture 01 Boolean logic-2.pdf', 0, 20, 0),
(34, '15CS42', 4, 'upload_qp/5424Ch05.pdf', 0, 20, 0),
(35, '15CS42', 4, 'upload_qp/AnnexureE.pdf', 0, 20, 0),
(36, '15CS42', 4, 'upload_qp/5424Ch05-2 (1).pdf', 0, 20, 0),
(37, '15CS42', 4, 'upload_qp/5424Ch05-7.pdf', 0, 20, 0),
(38, '15CS42', 4, 'upload_qp/DBMS_Concurrencycontol.pdf', 0, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `Staff_id` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Options` varchar(40) NOT NULL,
  `Sem` int(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_id`, `Email`, `Password`, `Options`, `Sem`, `Name`, `Subject`) VALUES
(20, 'ramu@gmail.com', 'ramu', 'Course Instructor - CI', 4, 'Ramu', 'Software Engineering'),
(21, 'raju@gmail.com', 'raju', 'Test Coordinator - TC', 2, 'Raju', 'Analog and Digital Electronics'),
(22, 'rock@gmail.com', 'rock', 'Chief Course Instructor - CCI', 5, 'Rock', 'Computer Networks'),
(23, 'mini@gmail.com', 'mini', 'Chief Course Instructor - CCI', 4, 'Mini', 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `Subjects`
--

CREATE TABLE `Subjects` (
  `Subject_code` varchar(10) NOT NULL,
  `SubjectName` varchar(60) NOT NULL,
  `Semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subjects`
--

INSERT INTO `Subjects` (`Subject_code`, `SubjectName`, `Semester`) VALUES
(' 15CS743', ' INFORMATION AND NETWORK SECURITY', 7),
('15CED24	', 'Computer Aided Engineering Drawing	', 2),
('15CHE22	', 'Engineering Chemistry', 2),
('15CIV13	', 'Elements of Civil Engg & Mechanics', 1),
('15CIV28	', 'Environmental Studies', 2),
('15CPH18', 'Constitution of India, Professional Ethics and Human Rights ', 1),
('15CS32	', 'Analog and Digital Electronics', 3),
('15CS33	', 'Data Structures and Applications	', 3),
('15CS34	', 'Computer Organization', 3),
('15CS35', 'Unix and Shell Programming', 3),
('15CS36', 'Discrete Mathematical structures', 3),
('15CS42', 'Software Engineering', 4),
('15CS43', 'Design and Analysis of Algorithms', 4),
('15CS44', 'Microprocessors and microcontrollers', 4),
('15CS45', 'Object Oriented Programming with JAVA', 4),
('15CS46', 'Data communications', 4),
('15CS51', 'Management and Entrepreneurship for IT Industry', 5),
('15CS52', 'Computer Networks	', 5),
('15CS53', 'Database Management System', 5),
('15CS54', 'Automata theory and Computability', 5),
('15CS553', 'Advanced JAVA and J2EE	', 5),
('15CS562', 'Artificial Intelligence', 5),
('15CS564	', 'Dot Net Frame work for Application Development', 5),
('15CS61	', 'Cryptography, Network Security and Cyber Law', 6),
('15CS62	', 'Computer Graphics and Visualization', 6),
('15CS63	', 'System Software and Compiler Design', 6),
('15CS64	', 'Operating Systems', 6),
('15CS651	', 'Data Mining and Data Warehousing	', 6),
('15CS652', 'Software Architecture and Design Patterns', 6),
('15CS653	', 'Operation research', 6),
('15CS654	', 'Distributed Computing system	', 6),
('15CS71', 'WEB TECHNOLOGY AND ITS APPLICATIONS', 7),
('15CS72', 'ADVANCED COMPUTER ARCHITECTURES', 7),
('15CS73', 'MACHINE LEARNING', 7),
('15CS741', 'NATURAL LANGUAGE PROCESSING', 7),
('15CS742', 'CLOUD COMPUTING AND ITS APPLICATIONS', 7),
('15CS744', 'UNIX SYSTEM PROGRAMMING', 7),
('15CS751', ' SOFT AND EVOLUTIONARY COMPUTING', 7),
('15CS752', 'COMPUTER VISION AND ROBOTICS', 7),
('15CS753', '  DIGITAL IMAGE PROCESSING', 7),
('15CS754', 'STORAGE AREA NETWORKS', 7),
('15CS81	', 'Internet of Things and Applications', 8),
('15CS82	', 'Big Data Analytics	', 8),
('15CS831	', 'High Performance Computing', 8),
('15CS832', 'User Interface Design	', 8),
('15CS833	', 'Network management', 8),
('15CS834	', 'System Modeling and Simulation', 8),
('15ELE15	', 'Basic Electrical Engg.', 1),
('15ELN25', 'Basic Electronics', 2),
('15EME14	', 'Elements of Mechanical Engg', 1),
('15MAT11	', 'Engineering Maths-I', 1),
('15MAT21', 'Engineering Maths-II', 2),
('15MAT31', 'Engineering Mathematics - III', 3),
('15MAT41', 'Engineering Mathematics - IV', 4),
('15PCD23	', 'Programming in C & Data Structures', 2),
('15PHY12', 'Engineering Physics', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Changes`
--
ALTER TABLE `Changes`
  ADD PRIMARY KEY (`change_id`);

--
-- Indexes for table `Question_paper`
--
ALTER TABLE `Question_paper`
  ADD PRIMARY KEY (`QP_code`),
  ADD KEY `Subject_code` (`Subject_code`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `Subjects`
--
ALTER TABLE `Subjects`
  ADD PRIMARY KEY (`Subject_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Changes`
--
ALTER TABLE `Changes`
  MODIFY `change_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Question_paper`
--
ALTER TABLE `Question_paper`
  MODIFY `QP_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Staff_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Question_paper`
--
ALTER TABLE `Question_paper`
  ADD CONSTRAINT `question_paper_ibfk_1` FOREIGN KEY (`Subject_code`) REFERENCES `Subjects` (`Subject_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
