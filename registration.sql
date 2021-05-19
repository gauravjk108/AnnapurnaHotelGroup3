-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 09:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdata`
--

CREATE TABLE `bookingdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `guestnum` int(10) NOT NULL,
  `suite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdata`
--

INSERT INTO `bookingdata` (`id`, `name`, `phonenumber`, `email`, `checkin`, `checkout`, `guestnum`, `suite`) VALUES
(22, 'hahahah', '9812456709', 'hahah@gmail.com', '2020-01-01', '2020-01-09', 2, 'presidential-suite'),
(23, 'rtfyvghbjk', '9817299780', 'aazad.khadka@gmail.com', '2020-01-01', '2020-01-02', 2, 'presidential-suite'),
(24, 'dgcfvhbjn', '9851086680', 'tyg@gmail.com', '2020-01-01', '2020-01-04', 2, 'presidential-suite'),
(25, 'Aazad Khadka', '9818444657', 'aazad.khadka@gmail.com', '2020-01-02', '2020-01-11', 2, 'presidential-suite'),
(26, 'Aazad Khadka', '9851086680', 'aazad.khadka@gmail.com', '2020-01-02', '2020-01-10', 2, 'presidential-suite'),
(27, 'srdfghvnbn', '9817299780', 'aazad.khadka@gmail.com', '2020-01-03', '2020-01-10', 2, 'presidential-suite');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`name`, `email`, `subject`, `message`, `id`) VALUES
('Aazad Khadka', 'aazad.khadka@gmail.com', 'yolo', 'yghjk', 1),
('Aazad Khadka', 'aazad.khadka@gmail.com', 'room issue', 'fgvbjhnm', 2),
('Aazad Khadka', 'aazad.khadka@gmail.com', 'yolo', 'fvvhgjh', 3),
('anzil karki', 'nirajkhatiwada10@gmail.com', 'room issue', 'tyghj', 4);

-- --------------------------------------------------------

--
-- Table structure for table `enquiryinfo`
--

CREATE TABLE `enquiryinfo` (
  `id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `duration` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` text NOT NULL,
  `description` text NOT NULL,
  `site` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiryinfo`
--

INSERT INTO `enquiryinfo` (`id`, `checkin`, `duration`, `capacity`, `event`, `email`, `phonenumber`, `description`, `site`) VALUES
(2, '2020-01-04', 2, 11, 'moto dang', 'aadi@gmail.com', '9812456709', 'bike ride group will stay here.', 'banquet'),
(3, '2020-01-03', 2, 3, 'trftyghj', 'aazad.khadka@gmail.com', '9818444657', 'edtfyguhjikml,gvdhjdfvhaouefhwlei', 'suite'),
(4, '2020-01-03', 2, 4, 'trftyghj', 'aazad.khadka@gmail.com', '9818444657', '4sedtrfygiuhuj', 'banquet'),
(5, '2020-01-03', 2, 4, 'trftyghj', 'aazad.khadka@gmail.com', '9818444657', '4sedtrfygiuhuj', 'banquet'),
(6, '2020-01-03', 2, 4, 'trftyghj', 'aazad.khadka@gmail.com', '9818444657', '4sedtrfygiuhuj', 'banquet'),
(7, '2020-01-03', 2, 4, 'trftyghj', 'aazad.khadka@gmail.com', '9818444657', '4sedtrfygiuhuj', 'banquet'),
(8, '2020-01-03', 3, 25, 'dhakako promotion', 'aazad.khadka@gmail.com', '9823616655', 'Promoting masks for awareness.', 'lounge');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackinfo`
--

CREATE TABLE `feedbackinfo` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `issue` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackinfo`
--

INSERT INTO `feedbackinfo` (`id`, `subject`, `issue`, `feedback`) VALUES
(1, 'room issue', 'ac problem. ', 'fix the ac'),
(3, 'room issue', 'saw a cockroach in the room.', 'Hope you use bug disinfectants from time to time.');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `Filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `Filename`) VALUES
(1, 'a.jpg'),
(2, 'd.jpg'),
(3, 'd.jpg'),
(4, 'c.jpg'),
(5, 'b.jpg'),
(6, 'c.jpg'),
(7, 'd.jpg'),
(13, ''),
(14, 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature1` varchar(100) NOT NULL,
  `feature2` varchar(100) NOT NULL,
  `feature3` varchar(100) NOT NULL,
  `feature4` varchar(100) NOT NULL,
  `img_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `title`, `price`, `description`, `feature1`, `feature2`, `feature3`, `feature4`, `img_name`) VALUES
(2, 'Regency Executive Suite', '$500', 'Local artifacts and traditional Tibetan hand-woven carpet complement luxurious interiors, including parlor, dining table for six, private study with high-speed Internet access, granite bath with jetted spa tub and walk-in shower and separate bedroom with a king bed all within 120 square meters. Enjoy mineral water and fruit platter upon arrival, plus luxuries such as butler service on request and Regency Club lounge. This is a premium suite. See World of Hyatt program terms for upgrade eligibility.', 'Flat Screen Televisions', 'Direct Dial Telephone', 'Hair Dryer', 'Free Wifi', 'room-2.jpg'),
(3, 'Regency King Suite', '$400', 'Unwind in this spacious 80-square-metre suite with one king bed in a separate bedroom and featuring a              parlor, a work area with high-speed Internet access, and a granite bath with tub and walk-in shower, all              accented by local artifacts and distinctive decor reflective of Nepalese culture. Enjoy amenities such as              daily local newspaper, and access to the Regency Club lounge offering private concierge. This is a              standard suite. See World of Hyatt program terms for upgrade eligibility.Luxurious 200-sq.-metre suite              features panoramic Kathmandu Valley and Boudhanath Stupa views, plus distinctly Nepalese interiors including parlor, dining for eight, private study with high-speed Internet access, sitting area, master  bath with jetted spa tub, separate shower, and sauna, and bedroom with a king bed. Endless amenities include butler service on request, welcome treats, adjacent terrace, and Regency Club access. This is a premium suite. See World of Hyatt program terms for upgrade eligibility.', 'Alarm clock with iPod docking station', 'Dining table with four chairs', '2 mini refrigerators', '2 mini refrigerators', 'room-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`id`, `name`, `review`, `rating`) VALUES
(1, 'Nischal Chaudhary', 'babaal cha', 5),
(2, 'gaurav kunwar', 'It was lovely staying the night here. The view was great. Glad I chose this place.', 4),
(3, 'anzil karki', 'Had a lovely night with my family here. I am hard critic but could not find much flaws at all.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdata`
--
ALTER TABLE `bookingdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiryinfo`
--
ALTER TABLE `enquiryinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackinfo`
--
ALTER TABLE `feedbackinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdata`
--
ALTER TABLE `bookingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiryinfo`
--
ALTER TABLE `enquiryinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedbackinfo`
--
ALTER TABLE `feedbackinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
