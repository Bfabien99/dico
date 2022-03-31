-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 31 mars 2022 à 13:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

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
(6, 'Les nombres décimaux', '<h3>Lire les nombres décimaux.</h3>\r\n\r\n<p>En anglais américain et britannique, on utilise <em class=\"important\">la virgule pour séparer les milliers</em> et <em class=\"important\">le point pour indiquer les nombres décimaux</em>.</p>\r\n\r\n<p>2<em class=\"important\">,</em>54 (en France) = 2<em class=\"important\">.</em>54 (en Angleterre)<p>\r\n<p>2 054(en France) = 2<em class=\"important\">,</em>054 (en Angleterre)<p>\r\n\r\n<p>-0.25 se lit <em class=\"important\">nought point two five</em> ou <em class=\"important\">point two five</em><p>\r\n<p>-0.05 se lit <em class=\"important\">nought point nought five</em> ou <em class=\"important\">point (oh) five</em><p>\r\n<p>-8.135 se lit <em class=\"important\">eight point one nine five</em><p>\r\n\r\n<h4><em class=\"important\">On remarque qu\'on sépare les chiffres et qu\'on les lit un par un après le point</em>.</h4>', 'nombre', 2),
(7, 'Jm the Master', 'Je suis jean', 'vocabulaire', 1),
(8, 'Use to', '<p>I <em class=\"important\">use to</em> est utilisé pour présenter <em class=\"important\">quelque chose qu\'on avait l\'habitude de faire mais qu\'on ne fait plus maintenant</em>.\r\nExemple:</p><p>I <em class=\"important\">used to</em> play tennis a lot, but I don’t play very much now.</p>\r\n<p>==> Je jouais assez au tennis, mais j\'en joue plus trop maitenant.</p>\r\n<p>‘Do you go to the cinema much?’ ‘Not now, but <em class=\"important\">I used to</em>.’</p>\r\n<p>==>Vas tu fréquemment au cinéma? Plus maintenant, mais je le fesais/j\'en avais l\'habitude.</p>\r\n<p>On utilise aussi <em class=\"important\">used to</em> … pour <em class=\"important\">des choses qui étaient vraies mais ne le sont plus</em>.</p>\r\nExemple: <p>This building is now a furniture shop. It <em class=\"important\">used to</em> be a cinema.\r\n<p>==>Cet batiment est une librairie. C\'était un cinéma.</p>\r\n<em class=\"important\">I use to exprime le passé, on ne peut pas l\'utiliser pour parler du présent.\r\nPour parler du présent on utilise le present simple(présent simple)</em>.\r\n\r\n', 'grammaire', 1),
(9, 'Preposition', '<p>Si une préposition (in/for/about,etc) est suivit d\'un verbe, <em class=\"important\">se verbe se termine par -ing</em>.</p>\r\n<p>Exemple:</p>\r\n<p>1) Are you interested <em class=\"important\">in</em> work<em class=\"important\">ing</em> for us?</p>\r\n<p>==> préposition: <em class=\"important\">in</em> ; verbe: <em class=\"important\">work</em>.</p>\r\n<p>2) I’m not good <em class=\"important\">at</em> learn<em class=\"important\">ing</em> languages.</p>\r\n<p>3) Kate must be fed up <em class=\"important\">with</em> study<em class=\"important\">ing</em>.</p>\r\n<p>4) What are the advantages <em class=\"important\">of</em> hav<em class=\"important\">ing</em> a car?</p>\r\n<p>5) Thanks very much <em class=\"important\">for</em> invit<em class=\"important\">ing</em> me to your party.</p>\r\n<h4>before et after:</h4>\r\n<p>- <em class=\"important\">Before going out</em>, I phoned Sarah. (non Before to go out).</p>\r\n<p>- What did you do <em class=\"important\">after leaving</em> school?\r\n(non after to leave).</p>\r\n<h4>by: pour exprimer la consequence</h4>\r\n<p>Exemple:</p>\r\n<p>1) You can improve your English <em class=\"important\">by reading</em> more.</p>\r\n<p>==> Tu peux améliorer ton Anglais en lisant plus.</p>\r\n<p>2) She made herself ill <em class=\"important\">by</em> not <em class=\"important\">eating</em> properly.</p>\r\n<p>==> Elle s\'est rendue malade en ne mangeant pas sainement.</p>\r\n<p>3) Many accidents are caused <em class=\"important\">by</em> people <em class=\"important\">driving</em> too fast.</p>\r\n<p>==> Plusieurs accidents sont causés par ceux qui conduisent trop vite.</p>\r\n<h4>to:</h4>\r\n<p>On utilise parfois to + infinitif.</p>\r\n<p>Exemple: </p>\r\n<p>We decided <em class=\"important\">to travel</em> by train.</p>\r\n<p>==> Nous avons décider de voyager en train.</p>\r\n<p><em class=\"important\">to est aussi une préposition (comme in/for/about,etc)</em>.</p>\r\n<p>Exemple:</p>\r\n<p>I prefer tea <em class=\"important\">to</em> coffee.</p>\r\n<p>==> Je prefere le thé que le café.</p>\r\n<p>Alors quand to est une préposition et est suivi d\'un verbe, <em class=\"important\">se verbe se termine par -ing</em>.</p>\r\n<p>Exemple:</p>\r\n<p>I prefer driving <em class=\"important\">to travelling</em> by train. (non to travel).</p>\r\n<p>==> Je préfère conduit que de voyager en train.</p>\r\n<p>Are you looking forward <em class=\"important\">to going</em> on holiday? (not looking forward to go)</p>\r\n<p>==> Es tu impatient d\'aller en vacances?</p>', 'grammaire', 2),
(10, 'Active et Passive', '<p>When we use an <em class=\"important\">active verb</em>, we say <em class=\"important\">what the subject does</em>:</p>\r\n<p>My grandfather was a builder. <em class=\"important\">He built</em> this house in 1981.</p>\r\n<p>It’s a big company. <em class=\"important\">It employs</em> two hundred people.</p>\r\n<p>When we use a <em class=\"important\">passive verb</em>, we say <em class=\"important\">what happens to the subject</em>:</p>\r\n<p>How old is this house?’ ‘<em class=\"important\">It was built</em> in 1981.</p>\r\n<p><em class=\"important\">Two hundred people are employed</em> by the company.</p>\r\n<p>When we use the <em class=\"important\">passive</em>, <em class=\"important\">who or what causes the action is often unknown or unimportant</em>:</p>\r\n<p>A lot of money <em class=\"important\">was stolen</em> in the robbery. (somebody stole it, but we don’t know who)</p>\r\n<p><em class=\"important\">Is</em> this room <em class=\"important\">cleaned</em> every day? (does somebody clean it? – it’s not important who)</p>\r\n<p>If we want to say <em class=\"important\">who does or what causes</em> the action, we use <em class=\"important\">by</em>:</p>\r\n<p>This house was built <em class=\"important\">by my grandfather</em>.</p>\r\n<p>Two hundred people are employed <em class=\"important\">by the company</em>.</p>\r\n<p><em class=\"important\">The passive is be (is/was etc.) + past participle (done/cleaned/seen etc.)</em>:<p>\r\n<p><em class=\"important\">(be) done ;(be) cleaned ;(be) damaged ;(be) built ;(be) seen ;etc.</em></p>\r\n<p>The past participle often ends in <em class=\"important\">-ed (cleaned/damaged etc.)</em>, but <em class=\"important\">many important verbs are\r\nirregular (built/done/stolen etc.)</em></p>', 'grammaire', 3);

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

CREATE TABLE `quizz` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id`, `question`, `option1`, `option2`, `correct`) VALUES
(1, 'Comment lire 0.002 ', 'zero point zero zero two', 'point nought zero zero two', 'nought point nought nought two'),
(2, 'Coment lire 11 - 3 = 8', ' three minus eleven is eight', 'eight from three leaves eleven', 'three from eleven leaves eight'),
(3, 'Lequel est correct ?', 'This building is now used to be a furniture shop. It was a cinema. ', ' I use to do webdesign everyday.', 'Lisa used to have very long hair when she was a child.'),
(4, 'Lequel est correct?', 'What are the advantages of have a car?', 'I phoned Sarah before to go out.', 'What did you do after leaving school?'),
(5, '\"My grandfather was a builder. He built this house in 1981.\" To passive :', 'My grandfather built this house in 1981 because he was a builder.', 'In 1981, my grandfather was a builder. He built this house.', 'This house was built in 1981 by my grandfather. He was a builder.');

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
-- Index pour la table `quizz`
--
ALTER TABLE `quizz`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
