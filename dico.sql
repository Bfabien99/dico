-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 25 mars 2022 à 17:08
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dico`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_envoie` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `sujet`, `message`, `date_envoie`) VALUES
(1, 'Fabien', 'fabienbrou99@gmail.com', 'mon avis personnel', 'J\'aime beaucoup votre site. Depuis plus d\'une semaine d\'utilisation et je ne me reconnais plus.\r\nJe suis devenu meilleur qu\'avant.\r\nMerci beaucoup!', '2022-03-25 15:53:38');

-- --------------------------------------------------------

--
-- Structure de la table `lecons`
--

CREATE TABLE `lecons` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `theme` varchar(100) NOT NULL,
  `ordre` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lecons`
--

INSERT INTO `lecons` (`id`, `titre`, `contenu`, `theme`, `ordre`) VALUES
(1, 'Utilisation des chiffres et des nombres en anglais', '<p>Les nombres intermédiaires sont faciles à former, en ajoutant l\'unité à la dizaine. Ne pas oublier <em class=\"important\">le trait d\'union</em>. Exemples :</p>\r\n\r\n<p>21 = <em class=\"important\">twenty-one</em></p>\r\n<p>47 = <em class=\"important\">forty-seven</em></p>\r\n<p>86 = <em class=\"important\">eighty-six</em></p>\r\n\r\n<p>En anglais, on utilise <em class=\"important\">une virgule pour séparer les centaines des milliers et non un point</em>.</p>\r\n<p>Exemple :</p>\r\n<p>- en français : <em class=\"important\">1 000</em></p>\r\n<p>- en anglais : <em class=\"important\">1,000</em></p>\r\n\r\n<p><em class=\"important\">Le point est l\'équivalent de notre virgule française.</em></p>\r\nExemple :</p>\r\n<p>- en français : 2<em class=\"important\">,</em>54</p>\r\n<p>- en anglais : 2<em class=\"important\">.</em>54</p>\r\n\r\n<p><em class=\"important\">Les adjectifs numéraux sont invariables et ne prennent donc pas de \"-s\" quand ils sont précédés d\'un nombre ou de \"several\" (plusieurs)</em>. Exemple :</p>\r\n<p><em class=\"important\">two thousand years</em> = 2 000 ans.</p>\r\n<p><em class=\"important\">several thousand years</em> ==> plusieurs milliers d\'années.</p>\r\n<p>Pas de \"<em class=\"important\">-s</em>\" à \"<em class=\"important\">thousand</em>\".</p>\r\n<p><em class=\"important\">Par contre, quand ils sont employés comme noms et lorsqu\'ils sont suivis de \"of\", HUNDRED, THOUSAND, MILLION et BILLION prennent un \"-s\"</em>. Exemple: </p>\r\n<p><em class=\"important\">Thousands</em> of people watched our TV show yesterday. <br>\r\n==> Des milliers de personnes ont regardé notre émission télévisée hier.</p>', 'nombre', 1),
(5, 'Opérations sur les nombres', '<h3>Comment lire les opérations</h3>\r\n\r\n<p>- 8 + 2 = 10 se lit <em class=\"important\">eight and two are ten</em> ou <em class=\"important\">eight plus two make ten</em>.</p>\r\n<p>- 11 - 3 = 8 se lit <em class=\"important\">eleven minus three is eight</em> ou <em class=\"important\">three from eleven leaves eight</em>.</p>\r\n<p>- 12 * 4 = 48 se lit <em class=\"important\">twelve times four is forty-eight</em> ou <em class=\"important\">twelve fours are forty-eight</em>.</p>\r\n<p>- 40 : 2 = 20 se lit <em class=\"important\">forty divided by two is twenty</em> ou <em class=\"important\">two into forty is twenty</em>.</p>\r\n<p>- 9^2 se lit <em class=\"important\">nine squared</em></p>\r\n<p>- 9^3 se lit <em class=\"important\">nine cubed</em> ou <em class=\"important\">nine to the power of three</em>.</p>\r\n<p>- la racine carrée de 16 est 4 se lit <em class=\"important\">the square root of sixteen is four</em>.</p>\r\n<p>- 23 > 12 se lit <em class=\"important\">twenty-three is greater than twelve</em>.</p>\r\n<p>- 12 < 23 se lit <em class=\"important\">twelve is less than twenty-three</em>.</p>\r\n\r\n', 'nombre', 3),
(6, 'Les nombres décimaux', '<h3>Lire les nombres décimaux.</h3>\r\n\r\n<p>En anglais américain et britannique, on utilise <em class=\"important\">la virgule pour séparer les milliers</em> et <em class=\"important\">le point pour indiquer les nombres décimaux</em>.</p>\r\n\r\n<p>2<em class=\"important\">,</em>54 (en France) = 2<em class=\"important\">.</em>54 (en Angleterre)<p>\r\n<p>2 054(en France) = 2<em class=\"important\">,</em>054 (en Angleterre)<p>\r\n\r\n<p>-0.25 se lit <em class=\"important\">nought point two five</em> ou <em class=\"important\">point two five</em><p>\r\n<p>-0.05 se lit <em class=\"important\">nought point nought five</em> ou <em class=\"important\">point (oh) five</em><p>\r\n<p>-8.135 se lit <em class=\"important\">eight point one nine five</em><p>\r\n\r\n<h4><em class=\"important\">On remarque qu\'on sépare les chiffres et qu\'on les lit un par un après le point</em>.</h4>', 'nombre', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lecons`
--
ALTER TABLE `lecons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lecons`
--
ALTER TABLE `lecons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
