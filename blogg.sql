-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
<<<<<<< HEAD
-- Tid vid skapande: 24 feb 2020 kl 15:20
=======
-- Tid vid skapande: 25 feb 2020 kl 09:10
>>>>>>> def41d76fef511fb31625a2e8c26c6fb887c7f73
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `blogg`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `blog_posts`
--

CREATE TABLE `blog_posts` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Pictures` blob DEFAULT NULL,
  `Category` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Content` varchar(1500) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blog_postsID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
<<<<<<< HEAD
=======
  `email` varchar(50) NOT NULL,
>>>>>>> def41d76fef511fb31625a2e8c26c6fb887c7f73
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `user`
--

<<<<<<< HEAD
INSERT INTO `user` (`ID`, `username`, `firstName`, `lastName`, `Password`, `Role`) VALUES
(1, '', 'Szilveszter', 'Mag', '123asd', 'Admin');
=======
INSERT INTO `user` (`ID`, `username`, `firstName`, `lastName`, `email`, `Password`, `Role`) VALUES
(1, '', 'Szilveszter', 'Mag', '', '123asd', 'Admin'),
(6, 'Andreas', 'ja', 'ja', '', 'ja', ''),
(7, 'silver', 'silver', 'mag', 'silver@gmail.com', '123asd', '');
>>>>>>> def41d76fef511fb31625a2e8c26c6fb887c7f73

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> def41d76fef511fb31625a2e8c26c6fb887c7f73
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
