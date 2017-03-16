-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Mars 2017 à 09:14
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `movie_journey_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(550) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `place`
--

INSERT INTO `place` (`id`, `name`, `description`, `photo_path`, `latitude`, `longitude`) VALUES
(1, 'Pont de Bir Hakeim', 'Le pont de Bir-Hakeim relie l\'avenue du Président-Kennedy sur la rive droite de la Seine, dans le quartier de la Muette, aux quais Branly et de Grenelle sur la rive gauche, dans le quartier de Grenelle.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/P1080370_Paris_VII-XV-XVI_pont_de_Bir_Hakeim_rwk.JPG/1280px-P1080370_Paris_VII-XV-XVI_pont_de_Bir_Hakeim_rwk.JPG', 48.8562697, 2.2871275999999625),
(2, 'Pétra', 'Pétra est un site archéologique somptueux qui se trouve à environ 200 km d\'Amman, la capitale jordanienne. Il a servi de décor à de nombreux films d\'aventures, dont "Indiana Jones et la dernière croisade".', 'http://img.ev.mu/images/attractions/1955/1605x642/2356.jpg', 30.32917, 35.44361),
(3, 'Ville fantôme de Hashima', 'La cité abandonnée dans le film "Skyfall" est en fait la ville fantôme d\'Hashima, une île du Japon située dans la préfecture de Nagasaki.', 'http://img.over-blog-kiwi.com/0/92/98/17/20161010/ob_009c34_4.jpg', 32.627837, 129.73845),
(4, 'Appartement de Rosemary s Baby', 'Ce film d’horreur signé Roman Polanski a été tourné dans un vrai immeuble New-Yorkais. Le Bramford, immeuble où se déroule l’histoire, se nomme en réalité le Dakota Building. Il est situé à l’angle de la 72ème et de Central Park. C’est aussi là que John Lennon a été assassiné.', 'http://www.freshwater-plumbing.com/images/buchanannyc.com/site/assets/files/1320/buchanan-courtyard.jpg', 40.776594, -73.97651),
(5, 'Borough Market', 'Bridget Jones vit dans un appartement situé au-dessus de Borough Market, un marché de Londres très connu qui se trouve près de la station de métro London Bridge.', 'http://www.bloglmn.com/wp-content/uploads/Borough-Market-Credit-Simon-Rawles2.jpg', 51.5029429882, -0.08798631472),
(6, 'Cité médiévale de Carcassonne', 'La Cité de Carcassonne est un ensemble architectural médiéval qui se trouve dans la ville française de Carcassonne dans le département de l\'Aude, région d\'Occitanie.', 'http://www.panoram-art.com/galerie/france/15452-france-Aude-Cite-de-Carcassonne-et-Montagne-Noire-Languedoc-panorama-sentucq.h.jpg', 43.20667, 2.36361),
(7, 'Château de Beynac', 'Le château de Beynac est situé sur la commune de Beynac-et-Cazenac, dans le département de la Dordogne (Périgord noir). Ce château est l\'un des mieux conservés et l\'un des plus réputés de la région. Il a été classé Monument historique le 11 février 1944.', 'http://ancienneauberge.fr/wp-content/uploads/2013/12/Ch%C3%A2teau-de-Beynac.jpg', 44.840278, 1.145278),
(8, 'Maison des McCallister', 'La maison où habite Kevin est bien située Avenue Lincoln (comme dans le film), mais au numéro 671 dans le village de Winnetka, en proche banlieue de Chicago dans l\'Illinois. Elle a été louée pour les besoins du tournage.', 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Home_Alone_House.jpg', 42.106111, -87.737778),
(9, 'Ville fantôme de Hashima', 'L\'evergreen plantation se trouve à Edgard, en Louisiane. Si vous y allez, vous pourrez ainsi marcher sur les pas de Jamie Foxx, qui interprète Django dans le film de Quentin Tarantino. Ce lieu n’est pas un décor de studio mais une vraie plantation, qui fait partie du Sentier de l’héritage afro-américain de la Louisiane.', 'http://img.over-blog-kiwi.com/0/92/98/17/20161010/ob_009c34_4.jpg', 32.627837, 129.73845),
(10, 'Prison Alcatraz', 'La prison d\'Alcatraz est une célèbre prison située sur l&rsquo;île d&rsquo;Alcatraz, dans la baie de San Francisco. Un lieu réel qui a inspiré de nombreux films, dont « Lorsqu\'Évadé drsquo;Alcatraz » avec Clint Eastwood.', 'http://img.ev.mu/images/attractions/7960/1605x642/460728.jpg', 37.826944, -122.423055),
(11, 'Base rebelle de Yavin 4', 'Cette scène a été tournée au Parc national de Tikal au Guatemala, un site protégé par l’UNESCO.', 'http://mc.swu.free.fr/yavin%20panorama.jpg', 17.222094, -89.623614),
(12, 'Maison de Luke Skywalker', 'La maison du petit Luke est en fait l\'hôtel Sidi Driss à Matmata, en Tunisie.', 'http://projects.aljazeera.com/2015/02/star-wars-tunisia/images/pano3.jpg', 33.546698, 9.96854),
(13, 'Wilshire Hotel', 'Dans le film, Edward Lewis (Richard Gere), un millionnaire, emmène Vivian Ward (Julia Robert), une prostituée de Beverly Hills, à l’hôtel Beverly Wilshire (dont on voit la vraie façade dans le film).', 'https://d172vyvma702ee.cloudfront.net/system/uploads/image/asset/1678/Wilshire_Gallery02.jpg?v=1436400910', 34.067691, -118.400706),
(14, 'Musée américain d\'histoire naturelle', 'Le musée se trouve à Manhattan, dans l’Upper West Side, juste en face de Central Park.', 'http://frenchdistrict.com/new-york/files/2014/06/musee-histoires-naturelles-americain-nyc-diapo-586x265.jpg', 40.782364, -73.973859),
(15, 'Fontaine de Trévi', 'Une scène qui a marqué l’histoire du septième art : la sublime actrice Anita Ekberg prenant un bain de minuit en robe de soirée dans la fontaine de Trevi, à Rome.', 'http://www.fond-ecran-hd.net/pc-driver/960.jpg', 41.900875, 12.483167),
(16, 'Bellagio Hotel', 'L\'hôtel se situe à Las Vegas.', 'https://www.thebillionaireshop.com/media/Bellagio-Hotel-favorite-among-millionaires.jpg', 36.113458, -115.17692),
(17, 'Sphinx de Gizeh', 'Le sphinx de Gizeh est la statue thérianthrope qui se dresse devant les grandes piramides du plateau de Gizeh, en amont du delta du Nil. ', 'http://www.sternklar.ch/images/FotosPanoramas/Panorama-Sphinx-Apr-05.jpg', 29.97528, 31.13778),
(18, 'Plage de Gateholm Island', 'La scène finale du film « Blanche Neige et le chasseur » a été tournée sur la sublime plage de Gateholm Island au sud-ouest des côtes du Pays de Galle (le château de la reine maléfique y a été ajouté par ordinateur en post-production).', 'http://www.visitwales.com/~/media/cece11f0b35f4c3c9642b2d9e6934c9b.ashx?as=0&h=645', 51.718056, -5.231389),
(19, 'Café des 2 moulins', 'Le café où travaille Amélie dans le film se situe au croisement de la rue Lepic et de la rue Cauchois dans le 18e à Paris.', 'https://c1.staticflickr.com/1/731/23156266334_8812086ce4_b.jpg', 48.885667, 2.33375),
(20, 'Hobbiton', 'Pour les fans du « Seigneur des Anneaux » et du « Hobbit », sachez qu’il est possible de visiter Hobbiton, le lieu de tournage du village où vit Frodon, à 150km d’Auckland.', 'https://iso.500px.com/wp-content/uploads/2014/05/2048-3.jpg', -37.871414, 175.683061),
(21, 'Salle à manger de Poudlard', 'Le Christ Church College à Oxford a inspiré la fameuse salle à manger gigantesque et féerique de Poudlard.', 'http://www.inseec-travel-tips.com/wp-content/uploads/2014/10/1_christ_church_hall_2012.jpg', 51.751944, -1.257778),
(22, 'Ile de Jurassic Park', 'Elle se trouve à Kauai dans l\'archipel d\'Hawaï. Il existe des Jurassic Tour à faire en hélico.', 'http://jurassic-park.fr/fckeditor_upload/image/dossiers/nublar/nublar%20view.png', 22.083333, -159.5),
(23, 'Librairie de Hugh Grant', 'La librairie est situé au 13-15 Blenheim Crescent.', 'http://cdn3-elle.ladmedia.fr/var/plain_site/storage/images/loisirs/evasion/lieu-de-tournage/la-librairie-situee-au-13-15-blenheim-crescent-a-londres/63442318-1-fre-FR/La-librairie-situee-au-13-15-Blenheim-Crescent-a-Londres.jpg', 51.516629, -0.205555),
(24, 'Devil s Tower', 'La montagne Devils Tower que l’on retrouve dans le film « Rencontres du troisième type » se situe aux États-Unis, dans le Wyoming.', 'http://www.astropics.com/images/products/1443.jpg', 44.590353, -104.714899),
(25, 'Les puces de Saint-Ouen', 'Destination dominicale incontournable du bobo chineur parisien. Premier marché d\'antiquités au monde (mais aussi de brocante) avec 2.500 stands, vous pourrez y trouver comme Gil des vinyles de vieux tubes ou de superbes meubles des années 50, bref, du beau - très beau - vintage. Ou alors écouter du jazz manouche à La Chope !', 'http://residences-decoration.com/wp-content/uploads/2014/02/puces-st-ouen_26-1200x520.jpg', 48.898141, 2.343825899999956),
(26, 'Musée Rodin', 'Entre la solennité d\'un jardin à la française et l\'oeuvre magistrale de Gustave Rodin, sculptures en bronze de taille humaine à la présence presque charnelle, parsemées sur le gravier blanc. Même sans guide - ou alors à la douceur de voix de Carla Bruni - les œuvres de Rodin sauront habiter votre âme... d\'artiste.', 'http://img.over-blog-kiwi.com/1/53/13/23/20161112/ob_b39932_dsc02561.JPG', 48.8553072, 2.315835399999969);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
