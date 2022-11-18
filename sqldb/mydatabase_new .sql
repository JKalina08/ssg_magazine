-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `ssg`;
CREATE DATABASE `ssg` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ssg`;

DROP TABLE IF EXISTS `ssg_article`;
CREATE TABLE `ssg_article` (
  `id_art` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `file` varchar(128) NOT NULL,
  `status` int NOT NULL,
  `theme` varchar(3) NOT NULL,
  `autor` int NOT NULL,
  `recenzent1` int DEFAULT NULL,
  `recenze1` varchar(4096) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `akt1` int DEFAULT NULL,
  `orig1` int DEFAULT NULL,
  `lang1` int DEFAULT NULL,
  `recenzent2` int DEFAULT NULL,
  `recenze2` varchar(4096) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `akt2` int DEFAULT NULL,
  `orig2` int DEFAULT NULL,
  `lang2` int DEFAULT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `ssg_article` (`id_art`, `title`, `file`, `status`, `theme`, `autor`, `recenzent1`, `recenze1`, `akt1`, `orig1`, `lang1`, `recenzent2`, `recenze2`, `akt2`, `orig2`, `lang2`) VALUES
(2,	'Orgasmy u paviánů',	'Článek_1_1111111111.pdf',	3,	'NAT',	4,	2,	'bla bla bla recenze 1',	0,	0,	0,	3,	'bla bla bla recenze 2',	0,	0,	0),
(3,	'Mikroprocesory',	'Článek 2_1111111122.pdf',	6,	'TEC',	5,	3,	'sfasdfas',	1,	3,	2,	0,	'',	0,	0,	0),
(4,	'Červený trpaslík',	'Článek 3_1111111133.pdf',	1,	'SOC',	4,	0,	'',	0,	0,	0,	0,	'',	0,	0,	0),
(14,	'TEST',	'šablona_SP.docx',	1,	'ECO',	3,	0,	'',	0,	0,	0,	0,	'',	0,	0,	0),
(23,	'testtttt',	'111_1668795532.docx',	1,	'HUM',	5,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(24,	'Starý článek',	'lánek_1668804281.pdf',	8,	'TEC',	1,	2,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	4,	2,	1,	3,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	2,	4,	1),
(25,	'fgsdgsdfg',	'lánek_1668804302.pdf',	8,	'ECO',	5,	3,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	2,	1,	3,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	1,	2,	3),
(26,	'Starý článek',	'lánek_1668804317.pdf',	8,	'SOC',	5,	3,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	3,	5,	5,	2,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	1,	1,	2),
(27,	'Old Article',	'lánek_1668804329.pdf',	8,	'NAT',	5,	2,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	5,	4,	2,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	1,	2,	4),
(28,	'Kulosvrb',	'lánek_1668804348.pdf',	8,	'NAT',	5,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	1,	5,	5,	3,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	2,	2,	2),
(29,	'sdfgsdfg',	'lánek_1668804371.pdf',	8,	'TEC',	4,	2,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	5,	1,	3,	3,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	3,	3,	3),
(30,	'Ahoj',	'lánek_1668804382.pdf',	8,	'ECO',	4,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	4,	2,	1,	2,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	4,	3,	2),
(31,	'Prdlajs',	'lánek_1668804398.pdf',	8,	'ECO',	4,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	4,	4,	4,	10,	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis nibh at felis congue commodo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Integer tempor. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Fusce suscipit libero eget elit. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Nulla pulvinar eleifend sem. Ut tempus purus at lorem. Quisque porta. Fusce suscipit libero eget elit. Nullam rhoncus aliquam metus. Aenean vel massa quis mauris vehicula lacinia. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Suspendisse nisl. In rutrum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Mauris metus. Integer vulputate sem a nibh rutrum consequat.  Aenean placerat. Nunc tincidunt ante vitae massa. Donec iaculis gravida nulla. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam faucibus mi quis velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam egestas wisi a erat. Integer in sapien. Aenean id metus id velit ullamcorper pulvinar. Integer pellentesque quam vel velit. Pellentesque arcu. Nunc auctor. Nulla non arcu lacinia neque faucibus fringilla. Mauris elementum mauris vitae tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dictum tincidunt diam. Aenean vel massa quis mauris vehicula lacinia. Donec iaculis gravida nulla. Maecenas aliquet accumsan leo.',	4,	4,	4);

DROP TABLE IF EXISTS `ssg_autors`;
CREATE TABLE `ssg_autors` (
  `id_art` int NOT NULL,
  `id_staff` int NOT NULL,
  `main` tinyint(1) NOT NULL,
  KEY `id_art` (`id_art`),
  KEY `id_staff` (`id_staff`),
  CONSTRAINT `ssg_autors_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `ssg_article` (`id_art`),
  CONSTRAINT `ssg_autors_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `ssg_users` (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `ssg_autors` (`id_art`, `id_staff`, `main`) VALUES
(2,	4,	1),
(2,	5,	0),
(3,	5,	1),
(4,	4,	1),
(23,	4,	0),
(23,	7,	0),
(23,	9,	0),
(26,	4,	0),
(26,	7,	0),
(26,	11,	0),
(31,	7,	0);

DROP TABLE IF EXISTS `ssg_users`;
CREATE TABLE `ssg_users` (
  `id_staff` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `ssg_users` (`id_staff`, `user_name`, `password`, `user_full_name`, `tag`, `mail`) VALUES
(1,	'redaktor',	'e10adc3949ba59abbe56e057f20f883e',	'Honza Hnědý',	'redaktor',	'honza.hnedy@gmail.com'),
(2,	'lopata',	'6c44e5cd17f0019c64b042e4a745412a',	'Luboš Lopata',	'recenzent',	'lubos.lopata@gmail.com'),
(3,	'paprikova',	'530ea1472e71035353d32d341ecf6343',	'Pavlína Papriková',	'recenzent',	'pavlina.paprikova@gmail.com'),
(4,	'banan',	'c90c19f592f1700a634fdd2912983a6e',	'Bořivoj Banán',	'autor',	'borivoj.banan@gmail.com'),
(5,	'mrkev',	'c90c19f592f1700a634fdd2912983a6e',	'Mgr. Martin Mrkev',	'autor',	'martin.mrkev@gmail.com'),
(6,	'franta',	'e10adc3949ba59abbe56e057f20f883e',	'Franta Famfrpál',	'autor',	'ff@kokos.cz'),
(7,	'grep',	'e10adc3949ba59abbe56e057f20f883e',	'Gabriel Grepfriut',	'autor',	'gg@kokos.cz'),
(8,	'radek',	'e10adc3949ba59abbe56e057f20f883e',	'Radek Ryšavý',	'autor',	'rr@seznamm.cz'),
(9,	'olina',	'e10adc3949ba59abbe56e057f20f883e',	'Olina Olivová',	'autor',	'oo@seznamm.cz'),
(10,	'eliska',	'e10adc3949ba59abbe56e057f20f883e',	'Eliška Erbová',	'recenzent',	'ee@ee.cz'),
(11,	'barbora',	'e10adc3949ba59abbe56e057f20f883e',	'Barbora Bramborová',	'autor',	'bb@bbbb.com');

-- 2022-11-18 23:08:00
