-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2016 at 09:03 AM
-- Server version: 10.0.22-MariaDB
-- PHP Version: 5.6.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `common-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_favoris`
--

CREATE TABLE IF NOT EXISTS `tp_favoris` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `date_like` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tp_follow`
--

CREATE TABLE IF NOT EXISTS `tp_follow` (
  `id` int(10) unsigned NOT NULL,
  `follow_id` int(11) unsigned NOT NULL,
  `follower_id` int(11) unsigned NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_follow`
--

INSERT INTO `tp_follow` (`id`, `follow_id`, `follower_id`, `date`) VALUES
(1, 1, 2, '2016-02-05 00:00:00'),
(2, 14, 2, '2016-02-05 00:00:00'),
(3, 2, 1, '0000-00-00 00:00:00'),
(4, 2, 15, '2016-02-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tp_messages`
--

CREATE TABLE IF NOT EXISTS `tp_messages` (
  `id` int(11) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `destinataire_id` int(11) unsigned NOT NULL,
  `expediteur_id` int(11) unsigned NOT NULL,
  `destinataire_del` tinyint(1) unsigned NOT NULL,
  `expediteur_del` tinyint(1) unsigned NOT NULL,
  `view` tinyint(1) unsigned NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tp_pictures`
--

CREATE TABLE IF NOT EXISTS `tp_pictures` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `tweet_id` int(10) unsigned NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tp_preference`
--

CREATE TABLE IF NOT EXISTS `tp_preference` (
  `id` int(11) unsigned NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tp_replys`
--

CREATE TABLE IF NOT EXISTS `tp_replys` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tp_tweets`
--

CREATE TABLE IF NOT EXISTS `tp_tweets` (
  `id` int(11) unsigned NOT NULL,
  `content` varchar(140) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_tweets`
--

INSERT INTO `tp_tweets` (`id`, `content`, `user_id`, `created`) VALUES
(1, 'blablabla', 1, '2016-02-03'),
(2, 'je suis laure', 14, '2016-02-03'),
(3, 'JE SUIS NUMERO 2', 2, '2016-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `tp_users`
--

CREATE TABLE IF NOT EXISTS `tp_users` (
  `id` int(11) unsigned NOT NULL,
  `login` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `theme` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `connect` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `register` datetime NOT NULL,
  `last_connection` datetime NOT NULL,
  `sexe` enum('m','f') NOT NULL,
  `cover` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_users`
--

INSERT INTO `tp_users` (`id`, `login`, `mail`, `password`, `token`, `first_name`, `last_name`, `theme`, `city`, `country`, `connect`, `active`, `birthday`, `register`, `last_connection`, `sexe`, `cover`, `avatar`) VALUES
(1, 'root', 'root@root.fr', 'bebc21dc09d37290a4a10df56550dbaa6beb7aec', '', 'root', 'root', 0, 'lyon', 'france', 0, 0, '2016-02-10', '2016-02-05 00:00:00', '0000-00-00 00:00:00', 'f', '', ''),
(2, 'rootroot', 'aaAZ@live.fr', 'bebc21dc09d37290a4a10df56550dbaa6beb7aec', '', 'zzzz', 'vxcvxvcvsdfzzzzza', 0, 'lyoncvcxvcv', '', 0, 0, '2016-02-16', '2016-02-04 13:52:29', '0000-00-00 00:00:00', 'm', '', ''),
(14, 'laure', 'aaa@live.fr', '10205cee1cc602bef5549969f503a53789def31a', '', 'laure', 'dupont', 0, 'lyon', '', 0, 0, '0000-00-00', '2016-02-04 19:10:34', '0000-00-00 00:00:00', 'm', '', ''),
(15, 'test', 'ggg@live.fr', '10205cee1cc602bef5549969f503a53789def31a', '', 'ee', 'zz', 0, 'dfdf', '', 0, 0, '2016-02-19', '2016-02-04 19:32:34', '0000-00-00 00:00:00', 'm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tp_user_preference`
--

CREATE TABLE IF NOT EXISTS `tp_user_preference` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `preference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_favoris`
--
ALTER TABLE `tp_favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `tp_follow`
--
ALTER TABLE `tp_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_messages`
--
ALTER TABLE `tp_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_pictures`
--
ALTER TABLE `tp_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_preference`
--
ALTER TABLE `tp_preference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_preference` (`id`);

--
-- Indexes for table `tp_replys`
--
ALTER TABLE `tp_replys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reply` (`id`),
  ADD KEY `id__user` (`user_id`),
  ADD KEY `id_tweet` (`tweet_id`),
  ADD KEY `id_reply_2` (`id`),
  ADD KEY `id__user_2` (`user_id`),
  ADD KEY `id_tweet_2` (`tweet_id`);

--
-- Indexes for table `tp_tweets`
--
ALTER TABLE `tp_tweets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_tweet` (`id`),
  ADD KEY `id_user_2` (`user_id`);

--
-- Indexes for table `tp_users`
--
ALTER TABLE `tp_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `tp_user_preference`
--
ALTER TABLE `tp_user_preference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_preference` (`preference_id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_preference_2` (`preference_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_favoris`
--
ALTER TABLE `tp_favoris`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_follow`
--
ALTER TABLE `tp_follow`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tp_messages`
--
ALTER TABLE `tp_messages`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_pictures`
--
ALTER TABLE `tp_pictures`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_preference`
--
ALTER TABLE `tp_preference`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_replys`
--
ALTER TABLE `tp_replys`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_tweets`
--
ALTER TABLE `tp_tweets`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tp_users`
--
ALTER TABLE `tp_users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tp_user_preference`
--
ALTER TABLE `tp_user_preference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
