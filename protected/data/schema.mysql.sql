-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2013 at 11:36 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sp_credentials`
--

INSERT INTO `sp_credentials` (`id`, `user_id`, `username`, `password`, `type`) VALUES
(1, 10, 'pranay.kumar658@gmail.com', '9395399503', 1),
(2, 10, '8121779990', 'nareshgumte', 2),
(3, 11, 'pranay.kumar658@gmail.com', '9395399503', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sp_events`
--

INSERT INTO `sp_events` (`event_id`, `user_id`, `event_name`, `event_desc`, `event_shortdesc`, `event_venue`, `event_image`, `event_date_time`, `event_status`) VALUES
(4, 10, 'test', 'test', 'test', 'test', 'naresh7148.jpg', '2013-06-09 18:30:00', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `sp_friends`
--

INSERT INTO `sp_friends` (`id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `whois`) VALUES
(1, 10, 'abhigna_0508', 'abhigna_0508', 'abhigna_0508@yahoo.com', NULL, 'yahoo'),
(2, 10, 'obedagbenorku', 'obedagbenorku', 'abidegh@yahoo.com', NULL, 'yahoo'),
(3, 10, '(akhil_reddys)', '(akhil_reddys)', 'akhil_reddys@yahoo.com', NULL, 'yahoo'),
(4, 10, 'bh', 'bh', 'pavankumar.2312@rediffmail.com', NULL, 'yahoo'),
(5, 10, 'bharadwaj', 'gampa', 'bharadwaj.gampa@gmail.com', '+91-897-767-2999', 'purpletalk'),
(6, 10, '(dillikarpradeep)', '(dillikarpradeep)', 'dillikarpradeep@yahoo.com', NULL, 'yahoo'),
(7, 10, 'dimpudimpu', 'dimpudimpu', 'dimpu.dimpu510@yahoo.com', NULL, 'yahoo'),
(8, 10, '(don_gang38)', '(don_gang38)', 'don_gang38@yahoo.com', NULL, 'yahoo'),
(9, 10, 'venkateshece', 'venkateshece', 'venkatesh_ece442@yahoo.com', NULL, 'yahoo'),
(10, 10, 'shravangangelly', 'shravangangelly', 'shravan_gaana@yahoo.com', NULL, 'yahoo'),
(11, 10, 'geeta.vijayan@yahoo.com', 'geeta.vijayan@yahoo.com', 'geeta.vijayan@yahoo.com', NULL, 'yahoo'),
(12, 10, 'AkshayaGenius', 'AkshayaGenius', 'flairgirl_flair@yahoo.com', NULL, 'yahoo'),
(13, 10, 'sudhirgumte', 'sudhirgumte', 'sudhir_gumte@yahoo.com', NULL, 'yahoo'),
(14, 10, 'hanumanth.cse@gmail.com', 'hanumanth.cse@gmail.com', 'hanumanth.cse@gmail.com', NULL, 'yahoo'),
(15, 10, '(harinath_reddys)', '(harinath_reddys)', 'harinath_reddys@yahoo.com', NULL, 'yahoo'),
(16, 10, '(imsonaliu_priyanka)', '(imsonaliu_priyanka)', 'imsonaliu_priyanka@yahoo.com', NULL, 'yahoo'),
(17, 10, 'istqb_gen_01@talentsprint.com', 'istqb_gen_01@talentsprint.com', 'istqb_gen_01@talentsprint.com', NULL, 'yahoo'),
(18, 10, '(priya_technodreamz)', '(priya_technodreamz)', 'priya_technodreamz@yahoo.com', NULL, 'yahoo'),
(19, 10, 'viswanathJakka', 'viswanathJakka', 'viswanath_jakka@yahoo.com', NULL, 'yahoo'),
(20, 10, 'jasmine_as2004@yahoo.com', 'jasmine_as2004@yahoo.com', 'jasmine_as2004@yahoo.com', NULL, 'yahoo'),
(21, 10, 'jasmine_as2004@yahoo.co.in', 'jasmine_as2004@yahoo.co.in', 'jasmine_as2004@yahoo.co.in', NULL, 'yahoo'),
(22, 10, '(jobin_joyseph)', '(jobin_joyseph)', 'jobin_joyseph@yahoo.com', NULL, 'yahoo'),
(23, 10, 'lavanyak', 'lavanyak', 'k_lavanya66@yahoo.com', NULL, 'yahoo'),
(24, 10, 'shashikanth', 'shashikanth', 'shashi_430@yahoo.com', NULL, 'yahoo'),
(25, 10, 'karthik', 'karthik', 'karthik_kulkarni007@yahoo.com', NULL, 'yahoo'),
(26, 10, 'karthik_kulkarni4@gmail.com', 'karthik_kulkarni4@gmail.com', 'karthik_kulkarni4@gmail.com', NULL, 'yahoo'),
(27, 10, 'divvikiran', 'divvikiran', 'divvi_kiran@yahoo.com', NULL, 'yahoo'),
(28, 10, 'ravikiran', 'ravikiran', 'ch_ravikiran431@yahoo.com', NULL, 'yahoo'),
(29, 10, '(kirandrv)', '(kirandrv)', 'kirandrv@yahoo.com', NULL, 'yahoo'),
(30, 10, '(krishna_eng2k)', '(krishna_eng2k)', 'krishna_eng2k@yahoo.com', NULL, 'yahoo'),
(31, 10, 'jasperkumar', 'jasperkumar', 'jackrose1386@yahoo.com', NULL, 'yahoo'),
(32, 10, 'pavankumar', 'pavankumar', 'pavan_kumar_23_34@yahoo.com', NULL, 'yahoo'),
(33, 10, 'prasannakumar', 'prasannakumar', 'tpk_456@yahoo.com', NULL, 'yahoo'),
(34, 10, '(kutty_sandy123)', '(kutty_sandy123)', 'kutty_sandy123@yahoo.com', NULL, 'yahoo'),
(35, 10, 'VanithaKzfs', 'VanithaKzfs', 'vanithakzfs@yahoo.com', NULL, 'yahoo'),
(36, 10, 'laxlaxman', 'laxlaxman', 'lax_laxman007@yahoo.com', NULL, 'yahoo'),
(37, 10, 'Naveen KumarMadapu', 'Naveen KumarMadapu', 'naveen_413@yahoo.com', NULL, 'yahoo'),
(38, 10, '(madhavreddy408)', '(madhavreddy408)', 'madhavreddy408@yahoo.com', NULL, 'yahoo'),
(39, 10, 'MaheshMadpathi', 'MaheshMadpathi', 'Mahesh_Madpathi@infosys.com', NULL, 'yahoo'),
(40, 10, 'gumtemahesh', 'gumtemahesh', 'mahesh_gumte@yahoo.com', NULL, 'yahoo'),
(41, 10, 'hemanthmanchiraju', 'hemanthmanchiraju', 'hemanth_manchiraju@yahoo.com', NULL, 'yahoo'),
(42, 10, 'mahimayu', 'mahimayu', 'mahi_mayu069@yahoo.com', NULL, 'yahoo'),
(43, 10, '(munvar_syed2000)', '(munvar_syed2000)', 'munvar_syed2000@yahoo.com', NULL, 'yahoo'),
(44, 10, 'geetan', 'geetan', 'sara_sultana786786@yahoo.com', NULL, 'yahoo'),
(45, 10, 'VanithaN', 'VanithaN', 'vanitha_kz17@yahoo.com', NULL, 'yahoo'),
(46, 10, 'naresh_gumte412@rediff.com', 'naresh_gumte412@rediff.com', 'naresh_gumte412@rediff.com', NULL, 'yahoo'),
(47, 10, 'nareshgumte412@gmail.com', 'nareshgumte412@gmail.com', 'nareshgumte412@gmail.com', NULL, 'yahoo'),
(48, 10, 'srinidhinavgiray', 'srinidhinavgiray', 'srinidhi_navgiray@yahoo.com', NULL, 'yahoo'),
(49, 10, '(nikhil_reddy3102)', '(nikhil_reddy3102)', 'nikhil_reddy3102@yahoo.com', NULL, 'yahoo'),
(50, 10, '(nikitha_reddy_cool)', '(nikitha_reddy_cool)', 'nikitha_reddy_cool@yahoo.com', NULL, 'yahoo'),
(51, 10, 'ambikapandey', 'ambikapandey', 'ambs_pandey@yahoo.com', NULL, 'yahoo'),
(52, 10, 'netharipavan', 'netharipavan', 'nethari_pavan@yahoo.com', NULL, 'yahoo'),
(53, 10, '(pavan_kumar23_34)', '(pavan_kumar23_34)', 'pavan_kumar23_34@yahoo.com', NULL, 'yahoo'),
(54, 10, '(perfectt_stranger)', '(perfectt_stranger)', 'perfectt_stranger@yahoo.com', NULL, 'yahoo'),
(55, 10, 'Priyanka', 'Priyanka', 'priyanka@irreminders.com', NULL, 'yahoo'),
(56, 10, 'ramreddy_avr@yahoo.com', 'ramreddy_avr@yahoo.com', 'ramreddy_avr@yahoo.com', NULL, 'yahoo'),
(57, 10, 'ramreddyavr@gmail.com', 'ramreddyavr@gmail.com', 'ramreddyavr@gmail.com', NULL, 'yahoo'),
(58, 10, 'kantharaorao', 'kantharaorao', 'akhil_changalva@yahoo.com', NULL, 'yahoo'),
(59, 10, 'recruiters200816@yahoo.co.in', 'recruiters200816@yahoo.co.in', 'recruiters200816@yahoo.co.in', NULL, 'yahoo'),
(60, 10, 'hanumanthreddy', 'hanumanthreddy', 'hanumanth508@yahoo.com', NULL, 'yahoo'),
(61, 10, 'sumanjanreddy', 'sumanjanreddy', 'sumanjan_reddy@yahoo.com', NULL, 'yahoo'),
(62, 10, '(saawariyan_sharmila23)', '(saawariyan_sharmila23)', 'saawariyan_sharmila23@yahoo.com', NULL, 'yahoo'),
(63, 10, '(sadhik_439)', '(sadhik_439)', 'sadhik_439@yahoo.com', NULL, 'yahoo'),
(64, 10, 'sailesh.rko@facebook.com', 'sailesh.rko@facebook.com', 'sailesh.rko@facebook.com', NULL, 'yahoo'),
(65, 10, '(santhosh_reddy428)', '(santhosh_reddy428)', 'santhosh_reddy428@yahoo.com', NULL, 'yahoo'),
(66, 10, 'sarathkrishna_pericharla@yahoo.c', 'sarathkrishna_pericharla@yahoo.c', 'sarathkrishna_pericharla@yahoo.com', NULL, 'yahoo'),
(67, 10, 'sasi', 'sasi', 'sasi@habits.in', NULL, 'yahoo'),
(68, 10, '(satish_ashi)', '(satish_ashi)', 'satish_ashi@yahoo.com', NULL, 'yahoo'),
(69, 10, 'sbp_143@yahoo.com', 'sbp_143@yahoo.com', 'sbp_143@yahoo.com', NULL, 'yahoo'),
(70, 10, 'shiprakapoor24@yahoo.com', 'shiprakapoor24@yahoo.com', 'shiprakapoor24@yahoo.com', NULL, 'yahoo'),
(71, 10, 'shiva tej', 'shiva tej', 'siva_tej@yahoo.com', NULL, 'yahoo'),
(72, 10, 'sreepowers@gmail.com', 'sreepowers@gmail.com', 'sreepowers@gmail.com', NULL, 'yahoo'),
(73, 10, 'sudheer_elluri@yahoo.com', 'sudheer_elluri@yahoo.com', 'sudheer_elluri@yahoo.com', NULL, 'yahoo'),
(74, 10, '(sudheer_techno)', '(sudheer_techno)', 'sudheer_techno@yahoo.com', NULL, 'yahoo'),
(75, 10, 'rakisunny', 'rakisunny', 'raki_sunny13@yahoo.com', NULL, 'yahoo'),
(76, 10, '(sweetu_vidya)', '(sweetu_vidya)', 'sweetu_vidya@yahoo.com', NULL, 'yahoo'),
(77, 10, 'swetha.amja@oracle.com', 'swetha.amja@oracle.com', 'swetha.amja@oracle.com', NULL, 'yahoo'),
(78, 10, 'tarakanarender@yahoo.com', 'tarakanarender@yahoo.com', 'tarakanarender@yahoo.com', NULL, 'yahoo'),
(79, 10, 'SUBINTHOM', 'SUBINTHOM', 'raghsbin23@yahoo.com', NULL, 'yahoo'),
(80, 10, 'venkateshece442@gmail.com', 'venkateshece442@gmail.com', 'venkateshece442@gmail.com', NULL, 'yahoo'),
(81, 10, 'venkatesh.mvenky', 'venkatesh.mvenky', 'venky2lucky@yahoo.com', NULL, 'yahoo'),
(82, 10, 'vindhyareddy_r@yahoo.com', 'vindhyareddy_r@yahoo.com', 'vindhyareddy_r@yahoo.com', NULL, 'yahoo'),
(83, 10, 'vindyareddy_r@yahoo.com', 'vindyareddy_r@yahoo.com', 'vindyareddy_r@yahoo.com', NULL, 'yahoo'),
(84, 10, 'srikanthvoruganti', 'srikanthvoruganti', 'srikanth2107@yahoo.com', NULL, 'yahoo'),
(85, 10, 'donyaX', 'donyaX', 'donya_beni@yahoo.com', NULL, 'yahoo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sp_groups`
--

INSERT INTO `sp_groups` (`group_id`, `user_id`, `group_name`) VALUES
(3, 10, 'Tea Team');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sp_group_members`
--

INSERT INTO `sp_group_members` (`id`, `group_id`, `group_member_id`) VALUES
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sp_invitation_history`
--

INSERT INTO `sp_invitation_history` (`id`, `event_id`, `group_id`, `invited_date`, `user_id`) VALUES
(1, 4, 3, '2013-06-08 18:30:00', 10);

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
  ADD CONSTRAINT `sp_group_members_ibfk_2` FOREIGN KEY (`group_member_id`) REFERENCES `sp_friends` (`id`);

--
-- Constraints for table `sp_invitation_history`
--
ALTER TABLE `sp_invitation_history`
  ADD CONSTRAINT `sp_invitation_history_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `sp_events` (`event_id`),
  ADD CONSTRAINT `sp_invitation_history_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `sp_groups` (`group_id`),
  ADD CONSTRAINT `sp_invitation_history_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`);
