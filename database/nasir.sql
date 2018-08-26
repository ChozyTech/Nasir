/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.5.25 : Database - nasir
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
  `kota` varchar(255) DEFAULT NULL,
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
  CONSTRAINT `fk_createdby_user` FOREIGN KEY (`createdby`) REFERENCES `tbuser` (`iduser`),
  CONSTRAINT `fk_modifiedby_user` FOREIGN KEY (`modifiedby`) REFERENCES `tbuser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`iduser`,`username`,`password`,`nama`,`alamat`,`email`,`nohp`,`kota`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator','','','','',1,0,NULL,NULL,NULL,NULL,'');

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
 `kota` varchar(255) ,
 `isactive` tinyint(1) ,
 `keterangan` varchar(255) 
)*/;

/*View structure for view viewlistuser */

/*!50001 DROP TABLE IF EXISTS `viewlistuser` */;
/*!50001 DROP VIEW IF EXISTS `viewlistuser` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistuser` AS select `u`.`iduser` AS `iduser`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama` AS `nama`,`u`.`alamat` AS `alamat`,`u`.`email` AS `email`,`u`.`nohp` AS `nohp`,`u`.`kota` AS `kota`,`u`.`isactive` AS `isactive`,`u`.`keterangan` AS `keterangan` from `tbuser` `u` where (`u`.`isdelete` = 0) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
