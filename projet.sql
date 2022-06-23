-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 juin 2022 à 12:50
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `Nationalité` varchar(255) NOT NULL,
  `Etat_civil` varchar(100) NOT NULL,
  `email` char(200) NOT NULL,
  `Numtel` char(10) NOT NULL,
  `Salaire` double NOT NULL,
  `Adresse` char(200) NOT NULL,
  `Datenaissance` date NOT NULL,
  `password` char(255) NOT NULL,
  `username` char(255) NOT NULL,
  `numerodecompte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `cin`, `Sexe`, `Nationalité`, `Etat_civil`, `email`, `Numtel`, `Salaire`, `Adresse`, `Datenaissance`, `password`, `username`, `numerodecompte`) VALUES
(15, 'benkama', 'salma', 'BE124578', 'Femme', 'Francaise', 'Célibataire', 'salmaben@gmail.com', '0607895641', 5000, 'Safi', '2000-02-02', '$2y$12$3Ba6ZJmkCHBmlgMRKR8M4ObdSksbErI2EEyTV5iEid6ycdqUd5yHG', 'salma', ''),
(17, 'bouhtil', 'rania', '', 'Femme', 'marocaine', 'Célibataire', 'raniabouhtil7@gmail.com', '0605437982', 20000, 'casa', '2002-02-07', '$2y$12$jRqxEr.dLuSnb6xMw3B21.VzagreLN9oA3JhuekpKkn3fZu8E64Gi', 'rania', ''),
(19, 'berrada', 'noah', '', 'Homme', 'marocaine', 'Célibataire', 'berrnoah@outlook.com', '0605437982', 12000, 'casa', '1999-02-02', '$2y$12$X7b559jPsIjoqXCQoLgFle5EN11dtap2np8O2PeaDWCzclFKmxkbG', 'noah', ''),
(22, 'ghaoui', 'fatimaezzahra', '', 'Femme', 'marocaine', 'Célibataire', 'fatighaoui@gmail.com', '0708431679', 6000, 'casa', '2000-08-13', '$2y$12$7o66fXyPsm18M1TW3wqodO969Fg2anFVYiTg2ZX3yL8vaUrVjFwmS', 'fati', ''),
(23, 'benchaalal', 'ataa', 'BO569782', 'Femme', 'marocaine', 'Célibataire', 'ataaben@gmail.com', '0605437982', 20000, 'safi', '2001-05-11', '$2y$12$utTYUokp2YdKckf6ub4k8O2wyUkmSuFTj6k2gKIoVg/eFbPpHQ5Se', 'ataa', '1225553312596369');

-- --------------------------------------------------------

--
-- Structure de la table `demandecredit`
--

CREATE TABLE `demandecredit` (
  `idd` int(11) NOT NULL,
  `typecredit` varchar(100) NOT NULL,
  `montantcredit` double NOT NULL,
  `revenum` varchar(200) NOT NULL,
  `chargesm` varchar(200) NOT NULL,
  `datecr` datetime NOT NULL,
  `etatcredit` varchar(100) NOT NULL DEFAULT 'en cours de traitement',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandecredit`
--

INSERT INTO `demandecredit` (`idd`, `typecredit`, `montantcredit`, `revenum`, `chargesm`, `datecr`, `etatcredit`, `id`) VALUES
(18, 'immobilier', 250000, '560023', '30000', '0000-00-00 00:00:00', 'refusée', 17),
(19, 'immobilier', 250000, '560023', '30000', '0000-00-00 00:00:00', 'refusée', 17),
(20, 'immobilier', 250000, '560023', '30000', '0000-00-00 00:00:00', 'en cours de traitement', 15),
(21, 'etudiant', 30000, '20000', '10000', '0000-00-00 00:00:00', 'en cours de traitement', 17),
(22, 'personnel', 3, '20000', '10000', '0000-00-00 00:00:00', 'validée', 15),
(23, 'voiture', 17000, '2000', '1500', '0000-00-00 00:00:00', 'validée', 17),
(24, 'etudiant', 30000, '2000', '1500', '0000-00-00 00:00:00', 'en cours de traitement', 17),
(25, 'personnel', 30000, '15600', '12000', '0000-00-00 00:00:00', 'validée', 15);

-- --------------------------------------------------------

--
-- Structure de la table `loantypes`
--

CREATE TABLE `loantypes` (
  `idl` int(11) NOT NULL,
  `loanType` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `montant` double NOT NULL,
  `periode` text NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `loantypes`
--

INSERT INTO `loantypes` (`idl`, `loanType`, `description`, `montant`, `periode`, `image`) VALUES
(4, 'Crédit immobilier', 'Notre emprunt immobilier est un prêt de longue durée accordé par notre établissement de crédit pour financer l\'acquisition d\'un logement. Plusieurs éléments doivent attirer votre attention au moment de votre recherche : le meilleur taux de crédit immobilier, le taux de l\'assurance emprunteur mais aussi les conditions de l\'emprunt (modularité, remboursement anticipé et pénalités, transférabilité du crédit par exemple), etc. Souscrire un crédit immobilier est un acte engageant qui s\'inscrit sur le long terme : 15 ans, 20 ans voire 25 ans.', 575, '[2ans,25ans]', ''),
(6, 'Crédit immobilier', 'Notre emprunt immobilier est un prêt de longue durée accordé par notre établissement de crédit pour financer l\'acquisition d\'un logement. Plusieurs éléments doivent attirer votre attention au moment de votre recherche : le meilleur taux de crédit immobilier, le taux de l\'assurance emprunteur mais aussi les conditions de l\'emprunt (modularité, remboursement anticipé et pénalités, transférabilité du crédit par exemple), etc. Souscrire un crédit immobilier est un acte engageant qui s\'inscrit sur le long terme : 15 ans, 20 ans voire 25 ans.', 575, '[2ans,25ans]', ''),
(8, 'Crédit Etudiant', 'Notre banque vous propose un prêt pour financer vos frais de scolarité dans les établissements d’enseignement supérieurs privés reconnus par l’Etat. Il est accordé à l’étudiant actif** ou au parent/tuteur.   Grâce à cette aide financière aux études, vous pouvez bénéficier :  D’un financement pouvant aller jusqu’à 250 000 Dhs, à raison de 50 000 Dhs par année d\'étude ; D’une durée de remboursement allant jusqu’à 12 ans; D’un différé allant jusqu’à 6 ans ;  Etudiant actif** est un étudiant qui exerce une activité génératrice de revenu', 250, '2ans', '');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` char(200) NOT NULL,
  `tel` char(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manager`
--

INSERT INTO `manager` (`id`, `nom`, `prenom`, `email`, `tel`, `username`, `password`) VALUES
(1, 'manager', 'number1', 'manager1@gmail.com', '0656231212', 'manager1', '$2y$10$PR45FI1kvRmVYr/MRWftgu/dZLJNVpL/QIpqk7.Pwk1LemXscNLR2'),
(5, 'manager', 'number2', 'manager2@gmail.com', '0789632541', 'manager2', '$2y$12$EBmpCbjuLANcEFDWsRfNMOmVQYLr8bUaSpG7Cl1aBiNC4.ZYdMGIm');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `idp` int(11) NOT NULL,
  `montantapaye` double NOT NULL,
  `datepaiement` date NOT NULL,
  `idd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD KEY `Username-C` (`username`),
  ADD KEY `Mot-de-passe` (`password`),
  ADD KEY `password` (`password`);

--
-- Index pour la table `demandecredit`
--
ALTER TABLE `demandecredit`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `idc` (`id`);

--
-- Index pour la table `loantypes`
--
ALTER TABLE `loantypes`
  ADD PRIMARY KEY (`idl`),
  ADD KEY `loanType` (`loanType`);

--
-- Index pour la table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `password_2` (`password`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idd` (`idd`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `demandecredit`
--
ALTER TABLE `demandecredit`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `loantypes`
--
ALTER TABLE `loantypes`
  MODIFY `idl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandecredit`
--
ALTER TABLE `demandecredit`
  ADD CONSTRAINT `demandecredit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_ibfk_1` FOREIGN KEY (`idd`) REFERENCES `demandecredit` (`idd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
