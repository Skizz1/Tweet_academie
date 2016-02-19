-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2016 at 12:29 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `common-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_favoris`
--

CREATE TABLE IF NOT EXISTS `tp_favoris` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `fav_date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`user_id`),
  KEY `tweet_id` (`tweet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tp_follow`
--

CREATE TABLE IF NOT EXISTS `tp_follow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `follow_id` int(11) unsigned NOT NULL,
  `follower_id` int(11) unsigned NOT NULL,
  `follow_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `follow_id` (`follow_id`),
  KEY `follower_id` (`follower_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tp_follow`
--

INSERT INTO `tp_follow` (`id`, `follow_id`, `follower_id`, `follow_date`, `active`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tp_messages`
--

CREATE TABLE IF NOT EXISTS `tp_messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `destinataire_id` int(11) unsigned NOT NULL,
  `expediteur_id` int(11) unsigned NOT NULL,
  `destinataire_del` tinyint(1) unsigned DEFAULT NULL,
  `expediteur_del` tinyint(1) unsigned DEFAULT NULL,
  `view` tinyint(1) unsigned DEFAULT NULL,
  `view_date` datetime DEFAULT NULL,
  `message_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `destinataire_id` (`destinataire_id`),
  KEY `expediteur_id` (`expediteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tp_pictures`
--

CREATE TABLE IF NOT EXISTS `tp_pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `picture_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `picture_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tweet_id` (`tweet_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tp_preference`
--

CREATE TABLE IF NOT EXISTS `tp_preference` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tp_replys`
--

CREATE TABLE IF NOT EXISTS `tp_replys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `content` text NOT NULL,
  `reply_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `tweet_id` (`tweet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tp_retweets`
--

CREATE TABLE IF NOT EXISTS `tp_retweets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_id` int(11) unsigned NOT NULL,
  `content` varchar(140) CHARACTER SET utf8 NOT NULL,
  `date_retweet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `tweet_id` (`tweet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tp_retweets`
--

INSERT INTO `tp_retweets` (`id`, `user_id`, `tweet_id`, `content`, `date_retweet`) VALUES
(1, 1, 1, '#root @emmaWatson salut', '2016-02-19 10:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `tp_tweets`
--

CREATE TABLE IF NOT EXISTS `tp_tweets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(140) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tweet_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`user_id`),
  KEY `id_tweet` (`id`),
  KEY `id_user_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tp_tweets`
--

INSERT INTO `tp_tweets` (`id`, `content`, `user_id`, `tweet_date`) VALUES
(1, '#root @emmaWatson salut', 1, '2016-02-19 10:31:35'),
(2, 'zeezr', 1, '2016-02-19 11:29:22'),
(3, '', 1, '2016-02-19 12:11:10'),
(4, '', 1, '2016-02-19 12:12:29'),
(5, '', 1, '2016-02-19 12:12:52'),
(6, '', 1, '2016-02-19 12:13:41'),
(7, '', 1, '2016-02-19 12:14:21'),
(8, '', 1, '2016-02-19 12:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `tp_users`
--

CREATE TABLE IF NOT EXISTS `tp_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `cpostal` int(6) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `connect` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  `last_connection` datetime DEFAULT NULL,
  `sexe` enum('m','f') DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tp_users`
--

INSERT INTO `tp_users` (`id`, `login`, `email`, `password`, `token`, `first_name`, `last_name`, `cpostal`, `adress`, `departement`, `region`, `city`, `country`, `connect`, `active`, `birthday`, `register_date`, `last_connection`, `sexe`, `cover`, `avatar`) VALUES
(1, 'emmaWatson', 'zzz@live.fr', '10205cee1cc602bef5549969f503a53789def31a', NULL, 'watson', 'emazaaz', NULL, NULL, NULL, NULL, 'lyon', NULL, NULL, NULL, '2016-02-24', '2016-02-19 10:27:24', NULL, NULL, NULL, '1'),
(2, 'qsdf', 'cccxvcv@live.fr', '10205cee1cc602bef5549969f503a53789def31a', NULL, 'zzz', 'eteee', NULL, NULL, NULL, NULL, 'cxcvxvxc', NULL, NULL, NULL, '2016-02-24', '2016-02-19 12:25:55', NULL, NULL, NULL, 'AVATAR');

-- --------------------------------------------------------

--
-- Table structure for table `tp_user_preference`
--

CREATE TABLE IF NOT EXISTS `tp_user_preference` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `preference_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_preference` (`preference_id`),
  KEY `id_user` (`user_id`),
  KEY `id_preference_2` (`preference_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tp_favoris`
--
ALTER TABLE `tp_favoris`
  ADD CONSTRAINT `tp_favoris_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_favoris_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tp_tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_follow`
--
ALTER TABLE `tp_follow`
  ADD CONSTRAINT `tp_follow_ibfk_1` FOREIGN KEY (`follow_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_follow_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_messages`
--
ALTER TABLE `tp_messages`
  ADD CONSTRAINT `tp_messages_ibfk_1` FOREIGN KEY (`destinataire_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_messages_ibfk_2` FOREIGN KEY (`expediteur_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_pictures`
--
ALTER TABLE `tp_pictures`
  ADD CONSTRAINT `tp_pictures_ibfk_1` FOREIGN KEY (`tweet_id`) REFERENCES `tp_tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_pictures_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_replys`
--
ALTER TABLE `tp_replys`
  ADD CONSTRAINT `tp_replys_ibfk_1` FOREIGN KEY (`tweet_id`) REFERENCES `tp_tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_retweets`
--
ALTER TABLE `tp_retweets`
  ADD CONSTRAINT `tp_retweets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_retweets_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tp_tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tp_user_preference`
--
ALTER TABLE `tp_user_preference`
  ADD CONSTRAINT `tp_user_preference_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tp_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_user_preference_ibfk_2` FOREIGN KEY (`preference_id`) REFERENCES `tp_preference` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
