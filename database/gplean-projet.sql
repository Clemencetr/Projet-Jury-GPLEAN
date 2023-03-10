
-- -----------------------------------------------------
-- Table `thumbnails`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `thumbnails` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du projet',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de l\'image du projet',
  `lien` VARCHAR(128) NULL COMMENT 'Lien du projet',
  `text_alt` VARCHAR(128) NULL COMMENT 'Texte altenatif de l\'image',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `projects`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `projects` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL COMMENT 'Titre du projet',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de la photo du projet',
  `lien` VARCHAR(128) NULL COMMENT 'Lien web du projet',
  `text_alt` VARCHAR(128) NULL COMMENT 'Texte altenatif de l\'image',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `clients`
-- -----------------------------------------------------



CREATE TABLE IF NOT EXISTS `clients` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `organization` VARCHAR(45) NOT NULL COMMENT 'Le nom de l\'entreprise',
  `comments` TEXT NULL COMMENT 'Commentaire de l\'entreprise',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `partners`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `partners` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du partenaire',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de le logo du partenaire',
  `text_alt` VARCHAR(128) NULL COMMENT 'Texte altenatif de l\'image',
   PRIMARY KEY (`id`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `users_mails`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `users_mails` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom de l\'utilsateur',
  `email` VARCHAR(128) NULL COMMENT 'L\'email de l\'utilisateur',
  `enterprise` VARCHAR(45) NULL COMMENT 'L\'entreprise de l\'utilisateur',
  `phone` INT NULL COMMENT 'le t??lephone de l\'utilisateur',
  `subject` VARCHAR(128) NULL COMMENT 'Le sujet du message',
  `message` TEXT NULL COMMENT 'Le message associ??',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pages`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `pages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL COMMENT 'Titre de la page',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de la photo du header',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;



INSERT INTO `thumbnails` VALUES (1, 'H??micycle Simone Veil', 'assets/img/thumbnails/HEMICYCLE-REGION-ILE-DE-FRANCE_thumbail.jpg', 'hemicycleSV.php', 'Projet Lean construction H??micycle Simone Veil');
INSERT INTO `thumbnails` VALUES (2, 'R??sidence ??tudiante Grand Morillon', 'assets/img/thumbnails/GRAND-MORILLON_thumbail.jpg', 'grand-morillon.php', 'Projet Lean construction R??sidence ??tudiante Grand Morillon');
INSERT INTO `thumbnails` VALUES (3, 'Lyc??e Pierre de Coubertin', 'assets/img/thumbnails/plan-lycee-e1600696303944_thumbail.jpg', 'lycee_coubertin.php', 'Projet Lean construction Lyc??e Pierre de Coubertin');
INSERT INTO `thumbnails` VALUES (4, 'La Caserne Chanzy', 'assets/img/thumbnails/Caserne-chanzy_thumbail.jpg', 'caserne-chanzy.php', 'Projet Lean construction La Caserne Chanzy');
INSERT INTO `thumbnails` VALUES (5, 'Restaurant Drouant', 'assets/img/thumbnails/RESTAURANT-DROUANT_thumbail.jpg', 'restaurant-drouant.php', 'Projet Lean construction Restaurant Drouant');
INSERT INTO `thumbnails` VALUES (6, 'RTE - Palatin II et III', 'assets/img/thumbnails/le-palatin-ii-iii_admin_thumbail.jpg', 'palatin_II_III.php', 'Projet Lean construction RTE - Palatin II et III');



INSERT INTO `projects` VALUES (1, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/HEMICYCLE.jpg','https://www.denu-paradon.com/blank-1-1', 'Fa??ade H??micycle Simone Veil');
INSERT INTO `projects` VALUES (2, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_1679.JPG.jpg','', 'Esapces communs - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (3, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_1678.JPG.jpg','', 'Hall avec photo Simone Veil - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (4, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_3212.JPG-768x1024.jpg','', 'Entr??e interieure - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (5, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_3206.JPG.jpg','', 'Salle commune - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (6, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/HEMICYCLE_REGION_ILE_DE_FRANCE.png','', 'Interieur - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (7, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_3211.JPG.jpg','', 'Vestiaire - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (8, 'H??micycle Simone Veil - Saint-Ouen (93)', 'assets/img/H??micycle_SimoneVeil/IMG_0924_censored.jpg','', 'M??thode de travail - H??micycle Simone Veil');
INSERT INTO `projects` VALUES (9, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/GRAND-MORILLON-projet.jpg', 'https://www.graduateinstitute.ch/fr/housing/our-residences/residence-etudiante-grand-morillon', 'Fa??ade R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (10, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/2M-morillon-17944.jpg', '', 'Espace commun - Vue escalier 1 - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (11, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/00016473.jpg', '', 'Studio 1 - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (12, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/2M-morillon-17427.jpg', '', 'Studio 2 - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (13, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/residence-grand-morillon-article-item-main.jpg', '', 'Vue exterieur - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (14, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/slider-residence-gd-morrilon-(3).jpg', '', 'Espace commun - Vue escalier 2 - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (15, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/IMG_6103_2.jpg', '', 'M??thode de travail - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (16, 'R??sidence ??tudiante Grand Morillon - Suisse', 'assets/img/Grand_Morillon/IMG_5663.jpg', '', 'Chantier - R??sidence ??tudiante Grand Morillon');
INSERT INTO `projects` VALUES (17, 'Lyc??e Pierre de Coubertin - Meaux (77)', 'assets/img/Lyc??e_Coubertin/plan-lycee-e1600696303944-2.jpg', 'https://www.amenagement77.fr/projet/lycee-pierre-de-coubertin/', 'Photo Lyc??e Pierre de Coubertin vu de haut');
INSERT INTO `projects` VALUES (18, 'Lyc??e Pierre de Coubertin - Meaux (77)', 'assets/img/Lyc??e_Coubertin/PLAN_MASSE-1500x1061.jpg', '', 'Carte Lyc??e Pierre de Coubertin vu de haut');
INSERT INTO `projects` VALUES (19, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/Fa??ade_Caserne_Chanzy.jpg', 'https://www.lacasernechanzy.com/fr/', 'Fa??ade de la Caserne Chanzy');
INSERT INTO `projects` VALUES (20, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/R??ha.jpg', '', 'Chambre - La Caserne Chanzy');
INSERT INTO `projects` VALUES (21, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/rheak-front-desk-2708-hor-clsc.jpg', '', 'Comptoir d\'acceuil - La Caserne Chanzy');
INSERT INTO `projects` VALUES (22, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/1449413.jpg', '', 'Piscine - La Caserne Chanzy');
INSERT INTO `projects` VALUES (23, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/IMG_6901.jpg', '', 'M??thode de travail - La Caserne Chanzy');
INSERT INTO `projects` VALUES (24, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/la_caserne_chanzy_lobby1_56238.jpg', '', 'Salle d??tente - La Caserne Chanzy');
INSERT INTO `projects` VALUES (25, 'La Caserne Chanzy - Reims (51)', 'assets/img/Caserne_Chanzy/LA-CASERNE-CHANZY-3.jpg', '', 'Travaux ext??rieur - La Caserne Chanzy');
INSERT INTO `projects` VALUES (26, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/RESTAURANT-DROUANT.jpg', 'https://drouant.com/fr/', 'Fa??ade du Restaurant Drouant');
INSERT INTO `projects` VALUES (27, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/4384242-1447661_0_138_4800_3432_650_465.jpg', '', 'Salle de r??ception 3 - Restaurant Drouant');
INSERT INTO `projects` VALUES (28, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/4384932-1454392_0_69_4800_3432_650_465.jpg', '', 'Salle de r??ception 2 - Restaurant Drouant');
INSERT INTO `projects` VALUES (29, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/4384916-1447660_0_0_4800_3432_650_465.jpg', '', 'Salle de r??ception 1 - Restaurant Drouant');
INSERT INTO `projects` VALUES (30, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/1404884.jpg', '', 'Prix Goncourt - Restaurant Drouant');
INSERT INTO `projects` VALUES (31, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/Drouant_(c)_Matthieu_Salvaing_(4).jpg', '', 'Escalier central - Restaurant Drouant');
INSERT INTO `projects` VALUES (32, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/IMG_6142.jpg', '', 'M??thode de travail + Ludovic GARCIA - Restaurant Drouant');
INSERT INTO `projects` VALUES (33, 'Restaurant Drouant - Paris (75)', 'assets/img/Restaurant_Drouant/R??ha.jpg', '', 'Salle 1 - Restaurant Drouant');
INSERT INTO `projects` VALUES (34, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/le-palatin-ii-iii_admin.jpg', 'https://www.groupeduval.com/patrimoine/listings/palatin-ii-iii-a-la-defense/', 'Fa??ade du b??timent RTE - Palatin II et III');
INSERT INTO `projects` VALUES (35, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/D3A1663-copie-2048x1357.jpg', '', 'Espace d??tente 2 - RTE - Palatin II et III');
INSERT INTO `projects` VALUES (36, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/Selection-RTE-Building-Solutions-Contractant-General-Travaux-Amenagement-Espace_3.jpg', '', 'Espace d??tente 1 - RTE - Palatin II et III');
INSERT INTO `projects` VALUES (37, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/aege.jpg', '', 'M??thode de travail - espace bureau - RTE - Palatin II et III');
INSERT INTO `projects` VALUES (38, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/IMG_1056_censored.jpg', '', 'M??thode de travail - RTE - Palatin II et III');
INSERT INTO `projects` VALUES (39, 'RTE - Palatin II et III - Puteaux (92)', 'assets/img/RTE_palatin_II_III/Selection-RTE-Building-Solutions-Contractant-General-Travaux-Amenagement-Espace_8.jpg', '', 'Espace commun - couloir - RTE - Palatin II et III');





INSERT INTO `clients` VALUES (1, 'Service d???infrastructure de la D??fense', 'Le v??ritable atout de ce projet est la standardisation pouss??e dont il est le fruit. Capitalisant sur le remarquable travail pr??alable du Centre national de production des infrastructures de D??fense (CNPID), l???ESID de Bordeaux a transform?? l???essai en livrant l???ouvrage en avance et en un temps record.');
INSERT INTO `clients` VALUES (2, 'MontRoyal', 'Grace ?? la m??thode du Lean Construction (Last Planner System) nous avons fait les travaux de l???h??tel en seulement 24 mois');
INSERT INTO `clients` VALUES (3, 'Complex Bau', 'La planification LEAN mise en place sur tout le projet permet de rationaliser le travail des entreprises sur site et d???augmenter la productivit?? de chacun');
INSERT INTO `clients` VALUES (4, 'CJL Evolution', 'Une meilleure vision du planning des chantiers avec le support" "Une r??union plus courte avec une communication utile et efficace');



INSERT INTO `partners` VALUES (1, 'R??gion-??le-de-France', 'assets/img/partenaires/R??gion_??le-de-France_logo.jpg', 'Logo R??gion-??le-de-France');
INSERT INTO `partners` VALUES (2, 'MontRoyal', 'assets/img/partenaires/Logo_MontRoyal_Immobilier.jpg', 'Logo MontRoyal');
INSERT INTO `partners` VALUES (3, 'Am??nagement77', 'assets/img/partenaires/a77_logo.jpg', 'Logo Am??nagement77');
INSERT INTO `partners` VALUES (4, 'Banque de France', 'assets/img/partenaires/Banque-de-France-Logo-1_opacit??.jpg', 'Logo Banque de France');
INSERT INTO `partners` VALUES (5, 'Gardinier', 'assets/img/partenaires/Gardinier-corporate-logo.jpg', 'Logo Gardinier');
INSERT INTO `partners` VALUES (6, 'Seg Fayat', 'assets/img/partenaires/seg_fayat.jpg', 'Logo SEG Fayat');
INSERT INTO `partners` VALUES (7, 'Nord France Construction', 'assets/img/partenaires/Nord-France-Construction-Logo.jpg', 'Logo Nord France Construction');
INSERT INTO `partners` VALUES (8, 'Spi batignolles', 'assets/img/partenaires/Spie-Batignolles-logo.jpg', 'Logo Spie Batignolles');
INSERT INTO `partners` VALUES (9, 'Engie', 'assets/img/partenaires/Engie_logo.jpg', 'Logo Engie');
INSERT INTO `partners` VALUES (10, 'CJL Evolution', 'assets/img/partenaires/CJL_logo.jpg', 'Logo CJL Evolution');
INSERT INTO `partners` VALUES (11, 'Steiner', 'assets/img/partenaires/steiner-logo2.jpg', 'Logo Steiner');
INSERT INTO `partners` VALUES (12, 'Michel SAS', 'assets/img/partenaires/Michel-sas.jpg', 'Logo Michel SAS');
INSERT INTO `partners` VALUES (13, 'Les Eco-Isolateurs', 'assets/img/partenaires/logo-site-lei.jpg', 'Logo Les Eco-Isolateurs');
INSERT INTO `partners` VALUES (14, 'Denu&Paradon', 'assets/img/partenaires/denu-&-paradon.jpg', 'Logo Denu&Paradon');
INSERT INTO `partners` VALUES (15, 'Complex Bau', 'assets/img/partenaires/complex-bau-logo.jpg', 'Logo Complex Bau');



INSERT INTO `pages` VALUES (1, 'Notre Histoire', 'assets/img/Notre_Histoire.jpg');
INSERT INTO `pages` VALUES (2, 'Nos services', 'assets/img/Nos_services.jpg');
INSERT INTO `pages` VALUES (3, 'Projet / R??f??rences', 'assets/img/Projets-References.jpg');
INSERT INTO `pages` VALUES (4, 'H??micycle Simone Veil', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (5, 'R??sidence ??tudiante Grand Morillon', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (6, 'Lyc??e Pierre de Coubertin', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (7, 'La Caserne Chanzy', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (8, 'Restaurant Drouant', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (9, 'RTE - Palatin II et III', 'assets/img/Page_Projet.jpg');
INSERT INTO `pages` VALUES (10, 'Lean Construction', 'assets/img/Lean_Construction.jpg');
INSERT INTO `pages` VALUES (11, 'Rejoignez-nous', 'assets/img/Rejoignez-nous.jpg');
INSERT INTO `pages` VALUES (12, 'Contact', 'assets/img/Contact.jpg');


COMMIT;