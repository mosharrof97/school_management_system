-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 12:55 AM
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
(1, 'Batch 5', '13:00'),
(2, 'Batch 2', '14:00'),
(3, 'Batch 3', '16:00'),
(4, 'Batch 4', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `address`) VALUES
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
(5, '2023-10-11', 'English', 'Imran Ali', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `c_course_fee` decimal(10,0) NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `course_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `c_course_fee`, `course_desc`, `course_image`) VALUES
(1, 'Bangla', 5000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1697821799_0c546014ffb01dfa7a87.jpg'),
(2, 'English', 3000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1697821876_4351bf429126fc874483.jpg'),
(3, 'Math', 3000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1697821907_eb322afdbcdbb450d405.jpg'),
(4, 'ICT', 3000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1697821931_e0632fe03443838342f7.jpg'),
(5, 'General Knows', 2500, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1697821953_6ee314c144a7d937b241.jpg'),
(6, 'General Knows', 2500, '', '1697821532_9394e073dfc047dca532.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_sub_title` varchar(100) NOT NULL,
  `slider_title` varchar(120) NOT NULL,
  `slider_image` varchar(150) NOT NULL,
  `slider_btn_title` varchar(50) NOT NULL,
  `slider_btn_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `slider_sub_title`, `slider_title`, `slider_image`, `slider_btn_title`, `slider_btn_link`) VALUES
(1, 'World Leading University', 'dfhdxghdcvbn', '1697704510_5444590e878edc3f7643.jpg', '', 'https://www.youtube.com/'),
(2, 'World Leading University', ' Educavo University. Discover More', '1697704536_56b532ed4172e7e3fa7e.jpg', '', 'https://www.youtube.com/'),
(3, 'World Leading University', ' Educavo University. Discover More', '1697704687_a528bd31812e6cded68b.jpg', '', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_image`) VALUES
(1, '1697692521_3c72c83e89ab61f4ca25.png');

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
(1, 'Bangla Class', '2023-10-03', '15:55:29', 'গুচ্ছভুক্ত ২২টি সাধারণ, বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের ২০২২-২৩ শিক্ষাবর্ষে জিএসটি গুচ্ছভূক্ত বিশ্ববিদ্যালয়সমূহে ভর্তিতে আগ্রহী হলে আজ সোমবারের (২ অক্টোবর) মধ্যে জানাতে হবে। প্রাথমিক ভর্তির বিষয়ে নির্দেশনাও প্রকাশ করেছে ভর্তি কমিটি। গুচ্ছ ভর্তির ওয়েবসাইটে এ তথ্য জানানো হয়েছে।\r\nবিশেষ পর্যায়ের ভর্তি সংক্রান্ত বিজ্ঞপ্তিতে বলা হয়েছে, জিএসটি ভর্তি প্রক্রিয়ার সর্বশেষ (চতুর্থ) পর্যায় ইতোমধ্যে সম্পন্ন হয়েছে। ভর্তিকৃত শিক্ষার্থীদের স্বেচ্ছায় ভর্তি বাতিলের কারণে কিছু আসন শূন্য হওয়ায় একটি বিশেষ পর্যায়ে', '1696326926_71ec52c7eccc7f894bb5.jpg'),
(2, 'Professional Masters in Environmental Planning, Management and Sustainable Development (PMEPMSD) :: Admission Announcement', '2023-10-22', '04:38:01', '', '1697927880_00c15d0c84310a0eeb8c.jpg'),
(3, ' রাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি', '2023-10-22', '04:41:36', 'রাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি\r\nরাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি\r\nরাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি\r\nরাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি\r\nরাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ বিজ্ঞপ্তি\r\nরাষ্ট্রবিজ্ঞান সতীর্থ ফোরাম (১৯৭৬-১৯৭৯) ট্রাস্ট ফান্ডের বৃত্তি, ২০২২-২০২৩ ব', '1697928094_721b965fb8f4c204fe10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment` decimal(10,0) NOT NULL,
  `course_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `student`, `payment_date`, `payment`, `course_id`, `branch_id`, `batch_id`) VALUES
(1, 11, '2023-10-08 11:37:23', 5555, 0, 0, 0),
(5, 13, '2023-10-08 17:13:42', 5555, 0, 0, 0),
(6, 13, '2023-10-08 17:14:15', 5000, 0, 0, 0),
(7, 13, '2023-10-08 18:24:40', 5000, 0, 0, 0),
(8, 13, '2023-10-14 16:11:24', 3333, 0, 0, 0),
(9, 13, '2023-10-19 10:45:28', 2000, 4, 6, 4),
(10, 13, '2023-10-19 10:52:25', 2000, 4, 6, 4);

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
  `student_payment` int(11) NOT NULL,
  `course_fee` decimal(10,0) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `number`, `email`, `father_name`, `father_number`, `mother_name`, `mother_number`, `district`, `address`, `college_name`, `hsc_roll`, `hsc_reg`, `hsc_gpa`, `school_name`, `ssc_roll`, `ssc_reg`, `ssc-gpa`, `course_id`, `batch_id`, `branch_id`, `student_payment`, `course_fee`, `image`, `status`) VALUES
(3, 'Mosharrof', '12234534', '', 'mojnu', '0124859425', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 5, 5000, 0, '1696535313_ca3eb079125cbf33ba1d.jpg', ''),
(4, 'Mosharrof', '12234534', '', 'mojnu', '0124859425', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 4, 5000, 0, '1696535427_2b4971ac31275d3d283e.jpg', ''),
(5, 'Sirajum Monira', '01774656830', '', 'Monir', '01774656830', 'mukta', '01774656830', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 2, 4, 5000, 0, '1696539463_cd3f96ac28185091f1ea.jpg', ''),
(6, 'imram', '01774656830', '', 'Rakib', '01774656830', 'Monira', '01774656830', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 2, 5, 5000, 0, '1696539885_fc83513c3b9b5780c311.jpg', ''),
(7, 'Mosharrof', '12234534', '', 'bgfkhj', '01774656830', 'mukta', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '2356326456', '5.00', 2, 1, 4, 5000, 0, '1696540009_73c538b7e83d90dcc18e.jpg', ''),
(8, 'Mosharrof', '12234534', '', 'skmiraj', '0124859425', 'Monira', '0124859456', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 1, 1, 5, 5000, 0, '1696540155_b563931e3a5da0f7a6ad.jpg', ''),
(9, 'Mosharrof', '01478451203', 'misu292019@gmail.com', 'mojnu', '01324458102', 'mukta', '01784621054', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 2, 4, 6, 5000, 5000, '1696789161_aef370487c38631e073b.jpg', ''),
(10, 'Mosharrof Hosain', '0112254635', 'mhosain6730001@gmail.com', 'cgxdg', 'fgdg', 'dfgsd', 'dfgdg', 'dfgdg', 'dfgdfg', 'dfgdfg', '456454', '1545', '5', 'gjdrfthgj,hvj', '45866', '45646', '5', 2, 2, 5, 5000, 50005, '1696605872_de50b2c67d968fa52415.jpg', ''),
(11, 'Manik', '01476563210', 'mhosain6730012@gmail.com', 'manik', '012455785256', 'surove', '01323254782', 'rangpur', 'rangpur', 'carmichael college', '456454', '1545', '5', 'carmichael college', '45866', '45646', '5', 4, 4, 6, 5000, 10000, '1696787665_a73a510fe608c5e73be3.jpg', ''),
(12, 'Mosharrof', '01774656830', 'mhosain673jklj@gmail.com', 'mojnu', '01774656830', 'mukta', '01774656830', 'Rangpur', 'lagbag Rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '2356326456', '5.00', 4, 4, 6, 0, 5000, '1696787603_ad39b25d57f18f2852d1.jpg', ''),
(13, 'Mosharrof11', '017746568300', 'mhosain67dfsd3@gmail.com', 'mojnu', '01774656830', 'Monira', '01774656830', 'Rangpur', 'CollegePara, rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '235632645600', '5.00', 4, 4, 6, 0, 50001, '1696787538_ec51d17b6b782cac2dee.jpg', ''),
(16, 'Md. Shamim', '017746568300', 'shamim673@gmail.com', 'Rakib', '01990309361', 'Monira', '01774656830', 'Rangpur', 'CollegePara, rangpur', 'carmichael college', '5646268', '5645456456', '5.00', 'carmichael college', '4564536345', '4682124645', '5.00', 6, 4, 6, 0, 5000, '1697831977_68d9ebec175a10170cf8.jpg', '');

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
  `password` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `role_id`, `password`, `image`) VALUES
(1, 'Mosharrof', 'mosharrof', 'mhosain673@gmail.com', 8, '$2y$10$MBGBoxugCo5f0CCqIaKsMOREmeQM/4JqSVIWYhq.yUWNv92BnHusW', '1696877500_e3e16ad12ee955570fd1.jpg');

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
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

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
  ADD KEY `student_id` (`student`);

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
  ADD KEY `student_payment` (`student_payment`),
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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`student`) REFERENCES `student` (`student_id`);

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
