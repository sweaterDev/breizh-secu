-- Adminer 4.8.1 MySQL 5.7.36 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `avis`;
CREATE TABLE `avis` (
  `idavis` int(11) NOT NULL AUTO_INCREMENT,
  `idcompte` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(30) NOT NULL,
  `texte` mediumtext NOT NULL,
  PRIMARY KEY (`idavis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `avis` (`idavis`, `idcompte`, `idproduit`, `date`, `titre`, `texte`) VALUES
(1,	2,	1,	'2022-01-05',	'Magnifique et sobre',	'Très content de mon achat, un régal pour les yeux'),
(3,	4,	1,	'2022-01-18',	'mon mari adore',	'tres beau'),
(4,	6,	14,	'2022-01-19',	'Mangifique, tres féminin',	'Très joli pour un cadeau'),
(5,	4,	1,	'2022-01-19',	'je vais l\'acheter',	'je reve d\'en faire l\'achat'),
(16,	0,	1,	'2024-03-27',	'j',	'<script type=\"text/javascript\">\r\n    document.getElementById(\'avisTextarea\').oninput = function() {\r\n        alert(\'Bonjour\');\r\n    };\r\n</script>\r\n'),
(17,	0,	1,	'2024-03-27',	'r',	'<script type=\"text/javascript\">\r\n    document.alert(\'Bonjour\');\r\n</script>\r\n'),
(18,	0,	1,	'2024-03-27',	'j',	'<script type=\"text/javascript\">\r\n    document.getElementById(\'avisTextarea\').oninput = function() {\r\n        alert(\'Bonjour\');\r\n    };\r\n</script>\r\n'),
(19,	0,	1,	'2024-03-27',	'r',	'<script type=\"text/javascript\">\r\n    document.alert(\'Bonjour\');\r\n</script>\r\n'),
(20,	0,	1,	'2024-03-27',	'test',	'<script>window.alert(\'rgerg\');</script>'),
(21,	0,	1,	'2024-03-27',	'test',	'<script>window.alert(\'rgerg\');</script>'),
(22,	0,	16,	'2024-03-27',	'test',	'<script>windows.alert(\"pirate\");</script>'),
(23,	0,	16,	'2024-03-27',	'test',	'<script>window.alert(\"pirate\");</script>'),
(24,	1,	13,	'2024-03-27',	'jhgf',	'jhgfxn,'),
(25,	13,	1,	'2024-03-28',	'test',	'oiuytd');

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) NOT NULL DEFAULT '0',
  `ordre` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `categorie` (`idcat`, `titre`, `ordre`) VALUES
(1,	'Montres',	1),
(2,	'Bagues',	2),
(3,	'Colliers',	3),
(4,	'Bracelets',	4),
(5,	'Boucles d\'oreilles',	5);

DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `idcde` int(11) NOT NULL AUTO_INCREMENT,
  `idcompte` int(11) NOT NULL,
  `date` date NOT NULL,
  `statut` varchar(10) NOT NULL,
  PRIMARY KEY (`idcde`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `commande` (`idcde`, `idcompte`, `date`, `statut`) VALUES
(1,	4,	'2022-01-18',	'Payée'),
(4,	4,	'2022-01-18',	'Payée'),
(5,	4,	'2022-01-18',	'Payée'),
(6,	4,	'2022-01-18',	'Payée'),
(7,	6,	'2022-01-19',	'Payée'),
(8,	1,	'2024-03-27',	'Payee'),
(9,	1,	'2024-03-27',	'Payee');

DROP TABLE IF EXISTS `compte`;
CREATE TABLE `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `statut` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `password`, `adresse`, `statut`) VALUES
(1,	'Alderson',	'Elliot',	'',	'admin',	'217 E Broadway, 10002 New York',	'admin'),
(2,	'Durand',	'Pierre',	'',	'motdepasse',	'',	'Utilisateur'),
(3,	'Smith',	'John',	'',	'password',	'',	'Utilisateur'),
(4,	'user',	'user',	'',	'user',	'242 avenue de la Libération, 29000 Quimper',	'Utilisateur'),
(5,	'Potter',	'Harry',	'',	'magie',	'',	'Utilisateur'),
(6,	'Wayne',	'John',	'',	'john',	'Old River, Colorado',	'Utilisateur'),
(11,	'TOUADI',	'ILIÈS',	'',	'fuji65',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(13,	'TOUADI',	'akim',	'',	'rot',	'11 RUE DU LAPIN AGILE',	''),
(15,	'TOUADI',	'ILIÈS',	'fujiki',	'zc71dx52&*',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(16,	'TOUADI',	'teïmya',	'fujiki',	'trdsw',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(17,	'TOUADI',	'walid',	'fujiki',	'fghjhd',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(18,	'TOUADI',	'walid',	'fujiki',	'fghjhd',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(19,	'TOUADI',	'ILIÈS',	'fujiki',	'zc71dx52&*',	'11 RUE DU LAPIN AGILE',	'Utilisateur'),
(20,	'TEST',	'test',	'efuheijf@gmail.com',	'2344',	'5 avrr 93',	'Utilisateur'),
(21,	'ggg',	'gg',	'efuheijf@gmail.com',	'2344',	'ggg',	'Utilisateur'),
(22,	'ggg',	'gg',	'efuheijf@gmail.com',	'$2y$10$0MQsdd.FVzRpEugQzHZJdevcRvlSzSWXB1/TrUhYAQkq75Af7/zY6',	'ggg',	'Utilisateur'),
(23,	'efef',	'efef',	'efuheijf@gmail.com',	'$2y$10$MzG8QSlUnYJQEXyrBq01O.t7wgre53ZSZWb09kj4IaGLTWrFbRcVy',	'fff',	'Utilisateur');

DROP TABLE IF EXISTS `detailcommande`;
CREATE TABLE `detailcommande` (
  `iddetail` int(11) NOT NULL AUTO_INCREMENT,
  `idcde` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`iddetail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `detailcommande` (`iddetail`, `idcde`, `idproduit`, `qte`) VALUES
(1,	1,	1,	2),
(2,	1,	2,	2),
(3,	5,	20,	1),
(4,	5,	21,	1),
(5,	6,	20,	1),
(6,	6,	21,	1),
(7,	7,	1,	1),
(8,	7,	25,	2),
(9,	8,	29,	1),
(10,	8,	1,	1),
(11,	9,	30,	1);

DROP TABLE IF EXISTS `nouveautes`;
CREATE TABLE `nouveautes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `nouveautes` (`id`) VALUES
(1),
(4),
(5),
(12),
(3),
(11),
(22),
(21),
(20);

DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `idcat` int(11) NOT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produit` (`idproduit`, `titre`, `description`, `prix`, `idcat`) VALUES
(1,	'Montre homme classique',	'Bracelet cuir, élégant et discret',	150,	1),
(2,	'Gentleman today',	'Montre pour les hommes de caractère',	99,	1),
(3,	'Highway',	'Branché et classique',	250,	1),
(4,	'Waterproof',	'Montre sport, waterproof, profondeur 5m',	120,	1),
(5,	'Classique Homme',	'Elegante et discret',	119,	1),
(6,	'Brazilian style',	'Bracelet cuir blanc',	350,	1),
(7,	'Montre femme élégante',	'Délicate et féminine',	129,	1),
(8,	'Milano Sun',	'Bracelet cuir, élégante et discrete',	99,	1),
(9,	'Del Sol',	'Brillante, bracelet large',	119,	1),
(10,	'Montre homme classique',	'Bracelet argent',	149,	1),
(11,	'Femina',	'Délicate et superbement ouvragée',	139,	1),
(12,	'Spain Style',	'Forte et puissante',	99,	1),
(13,	'Bague Dragon',	'Magnifique bague Dragon Dreamworks',	99,	2),
(14,	'Bague Coeur rouge',	'Or blanc',	99,	2),
(15,	'Histoire et passion',	'Or blanc, coeur précieux',	199,	2),
(16,	'Solitaire',	'Délicatement ouvragrée',	129,	2),
(17,	'Amour Eternel',	'Idéale fiançailles',	399,	2),
(19,	'Goutte d\'Amour',	'Magnifique bague Dragon Dreamworks',	99,	3),
(20,	'Cendrillon',	'Pour les princesses',	199,	3),
(21,	'Coeur Eternel',	'Idéale fiançailles',	139,	3),
(22,	'Collier precioso',	'Or blanc',	399,	3),
(23,	'Histoire De coeur',	'Or, un bijou authentique de notre collection',	339,	3),
(24,	'Fleur de diamant',	'Or blanc, ciselée avec zircon',	339,	3),
(25,	'Bracelet passionnata',	'Métal doré, attache avec fermoir',	99,	4),
(26,	'Rouge passion',	'Elégant et raffiné, ce bracelet saura vous séduire',	199,	4),
(27,	'Maillage or',	'Maillage précieux et fin pour les poignets précieux',	349,	4),
(28,	'Maillage argent',	'Bracelet en argent',	79,	4),
(29,	'Un jour',	'Original et contemporain',	99,	5),
(30,	'Etoile',	'D\'un brillant éclatant pour mettre en valeur une parure',	199,	5),
(31,	'Eclat de neige',	'Du Zircon dans tous ses états',	359,	5),
(32,	'Noeud Zirconia',	'Féminin et élégant',	79,	5),
(33,	'Améthia',	'Cloux précieux',	79,	5);

-- 2024-03-29 11:06:33
