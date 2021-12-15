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
values ('Lab1','Computacion 1');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('Lab2','Computacion 2');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('Lab3','Computacion 3');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('Lab4','Computacion 4');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('Lab5','Computacion 5');
insert into `laboratorios`(`id_laboratorio`,`nombre_laboratorio`) 
values ('Lab6','Computacion 6');

/*Data for the table `grupos` */
insert into `grupos`(`id_grupo`,`semestre`) 
values ('G1','2022/2');
insert into `grupos`(`id_grupo`,`semestre`) 
values ('G2','2023/1');


/*Data for the table `horariosExamen` */
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E1','G1','Lab1','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E2','G1',`Lab2`,`21-01-05 10:00:00 AM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E3','G1','Lab3','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E4','G1',`Lab4`,`21-01-05 10:00:00 AM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E5','G1','Lab5','21-01-05 10:00:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E6','G1',`Lab6`,`21-01-05 10:00:00 AM`);

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E7','G1','Lab1','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E8','G1',`Lab2`,`21-01-05 11:45:00 AM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E9','G1','Lab3','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E10','G1',`Lab4`,`21-01-05 11:45:00 AM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E11','G1','Lab5','21-01-05 11:45:00 AM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E12','G1',`Lab6`,`21-01-05 11:45:00 AM`);

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E13','G2','Lab1','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E14','G2',`Lab2`,`21-01-05 01:30:00 PM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)  
values ('E15','G2','Lab3','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E16','G2',`Lab4`,`21-01-05 01:30:00 PM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E17','G2','Lab5','21-01-05 01:30:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E18','G2',`Lab6`,`21-01-05 01:30:00 PM`);

insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E19','G2','Lab1','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E20','G2',`Lab2`,`21-01-05 03:15:00 PM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E21','G2','Lab3','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E22','G2',`Lab4`,`21-01-05 03:15:00 PM`);
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`) 
values ('E23','G2','Lab5','21-01-05 03:15:00 PM');
insert into `horariosExamen`(`id_horario`,`id_grupo`,`id_laboratorio`,`hora`)
values ('E24','G2',`Lab6`,`21-01-05 03:15:00 PM`);

/*Data for the table `alumno` */



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;



