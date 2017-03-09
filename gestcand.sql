-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Mars 2017 à 20:54
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestcand`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

CREATE TABLE `alerte` (
  `id_alert` int(11) NOT NULL,
  `id_anno` int(11) NOT NULL,
  `id_entr` int(11) NOT NULL,
  `type_alert` varchar(50) NOT NULL,
  `date_alert` date NOT NULL,
  `heure_alert` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_anno` int(11) NOT NULL,
  `id_candat` int(11) NOT NULL,
  `titre_anno` varchar(100) NOT NULL,
  `libelleEntreprise_anno` varchar(100) NOT NULL,
  `dateLimite_anno` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lien_anno` varchar(1000) NOT NULL,
  `contactRecruteur_anno` text NOT NULL,
  `adresseUnRecruteur_anno` text NOT NULL,
  `adresseDeuxRecruteur_anno` varchar(100) NOT NULL,
  `codePostalEntreprise_anno` text NOT NULL,
  `villeEntreprise_anno` text NOT NULL,
  `note_anno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_anno`, `id_candat`, `titre_anno`, `libelleEntreprise_anno`, `dateLimite_anno`, `lien_anno`, `contactRecruteur_anno`, `adresseUnRecruteur_anno`, `adresseDeuxRecruteur_anno`, `codePostalEntreprise_anno`, `villeEntreprise_anno`, `note_anno`) VALUES
(1, 1, 'Developpeur front end', 'IG Consulting', '2017-02-24 16:17:07', 'http://ig.com', '0758647334', '2 rue des moutons', '', '92045', 'Creteil', ''),
(2, 1, 'Developpeur web', 'ALBERX', '2017-02-24 16:17:14', 'http://alber.com', '', '', '', '', '', ''),
(4, 1, 'Assistante commerciale', 'Orange', '2017-03-07 16:16:17', 'orange.com', '0967431134', '34 rue des jardinier', '', '75016', 'Peleruche', 'Candidature spontanÃ©e'),
(14, 1, 'Assistante commerciale', 'gg', '2017-03-22 23:00:00', 'htt://kk.com', 'dd', 'd', 'ss', 'ss', 'ss', 'uu');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id_candat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_candat` varchar(50) NOT NULL,
  `prenom_candat` varchar(50) NOT NULL,
  `sexe_candat` varchar(50) NOT NULL,
  `dateNaissance_candat` date NOT NULL,
  `email_candat` varchar(50) NOT NULL,
  `adresse_candat` varchar(50) NOT NULL,
  `codePostal_candat` int(11) NOT NULL,
  `ville_candat` varchar(50) NOT NULL,
  `pays_candat` varchar(50) NOT NULL,
  `profession_candat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id_candur` int(11) NOT NULL,
  `id_anno` int(11) NOT NULL,
  `date_candur` date NOT NULL,
  `lettreMotivation_candur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `id_entr` int(11) NOT NULL,
  `id_candur` int(11) NOT NULL,
  `date_entr` date NOT NULL,
  `heure_entr` time NOT NULL,
  `adresse_entr` varchar(100) NOT NULL,
  `codePostal_entr` int(10) NOT NULL,
  `ville_entr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `status_user` int(1) NOT NULL,
  `activationKey_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `status_user`, `activationKey_user`) VALUES
(3, 'bongojeanphilippe@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '35a4b0ae05d57eeaa2c471e1924af456'),
(4, 'santosbjpe@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '2fa0cdfe385b79d8a754a0b980f221c8');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD PRIMARY KEY (`id_alert`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_anno`);

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id_candat`),
  ADD UNIQUE KEY `email_candat` (`email_candat`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id_candur`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`id_entr`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alerte`
--
ALTER TABLE `alerte`
  MODIFY `id_alert` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_anno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id_candat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id_candur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `id_entr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
