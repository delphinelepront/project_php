-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 02, 2020 at 09:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
                           `id` int(11) NOT NULL,
                           `titre` varchar(50) NOT NULL,
                           `descriptionProduit` longtext NOT NULL,
                           `prix` float NOT NULL,
                           `date_debut` datetime DEFAULT NULL,
                           `date_fin` datetime DEFAULT NULL,
                           `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `descriptionProduit`, `prix`, `date_debut`, `date_fin`, `id_user`) VALUES
(1, 'Coeur', 'en bon état', 0, NULL, NULL, 10),
(2, 'Pied', 'Moyen mais passable', 0, NULL, NULL, 10),
(4, 'Tiramisu', 'Coucou', 12, '2020-09-29 20:41:38', '2020-09-17 22:10:00', 10),
(6, 'Doigt', 'Ceci est un doigt de pied bleu', 122, '2020-09-30 12:42:05', '2020-09-17 14:43:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `login` varchar(50) NOT NULL,
                        `password` varchar(50) NOT NULL,
                        `email` varchar(50) NOT NULL,
                        `descriptionUser` longtext,
                        `date_inscription` datetime DEFAULT NULL,
                        `phonenumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `descriptionUser`, `date_inscription`, `phonenumber`) VALUES
(10, 'DelphineLep', '4acf98715cbacd7d0a44b3c73f217ddc2ad38b93', 'a@a.com', '', NULL, 0),
(11, 'aa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'a@a.fr', 'test', NULL, 663844715),
(12, 'aa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'a@a.fr', 'test', NULL, 663844715),
(13, 'aa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'a@a.fr', 'test', NULL, 663844715),
(14, 'aa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'a@a.fr', 'test', NULL, 663844715),
(15, 'aa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'a@a.fr', 'test', NULL, 663844715);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
    ADD PRIMARY KEY (`id`),
    ADD KEY `annonce_user_FK` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
    ADD CONSTRAINT `annonce_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
