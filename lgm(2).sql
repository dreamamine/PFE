-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 02 Décembre 2016 à 22:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lgm`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brochure_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anneePublication` date NOT NULL,
  `nbAuteur` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomJournal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indxType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deletedAt` datetime DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CD8737FA5F37A13B` (`token`),
  UNIQUE KEY `UNIQ_CD8737FAB96114D1` (`brochure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `brochure_id`, `titre`, `anneePublication`, `nbAuteur`, `valeur`, `nomJournal`, `indxType`, `vol`, `num`, `pp`, `created`, `updated`, `deletedAt`, `token`) VALUES
(1, 5, 'article1', '2016-12-01', 3, '12.5', 'journal1', 'Article IF', '1', '2552255', '875222554', '2016-11-30 11:02:47', '2016-11-30 11:39:40', NULL, '24e43r2cuqjo4wswkcgwgsk8ow0gcgs'),
(2, 6, 'article2', '2016-11-08', 2, '25', 'journale2', 'Article ID', '12', '58', 'ccc', '2016-11-30 11:04:09', '2016-11-30 11:04:09', NULL, 'f5e0xpntdbwcksswgk48k804k4cs00c'),
(3, 11, 'article3', '2016-11-10', 2, '45', 'journal3', 'Article ID', '44', '58', '124', '2016-11-30 11:39:21', '2016-11-30 11:39:22', NULL, 'filzxoocvoggk04g4cw84o8kcowkk00'),
(4, 12, 'article4', '2016-11-09', 1, '4', 'journal4', 'Article N ID', '4', '4', '4', '2016-11-30 12:32:27', '2016-11-30 12:32:28', NULL, 'fhqogn0sqzkkoc0wsco4k04w48wog04');

-- --------------------------------------------------------

--
-- Structure de la table `article_user`
--

CREATE TABLE IF NOT EXISTS `article_user` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`user_id`),
  KEY `IDX_3DD151487294869C` (`article_id`),
  KEY `IDX_3DD15148A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article_user`
--

INSERT INTO `article_user` (`article_id`, `user_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 3),
(3, 2),
(3, 4),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `classification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_55AB1405F37A13B` (`token`),
  KEY `IDX_55AB140A76ED395` (`user_id`),
  KEY `IDX_55AB1407294869C` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cadre__equivalant`
--

CREATE TABLE IF NOT EXISTS `cadre__equivalant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet_id` int(11) DEFAULT NULL,
  `qualite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cINDoctorant` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomJeuneFille` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateNaiss` date DEFAULT NULL,
  `lieuNaiss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telMob` int(11) DEFAULT NULL,
  `telFixe` int(11) DEFAULT NULL,
  `eMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dernierDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDepObtenu` date DEFAULT NULL,
  `etabDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intituleSujet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tauxAvancement` int(11) DEFAULT NULL,
  `anneePremierInscrip` date DEFAULT NULL,
  `etbInscrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CCDD177A5F37A13B` (`token`),
  UNIQUE KEY `UNIQ_CCDD177A7C4D497E` (`sujet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `cadre__equivalant`
--

INSERT INTO `cadre__equivalant` (`id`, `sujet_id`, `qualite`, `cINDoctorant`, `nom`, `prenom`, `nomJeuneFille`, `dateNaiss`, `lieuNaiss`, `sexe`, `telMob`, `telFixe`, `eMail`, `dernierDepObtenu`, `dateDepObtenu`, `etabDepObtenu`, `intituleSujet`, `tauxAvancement`, `anneePremierInscrip`, `etbInscrip`, `token`) VALUES
(1, NULL, 'aa', 111, 'boubaker', 'amen', 'a', '2011-01-01', 'jemmel', 'H', 1111, 1111, 'aa@aa.fr', 'Mastere', '2011-01-01', 'aaa', 'these3', 111, '2011-01-01', 'aa', 'dawhvpcfmjkks4w4csksks0wwwokcos');

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brochure_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anneePublication` date NOT NULL,
  `nbAuteur` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomCongrer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indxType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F9AFB5EB5F37A13B` (`token`),
  UNIQUE KEY `UNIQ_F9AFB5EBB96114D1` (`brochure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `communication`
--

INSERT INTO `communication` (`id`, `brochure_id`, `titre`, `anneePublication`, `nbAuteur`, `valeur`, `nomCongrer`, `indxType`, `vol`, `num`, `pp`, `token`) VALUES
(1, 7, 'comm1', '2016-11-15', 2, '12', 'congré1', 'Communication ID', '122', '7455', '122', '3xxzl9uxl76ssw04gk4w040ogg8cc4g'),
(2, 8, 'comm2', '2016-11-04', 1, '122', '55202rbnnej', 'Communication N ID', '125', '444', '22', '6o6j9wmvnocg40w4kkwgwo804cw4ww');

-- --------------------------------------------------------

--
-- Structure de la table `communication_user`
--

CREATE TABLE IF NOT EXISTS `communication_user` (
  `communication_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`communication_id`,`user_id`),
  KEY `IDX_B244AE9D1C2D1E0C` (`communication_id`),
  KEY `IDX_B244AE9DA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `communication_user`
--

INSERT INTO `communication_user` (`communication_id`, `user_id`) VALUES
(1, 2),
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `doctorant`
--

CREATE TABLE IF NOT EXISTS `doctorant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet_id` int(11) NOT NULL,
  `qualite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cINDoctorant` int(11) NOT NULL,
  `nomJeuneFille` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateNaiss` date DEFAULT NULL,
  `lieuNaiss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telMob` int(11) DEFAULT NULL,
  `telFixe` int(11) DEFAULT NULL,
  `dernierDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDepObtenu` date DEFAULT NULL,
  `etabDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intituleSujet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tauxAvancement` int(11) DEFAULT NULL,
  `anneePremierInscrip` date DEFAULT NULL,
  `etbInscrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etabInscrip2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FBF7B52E5F37A13B` (`token`),
  UNIQUE KEY `UNIQ_FBF7B52E7C4D497E` (`sujet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `eleve__mastere`
--

CREATE TABLE IF NOT EXISTS `eleve__mastere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet_id` int(11) NOT NULL,
  `qualite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cINDoctorant` int(11) NOT NULL,
  `nomJeuneFille` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateNaiss` date DEFAULT NULL,
  `lieuNaiss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telMob` int(11) DEFAULT NULL,
  `telFixe` int(11) DEFAULT NULL,
  `eMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dernierDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDepObtenu` date DEFAULT NULL,
  `etabDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intituleSujet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anneePremierInscrip` date DEFAULT NULL,
  `etbInscrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E0E203115F37A13B` (`token`),
  UNIQUE KEY `UNIQ_E0E203117C4D497E` (`sujet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structure_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2449BA155F37A13B` (`token`),
  KEY `IDX_2449BA152534008B` (`structure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id`, `structure_id`, `nom`, `sujet`, `token`) VALUES
(1, 1, 'equipe1', 'sujet1', '9l6v99zuueckwgc0w488gcws8o48ow0'),
(2, 1, 'equipe2', 'sujet2', 'fx63m4tfe1440888gg8gw4cgkcsk04c');

-- --------------------------------------------------------

--
-- Structure de la table `ext_log_entries`
--

CREATE TABLE IF NOT EXISTS `ext_log_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `log_class_lookup_idx` (`object_class`),
  KEY `log_date_lookup_idx` (`logged_at`),
  KEY `log_user_lookup_idx` (`username`),
  KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ext_translations`
--

CREATE TABLE IF NOT EXISTS `ext_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fos_admin`
--

CREATE TABLE IF NOT EXISTS `fos_admin` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_chercheur_junior`
--

CREATE TABLE IF NOT EXISTS `fos_chercheur_junior` (
  `id` int(11) NOT NULL,
  `qualite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cINChercheur_Junior` int(11) NOT NULL,
  `nomJeuneFille` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateNaiss` date DEFAULT NULL,
  `lieuNaiss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telMob` int(11) DEFAULT NULL,
  `telFixe` int(11) DEFAULT NULL,
  `dernierDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDepObtenu` date DEFAULT NULL,
  `etabDepObtenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intituleSujet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tauxAvancement` int(11) DEFAULT NULL,
  `anneePremierInscrip` date DEFAULT NULL,
  `etbInscrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etabInscrip2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_37773FA75F37A13B` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_chercheur_junior`
--

INSERT INTO `fos_chercheur_junior` (`id`, `qualite`, `cINChercheur_Junior`, `nomJeuneFille`, `dateNaiss`, `lieuNaiss`, `sexe`, `telMob`, `telFixe`, `dernierDepObtenu`, `dateDepObtenu`, `etabDepObtenu`, `intituleSujet`, `tauxAvancement`, `anneePremierInscrip`, `etbInscrip`, `etabInscrip2`, `token`) VALUES
(3, 's', 1225512, 'tyyryuru', '2011-01-01', 'xxx', 'f', 45256, 1222254, '20122325', '2011-01-01', 'ssss', 'These1', 6, '2011-01-01', 'sss', 'sss', 'bqr39gflgmos0osgw0g0oggc0ccwc0g');

-- --------------------------------------------------------

--
-- Structure de la table `fos_enseignant_chercheur`
--

CREATE TABLE IF NOT EXISTS `fos_enseignant_chercheur` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CIN_EnseigCh` int(11) NOT NULL,
  `nom_jeune_fille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etablisement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_mob` int(11) NOT NULL,
  `tel_fixe` int(11) NOT NULL,
  `dernier_dep_obtenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_dep_obtenu` date NOT NULL,
  `etab_dep_obtenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D13756275F37A13B` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_enseignant_chercheur`
--

INSERT INTO `fos_enseignant_chercheur` (`id`, `grade`, `CIN_EnseigCh`, `nom_jeune_fille`, `date_naiss`, `lieu_naiss`, `sexe`, `etablisement`, `fonction`, `tel_mob`, `tel_fixe`, `dernier_dep_obtenu`, `date_dep_obtenu`, `etab_dep_obtenu`, `token`) VALUES
(1, 'PR', 123456, 'a', '2011-01-01', 'aa', 'M', 'a', 'a', 123, 122, 'a', '2011-01-01', 'a', 'h0n7ehzastkoo4g480804wggkgocccg'),
(2, 'MA', 12255, 'IMA', '2011-09-04', 'TEBOULBA', 'F', 'ENIM', 'ING', 125524, 252525, '2015', '2015-04-04', 'DDDDD', '5dk1fgxe8q88sos088o8gos84k04o80'),
(4, 'gr', 122255, 'a', '2011-01-01', 'TEBOULBA', 'm', 'enim', 'ING', 122545, 441444, '2015', '2011-01-01', 'etb', '3b4kjptkkv8kg4cw0wccwcwwso484o8'),
(5, 'pr', 12345, 'a', '2011-01-01', 'a', 'h', 'a', 'a', 118, 123, 'aa', '2011-01-01', 'a', '49euqptc9hwkos4g48k0wsosgwskk40');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indiceproduction` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4B98C215F37A13B` (`token`),
  KEY `IDX_4B98C2159027487` (`theme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id`, `theme_id`, `nom`, `indiceproduction`, `token`) VALUES
(1, 1, 'group1', 15, 'k6a5n8ll23kkg4so048w84ccgocgs80'),
(2, 2, 'groupe2', 4, '24s7ofas63eso0gwccc4k40cs0oc4wg'),
(3, 2, 'groupe3', 5, 'bl6s9l05r3cog84g8co4swks008gwks');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `url`, `alt`) VALUES
(1, 'jpeg', '20160325_111112.jpg'),
(2, 'jpeg', 'p1 018 (2).jpg'),
(3, 'jpeg', 'p1 018 (2).jpg'),
(4, 'jpeg', 'p1 018 (2).jpg'),
(5, 'jpeg', 'p1 018 (2).jpg'),
(6, 'jpeg', 'p1 018 (2).jpg'),
(7, 'jpeg', 'p1 018 (2).jpg'),
(8, 'jpeg', 'p1 018 (2).jpg'),
(9, 'jpeg', 'p1 018 (2).jpg'),
(10, 'jpeg', 'p1 018 (2).jpg'),
(11, 'jpeg', 'p1 018 (2).jpg'),
(12, 'jpeg', 'p1 018 (2).jpg'),
(13, 'jpeg', 'SAM_0290.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `ouvragescientifique`
--

CREATE TABLE IF NOT EXISTS `ouvragescientifique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brochure_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anneePublication` date NOT NULL,
  `nbAuteur` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6451A64C5F37A13B` (`token`),
  UNIQUE KEY `UNIQ_6451A64CB96114D1` (`brochure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ouvragescientifique`
--

INSERT INTO `ouvragescientifique` (`id`, `brochure_id`, `titre`, `anneePublication`, `nbAuteur`, `valeur`, `edition`, `token`, `vol`, `num`, `pp`) VALUES
(1, 9, 'ouvrage1', '2016-11-16', 2, '1225', 'edition12', 'jeqb8ecnk60c4gwck0co4gsk8ok08c4', 'vol1', 'num25', '12'),
(2, 10, 'ouvrage2', '2016-11-09', 2, '4', 'v2', 'q7l1qp2hsysw4o048s48ogcsc88c844', 'vol1', 'num42', '120');

-- --------------------------------------------------------

--
-- Structure de la table `ouvragescientifique_user`
--

CREATE TABLE IF NOT EXISTS `ouvragescientifique_user` (
  `ouvragescientifique_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`ouvragescientifique_id`,`user_id`),
  KEY `IDX_67F98D1D7335F563` (`ouvragescientifique_id`),
  KEY `IDX_67F98D1DA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ouvragescientifique_user`
--

INSERT INTO `ouvragescientifique_user` (`ouvragescientifique_id`, `user_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipe_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_chef` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateFinProjet` date DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_50159CA95F37A13B` (`token`),
  KEY `IDX_50159CA96D861B89` (`equipe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id`, `equipe_id`, `nom`, `nom_chef`, `sujet`, `dateFinProjet`, `token`) VALUES
(1, 1, 'Projet1', 'chef1', 'sujet1', '2016-11-20', 'mnczn1l4p3k8ccck8488kccccsgokoo'),
(2, 2, 'Projet2', 'chef2', 'sujet2', '2016-11-10', 'q72wmjnszwgwc84cg04kkgcos04sog8');

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE IF NOT EXISTS `structure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_structure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `universite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etablissement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `denomination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin_resp` int(11) NOT NULL,
  `nom_resp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_resp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` date NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6F0137EA5F37A13B` (`token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `structure`
--

INSERT INTO `structure` (`id`, `code_structure`, `universite`, `etablissement`, `denomination`, `cin_resp`, `nom_resp`, `prenom_resp`, `website`, `date_creation`, `token`) VALUES
(1, 'L1', 'Monastir', 'ENIM', 'LGM', 31222, 'ggg', 'gggg', 'eeeee', '2016-11-14', 'qr5p21no63kks48wkg0koc044skc8sw');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `directeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codirecteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etbInscrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etabInscrip2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2E13599D5F37A13B` (`token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`id`, `title`, `directeur`, `codirecteur`, `etbInscrip`, `etabInscrip2`, `etat`, `token`) VALUES
(1, 'These1', 'directeur1', 'cord1', 'enim', 'ETAB', 'EUJJX', '9gz61n1rg408g0g48sc0wo488gkk04c'),
(2, 'THESE2', 'DIRECTEUR2', 'CORDI2', 'ENIM', 'etab1', 'etat1', 'dggxxm019mo0s00o4ck0ss4wococos4'),
(3, 'these3', 'amine', 'IMA', 'enim', 'enim', 'M', '1j59lg2i4p5ww4ok4kko008kkco8gw0');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projet_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9775E7085F37A13B` (`token`),
  KEY `IDX_9775E708C18272` (`projet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id`, `projet_id`, `nom`, `sujet`, `token`) VALUES
(1, 1, 'Them1', 'sujet', '3wud6gl2ot2cg8oocg8sgo4skso80w4'),
(2, 2, 'Theme2', 'SUJET2', 'fxgs0lo6erk0ks4s484o8okwwsws8s4');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D6493DA5256D` (`image_id`),
  KEY `IDX_8D93D6497A45358C` (`groupe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `image_id`, `groupe_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `type`) VALUES
(1, 1, 2, 'admin', 'admin', 'boubaker.am@gmail.com', 'boubaker.am@gmail.com', 1, 'of34k8ajo74w8o4osskgggo44gc8w0g', 'DYy3t1qpPJXWC2pTSymOYWCUMAx0DnkheHmzBBjMVpkj65GTTIcmim6Kun7pQBDcAD/Nbh80B5JlgmNbFPvICA==', '2016-12-01 23:11:49', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, 'admin', 'admin', 'fos_enseignant_chercheur'),
(2, 2, 1, 'IMA', 'ima', 'IMEN@GMAIL.COM', 'imen@gmail.com', 1, 'g38ot4xgqcggc44kk84g888s4c0k0co', 'yQLtZrx0PoVCjcRQzHdaXpPvwf/HEqQfYlkzJDaUp5fYCb3e3kV9X1YNqxZLWyC6x09Un3rVWQ+RmOtp4gSqlg==', '2016-12-01 20:06:45', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'IMA', 'IMA', 'fos_enseignant_chercheur'),
(3, 3, 3, 'ima4', 'ima4', 'ima@gmail.com', 'ima@gmail.com', 1, '4z9rzzwh3484k0g0g44sso4sccogo8c', 'oknoaUgsMoLt4DIZdJI7xfES0OVBTtWHEEKQYSLbmmfhx+ilz4rSp5GK5FybUhXSMnYZvE2ECXmw/lCpDRTU0g==', '2016-11-30 23:43:05', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'ima', 'ima', 'fos_chercheur_junior'),
(4, 4, 1, 'ramzi', 'ramzi', 'ramzi@gmail.com', 'ramzi@gmail.com', 1, 'mcgbcrz124g0080g040o0gskc4w48ok', 'ErwcYq/4olp8CqzcFnY0Vq3HICa9j9/5CJRrSnueSMta7IMnN0Hs4sXHdWA/wmSmItywGaAUymCFj9+xtM4nXg==', '2016-11-30 10:59:03', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'ramzi', 'ramzi', 'fos_enseignant_chercheur'),
(5, 13, 3, 'amine', 'amine', 'boubaker.a@gmail.com', 'boubaker.a@gmail.com', 1, 'doh2ht2tgdcgs408c8okgg804k8o4o4', 'QOiLd2eKmaIVQU+jU5GSw7YyfyYIFhK2cueBYnQtHfOW074EKjivYkIT5kRveJEfIzHfA7c6ZK41I6bsAuNLPw==', '2016-12-01 00:12:50', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'amine', 'amine', 'fos_enseignant_chercheur');

-- --------------------------------------------------------

--
-- Structure de la table `user_ouvragescientifique`
--

CREATE TABLE IF NOT EXISTS `user_ouvragescientifique` (
  `user_id` int(11) NOT NULL,
  `ouvragescientifique_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`ouvragescientifique_id`),
  KEY `IDX_56A312C6A76ED395` (`user_id`),
  KEY `IDX_56A312C67335F563` (`ouvragescientifique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_CD8737FAB96114D1` FOREIGN KEY (`brochure_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `article_user`
--
ALTER TABLE `article_user`
  ADD CONSTRAINT `FK_3DD151487294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3DD15148A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD CONSTRAINT `FK_55AB1407294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_55AB140A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cadre__equivalant`
--
ALTER TABLE `cadre__equivalant`
  ADD CONSTRAINT `FK_CCDD177A7C4D497E` FOREIGN KEY (`sujet_id`) REFERENCES `sujet` (`id`);

--
-- Contraintes pour la table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `FK_F9AFB5EBB96114D1` FOREIGN KEY (`brochure_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `communication_user`
--
ALTER TABLE `communication_user`
  ADD CONSTRAINT `FK_B244AE9D1C2D1E0C` FOREIGN KEY (`communication_id`) REFERENCES `communication` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B244AE9DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `doctorant`
--
ALTER TABLE `doctorant`
  ADD CONSTRAINT `FK_FBF7B52E7C4D497E` FOREIGN KEY (`sujet_id`) REFERENCES `sujet` (`id`);

--
-- Contraintes pour la table `eleve__mastere`
--
ALTER TABLE `eleve__mastere`
  ADD CONSTRAINT `FK_E0E203117C4D497E` FOREIGN KEY (`sujet_id`) REFERENCES `sujet` (`id`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `FK_2449BA152534008B` FOREIGN KEY (`structure_id`) REFERENCES `structure` (`id`);

--
-- Contraintes pour la table `fos_admin`
--
ALTER TABLE `fos_admin`
  ADD CONSTRAINT `FK_AECFD468BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fos_chercheur_junior`
--
ALTER TABLE `fos_chercheur_junior`
  ADD CONSTRAINT `FK_37773FA7BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fos_enseignant_chercheur`
--
ALTER TABLE `fos_enseignant_chercheur`
  ADD CONSTRAINT `FK_D1375627BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `FK_4B98C2159027487` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`);

--
-- Contraintes pour la table `ouvragescientifique`
--
ALTER TABLE `ouvragescientifique`
  ADD CONSTRAINT `FK_6451A64CB96114D1` FOREIGN KEY (`brochure_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `ouvragescientifique_user`
--
ALTER TABLE `ouvragescientifique_user`
  ADD CONSTRAINT `FK_67F98D1D7335F563` FOREIGN KEY (`ouvragescientifique_id`) REFERENCES `ouvragescientifique` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_67F98D1DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA96D861B89` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`);

--
-- Contraintes pour la table `theme`
--
ALTER TABLE `theme`
  ADD CONSTRAINT `FK_9775E708C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6493DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `FK_8D93D6497A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`);

--
-- Contraintes pour la table `user_ouvragescientifique`
--
ALTER TABLE `user_ouvragescientifique`
  ADD CONSTRAINT `FK_56A312C67335F563` FOREIGN KEY (`ouvragescientifique_id`) REFERENCES `ouvragescientifique` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_56A312C6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
