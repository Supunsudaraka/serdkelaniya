-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 08:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serd`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idevent` int(11) NOT NULL,
  `idevent_category` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name_en` varchar(45) DEFAULT NULL,
  `name_si` varchar(45) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_si` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idevent`, `idevent_category`, `iduser`, `name_en`, `name_si`, `description_en`, `description_si`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'NEW YEAR 2020', NULL, 'New Year fireworks\r\n\r\nNew Year\'s Eve celebration in Copacabana, Rio de Janeiro, Brazil\r\n\r\nIranian New Year\'s celebration in Sanandaj on date and time of March equinox.\r\nNew Year is the time or day at which a new calendar year begins and the calendar\'s year count increments by one.\r\n\r\nMany cultures celebrate the event in some manner[1] and the 1st day of January is often marked as a national holiday.\r\n\r\nIn the Gregorian calendar, the most widely used calendar system today, New Year occurs on January 1 (New Year\'s Day). This was also the first day of the year in the original Julian calendar and of the Roman calendar (after 153 BC).[2].\r\n\r\nDuring the Middle Ages in western Europe, while the Julian calendar was still in use, authorities moved New Year\'s Day, depending upon locale, to one of several other days, including March 1, March 25, Easter, September 1, and December 25. Beginning in 1582, the adoptions of the Gregorian calendar has meant that many national or local dates in the Western World and beyond have changed to using one fixed date for New Year\'s Day, January 1.', NULL, 1, '2020-08-21 11:28:43', '2020-08-21 11:28:43'),
(2, 5, 2, 'CHIRSTMAS FESTIVAL 2020', NULL, 'Christmas\r\nNativityChristmasLights2.jpg\r\nNativity scene depicted using Christmas lights\r\nAlso called	Noël, Nativity, Xmas\r\nObserved by	Christians (religious holiday), many non-Christians (as a cultural or commercial holiday) [1][2]\r\nType	Christian, cultural\r\nSignificance	Commemoration of the Nativity of Jesus\r\nCelebrations	Gift-giving, family and other social gatherings, symbolic decoration, feasting etc.\r\nObservances	Church services\r\nDate	\r\nDecember 25: Western Christianity and part of the Eastern churches[3]\r\nJanuary 7 [O.S. December 25]: Most Oriental Orthodox and part of the Eastern Orthodox churches.[4][5]\r\nJanuary 6: Some Anabaptists, such as the Amish[6] and Armenian Apostolic Church[7][8]\r\nJanuary 19 [O.S. January 6]: Armenian Patriarchate of Jerusalem[9]\r\nFrequency	Annual\r\nRelated to	Christmastide, Christmas Eve, Advent, Annunciation, Epiphany, Baptism of the Lord, Nativity Fast, Nativity of Christ, Old Christmas, Yule, St. Stephen\'s Day, Boxing Day\r\nChristmas (or Feast of the Nativity) is an annual festival commemorating the birth of Jesus Christ, observed primarily on December 25[a] as a religious and cultural celebration among billions of people around the world.[2][10][11] A feast central to the Christian liturgical year, it is preceded by the season of Advent or the Nativity Fast and initiates the season of Christmastide, which historically in the West lasts twelve days and culminates on Twelfth Night;[12] in some traditions, Christmastide includes an octave.[13] Christmas Day is a public holiday in many of the world\'s nations,[14][15][16] is celebrated religiously by a majority of Christians,[17] as well as culturally by many non-Christians,[1][18] and forms an integral part of the holiday season centered around it.\r\n\r\nThe traditional Christmas narrative, the Nativity of Jesus, delineated in the New Testament says that Jesus was born in Bethlehem, in accordance with messianic prophecies.[19] When Joseph and Mary arrived in the city, the inn had no room and so they were offered a stable where the Christ Child was soon born, with angels proclaiming this news to shepherds who then further disseminated the information.[20]', NULL, 1, '2020-08-21 11:32:32', '2020-08-21 11:32:32'),
(3, 4, 2, 'KAMPANA 2019', NULL, 'Although the month and date of Jesus\' birth are unknown, the church in the early fourth century fixed the date as December 25.[21][22][23] This corresponds to the date of the winter solstice on the Roman calendar.[24] Most Christians celebrate on December 25 in the Gregorian calendar, which has been adopted almost universally in the civil calendars used in countries throughout the world. However, part of the Eastern Christian Churches celebrate Christmas on December 25 of the older Julian calendar, which currently corresponds to January 7 in the Gregorian calendar. For Christians, believing that God came into the world in the form of man to atone for the sins of humanity, rather than knowing Jesus\' exact birth date, is considered to be the primary purpose in celebrating Christmas.[25][26][27]', NULL, 1, '2020-08-21 11:39:07', '2020-08-21 11:39:07'),
(4, 3, 2, 'ART AND HAND CRAFT EXHIBITION 2016 ON BMICH', 'චිත්‍ර හා අත්කම් ප්‍රදර්ශනය 2016 BMICH හි', 'The celebratory customs associated in various countries with Christmas have a mix of pre-Christian, Christian, and secular themes and origins.[28] Popular modern customs of the holiday include gift giving; completing an Advent calendar or Advent wreath; Christmas music and caroling; viewing a Nativity play; an exchange of Christmas cards; church services; a special meal; and the display of various Christmas decorations, including Christmas trees, Christmas lights, nativity scenes, garlands, wreaths, mistletoe, and holly. In addition, several closely related and often interchangeable figures, known as Santa Claus, Father Christmas, Saint Nicholas, and Christkind, are associated with bringing gifts to children during the Christmas season and have their own body of traditions and lore.[29] Because gift-giving and many other aspects of the Christmas festival involve heightened economic activity, the holiday has become a significant event and a key sales period for retailers and businesses. The economic impact of Christmas has grown steadily over the past few centuries in many regions of the world.', NULL, 1, '2020-08-21 11:43:03', '2020-08-21 11:43:03'),
(5, 6, 2, 'SOCIAL LIFE TRAINING PROGRAME', 'සමාජ ජීවිත පුහුණු වැඩසටහන', 'Gospel according to Saint Luke Chapter 2, v 1–20\r\nThe gospels of Luke and Matthew describe Jesus as being born in Bethlehem to the Virgin Mary. In Luke, Joseph and Mary travel from Nazareth to Bethlehem for the census, and Jesus is born there and laid in a manger.[41] Angels proclaimed him a savior for all people, and shepherds came to adore him.\r\n\r\nMatthew adds that the magi follow a star to Bethlehem to bring gifts to Jesus, born the king of the Jews. King Herod orders the massacre of all the boys less than two years old in Bethlehem, but the family flees to Egypt and later returns to Nazareth.', 'ශාන්ත ලූක් 2 වන පරිච්ඡේදයේ, 1-20 පරිච්ඡේදයට අනුව සුවිශේෂය\r\nලූක් සහ මතෙව්ගේ සුවිශේෂයන්හි යේසුස් බෙත්ලෙහෙමේ කන්‍යා මරිය තුමියගේ උපත ලෙස විස්තර කරයි. සංගණනය සඳහා ලූක්හි යෝසෙප් සහ මරියා නාසරෙත් සිට බෙත්ලෙහෙම දක්වා ගමන් කරන අතර යේසුස් එහි ඉපදී ගව ඔරුවක තැන්පත් කර ඇත. දේවදූතයන් ඔහුව සියලු මිනිසුන් සඳහා ගැළවුම්කරුවෙකු ලෙස ප්‍රකාශ කළ අතර එ pher ේරුන් ඔහුව වැඳපුදා ගැනීමට පැමිණියේය.\r\n\r\nයුදෙව්වන්ගේ රජු ලෙස උපත ලැබූ යේසුස්ට තෑගි ගෙන ඒම සඳහා මැජි බෙත්ලෙහෙමට තාරකාවක් අනුගමනය කරන බව මතෙව් තවදුරටත් පවසයි. හෙරොද් රජ බෙත්ලෙහෙමේ අවුරුදු දෙකකට අඩු පිරිමි ළමයින් සමූල re ාතනය කිරීමට අණ කළත්, පවුල ඊජිප්තුවට පලා ගොස් පසුව නාසරෙත් වෙත ආපසු යයි.', 1, '2020-08-21 11:46:45', '2020-08-21 11:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `idevent_category` int(11) NOT NULL,
  `name_en` varchar(45) DEFAULT NULL,
  `name_si` varchar(45) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_category`
--

INSERT INTO `event_category` (`idevent_category`, `name_en`, `name_si`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Year Celebration', 'New Year Celebration', 'new_year.jpg', 1, '2020-06-08 03:30:00', '2020-06-11 18:30:00'),
(2, 'Vesk Festival', 'Vesk Festival', 'vesak.jpeg', 1, '2020-06-29 19:54:36', '2020-06-29 19:54:36'),
(3, 'Art & Hand Craft Exhibition', 'Art & Hand Craft Exhibition', 'hand_craft.jpg', 1, '2020-06-08 03:30:00', '2020-06-11 18:30:00'),
(4, 'Art Festival', 'Art Festival', 'art_festival.jpg', 1, '2020-06-29 19:54:36', '2020-06-29 19:54:36'),
(5, 'Christmas Festival', 'Christmas Festival', 'christmas-festival.jpg', 1, '2020-06-08 03:30:00', '2020-06-11 18:30:00'),
(6, 'Social Life Training', 'Social Life Training', 'social_life.jpg', 1, '2020-06-29 19:54:36', '2020-06-29 19:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE `event_image` (
  `idevent_image` int(11) NOT NULL,
  `idevent` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT 0,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_image`
--

INSERT INTO `event_image` (`idevent_image`, `idevent`, `position`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '5f3ffd36b5cfc.jpeg', 1, '2020-08-21 11:28:30', '2020-08-21 11:28:43'),
(2, 1, 0, '5f3ffd36e6b54.jpeg', 1, '2020-08-21 11:28:30', '2020-08-21 11:28:43'),
(3, 1, 0, '5f3ffd371dc03.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(4, 1, 0, '5f3ffd37477bb.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(5, 1, 0, '5f3ffd377396e.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(6, 1, 0, '5f3ffd379cb40.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(7, 1, 0, '5f3ffd37c90f0.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(8, 1, 0, '5f3ffd37f060b.jpeg', 1, '2020-08-21 11:28:31', '2020-08-21 11:28:43'),
(9, 2, 0, '5f3ffdf849c91.jpeg', 1, '2020-08-21 11:31:44', '2020-08-21 11:32:32'),
(10, 2, 0, '5f3ffdf8955a2.jpeg', 1, '2020-08-21 11:31:44', '2020-08-21 11:32:32'),
(11, 2, 0, '5f3ffdf8ccd01.jpeg', 1, '2020-08-21 11:31:44', '2020-08-21 11:32:32'),
(12, 2, 0, '5f3ffdf91d160.jpeg', 1, '2020-08-21 11:31:45', '2020-08-21 11:32:32'),
(13, 2, 0, '5f3ffdf9509e1.jpeg', 1, '2020-08-21 11:31:45', '2020-08-21 11:32:32'),
(14, 3, 0, '5f3fff6a098de.jpeg', 1, '2020-08-21 11:37:54', '2020-08-21 11:39:07'),
(15, 3, 0, '5f3fff6a59e3b.jpeg', 1, '2020-08-21 11:37:54', '2020-08-21 11:39:07'),
(16, 3, 0, '5f3fff6a9314b.jpeg', 1, '2020-08-21 11:37:54', '2020-08-21 11:39:07'),
(17, 3, 0, '5f3fff6ad4252.jpeg', 1, '2020-08-21 11:37:54', '2020-08-21 11:39:07'),
(18, 3, 0, '5f3fff6b11e8a.jpeg', 1, '2020-08-21 11:37:55', '2020-08-21 11:39:07'),
(19, 3, 0, '5f3fff6b3d8f8.jpeg', 1, '2020-08-21 11:37:55', '2020-08-21 11:39:07'),
(20, 3, 0, '5f3fff6b6a219.jpeg', 1, '2020-08-21 11:37:55', '2020-08-21 11:39:07'),
(21, 3, 0, '5f3fff6b93e39.jpeg', 1, '2020-08-21 11:37:55', '2020-08-21 11:39:07'),
(22, 3, 0, '5f3fff6bbdce5.jpeg', 1, '2020-08-21 11:37:55', '2020-08-21 11:39:07'),
(23, 3, 0, '5f3fff6c05a08.jpeg', 1, '2020-08-21 11:37:56', '2020-08-21 11:39:07'),
(24, 3, 0, '5f3fff6c2f83e.jpeg', 1, '2020-08-21 11:37:56', '2020-08-21 11:39:07'),
(25, 3, 0, '5f3fff6c5c060.jpeg', 1, '2020-08-21 11:37:56', '2020-08-21 11:39:07'),
(26, 4, 0, '5f40005a9d104.jpeg', 1, '2020-08-21 11:41:54', '2020-08-21 11:43:03'),
(27, 4, 0, '5f40005b34d9c.jpeg', 1, '2020-08-21 11:41:55', '2020-08-21 11:43:03'),
(28, 4, 0, '5f40005b745c5.jpeg', 1, '2020-08-21 11:41:55', '2020-08-21 11:43:03'),
(29, 4, 0, '5f40005bac2f2.jpeg', 1, '2020-08-21 11:41:55', '2020-08-21 11:43:03'),
(30, 5, 0, '5f4001445d5ef.jpeg', 1, '2020-08-21 11:45:48', '2020-08-21 11:46:45'),
(31, 5, 0, '5f400144f3388.jpeg', 1, '2020-08-21 11:45:48', '2020-08-21 11:46:45'),
(32, 5, 0, '5f4001452b61e.jpeg', 1, '2020-08-21 11:45:49', '2020-08-21 11:46:45'),
(33, 5, 0, '5f40014556609.jpeg', 1, '2020-08-21 11:45:49', '2020-08-21 11:46:45'),
(34, 5, 0, '5f40014585f40.jpeg', 1, '2020-08-21 11:45:49', '2020-08-21 11:46:45'),
(35, 5, 0, '5f400145c09e2.jpeg', 1, '2020-08-21 11:45:49', '2020-08-21 11:46:45'),
(36, 5, 0, '5f400145f0193.jpeg', 1, '2020-08-21 11:45:49', '2020-08-21 11:46:45'),
(37, 5, 0, '5f4001462c4da.jpeg', 1, '2020-08-21 11:45:50', '2020-08-21 11:46:45'),
(38, 5, 0, '5f40014659f5e.jpeg', 1, '2020-08-21 11:45:50', '2020-08-21 11:46:45'),
(39, 5, 0, '5f400146891cb.jpeg', 1, '2020-08-21 11:45:50', '2020-08-21 11:46:45'),
(40, 5, 0, '5f400146b6cb2.jpeg', 1, '2020-08-21 11:45:50', '2020-08-21 11:46:45'),
(41, 5, 0, '5f400146e5d21.jpeg', 1, '2020-08-21 11:45:50', '2020-08-21 11:46:45'),
(42, 5, 0, '5f4001471c817.jpeg', 1, '2020-08-21 11:45:51', '2020-08-21 11:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `iduser_role` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `iduser_role`, `name`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Administrator', 'admin', '$2y$10$pBQJEBWyvOvbWWsbKZfW2.IxZkLhkpW74F/5zR/oRbHLfWjzKcrZS', 1, '2020-06-08 03:30:00', '2020-06-11 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `iduser_role` int(11) NOT NULL,
  `name_en` varchar(45) DEFAULT NULL,
  `name_si` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`iduser_role`, `name_en`, `name_si`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 1, '2020-06-08 03:30:00', '2020-06-11 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `victory`
--

CREATE TABLE `victory` (
  `idvictory` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name_en` varchar(45) DEFAULT NULL,
  `name_si` varchar(45) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `discription_en` varchar(45) DEFAULT NULL,
  `discription_si` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `fk_event_event_category_idx` (`idevent_category`),
  ADD KEY `fk_event_user1_idx` (`iduser`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`idevent_category`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`idevent_image`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `fk_user_user_role1_idx` (`iduser_role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`iduser_role`);

--
-- Indexes for table `victory`
--
ALTER TABLE `victory`
  ADD PRIMARY KEY (`idvictory`),
  ADD KEY `fk_victory_user1_idx` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `idevent_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `idevent_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `iduser_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `victory`
--
ALTER TABLE `victory`
  MODIFY `idvictory` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_event_category` FOREIGN KEY (`idevent_category`) REFERENCES `event_category` (`idevent_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_role1` FOREIGN KEY (`iduser_role`) REFERENCES `user_role` (`iduser_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `victory`
--
ALTER TABLE `victory`
  ADD CONSTRAINT `fk_victory_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
