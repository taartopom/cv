-- phpMyAdmin SQL Dump
-- version 4.6.0-alpha1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 16 Février 2019 à 12:02
-- Version du serveur :  8.0.13
-- Version de PHP :  7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `cv`
--

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `mobile`, `website`, `profession`, `short_description`, `long_description`, `address`, `zipcode`, `city`) VALUES
(35, 'Xavier', 'Quièvre', 'xavier.quievre@gmail.com', '07 81 25 65 74', 'https://xavierquievre.fr', 'Développeur web', 'Développeur <span>Web</span>, <span>Mobile</span> et <span>Application</span><br><a class="smoothscroll" href="#about">Scrollez</a> pour en savoir plus <a class="smoothscroll" href="#about">sur moi</a>.', '<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web.</p><p>Vous avez des questions où une envie de réaliser un projet ?<br><a class="smoothscroll" href="#contact">Envoyez moi un message !</a></p>', '7, Allée des Coutilliers', '59700', 'Marcq-en-Barœul');

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`id`, `profile_id`, `company`, `job_name`, `start_date`, `end_date`, `description`, `city`) VALUES
(168, 35, 'Webgump', 'Lead Développeur', '2016-01-01 00:00:00', NULL, 'Développement de l\'application mobile <a href="https://www.youpicity.com" target="_blank">Youpicity</a> sous Ionic et Symfony4', 'Marcq-en-baroeul'),
(169, 35, 'WebdealAuto', 'Développeur web', '2014-04-18 00:00:00', NULL, 'Développement du site mobile sous Symfony2, développement d\'outils marketing sous Symfony1, intégration de la refonte graphique du site marchand (bootstrap / gulp / scss / jQuery), développement du nouveau logiciel d\'expédition avec Angular6 et une API Symfony3, développement d\'un WMS avec Angular et intégration dans Cordova, refonte technique du backend avec Symfony3, MongoDB, ElasticSearch, RabbitMQ', 'Villeneuve d\'Ascq'),
(170, 35, 'Réflexe Adoption', 'Développeur web', '2013-01-01 00:00:00', NULL, 'Refonte du site de l’association Réflexe Adoption et création d’un back-office permettant la gestion des animaux, la consultation des questionnaires et des messages, l’édition du forum', 'Marcq-en-baroeul'),
(171, 35, 'Lille Art Trianon', 'Développeur web', '2013-01-01 00:00:00', NULL, 'Création du site de l’atelier galerie Le Trianon à Lille', 'Marcq-en-baroeul'),
(172, 35, 'FabienAssist06', 'Développeur web', '2013-01-01 00:00:00', NULL, 'Création du site d’un technicien en maintenance informatique et d’un back-office avec gestion des clients, interventions et facturation', 'Marcq-en-baroeul'),
(173, 35, 'Hautes Loges Animation', 'Développeur web', '2012-01-01 00:00:00', NULL, 'Création du site de l’association des Hautes Loges de Marcqen-Baroeul «Hautes Loges Animation» et son back-office', 'Marcq-en-baroeul'),
(174, 35, 'DevSources', 'Développeur web', '2012-01-01 00:00:00', NULL, 'Création d’un site de ressources concernant les langages du web.', 'Marcq-en-baroeul'),
(175, 35, 'Wanted Solutions', 'Stage développeur web', '2012-01-01 00:00:00', NULL, 'Mise à jour du site web, création d’un back-office pour la gestion des candidats, des offres et un système de matching candidats / offres.', 'Roubaix');

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `profile_id`, `place`, `degree`, `start_date`, `end_date`, `description`, `city`) VALUES
(71, 35, 'Lycée Yves Kernanec', 'Baccalauréat général scientifique option musique', '2009-01-01 00:00:00', NULL, '', 'Marcq-en-baroeul'),
(72, 35, 'C.M.A. (Centre des Musiques Actuelles)', 'Formation de Musique Assistée par Ordinateur', '2010-01-01 00:00:00', NULL, '', 'Valenciennes'),
(73, 35, 'Afpa', 'Formation de développeur logiciel', '2012-01-01 00:00:00', NULL, '', 'Roubaix');

--
-- Contenu de la table `skill`
--

INSERT INTO `skill` (`id`, `profile_id`, `name`, `percentage`) VALUES
(239, 35, 'HTML5', 70),
(240, 35, 'CSS3', 70),
(241, 35, 'PHP7', 70),
(242, 35, 'Symfony 1/2/3/4', 70),
(243, 35, 'jQuery', 70),
(244, 35, 'NodeJS', 60),
(245, 35, 'Angular 2+', 60),
(246, 35, 'Ionic', 60),
(247, 35, 'MySQL', 60),
(248, 35, 'MongoDB', 50),
(249, 35, 'ElasticSearch', 50);

--
-- Contenu de la table `social`
--

INSERT INTO `social` (`id`, `class_name`, `title`, `link`, `profile_id`) VALUES
(27, 'fab fa-github', 'Voir mes projets sur Github', 'https://github.com/sapiet', 35);

--
-- Contenu de la table `work`
--

INSERT INTO `work` (`id`, `profile_id`, `title`, `description`, `cover`, `link`, `position`) VALUES
(348, 35, 'Youpicity', 'Développement de l\'application Youpicity avec Ionic / Symfony', 'youpicity.jpg', 'https://www.youpicity.com', 1),
(349, 35, 'WMS WebdealAuto', 'Refonte du logiciel d\'expédition avec NodeWebkit, Angular6 et une API sous Symfony3, développement d\'un backoffice de gestion de stock (réception / rangement / inventaire)', 'wms.png', NULL, 2),
(350, 35, 'Backoffice WebdealAuto', 'Création d\'un nouveau backoffice sous Symfony3 en préparation de la mise en place d\'un ERP', 'seraphin.png', NULL, 3),
(351, 35, 'Harlec', 'Mise en place d\'une page vitrine sans framework pour présenter l\'Harlec, un vélo hybride à mi chemin entre la moto et le vélo', 'harlec.png', 'https://www.harlec.com/', 4),
(352, 35, 'Avec Ton Vélo', 'Mise en place d\'un site sous Prestashop et intégration du design', 'avectonvelo.png', 'https://avectonvelo.com', 5),
(353, 35, 'WebdealAuto', 'Refonte visuelle du site marchand sous Symfony 1.4 avec gulp, scss, bootstrap et jQuery', 'webdealauto-design.png', 'https://www.webdealauto.com', 6),
(354, 35, 'WebdealAuto', 'Développement d\'outils sous Symfony 1.4 (gestion du catalogue de pièces / équipementiers / modes de livraison / menus des sites / imprimantes / avis de prélèvement pour la comptabilité / paramètres)', 'webdealauto-admin-tools.png', 'https://www.webdealauto.com', 7),
(355, 35, 'WebdealAuto Marketing', 'Développement d\'outils marketing sous Symfony 1.4 (gestion des bannières, offres promotionnelles, scripts de création et d\'envoi de newsletters, intégration de tag d\'affiliation, jeux concours)', 'webdealauto-marketing.png', 'https://www.webdealauto.com', 8),
(356, 35, 'WebdealAuto mobile', 'Développement d\'un site mobile sous Symfony 2 pour la société WebdealAuto', 'webdealauto-mobile-main-menu.png', 'https://m.webdealauto.com', 9),
(357, 35, 'Sapiet', 'Site musicien, dates, groupes, intégration Youtube et Soundcloud.\n                                    Création d\'un espace réservé à la lecture et au téléchargement de\n                                    musique en cours de composition.', 'sapiet.png', 'http://sapiet.free.fr', 10),
(358, 35, 'Reflexe Adoption', 'Refonte du site de l’association\n                                    et création d\'un back-office permettant la gestion\n                                    des animaux, la consultation des questionnaires,\n                                    des messages et des dons et parainnages, l’édition du forum.', 'reflexeadoption.png', NULL, 11),
(359, 35, 'Galerie Le Trianon', 'Création du site de l’atelier galerie Le Trianon à Lille', 'trianon.png', NULL, 12),
(360, 35, 'Fabien-Assist06 v.2', 'Mise à jour du site d\'un technicien\n                                    en maintenance informatique (structure et design)\n                                    et création d\'un backoffice.', 'fabienassist-v2.png', 'http://fabien-assist06.fr', 13),
(361, 35, 'Hautes Loges Animation', 'Création du site de l\'association des\n                                    Hautes Loges et d\'un backoffice sur mesure\n                                    permettant de gérer le contenu.', 'hautesloges.png', 'http://hautes-loges-animation.fr', 14),
(362, 35, 'DevSources', 'Projet personnel regroupant des ressources\n                                    et plugins concernant les langages du web, à visionner et\n                                    à télécharger.', 'devsources.png', NULL, 15),
(363, 35, 'Equity-curve v.3', 'Troisième évolution d\'une application concernant le trading\n                                    proposant des graphiques en temps réel au format\n                                    image générés en PHP, contrôlables grâce à des\n                                    "boîtes à outils" fonctionnant en JavaScript.', 'equitycurve-v3.png', NULL, 16),
(364, 35, 'Equity-curve v.2', 'Seconde application concernant le trading avec un\n                                    nouveau mode de représentation, des graphiques en\n                                    JavaScript ainsi qu\'un système de messagerie\n                                    instantanée pour un pilotage des utilisateurs.', 'equitycurve-v2.png', NULL, 17),
(365, 35, 'Wanted Solutions', 'Mise à jour et optimisation du site, création\n                                    d\'un espace dédié aux candidats ainsi qu\'un\n                                    backoffice sur-mesure permettant une gestion des\n                                    clients et des CV ainsi qu\'un matching de correspondance\n                                    personnalisable.', 'wantedsolutions.png', NULL, 18),
(366, 35, 'Equity-curve v.1', 'Application d\'aide au trading avec des fonctionnalités\n                                    comme les alertes sonores et visuelles, la gestion de\n                                    la mise en page.', 'equitycurve-v1.png', NULL, 19);
