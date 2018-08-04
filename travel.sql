-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 11:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `create_at`) VALUES
(1, '100699342504444570035', 'hfhfty', '2018-07-22'),
(2, '100699342504444570035', 'jhbjhvhgf', '2018-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `village` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `website` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel`, `image`, `description`, `village`, `address`, `website`, `category`) VALUES
(1, 'Cinnamon Lakeside Colombo', 'cinemonlakeside.jpg', 'This property is a 6-minute walk from the beach. \r\n                                    Cinnamon Lakeside is on the banks of Beira Lake in Colombo, \r\n                                    a 10 minute drive from Crescat Boulevard shopping mall.', 'Colombo, Maharagama.', '', 'http://www.booking.com/Cinnamon/Lakeside', 'Luxery'),
(2, 'Shangri-la', 'shangrila.jpg', 'The Residences at One Galle Face by the Shangri-La group is redefining the capital’s skyline and living spaces with luxurious residencies in Colombo. The multinational luxury hotel', 'Colombo, Galle road..', '', 'http://www.shangri-la.com/', 'Luxery'),
(3, 'The Kingsbury Colombo', 'the-kingsbury.jpg', 'Bejeweled as one of the finest five-star Colombo hotels located in-between Galle Face Green,', 'Colombo, Sri lanka.', '', 'https://www.thekingsburyhotel.com/', 'Luxery');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `place`, `image`, `description`, `village`) VALUES
(1, 'Yala National Park', 'banner6.jpg', 'When I think of the word safari, the word budget is not exactly the next that comes to mind. Safaris are a great opportunity to see a country''s most amazing', 'Mathara'),
(2, 'Temple of Tooth Relic', 'banner11.jpg', 'Temple of the Tooth Relic or Sri Dalada Maligawa in Kandy, Sri Lanka.', 'Kandy'),
(3, 'Adam''s Peak', 'banner55.jpg', 'Adam''s Peak is a 2,243 m tall conical mountain located in central Sri Lanka. It is well known for the Sri Pada,', ' Sabaragamuwa'),
(4, 'Polonnaruwa Vatadage', 'banner33.jpg', 'The Polonnaruwa Vatadage is an ancient structure dating back to the Kingdom of Polonnaruwa of Sri Lanka', 'Polonnaruwa '),
(5, 'Pidurangala Rock', 'banner44.jpg', 'Destination for moderate hikes & climbs to the top of the rock, popular for panoramic views.', 'Pidurangala'),
(6, 'Galle Fort', 'banner66.jpg', 'The fort has a colourful history, and today has a multi-ethnic and multi-religious population.', 'Galle'),
(7, 'Sigiriya', 'banner99.jpg', 'The name refers to a site of historical and archaeological significance that is dominated by a massive column of rock nearly 200 metres (660 ft) high. ', 'Matale'),
(8, 'Ella Rock', 'banner10.jpg', 'Popular hike offering dramatic views from the mountain''s peak, a notable place to watch the sunrise.', 'Ella');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `testimonial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `testimonial`) VALUES
(1, 'Tharindu', 'tharindu.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,'),
(2, 'Bhasura', 'bhasura.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
