-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:22 AM
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
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(20) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`, `time`) VALUES
(1, 'Batch 5', '12:00'),
(2, 'Batch 2', '14:00'),
(3, 'Batch 3', '16:00'),
(4, 'Batch 4', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `name`, `address`) VALUES
(4, 'Lalbag', 'lagbag Rangpur'),
(5, 'Lalbag', 'lagbag Rangpur'),
(6, 'College Para', 'CollegePara, rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `class_name` varchar(40) NOT NULL,
  `teacher` varchar(40) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `date`, `class_name`, `teacher`, `time`) VALUES
(3, '2023-10-11', 'English', 'Imran Ali', '02:03:00'),
(4, '2023-10-26', 'English', 'Imran Ali', '02:00:00'),
(5, '2023-10-11', 'English', 'Imran Ali', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course_fee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `course_fee`) VALUES
(1, 'Bangla', '2500'),
(2, 'English', '3000'),
(3, 'Math', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `desc` varchar(500) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `date`, `time`, `desc`, `image`) VALUES
(1, 'Bangla Class', '2023-10-03', '15:55:29', 'গুচ্ছভুক্ত ২২টি সাধারণ, বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের ২০২২-২৩ শিক্ষাবর্ষে জিএসটি গুচ্ছভূক্ত বিশ্ববিদ্যালয়সমূহে ভর্তিতে আগ্রহী হলে আজ সোমবারের (২ অক্টোবর) মধ্যে জানাতে হবে। প্রাথমিক ভর্তির বিষয়ে নির্দেশনাও প্রকাশ করেছে ভর্তি কমিটি। গুচ্ছ ভর্তির ওয়েবসাইটে এ তথ্য জানানো হয়েছে।\r\nবিশেষ পর্যায়ের ভর্তি সংক্রান্ত বিজ্ঞপ্তিতে বলা হয়েছে, জিএসটি ভর্তি প্রক্রিয়ার সর্বশেষ (চতুর্থ) পর্যায় ইতোমধ্যে সম্পন্ন হয়েছে। ভর্তিকৃত শিক্ষার্থীদের স্বেচ্ছায় ভর্তি বাতিলের কারণে কিছু আসন শূন্য হওয়ায় একটি বিশেষ পর্যায়ে', '1696326926_71ec52c7eccc7f894bb5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date_1` date NOT NULL,
  `payment_1` varchar(15) NOT NULL,
  `date_2` date NOT NULL,
  `payment_2` varchar(15) NOT NULL,
  `date_3` date NOT NULL,
  `payment_3` varchar(15) NOT NULL,
  `date_4` date NOT NULL,
  `payment_4` varchar(15) NOT NULL,
  `date_5` date NOT NULL,
  `payment_5` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`) VALUES
(8, 'admin'),
(9, 'Editor'),
(10, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_number` varchar(15) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `mother_number` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `hsc_roll` varchar(20) NOT NULL,
  `hsc_reg` varchar(20) NOT NULL,
  `hsc_gpa` varchar(10) NOT NULL,
  `school_name` varchar(150) NOT NULL,
  `ssc_roll` varchar(20) NOT NULL,
  `ssc_reg` varchar(20) NOT NULL,
  `ssc-gpa` varchar(10) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `number`, `email`, `father_name`, `father_number`, `mother_name`, `mother_number`, `district`, `address`, `college_name`, `hsc_roll`, `hsc_reg`, `hsc_gpa`, `school_name`, `ssc_roll`, `ssc_reg`, `ssc-gpa`, `course_id`, `batch_id`, `branch_id`, `payment_id`, `image`) VALUES
(3, 'Mosharrof', '12234534', '', 'mojnu', '0124859425', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 5, 5000, '1696535313_ca3eb079125cbf33ba1d.jpg'),
(4, 'Mosharrof', '12234534', '', 'mojnu', '0124859425', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 4, 5000, '1696535427_2b4971ac31275d3d283e.jpg'),
(5, 'Sirajum Monira', '01774656830', '', 'Monir', '01774656830', 'mukta', '01774656830', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 2, 4, 5000, '1696539463_cd3f96ac28185091f1ea.jpg'),
(6, 'imram', '01774656830', '', 'Rakib', '01774656830', 'Monira', '01774656830', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 2, 5, 5000, '1696539885_fc83513c3b9b5780c311.jpg'),
(7, 'Mosharrof', '12234534', '', 'bgfkhj', '01774656830', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '2356326456', '5.00', 2, 1, 4, 5000, '1696540009_73c538b7e83d90dcc18e.jpg'),
(8, 'Mosharrof', '12234534', '', 'skmiraj', '0124859425', 'Monira', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 5, 5000, '1696540155_b563931e3a5da0f7a6ad.jpg'),
(9, 'Mosharrof', '12234534', '', 'mojnu', '0124859425', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 4, 5000, '1696570785_a24bb684b82ce23e89cf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `role_id`, `password`, `image`) VALUES
(3, 'Mosharrof', 'mosharrof111', 'mhosain673@gmail.com', 8, '123456', '1696525231_dad000479d0c1957d3a5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_student` (`student_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_batch` (`batch_id`),
  ADD KEY `student_branch` (`branch_id`),
  ADD KEY `student_payment` (`payment_id`),
  ADD KEY `student_course` (`course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_batch` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  ADD CONSTRAINT `student_branch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `student_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
