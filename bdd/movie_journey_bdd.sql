-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Février 2017 à 14:49
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

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
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `backdrop_path` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `movie`
--

INSERT INTO `movie` (`id`, `name`, `backdrop_path`) VALUES
(1, 'Inception', 'http://www.filmofilia.com/wp-content/uploads/2010/05/inception_poster.jpg'),
(2, 'Indiana Jones et la dernière croisade', 'https://media.senscritique.com/media/000009674397/source_big/Indiana_Jones_et_la_Derniere_Croisade.jpg'),
(3, 'Skyfall', 'http://fr.web.img3.acsta.net/medias/nmedia/18/88/95/51/20114257.jpg'),
(4, 'Rosemary\'s Baby', 'http://fr.web.img2.acsta.net/pictures/14/09/09/10/21/189739.jpg'),
(5, 'Bridget Jones', 'https://media.senscritique.com/media/000016367051/source_big/Bridget_Jones_Baby.jpg'),
(6, 'Les visiteurs 3', 'http://static1.purepeople.com/articles/7/17/23/47/@/2070859-affiche-officielle-de-les-visiteurs-3-950x0-3.jpg'),
(7, 'Les visiteurs 2 ', 'https://media.senscritique.com/media/000008232685/source_big/Les_Visiteurs_2_Les_Couloirs_du_temps.jpg'),
(8, 'Maman j\'ai raté l\'avion', 'http://images.fan-de-cinema.com/affiches/large/e9/51852.jpg'),
(9, 'Django Unchained', 'http://www.filmosphere.com/wp-content/uploads/2012/12/Django-Unchained-affiche.jpg'),
(10, 'L\'Évadé d\'Alcatraz', 'https://media.senscritique.com/media/000012241078/source_big/L_Evade_d_Alcatraz.jpg'),
(11, 'Star Wars IV', 'https://www.labande-annonce.fr/wp-content/uploads/la-guerre-des-etoiles-un-nouvel-espoire-affiche.jpg'),
(12, 'Pretty woman', 'http://imworld.aufeminin.com/story/20140828/julia-roberts-et-richard-gere-dans-pretty-woman-480381_w1020h450c1cx295cy113.jpg'),
(13, 'La nuit au musée', 'https://media.senscritique.com/media/000006645704/source_big/La_Nuit_au_musee.jpg'),
(14, 'La Dolce Vita', 'http://fr.web.img2.acsta.net/pictures/14/05/16/13/01/036315.jpg'),
(15, 'Ocean\'s Eleven', 'https://s-media-cache-ak0.pinimg.com/originals/7e/c3/87/7ec38765d8dbf05776878549ece6c585.jpg'),
(16, 'Astérix et Obélix : Mission Cléopâtre', 'https://media.senscritique.com/media/000006204256/source_big/Asterix_et_Obelix_Mission_Cleopatre.jpg'),
(17, 'Blanche-neige et le chasseur', 'https://media.senscritique.com/media/000006204256/source_big/Asterix_et_Obelix_Mission_Cleopatre.jpg'),
(18, 'Le fabuleux destin d\'Amélie Poulain', 'http://imworld.aufeminin.com/story/20130824/amelie-poulain-debarque-a-broadway-63240_w1000.jpg'),
(19, 'Le seigneur des anneaux', 'https://image.tmdb.org/t/p/original//yIQpDcczZJuj5tp60mWZnEGqhyg.jpg'),
(20, 'Harry Potter', 'http://img.filmsactu.net/datas/films/h/a/harry-potter-et-les-reliques-de-la-mort-partie-1/xl/4ce145bfd4619.jpg'),
(21, 'Jurassik Park', 'http://fr.web.img4.acsta.net/medias/nmedia/18/66/20/27/20529453.jpg'),
(22, 'Coup de foudre à Notting Hill', 'https://media.senscritique.com/media/000007096185/source_big/Coup_de_foudre_a_Notting_Hill.jpg'),
(23, 'Rencontres du troisième type', 'https://image.tmdb.org/t/p/w1280/7JEJwW3LMaOsmZT2A3DGxQsuP7F.jpg'),
(24, 'Midnight in Paris', 'https://keithandthemovies.files.wordpress.com/2012/08/midnight_paris_banner.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `movietype`
--

CREATE TABLE `movietype` (
  `id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `movietype`
--

INSERT INTO `movietype` (`id`, `movie_id`, `type_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 13),
(4, 2, 2),
(5, 2, 1),
(6, 3, 1),
(7, 3, 7),
(8, 3, 13),
(9, 4, 6),
(10, 4, 5),
(11, 4, 13),
(12, 5, 11),
(13, 11, 3),
(14, 6, 3),
(15, 7, 3),
(16, 7, 12),
(17, 8, 3),
(18, 8, 2),
(19, 9, 14),
(20, 10, 1),
(21, 10, 10),
(22, 10, 5),
(23, 11, 12),
(24, 11, 2),
(25, 11, 8),
(26, 12, 2),
(27, 12, 11),
(28, 13, 8),
(29, 13, 3),
(30, 14, 4),
(31, 15, 9),
(32, 15, 13),
(33, 15, 3),
(34, 16, 3),
(35, 17, 8),
(36, 17, 1),
(37, 17, 2),
(38, 18, 3),
(39, 19, 8),
(40, 19, 2),
(41, 19, 1),
(42, 20, 8),
(43, 20, 2),
(44, 21, 2),
(45, 21, 12),
(46, 22, 3),
(47, 22, 11),
(48, 23, 12),
(49, 23, 2),
(50, 23, 5),
(51, 24, 8),
(52, 24, 3),
(53, 24, 11);

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
(1, 'Le pont de Bir Hakeim', 'Le pont de Bir-Hakeim relie l\'avenue du Président-Kennedy sur la rive droite de la Seine, dans le quartier de la Muette, aux quais Branly et de Grenelle sur la rive gauche, dans le quartier de Grenelle.', 'https://upload.wikimedia.org/wikipedia/commons/3/38/P1080369_Paris_VII-XV-XVI_pont_de_Bir_Hakeim_rwk.JPG', 48.8562697, 2.2871275999999625),
(2, 'Pétra', 'Pétra est un site archéologique somptueux qui se trouve à environ 200 km d\'Amman, la capitale jordanienne. Il a servi de décor à de nombreux films d\'aventures, dont « Indiana Jones et la dernière croisade ».', 'http://www.voyage-insolite.com/files/2015/05/Petra.jpg', 30.32917, 35.44361),
(3, 'Ville fantôme d\'Hashima', 'La cité abandonnée dans le film « Skyfall » est en fait la ville fantôme d\'Hashima, une île du Japon située dans la préfecture de Nagasaki.', 'http://img-4.linternaute.com/dpW1nWe6d87nlCUrD-ADk55jYL8=/1240x/smart/image-cms/10088888.jpg', 32.627837, 129.73845),
(4, 'L\'appartement de Rosemary\'s Baby', 'Ce film d’horreur signé Roman Polanski a été tourné dans un vrai immeuble New-Yorkais. Le Bramford, immeuble où se déroule l’histoire, se nomme en réalité le Dakota Building. Il est situé à l’angle de la 72ème et de Central Park. C’est aussi là que John Lennon a été assassiné.', 'https://c1.staticflickr.com/3/2575/4184926789_932d324661_b.jpg', 40.776594, -73.97651),
(5, 'Borough Market', 'Bridget Jones vit dans un appartement situé au-dessus de Borough Market, un marché de Londres très connu qui se trouve près de la station de métro London Bridge.', 'http://www.bloglmn.com/wp-content/uploads/Borough-Market-Credit-Simon-Rawles2.jpg', 51.5029429882, -0.08798631472),
(6, 'La cité médiévale de Carcassonne', 'La Cité de Carcassonne est un ensemble architectural médiéval qui se trouve dans la ville française de Carcassonne dans le département de l\'Aude, région d\'Occitanie.', 'http://www.flowersway.com/var/user/S/f/media_fichier_fr__PCC0052.jpg', 43.20667, 2.36361),
(7, 'Le château de Beynac', 'Le château de Beynac est situé sur la commune de Beynac-et-Cazenac, dans le département de la Dordogne (Périgord noir). Ce château est l\'un des mieux conservés et l\'un des plus réputés de la région. Il a été classé Monument historique le 11 février 1944.', 'http://ancienneauberge.fr/wp-content/uploads/2013/12/Ch%C3%A2teau-de-Beynac.jpg', 44.840278, 1.145278),
(8, 'Maison des McCallister', 'La maison où habite Kevin est bien située Avenue Lincoln (comme dans le film), mais au numéro 671 dans le village de Winnetka, en proche banlieue de Chicago dans l\'Illinois. Elle a été louée pour les besoins du tournage.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQKKksmebvVZJjEUwkhkwojK1MtX3w7IuVwXecxNfkZzEHFKxmd8Q', 42.106111, -87.737778),
(9, 'Ville fantôme d\'Hashima', 'L\'evergreen plantation se trouve à Edgard, en Louisiane. Si vous y allez, vous pourrez ainsi marcher sur les pas de Jamie Foxx, qui interprète Django dans le film de Quentin Tarantino. Ce lieu n’est pas un décor de studio mais une vraie plantation, qui fait partie du Sentier de l’héritage afro-américain de la Louisiane.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR3GjtXwoumKEff4dDxe81Zzea6-ct3q3Oey5ItrGIJgQnFZwAoNQ', 32.627837, 129.73845),
(10, 'La prison d\'Alcatraz', 'La prison d\'Alcatraz est une célèbre prison située sur l\'île d\'Alcatraz, dans la baie de San Francisco. Un lieu réel qui a inspiré de nombreux films, dont « L\'Évadé d\'Alcatraz » avec Clint Eastwood.', 'http://will-on-board.fr/wp-content/uploads/2012/12/DSC00636-1024x768.jpg', 37.826944, -122.423055),
(11, 'La base rebelle de Yavin 4', 'Cette scène a été tournée au Parc national de Tikal au Guatemala, un site protégé par l’UNESCO.', 'http://i.imgur.com/918SjrJ.jpg', 17.222094, -89.623614),
(12, 'La maison de Luke Skywalker', 'La maison du petit Luke est en fait l\'hôtel Sidi Driss à Matmata, en Tunisie.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcThKuTpWsuUJQYSoXSWxsGMqaRJOlASsIwkkFYTnCVdAZd3tRB7', 33.546698, 9.96854),
(13, 'Le Wilshire Hotel', 'Dans le film, Edward Lewis (Richard Gere), un millionnaire, emmène Vivian Ward (Julia Robert), une prostituée de Beverly Hills, à l’hôtel Beverly Wilshire (dont on voit la vraie façade dans le film).', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRnposVbD5x3Jm4gx04Mcs2BiAXLYIMtQToz263N_GO-MGKe4p9', 34.067691, -118.400706),
(14, 'Le musée américan d\'histoire naturelle', 'Le musée se trouve à Manhattan, dans l’Upper West Side, juste en face de Central Park.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRRXPfJFzUmrZSvjTAUcETOP4AIoqcmrU8PoYhrEFDkai0a6T7t', 40.782364, -73.973859),
(15, 'La fontaine de Trévi', 'Une scène qui a marqué l’histoire du septième art : la sublime actrice Anita Ekberg prenant un bain de minuit en robe de soirée dans la fontaine de Trevi, à Rome.', 'http://www.fond-ecran-hd.net/pc-driver/960.jpg', 41.900875, 12.483167),
(16, 'Le bellagio Hotel', 'L\'hôtel se situe à Las Vegas.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRZXC58UtBysQF3a4qXmWMrA1e_-LDIHFU58qUo9lrHEHKenqbHhA', 36.113458, -115.17692),
(17, 'Le sphinx de Gizeh', 'Le sphinx de Gizeh est la statue thérianthrope qui se dresse devant les grandes piramides du plateau de Gizeh, en amont du delta du Nil. ', 'http://img.over-blog-kiwi.com/0/63/13/07/201307/ob_33e3e67f998bbc88ef3ab6d4c35ad55c_sphinx-al-gizeh.jpg', 29.97528, 31.13778),
(18, 'Le plage de Gateholm Island', 'La scène finale du film « Blanche Neige et le chasseur » a été tournée sur la sublime plage de Gateholm Island au sud-ouest des côtes du Pays de Galle (le château de la reine maléfique y a été ajouté par ordinateur en post-production).', 'http://www.secretbeaches.co.uk/uploads/2/3/8/9/2389023/6698137_orig.jpg', 51.718056, -5.231389),
(19, 'Le café des 2 moulins', 'Le café où travaille Amélie dans le film se situe au croisement de la rue Lepic et de la rue Cauchois dans le 18e à Paris.', 'http://www.eatdrinktravel.com/wp-content/uploads/2015/05/Cafe-des-Deux-Moulins-by-Amanda-e1432675591484.jpg', 48.885667, 2.33375),
(20, 'Hobbiton', 'Pour les fans du « Seigneur des Anneaux » et du « Hobbit », sachez qu’il est possible de visiter Hobbiton, le lieu de tournage du village où vit Frodon, à 150km d’Auckland.', 'http://farm1.nzstatic.com/_proxy/imageproxy_1y/serve/hobbiton-movie-set.jpg', -37.871414, 175.683061),
(21, 'La salle à manger de Poudlard', 'Le Christ Church College à Oxford a inspiré la fameuse salle à manger gigantesque et féerique de Poudlard.', 'http://www.inseec-travel-tips.com/wp-content/uploads/2014/10/1_christ_church_hall_2012.jpg', 51.751944, -1.257778),
(22, 'L\'île de Jurassic Park', 'Elle se trouve à Kauai dans l\'archipel d\'Hawaï. Il existe des Jurassic Tour à faire en hélico.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQl2PULGx6CbwRYb-BdxneFWpOactfzuN-2mxzCoE47atUt4_RhIQ', 22.083333, -159.5),
(23, 'La librairie de Hugh Grant', 'La librairie est situé au 13-15 Blenheim Crescent.', 'http://cdn3-elle.ladmedia.fr/var/plain_site/storage/images/loisirs/evasion/lieu-de-tournage/la-librairie-situee-au-13-15-blenheim-crescent-a-londres/63442318-1-fre-FR/La-librairie-situee-au-13-15-Blenheim-Crescent-a-Londres.jpg', 51.516629, -0.205555),
(24, 'La Devil\'s Tower', 'La montagne Devils Tower que l’on retrouve dans le film « Rencontres du troisième type » se situe aux États-Unis, dans le Wyoming.', 'http://blackhillstravelblog.com/wp-content/uploads/2015/03/Devils-Tower-National-Monument-1200x780.jpg', 44.590353, -104.714899),
(25, 'Les puces de Saint-Ouen', 'Destination dominicale incontournable du bobo chineur parisien. Premier marché d\'antiquités au monde (mais aussi de brocante) avec 2.500 stands, vous pourrez y trouver comme Gil des vinyles de vieux tubes ou de superbes meubles des années 50, bref, du beau - très beau - vintage. Ou alors écouter du jazz manouche à La Chope !', 'http://2.bp.blogspot.com/-Ax78AdzkLMA/UcGT2W70B3I/AAAAAAAAAO4/XLTpugtFNlQ/s1600/shot_1369555512424.jpg', 48.898141, 2.343825899999956),
(26, 'Le musée Rodin', 'Entre la solennité d\'un jardin à la française et l\'oeuvre magistrale de Gustave Rodin, sculptures en bronze de taille humaine à la présence presque charnelle, parsemées sur le gravier blanc. Même sans guide - ou alors à la douceur de voix de Carla Bruni - les œuvres de Rodin sauront habiter votre âme... d\'artiste.', 'https://upload.wikimedia.org/wikipedia/commons/8/85/Jardin_du_Mus%C3%A9e_Rodin.jpg', 48.8553072, 2.315835399999969);

-- --------------------------------------------------------

--
-- Structure de la table `placemovie`
--

CREATE TABLE `placemovie` (
  `id` int(10) NOT NULL,
  `place_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `placemovie`
--

INSERT INTO `placemovie` (`id`, `place_id`, `movie_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 11),
(13, 13, 12),
(14, 14, 13),
(15, 15, 14),
(16, 16, 15),
(17, 17, 16),
(18, 18, 17),
(19, 19, 18),
(20, 20, 19),
(21, 21, 20),
(22, 22, 21),
(23, 23, 22),
(24, 24, 23),
(25, 25, 24),
(0, 26, 24);

-- --------------------------------------------------------

--
-- Structure de la table `placetown`
--

CREATE TABLE `placetown` (
  `id` int(10) NOT NULL,
  `place_id` int(10) NOT NULL,
  `town_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `placetown`
--

INSERT INTO `placetown` (`id`, `place_id`, `town_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 3),
(10, 10, 9),
(11, 11, 10),
(12, 12, 11),
(13, 13, 12),
(14, 14, 4),
(15, 15, 13),
(16, 16, 14),
(17, 17, 15),
(18, 18, 16),
(19, 19, 1),
(20, 20, 17),
(21, 21, 18),
(22, 22, 19),
(23, 23, 5),
(24, 24, 20),
(25, 25, 1),
(26, 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `town`
--

CREATE TABLE `town` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `town`
--

INSERT INTO `town` (`id`, `name`, `country`, `latitude`, `longitude`) VALUES
(20, 'Etats-Unis', 'Hulett', 44.6831, -104.6),
(1, 'France', 'Paris', 48.8566, 2.35222),
(2, 'Jordanie', 'Pétra', 30.3292, 35.4436),
(3, 'Japon', 'Hashima', 32.6278, 129.738),
(4, 'Etats-Unis', 'New-York', 40.7144, -74.006),
(5, 'Angleterre', 'Londres', 51.5072, -0.1275),
(6, 'France', 'Carcassonne', 43.2131, 2.35203),
(7, 'France', 'Beynac-et-Cazenac', 44.8411, 1.14472),
(8, 'Etats-Unis', 'Winnetka', 42.1061, -87.7378),
(9, 'Etats-Unis', 'San Francisco', 37.8269, -122.423),
(10, 'Guatemala', 'Tikal', 17.2221, -89.6236),
(11, 'Tunisie', 'Matmata', 33.5457, 9.96707),
(12, 'Etats-Unis', 'Beverly Hills', 34.0731, -118.399),
(13, 'Italie', 'Rome', 41.8887, 12.4866),
(14, 'Etats-Unis', 'Las Vegas', 36.175, -115.136),
(15, 'Egypte', 'Gizeh', 29.9794, 31.1344),
(16, 'Pays de Galles', 'Gateholm', 51.7181, -5.23139),
(17, 'Nouvelle Zélande', 'Matamata', -37.8085, 175.771),
(18, 'Angleterre', 'Oxford', 51.7519, -1.25778),
(19, 'Etats-Unis', 'Kauai', 22.0833, -159.5);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(100) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Comédie'),
(4, 'Comédie dramatique'),
(5, 'Drame'),
(6, 'Epouvante-Horreur'),
(7, 'Espionnage'),
(8, 'Fantastique'),
(9, 'Judiciaire'),
(10, 'Policier'),
(11, 'Romantique'),
(12, 'Science Fiction'),
(13, 'Thriller'),
(14, 'Western');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movietype`
--
ALTER TABLE `movietype`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `placemovie`
--
ALTER TABLE `placemovie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `placetown`
--
ALTER TABLE `placetown`
  ADD PRIMARY KEY (`place_id`);

--
-- Index pour la table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
