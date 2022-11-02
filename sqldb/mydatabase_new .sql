SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `ssg`;
CREATE DATABASE `ssg`;
USE  `ssg`;

CREATE TABLE `ssg_users` (
  `id_staff` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `tag` varchar(20)  NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ssg_users` (`id_staff`, `user_name`, `password`, `user_full_name`, `tag`, `mail`) VALUES
(1, 'redaktor', 'e10adc3949ba59abbe56e057f20f883e', 'Honza Hnědý', 'redaktor', 'honza.hnedy@gmail.com'),
(2, 'lopata', '6c44e5cd17f0019c64b042e4a745412a', 'Luboš Lopata', 'recenzent', 'lubos.lopata@gmail.com'),
(3, 'paprikova', '530ea1472e71035353d32d341ecf6343', 'Pavlína Papriková', 'recenzent', 'pavlina.paprikova@gmail.com'),
(4, 'banan', 'c90c19f592f1700a634fdd2912983a6e', 'Bořivoj Banán', 'autor', 'borivoj.banan@gmail.com'),
(5, 'mrkev', 'c90c19f592f1700a634fdd2912983a6e', 'Mgr. Martin Mrkev', 'autor', 'martin.mrkev@gmail.com');

ALTER TABLE `ssg_users`
  ADD PRIMARY KEY (`id_staff`);

ALTER TABLE `ssg_users`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Struktura tabulky `ssg_article` =================================================
--

CREATE TABLE `ssg_article` (
  `id_art` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `theme` varchar(3) NOT NULL,
  `autor` int(11) NOT NULL,
  `recenzent1` int(11) NOT NULL,
  `recenze1` varchar(4096) NOT NULL,
  `akt1` int(11) NOT NULL,
  `orig1` int(11) NOT NULL,
  `lang1` int(11) NOT NULL,
  `recenzent2` int(11) NOT NULL,
  `recenze2` varchar(4096) NOT NULL,
  `akt2` int(11) NOT NULL,
  `orig2` int(11) NOT NULL,
  `lang2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ssg_article` (`id_art`, `title`, `file`, `status`, `theme`, `autor`, `recenzent1`, `recenze1`, `akt1`, `orig1`, `lang1`, `recenzent2`, `recenze2`, `akt2`, `orig2`, `lang2`) VALUES
(2, 'Orgasmy u paviánů', 'Článek 1.pdf', 3, 'NAT', 4, 2, 'bla bla bla recenze 1', 2, 3, 5, 3, 'bla bla bla recenze 2', 1, 5, 4),
(3, 'Mikroprocesory', 'Článek 2.pdf', 6, 'TEC', 5, 3, 'sfasdfas', 1, 3, 2, 0, '', 0, 0, 0),
(4, 'Červený trpaslík', 'Článek 3.pdf', 1, 'SOC', 4, 0, '', 0, 0, 0, 0, '', 0, 0, 0),
(14, 'TEST', 'šablona_SP.docx', 1, 'ECO', 3, 0, '', 0, 0, 0, 0, '', 0, 0, 0);

ALTER TABLE `ssg_article`
  ADD PRIMARY KEY (`id_art`);

ALTER TABLE `ssg_article`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Struktura tabulky `ssg_autors` =======================================
--

CREATE TABLE `ssg_autors` (
  `id_art` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `main` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ssg_autors` (`id_art`, `id_staff`, `main`) VALUES
(2, 4, 1),
(2, 5, 0),
(3, 5, 1),
(4, 4, 1);

ALTER TABLE `ssg_autors`
  ADD KEY `id_art` (`id_art`),
  ADD KEY `id_staff` (`id_staff`);

ALTER TABLE `ssg_autors`
  ADD CONSTRAINT `ssg_autors_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `ssg_article` (`id_art`),
  ADD CONSTRAINT `ssg_autors_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `ssg_users` (`id_staff`);
COMMIT;
