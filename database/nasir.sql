/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 8.0.12 : Database - nasir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nasir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nasir`;

/*Table structure for table `tbdata` */

DROP TABLE IF EXISTS `tbdata`;

CREATE TABLE `tbdata` (
  `iddata` int(9) NOT NULL AUTO_INCREMENT,
  `no` varchar(25) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ibu` varchar(25) DEFAULT NULL,
  `norek` varchar(25) DEFAULT NULL,
  `nokk` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `isvalid` tinyint(4) DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT '1',
  `isdelete` tinyint(4) DEFAULT '0',
  `createdby` int(9) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(9) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddata`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `tbdata` */

insert  into `tbdata`(`iddata`,`no`,`nama`,`ibu`,`norek`,`nokk`,`alamat`,`isvalid`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values 
(1,'210','AGUSTIN','ROPIK','0400516125','3578090101089406','SEMOLOWARU SELATAN 13/37 RW 03 RT 003',1,1,0,1,'2018-10-21 17:43:50',1,'2018-10-21 17:43:50',''),
(2,'211','CHABIBAH','SULAISAH','0400519455','3578090505090016','SEMOLO WARU UTARA 2 NO 1 RW 02 RT 007',1,1,0,1,'2018-10-21 18:01:00',1,'2018-10-21 18:01:00',''),
(3,'212','ENDANG GEMIATI','SUKARMI','0400516121','357809150312003','JL SEMOLOWARU SELATAN 1 NO 35B RW 03 RT 005',1,1,0,NULL,'2018-10-24 00:23:13',NULL,'2018-10-24 00:23:13',''),
(4,'213','ERNA IRAWATI','SUNDARI','0400519452','3522092001076206','SEMOLOWARU SELATAN II NO 22 RW 03 RT 002',1,1,0,1,'2018-10-24 20:13:54',1,'2018-10-24 20:13:54',''),
(5,'214','FITRI LESTARI','AMINAH','0400516124','3578090611140015','SEMOLOWARU GG BUNTU NO 18 RW 02 RT 06',1,1,0,1,'2018-10-24 20:26:59',1,'2018-10-24 20:26:59',''),
(6,'215','GINEM','DINAH','0400519446','3578090101080359','JL SEMOLOWARU SELATAN 1 NO 76 RW 03 RT 005',1,1,0,1,'2018-10-24 20:41:32',1,'2018-10-24 20:41:32',''),
(7,'216','IDAWATI','NGATINAH','0400966058','3578090101088195','SEMOLOWARU UTARA 3A NO 8 RW 01 RT 006',1,1,0,1,'2018-10-24 20:49:44',1,'2018-10-24 20:49:44',''),
(8,'217','JANAINAH','KOMSATUN','0400519434','3578090301083406','SEMOLOWARU UTARA 1 NO 94 RW 01 RT 003',1,1,0,1,'2018-10-24 20:53:37',1,'2018-10-24 20:53:37',''),
(9,'218','KASTOYAH','KASTAMA','0400966060','3578090201082011','JL SEMOLOWARU SELATAN 1 NO 74 RW 03 RT 005',1,1,0,1,'2018-10-24 20:57:11',1,'2018-10-24 20:57:11',''),
(10,'219','LELI TRUSILOWATI','NUKIDAH','0400519463','3578090310110041','JL SEMOLOWARU SELATAN 1 NO 28 D RW 03 RT 001',1,1,0,1,'2018-10-24 21:14:13',1,'2018-10-24 21:14:13',''),
(11,'220','LIANA TIYAS RAMININGSIH','DJOEWARTI','0400966057','3578090101086352','SEMOLO WARU NO 49 RW 02 RT 007',1,1,0,1,'2018-10-24 21:21:55',1,'2018-10-24 21:21:55',''),
(12,'221','MAMIK SUSILOWATI','NURJANAH','0400519457','3517100311070280','SEMOLOWARU UTARA  4 NO 5 RW 02 RT 010',1,1,0,1,'2018-10-24 21:26:42',1,'2018-10-24 21:26:42',''),
(13,'222','MARSIYANI','TRITIS','0400519438','3578090301085028','JL SEMOLOWARU SELATAN 1/38 RW 03 RT 005',1,1,0,1,'2018-10-24 21:29:43',1,'2018-10-24 21:29:43',''),
(14,'223','MIATI','MUJIATI','0400519440','3578090101087737','SEMOLOWARU UTARA 5 NO 15 RW 02 RT 009',1,1,0,1,'2018-10-24 21:34:41',1,'2018-10-24 21:34:41',''),
(15,'224','MUYASSAROH','KATUN','0400519461','3578090101082632','SEMOLOWARU 81 RW 02 RT 005',1,1,0,1,'2018-10-24 21:38:55',1,'2018-10-24 21:38:55',''),
(16,'225','MUZAROFAH','MUSINI','0400519451','3578090201083723','SEMOLOWARU UTARA 3/24A RW 01 RT 004',1,1,0,1,'2018-10-24 21:42:04',1,'2018-10-24 21:42:04',''),
(17,'227','PARWATI','MISIYAH','0400516122','1802170409080008','SEMOLOWARU SELATAN II NO 20 RW 03 RT 002',1,1,0,1,'2018-10-24 21:45:44',1,'2018-10-24 21:45:44',''),
(18,'228','RIKA NURIYANTI','SARTINI','0400966059','3578090101086629','SEMOLOWARU SELATAN II NO 22 RW 03 RT 002',1,1,0,1,'2018-10-24 21:49:34',1,'2018-10-24 21:49:34',''),
(19,'229','RUBIANI','KASMINA','0400516127','3578090201082411','SEMOLOWARU UTARA 1 NO 84 RW 01 RT 003',1,1,0,1,'2018-10-24 21:56:09',1,'2018-10-24 21:56:09',''),
(20,'231','SAMI','SARIAMAH','0400519437','3578090201080402','SEMOLOWARU UTARA 1 NO 137 RW 01 RT 001',1,1,0,1,'2018-10-24 22:01:35',1,'2018-10-24 22:01:35',''),
(21,'232','SARMI','MAIMUNAH','0400519435','3578090301087262','JL SEMOLOWARU SELATAN I / 57 RW 03 RT 005',1,1,0,1,'2018-10-24 22:09:08',1,'2018-10-24 22:09:08',''),
(22,'233','SATUMA','PATMA','0400519441','35261329090014','SEMOLOWARU SELATAN I / 43 RW 03 RT 003',1,1,0,1,'2018-10-24 22:12:11',1,'2018-10-24 22:12:11',''),
(23,'234','SAUDAH','SITI CHALIMAH','0400519450','3578090101088042','SEMOLOWARU UTARA 1 NO 96 RW 01 RT 003',1,1,0,1,'2018-10-24 22:15:15',1,'2018-10-24 22:15:15',''),
(24,'235','SIISROWIYAH','DAIMAH','0400519432','3578090101086455','SEMOLOWARU UTARA 4 NO 23 RW 01 RT 003',1,1,0,1,'2018-10-24 22:18:13',1,'2018-10-24 22:18:13',''),
(25,'236','SITI MAYANGSARI','KARTODI KROMO','0400519430','3578092411110002','JL SEMOLOWARU SELATAN 1/20 RW 03 RT 001',1,1,0,1,'2018-10-24 22:21:31',1,'2018-10-24 22:21:31',''),
(26,'237','SITI SUNDAWATI','MARSIATUN','0400519453','3578090101080199','JL SEMOLOWARU SELATAN 1/20 RW 03 RT 001',1,1,0,1,'2018-10-25 07:30:47',1,'2018-10-25 07:30:47',''),
(27,'238','SITI YADAINAH','SOLICHAH','0400519439','3578090301084740','SEMOLOWARU SELATAN 1 / 37B RW 03 RT 003',1,1,0,1,'2018-10-25 07:34:01',1,'2018-10-25 07:34:01',''),
(28,'239','SOLEKHA','SUTIK','0400519444','3518123008020574','JL SEMOLOWARU SELATAN I / 53 RW 03 RT 007',1,1,0,1,'2018-10-25 07:37:06',1,'2018-10-25 07:37:06',''),
(29,'240','SRI UTAMI','SUMILAH','0400519447','3578090302110003','SEMOLOWARU SELATAN 13 / 18 RW 03 RT 003',1,1,0,1,'2018-10-25 07:39:32',1,'2018-10-25 07:39:32',''),
(30,'241','SRI WIDHOWATI','SUMILAH','0400519444','3518123008020574','JL SEMOLOWARU SELATAN I / 53 RW 03 RT 007',1,1,0,1,'2018-10-25 07:44:45',1,'2018-10-25 07:44:45',''),
(31,'242','SULIKAH','NGATENI','0400519443','3517100311070386','JL SEMOLOWARU SELATAN 1 NO 20 RW 03 RT 001',1,1,0,1,'2018-10-25 07:49:57',1,'2018-10-25 07:49:57',''),
(32,'243','SULISTYARI','SAESTI','0400966061','357809030182434','SEMOLOWARU UTARA  4 A NO 14 RW 02 RT 010',1,1,0,1,'2018-10-25 07:52:36',1,'2018-10-25 07:52:36',''),
(33,'244','SUMIATUN','PONIJAH','0400519459','3578090101088042','SEMOLOWARU UTARA 1 NO 96 RW 01 RT 003',1,1,0,1,'2018-10-25 07:55:27',1,'2018-10-25 07:55:27',''),
(34,'245','SUPRIYATIN','SAEMAH','0400516123','3517010502130000','SEMOLOWARU SELATAN II NO 20 RW 03 RT 002',1,1,0,1,'2018-10-25 07:58:16',1,'2018-10-25 07:58:16',''),
(35,'246','SUSIATI','ROKANA','0400519458','3516142101030152','SEMOLOWARU SELATAN RW 03 RT 002',1,1,0,1,'2018-10-25 08:01:22',1,'2018-10-25 08:01:22',''),
(36,'247','UKHTI NASIKAH','PATONAH','0400519454','3523141103069828','SEMOLOWARU SELATAN RW 03 RT 003',1,1,0,1,'2018-10-25 08:03:50',1,'2018-10-25 08:03:50',''),
(37,'248','WAGIYEM','UMI KALSUM','0400519436','3578090101085688','SEMOLOWARU NO 49 RW 002 RT 07',1,1,0,1,'2018-10-25 08:06:29',1,'2018-10-25 08:06:29',''),
(38,'249','YANTI','TARMANI','0400519445','3578090201081815','SEMOLOWARU UTARA 4/10 RW 02 RT 008',1,1,0,1,'2018-10-25 08:08:38',1,'2018-10-25 08:08:38','');

/*Table structure for table `tbdatadetail` */

DROP TABLE IF EXISTS `tbdatadetail`;

CREATE TABLE `tbdatadetail` (
  `iddetail` int(9) NOT NULL AUTO_INCREMENT,
  `iddata` int(9) NOT NULL,
  `idkriteria` int(9) NOT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `nilaialias` int(9) DEFAULT NULL,
  PRIMARY KEY (`iddetail`),
  KEY `fk_iddata_datadetail` (`iddata`),
  KEY `fk_idkriteria_datadetail` (`idkriteria`),
  CONSTRAINT `fk_iddata_datadetail` FOREIGN KEY (`iddata`) REFERENCES `tbdata` (`iddata`),
  CONSTRAINT `fk_idkriteria_datadetail` FOREIGN KEY (`idkriteria`) REFERENCES `tbkriteria` (`idkriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=305 DEFAULT CHARSET=latin1;

/*Data for the table `tbdatadetail` */

insert  into `tbdatadetail`(`iddetail`,`iddata`,`idkriteria`,`nilai`,`nilaialias`) values 
(1,1,1,'7.5',4),
(2,1,2,'1',1),
(3,1,3,'1',1),
(4,1,4,'2',2),
(5,1,5,'1',1),
(6,1,6,'3',3),
(7,1,7,'1',1),
(8,1,8,'600000',3),
(9,2,1,'15',3),
(10,2,2,'1',1),
(11,2,3,'1',1),
(12,2,4,'1',1),
(13,2,5,'1',1),
(14,2,6,'1',1),
(15,2,7,'1',1),
(16,2,8,'600000',3),
(17,3,1,'44',2),
(18,3,2,'4',4),
(19,3,3,'1',1),
(20,3,4,'1',1),
(21,3,5,'1',1),
(22,3,6,'1',1),
(23,3,7,'1',1),
(24,3,8,'600000',3),
(25,4,1,'12',4),
(26,4,2,'1',1),
(27,4,3,'1',1),
(28,4,4,'2',2),
(29,4,5,'1',1),
(30,4,6,'1',1),
(31,4,7,'1',1),
(32,4,8,'600000',3),
(33,5,1,'9',4),
(34,5,2,'2',2),
(35,5,3,'1',1),
(36,5,4,'1',1),
(37,5,5,'1',1),
(38,5,6,'1',1),
(39,5,7,'1',1),
(40,5,8,'1000000',2),
(41,6,1,'12',4),
(42,6,2,'1',1),
(43,6,3,'1',1),
(44,6,4,'1',1),
(45,6,5,'2',2),
(46,6,6,'1',1),
(47,6,7,'1',1),
(48,6,8,'600000',3),
(49,7,1,'15',3),
(50,7,2,'2',2),
(51,7,3,'1',1),
(52,7,4,'1',1),
(53,7,5,'2',2),
(54,7,6,'1',1),
(55,7,7,'1',1),
(56,7,8,'600000',3),
(57,8,1,'12',4),
(58,8,2,'3',3),
(59,8,3,'2',2),
(60,8,4,'2',2),
(61,8,5,'1',1),
(62,8,6,'1',1),
(63,8,7,'1',1),
(64,8,8,'600000',3),
(65,9,1,'7.5',4),
(66,9,2,'1',1),
(67,9,3,'1',1),
(68,9,4,'2',2),
(69,9,5,'3',3),
(70,9,6,'1',1),
(71,9,7,'1',1),
(72,9,8,'600000',3),
(73,10,1,'12',4),
(74,10,2,'1',1),
(75,10,3,'1',1),
(76,10,4,'2',2),
(77,10,5,'2',2),
(78,10,6,'1',1),
(79,10,7,'1',1),
(80,10,8,'600000',3),
(81,11,1,'15',3),
(82,11,2,'1',1),
(83,11,3,'2',2),
(84,11,4,'2',2),
(85,11,5,'1',1),
(86,11,6,'1',1),
(87,11,7,'1',1),
(88,11,8,'600000',3),
(89,12,1,'15',3),
(90,12,2,'1',1),
(91,12,3,'1',1),
(92,12,4,'2',2),
(93,12,5,'1',1),
(94,12,6,'1',1),
(95,12,7,'1',1),
(96,12,8,'600000',3),
(97,13,1,'9',4),
(98,13,2,'1',1),
(99,13,3,'1',1),
(100,13,4,'1',1),
(101,13,5,'1',1),
(102,13,6,'1',1),
(103,13,7,'1',1),
(104,13,8,'600000',3),
(105,14,1,'15',3),
(106,14,2,'1',1),
(107,14,3,'1',1),
(108,14,4,'1',1),
(109,14,5,'1',1),
(110,14,6,'1',1),
(111,14,7,'1',1),
(112,14,8,'300000 ',1),
(113,15,1,'15',3),
(114,15,2,'1',1),
(115,15,3,'1',1),
(116,15,4,'2',2),
(117,15,5,'1',1),
(118,15,6,'1',1),
(119,15,7,'1',1),
(120,15,8,'600000',3),
(121,16,1,'12',4),
(122,16,2,'1',1),
(123,16,3,'1',1),
(124,16,4,'2',2),
(125,16,5,'1',1),
(126,16,6,'1',1),
(127,16,7,'1',1),
(128,16,8,'600000',3),
(129,17,1,'12',4),
(130,17,2,'3',3),
(131,17,3,'1',1),
(132,17,4,'1',1),
(133,17,5,'1',1),
(134,17,6,'1',1),
(135,17,7,'1',1),
(136,17,8,'600000',3),
(137,18,1,'12',4),
(138,18,2,'3',3),
(139,18,3,'3',3),
(140,18,4,'2',2),
(141,18,5,'1',1),
(142,18,6,'1',1),
(143,18,7,'1',1),
(144,18,8,'600000',3),
(145,19,1,'6',4),
(146,19,2,'1',1),
(147,19,3,'1',1),
(148,19,4,'2',2),
(149,19,5,'1',1),
(150,19,6,'1',1),
(151,19,7,'1',1),
(152,19,8,'600000',3),
(153,20,1,'50',2),
(154,20,2,'1',1),
(155,20,3,'1',1),
(156,20,4,'1',1),
(157,20,5,'2',2),
(158,20,6,'1',1),
(159,20,7,'1',1),
(160,20,8,'1000000',2),
(161,21,1,'12',4),
(162,21,2,'1',1),
(163,21,3,'1',1),
(164,21,4,'2',2),
(165,21,5,'1',1),
(166,21,6,'1',1),
(167,21,7,'1',1),
(168,21,8,'300000',4),
(169,22,1,'24',2),
(170,22,2,'3',3),
(171,22,3,'1',1),
(172,22,4,'2',2),
(173,22,5,'1',1),
(174,22,6,'1',1),
(175,22,7,'1',1),
(176,22,8,'600000',3),
(177,23,1,'84',1),
(178,23,2,'3',3),
(179,23,3,'1',1),
(180,23,4,'1',1),
(181,23,5,'2',2),
(182,23,6,'1',1),
(183,23,7,'1',1),
(184,23,8,'1000000',2),
(185,24,1,'7.5',4),
(186,24,2,'1',1),
(187,24,3,'1',1),
(188,24,4,'2',2),
(189,24,5,'1',1),
(190,24,6,'1',1),
(191,24,7,'1',1),
(192,24,8,'600000',3),
(193,25,1,'7.5',4),
(194,25,2,'1',1),
(195,25,3,'1',1),
(196,25,4,'1',1),
(197,25,5,'1',1),
(198,25,6,'1',1),
(199,25,7,'1',1),
(200,25,8,'600000',3),
(201,26,1,'15',3),
(202,26,2,'3',3),
(203,26,3,'1',1),
(204,26,4,'1',1),
(205,26,5,'1',1),
(206,26,6,'1',1),
(207,26,7,'1',1),
(208,26,8,'300000',4),
(209,27,1,'12',4),
(210,27,2,'3',3),
(211,27,3,'1',1),
(212,27,4,'1',1),
(213,27,5,'1',1),
(214,27,6,'1',1),
(215,27,7,'1',1),
(216,27,8,'600000',3),
(217,28,1,'12',4),
(218,28,2,'1',1),
(219,28,3,'1',1),
(220,28,4,'2',2),
(221,28,5,'1',1),
(222,28,6,'1',1),
(223,28,7,'1',1),
(224,28,8,'600000',3),
(225,29,1,'12',4),
(226,29,2,'3',3),
(227,29,3,'1',1),
(228,29,4,'2',2),
(229,29,5,'1',1),
(230,29,6,'1',1),
(231,29,7,'1',1),
(232,29,8,'600000',3),
(233,30,1,'12',4),
(234,30,2,'3',3),
(235,30,3,'1',1),
(236,30,4,'2',2),
(237,30,5,'1',1),
(238,30,6,'1',1),
(239,30,7,'1',1),
(240,30,8,'600000',3),
(241,31,1,'12',4),
(242,31,2,'3',3),
(243,31,3,'4',4),
(244,31,4,'2',2),
(245,31,5,'1',1),
(246,31,6,'1',1),
(247,31,7,'1',1),
(248,31,8,'600000',3),
(249,32,1,'15',3),
(250,32,2,'1',1),
(251,32,3,'1',1),
(252,32,4,'1',1),
(253,32,5,'2',2),
(254,32,6,'1',1),
(255,32,7,'1',1),
(256,32,8,'300000',4),
(257,33,1,'7.5',4),
(258,33,2,'1',1),
(259,33,3,'1',1),
(260,33,4,'2',2),
(261,33,5,'1',1),
(262,33,6,'1',1),
(263,33,7,'1',1),
(264,33,8,'300000',4),
(265,34,1,'15',3),
(266,34,2,'3',3),
(267,34,3,'1',1),
(268,34,4,'2',2),
(269,34,5,'1',1),
(270,34,6,'1',1),
(271,34,7,'1',1),
(272,34,8,'300000',4),
(273,35,1,'12',4),
(274,35,2,'3',3),
(275,35,3,'1',1),
(276,35,4,'2',2),
(277,35,5,'1',1),
(278,35,6,'1',1),
(279,35,7,'1',1),
(280,35,8,'600000',3),
(281,36,1,'12',4),
(282,36,2,'1',1),
(283,36,3,'1',1),
(284,36,4,'2',2),
(285,36,5,'2',2),
(286,36,6,'1',1),
(287,36,7,'1',1),
(288,36,8,'600000',3),
(289,37,1,'15',3),
(290,37,2,'3',3),
(291,37,3,'4',4),
(292,37,4,'2',2),
(293,37,5,'1',1),
(294,37,6,'1',1),
(295,37,7,'1',1),
(296,37,8,'600000',3),
(297,38,1,'12',4),
(298,38,2,'1',1),
(299,38,3,'1',1),
(300,38,4,'1',1),
(301,38,5,'1',1),
(302,38,6,'1',1),
(303,38,7,'1',1),
(304,38,8,'600000',3);

/*Table structure for table `tbkriteria` */

DROP TABLE IF EXISTS `tbkriteria`;

CREATE TABLE `tbkriteria` (
  `idkriteria` int(9) NOT NULL AUTO_INCREMENT,
  `kodekriteria` varchar(50) DEFAULT NULL,
  `namakriteria` varchar(255) DEFAULT NULL,
  `Bobot` int(9) DEFAULT NULL,
  `sangatmampu` varchar(255) DEFAULT NULL,
  `cukupmampu` varchar(255) DEFAULT NULL,
  `tidakmampu` varchar(255) DEFAULT NULL,
  `sangattidakmampu` varchar(255) DEFAULT NULL,
  `isnumeric` tinyint(1) DEFAULT '0',
  `isactive` tinyint(1) DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0',
  `createdby` int(9) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(9) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idkriteria`),
  KEY `fk_usercreated_kriteria` (`createdby`),
  CONSTRAINT `fk_usercreated_kriteria` FOREIGN KEY (`createdby`) REFERENCES `tbuser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbkriteria` */

insert  into `tbkriteria`(`idkriteria`,`kodekriteria`,`namakriteria`,`Bobot`,`sangatmampu`,`cukupmampu`,`tidakmampu`,`sangattidakmampu`,`isnumeric`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values 
(1,'LUAS_LANTAI','Luas Lantai',4,'80','21','13','12',1,1,0,1,'2018-10-21 13:58:54',1,'2018-10-21 13:58:54','Kriteria Luas Lantai'),
(2,'JENIS_LANTAI','Jenis Lantai',4,'Porselen','Semen / Cor','Ubin Biasa','Tanah',0,1,0,1,'2018-10-21 14:00:27',1,'2018-10-21 14:00:27','Kriteria Jenis Lantai'),
(3,'JENIS_DINDING','Jenis Dinding',3,'Tembok Dengan Plester','Tembok Tanpa Plester','Kayu','Bambu / Gedek',0,1,0,1,'2018-10-21 14:01:45',1,'2018-10-21 14:01:45','Kriteria Jenis Dinding'),
(4,'FASILITAS_KM','Fasilitas Kamar Mandi',2,'Septi Tank / Milik Sendiri','Milik Umum','Lubang Tanah','Sungai',0,1,0,1,'2018-10-21 14:02:42',1,'2018-10-21 14:02:42','Kriteria Fasilitas Kamar Mandi'),
(5,'SUMBER_AIR','Sumber Air Minum',2,'Air Isi Ulang','PDAM','Air Sumur','Air Sungai',0,1,0,1,'2018-10-21 14:03:28',1,'2018-10-21 14:03:28','Kriteria Sumber Air Minum'),
(6,'BAHAN_BAKAR','Bahan Bakar Masak',3,'LPG','Kompor Listrik','Minyak Tanah','Kayu Bakar',0,1,0,1,'2018-10-21 14:05:20',1,'2018-10-21 14:05:20','Kriteria Bahan Bakar Memasak'),
(7,'SUMBER_PENERANGAN','Sumber Penerangan',1,'Menggunakan Listrik','Petromak','Lampu Ublik','Tidak Menggunakan Listrik',0,1,0,1,'2018-10-21 14:06:20',1,'2018-10-21 14:06:20','Kriteria Sumber Penerangan Utama'),
(8,'PENDAPATAN','Pendapatan per Bulan',4,'1500000','1000000','500000','300000',1,1,0,1,'2018-10-21 14:07:18',1,'2018-10-21 14:07:18','Kriteria Pendapatan per Bulan');

/*Table structure for table `tblevel` */

DROP TABLE IF EXISTS `tblevel`;

CREATE TABLE `tblevel` (
  `idlevel` int(9) NOT NULL AUTO_INCREMENT,
  `kodelevel` varchar(25) DEFAULT NULL,
  `namalevel` varchar(100) DEFAULT NULL,
  `isactive` tinyint(1) DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0',
  `createdby` int(9) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(9) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idlevel`),
  KEY `fk_iduser_level` (`createdby`),
  CONSTRAINT `fk_iduser_level` FOREIGN KEY (`createdby`) REFERENCES `tbuser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tblevel` */

insert  into `tblevel`(`idlevel`,`kodelevel`,`namalevel`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values 
(1,'ADMINISTRATOR','Administrator',1,0,1,'2018-08-26 18:51:06',NULL,NULL,''),
(2,'PENDAMPING','Pendamping',1,0,1,'2018-08-26 18:45:34',NULL,NULL,''),
(3,'KOORDINATOR','Koordinator',1,0,1,'2018-08-26 18:45:45',NULL,NULL,'');

/*Table structure for table `tbuser` */

DROP TABLE IF EXISTS `tbuser`;

CREATE TABLE `tbuser` (
  `iduser` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `idlevel` int(9) DEFAULT NULL,
  `isactive` tinyint(1) DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0',
  `createdby` int(9) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(9) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_modifiedby_user` (`modifiedby`),
  KEY `fk_createdby_user` (`createdby`),
  KEY `fk_idlevel_user` (`idlevel`),
  CONSTRAINT `fk_createdby_user` FOREIGN KEY (`createdby`) REFERENCES `tbuser` (`iduser`),
  CONSTRAINT `fk_idlevel_user` FOREIGN KEY (`idlevel`) REFERENCES `tblevel` (`idlevel`),
  CONSTRAINT `fk_modifiedby_user` FOREIGN KEY (`modifiedby`) REFERENCES `tbuser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`iduser`,`username`,`password`,`nama`,`alamat`,`email`,`nohp`,`idlevel`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values 
(1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator','','','',1,1,0,NULL,NULL,1,'2018-09-30 00:33:30','');

/* Function  structure for function  `calcX` */

/*!50003 DROP FUNCTION IF EXISTS `calcX` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `calcX`(id INT) RETURNS decimal(18,6)
    DETERMINISTIC
BEGIN
  DECLARE xValue DECIMAL(18,6);
    select SQRT(SUM(POW(nilaialias,2)))INTO xValue FROM tbdatadetail d
	JOIN tbdata m ON (d.`iddata` = m.iddata)
	 where idkriteria = id;
 
  RETURN xValue;
  END */$$
DELIMITER ;

/*Table structure for table `viewlistdata` */

DROP TABLE IF EXISTS `viewlistdata`;

/*!50001 DROP VIEW IF EXISTS `viewlistdata` */;
/*!50001 DROP TABLE IF EXISTS `viewlistdata` */;

/*!50001 CREATE TABLE  `viewlistdata`(
 `iddata` int(9) ,
 `no` varchar(25) ,
 `nama` varchar(255) ,
 `ibu` varchar(25) ,
 `norek` varchar(25) ,
 `nokk` varchar(25) ,
 `alamat` varchar(50) ,
 `isvalid` tinyint(4) ,
 `isactive` tinyint(4) ,
 `isdelete` tinyint(4) ,
 `keterangan` varchar(255) 
)*/;

/*Table structure for table `viewlistdatadetail` */

DROP TABLE IF EXISTS `viewlistdatadetail`;

/*!50001 DROP VIEW IF EXISTS `viewlistdatadetail` */;
/*!50001 DROP TABLE IF EXISTS `viewlistdatadetail` */;

/*!50001 CREATE TABLE  `viewlistdatadetail`(
 `iddetail` int(9) ,
 `iddata` int(9) ,
 `no` varchar(25) ,
 `nama` varchar(255) ,
 `idkriteria` int(9) ,
 `namakriteria` varchar(255) ,
 `nilai` varchar(255) ,
 `nilaiinput` varchar(255) ,
 `nilaialias` int(9) 
)*/;

/*Table structure for table `viewlistkriteria` */

DROP TABLE IF EXISTS `viewlistkriteria`;

/*!50001 DROP VIEW IF EXISTS `viewlistkriteria` */;
/*!50001 DROP TABLE IF EXISTS `viewlistkriteria` */;

/*!50001 CREATE TABLE  `viewlistkriteria`(
 `idkriteria` int(9) ,
 `kodekriteria` varchar(50) ,
 `namakriteria` varchar(255) ,
 `bobot` int(9) ,
 `sangatmampu` varchar(255) ,
 `cukupmampu` varchar(255) ,
 `tidakmampu` varchar(255) ,
 `sangattidakmampu` varchar(255) ,
 `isactive` tinyint(1) ,
 `isnumeric` tinyint(1) ,
 `keterangan` varchar(255) 
)*/;

/*Table structure for table `viewlistlevel` */

DROP TABLE IF EXISTS `viewlistlevel`;

/*!50001 DROP VIEW IF EXISTS `viewlistlevel` */;
/*!50001 DROP TABLE IF EXISTS `viewlistlevel` */;

/*!50001 CREATE TABLE  `viewlistlevel`(
 `idlevel` int(9) ,
 `kodelevel` varchar(25) ,
 `namalevel` varchar(100) ,
 `isactive` tinyint(1) ,
 `keterangan` varchar(255) 
)*/;

/*Table structure for table `viewlistreportdata` */

DROP TABLE IF EXISTS `viewlistreportdata`;

/*!50001 DROP VIEW IF EXISTS `viewlistreportdata` */;
/*!50001 DROP TABLE IF EXISTS `viewlistreportdata` */;

/*!50001 CREATE TABLE  `viewlistreportdata`(
 `nama` varchar(255) ,
 `namakriteria` varchar(255) ,
 `nilai` varchar(255) 
)*/;

/*Table structure for table `viewlistuser` */

DROP TABLE IF EXISTS `viewlistuser`;

/*!50001 DROP VIEW IF EXISTS `viewlistuser` */;
/*!50001 DROP TABLE IF EXISTS `viewlistuser` */;

/*!50001 CREATE TABLE  `viewlistuser`(
 `iduser` int(9) ,
 `username` varchar(25) ,
 `password` varchar(255) ,
 `nama` varchar(255) ,
 `alamat` varchar(255) ,
 `email` varchar(255) ,
 `nohp` varchar(255) ,
 `isactive` tinyint(1) ,
 `idlevel` int(9) ,
 `kodelevel` varchar(25) ,
 `namalevel` varchar(100) ,
 `keterangan` varchar(255) 
)*/;

/*Table structure for table `viewrangekriteria` */

DROP TABLE IF EXISTS `viewrangekriteria`;

/*!50001 DROP VIEW IF EXISTS `viewrangekriteria` */;
/*!50001 DROP TABLE IF EXISTS `viewrangekriteria` */;

/*!50001 CREATE TABLE  `viewrangekriteria`(
 `idkriteria` int(9) ,
 `kemampuan` varchar(255) ,
 `keterangan` varchar(11) ,
 `alias` int(1) 
)*/;

/*View structure for view viewlistdata */

/*!50001 DROP TABLE IF EXISTS `viewlistdata` */;
/*!50001 DROP VIEW IF EXISTS `viewlistdata` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistdata` AS select `tbdata`.`iddata` AS `iddata`,`tbdata`.`no` AS `no`,`tbdata`.`nama` AS `nama`,`tbdata`.`ibu` AS `ibu`,`tbdata`.`norek` AS `norek`,`tbdata`.`nokk` AS `nokk`,`tbdata`.`alamat` AS `alamat`,`tbdata`.`isvalid` AS `isvalid`,`tbdata`.`isactive` AS `isactive`,`tbdata`.`isdelete` AS `isdelete`,`tbdata`.`keterangan` AS `keterangan` from `tbdata` where (`tbdata`.`isdelete` = 0) */;

/*View structure for view viewlistdatadetail */

/*!50001 DROP TABLE IF EXISTS `viewlistdatadetail` */;
/*!50001 DROP VIEW IF EXISTS `viewlistdatadetail` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistdatadetail` AS select `d`.`iddetail` AS `iddetail`,`d`.`iddata` AS `iddata`,`m`.`no` AS `no`,`m`.`nama` AS `nama`,`d`.`idkriteria` AS `idkriteria`,`k`.`namakriteria` AS `namakriteria`,`d`.`nilai` AS `nilai`,if((`d`.`nilai` = 1),`k`.`sangatmampu`,if((`d`.`nilai` = 2),`k`.`cukupmampu`,if((`d`.`nilai` = 3),`k`.`tidakmampu`,if((`d`.`nilai` = 4),`k`.`sangattidakmampu`,`d`.`nilai`)))) AS `nilaiinput`,`d`.`nilaialias` AS `nilaialias` from ((`tbdatadetail` `d` join `tbdata` `m` on((`d`.`iddata` = `m`.`iddata`))) join `tbkriteria` `k` on((`d`.`idkriteria` = `k`.`idkriteria`))) where (`m`.`isdelete` = 0) */;

/*View structure for view viewlistkriteria */

/*!50001 DROP TABLE IF EXISTS `viewlistkriteria` */;
/*!50001 DROP VIEW IF EXISTS `viewlistkriteria` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistkriteria` AS select `k`.`idkriteria` AS `idkriteria`,`k`.`kodekriteria` AS `kodekriteria`,`k`.`namakriteria` AS `namakriteria`,`k`.`Bobot` AS `bobot`,`k`.`sangatmampu` AS `sangatmampu`,`k`.`cukupmampu` AS `cukupmampu`,`k`.`tidakmampu` AS `tidakmampu`,`k`.`sangattidakmampu` AS `sangattidakmampu`,`k`.`isactive` AS `isactive`,`k`.`isnumeric` AS `isnumeric`,`k`.`keterangan` AS `keterangan` from `tbkriteria` `k` where (`k`.`isdelete` = 0) order by `k`.`idkriteria` */;

/*View structure for view viewlistlevel */

/*!50001 DROP TABLE IF EXISTS `viewlistlevel` */;
/*!50001 DROP VIEW IF EXISTS `viewlistlevel` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistlevel` AS select `l`.`idlevel` AS `idlevel`,`l`.`kodelevel` AS `kodelevel`,`l`.`namalevel` AS `namalevel`,`l`.`isactive` AS `isactive`,`l`.`keterangan` AS `keterangan` from `tblevel` `l` where (`l`.`isdelete` = 0) */;

/*View structure for view viewlistreportdata */

/*!50001 DROP TABLE IF EXISTS `viewlistreportdata` */;
/*!50001 DROP VIEW IF EXISTS `viewlistreportdata` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistreportdata` AS select `m`.`nama` AS `nama`,`k`.`namakriteria` AS `namakriteria`,if((`d`.`nilai` = 1),`k`.`sangatmampu`,if((`d`.`nilai` = 2),`k`.`cukupmampu`,if((`d`.`nilai` = 3),`k`.`tidakmampu`,if((`d`.`nilai` = 4),`k`.`sangattidakmampu`,`d`.`nilai`)))) AS `nilai` from ((`tbdata` `m` join `tbdatadetail` `d` on((`d`.`iddata` = `m`.`iddata`))) join `tbkriteria` `k` on((`d`.`idkriteria` = `k`.`idkriteria`))) where ((`m`.`isvalid` = 1) and (`m`.`isactive` = 1) and (`m`.`isdelete` = 0)) order by `m`.`nama` asc */;

/*View structure for view viewlistuser */

/*!50001 DROP TABLE IF EXISTS `viewlistuser` */;
/*!50001 DROP VIEW IF EXISTS `viewlistuser` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistuser` AS select `u`.`iduser` AS `iduser`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama` AS `nama`,`u`.`alamat` AS `alamat`,`u`.`email` AS `email`,`u`.`nohp` AS `nohp`,`u`.`isactive` AS `isactive`,`l`.`idlevel` AS `idlevel`,`l`.`kodelevel` AS `kodelevel`,`l`.`namalevel` AS `namalevel`,`u`.`keterangan` AS `keterangan` from (`tbuser` `u` join `tblevel` `l` on((`u`.`idlevel` = `l`.`idlevel`))) where (`u`.`isdelete` = 0) order by `u`.`iduser` */;

/*View structure for view viewrangekriteria */

/*!50001 DROP TABLE IF EXISTS `viewrangekriteria` */;
/*!50001 DROP VIEW IF EXISTS `viewrangekriteria` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewrangekriteria` AS select `tbkriteria`.`idkriteria` AS `idkriteria`,`tbkriteria`.`sangatmampu` AS `kemampuan`,'SangatMampu' AS `keterangan`,1 AS `alias` from `tbkriteria` union all select `tbkriteria`.`idkriteria` AS `idkriteria`,`tbkriteria`.`cukupmampu` AS `kemampuan`,'CukupMampu' AS `keterangan`,2 AS `alias` from `tbkriteria` union all select `tbkriteria`.`idkriteria` AS `idkriteria`,`tbkriteria`.`tidakmampu` AS `kemampuan`,'TidakMampu' AS `keterangan`,3 AS `alias` from `tbkriteria` union all select `tbkriteria`.`idkriteria` AS `idkriteria`,`tbkriteria`.`sangattidakmampu` AS `kemampuan`,'SangatTidak Mampu' AS `keterangan`,4 AS `alias` from `tbkriteria` order by `idkriteria` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
