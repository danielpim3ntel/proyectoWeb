/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.6-MariaDB : Database - baseProyecto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`baseProyecto` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `baseProyecto`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;
DROP TABLE IF EXISTS `horariosExamen`;
DROP TABLE IF EXISTS `asignacionExamen`;
DROP TABLE IF EXISTS `laboratorios`;
DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apeP` varchar(64) NOT NULL,
  `apeM` varchar(64) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `escuelaProcedencia` varchar(128) NOT NULL,
  `entidadProcedencia` varchar(128) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `promedio` decimal(4,2) NOT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `laboratorios` (
  `id_laboratorio` varchar(10) NOT NULL,
  `nombre_laboratorio` varchar(64) NOT NULL,
  PRIMARY KEY (`id_laboratorio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `grupos` (
  `id_grupo` varchar(10) NOT NULL,
  `semestre` varchar(64) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `horariosExamen` (
  `id_horario` varchar(10) NOT NULL,
  `id_grupo` varchar(10) NOT NULL ,
  `id_laboratorio` varchar(10) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id_horario`),
  FOREIGN KEY (`id_grupo`) REFERENCES grupos(`id_grupo`),
  FOREIGN KEY (`id_laboratorio`) REFERENCES laboratorios(`id_laboratorio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `asignacionExamen` (
  `id_Examen` varchar(10) NOT NULL,
  `boleta` varchar(10) NOT NULL,
  `id_horario` varchar(10) NOT NULL,
  PRIMARY KEY (`id_Examen`),
  FOREIGN KEY (`boleta`) REFERENCES alumno(`boleta`),
  FOREIGN KEY (`id_horario`) REFERENCES horariosExamen(`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*Data for the table `laboratorios` */
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('1','Computacion 1');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('2','Computacion 2');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('3','Computacion 3');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('4','Computacion 4');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('5','Computacion 5');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('6','Computacion 6');

/*Data for the table `grupos` */
insert into `grupos`(`id_grupo`,`semestre`) 
values ('1','primero');
insert into `grupos`(`id_grupo`,`semestre`) 
values ('2','segundo');
insert into `grupos`(`id_grupo`,`semestre`) 
values ('3','tercer');

/*Data for the table `horariosExamen` */
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('1','primero');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('2','segundo');
insert into `grupos`(`id_grupo`,`semestre`) 
values ('3','tercer 3');

/*Data for the table `alumno` */

insert  into `alumno`(`boleta`,`nombre`,`apeP`,`apeM`,`fechaNac`,`curp`,`correo`,`escuelaProcedencia`,`entidadProcedencia`,`telefono`,`promedio`) values 
('PE214587963','Juan','Pérez','Pérez','1999-04-07','SOHV000921MDFLRRA5','juan@juan.com','CECYT #5 Benito Juarez Garcia','Zacatecas','5537812213','8.75');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;