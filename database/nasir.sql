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

/*Table structure for table `tbdata` */

DROP TABLE IF EXISTS `tbdata`;

CREATE TABLE `tbdata` (
  `iddata` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT '1',
  `isdelete` tinyint(4) DEFAULT '0',
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddata`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbdatadetail` */

DROP TABLE IF EXISTS `tbdatadetail`;

CREATE TABLE `tbdatadetail` (
  `iddetail` int(9) NOT NULL AUTO_INCREMENT,
  `iddata` int(9) NOT NULL,
  `idkriteria` int(9) NOT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddetail`),
  KEY `fk_iddata_datadetail` (`iddata`),
  KEY `fk_idkriteria_datadetail` (`idkriteria`),
  CONSTRAINT `fk_iddata_datadetail` FOREIGN KEY (`iddata`) REFERENCES `tbdata` (`iddata`),
  CONSTRAINT `fk_idkriteria_datadetail` FOREIGN KEY (`idkriteria`) REFERENCES `tbkriteria` (`idkriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbkriteria` */

DROP TABLE IF EXISTS `tbkriteria`;

CREATE TABLE `tbkriteria` (
  `idkriteria` int(9) NOT NULL AUTO_INCREMENT,
  `kodekriteria` varchar(50) DEFAULT NULL,
  `namakriteria` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `viewlistkriteria` */

DROP TABLE IF EXISTS `viewlistkriteria`;

/*!50001 DROP VIEW IF EXISTS `viewlistkriteria` */;
/*!50001 DROP TABLE IF EXISTS `viewlistkriteria` */;

/*!50001 CREATE TABLE  `viewlistkriteria`(
 `idkriteria` int(9) ,
 `kodekriteria` varchar(50) ,
 `namakriteria` varchar(255) ,
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

/*View structure for view viewlistkriteria */

/*!50001 DROP TABLE IF EXISTS `viewlistkriteria` */;
/*!50001 DROP VIEW IF EXISTS `viewlistkriteria` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistkriteria` AS select `k`.`idkriteria` AS `idkriteria`,`k`.`kodekriteria` AS `kodekriteria`,`k`.`namakriteria` AS `namakriteria`,`k`.`sangatmampu` AS `sangatmampu`,`k`.`cukupmampu` AS `cukupmampu`,`k`.`tidakmampu` AS `tidakmampu`,`k`.`sangattidakmampu` AS `sangattidakmampu`,`k`.`isactive` AS `isactive`,`k`.`isnumeric` AS `isnumeric`,`k`.`keterangan` AS `keterangan` from `tbkriteria` `k` where (`k`.`isdelete` = 0) order by `k`.`idkriteria` */;

/*View structure for view viewlistlevel */

/*!50001 DROP TABLE IF EXISTS `viewlistlevel` */;
/*!50001 DROP VIEW IF EXISTS `viewlistlevel` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistlevel` AS select `l`.`idlevel` AS `idlevel`,`l`.`kodelevel` AS `kodelevel`,`l`.`namalevel` AS `namalevel`,`l`.`isactive` AS `isactive`,`l`.`keterangan` AS `keterangan` from `tblevel` `l` where (`l`.`isdelete` = 0) */;

/*View structure for view viewlistuser */

/*!50001 DROP TABLE IF EXISTS `viewlistuser` */;
/*!50001 DROP VIEW IF EXISTS `viewlistuser` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewlistuser` AS select `u`.`iduser` AS `iduser`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama` AS `nama`,`u`.`alamat` AS `alamat`,`u`.`email` AS `email`,`u`.`nohp` AS `nohp`,`u`.`isactive` AS `isactive`,`l`.`idlevel` AS `idlevel`,`l`.`kodelevel` AS `kodelevel`,`l`.`namalevel` AS `namalevel`,`u`.`keterangan` AS `keterangan` from (`tbuser` `u` join `tblevel` `l` on((`u`.`idlevel` = `l`.`idlevel`))) where (`u`.`isdelete` = 0) order by `u`.`iduser` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
