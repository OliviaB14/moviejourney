-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Avril 2017 à 23:44
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `movie_journey_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `backdrop_path` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `movie`
--

INSERT INTO `movie` (`id`, `name`, `backdrop_path`, `description`) VALUES
(1, 'Inception', 'https://image.tmdb.org/t/p/w640/d5AfeWE8Ozk5QSbjB7rF3GN2d76.jpg', 'Dom Cobb est un voleur expérimenté, le meilleur dans l''art dangereux de l''extraction, voler les secrets les plus intimes enfouis au plus profond du subconscient durant une phase de rêve, lorsque l''esprit est le plus vulnérable. Les capacités de Cobb ont fait des envieux dans le monde tourmenté de l''espionnage industriel alors qu''il devient fugitif en perdant tout ce qu''il a un jour aimé. Une chance de se racheter lui est alors offerte. Une ultime mission grâce à laquelle il pourrait retrouver sa vie passée mais uniquement s''il parvient à accomplir l''impossible inception.'),
(2, 'Indiana Jones et la dernière croisade', 'https://image.tmdb.org/t/p/w640/ftdvraBCzt0XiAxIyDwbXu8BgVr.jpg', 'Indiana Jones se lance cette fois-ci à la recherche du Saint Graal, accompagné de l''éminent et très maladroit Dr Henry Jones, son père. Malheureusement, ils ne sont pas les seuls lancés sur la trace du trésor, les nazis le convoitent également.'),
(3, 'Skyfall', 'https://image.tmdb.org/t/p/w640/ciO7oM6wXLEBTU2VavHJQzAsOCb.jpg', 'Lorsque la dernière mission de Bond tourne mal, plusieurs agents infiltrés se retrouvent exposés dans le monde entier. Le MI6 est attaqué, et M est obligée de relocaliser l’Agence. Ces événements ébranlent son autorité, et elle est remise en cause par Mallory, le nouveau président de l’ISC, le comité chargé du renseignement et de la sécurité. Le MI6 est à présent sous le coup d’une double menace, intérieure et extérieure. Il ne reste à M qu’un seul allié de confiance vers qui se tourner : Bond. Plus que jamais, 007 va devoir agir dans l’ombre. Avec l’aide d’Ève, un agent de terrain, il se lance sur la piste du mystérieux Silva, dont il doit identifier coûte que coûte l’objectif secret et mortel.'),
(4, 'Rosemary s Baby', 'https://image.tmdb.org/t/p/w640/xbTIMRk36qthU4RDRBYoBVbhQbZ.jpg', 'Malgré les conseils de leur vieil ami Hutch, Guy Woodhouse et sa jeune femme, enceinte, s''installent dans un immeuble new-yorkais vétuste, considéré par leur ami comme une demeure maléfique. Aussitôt, leurs voisins, Minnie et Roman Castevet, vieux couple d''Europe centrale, imposent leur amitié et leurs services. Si Guy accepte facilement ce voisinage, Rosemary s''en inquiète...'),
(5, 'Bridget Jones s Baby', 'https://image.tmdb.org/t/p/w640/q8ZYuvRF1fA3TeKlpv2VQMa6vyC.jpg', 'Après avoir rompu avec Mark Darcy, Bridget se retrouve de nouveau célibataire, 40 ans passés, plus concentrée sur sa carrière et ses amis que sur sa vie amoureuse. Pour une fois, tout est sous contrôle ! Jusqu’à ce que Bridget fasse la rencontre de Jack… Puis retrouve Darcy… Puis découvre qu’elle est enceinte… Mais de qui ???'),
(6, 'Les visiteurs 3', 'https://image.tmdb.org/t/p/w640/c74GF2DdV3L2R7z1MmwD0nzRS0E.jpg', 'Bloqués dans les couloirs du temps, Godefroy de Montmirail et son fidèle serviteur Jacquouille sont projetés dans une époque de profonds bouleversements politiques et sociaux : la Révolution Française... Plus précisément, La Terreur, période de grands dangers pendant laquelle les descendants de Jacquouille La Fripouille, révolutionnaires convaincus, confisquent le château et tous les biens des descendants de Godefroy de Montmirail, aristocrates arrogants en fuite dont la vie ne tient qu''à un fil.\r\n'),
(7, 'Les visiteurs 2 ', 'https://image.tmdb.org/t/p/w640/abhPJOJ6z7T4dkXFA2M573gjsXy.jpg', 'Un coup de théâtre interrompt les préparatifs du mariage de Godefroy de Montmirail et de Frénégonde de Pouille. On vient de dérober au duc, le père de Frénégonde, la dentelette de Sainte-Rolande, relique sacrée qui assure fécondité aux femmes de la famille de Pouille ainsi que tous ses bijoux. Ce sont Jacquouille et Ginette qui ont fait ce larcin et sont partis dans le présent. Il ne reste plus qu''une solution à Godefroy s''il veut réaliser son mariage et assurer sa descendance : repartir dans le présent, récupérer les bijoux, la dentelette et Jacquouille la fripouille.\r\n'),
(8, 'Maman j ai raté l avion', 'https://image.tmdb.org/t/p/w640/rsw3RJBBIPieJpAtZTc0jbcZFo6.jpg', 'La famille McCallister a décidé de passer les fêtes de Noël à Paris. Seulement Kate et Peter McCallister s''aperçoivent dans l''avion qu''il leur manque le plus jeune de leurs enfants, Kevin, âgé de 9 ans. D''abord désespéré, Kevin reprend vite les choses en main et s''organise pour vivre le mieux possible. Quand deux cambrioleurs choisissent sa maison pour commettre leurs méfaits.'),
(9, 'Django Unchained', 'https://image.tmdb.org/t/p/w640/iWXGPkf8TwRuXecfDs0j3dDBNLA.jpg', 'Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz promet à Django de lui rendre sa liberté lorsqu’il aura capturé les Brittle – morts ou vifs. Alors que les deux hommes pistent les dangereux criminels, Django n’oublie pas que son seul but est de retrouver Broomhilda, sa femme, dont il fut séparé à cause du commerce des esclaves… Lorsque Django et Schultz arrivent dans l’immense plantation du puissant Calvin Candie, ils éveillent les soupçons de Stephen, un esclave qui sert Candie et a toute sa confiance. Le moindre de leurs mouvements est désormais épié par une dangereuse organisation de plus en plus proche… Si Django et Schultz veulent espérer s’enfuir avec Broomhilda, ils vont devoir choisir entre l’indépendance et la solidarité, entre le sacrifice et la survie…'),
(10, 'L Évadé d Alcatraz', 'https://image.tmdb.org/t/p/w640/vWK4VG2FlFAJmo2gD1R3f11c7IZ.jpg', 'Frank Lee Morris est devenu un spécialiste des tentatives d''évasion. Pour le calmer définitivement, on le transfère à la célèbre prison d''Alcatraz. A peine arrivé sur le rocher, Frank gamberge déjà. Au fil des jours, il organise dans les moindres détails sa future évasion. Il se lie d''amitié avec plusieurs détenus, dont les frères Anglin, de vieilles connaissances, et un certain Charly Butts. Tous sont marqués par le calme et la lucidité de leur nouveau compagnon. Le jour venu, Frank expose son projet à ses codétenus et les persuade de tenter l''aventure avec lui. Chacun devra minutieusement accomplir la tâche impartie par Frank. A l''aide d''une pince à ongles et d''une cuillère, Frank commence ses premiers travaux...'),
(11, 'Star Wars IV', 'https://image.tmdb.org/t/p/w640/yVaQ34IvVDAZAWxScNdeIkaepDq.jpg', 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l''Empire galactique et l''Alliance rebelle. Capturée par les troupes de choc de l''Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l’Étoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. Accompagné de son fidèle compagnon, le droïde de protocole C-3PO, R2-D2 s''échoue sur la planète Tatooine et termine sa quête chez le jeune Luke Skywalker. Rêvant de devenir pilote mais confiné aux travaux de la ferme, ce dernier se lance à la recherche de ce mystérieux Obi-Wan Kenobi, devenu ermite au cœur des montagnes désertiques de Tatooine...'),
(12, 'Pretty woman', 'https://image.tmdb.org/t/p/w640/9sSUMrlSQ2rquEfIDHBonxtfRoV.jpg', 'Quand Edward Lewis, businessman de talent, s’offre les services de la belle Vivian, beauté fatale qui arpente chaque nuit les trottoirs d’Hollywood Boulevard, il décide par amusement de l’engager, de lui faire découvrir son style de vie, de la couvrir de cadeaux. Ils vivent ainsi quelque temps, jusqu’au jour où ils découvrent tous deux qu’ils ne peuvent plus se séparer...'),
(13, 'La nuit au musée', 'https://image.tmdb.org/t/p/w640/aQbH459SMQMu62STrRFtcPgPRCq.jpg', 'Le Muséum d''Histoire Naturelle renferme dans ses murs un secret mystérieux et stupéfiant que Larry, nouveau gardien de sécurité, ne va pas tarder à découvrir avec affolement : la nuit, toutes les expositions prennent vie ! Sous ses yeux, les soldats romains et les cow-boys miniatures se lancent dans une guerre acharnée, Attila et ses Huns commencent à piller les expositions avoisinantes, la momie tente de sortir de son sarcophage, le squelette du redoutable – mais néanmoins attachant – tyrannosaure rôde dans les couloirs... Le chaos est total ! Larry pourra-t-il remettre de l''ordre dans ses collections et sauver le musée ?'),
(14, 'La Dolce Vita', 'https://image.tmdb.org/t/p/w640/l1QsL7eReqUhwc2iBG8jZ24IcRp.jpg', 'Le chroniqueur Marcello fait le tour des lieux à scandale de Rome pour alimenter les potins d''un journal à fort tirage. Il rencontre une faune corrompue et dérisoire qui feint de s''amuser et dissimule mal son ennui.'),
(15, 'Ocean s Eleven', 'https://image.tmdb.org/t/p/w640/xATFBKVVRKljvIN9XM1JFMFKCr1.jpg', 'Après deux ans passés dans la prison du New Jersey, Danny Ocean retrouve la liberté et s''apprête à monter un coup qui semble impossible à réaliser : cambrioler dans le même temps les casinos Bellagio, Mirage et MGM Grand, avec une jolie somme de 150 millions de dollars à la clé. Il souhaite également récupérer Tess, sa bien-aimée que lui a volée Terry Benedict, le propriétaire de ces trois somptueux établissements de jeux de Las Vegas. Pour ce faire, Danny et son ami Rusty Ryan composent une équipe de dix malfrats maîtres dans leur spécialité. Parmi eux figurent Linus Caldwell, le pickpocket le plus agile qui soit ; Roscoe Means, un expert en explosifs ; Ruben Tishkoff, qui connaît les systèmes de sécurité des casinos sur le bout des doigts ; les frères Virgil et Turk Malloy, capables de revêtir plusieurs identités ; ou encore Yen, véritable contorsionniste et acrobate.'),
(16, 'Astérix et Obélix : Mission Cléopâtre', 'https://image.tmdb.org/t/p/w640/HkqnxgSH5yFFgY87nPj6bgKIP8.jpg', 'Cléopâtre, la reine d’Égypte, décide, pour défier l''Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert. Si elle y parvient, celui-ci devra concéder publiquement que le peuple égyptien est le plus grand de tous les peuples. Pour ce faire, Cléopâtre fait appel à Numérobis, un architecte d''avant-garde plein d''énergie. S''il réussit, elle le couvrira d''or. S''il échoue, elle le jettera aux crocodiles. Celui-ci, conscient du défi à relever, cherche de l''aide auprès de son vieil ami Panoramix. Le druide fait le voyage en Égypte avec Astérix et Obélix. De son côté, Amonbofis, l''architecte officiel de Cléopâtre, jaloux que la reine ait choisi Numérobis pour construire le palais, va tout mettre en œuvre pour faire échouer son concurrent.'),
(17, 'Blanche-neige et le chasseur', 'https://image.tmdb.org/t/p/w640/4LQ14eMtyRTN6fJK7cEa5pkop9d.jpg', 'Dans une réécriture du conte des frères Grimm, le chasseur supposé tuer Blanche-Neige dans les bois devient son protecteur et son mentor afin de vaincre la Reine maléfique.'),
(18, 'Le fabuleux destin d Amélie Poulain', 'https://image.tmdb.org/t/p/w640/8OCSJ1ggbLocG9kxIrQhhb81kOS.jpg', 'Amélie, une jeune serveuse dans un bar de Montmartre, passe son temps à observer les gens et à laisser son imagination divaguer. Elle s''est fixé un but : faire le bien de ceux qui l''entourent. Elle invente alors des stratagèmes pour intervenir incognito dans leur existence.Le chemin d''Amélie est jalonné de rencontres : Georgette, la buraliste hypocondriaque ; Lucien, le commis d''épicerie ; Madeleine Wallace, la concierge portée sur le porto et les chiens empaillés ; Raymond Dufayel alias "l''homme de verre", son voisin qui ne vit qu''à travers une reproduction d''un tableau de Renoir.Cette quête du bonheur amène Amélie à faire la connaissance de Nino Quincampoix, un étrange "prince charmant". Celui-ci partage son temps entre un train fantôme et un sex-shop, et cherche à identifier un inconnu dont la photo réapparaît sans cesse dans plusieurs cabines de Photomaton.'),
(19, 'Le seigneur des anneaux', 'https://image.tmdb.org/t/p/original//yIQpDcczZJuj5tp60mWZnEGqhyg.jpg', 'Le jeune et timide Hobbit, Frodon Sacquet, hérite d''un anneau. Bien loin d''être une simple babiole, il s''agit de l''Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d''une Compagnie constituée de Hobbits, d''Hommes, d''un Magicien, d''un Nain, et d''un Elfe, ne parvienne à emporter l''Anneau à travers la Terre du Milieu jusqu''à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s''aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d''Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l''influence corruptrice qu''exerce l''Anneau lui-même.'),
(20, 'Harry Potter', 'https://image.tmdb.org/t/p/w640/4bUd3nUGD2XnhLkYNCXHFjPHEH5.jpg', 'Harry Potter, un jeune orphelin, est élevé par son oncle Vernon et sa tante Pétunia qui le détestent. Alors qu''il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture. Le jour de son onzième anniversaire, Harry reçoit la visite inattendue d''un homme gigantesque se nommant Rubeus Hagrid. Celui-ci lui révèle qu''il est en fait le fils de deux puissants magiciens et qu''il possède lui aussi d''extraordinaires pouvoirs. C''est avec joie que le garçon accepte de suivre des cours à Poudlard, la célèbre école de sorcellerie. Il a enfin la chance de se faire des amis. Blâmé par le professeur Severus Rogue qui lui enseigne les potions et protégé par Albus Dumbledore, le directeur de l''établissement, Harry va tenter d''élucider le mystère de la pierre philosophale..'),
(21, 'Jurassic Park', 'https://image.tmdb.org/t/p/w640/dDuKqYOlpXqYEDv9ffCypXfOHCI.jpg', 'Ne pas réveiller le chat qui dort... C''est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le "clonage" de dinosaures. C''est à partir d''une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d''espèces de dinosaures. Il s''apprête maintenant avec la complicité du docteur Alan Grant, paléontologue de renom, et de son amie Ellie, à ouvrir le plus grand parc à thème du monde. Mais c''était sans compter la cupidité et la malveillance de l''informaticien Dennis Nedry, et éventuellement des dinosaures, seuls maîtres sur l''île...'),
(22, 'Coup de foudre à Nothing Hill', 'https://image.tmdb.org/t/p/w640/zZy1PNidUq5KVEPLoXo5eXDZJud.jpg', 'Quand un matin, Anna Scott, l\\''actrice la plus célèbre d''Hollywood, pousse la porte de la librairie de William Thacket, située dans le charmant quartier de Notting Hill, à l''ouest de Londres, le libraire ignore que commence une grande aventure. Par une série de hasards comme seul le destin peut en mettre en scène, William et Anna vivent une rencontre étonnante, attachante. Lorsque la star le rappelle quelque temps plus tard, William n''ose y croire.'),
(23, 'Rencontres du troisième type', 'https://image.tmdb.org/t/p/w1280/7JEJwW3LMaOsmZT2A3DGxQsuP7F.jpg', 'Des faits étranges se produisent un peu partout dans le monde : des avions qui avaient disparu durant la Seconde Guerre mondiale sont retrouvés au Mexique en parfait état de marche, un cargo est découvert échoué au beau milieu du désert de Gobi. Dans l''Indiana, pendant qu''une coupure d''électricité paralyse la banlieue, Roy Neary, un réparateur de câbles, voit une "soucoupe volante" passer au-dessus de sa voiture. D''autres personnes sont également témoins de ce type de phénomène : Barry Guiler, un petit garçon de quatre ans, est réveillé par le bruit de ses jouets qui se mettent en route. Cherchant à savoir d''où proviennent ces ovnis, Roy Neary se heurte aux rigoureuses consignes de silence imposées par le gouvernement fédéral. Obsédé par ce qu''il a vu et hanté par une image de montagne qu''il essaie désespérément de reconstituer, il est abandonné par sa femme Ronnie et ses enfants. Il n''y a que Jillian, la mère de Barry, qui le comprenne.'),
(24, 'Midnight in Paris', 'https://image.tmdb.org/t/p/w640/xxSopLYATHXSepXcEaBh9Gazv6p.jpg', 'Scénariste hollywoodien à succès, Gil vit dans la nostalgie du Paris des années 1920 et le souci du grand roman qu’il ne cesse d''écrire et de peaufiner. Il séjourne précisément à Paris avec Inez, la belle Américaine qu''il doit épouser sous la menace permanente de ses beaux-parents, des ultra-conservateurs coincés, et d''un vieil ami d''université pédant et hautain. Un soir qu''il tente d\\''échapper à cette pesante atmosphère, sur les douze coups de minuit, une mystérieuse automobile le prend à son bord. Le voici propulsé dans les années 1920, avec Hemingway, le couple Fitzgerald, Picasso et la belle Adriana, la maîtresse du peintre espagnol...');

-- --------------------------------------------------------

--
-- Structure de la table `movietype`
--

CREATE TABLE IF NOT EXISTS `movietype` (
  `id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo_path` varchar(550) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_path_two` varchar(500) NOT NULL,
  `photo_path_three` varchar(500) NOT NULL,
  `photo_path_four` varchar(500) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `place`
--

INSERT INTO `place` (`id`, `name`, `description`, `photo_path`, `photo_path_two`, `photo_path_three`, `photo_path_four`, `latitude`, `longitude`) VALUES
(1, 'Pont de Bir Hakeim', 'Le pont de Bir-Hakeim, anciennement viaduc de Passy,  à deux niveaux, d''une longueur  de 247 mètres pour une largueur de 25 m, a été construit entre 1903 et 1905 par l''ingénieur Louis Biette et l''architecte Jean-Camille Formigé. Le niveau inférieur comporte deux voies routières de 6 m de large, séparées par un promenoir de 8,70 m ainsi que deux trottoirs de 2 m de large. Le niveau supérieur est réservé au passage de la ligne de métro n° 6 Nation-Charles-de-Gaulle-Étoile. Le pont traverse l''île aux Cygnes comme le pont de Rouelle et le pont de grenelle. Il est situé en amont du pont Rouelle et en aval du pont d''Iéna. En 1942, les poteaux métalliques supportant le viaduc supérieur du chemin de fer métropolitain ont été modifiés pour soutenir des rames plus lourdes.  En 1949, il est rebaptisé pont de Bir-Hakeim en souvenir d''une victoire Française sur les Allemands, remportée en Libye. ', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/P1080370_Paris_VII-XV-XVI_pont_de_Bir_Hakeim_rwk.JPG/1280px-P1080370_Paris_VII-XV-XVI_pont_de_Bir_Hakeim_rwk.JPG', 'https://cdn.getyourguide.com/niwziy2l9cvz/3UBEtVY6TC2kuMkeUuGws4/3abeb74caf48e23f8da0f9bbb517e701/paris-Pont-de-Bir-Hakeim-1500x850.jpg', 'http://idata.over-blog.com/1/85/57/37/Ile-aux-Cygnes/Photo-3828.jpg', 'http://www.eutouring.com/pont_de_bir-hakeim_m13_DSC09906FP_lrg.JPG', 48.8562697, 2.2871275999999625),
(2, 'Pétra', 'Les gigantesques falaises rouges et les vastes sanctuaires de la cité perdue n''ont rien en commun avec la civilisation moderne telle que nous la connaissons. L''une des plus grandes merveilles jamais érigées par l''Homme et la Nature, Pétra est un véritable joyau qui mérite d''être apprécié à sa juste valeur.', 'http://img.ev.mu/images/attractions/1955/1605x642/2356.jpg', 'https://www.labalaguere.com/sites/default/files/upload_voyages/JO1PETR_1.jpg', 'http://antikforever.com/Syrie-Palestine/nabateens/Images/petra24b.jpg', 'http://www.miroirdecendres.com/architectura/petra/Petra-interieur-mausolee-1.jpg', 30.32917, 35.44361),
(3, 'Ville fantôme de Hashima', 'Sa lugubre silhouette surgit de la mer: Hashima, petite île japonaise abandonnée, fut en 1960 le lieu le plus densément peuplé du monde, une mini-ville habitée de milliers d''hommes, de femmes et d''enfants, toute consacrée à la récolte du charbon sous-marin.', 'http://img.over-blog-kiwi.com/0/92/98/17/20161010/ob_009c34_4.jpg', 'http://www.japansmeijiindustrialrevolution.com/en/site/images/nagasaki/com04/slide02.jpg', 'http://www.voyageurs-du-net.com/wp-content/uploads/2013/12/hashima-gunkanjima-ville-fantome-japon-insolite-00.jpg', 'http://jordymeow.com/wp-content/uploads/2013/06/hashima-blocks-16-to-19.jpg', 32.627837, 129.73845),
(4, 'Appartement de Rosemary s Baby', 'Contrairement à la plupart des immeubles new-yorkais qui s’élancent orgueilleusement vers le ciel, le Dakota building se niche modestement, aujourd’hui, au creux de cette forêt de béton et d’acier et profite de son espace et de sa vue sur la verdure de Central Park.', 'http://www.freshwater-plumbing.com/images/buchanannyc.com/site/assets/files/1320/buchanan-courtyard.jpg', 'https://img3.cityrealty.com/neo/i/p/bvt/701/building_base_image.jpg', 'http://www.freshwater-plumbing.com/images/media-cache-ak0.pinimg.com/736x/cb/f7/11/cbf71161b7f644db77a840031631c6d7.jpg', 'http://ekladata.com/LPy5C4urJ9XFooJG2sDnmRYWxjQ.jpg', 40.776594, -73.97651),
(5, 'Borough Market', 'Situé sur la rive sud de la Tamise, le Borough Market est un incontournable de Londres. On y trouve surtout de quoi manger, c’est l’endroit idéal pour un repas sur le pouce entre quelques visites…', 'http://www.bloglmn.com/wp-content/uploads/Borough-Market-Credit-Simon-Rawles2.jpg', 'https://www.whattocook.com.au/wp-content/uploads/2015/03/Borough-Market-What-To-Cook-Lifestyle-23-1400x683.jpg', 'http://www.lespetitesjoiesdelavielondonienne.com/wp-content/uploads/2016/09/Borough-Market-4-1024x633.jpg', 'http://www.beenthere-donethat.org.uk/images.big/london-southwark085big.jpg', 51.5029429882, -0.08798631472),
(6, 'Cité médiévale de Carcassonne', 'La Cité de Carcassonne occupe un éperon rocheux qui domine le cours du fleuve de l’Aude. Elle est surtout connue comme une ville médiévale fortifiée, mais la présence humaine sur le site remonte au VIème siècle av. J-C. avec l’implantation d’un habitat gaulois puis un centre urbain actif à l’époque romaine.', 'http://www.panoram-art.com/galerie/france/15452-france-Aude-Cite-de-Carcassonne-et-Montagne-Noire-Languedoc-panorama-sentucq.h.jpg', 'http://p8.storage.canalblog.com/88/28/637148/42465417.jpg', 'http://www.evalys-sejours.com/wp-content/uploads/2016/03/carcassonne-cite-medievale.jpg', 'http://www.destinationsuddefrance.com/var/sdfd/storage/images/media/images/carcassonne_34_a-c/4457414-1-fre-FR/Carcassonne_34_A-C_large.jpg', 43.20667, 2.36361),
(7, 'Château de Beynac', 'Le château de Beynac, l''emblématique forteresse médiévale de la Dordogne et la plus authentique de France, est dressé depuis 1115 sur son piton rocheux dominant la Dordogne.', 'http://ancienneauberge.fr/wp-content/uploads/2013/12/Ch%C3%A2teau-de-Beynac.jpg', 'http://3.bp.blogspot.com/-IEUde2xTaCE/UxrqdvK9ScI/AAAAAAAADYg/7ZkQ-KgIvbg/s1600/chateau-de-beynac-04.jpg', 'http://p1.storage.canalblog.com/19/05/283806/72269358.jpg', 'https://cdn.pixabay.com/photo/2015/09/01/21/01/beynac-917614_960_720.jpg', 44.840278, 1.145278),
(8, 'Maison des McCallister', 'La maison où habite Kevin est bien située Avenue Lincoln, mais au numéro 671 dans le village de Winnetka situé dans le comté de Cook en proche banlieue de Chicago dans l''Illinois. En 2011, ses propriétaires actuels mettent la fameuse maison en vente et les agents immobiliers en font la promotion comme étant : « la maison Home Alone. ».', 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Home_Alone_House.jpg', 'https://pbs.twimg.com/media/Cj05NGXXAAQImai.jpg', 'http://i33.tinypic.com/35cnzfr.jpg', 'http://i34.tinypic.com/9jgnpy.jpg', 42.106111, -87.737778),
(10, 'Prison Alcatraz', 'Le cinéma s’est passionné pour cet ancien camp militaire qui n’a été une prison d’État que 30 ans à peine, et qui ne pouvait détenir que 330 prisonniers grand max. Contrairement aux idées reçues, les conditions d’incarcération étaient relativement bonnes, et pas mal de détenus y demandaient leur transfert. Plus que des gros méchants, ce sont les condamnés présentant les plus grands risques d’évasion qu’on plaçait sur l’île.', 'http://img.ev.mu/images/attractions/7960/1605x642/460728.jpg', 'https://i.ytimg.com/vi/spoHbOoRXmY/maxresdefault.jpg', 'http://p2.storage.canalblog.com/23/25/248153/29951808.jpg', 'http://www.theroadtrip.be/wp-content/uploads/2016/09/Alcatraz-San-Francisco-voyage-e%CC%81tats-unis-1920x1277.jpg', 37.826944, -122.423055),
(11, 'Base rebelle de Yavin 4', 'Située dans la Bordure Extérieure, Yavin IV est l''une des trois lunes de la géante Yavin, avec Yavin VIII et Yavin XIII, à posséder les conditions atmosphériques nécessaires à la vie. Des trois lunes, Yavin IV est sans conteste celle qui possède l''histoire la plus riche et la plus mouvementée, et fut le théâtre d''évènements historiques d''importance galactique. ', 'http://mc.swu.free.fr/yavin%20panorama.jpg', 'http://vignette2.wikia.nocookie.net/starwars/images/c/cf/TempleofYavin4-AoRCR.png/revision/latest?cb=20160723033450', 'http://media.moddb.com/images/mods/1/23/22334/yavin.png', 'http://pre01.deviantart.net/a059/th/pre/f/2016/138/3/7/star_wars___star_destroyer_f___attack_on_yavin_4_by_bb22andy-da2xe9w.png', 17.222094, -89.623614),
(12, 'Maison de Luke Skywalker', 'Vous savez maintenant qu’il est possible de visiter lieu du tournage de Star Wars Episode IV (Planète Tatooine), mais sachez que vous pouvez aussi y habiter! En effet, l’hotel Sidi Driss vous permettra de passer une nuit dans la peau de Luke Skywalker. Cet hotel, situé à Matmata en Tunisie, reprend le design de la maison d’enfance de notre Jedi préféré sur la planète Tatooine. C’est assez rustique, mais la nuit ne coûte que $10 et vous avez le petit déjeuner avec.', 'http://projects.aljazeera.com/2015/02/star-wars-tunisia/images/pano3.jpg', 'http://m9.i.pbase.com/o4/93/329493/1/62982759.Geojb1C2.TunisiaMay061651.jpg', 'http://www.destinationdahar.com/wp-content/uploads/2015/04/G211.jpg', 'http://travel.spotcoolstuff.com/wp-content/uploads/2011/02/sidi-driss-skywalker-home.jpg', 33.546698, 9.96854),
(13, 'Wilshire Hotel', 'Le Beverly Wilshire Hotel, aussi appelé le Beverly Wilshire, Beverly Hills, est un hôtel historique de luxe de 70 000 mètres carrés à Beverly Hills, en Californie. Situé à l''intersection du Wilshire Boulevard et de Rodeo Drive, sa construction a été achevée en 1928. Il a été le lieu de tournage de films et de séries télévisées. Les personnes qui y ont séjourné incluent des présidents américains et des célébrités. L''hôtel est situé au 9500 Wilshire Boulevard, sur le côté est de Rodeo Drive sud à Beverly Hills, en Californie.', 'https://d172vyvma702ee.cloudfront.net/system/uploads/image/asset/1678/Wilshire_Gallery02.jpg?v=1436400910', 'http://www.fourseasons.com/content/dam/fourseasons/images/web/BEV/BEV_531_aspect16x9.jpg/jcr:content/renditions/cq5dam.web.637.358.jpeg', 'http://www.seeing-stars.com/Images/Slides/BeverlyWilshireFront.JPG', 'http://www.themilliardaire.com/wp-content/uploads/2014/08/four-seasons-beverly-hills-8.jpg', 34.067691, -118.400706),
(14, 'Musée américain d''histoire naturelle', 'Le Muséum américain d''histoire naturelle est l''un des grands musées de New York. Il est situé sur l’île de Manhattan dans le quartier de l’Upper West Side, au croisement de la 81e rue et Central Park West, face à Central Park.', 'http://frenchdistrict.com/new-york/files/2014/06/musee-histoires-naturelles-americain-nyc-diapo-586x265.jpg', 'http://www.iwishparis.com/wp-content/uploads/2016/04/8_o522i.jpg', 'https://www.miles-around.de/wp-content/uploads/2011/03/2011-03-31-at-20-17-22.jpg', 'http://www.mnhn.fr/sites/mnhn.fr/files/thumbnails/image/galerie-de-pal_secondaire3_1440_850.jpg', 40.782364, -73.973859),
(15, 'Fontaine de Trévi', 'Située en plein cœur de la ville, à proximité du Panthéon et de la place d''Espagne, la fontaine de Trevi est la fontaine la plus connue de Rome et un lieu de passage obligé !', 'http://www.fond-ecran-hd.net/pc-driver/960.jpg', 'https://www.travelercar.com/wp-content/uploads/2016/04/la-fontaine-de-trevi-le-3-novembre-2015-a-rome_5457602.jpg', 'http://monumentsderome.com/content/fontaine-de-trevi.jpg', 'https://www.cathkathcatt.ch/f/wp-content/uploads/sites/3/2016/04/trevi.jpg', 41.900875, 12.483167),
(16, 'Bellagio Hotel', 'Après avoir franchi les fontaines du Bellagio Las Vegas, vous pénétrez dans un univers européen et élégant aux chambres somptueuses, aux restaurants distingués et au spa luxueux, avec ici et là les œuvres d''artistes mondialement reconnus.', 'https://www.thebillionaireshop.com/media/Bellagio-Hotel-favorite-among-millionaires.jpg', 'https://media-cdn.tripadvisor.com/media/photo-s/0a/5d/59/60/bellagio-hero-2016.jpg', 'http://s1.1zoom.me/big3/136/349972-admin.jpg', 'http://www.las-vegas.fr/wp-content/uploads/2012/06/Bellagio-Hotel-Pool-Las-Vegas.jpg', 36.113458, -115.17692),
(17, 'Sphinx de Gizeh', 'Le sphinx de Gizeh est la statue thérianthrope qui se dresse devant les grandes pyramides du plateau de Gizeh, en amont du delta du Nil, dans la Basse-Égypte. Sculpture monumentale monolithique la plus grande du monde (73,5 mètres de long, 14 mètres de large et 20,22 mètres de haut).', 'http://www.sternklar.ch/images/FotosPanoramas/Panorama-Sphinx-Apr-05.jpg', 'http://www.arretetonchar.fr/wp-content/uploads/2014/01/Sphinx-Egypt-Photography-600x330.jpg', 'http://static.ladepeche.fr/content/media/image/zoom/2015/10/28/1900634-sipa-ap21812438-000005.jpg', 'http://www.historymuseum.ca/cmc/exhibitions/civil/egypt/images/arch23b.jpg', 29.97528, 31.13778),
(18, 'Plage de Gateholm Island', 'Gateholm est une petite île de marée au large de la côte sud - ouest de Pembrokeshire dans la partie sud - ouest de Galles, dans l''ouest du Royaume - Uni, et à environ 13 km à l''ouest du port de Milford Haven. Il est connu pour ses restes Romano-britannique.', 'http://www.visitwales.com/~/media/cece11f0b35f4c3c9642b2d9e6934c9b.ashx?as=0&h=645', 'http://amazon.clikpic.com/Jonsfotos/images/Martins_Haven_web.jpg', 'http://amazon.clikpic.com/daevans/images/6MG_9476_gateholm_island_marloes_beach__pembrokeshire_coast.jpg', 'https://www.nationaltrust.org.uk/images/1431736356113-gateholm---sid-howells.jpg', 51.718056, -5.231389),
(19, 'Café des 2 moulins', 'Le café des 2 Moulins est un café-brasserie de Montmartre, à Paris, rendu célèbre en 2001 par le film de Jean-Pierre Jeunet, Le Fabuleux Destin d''Amélie Poulain, auquel il a servi de décor et dans lequel le personnage principal travaille comme serveuse. Son nom fait référence au Moulin-Rouge et à celui de la galette, tous deux proches.', 'https://c1.staticflickr.com/1/731/23156266334_8812086ce4_b.jpg', 'http://www.hotel-relais-montmartre.com/images/actualites/visuel-6.jpg', 'http://www.hotel-relais-montmartre.com/images/actualites/visuel-5.jpg', 'http://www.pariswebtvquartier.fr/images/etablissements/579-2-moulin-les.jpg', 48.885667, 2.33375),
(20, 'Hobbiton', 'C’est en voyageant à travers l’île du Nord que le réalisateur Peter Jackson réalise à quel point les paysages de Nouvelle-Zélande évoquent la « Terre du Milieu » de Tolkien.', 'https://iso.500px.com/wp-content/uploads/2014/05/2048-3.jpg', 'http://www.hobbitontours.com/media/1162/hobbiton-movie-set-18.jpg?center=0.44162436548223349,0.49833333333333335&mode=crop&width=1272&height=716&rnd=131219724030000000', 'http://farm1.nzstatic.com/_proxy/imageproxy_1y/serve/the-hobbiton-lights.jpg?height=406&outputformat=jpg&quality=85&source=2408114&transformationratio=1.3&transformationsystem=autoboxfit&width=720&securitytoken=45F71CEB7DEF5047C16A1B0B15802186', 'http://202.89.49.20/~bushandb/wp-content/uploads/2016/08/Hobbiton-Express-Day-Tour-1.jpg', -37.871414, 175.683061),
(21, 'Salle à manger de Poudlard', 'Au collège de Christ Church ont été tourné de nombreuses scènes de la saga Harry Potter, notamment celles situées à Poudlard.', 'http://www.thecosytraveller.co.uk/wp-content/uploads/2015/08/20150823_082709.jpg', 'http://ouem.co.uk/wp-content/uploads/2015/07/Christ-Church-e1437387110285.jpg', 'https://upload.wikimedia.org/wikipedia/commons/3/33/Oxford_-_Hall_of_Christ_Church.jpg', 'http://www.suitqaisdiaries.com/wp-content/uploads/2014/01/01.HarryPotter-ChristchurchCollege-A3549W-crop-1680x1050.jpg', 51.751944, -1.257778),
(22, 'Ile de Jurassic Park', 'Dans l''imaginaire collectif, forgé par plusieurs millénaires d''histoires et de légendes, les îles peuvent être divisées en deux catégories: le paradis mythique inaccessible, et l''endroit caché, reculé, où se trame quelque chose de mystérieux. Au commencement de la saga Jurassic Park, Isla Nublar est de celles-ci.', 'http://jurassic-park.fr/fckeditor_upload/image/dossiers/nublar/nublar%20view.png', 'http://www.jurassic-park.fr/fckeditor_upload/image/dossiers/nublar/olokele.jpg', 'http://blog.photobox.fr/wp-content/uploads/2014/06/Coco_Island_vue.jpg', 'https://cookiesmumleblog.files.wordpress.com/2013/06/kauai-hawaii.jpg', 22.083333, -159.5),
(24, 'Devils Tower', 'Dans l''angle nord-est sauvage et dépeuplé de l''Etat du Wyoming, au nord de la petite villes de Sundance s''élève l''une des formations rocheuses les plus étonnantes et les plus célèbres des Etats-Unis.', 'http://www.astropics.com/images/products/1443.jpg', 'https://s-media-cache-ak0.pinimg.com/originals/35/c2/bc/35c2bcdcc9006c1ea7489ae1c02f471c.jpg', 'http://www.passionamerique.com/wp-content/uploads/2015/05/devils-tower.jpg', 'http://cdn.triporati.com/dest_overview/devils_tower_national_monument_wy_nature_ss.jpg', 44.590353, -104.714899),
(25, 'Les puces de Saint-Ouen', 'Puces de Saint-Ouen ou Puces de Clignancourt... c''est le même site historique des célèbres puciers, c''est seulement une facilité d''accès. Les Puces sont situées sur la commune de Saint-Ouen mais accessibles par les deux portes via le périphérique ou les transports en commun. Les différents marchés sont ouverts au public le samedi, dimanche de 10h à 17h30 et lundi de 11h à 17h. Les Puces sont fermés le mardi, mercredi et jeudi. Certains marchés et stands ouvrent le vendredi matin pour les visiteurs et le vendredi toute la journée pour les professionnels. Le marché aux Puces est ouvert toute l''année, toutefois durant la première quinzaine d''août l''activité est quelque peu réduite. Il est facile de rester une journée entière à déambuler dans les différents marchés et découvrir ce lieu incroyable qui passe de la fripe au luxe d''une seule ruelle. Une petite faim ? Vous trouverez des restaurants dans les Puces à St-Ouen avec différents univers : branchés, sur le pouce ou ambiances puciers.', 'http://residences-decoration.com/wp-content/uploads/2014/02/puces-st-ouen_26-1200x520.jpg', 'https://www.guideapolis.fr/resources/uploaded/tours/T16351204235407.jpeg', 'https://www.parisianist.com/assets/img/articles/saint_ouen_flea_market/en/saint-ouen-flea-market-13.jpg', 'http://jeannineaparis.com/wp-content/uploads/2014/02/photo-11.jpg', 48.898141, 2.343825899999956),
(26, 'Musée Rodin', 'Haut lieu patrimonial, vestige de l’Ancien Régime mais dont le bâtiment, les annexes et les jardins ont suivi, en fonction de leurs affectations successives, une évolution et des transformations qui épousent étroitement le cours de l’histoire politique, sociale et culturelle, le musée s’est toujours montré ouvert à la création de son temps.', 'http://img.over-blog-kiwi.com/1/53/13/23/20161112/ob_b39932_dsc02561.JPG', 'http://www.exponaute.com/exponaute_assets/uploads/lieux_photos/1117/3825_77793dfb0770c7a.jpeg', 'http://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/mus%C3%A9e-rodin-le-penseur-vu-de-profil-dans-le-jardin-%7C-630x405-%7C-%C2%A9-alexis-berg/13154636-1-fre-FR/Mus%C3%A9e-Rodin-Le-Penseur-vu-de-profil-dans-le-jardin-%7C-630x405-%7C-%C2%A9-Alexis-Berg.jpg', 'http://www.parisinfo.com/var/otcp/sites/images/media/1.-photos/02.-sites-culturels-630-x-405/musee-rodin-jardin-630x405-c-thinkstock/37599-1-fre-FR/Musee-Rodin-jardin-630x405-C-Thinkstock.jpg', 48.8553072, 2.315835399999969);

-- --------------------------------------------------------

--
-- Structure de la table `placemovie`
--

CREATE TABLE IF NOT EXISTS `placemovie` (
  `id` int(10) NOT NULL,
  `place_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
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
(9, 3, 9),
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
(24, 24, 23),
(25, 25, 24),
(0, 26, 24);

-- --------------------------------------------------------

--
-- Structure de la table `placetown`
--

CREATE TABLE IF NOT EXISTS `placetown` (
  `id` int(10) NOT NULL,
  `place_id` int(10) NOT NULL,
  `town_id` int(10) NOT NULL,
  PRIMARY KEY (`place_id`)
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
-- Structure de la table `place_added`
--

CREATE TABLE IF NOT EXISTS `place_added` (
  `name_place` varchar(500) NOT NULL,
  `name_movie` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `town`
--

CREATE TABLE IF NOT EXISTS `town` (
  `id` int(10) NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `town`
--

INSERT INTO `town` (`id`, `country`, `name`, `latitude`, `longitude`) VALUES
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

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
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

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `gets_email` tinyint(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `birthdate`, `email`, `gets_email`, `password`, `salt`) VALUES
(8, 'b', 'Oli', '1995-12-19', 'oli@yahoo.fr', 1, 'e2a954c2d698e67b0137155d2a1776119fa35b84', 'X0w2lw6Ff2'),
(7, 'BOUMOKONIA', 'OLIVIA', '1995-12-19', 'ca_541@yahoo.fr', 1, '1e5fc76ac7224adf9e8e4efdc8d18fc28000a79d', 'ekZr7VFSsH'),
(9, 'Test', 'Olivia', '1995-12-19', 'test@yahoo.fr', 1, '2b3a790d97e88049cdf34436136f393d3c0412de', 'Stv0kfzBMX'),
(10, 'Test2', 'Olivia ', '1995-12-19', 'test2@yahoo.fr', 1, '5fd4ca86d300ca65bbca9f666b7890d93a23d90d', '98fvzpZNZk'),
(11, 'test', 'test', '1995-12-19', 'test@test.fr', 1, 'f2fc4ab1c0ce789c7ae9abdc44833436e9e95c6a', 'm80AG0IrNn'),
(12, 'test', 'testgenres', '1994-12-19', 'testgenres@test.fr', 0, '1fc0410f19846e279e04fe93c47e839814a88863', 'vR4vua1n9v'),
(13, 'Journey', 'Movie', '2017-01-31', 'contact.moviejourney@gmail.com', 0, 'be1b3f0fb7c63439356617955cdec64513bfda03', 'nSyWYURhIr');

-- --------------------------------------------------------

--
-- Structure de la table `usersfavorite_movies`
--

CREATE TABLE IF NOT EXISTS `usersfavorite_movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `usersfavorite_movies`
--

INSERT INTO `usersfavorite_movies` (`id`, `user_id`, `movie_id`) VALUES
(11, 7, 21),
(10, 7, 12),
(9, 7, 19),
(12, 8, 20),
(13, 13, 12);

-- --------------------------------------------------------

--
-- Structure de la table `usersfavorite_places`
--

CREATE TABLE IF NOT EXISTS `usersfavorite_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `usersfavorite_places`
--

INSERT INTO `usersfavorite_places` (`id`, `user_id`, `place_id`) VALUES
(6, 7, 22),
(5, 7, 13),
(7, 8, 12),
(8, 8, 21),
(9, 13, 19),
(10, 13, 25);

-- --------------------------------------------------------

--
-- Structure de la table `userstypes`
--

CREATE TABLE IF NOT EXISTS `userstypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `userstypes`
--

INSERT INTO `userstypes` (`id`, `user_id`, `type_id`) VALUES
(1, 8, 3),
(2, 12, 2),
(3, 12, 6),
(4, 12, 12),
(5, 13, 7),
(6, 13, 11),
(7, 13, 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
