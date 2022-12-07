-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 06:24 PM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MusicAlly`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `artists_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artists_name`) VALUES
(1, 'Beyonce'),
(2, 'Bob Dylan'),
(3, 'Metallica'),
(4, 'Michael Jackson'),
(5, 'Notorious BIG'),
(6, '50 Cent'),
(7, 'The Beatles'),
(8, 'Marvin Gaye'),
(9, 'Fleetwood Mac'),
(10, 'OutKast'),
(11, 'Stevie Wonder'),
(12, 'Queen'),
(13, 'Kelly Clarkson'),
(14, 'Adele'),
(15, 'Nico & Vinz'),
(16, 'Plain White T\'s'),
(17, '2Pac'),
(18, 'Green Day'),
(19, 'AC/DC'),
(20, 'Duran Duran'),
(21, 'Johnny Cash');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_ID` int(200) NOT NULL,
  `musician_Name` varchar(150) NOT NULL,
  `location_Name` varchar(150) NOT NULL,
  `event_Name` varchar(150) NOT NULL,
  `event_Address` varchar(150) NOT NULL,
  `event_Date` date DEFAULT NULL,
  `event_Time` time DEFAULT NULL,
  `user_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cardnumber` varchar(200) NOT NULL,
  `expirationdate` varchar(200) NOT NULL,
  `securitycode` varchar(200) NOT NULL,
  `tip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songqueue`
--

CREATE TABLE `songqueue` (
  `id` int(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `song` varchar(200) NOT NULL,
  `tip` varchar(200) NOT NULL,
  `event_ID` int(200) NOT NULL,
  `song_ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_ID` int(200) NOT NULL,
  `artist_Name` varchar(200) NOT NULL,
  `song_Name` varchar(200) NOT NULL,
  `release_Date` varchar(200) NOT NULL,
  `lyrics_Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_ID`, `artist_Name`, `song_Name`, `release_Date`, `lyrics_Link`) VALUES
(1, 'Michael Jackson', 'Billie Jean', '1982', 'https://genius.com/Michael-jackson-billie-jean-lyrics'),
(2, 'Bob Dylan', 'Like a Rolling Stone', '1965', 'https://genius.com/Bob-dylan-like-a-rolling-stone-lyrics'),
(3, 'The Beatles', 'Strawberry Fields Forever', '1967', 'https://genius.com/The-beatles-strawberry-fields-forever-lyrics'),
(4, 'Marvin Gaye', 'What\'s Going On?', '1971', 'https://genius.com/Marvin-gaye-whats-going-on-lyrics'),
(5, 'Fleetwood Mac', 'Dreams', '1977', 'https://genius.com/Fleetwood-mac-dreams-lyrics'),
(6, 'OutKast', 'Hey Ya!', '2003', 'https://genius.com/Outkast-hey-ya-lyrics'),
(7, 'Stevie Wonder', 'Superstition', '1972', 'https://genius.com/Stevie-wonder-superstition-lyrics'),
(8, 'Beyonce', 'Halo', '2009', 'https://genius.com/Beyonce-halo-lyrics'),
(9, 'Queen', 'Bohemian Rhapsody', '1975', 'https://genius.com/Queen-bohemian-rhapsody-lyrics'),
(10, 'Kelly Clarkson', 'Since U Been Gone', '2004', 'https://genius.com/Kelly-clarkson-since-u-been-gone-lyrics'),
(11, 'Adele', 'Rolling In The Deep', '2011', 'https://genius.com/Adele-rolling-in-the-deep-lyrics'),
(12, 'Nico & Vinz', 'Am I Wrong', '2013', 'https://genius.com/Nico-and-vinz-am-i-wrong-lyrics'),
(13, 'Plain White T\'s', 'Hey There Delilah', '2006', 'https://genius.com/Plain-white-ts-hey-there-delilah-lyrics'),
(14, '2Pac', 'Dear Mama', '1995', 'https://genius.com/2pac-dear-mama-lyrics'),
(15, '50 Cent', 'In Da Club', '2003', 'https://genius.com/50-cent-in-da-club-lyrics'),
(16, 'Green Day', 'Boulevard of Broken Dreams', '2004', 'https://genius.com/Green-day-boulevard-of-broken-dreams-lyrics'),
(17, 'AC/DC', 'Thunderstruck', '1990', 'https://genius.com/Ac-dc-thunderstruck-lyrics'),
(18, 'Metallica', 'One', '1988', 'https://genius.com/Metallica-one-lyrics'),
(19, 'Duran Duran', 'Ordinary World', '1992', 'https://genius.com/Duran-duran-ordinary-world-lyrics'),
(20, 'Johnny Cash', 'I Walk the Line', '1956', 'https://genius.com/Johnny-cash-i-walk-the-line-lyrics'),
(21, 'Notorious BIG', 'Hypnotize', '1997', 'https://genius.com/The-notorious-big-hypnotize-lyrics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(100) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Sadik', 'shussein23@gwu.edu', 'shussein23', '$2y$10$jpZI7K4Z20rEaj.kvUipTuPHqWgIZOGGOKJDxztY7YJb.9PAX1anu'),
(2, 'hussein', 'hussein@gmail.com', 'hussein', '$2y$10$kLX1bQqfOfLUgdy6nLJAhufgL8AJMJMDsofFd/Bv9bP0HXWDz0umW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songqueue`
--
ALTER TABLE `songqueue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_ID` (`event_ID`),
  ADD KEY `song_ID` (`song_ID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `songqueue`
--
ALTER TABLE `songqueue`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`usersId`);

--
-- Constraints for table `songqueue`
--
ALTER TABLE `songqueue`
  ADD CONSTRAINT `songqueue_ibfk_1` FOREIGN KEY (`event_ID`) REFERENCES `events` (`event_ID`),
  ADD CONSTRAINT `songqueue_ibfk_2` FOREIGN KEY (`song_ID`) REFERENCES `songs` (`song_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
