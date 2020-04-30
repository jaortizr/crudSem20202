/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.6-MariaDB : Database - sem20202
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sem20202` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sem20202`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `primerApe` varchar(64) NOT NULL,
  `segundoApe` varchar(64) DEFAULT NULL,
  `genero` varchar(2) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `contrasena` varchar(32) NOT NULL,
  `auditoria` datetime NOT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `alumno` */

insert  into `alumno`(`boleta`,`nombre`,`primerApe`,`segundoApe`,`genero`,`correo`,`fechaNac`,`contrasena`,`auditoria`) values 
('2020630001','Juan','Pérez','Pérez','M','juan@juan.com','1999-04-07','d8578edf8458ce06fbc5bb76a58c5ca4','2020-04-07 17:58:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
