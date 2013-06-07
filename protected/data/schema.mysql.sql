-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2013 at 09:06 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.6-13ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `secondproject`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sp_credentials`
--

INSERT INTO `sp_credentials` (`id`, `user_id`, `username`, `password`, `type`) VALUES
(1, 0, 'naresh', 'naresh', 1),
(2, 4, '9866426195', '6854', 2),
(3, 7, '9866426195', '6854', 2),
(4, 4, 'pranay.kumar658@gmail.com', '9395399503', 1);

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
  `event_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sp_events`
--

INSERT INTO `sp_events` (`event_id`, `user_id`, `event_name`, `event_desc`, `event_shortdesc`, `event_venue`, `event_image`, `event_status`) VALUES
(16, 4, 'sdfadf', 'asdfasdf', 'as;dlfkaasdf', 'testing', 'mahesh6362.jpg', 1),
(17, 7, 'Joy of giving', 'joy of giving', 'Joy of giving', 'Silparamam', 'admin4691.jpg', 1),
(18, 4, 'Event Name', 'Event Desc', 'Event Shortdesc', 'Event Venue', 'mahesh9768.jpg', 1),
(19, 4, 'Tea Party', 'Giving Tea Party to all', 'Giving Tea Party to all', 'Purpletalk Cafeteria', 'mahesh2041.jpg', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=328 ;

--
-- Dumping data for table `sp_friends`
--

INSERT INTO `sp_friends` (`id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `whois`) VALUES
(5, 4, 'ajay', 'ajay', 'ajay.b@purpletalk.com', '+91-990-857-4793', 'gmail'),
(6, 4, 'kavali sony', 'kavali sony', '678sony@gmail.com', NULL, 'gmail'),
(7, 4, 'abhigna_0508', 'abhigna_0508', 'abhigna_0508@yahoo.com', NULL, 'yahoo'),
(8, 4, 'obedagbenorku', 'obedagbenorku', 'abidegh@yahoo.com', NULL, 'yahoo'),
(9, 4, '(akhil_reddys)', '(akhil_reddys)', 'akhil_reddys@yahoo.com', NULL, 'yahoo'),
(10, 4, 'bh', 'bh', 'pavankumar.2312@rediffmail.com', NULL, 'yahoo'),
(11, 4, 'bharadwaj.gampa@gmail.com', 'bharadwaj.gampa@gmail.com', 'bharadwaj.gampa@gmail.com', NULL, 'yahoo'),
(12, 4, '(dillikarpradeep)', '(dillikarpradeep)', 'dillikarpradeep@yahoo.com', NULL, 'yahoo'),
(13, 4, 'dimpudimpu', 'dimpudimpu', 'dimpu.dimpu510@yahoo.com', NULL, 'yahoo'),
(14, 4, '(don_gang38)', '(don_gang38)', 'don_gang38@yahoo.com', NULL, 'yahoo'),
(15, 4, 'venkateshece', 'venkateshece', 'venkatesh_ece442@yahoo.com', NULL, 'yahoo'),
(16, 4, 'shravangangelly', 'shravangangelly', 'shravan_gaana@yahoo.com', NULL, 'yahoo'),
(17, 4, 'geeta.vijayan@yahoo.com', 'geeta.vijayan@yahoo.com', 'geeta.vijayan@yahoo.com', NULL, 'yahoo'),
(18, 4, 'AkshayaGenius', 'AkshayaGenius', 'flairgirl_flair@yahoo.com', NULL, 'yahoo'),
(19, 4, 'sudhirgumte', 'sudhirgumte', 'sudhir_gumte@yahoo.com', NULL, 'yahoo'),
(20, 4, 'hanumanth.cse@gmail.com', 'hanumanth.cse@gmail.com', 'hanumanth.cse@gmail.com', NULL, 'yahoo'),
(21, 4, '(harinath_reddys)', '(harinath_reddys)', 'harinath_reddys@yahoo.com', NULL, 'yahoo'),
(22, 4, '(imsonaliu_priyanka)', '(imsonaliu_priyanka)', 'imsonaliu_priyanka@yahoo.com', NULL, 'yahoo'),
(23, 4, 'istqb_gen_01@talentsprint.com', 'istqb_gen_01@talentsprint.com', 'istqb_gen_01@talentsprint.com', NULL, 'yahoo'),
(24, 4, '(priya_technodreamz)', '(priya_technodreamz)', 'priya_technodreamz@yahoo.com', NULL, 'yahoo'),
(25, 4, 'viswanathJakka', 'viswanathJakka', 'viswanath_jakka@yahoo.com', NULL, 'yahoo'),
(26, 4, 'jasmine_as2004@yahoo.com', 'jasmine_as2004@yahoo.com', 'jasmine_as2004@yahoo.com', NULL, 'yahoo'),
(27, 4, 'jasmine_as2004@yahoo.co.in', 'jasmine_as2004@yahoo.co.in', 'jasmine_as2004@yahoo.co.in', NULL, 'yahoo'),
(28, 4, '(jobin_joyseph)', '(jobin_joyseph)', 'jobin_joyseph@yahoo.com', NULL, 'yahoo'),
(29, 4, 'lavanyak', 'lavanyak', 'k_lavanya66@yahoo.com', NULL, 'yahoo'),
(30, 4, 'shashikanth', 'shashikanth', 'shashi_430@yahoo.com', NULL, 'yahoo'),
(31, 4, 'karthik', 'karthik', 'karthik_kulkarni007@yahoo.com', NULL, 'yahoo'),
(32, 4, 'karthik_kulkarni4@gmail.com', 'karthik_kulkarni4@gmail.com', 'karthik_kulkarni4@gmail.com', NULL, 'yahoo'),
(33, 4, 'divvikiran', 'divvikiran', 'divvi_kiran@yahoo.com', NULL, 'yahoo'),
(34, 4, 'ravikiran', 'ravikiran', 'ch_ravikiran431@yahoo.com', NULL, 'yahoo'),
(35, 4, '(kirandrv)', '(kirandrv)', 'kirandrv@yahoo.com', NULL, 'yahoo'),
(36, 4, '(krishna_eng2k)', '(krishna_eng2k)', 'krishna_eng2k@yahoo.com', NULL, 'yahoo'),
(37, 4, 'jasperkumar', 'jasperkumar', 'jackrose1386@yahoo.com', NULL, 'yahoo'),
(38, 4, 'pavankumar', 'pavankumar', 'pavan_kumar_23_34@yahoo.com', NULL, 'yahoo'),
(39, 4, 'prasannakumar', 'prasannakumar', 'tpk_456@yahoo.com', NULL, 'yahoo'),
(40, 4, '(kutty_sandy123)', '(kutty_sandy123)', 'kutty_sandy123@yahoo.com', NULL, 'yahoo'),
(41, 4, 'VanithaKzfs', 'VanithaKzfs', 'vanithakzfs@yahoo.com', NULL, 'yahoo'),
(42, 4, 'laxlaxman', 'laxlaxman', 'lax_laxman007@yahoo.com', NULL, 'yahoo'),
(43, 4, 'Naveen KumarMadapu', 'Naveen KumarMadapu', 'naveen_413@yahoo.com', NULL, 'yahoo'),
(44, 4, '(madhavreddy408)', '(madhavreddy408)', 'madhavreddy408@yahoo.com', NULL, 'yahoo'),
(45, 4, 'MaheshMadpathi', 'MaheshMadpathi', 'Mahesh_Madpathi@infosys.com', NULL, 'yahoo'),
(46, 4, 'gumtemahesh', 'gumtemahesh', 'mahesh_gumte@yahoo.com', NULL, 'yahoo'),
(47, 4, 'hemanthmanchiraju', 'hemanthmanchiraju', 'hemanth_manchiraju@yahoo.com', NULL, 'yahoo'),
(48, 4, 'mahimayu', 'mahimayu', 'mahi_mayu069@yahoo.com', NULL, 'yahoo'),
(49, 4, '(munvar_syed2000)', '(munvar_syed2000)', 'munvar_syed2000@yahoo.com', NULL, 'yahoo'),
(50, 4, 'geetan', 'geetan', 'sara_sultana786786@yahoo.com', NULL, 'yahoo'),
(51, 4, 'VanithaN', 'VanithaN', 'vanitha_kz17@yahoo.com', NULL, 'yahoo'),
(52, 4, 'Naresh', 'Gumte', 'nareshgumte412@gmail.com', '+91-812-177-9990', 'yahoo'),
(53, 4, 'srinidhinavgiray', 'srinidhinavgiray', 'srinidhi_navgiray@yahoo.com', NULL, 'yahoo'),
(54, 4, '(nikhil_reddy3102)', '(nikhil_reddy3102)', 'nikhil_reddy3102@yahoo.com', NULL, 'yahoo'),
(55, 4, '(nikitha_reddy_cool)', '(nikitha_reddy_cool)', 'nikitha_reddy_cool@yahoo.com', NULL, 'yahoo'),
(56, 4, 'ambikapandey', 'ambikapandey', 'ambs_pandey@yahoo.com', NULL, 'yahoo'),
(57, 4, 'netharipavan', 'netharipavan', 'nethari_pavan@yahoo.com', NULL, 'yahoo'),
(58, 4, '(pavan_kumar23_34)', '(pavan_kumar23_34)', 'pavan_kumar23_34@yahoo.com', NULL, 'yahoo'),
(59, 4, '(perfectt_stranger)', '(perfectt_stranger)', 'perfectt_stranger@yahoo.com', NULL, 'yahoo'),
(60, 4, 'Priyanka', 'Priyanka', 'priyanka@irreminders.com', NULL, 'yahoo'),
(61, 4, 'ramreddy_avr@yahoo.com', 'ramreddy_avr@yahoo.com', 'ramreddy_avr@yahoo.com', NULL, 'yahoo'),
(62, 4, 'ramreddyavr@gmail.com', 'ramreddyavr@gmail.com', 'ramreddyavr@gmail.com', NULL, 'yahoo'),
(63, 4, 'kantharaorao', 'kantharaorao', 'akhil_changalva@yahoo.com', NULL, 'yahoo'),
(64, 4, 'recruiters200816@yahoo.co.in', 'recruiters200816@yahoo.co.in', 'recruiters200816@yahoo.co.in', NULL, 'yahoo'),
(65, 4, 'hanumanthreddy', 'hanumanthreddy', 'hanumanth508@yahoo.com', NULL, 'yahoo'),
(66, 4, 'sumanjanreddy', 'sumanjanreddy', 'sumanjan_reddy@yahoo.com', NULL, 'yahoo'),
(67, 4, '(saawariyan_sharmila23)', '(saawariyan_sharmila23)', 'saawariyan_sharmila23@yahoo.com', NULL, 'yahoo'),
(68, 4, '(sadhik_439)', '(sadhik_439)', 'sadhik_439@yahoo.com', NULL, 'yahoo'),
(69, 4, '(santhosh_reddy428)', '(santhosh_reddy428)', 'santhosh_reddy428@yahoo.com', NULL, 'yahoo'),
(70, 4, 'sarathkrishna_pericharla@yahoo.c', 'sarathkrishna_pericharla@yahoo.c', 'sarathkrishna_pericharla@yahoo.com', NULL, 'yahoo'),
(71, 4, 'sasi', 'sasi', 'sasi@habits.in', NULL, 'yahoo'),
(72, 4, '(satish_ashi)', '(satish_ashi)', 'satish_ashi@yahoo.com', NULL, 'yahoo'),
(73, 4, 'sbp_143@yahoo.com', 'sbp_143@yahoo.com', 'sbp_143@yahoo.com', NULL, 'yahoo'),
(74, 4, 'shiprakapoor24@yahoo.com', 'shiprakapoor24@yahoo.com', 'shiprakapoor24@yahoo.com', NULL, 'yahoo'),
(75, 4, 'shiva tej', 'shiva tej', 'siva_tej@yahoo.com', NULL, 'yahoo'),
(76, 4, 'sreepowers@gmail.com', 'sreepowers@gmail.com', 'sreepowers@gmail.com', NULL, 'yahoo'),
(77, 4, 'sudheer_elluri@yahoo.com', 'sudheer_elluri@yahoo.com', 'sudheer_elluri@yahoo.com', NULL, 'yahoo'),
(78, 4, '(sudheer_techno)', '(sudheer_techno)', 'sudheer_techno@yahoo.com', NULL, 'yahoo'),
(79, 4, 'rakisunny', 'rakisunny', 'raki_sunny13@yahoo.com', NULL, 'yahoo'),
(80, 4, '(sweetu_vidya)', '(sweetu_vidya)', 'sweetu_vidya@yahoo.com', NULL, 'yahoo'),
(81, 4, 'swetha.amja@oracle.com', 'swetha.amja@oracle.com', 'swetha.amja@oracle.com', NULL, 'yahoo'),
(82, 4, 'tarakanarender@yahoo.com', 'tarakanarender@yahoo.com', 'tarakanarender@yahoo.com', NULL, 'yahoo'),
(83, 4, 'SUBINTHOM', 'SUBINTHOM', 'raghsbin23@yahoo.com', NULL, 'yahoo'),
(84, 4, 'venkateshece442@gmail.com', 'venkateshece442@gmail.com', 'venkateshece442@gmail.com', NULL, 'yahoo'),
(85, 4, 'venkatesh.mvenky', 'venkatesh.mvenky', 'venky2lucky@yahoo.com', NULL, 'yahoo'),
(86, 4, 'vindhyareddy_r@yahoo.com', 'vindhyareddy_r@yahoo.com', 'vindhyareddy_r@yahoo.com', NULL, 'yahoo'),
(87, 4, 'vindyareddy_r@yahoo.com', 'vindyareddy_r@yahoo.com', 'vindyareddy_r@yahoo.com', NULL, 'yahoo'),
(88, 4, 'srikanthvoruganti', 'srikanthvoruganti', 'srikanth2107@yahoo.com', NULL, 'yahoo'),
(89, 4, 'donyaX', 'donyaX', 'donya_beni@yahoo.com', NULL, 'yahoo'),
(90, 4, 'mahesh77  (g)', 'mahesh77  (g)', 'mahesh77_g@yahoo.com', NULL, 'yahoo'),
(91, 4, 'rameshb', 'rameshb', 'bramesh.mca07@gmail.com', NULL, 'yahoo'),
(92, 4, 'krishnanbabu  (kris)', 'krishnanbabu  (kris)', 'krishnanbabu_4930@yahoo.com', NULL, 'yahoo'),
(93, 4, 'bharathireddy22@gmail.com', 'bharathireddy22@gmail.com', 'bharathireddy22@gmail.com', NULL, 'yahoo'),
(94, 4, 'sukkubsr', 'sukkubsr', 'sukku.bsr@gmail.com', NULL, 'yahoo'),
(95, 4, 'krishnachandramohan  (balli)', 'krishnachandramohan  (balli)', 'kcmohan.krishna@gmail.com', NULL, 'yahoo'),
(96, 4, 'rajeshgrandhi  (raj)', 'rajeshgrandhi  (raj)', 'rajesh_mca2008@yahoo.co.in', NULL, 'yahoo'),
(97, 4, 'raghavendrakavuri', 'raghavendrakavuri', 'kavuri_raghu@yahoo.com', NULL, 'yahoo'),
(98, 4, 'kavuriraghavendra  (raghavan)', 'kavuriraghavendra  (raghavan)', 'kavuri.raghavendra@gmail.com', NULL, 'yahoo'),
(99, 4, 'kishore.ye@gmail.com', 'kishore.ye@gmail.com', 'kishore.ye@gmail.com', NULL, 'yahoo'),
(100, 4, 'maheshkondapalli  (mahe)', 'maheshkondapalli  (mahe)', 'maheshkondapalli27@gmail.com', '+91-986-642-6195', 'yahoo'),
(101, 4, 'rajakondapalli', 'rajakondapalli', 'rajakondapalli@yahoo.com', NULL, 'yahoo'),
(102, 4, 'kondapallikishore@gmail.com', 'kondapallikishore@gmail.com', 'kondapallikishore@gmail.com', NULL, 'yahoo'),
(103, 4, 'venkatasatyamandarapu  (no)', 'venkatasatyamandarapu  (no)', 'mandarapu.venkatasatya@wipro.com', NULL, 'yahoo'),
(104, 4, 'mohammed.shaik@zenpact.com', 'mohammed.shaik@zenpact.com', 'mohammed.shaik@zenpact.com', NULL, 'yahoo'),
(105, 4, 'mohammedshaik@zenpact.com', 'mohammedshaik@zenpact.com', 'mohammedshaik@zenpact.com', NULL, 'yahoo'),
(106, 4, 'nareshsku@gmail.com', 'nareshsku@gmail.com', 'nareshsku@gmail.com', NULL, 'yahoo'),
(107, 4, 'nvsrajesh.26@gmail.com', 'nvsrajesh.26@gmail.com', 'nvsrajesh.26@gmail.com', NULL, 'yahoo'),
(108, 4, 'bhaskarora9i', 'bhaskarora9i', 'bhaskar_ora9i@yahoo.com', NULL, 'yahoo'),
(109, 4, 'bhaskarpvk', 'bhaskarpvk', 'pvk_bhaskar@yahoo.com', NULL, 'yahoo'),
(110, 4, 'sureshr', 'sureshr', 'rsuresh@teammahindra.com', NULL, 'yahoo'),
(111, 4, 'sirisharecruit', 'sirisharecruit', 'sirisha_recruit@yahoo.com', NULL, 'yahoo'),
(112, 4, 'srilatharecruit', 'srilatharecruit', 'srilatha_recruit@yahoo.com', NULL, 'yahoo'),
(113, 4, 'resumes@markettools.com', 'resumes@markettools.com', 'resumes@markettools.com', NULL, 'yahoo'),
(114, 4, 'roselin@gameshastra.in', 'roselin@gameshastra.in', 'roselin@gameshastra.in', NULL, 'yahoo'),
(115, 4, 'kiransanthi', 'kiransanthi', 'yskece@gmail.com', NULL, 'yahoo'),
(116, 4, 'srikanthvarma  (cr)', 'srikanthvarma  (cr)', 'sreekanthvarmamca@gmail.com', NULL, 'yahoo'),
(117, 4, 'prasadvsn  (prassu)', 'prasadvsn  (prassu)', 'prassu2211mca@gmail.com', NULL, 'yahoo'),
(118, 4, 'Veer...', 'Veer...', 'chowdaryb4u@gmail.com', NULL, 'yahoo'),
(119, 4, 'Hasusri....', 'Hasusri....', 'hasusri@gmail.com', NULL, 'yahoo'),
(120, 4, 'Abhinav', 'Abhinav', 'abhinav.ravichander@possibilliontech.com', NULL, 'yahoo'),
(121, 4, 'kranthi babu Adhikari 86 55 64 0', 'kranthi babu Adhikari 86 55 64 0', 'adhikari.kranthibabu@gmail.com', NULL, 'yahoo'),
(122, 4, 'Aiswarya', 'Aiswarya', 'aiswaryadevi.adhikari@gmail.com', NULL, 'yahoo'),
(123, 4, 'allurimuralikrishna@gmail.com', 'allurimuralikrishna@gmail.com', 'allurimuralikrishna@gmail.com', NULL, 'yahoo'),
(124, 4, 'amkrishna1029@gmail.com', 'amkrishna1029@gmail.com', 'amkrishna1029@gmail.com', NULL, 'yahoo'),
(125, 4, 'Anjali', 'Anjali', 'info@moneydeal.biz', NULL, 'yahoo'),
(126, 4, 'Durga Prasad Annamdevula', 'Durga Prasad Annamdevula', 'annam.durga@gmail.com', NULL, 'yahoo'),
(127, 4, 'AyyappaAppana', 'AyyappaAppana', 'ayyappa.appana@possibilliontech.com', NULL, 'yahoo'),
(128, 4, 'Arjun', 'Arjun', 'kudupudies@rediff.com', NULL, 'yahoo'),
(129, 4, 'arun.srinivasan@gapbridgesoft.co', 'arun.srinivasan@gapbridgesoft.co', 'arun.srinivasan@gapbridgesoft.com', NULL, 'yahoo'),
(130, 4, 'Dpe, Microsoft, Arvato India', 'Dpe, Microsoft, Arvato India', 'Microsoft.Dpe@arvatoindia.com', NULL, 'yahoo'),
(131, 4, 'Ayyappa', 'Ayyappa', 'apps.ayyappa@gmail.com', NULL, 'yahoo'),
(132, 4, 'ayyappa41', 'ayyappa41', 'ayyappa41@gmail.com', NULL, 'yahoo'),
(133, 4, 'SrinivasB', 'SrinivasB', 'sreevassb@gmail.com', NULL, 'yahoo'),
(134, 4, 'srinivasB', 'srinivasB', 'bsreenivass@gmail.com', NULL, 'yahoo'),
(135, 4, 'srinivasB', 'srinivasB', 'srinivass.php@gmail.com', NULL, 'yahoo'),
(136, 4, 'Babji', 'Babji', 'sivakumar175@gmail.com', NULL, 'yahoo'),
(137, 4, 'venkatbanda', 'venkatbanda', 'banda_venkat@yahoo.co.in', NULL, 'yahoo'),
(138, 4, 'banda55999@gmail.com', 'banda55999@gmail.com', 'banda55999@gmail.com', NULL, 'yahoo'),
(139, 4, 'barclaysonline_transfers@msn.com', 'barclaysonline_transfers@msn.com', 'barclaysonline_transfers@msn.com', NULL, 'yahoo'),
(140, 4, 'Bhavani', 'Bhavani', 'bhavanisirigineedi@gmail.com', NULL, 'yahoo'),
(141, 4, 'bhavani_july9@yahoo.co.in', 'bhavani_july9@yahoo.co.in', 'bhavani_july9@yahoo.co.in', NULL, 'yahoo'),
(142, 4, 'bluechipitsolution@gmail.com', 'bluechipitsolution@gmail.com', 'bluechipitsolution@gmail.com', NULL, 'yahoo'),
(143, 4, 'bobby10_mca@yahoo.com', 'bobby10_mca@yahoo.com', 'bobby10_mca@yahoo.com', NULL, 'yahoo'),
(144, 4, 'srinivasboddu', 'srinivasboddu', 'boddu.srinivasu@gmail.com', NULL, 'yahoo'),
(145, 4, 'Brother', 'Brother', 'bsateessh@gmail.com', NULL, 'yahoo'),
(146, 4, 'bsrinivasu@hotmail.com', 'bsrinivasu@hotmail.com', 'bsrinivasu@hotmail.com', NULL, 'yahoo'),
(147, 4, 'Butchi', 'Butchi', 'v.butchi@gmail.com', NULL, 'yahoo'),
(148, 4, 'careers.eis@gmail.com', 'careers.eis@gmail.com', 'careers.eis@gmail.com', NULL, 'yahoo'),
(149, 4, 'chandra', 'chandra', 'chandra.kemisetti@gmail.com', NULL, 'yahoo'),
(150, 4, 'SudhaChary', 'SudhaChary', 'sudharanikasula@gmail.com', NULL, 'yahoo'),
(151, 4, 'chenna', 'chenna', 'madhira_chennareddy@yahoo.com', NULL, 'yahoo'),
(152, 4, 'chethan', 'chethan', 'chetan.k@technoendeavours.com', NULL, 'yahoo'),
(153, 4, 'VenkatChowdary', 'VenkatChowdary', 'subbu.may27@gmail.com', NULL, 'yahoo'),
(154, 4, 'vidyasagarChowdary', 'vidyasagarChowdary', 'vasireddisagar@gmail.com', NULL, 'yahoo'),
(155, 4, 'satishchowdary40', 'satishchowdary40', 'satishchowdary40@yahoo.com', NULL, 'yahoo'),
(156, 4, 'Sigmaedge Software Consulting (P', 'Sigmaedge Software Consulting (P', 'rajkumar@sigmaedge.com', NULL, 'yahoo'),
(157, 4, 'dasireddy@gmail.com', 'dasireddy@gmail.com', 'dasireddy@gmail.com', NULL, 'yahoo'),
(158, 4, 'deepthinaidu4@gmail.com', 'deepthinaidu4@gmail.com', 'deepthinaidu4@gmail.com', NULL, 'yahoo'),
(159, 4, 'Dinakar', 'Dinakar', 'dinakaran.ravichandran@possibilliontech.com', NULL, 'yahoo'),
(160, 4, 'dinakaran407@gmail.com', 'dinakaran407@gmail.com', 'dinakaran407@gmail.com', NULL, 'yahoo'),
(161, 4, 'Evernote', 'Evernote', 'sreevassb.82565df@m.evernote.com', NULL, 'yahoo'),
(162, 4, 'pavangadiraju', 'pavangadiraju', 'pavan.dtu@gmail.com', NULL, 'yahoo'),
(163, 4, 'Ganesh(iphone)', 'Ganesh(iphone)', 'ganesh.potnuru@possibilliontech.com', NULL, 'yahoo'),
(164, 4, 'Ganesh(iphone)', 'Ganesh(iphone)', 'ganeshpotnuru414@gmail.com', NULL, 'yahoo'),
(165, 4, 'Gopi', 'Gopi', 'gopikwithu@gmail.com', NULL, 'yahoo'),
(166, 4, 'gopi@jjplacements.com', 'gopi@jjplacements.com', 'gopi@jjplacements.com', NULL, 'yahoo'),
(167, 4, 'CharithaGudini', 'CharithaGudini', 'charitha@inventcorp.com', NULL, 'yahoo'),
(168, 4, 'Hassen', 'Hassen', 'hassensayyed@yahoo.co.in', NULL, 'yahoo'),
(169, 4, 'hina.cute8943@yahoo.com', 'hina.cute8943@yahoo.com', 'hina.cute8943@yahoo.com', NULL, 'yahoo'),
(170, 4, 'hr@gripsell.com', 'hr@gripsell.com', 'hr@gripsell.com', NULL, 'yahoo'),
(171, 4, 'hr@infovision.in', 'hr@infovision.in', 'hr@infovision.in', NULL, 'yahoo'),
(172, 4, 'hr@joblinksworld.com', 'hr@joblinksworld.com', 'hr@joblinksworld.com', NULL, 'yahoo'),
(173, 4, 'hr@samobilesoft.com', 'hr@samobilesoft.com', 'hr@samobilesoft.com', NULL, 'yahoo'),
(174, 4, 'SrInIvAssUDi', 'SrInIvAssUDi', 'sri.vas6sudi@gmail.com', NULL, 'yahoo'),
(175, 4, 'INFINITYINFORMATICS', 'INFINITYINFORMATICS', 'co@infinityinformatics.com', NULL, 'yahoo'),
(176, 4, 'SatyamInstitute', 'SatyamInstitute', 'mahiabhi@gmail.com', NULL, 'yahoo'),
(177, 4, 'jaanu.1619@gmail.com', 'jaanu.1619@gmail.com', 'jaanu.1619@gmail.com', NULL, 'yahoo'),
(178, 4, 'jayasuryasudheer@gmail.com', 'jayasuryasudheer@gmail.com', 'jayasuryasudheer@gmail.com', NULL, 'yahoo'),
(179, 4, 'Kalpana', 'Kalpana', 'Kalpana.singh@ntc-in.com', NULL, 'yahoo'),
(180, 4, 'Kapil.singh@hcl.com', 'Kapil.singh@hcl.com', 'Kapil.singh@hcl.com', NULL, 'yahoo'),
(181, 4, 'PavanKasturi', 'PavanKasturi', 'kasturipavank@gmail.com', NULL, 'yahoo'),
(182, 4, 'kasukurthi.vrc@gmail.com', 'kasukurthi.vrc@gmail.com', 'kasukurthi.vrc@gmail.com', NULL, 'yahoo'),
(183, 4, 'keerthitsl@gmail.com', 'keerthitsl@gmail.com', 'keerthitsl@gmail.com', NULL, 'yahoo'),
(184, 4, 'Kiran(BVR)', 'Kiran(BVR)', 'kiran_gayatri20@yahoo.co.in', NULL, 'yahoo'),
(185, 4, 'narayana', 'narayana', 'nkommireddy@gmail.com', NULL, 'yahoo'),
(186, 4, 'konetiramesh6@gmail.com', 'konetiramesh6@gmail.com', 'konetiramesh6@gmail.com', NULL, 'yahoo'),
(187, 4, 'Phani Shree Kongara', 'Phani Shree Kongara', 'PhaniShree.Kongara@ideaentity.com', NULL, 'yahoo'),
(188, 4, 'krishna@levonsystems.com', 'krishna@levonsystems.com', 'krishna@levonsystems.com', NULL, 'yahoo'),
(189, 4, 'vinaykumar', 'vinaykumar', 'vinaykumar.infy@gmail.com', NULL, 'yahoo'),
(190, 4, 'kirankumar', 'kirankumar', 'kirangayatri20@gmail.com', NULL, 'yahoo'),
(191, 4, 'satishkumar', 'satishkumar', 'satish.k.b.c@gmail.com', NULL, 'yahoo'),
(192, 4, 'SatishKumar', 'SatishKumar', 'smilesatthi@gmail.com', NULL, 'yahoo'),
(193, 4, 'kumarchoice@gmail.com', 'kumarchoice@gmail.com', 'kumarchoice@gmail.com', NULL, 'yahoo'),
(194, 4, 'lakshmi.chinni04@gmail.com', 'lakshmi.chinni04@gmail.com', 'lakshmi.chinni04@gmail.com', NULL, 'yahoo'),
(195, 4, 'leelavathiganta', 'leelavathiganta', 'leelavathiganta@gmail.com', NULL, 'yahoo'),
(196, 4, 'listen@tatadocomo.com', 'listen@tatadocomo.com', 'listen@tatadocomo.com', NULL, 'yahoo'),
(197, 4, 'KesavM', 'KesavM', 'mr.kesav@gmail.com', NULL, 'yahoo'),
(198, 4, 'M.Satish', 'M.Satish', 'msatish007@rocketmail.com', NULL, 'yahoo'),
(199, 4, 'SatyanarayanaMadduri', 'SatyanarayanaMadduri', 'mnagasatyanarayana@gmail.com', NULL, 'yahoo'),
(200, 4, 'MohitMahajan', 'MohitMahajan', 'mohit.mahajan@collabera.com', NULL, 'yahoo'),
(201, 4, 'malathi.kumari@gmail.com', 'malathi.kumari@gmail.com', 'malathi.kumari@gmail.com', NULL, 'yahoo'),
(202, 4, 'malathikumari@gmail.com', 'malathikumari@gmail.com', 'malathikumari@gmail.com', NULL, 'yahoo'),
(203, 4, 'Mallikarjun', 'Mallikarjun', 'coolmallikarjun@gmail.com', NULL, 'yahoo'),
(204, 4, 'Mallikarjun', 'Mallikarjun', 'mallikarjun_chintha19@yahoo.com', NULL, 'yahoo'),
(205, 4, 'mathamurali@gmail.com', 'mathamurali@gmail.com', 'mathamurali@gmail.com', NULL, 'yahoo'),
(206, 4, 'Me@Possibillion', 'Me@Possibillion', 'srinivas.boddu@possibilliontech.com', NULL, 'yahoo'),
(207, 4, 'meharunnisan@ed-ventures-online.', 'meharunnisan@ed-ventures-online.', 'meharunnisan@ed-ventures-online.com', NULL, 'yahoo'),
(208, 4, 'SwethaMinupala', 'SwethaMinupala', 'swetha.minupala@possibilliontech.com', NULL, 'yahoo'),
(209, 4, 'mn.satya@yahoo.co.in', 'mn.satya@yahoo.co.in', 'mn.satya@yahoo.co.in', NULL, 'yahoo'),
(210, 4, 'TarakaMohan', 'TarakaMohan', 'tarakram123@gmail.com', NULL, 'yahoo'),
(211, 4, 'Murali(iphone)', 'Murali(iphone)', 'murali.y337@gmail.com', NULL, 'yahoo'),
(212, 4, 'SatishMVV', 'SatishMVV', 'satishmvv2000@gmail.com', NULL, 'yahoo'),
(213, 4, 'myinterface@gmail.com', 'myinterface@gmail.com', 'myinterface@gmail.com', NULL, 'yahoo'),
(214, 4, 'Surendra', 'Surendra', 'surendra.nuni@axisbank.com', NULL, 'yahoo'),
(215, 4, 'nag.pandu45@gmail.com', 'nag.pandu45@gmail.com', 'nag.pandu45@gmail.com', NULL, 'yahoo'),
(216, 4, 'nagabindu@priimainfotech.com', 'nagabindu@priimainfotech.com', 'nagabindu@priimainfotech.com', NULL, 'yahoo'),
(217, 4, 'AyyappaNagubandi', 'AyyappaNagubandi', 'ayyappa@possibilliontech.com', NULL, 'yahoo'),
(218, 4, 'Naresh', 'Naresh', 'naresh@levonsys.com', NULL, 'yahoo'),
(219, 4, 'Narmada', 'Narmada', 'narmada@levonsys.com', NULL, 'yahoo'),
(220, 4, 'neeluchowdary85@gmail.com', 'neeluchowdary85@gmail.com', 'neeluchowdary85@gmail.com', NULL, 'yahoo'),
(221, 4, 'neeluneelimamba@gmail.com', 'neeluneelimamba@gmail.com', 'neeluneelimamba@gmail.com', NULL, 'yahoo'),
(222, 4, 'nodal.ap@tatadocomo.com', 'nodal.ap@tatadocomo.com', 'nodal.ap@tatadocomo.com', NULL, 'yahoo'),
(223, 4, 'SivaNuni', 'SivaNuni', 'siva.nuni@gmail.com', NULL, 'yahoo'),
(224, 4, 'panjarambabu@gmail.com', 'panjarambabu@gmail.com', 'panjarambabu@gmail.com', NULL, 'yahoo'),
(225, 4, 'phani', 'phani', 'phanikrishnama.naidu@gmail.com', NULL, 'yahoo'),
(226, 4, 'phpjobs@inventcorp.com', 'phpjobs@inventcorp.com', 'phpjobs@inventcorp.com', NULL, 'yahoo'),
(227, 4, 'pinkishah91@yahoo.com', 'pinkishah91@yahoo.com', 'pinkishah91@yahoo.com', NULL, 'yahoo'),
(228, 4, 'pp', 'pp', 'venkataprasad.avvari@gmail.com', NULL, 'yahoo'),
(229, 4, 'Pradeep', 'Pradeep', 'pradeep.mangipudi@gmail.com', NULL, 'yahoo'),
(230, 4, 'Angaraprasad', 'Angaraprasad', 'vara_015satya@yahoo.co.in', NULL, 'yahoo'),
(231, 4, 'hariprasad', 'hariprasad', 'hariprasad.cs@gmail.com', NULL, 'yahoo'),
(232, 4, 'HariPrasad', 'HariPrasad', 'sayhariprasad@gmail.com', NULL, 'yahoo'),
(233, 4, 'Prasad', 'Prasad', '14satyaprasad@gmail.com', NULL, 'yahoo'),
(234, 4, 'Pratap(MCA)', 'Pratap(MCA)', 'chandra_kemisetti@yahoo.com', NULL, 'yahoo'),
(235, 4, 'Praveen', 'Praveen', 'praveen_tsk_mdp@yahoo.co.in', NULL, 'yahoo'),
(236, 4, 'praveen', 'praveen', 'praveen.tsk@gmail.com', NULL, 'yahoo'),
(237, 4, 'priyachowdary1989@gmail.com', 'priyachowdary1989@gmail.com', 'priyachowdary1989@gmail.com', NULL, 'yahoo'),
(238, 4, 'Pushpalatha', 'Pushpalatha', 'pushpalatha.anumula@recroit.com', NULL, 'yahoo'),
(239, 4, 'radhipugathota@gmail.com', 'radhipugathota@gmail.com', 'radhipugathota@gmail.com', NULL, 'yahoo'),
(240, 4, 'AmarRaja', 'AmarRaja', 'amarnadh.devisetti@gmail.com', NULL, 'yahoo'),
(241, 4, 'Rajesh', 'Rajesh', 'rajeshyeleti@yahoo.com', NULL, 'yahoo'),
(242, 4, 'rajeshyeleti@hotmail.com', 'rajeshyeleti@hotmail.com', 'rajeshyeleti@hotmail.com', NULL, 'yahoo'),
(243, 4, 'Rajkumar', 'Rajkumar', 'rajkumar.karapa@gmail.com', NULL, 'yahoo'),
(244, 4, 'ramankrish.2008@gmail.com', 'ramankrish.2008@gmail.com', 'ramankrish.2008@gmail.com', NULL, 'yahoo'),
(245, 4, 'SurampudiRamesh', 'SurampudiRamesh', 'surampudirams@gmail.com', NULL, 'yahoo'),
(246, 4, 'uma sri rami reddy', 'uma sri rami reddy', 'umasri09@gmail.com', NULL, 'yahoo'),
(247, 4, 'RAMU', 'RAMU', 'beeraka.tarakaramarao@gmail.com', NULL, 'yahoo'),
(248, 4, 'rashmita@vlsconsulting.in', 'rashmita@vlsconsulting.in', 'rashmita@vlsconsulting.in', NULL, 'yahoo'),
(249, 4, 'AbhinavRavichander', 'AbhinavRavichander', 'abhinavravichander@gmail.com', NULL, 'yahoo'),
(250, 4, 'ravigade@yahoo.com', 'ravigade@yahoo.com', 'ravigade@yahoo.com', NULL, 'yahoo'),
(251, 4, 'RaviShankar', 'RaviShankar', 'mallidishankar@gmail.com', NULL, 'yahoo'),
(252, 4, 'AnandReddy', 'AnandReddy', 'anandreddy.mca@gmail.com', NULL, 'yahoo'),
(253, 4, 'RameshReddy', 'RameshReddy', 'reddyramesh27@gmail.com', NULL, 'yahoo'),
(254, 4, 'SrikanthReddy', 'SrikanthReddy', 'sriky.p@gmail.com', NULL, 'yahoo'),
(255, 4, 'Reddyramesh', 'Reddyramesh', 'ramesh.reddy@mphasis.com', NULL, 'yahoo'),
(256, 4, 'iQuestReshma', 'iQuestReshma', 'reshma@iquest-consultants.com', NULL, 'yahoo'),
(257, 4, 'rgottiga@aclatindia.com', 'rgottiga@aclatindia.com', 'rgottiga@aclatindia.com', NULL, 'yahoo'),
(258, 4, 'rmbros_murthy@yahoo.co.in', 'rmbros_murthy@yahoo.co.in', 'rmbros_murthy@yahoo.co.in', NULL, 'yahoo'),
(259, 4, 'RajendraRowthu', 'RajendraRowthu', 'meetrajendra@gmail.com', NULL, 'yahoo'),
(260, 4, 'rowthu@q-cent.com', 'rowthu@q-cent.com', 'rowthu@q-cent.com', NULL, 'yahoo'),
(261, 4, 'snayaraniroy', 'snayaraniroy', 'snayaroy88@gmail.com', NULL, 'yahoo'),
(262, 4, 'JyothiSabbu', 'JyothiSabbu', 'sjyothi@magna.in', NULL, 'yahoo'),
(263, 4, 'Sailu', 'Sailu', 'sailaja2306@yahoo.co.in', NULL, 'yahoo'),
(264, 4, 'RaviSankar', 'RaviSankar', 'shankar_jan30@yahoo.co.in', NULL, 'yahoo'),
(265, 4, 'sarumathi.k@growelsoft.com', 'sarumathi.k@growelsoft.com', 'sarumathi.k@growelsoft.com', NULL, 'yahoo'),
(266, 4, 'sarumathi.k@growelsoftech.com', 'sarumathi.k@growelsoftech.com', 'sarumathi.k@growelsoftech.com', NULL, 'yahoo'),
(267, 4, 'Sasi', 'Sasi', 'sasirekha.chowdary@gmail.com', NULL, 'yahoo'),
(268, 4, 'satish', 'satish', 'mandrusatish@gmail.com', NULL, 'yahoo'),
(269, 4, 'venkat', 'venkat', 'satish.laveti@gmail.com', NULL, 'yahoo'),
(270, 4, 'satishsurampudi19@gmail.com', 'satishsurampudi19@gmail.com', 'satishsurampudi19@gmail.com', NULL, 'yahoo'),
(271, 4, 'satya_sridhark@yahoo.co.in', 'satya_sridhark@yahoo.co.in', 'satya_sridhark@yahoo.co.in', NULL, 'yahoo'),
(272, 4, 'satyapriya@vsplash.net', 'satyapriya@vsplash.net', 'satyapriya@vsplash.net', NULL, 'yahoo'),
(273, 4, 'satyasridhark@gmail.com', 'satyasridhark@gmail.com', 'satyasridhark@gmail.com', NULL, 'yahoo'),
(274, 4, 'hassensayyed', 'hassensayyed', 'hassenforyou@gmail.com', NULL, 'yahoo'),
(275, 4, 'shilpa.artech@gmail.com', 'shilpa.artech@gmail.com', 'shilpa.artech@gmail.com', NULL, 'yahoo'),
(276, 4, 'ArchanaShiny', 'ArchanaShiny', 'archana.shiny@isymmetry.com', NULL, 'yahoo'),
(277, 4, 'shiny.itrec@gmail.com', 'shiny.itrec@gmail.com', 'shiny.itrec@gmail.com', NULL, 'yahoo'),
(278, 4, 'AbhishekSingh', 'AbhishekSingh', 'abhishek.singh@abcconsultants.in', NULL, 'yahoo'),
(279, 4, 'siva.nuni@icicilombard.com', 'siva.nuni@icicilombard.com', 'siva.nuni@icicilombard.com', NULL, 'yahoo'),
(280, 4, 'Sivanandam', 'Sivanandam', 'sivanandambhogi@gmail.com', NULL, 'yahoo'),
(281, 4, 'Advent Global Solutions', 'Advent Global Solutions', 'mrudula.tammineni@adventglobal.com', NULL, 'yahoo'),
(282, 4, 'somisettydevasena@gmail.com', 'somisettydevasena@gmail.com', 'somisettydevasena@gmail.com', NULL, 'yahoo'),
(283, 4, 'sravssri49@gmail.com', 'sravssri49@gmail.com', 'sravssri49@gmail.com', NULL, 'yahoo'),
(284, 4, 'sreevassb@rediff.com', 'sreevassb@rediff.com', 'sreevassb@rediff.com', NULL, 'yahoo'),
(285, 4, 'sreevassb@yahoo.com', 'sreevassb@yahoo.com', 'sreevassb@yahoo.com', NULL, 'yahoo'),
(286, 4, 'Sridhar(PHP)', 'Sridhar(PHP)', 'sridharsuman@gmail.com', NULL, 'yahoo'),
(287, 4, 'Srikanth', 'Srikanth', 'srikanth_coollovely@yahoo.com', NULL, 'yahoo'),
(288, 4, 'Srikanth(Android)', 'Srikanth(Android)', 'shrikanthmca@gmail.com', NULL, 'yahoo'),
(289, 4, 'Srikanth(MCA)', 'Srikanth(MCA)', 'ngv.srikanth@gmail.com', NULL, 'yahoo'),
(290, 4, 'srinarayana789@gmail.com', 'srinarayana789@gmail.com', 'srinarayana789@gmail.com', NULL, 'yahoo'),
(291, 4, 'srinivas_chowdarymca@rediff.com', 'srinivas_chowdarymca@rediff.com', 'srinivas_chowdarymca@rediff.com', NULL, 'yahoo'),
(292, 4, 'srinivas.boddu@medicaledge.in', 'srinivas.boddu@medicaledge.in', 'srinivas.boddu@medicaledge.in', NULL, 'yahoo'),
(293, 4, 'srivassb@gmail.com', 'srivassb@gmail.com', 'srivassb@gmail.com', NULL, 'yahoo'),
(294, 4, 'srivassb@rediff.com', 'srivassb@rediff.com', 'srivassb@rediff.com', NULL, 'yahoo'),
(295, 4, 'srivassb@yahoo.com', 'srivassb@yahoo.com', 'srivassb@yahoo.com', NULL, 'yahoo'),
(296, 4, 'Subbuphp', 'Subbuphp', 'subbup.php@gmail.com', NULL, 'yahoo'),
(297, 4, 'subbu.1983@gmail.com', 'subbu.1983@gmail.com', 'subbu.1983@gmail.com', NULL, 'yahoo'),
(298, 4, 'subbu(csc)', 'subbu(csc)', 'subbu_cheboli@yahoo.com', NULL, 'yahoo'),
(299, 4, 'sunitas@sraossinc.com', 'sunitas@sraossinc.com', 'sunitas@sraossinc.com', NULL, 'yahoo'),
(300, 4, 'Surendra', 'Surendra', 'surendra.nuni@gmail.com', NULL, 'yahoo'),
(301, 4, 'Surendra_mdp', 'Surendra_mdp', 'surendra140@gmail.com', NULL, 'yahoo'),
(302, 4, 'swaroop.m9', 'swaroop.m9', 'swaroop.m9@gmail.com', NULL, 'yahoo'),
(303, 4, 'swathi.mogallapu@gmail.com', 'swathi.mogallapu@gmail.com', 'swathi.mogallapu@gmail.com', NULL, 'yahoo'),
(304, 4, 'swati4.pearl@gmail.com', 'swati4.pearl@gmail.com', 'swati4.pearl@gmail.com', NULL, 'yahoo'),
(305, 4, 'Swetha', 'Swetha', 'sweta.minupala@gmail.com', NULL, 'yahoo'),
(306, 4, 'swetha.minupala@gmail.com', 'swetha.minupala@gmail.com', 'swetha.minupala@gmail.com', NULL, 'yahoo'),
(307, 4, 'sivateja', 'sivateja', 'sivateja89@gmail.com', NULL, 'yahoo'),
(308, 4, 'thyagu.mba@gmail.com', 'thyagu.mba@gmail.com', 'thyagu.mba@gmail.com', NULL, 'yahoo'),
(309, 4, 'CharlesTimothy', 'CharlesTimothy', 'charles.timothy@randstad.in', NULL, 'yahoo'),
(310, 4, 'Usha', 'Usha', 'rani.usha15@gmail.com', NULL, 'yahoo'),
(311, 4, 'V.Srinivas', 'V.Srinivas', 'venitheti_srinivas@yahoo.com', NULL, 'yahoo'),
(312, 4, 'varaprasad', 'varaprasad', 'varaprasadtalla@gmail.com', NULL, 'yahoo'),
(313, 4, 'veera.triveni@gmail.com', 'veera.triveni@gmail.com', 'veera.triveni@gmail.com', NULL, 'yahoo'),
(314, 4, 'venkat', 'venkat', 'banda.venkat@gmail.com', NULL, 'yahoo'),
(315, 4, 'Venkatesh(mca)', 'Venkatesh(mca)', 'nallakula_venkatesh@yahoo.com', NULL, 'yahoo'),
(316, 4, 'Vianay', 'Vianay', 'i.vinaykumar@yahoo.co.in', NULL, 'yahoo'),
(317, 4, 'vinaykumar.infi@gmail.com', 'vinaykumar.infi@gmail.com', 'vinaykumar.infi@gmail.com', NULL, 'yahoo'),
(318, 4, 'vinod.kumar@possibilliontech.com', 'vinod.kumar@possibilliontech.com', 'vinod.kumar@possibilliontech.com', NULL, 'yahoo'),
(319, 4, 'vvantipalli@csc.com', 'vvantipalli@csc.com', 'vvantipalli@csc.com', NULL, 'yahoo'),
(320, 4, 'RajeshYeleti', 'RajeshYeleti', 'rajeshyeleti@gmail.com', NULL, 'yahoo'),
(321, 4, 'krishnavardhan', 'reddy', 'krishnavardhan@purpletalk.com', '+89-865-465-4213', 'office'),
(322, 4, 'Tamanna', 'Bhatia', 'tamanna@gmail.com', '+21-231-231-2312', 'facebook'),
(323, 4, 'Trisha', 'gumte', 'trisha@gmail.com', '+23-423-423-4234', 'twitter'),
(324, 4, 'bharadwaj', 'gampa', 'bharadwaj@ppurpletalk.com', '+91-897-767-2999', 'purpletalk'),
(325, 4, 'sudheer', 'pol', 'sudheer.p@purpletalk.com', '+91-967-673-6284', 'purpletalk'),
(326, 4, 'phani', 'tanniru', 'phanindra@purpletalk.com', '+91-995-108-4686', 'purpletalk'),
(327, 4, 'naresh', 'gumte', 'naresh@purpletalk.com', '+91-998-514-3256', 'purpletalk');

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
(2, 4, 'King anna'),
(3, 4, 'Krishnavardhan'),
(4, 4, 'Tea time daily');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sp_group_members`
--

INSERT INTO `sp_group_members` (`id`, `group_id`, `group_member_id`) VALUES
(1, 2, 5),
(2, 2, 6),
(5, 2, 7),
(10, 2, 8),
(11, 2, 9),
(13, 2, 10),
(14, 4, 324),
(15, 4, 326),
(16, 4, 325),
(17, 4, 327);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sp_users`
--

INSERT INTO `sp_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `cdate`, `status`) VALUES
(4, 'mahesh', '49bb197bec17b7d20b2df6b1f3c3434a', 'mahesh', 'kondapalli', 'mahesh.k@purpletalk.com', '812-177-7999', '2013-06-04 16:37:15', 0),
(6, 'naresh', '7cb4ffbb2635356600af00166decc350', 'naresh', 'gumte', 'naresh@pt.com', '789-554-8554', '2013-06-04 16:58:58', 0),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'naresh', 'gumte', 'nareshgumte412@gmail.com', '9985143256', NULL, 0),
(8, 'NareshGumte', '7cb4ffbb2635356600af00166decc350', 'naresh', 'gumte', 'naresh@purpletalk.com', '+91-998-514-3256', '2013-06-06 16:15:21', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sp_events`
--
ALTER TABLE `sp_events`
  ADD CONSTRAINT `sp_events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`);

--
-- Constraints for table `sp_friends`
--
ALTER TABLE `sp_friends`
  ADD CONSTRAINT `sp_friends_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`);

--
-- Constraints for table `sp_groups`
--
ALTER TABLE `sp_groups`
  ADD CONSTRAINT `sp_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sp_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sp_group_members`
--
ALTER TABLE `sp_group_members`
  ADD CONSTRAINT `sp_group_members_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `sp_groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;
