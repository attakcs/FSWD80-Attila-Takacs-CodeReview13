-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 07:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_attila_takacs_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_attila_takacs_bigevents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr13_attila_takacs_bigevents`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `event_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_image` varchar(333) COLLATE utf8_unicode_ci NOT NULL,
  `event_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `event_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_description`, `event_image`, `event_contact`, `event_phone`, `event_address`, `event_web`) VALUES
(1, 'Christmas in Vienna 2019', '2019-12-21 19:30:00', 'Christmas in Vienna zählt zu den renommiertesten Weihnachtskonzerten der Welt. Jedes Jahr besticht das Konzertprogramm durch das abwechslungsreiche Zusammenspiel von klassischen Weihnachtsliedern und populärer Weihnachtsmusik aus aller Welt.', 'https://events.wien.info/media/full/schedl_03_christmasinvienna_045.jpg', 'www.konzerthaus.at', '+43 1 242 002', 'Grosser Saal\r\nLothringerstraße 20\r\n1030 Wien', 'www.christmasinvienna.com'),
(2, 'Orlando', '2019-12-18 20:00:00', 'Olga Neuwirth’s music theatre opens a door into the realm of what has been simultaneously experienced, read and heard, of what is known and felt – in other words, into the realm of fiction shaped by memories. “Ever since I was a child I have been interest', 'https://events.wien.info/media/full/oper.jpg', 'www.wiener-staatsoper.at', '+43 1 514 44 20', 'Vienna State Opera (Wiener Staatsoper)Opernring 21010 Wien', 'www.culturall.com'),
(3, 'Little Ice World', '2019-12-06 10:00:00', 'The \"Little Ice World\" opened on 16 November as part of the Vienna Christmas Dream.', 'https://events.wien.info/media/full/23117035_1699880956751101_1842452335707131322_o.jpg', 'www.wienerweihnachtstraum.at/kleiner-eistraum', '-', 'City Hall Square Rathausplatz 1010 Wien', 'https://events.wien.info/en/ka2/little-ice-world/'),
(4, 'Vienna Coffee Festival', '2020-01-10 10:00:00', 'Specialists will share their knowledge of coffee with the public in tastings, workshops and lectures. The best Austrian baristas battle it out on the show stages for five national championship titles.', 'https://www.wien.info/media/images/vienna-coffee-festival-kaffee-cafe-1to1.jpeg/image_start', 'www.ottakringer.at', '+43 1 491 00 0', 'Ottakringer Platz 1 1160 Wien', 'www.viennacoffeefestival.cc'),
(5, 'Click. Click. Click.', '2019-09-11 08:00:00', 'Fascinating, unembellished, impressive and quirky: in its new exhibition \"Street. Life. Photography\", the Kunst Haus Wien shows icons of street photography and contemporary positions from across seven decades.', 'https://www.wien.info/media/images/streetlifephotography-kunst-haus-wien-axel-schoen-ausstellung-2019-1to1.jpeg/image_start', 'info@kunsthauswien.com', '+43 1 712 04 91', 'Untere Weißgerberstraße 13 , 1030 Wien', 'www.kunsthauswien.com'),
(6, 'World Music in the Konzerthaus', '2019-12-06 08:00:00', 'Besides classical concerts, World Music evenings are also held in the venerable Konzerthaus. In rooms in which the symphonic sound of violins, cellos and French horns usually dominates, the vocal diversity of the world can increasingly be heard.', 'https://www.wien.info/media/images/journal-2015-klassik-konzerthaus-1to1.jpeg/image_start', 'ticket@konzerthaus.at', '+43 1 242 002', 'Lothringerstraße 20, 1030 Wien', 'https://www.wien.info/en/music-stage-shows/pop-rock-jazz/world-music/world-music-konzerthaus'),
(7, 'Beethoven. World of the Man and Spark of the Gods', '2020-01-22 19:00:00', 'Ludwig van Beethoven: His name stands for a musical oeuvre that today enchants people the world over. 2020 sees the 250th anniversary of the birth of this great composer, and in celebration the Austrian National Library will be presenting a special exhibi', 'https://events.wien.info/media/full/BeethovenLampe.jpg', 'www.onb.ac.at', '+43 1 534 10', 'Prunksaal Josefsplatz 1 1010 Wien', 'https://events.wien.info/en/10iv/beethoven-world-of-the-man-and-spark-of-the-gods/'),
(8, 'New Year\'s Concert by the Vienna Philharmonic', '2019-12-31 18:00:00', 'The Vienna Philharmonic gives its annual New Year\'s Concert in the Golden Hall of the Musikverein. The whole world looks on and joins in the celebrations of the first day of the new year.', 'https://www.wien.info/media/images/31708-musikverein-goldener-saal-neujahrskonzert-wiener-philharmoniker-1to1.jpeg/image_start', 'tickets@musikverein.at', '+43 1 505 81 90', 'Musikvereinsplatz 1, 1010 Wien', 'www.musikverein.at'),
(9, 'Cats', '2020-01-10 18:00:00', 'Comeback of the velvet paw spectacle \"Cats\": Andrew Lloyd Webber\'s masterpiece conquers the Ronacher in the slightly modernized German-language original version.', 'https://www.wien.info/media/images/cats-london-palladium-ronacher-1to1.jpeg/image_start', 'kundenservice@wien-ticket.at', '+43-1-588 85', 'Seilerstätte 9, 1010 Wien', 'www.musicalvienna.at');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
