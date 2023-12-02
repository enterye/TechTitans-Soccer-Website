-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scores`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `team1` varchar(50) NOT NULL,
  `team1_logo` varchar(90) NOT NULL,
  `team1_goals` int(20) NOT NULL DEFAULT 0,
  `team2` varchar(50) NOT NULL,
  `team2_logo` varchar(90) NOT NULL,
  `team2_goal` int(20) NOT NULL DEFAULT 0,
  `game_date` date NOT NULL DEFAULT current_timestamp(),
  `game_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--
DELETE from `matches`;

INSERT INTO `matches` (`team1`, `team1_logo`, `team1_goals`, `team2`, `team2_logo`, `team2_goal`, `game_date`, `game_time`) VALUES
('Man City',	'assets/images/teams/mancity.png',	1,	'Liverpool',	'assets/images/teams/liverpool.png',	1,	'2023-11-26',	'20:45:00'),
('Sheffield Utd',	'assets/images/teams/sheff.png',	2,	'Bournemouth',	'assets/images/teams/bournemouth.png',	0,	'2023-11-26',	'20:45:00'),
('Nottm Forest',	'assets/images/teams/nottm.png',	2,	'Brighton',	'assets/images/teams/brighton.png',	3,	'2023-12-01',	'20:45:00'),
('Burnley',	'assets/images/teams/burnley.png',	1,	'Westham',	'assets/images/teams/westham.png',	4,	'2023-11-27',	'18:15:00'),
('Luton Town',	'assets/images/teams/luton.png',	1,	'Crystal Palace',	'assets/images/teams/crystal.png',	4,	'2023-11-27',	'18:15:00'),
('Newcastle',	'assets/images/teams/newcastle.png',	0,	'Chelsea',	'assets/images/teams/chelsea.png',	3,	'2023-11-27',	'19:00:00'),
('Brentford',	'assets/images/teams/brentford.png',	0,	'Arsenal',	'assets/images/teams/arsenal.png',	3,	'2023-11-28',	'19:00:00'),
('Tottenham',	'assets/images/teams/tottenham.png',	1,	'Aston Villa',	'assets/images/teams/aston.png',	2,	'2023-12-01',	'19:00:00'),
('Everton ',	'assets/images/teams/everton.png',	1,	'Man United',	'assets/images/teams/manu.png',	2,	'2023-11-28',	'19:00:00'),
('Fulham ',	'assets/images/teams/fulham.png',	1,	'Wolves',	'assets/images/teams/wolves.png',	2,	'2023-11-29',	'19:00:00'),
('Sheffield Utd',	'assets/images/teams/sheff.png',	1,	'Liverpool',	'assets/images/teams/liverpool.png',	1,	'2023-11-29',	'20:45:00'),
('Nottm Forest',	'assets/images/teams/nottm.png',	2,	'Man City',	'assets/images/teams/mancity.png',	0,	'2023-11-29',	'20:45:00'),
('Westham',	'assets/images/teams/westham.png',	1,	'Brentford',	'assets/images/teams/brentford.png',	4,	'2023-11-30',	'18:15:00'),
('Aston Villa',	'assets/images/teams/aston.png',	1,	'Liverpool',	'assets/images/teams/liverpool.png',	1,	'2023-12-02',	'20:45:00'),
('Chelsea',	'assets/images/teams/chelsea.png',	5,	'Bournemouth',	'assets/images/teams/bournemouth.png',	1,	'2023-12-02',	'20:45:00'),
('Aston Villa',	'assets/images/teams/aston.png',	1,	'Liverpool',	'assets/images/teams/liverpool.png',	1,	'2023-11-30',	'20:45:00'),
('Everton',	'assets/images/teams/everton.png',	1,	'Fulham',	'assets/images/teams/liverpool.png',	1,	'2023-11-30',	'20:45:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
