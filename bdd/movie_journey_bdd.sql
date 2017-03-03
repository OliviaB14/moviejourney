-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Mars 2017 à 21:31
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
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `backdrop_path` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `movie`
--

INSERT INTO `movie` (`id`, `name`, `backdrop_path`, `description`) VALUES
(1, 'Inception', 'https://image.tmdb.org/t/p/w640/d5AfeWE8Ozk5QSbjB7rF3GN2d76.jpg', 'Dom Cobb est un voleur expérimenté, le meilleur dans l\'art dangereux de l\'extraction, voler les secrets les plus intimes enfouis au plus profond du subconscient durant une phase de rêve, lorsque l\'esprit est le plus vulnérable. Les capacités de Cobb ont fait des envieux dans le monde tourmenté de l\'espionnage industriel alors qu\'il devient fugitif en perdant tout ce qu\'il a un jour aimé. Une chance de se racheter lui est alors offerte. Une ultime mission grâce à laquelle il pourrait retrouver sa vie passée mais uniquement s\'il parvient à accomplir l\'impossible inception.'),
(2, 'Indiana Jones et la dernière croisade', 'https://image.tmdb.org/t/p/w640/ftdvraBCzt0XiAxIyDwbXu8BgVr.jpg', 'Indiana Jones se lance cette fois-ci à la recherche du Saint Graal, accompagné de l\'éminent et très maladroit Dr Henry Jones, son père. Malheureusement, ils ne sont pas les seuls lancés sur la trace du trésor, les nazis le convoitent également.'),
(3, 'Skyfall', 'https://image.tmdb.org/t/p/w640/ciO7oM6wXLEBTU2VavHJQzAsOCb.jpg', 'Lorsque la dernière mission de Bond tourne mal, plusieurs agents infiltrés se retrouvent exposés dans le monde entier. Le MI6 est attaqué, et M est obligée de relocaliser l’Agence. Ces événements ébranlent son autorité, et elle est remise en cause par Mallory, le nouveau président de l’ISC, le comité chargé du renseignement et de la sécurité. Le MI6 est à présent sous le coup d’une double menace, intérieure et extérieure. Il ne reste à M qu’un seul allié de confiance vers qui se tourner : Bond. Plus que jamais, 007 va devoir agir dans l’ombre. Avec l’aide d’Ève, un agent de terrain, il se lance sur la piste du mystérieux Silva, dont il doit identifier coûte que coûte l’objectif secret et mortel.'),
(4, 'Rosemary\'s Baby', 'https://image.tmdb.org/t/p/w640/xbTIMRk36qthU4RDRBYoBVbhQbZ.jpg', 'Malgré les conseils de leur vieil ami Hutch, Guy Woodhouse et sa jeune femme, enceinte, s\'installent dans un immeuble new-yorkais vétuste, considéré par leur ami comme une demeure maléfique. Aussitôt, leurs voisins, Minnie et Roman Castevet, vieux couple d\'Europe centrale, imposent leur amitié et leurs services. Si Guy accepte facilement ce voisinage, Rosemary s\'en inquiète...'),
(5, 'Bridget Jones\'s Baby', 'https://image.tmdb.org/t/p/w640/q8ZYuvRF1fA3TeKlpv2VQMa6vyC.jpg', 'Après avoir rompu avec Mark Darcy, Bridget se retrouve de nouveau célibataire, 40 ans passés, plus concentrée sur sa carrière et ses amis que sur sa vie amoureuse. Pour une fois, tout est sous contrôle ! Jusqu’à ce que Bridget fasse la rencontre de Jack… Puis retrouve Darcy… Puis découvre qu’elle est enceinte… Mais de qui ???'),
(6, 'Les visiteurs 3', 'https://image.tmdb.org/t/p/w640/c74GF2DdV3L2R7z1MmwD0nzRS0E.jpg', 'Bloqués dans les couloirs du temps, Godefroy de Montmirail et son fidèle serviteur Jacquouille sont projetés dans une époque de profonds bouleversements politiques et sociaux : la Révolution Française... Plus précisément, La Terreur, période de grands dangers pendant laquelle les descendants de Jacquouille La Fripouille, révolutionnaires convaincus, confisquent le château et tous les biens des descendants de Godefroy de Montmirail, aristocrates arrogants en fuite dont la vie ne tient qu\'à un fil.\r\n'),
(7, 'Les visiteurs 2 ', 'https://image.tmdb.org/t/p/w640/abhPJOJ6z7T4dkXFA2M573gjsXy.jpg', 'Un coup de théâtre interrompt les préparatifs du mariage de Godefroy de Montmirail et de Frénégonde de Pouille. On vient de dérober au duc, le père de Frénégonde, la dentelette de Sainte-Rolande, relique sacrée qui assure fécondité aux femmes de la famille de Pouille ainsi que tous ses bijoux. Ce sont Jacquouille et Ginette qui ont fait ce larcin et sont partis dans le présent. Il ne reste plus qu\'une solution à Godefroy s\'il veut réaliser son mariage et assurer sa descendance : repartir dans le présent, récupérer les bijoux, la dentelette et Jacquouille la fripouille.\r\n'),
(8, 'Maman j\'ai raté l\'avion', 'https://image.tmdb.org/t/p/w640/rsw3RJBBIPieJpAtZTc0jbcZFo6.jpg', 'La famille McCallister a décidé de passer les fêtes de Noël à Paris. Seulement Kate et Peter McCallister s\'aperçoivent dans l\'avion qu\'il leur manque le plus jeune de leurs enfants, Kevin, âgé de 9 ans. D\'abord désespéré, Kevin reprend vite les choses en main et s\'organise pour vivre le mieux possible. Quand deux cambrioleurs choisissent sa maison pour commettre leurs méfaits.'),
(9, 'Django Unchained', 'https://image.tmdb.org/t/p/w640/iWXGPkf8TwRuXecfDs0j3dDBNLA.jpg', 'Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz promet à Django de lui rendre sa liberté lorsqu’il aura capturé les Brittle – morts ou vifs. Alors que les deux hommes pistent les dangereux criminels, Django n’oublie pas que son seul but est de retrouver Broomhilda, sa femme, dont il fut séparé à cause du commerce des esclaves… Lorsque Django et Schultz arrivent dans l’immense plantation du puissant Calvin Candie, ils éveillent les soupçons de Stephen, un esclave qui sert Candie et a toute sa confiance. Le moindre de leurs mouvements est désormais épié par une dangereuse organisation de plus en plus proche… Si Django et Schultz veulent espérer s’enfuir avec Broomhilda, ils vont devoir choisir entre l’indépendance et la solidarité, entre le sacrifice et la survie…'),
(10, 'L\'Évadé d\'Alcatraz', 'https://image.tmdb.org/t/p/w640/vWK4VG2FlFAJmo2gD1R3f11c7IZ.jpg', 'Frank Lee Morris est devenu un spécialiste des tentatives d\'évasion. Pour le calmer définitivement, on le transfère à la célèbre prison d\'Alcatraz. A peine arrivé sur le rocher, Frank gamberge déjà. Au fil des jours, il organise dans les moindres détails sa future évasion. Il se lie d\'amitié avec plusieurs détenus, dont les frères Anglin, de vieilles connaissances, et un certain Charly Butts. Tous sont marqués par le calme et la lucidité de leur nouveau compagnon. Le jour venu, Frank expose son projet à ses codétenus et les persuade de tenter l\'aventure avec lui. Chacun devra minutieusement accomplir la tâche impartie par Frank. A l\'aide d\'une pince à ongles et d\'une cuillère, Frank commence ses premiers travaux...'),
(11, 'Star Wars IV', 'https://image.tmdb.org/t/p/w640/yVaQ34IvVDAZAWxScNdeIkaepDq.jpg', 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l’Étoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. Accompagné de son fidèle compagnon, le droïde de protocole C-3PO, R2-D2 s\'échoue sur la planète Tatooine et termine sa quête chez le jeune Luke Skywalker. Rêvant de devenir pilote mais confiné aux travaux de la ferme, ce dernier se lance à la recherche de ce mystérieux Obi-Wan Kenobi, devenu ermite au cœur des montagnes désertiques de Tatooine...'),
(12, 'Pretty woman', 'https://image.tmdb.org/t/p/w640/9sSUMrlSQ2rquEfIDHBonxtfRoV.jpg', 'Quand Edward Lewis, businessman de talent, s’offre les services de la belle Vivian, beauté fatale qui arpente chaque nuit les trottoirs d’Hollywood Boulevard, il décide par amusement de l’engager, de lui faire découvrir son style de vie, de la couvrir de cadeaux. Ils vivent ainsi quelque temps, jusqu’au jour où ils découvrent tous deux qu’ils ne peuvent plus se séparer...'),
(13, 'La nuit au musée', 'https://image.tmdb.org/t/p/w640/aQbH459SMQMu62STrRFtcPgPRCq.jpg', 'Le Muséum d\'Histoire Naturelle renferme dans ses murs un secret mystérieux et stupéfiant que Larry, nouveau gardien de sécurité, ne va pas tarder à découvrir avec affolement : la nuit, toutes les expositions prennent vie ! Sous ses yeux, les soldats romains et les cow-boys miniatures se lancent dans une guerre acharnée, Attila et ses Huns commencent à piller les expositions avoisinantes, la momie tente de sortir de son sarcophage, le squelette du redoutable – mais néanmoins attachant – tyrannosaure rôde dans les couloirs... Le chaos est total ! Larry pourra-t-il remettre de l\'ordre dans ses collections et sauver le musée ?'),
(14, 'La Dolce Vita', 'https://image.tmdb.org/t/p/w640/l1QsL7eReqUhwc2iBG8jZ24IcRp.jpg', 'Le chroniqueur Marcello fait le tour des lieux à scandale de Rome pour alimenter les potins d\'un journal à fort tirage. Il rencontre une faune corrompue et dérisoire qui feint de s\'amuser et dissimule mal son ennui.'),
(15, 'Ocean\'s Eleven', 'https://image.tmdb.org/t/p/w640/xATFBKVVRKljvIN9XM1JFMFKCr1.jpg', 'Après deux ans passés dans la prison du New Jersey, Danny Ocean retrouve la liberté et s\'apprête à monter un coup qui semble impossible à réaliser : cambrioler dans le même temps les casinos Bellagio, Mirage et MGM Grand, avec une jolie somme de 150 millions de dollars à la clé. Il souhaite également récupérer Tess, sa bien-aimée que lui a volée Terry Benedict, le propriétaire de ces trois somptueux établissements de jeux de Las Vegas. Pour ce faire, Danny et son ami Rusty Ryan composent une équipe de dix malfrats maîtres dans leur spécialité. Parmi eux figurent Linus Caldwell, le pickpocket le plus agile qui soit ; Roscoe Means, un expert en explosifs ; Ruben Tishkoff, qui connaît les systèmes de sécurité des casinos sur le bout des doigts ; les frères Virgil et Turk Malloy, capables de revêtir plusieurs identités ; ou encore Yen, véritable contorsionniste et acrobate.'),
(16, 'Astérix et Obélix : Mission Cléopâtre', 'https://image.tmdb.org/t/p/w640/HkqnxgSH5yFFgY87nPj6bgKIP8.jpg', 'Cléopâtre, la reine d’Égypte, décide, pour défier l\'Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert. Si elle y parvient, celui-ci devra concéder publiquement que le peuple égyptien est le plus grand de tous les peuples. Pour ce faire, Cléopâtre fait appel à Numérobis, un architecte d\'avant-garde plein d\'énergie. S\'il réussit, elle le couvrira d\'or. S\'il échoue, elle le jettera aux crocodiles. Celui-ci, conscient du défi à relever, cherche de l\'aide auprès de son vieil ami Panoramix. Le druide fait le voyage en Égypte avec Astérix et Obélix. De son côté, Amonbofis, l\'architecte officiel de Cléopâtre, jaloux que la reine ait choisi Numérobis pour construire le palais, va tout mettre en œuvre pour faire échouer son concurrent.'),
(17, 'Blanche-neige et le chasseur', 'https://image.tmdb.org/t/p/w640/4LQ14eMtyRTN6fJK7cEa5pkop9d.jpg', 'Dans une réécriture du conte des frères Grimm, le chasseur supposé tuer Blanche-Neige dans les bois devient son protecteur et son mentor afin de vaincre la Reine maléfique.'),
(18, 'Le fabuleux destin d\'Amélie Poulain', 'https://image.tmdb.org/t/p/w640/8OCSJ1ggbLocG9kxIrQhhb81kOS.jpg', 'Amélie, une jeune serveuse dans un bar de Montmartre, passe son temps à observer les gens et à laisser son imagination divaguer. Elle s\'est fixé un but : faire le bien de ceux qui l\'entourent. Elle invente alors des stratagèmes pour intervenir incognito dans leur existence.Le chemin d\'Amélie est jalonné de rencontres : Georgette, la buraliste hypocondriaque ; Lucien, le commis d\'épicerie ; Madeleine Wallace, la concierge portée sur le porto et les chiens empaillés ; Raymond Dufayel alias "l\'homme de verre", son voisin qui ne vit qu\'à travers une reproduction d\'un tableau de Renoir.Cette quête du bonheur amène Amélie à faire la connaissance de Nino Quincampoix, un étrange "prince charmant". Celui-ci partage son temps entre un train fantôme et un sex-shop, et cherche à identifier un inconnu dont la photo réapparaît sans cesse dans plusieurs cabines de Photomaton.'),
(19, 'Le seigneur des anneaux', 'https://image.tmdb.org/t/p/original//yIQpDcczZJuj5tp60mWZnEGqhyg.jpg', 'Le jeune et timide Hobbit, Frodon Sacquet, hérite d\'un anneau. Bien loin d\'être une simple babiole, il s\'agit de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d\'une Compagnie constituée de Hobbits, d\'Hommes, d\'un Magicien, d\'un Nain, et d\'un Elfe, ne parvienne à emporter l\'Anneau à travers la Terre du Milieu jusqu\'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s\'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d\'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l\'influence corruptrice qu\'exerce l\'Anneau lui-même.'),
(20, 'Harry Potter', 'https://image.tmdb.org/t/p/w640/4bUd3nUGD2XnhLkYNCXHFjPHEH5.jpg', 'Harry Potter, un jeune orphelin, est élevé par son oncle Vernon et sa tante Pétunia qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture. Le jour de son onzième anniversaire, Harry reçoit la visite inattendue d\'un homme gigantesque se nommant Rubeus Hagrid. Celui-ci lui révèle qu\'il est en fait le fils de deux puissants magiciens et qu\'il possède lui aussi d\'extraordinaires pouvoirs. C\'est avec joie que le garçon accepte de suivre des cours à Poudlard, la célèbre école de sorcellerie. Il a enfin la chance de se faire des amis. Blâmé par le professeur Severus Rogue qui lui enseigne les potions et protégé par Albus Dumbledore, le directeur de l\'établissement, Harry va tenter d\'élucider le mystère de la pierre philosophale..'),
(21, 'Jurassik Park', 'https://image.tmdb.org/t/p/w640/dDuKqYOlpXqYEDv9ffCypXfOHCI.jpg', 'Ne pas réveiller le chat qui dort... C\'est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le "clonage" de dinosaures. C\'est à partir d\'une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d\'espèces de dinosaures. Il s\'apprête maintenant avec la complicité du docteur Alan Grant, paléontologue de renom, et de son amie Ellie, à ouvrir le plus grand parc à thème du monde. Mais c\'était sans compter la cupidité et la malveillance de l\'informaticien Dennis Nedry, et éventuellement des dinosaures, seuls maîtres sur l\'île...'),
(22, 'Coup de foudre à Notting Hill', 'https://image.tmdb.org/t/p/w640/zZy1PNidUq5KVEPLoXo5eXDZJud.jpg', 'Quand un matin, Anna Scott, l\'actrice la plus célèbre d\'Hollywood, pousse la porte de la librairie de William Thacket, située dans le charmant quartier de Notting Hill, à l\'ouest de Londres, le libraire ignore que commence une grande aventure. Par une série de hasards comme seul le destin peut en mettre en scène, William et Anna vivent une rencontre étonnante, attachante. Lorsque la star le rappelle quelque temps plus tard, William n\'ose y croire.'),
(23, 'Rencontres du troisième type', 'https://image.tmdb.org/t/p/w1280/7JEJwW3LMaOsmZT2A3DGxQsuP7F.jpg', 'Des faits étranges se produisent un peu partout dans le monde : des avions qui avaient disparu durant la Seconde Guerre mondiale sont retrouvés au Mexique en parfait état de marche, un cargo est découvert échoué au beau milieu du désert de Gobi. Dans l\'Indiana, pendant qu\'une coupure d\'électricité paralyse la banlieue, Roy Neary, un réparateur de câbles, voit une "soucoupe volante" passer au-dessus de sa voiture. D\'autres personnes sont également témoins de ce type de phénomène : Barry Guiler, un petit garçon de quatre ans, est réveillé par le bruit de ses jouets qui se mettent en route. Cherchant à savoir d\'où proviennent ces ovnis, Roy Neary se heurte aux rigoureuses consignes de silence imposées par le gouvernement fédéral. Obsédé par ce qu\'il a vu et hanté par une image de montagne qu\'il essaie désespérément de reconstituer, il est abandonné par sa femme Ronnie et ses enfants. Il n\'y a que Jillian, la mère de Barry, qui le comprenne.'),
(24, 'Midnight in Paris', 'https://image.tmdb.org/t/p/w640/xxSopLYATHXSepXcEaBh9Gazv6p.jpg', 'Scénariste hollywoodien à succès, Gil vit dans la nostalgie du Paris des années 1920 et le souci du grand roman qu\'il ne cesse d\'écrire et de peaufiner. Il séjourne précisément à Paris avec Inez, la belle Américaine qu\'il doit épouser sous la menace permanente de ses beaux-parents, des ultra-conservateurs coincés, et d\'un vieil ami d\'université pédant et hautain. Un soir qu\'il tente d\'échapper à cette pesante atmosphère, sur les douze coups de minuit, une mystérieuse automobile le prend à son bord. Le voici propulsé dans les années 1920, avec Hemingway, le couple Fitzgerald, Picasso et la belle Adriana, la maîtresse du peintre espagnol...');

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
(2, 'Pétra', 'Pétra est un site archéologique somptueux qui se trouve à environ 200 km d\'Amman, la capitale jordanienne. Il a servi de décor à de nombreux films d\'aventures, dont "Indiana Jones et la dernière croisade".', 'http://www.voyage-insolite.com/files/2015/05/Petra.jpg', 30.32917, 35.44361),
(3, 'Ville fantôme d\'Hashima', 'La cité abandonnée dans le film "Skyfall" est en fait la ville fantôme d\'Hashima, une île du Japon située dans la préfecture de Nagasaki.', 'http://img-4.linternaute.com/dpW1nWe6d87nlCUrD-ADk55jYL8=/1240x/smart/image-cms/10088888.jpg', 32.627837, 129.73845),
(4, 'L\'appartement de Rosemary\'s Baby', 'Ce film d’horreur signé Roman Polanski a été tourné dans un vrai immeuble New-Yorkais. Le Bramford, immeuble où se déroule l’histoire, se nomme en réalité le Dakota Building. Il est situé à l’angle de la 72ème et de Central Park. C’est aussi là que John Lennon a été assassiné.', 'https://c1.staticflickr.com/3/2575/4184926789_932d324661_b.jpg', 40.776594, -73.97651),
(5, 'Borough Market', 'Bridget Jones vit dans un appartement situé au-dessus de Borough Market, un marché de Londres très connu qui se trouve près de la station de métro London Bridge.', 'http://www.bloglmn.com/wp-content/uploads/Borough-Market-Credit-Simon-Rawles2.jpg', 51.5029429882, -0.08798631472),
(6, 'La cité médiévale de Carcassonne', 'La Cité de Carcassonne est un ensemble architectural médiéval qui se trouve dans la ville française de Carcassonne dans le département de l\'Aude, région d\'Occitanie.', 'http://www.flowersway.com/var/user/S/f/media_fichier_fr__PCC0052.jpg', 43.20667, 2.36361),
(7, 'Le château de Beynac', 'Le château de Beynac est situé sur la commune de Beynac-et-Cazenac, dans le département de la Dordogne (Périgord noir). Ce château est l\'un des mieux conservés et l\'un des plus réputés de la région. Il a été classé Monument historique le 11 février 1944.', 'http://ancienneauberge.fr/wp-content/uploads/2013/12/Ch%C3%A2teau-de-Beynac.jpg', 44.840278, 1.145278),
(8, 'Maison des McCallister', 'La maison où habite Kevin est bien située Avenue Lincoln (comme dans le film), mais au numéro 671 dans le village de Winnetka, en proche banlieue de Chicago dans l\'Illinois. Elle a été louée pour les besoins du tournage.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQKKksmebvVZJjEUwkhkwojK1MtX3w7IuVwXecxNfkZzEHFKxmd8Q', 42.106111, -87.737778),
(9, 'Ville fantôme d\'Hashima', 'L\'evergreen plantation se trouve à Edgard, en Louisiane. Si vous y allez, vous pourrez ainsi marcher sur les pas de Jamie Foxx, qui interprète Django dans le film de Quentin Tarantino. Ce lieu n’est pas un décor de studio mais une vraie plantation, qui fait partie du Sentier de l’héritage afro-américain de la Louisiane.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR3GjtXwoumKEff4dDxe81Zzea6-ct3q3Oey5ItrGIJgQnFZwAoNQ', 32.627837, 129.73845),
(10, 'La prison d\'Alcatraz', 'La prison d\'Alcatraz est une célèbre prison située sur l&rsquo;île d&rsquo;Alcatraz, dans la baie de San Francisco. Un lieu réel qui a inspiré de nombreux films, dont « Lorsqu\'Évadé drsquo;Alcatraz » avec Clint Eastwood.', 'http://will-on-board.fr/wp-content/uploads/2012/12/DSC00636-1024x768.jpg', 37.826944, -122.423055),
(11, 'La base rebelle de Yavin 4', 'Cette scène a été tournée au Parc national de Tikal au Guatemala, un site protégé par l’UNESCO.', 'http://i.imgur.com/918SjrJ.jpg', 17.222094, -89.623614),
(12, 'La maison de Luke Skywalker', 'La maison du petit Luke est en fait l\'hôtel Sidi Driss à Matmata, en Tunisie.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcThKuTpWsuUJQYSoXSWxsGMqaRJOlASsIwkkFYTnCVdAZd3tRB7', 33.546698, 9.96854),
(13, 'Le Wilshire Hotel', 'Dans le film, Edward Lewis (Richard Gere), un millionnaire, emmène Vivian Ward (Julia Robert), une prostituée de Beverly Hills, à l’hôtel Beverly Wilshire (dont on voit la vraie façade dans le film).', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRnposVbD5x3Jm4gx04Mcs2BiAXLYIMtQToz263N_GO-MGKe4p9', 34.067691, -118.400706),
(14, 'Le musée américan d\'histoire naturelle', 'Le musée se trouve à Manhattan, dans l’Upper West Side, juste en face de Central Park.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRRXPfJFzUmrZSvjTAUcETOP4AIoqcmrU8PoYhrEFDkai0a6T7t', 40.782364, -73.973859),
(15, 'La fontaine de Trévi', 'Une scène qui a marqué l’histoire du septième art : la sublime actrice Anita Ekberg prenant un bain de minuit en robe de soirée dans la fontaine de Trevi, à Rome.', 'http://www.fond-ecran-hd.net/pc-driver/960.jpg', 41.900875, 12.483167),
(16, 'Le bellagio Hotel', 'L\'hôtel se situe à Las Vegas.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRZXC58UtBysQF3a4qXmWMrA1e_-LDIHFU58qUo9lrHEHKenqbHhA', 36.113458, -115.17692),
(17, 'Le sphinx de Gizeh', 'Le sphinx de Gizeh est la statue thérianthrope qui se dresse devant les grandes piramides du plateau de Gizeh, en amont du delta du Nil. ', 'http://img.over-blog-kiwi.com/0/63/13/07/201307/ob_33e3e67f998bbc88ef3ab6d4c35ad55c_sphinx-al-gizeh.jpg', 29.97528, 31.13778),
(18, 'Le plage de Gateholm Island', 'La scène finale du film « Blanche Neige et le chasseur » a été tournée sur la sublime plage de Gateholm Island au sud-ouest des côtes du Pays de Galle (le château de la reine maléfique y a été ajouté par ordinateur en post-production).', 'http://www.secretbeaches.co.uk/uploads/2/3/8/9/2389023/6698137_orig.jpg', 51.718056, -5.231389),
(19, 'Le café des 2 moulins', 'Le café où travaille Amélie dans le film se situe au croisement de la rue Lepic et de la rue Cauchois dans le 18e à Paris.', 'http://www.eatdrinktravel.com/wp-content/uploads/2015/05/Cafe-des-Deux-Moulins-by-Amanda-e1432675591484.jpg', 48.885667, 2.33375),
(20, 'Hobbiton', 'Pour les fans du « Seigneur des Anneaux » et du « Hobbit », sachez qu’il est possible de visiter Hobbiton, le lieu de tournage du village où vit Frodon, à 150km d’Auckland.', 'https://www.google.fr/imgres?imgurl=http%3A%2F%2Fwww.hobbitontours.com%2Fmedia%2F1177%2Fhobbiton-movie-set-4.jpg%3Fcrop%3D0%2C0.066587744517729308%2C0%2C0.09007218930253863%26cropmode%3Dpercentage%26width%3D1272%26height%3D716%26rnd%3D131196316230000000&imgrefurl=http%3A%2F%2Fwww.hobbitontours.com%2F&docid=IqHTQmSc1KZA2M&tbnid=rPWd2SXiRltTlM%3A&vet=1&w=1272&h=716&hl=fr&bih=638&biw=1366&q=hobbiton&ved=0ahUKEwi-0I3p-ILSAhXIWhoKHaRjDoUQMwgaKAAwAA&iact=mrc&uact=8#h=716&imgrc=rPWd2SXiRltTlM:&vet=1&w=1272', -37.871414, 175.683061),
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
