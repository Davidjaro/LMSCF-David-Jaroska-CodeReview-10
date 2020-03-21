-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mrz 2020 um 14:12
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_david_jaroska_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pub_date` date DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `avaiable` varchar(255) NOT NULL DEFAULT 'avaiable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `entries`
--

INSERT INTO `entries` (`id`, `title`, `author`, `ISBN`, `desc`, `img`, `pub_date`, `publisher`, `avaiable`) VALUES
(4, 'The Last Wish', 'Andrzej Sapkowski', '9780316029186', 'Geralt the Witcher -- revered and hated -- holds the line against the monsters plaguing humanity in this collection of adventures in the NYT bestselling series that inspired the blockbuster video games. ', 'img/9780316029186.jpg', '2008-05-01', 'Little, Brown & Company', 'Book'),
(5, 'Black Panther Little Golden Book (Marvel: Black Panther)', 'Frank Berrios', '9781524763886', 'As an Avenger, this Super Hero uses his strength, speed, and unbreakable claws to pounce evil-doers!', 'img/9781524763886.jpg', '2018-02-27', 'Golden Books', 'Comic'),
(6, 'Food Wars!: Shokugeki no Soma, Vol. 3', 'Yuto Tsukuda', '9781421572567', 'Soma hones his skills day in and day out until one day, out of the blue, his father decides to enroll Soma in a classy culinary school!', 'img/9781421572567.jpg', '2015-06-04', 'Viz Media, Subs. of Shogakukan Inc', 'Manga'),
(7, 'Frozen 2', 'Jennifer Lee', 'B082PQ2ZCR', 'Why was Elsa born with magical powers? What truths about the past await Elsa as she ventures into the unknown to the enchanted forests and dark seas beyond Arendelle?', 'img/814ByGMTgML._SX425_.jpg', '2020-02-25', 'WALT DISNEY ANIMATION', 'Movie'),
(8, 'Ori and The Will of the Wisps', 'Jeremy Gritton', 'B07DJRPZWY ', 'Embark on an adventure with all new combat and customization options while exploring a vast, exotic world encountering larger than life enemies and challenging puzzles.', 'img/713zIOvOQAL.AC_SL1500_.jpg', '2020-03-11', 'Xbox Game Studios', 'Game'),
(9, 'DOOM Eternal', 'Hugo Martin, Adam Gascoine, Jon Lane, Chad Mossholder', 'B07SK4QH7B ', 'As the Doom Slayer, you return to find Earth has suffered a demonic invasion. Raze Hell and discover the Slayerandrsquo;s origins and his enduring mission to rip and tearandhellip; until it is done.', 'img/81AyXii5PLL._AC_SL1500_.jpg', '2020-03-20', 'Bethesda Softworks', 'Game'),
(10, 'One-Punch Man, Vol. 1', 'Yuto Tsukuda', '9781421585642', 'Nothing about Saitama passes the eyeball test when it comes to superheroes, from his lifeless expression to his bald head to his unimpressive physique.', 'img/9781421585642.jpg', '2015-09-24', 'Viz Media, Subs. of Shogakukan Inc', 'Manga'),
(11, 'Ready Player One', 'Ernest Cline', '9780099560432', 'It\'s the year 2044, and the real world has become an ugly place. We\'re out of oil. We\'ve wrecked the climate. Famine, poverty, and disease are widespread. ', 'img/9780099560432.jpg', '2020-03-18', 'Cornerstone', 'Book'),
(12, 'A Game of Thrones : Book 1 of A Song of Ice and Fire', 'George R. R. Martin', '9780006479888', ' As Warden of the north, Lord Eddard Stark counts it a curse when King Robert bestows on him the office of the Hand.', 'img/9780006479888.jpg', '2009-03-01', 'HarperCollins Publishers', 'Book'),
(13, 'Stan Lee\'s How To Draw Comics', 'Stan Lee', '9780823000838', 'This book covers producing concepts and character sketches to laying out the final page of art.', 'img/9780823000838.jpg', '2020-02-07', 'Watson-Guptill Publications ', 'Comic'),
(14, 'Batman Detective Comics Vol. 2', 'Tony S. Daniel', '9781401242657', 'Batman must face the madness of the Mad Hatter, and then take on the Talons of the Court of Owls!', 'img/9781401242657.jpg', '2013-11-26', 'DC Comics', 'Comic'),
(15, 'Konosuba: God\'s Blessing on This Wonderful World!, Vol. 2 (light novel) : Love, Witches & Other Delusions!', 'Natsume Akatsuki', '9780316468701', 'Kazuma\'s first winter in another world isn\'t going so well. With companions like Aqua (Arch-priest), Megumin (Arch-wizard), and Darkness (Crusader), his party of advanced classes should be the most powerful in Axel--but they\'re so dysfunctional.', 'img/9780316468701.jpg', '2017-04-18', 'Little, Brown & Company', 'Book'),
(16, 'The Last of Us Part II', 'Neil Druckmann', 'B07DJRFSDF', 'Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming.', 'img/6fc23067-3563-4f6c-b1db-aa799a50113e.__CR0,0,1464,600_PT0_SX1464_V1___.jpg', '2020-05-29', 'Sony Computer Entertainment', 'Game'),
(17, 'Coco', 'Original Story by Lee Unkrich & Jason Katz & Matth, Screenplay by Adrian Molian & Matthew Aldrich', 'B07885CY3T', 'Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician like his idol, Ernesto de la Cruz.', 'img/61SsWGWDBhL.jpg', '2017-02-27', 'DISNEY/PIXAR', 'Movie'),
(18, 'The Green Book', 'Peter Farrelly, Brian Currie, Nick Vallelonga', 'B07KBTKCFZ', 'When Tony Lip, a bouncer from an Italian-American neighborhood in the Bronx, is hired to drive Dr. Don Shirley, a world-class Black pianist, on a concert tour from Manhattan to the Deep South, they must rely on \"The Green Book\" to guide them.', 'img/71XM8wUJYaL._SY550_.jpg', '2019-03-12', 'Universal Pictures Home Entertainment', 'Movie');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
