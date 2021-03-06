-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 10:44 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `flexinvite`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_credentials`
--

CREATE TABLE IF NOT EXISTS `sp_credentials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(16) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '1-gmail,2-way2sms',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sp_credentials`
--

INSERT INTO `sp_credentials` (`id`, `user_id`, `username`, `password`, `type`) VALUES
(1, 10, 'pranay.kumar658@gmail.com', '9395399503', 1),
(2, 10, '8121779990', 'nareshgumte', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sp_events`
--

CREATE TABLE IF NOT EXISTS `sp_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `event_name` varchar(32) DEFAULT NULL,
  `event_desc` text,
  `event_shortdesc` varchar(512) DEFAULT NULL,
  `event_venue` varchar(32) DEFAULT NULL,
  `event_image` varchar(256) DEFAULT NULL,
  `event_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sp_events`
--

INSERT INTO `sp_events` (`event_id`, `user_id`, `event_name`, `event_desc`, `event_shortdesc`, `event_venue`, `event_image`, `event_date_time`, `event_status`) VALUES
(5, 10, 'My First Event', 'This is Event  to test Come to Tea', 'Ni Biscuit galu unaru ga ramante Rara ra', 'Purpletalk Aunty Tea Shop', '', '2013-06-09 18:30:00', 1),
(6, 10, 'testing ', 'testinf', 'testinf', 'testi', 'naresh7294.jpg', '2013-06-10 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sp_friends`
--

CREATE TABLE IF NOT EXISTS `sp_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whois` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `sp_friends`
--

INSERT INTO `sp_friends` (`id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `whois`) VALUES
(86, 10, 'Bharadwaj', 'Gampa', 'bharadwaj@purpletalk.com', '+91-897-767-2999', 'Purpletalk Collegue'),
(87, 10, 'Phani', 'Tanniru', 'phanindra@purpletalk.com', '+91-995-108-4686', 'Purpletalk Collegue'),
(88, 10, 'Sudheer', 'Pola', 'sudheer.p@purpletalk.com', '+91-967-673-6284', 'Purpletalk Collegue'),
(89, 10, 'Naresh', 'Gumte', 'naresh@purpletalk.com', '+91-998-514-3256', 'Purpletalk Collegue'),
(90, 10, 'Mahesh', 'Kondapalli', 'mahesh.k@purpletalk.com', '+91-986-642-6195', 'Purpletalk Collegue');

-- --------------------------------------------------------

--
-- Table structure for table `sp_groups`
--

CREATE TABLE IF NOT EXISTS `sp_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_name` varchar(64) NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sp_groups`
--

INSERT INTO `sp_groups` (`group_id`, `user_id`, `group_name`) VALUES
(4, 10, 'Tea Group'),
(5, 10, 'TestInvite');

-- --------------------------------------------------------

--
-- Table structure for table `sp_group_members`
--

CREATE TABLE IF NOT EXISTS `sp_group_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `group_member_id` int(11) NOT NULL,
  PRIMARY KEY (`group_member_id`,`group_id`),
  UNIQUE KEY `id_3` (`id`),
  KEY `group_id` (`group_id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sp_group_members`
--

INSERT INTO `sp_group_members` (`id`, `group_id`, `group_member_id`) VALUES
(13, 4, 86),
(14, 4, 87),
(15, 4, 88),
(16, 4, 89),
(17, 4, 90),
(18, 5, 89);

-- --------------------------------------------------------

--
-- Table structure for table `sp_invitation_history`
--

CREATE TABLE IF NOT EXISTS `sp_invitation_history` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `group_id` int(16) NOT NULL,
  `invited_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `sp_users`
--

CREATE TABLE IF NOT EXISTS `sp_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sp_users`
--

INSERT INTO `sp_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `cdate`, `status`) VALUES
(10, 'naresh', '7cb4ffbb2635356600af00166decc350', 'naresh', 'naresh', 'naresh@purpletalk.com', '+92-998-514-3256', '2013-06-07 23:29:12', 0),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin@flexinvite.com', '+91-998-514-3256', '2013-06-08 21:08:19', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sp_events`
--
ALTER TABLE `sp_events`
  ADD CONSTRAINT `sp_events_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sp_friends`
--
ALTER TABLE `sp_friends`
  ADD CONSTRAINT `sp_friends_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sp_groups`
--
ALTER TABLE `sp_groups`
  ADD CONSTRAINT `sp_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sp_group_members`
--
ALTER TABLE `sp_group_members`
  ADD CONSTRAINT `sp_group_members_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `sp_groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sp_group_members_ibfk_3` FOREIGN KEY (`group_member_id`) REFERENCES `sp_friends` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sp_invitation_history`
--
ALTER TABLE `sp_invitation_history`
  ADD CONSTRAINT `sp_invitation_history_ibfk_4` FOREIGN KEY (`event_id`) REFERENCES `sp_events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sp_invitation_history_ibfk_5` FOREIGN KEY (`group_id`) REFERENCES `sp_groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sp_invitation_history_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
