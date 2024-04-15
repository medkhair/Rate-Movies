-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 avr. 2024 à 22:50
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movies`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `our_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `categorie`, `image`, `rating`, `our_rating`) VALUES
(1, '1917', 'April 6th, 1917. As an infantry battalion assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.', 'Film', '1917.jpg', 8, 8),
(2, 'Game of Thrones', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 'Serie', 'GOT.jpg', 8, 8),
(3, 'Prison Break', 'A structural engineer installs himself in a prison he helped design, in order to save his falsely accused brother from a death sentence by breaking themselves out from the inside.', 'Serie', 'Prison_break.jpg', 8, 8),
(4, 'Scarface', 'In 1980 Miami, a determined Cuban immigrant takes over a drug cartel and succumbs to greed.', 'Film', 'Scarface.jpg', 8, 8),
(5, 'The Peaky Blinders', 'A gangster family epic set in 1900s England, centering on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.', 'Serie', 'The_peaky_blinders.jpg', 8, 8),
(6, 'The Pianist', 'During WWII, acclaimed Polish musician Wladyslaw faces various struggles as he loses contact with his family. As the situation worsens, he hides in the ruins of Warsaw in order to survive.', 'Film', 'The_Pianist.jpg', 8, 8),
(7, 'Vikings', 'Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore--and raid--the distant shores across the ocean.', 'Serie', 'Vikings.jpg', 8, 8),
(8, 'Titanic', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'Film', 'Titanic.jpg', 8, 8),
(9, 'Breaking Bad', 'A chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine with a former student in order to secure his familys future.', 'Serie', 'bd.jpg', 8, 8),
(10, 'Babylon Berlin', 'Colognian commissioner Gereon Rath moves to Berlin, the epicenter of political and social changes in the Golden Twenties.', 'Serie', 'babylonberlinliv.jpg', 8, 8),
(11, 'Stanger Things', 'When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl.', 'Serie', 'st.jpg', 8, 8),
(12, 'Dark', 'A family saga with a supernatural twist, set in a German town where the disappearance of two young children exposes the relationships among four families.', 'Serie', 'dark.jpg', 8, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
