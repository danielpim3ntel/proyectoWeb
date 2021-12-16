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





DROP TABLE IF EXISTS `grupos`;
DROP TABLE IF EXISTS `asignacionExamen`;
DROP TABLE IF EXISTS `horariosExamen`;
DROP TABLE IF EXISTS `alumno`;
DROP TABLE IF EXISTS `laboratorios`;
CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apePaterno` varchar(64) NOT NULL,
  `apeMaterno` varchar(64) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `genero` varchar(10) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(40) NOT NULL,
  `alcaldia` varchar(40) NOT NULL,
  `codigop` varchar(5) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `escuelaProcedencia` varchar(128) NOT NULL,
  `entidadProcedencia` varchar(128) NOT NULL,
  `promedio` decimal(4,2) NOT NULL,
  `opcion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`boleta`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `laboratorios` (
  `id_laboratorio` varchar(2) NOT NULL,
  `nombre_laboratorio` varchar(64) NOT NULL,
  PRIMARY KEY (`id_laboratorio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `grupos` (
  `id_grupo` varchar(2) NOT NULL,
  `grupo` varchar(64) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `horariosExamen` (
  `id_horario` varchar(3) NOT NULL,
  `id_grupo` varchar(2) NOT NULL ,
  `id_laboratorio` varchar(2) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id_horario`),
  FOREIGN KEY (`id_grupo`) REFERENCES grupos(`id_grupo`),
  FOREIGN KEY (`id_laboratorio`) REFERENCES laboratorios(`id_laboratorio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `asignacionExamen` (
  `id_Examen`  INT NOT NULL AUTO_INCREMENT,
  `boleta` varchar(10) NOT NULL,
  `id_horario` varchar(3) NOT NULL,
  PRIMARY KEY (`id_Examen`),
  FOREIGN KEY (`boleta`) REFERENCES alumno(`boleta`),
  FOREIGN KEY (`id_horario`) REFERENCES horariosExamen(`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*Data for the table `laboratorios` ESTA SE QUEDA ESTATICA */
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L1','Laboratorio Computacion 1');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L2','Laboratorio Computacion 2');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L3','Laboratorio Computacion 3');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L4','Laboratorio Computacion 4');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L5','Laboratorio Computacion 5');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('L6','Laboratorio Computacion 6');

/*Data for the table `grupos` ESTA SE QUEDA ESTATICA */
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G1','Grupo 01');
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G2','Grupo 02');
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G3','Grupo 03');
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G4','Grupo 04');
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G5','Grupo 05');
insert into `grupos`(`id_grupo`,`grupo`) 
values ('G6','Grupo 06');


/*Data for the table `horariosExamen` */
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H1','G1','L1','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H2','G2','L2','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H3','G3','L3','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H4','G4','L4','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H5','G5','L5','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H6','G6','L6','21-01-05 10:00:00 AM');

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H7','G1','L1','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H8','G2','L2','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H9','G3','L3','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H10','G4','L4','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H11','G5','L5','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H12','G6','L6','21-01-05 11:45:00 AM');

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H13','G1','L1','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H14','G2','L2','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H15','G3','L3','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H16','G4','L4','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H17','G5','L5','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H18','G6','L6','21-01-05 01:30:00 PM');

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H19','G1','L1','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H20','G2','L2','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H21','G3','L3','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H22','G4','L4','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('H23','G5','L5','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('H24','G6','L6','21-01-05 03:15:00 PM');

/*Data for the table `alumno` */
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


